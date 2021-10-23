<?php

namespace App\Models;

use App\Http\Traits\HasTranslations;
use App\Http\Traits\Sortable;
use App\Http\Traits\UrlUnique;
use App\Services\Notify\Facades\Notify;
use Illuminate\Database\Eloquent\Model;

class SubServicesCriterion extends Model
{

    protected $table = 'sub_services_criterions';

    public static function criterionlist($id){

      return self::select('id', 'title','price', 'active', 'created_at')->where('sub_service_id', $id)->sort()->get();
    }

    use HasTranslations, Sortable;
    public $translatable = ['title'];
    public static function action($model, $inputs) {
        if (empty($model)) {
            $model = new self;
            $action = 'add';
        }
        else {
            $action = 'edit';
        }
        $model['sub_service_id'] =  $inputs['parent_id'];
        $model['price'] = $inputs['criterion']['price'];
        merge_model($inputs['criterion'], $model, ['title']);
        return $model->save();


    }

}
