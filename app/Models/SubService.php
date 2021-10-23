<?php

namespace App\Models;

use App\Http\Traits\Sortable;
use App\Http\Traits\UrlUnique;
use App\Services\Notify\Facades\Notify;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use App\Http\Traits\HasTranslations;

class SubService extends Model
{
    use HasTranslations, UrlUnique,Sortable;
    public $translatable = ['title'];

    private static function cacheKey(){
        return 'sub_service';
    }
    public static function clearCaches(){
        Cache::forget(self::cacheKey());
    }
    public function option()
    {
        return $this->hasMany(SubServicesCriterion::class,'sub_service_id', 'id');
    }

    public static function adminList($parent_id){
        return self::select('id', 'title', 'active', 'created_at')->where('parent_id', $parent_id)->sort()->get();
    }
    public static function getSubServices($parent_id){
        return self::where(['parent_id'=> $parent_id,'active'=>1])->with('option')->sort()->get();
    }
    public static function action($model, $inputs) {
        self::clearCaches();
        if (empty($model)) {
            $model = new self;
            $action = 'add';
        }
        else {
            $action = 'edit';
        }
        $model['active'] = (int) !empty($inputs['active']);
        $model['parent_id'] = $inputs['parent_id'];
        merge_model($inputs, $model, ['title']);
        if($model->save()){
          if(!empty($inputs['criterions']) && count($inputs['criterions'])){
             SubServicesCriterion::where('sub_service_id',$model->id)->delete();
              foreach ($inputs['criterions'] as $criterion){
                  $data['criterion'] = $criterion;
                  $data['parent_id'] = $model->id;
                  if (SubServicesCriterion::action(null, $data)) {
                      Notify::success('Условия для комнат успешно добавлен.');
                      continue;
                  } else {
                      Notify::get('error_occurred');
                      continue;
                  }
              }
          }else{
              SubServicesCriterion::where('sub_service_id',$model->id)->delete();
          }
          return true;

        }
        return false;

    }

    public static function getItem($id){
        return self::with('option')->where('id',$id)->firstOrFail();
    }
    public static function getItemSite($url) {
        return self::where(['url'=>$url, 'active'=>1])->firstOrFail();
    }

    public static function deleteItem($model){
        self::clearCaches();

        return $model->delete();
    }
}
