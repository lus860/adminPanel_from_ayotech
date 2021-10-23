<?php

namespace App\Models;

use App\Http\Traits\HasTranslations;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class HomeCatalogue extends Model
{
    use HasTranslations;
    protected $table = 'home_catalogue';
    public $translatable = ['title', 'description'];

    private static function cacheKey(){
        return 'home_catalogue';
    }

    public static function siteList(){
        return Cache::rememberForever(self::cacheKey(), function(){
            return self::whereHas('catalogue', function($q){
                $q->where('active', 1);
            })->with('catalogue')->sort()->get();
        });
    }

    public static function getItem($id){
        return self::findOrFail($id);
    }

    public static function adminList(){
        return self::withCount(['catalogue'=>function($q){
            $q->where('active', 1);
        }])->sort()->get();
    }

    public static function clearCaches(){
        Cache::forget(self::cacheKey());
    }

    public static function action($model, $inputs) {
        self::clearCaches();
        merge_model($inputs, $model, ['title', 'description', 'catalogue_id']);
        $resizes = [
            [
                'upsize'=>true,
            ]
        ];
        if ($model->size == 1) {
            $resizes[0]['width'] = 480;
            $resizes[0]['height'] = 360;
        }
        else {
            $resizes[0]['width'] = 950;
            $resizes[0]['height'] = 350;
        }
        if($image = upload_image('image', 'u/home_catalogue/', $resizes, !empty($model->image)?$model->image:false)) $model->image = $image;
        return $model->save();
    }

    public function scopeSort($q) {
        return $q->orderBy('sort', 'asc')->orderBy('id', 'asc');
    }

    public function catalogue() {
        return $this->belongsTo('App\Models\Catalogue', 'catalogue_id', 'id');
    }
}
