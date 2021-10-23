<?php

namespace App\Models;

use App\Http\Traits\HasTranslations;
use App\Http\Traits\Sortable;
use App\Http\Traits\UrlUnique;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;

class Service extends Model
{
    use HasTranslations, UrlUnique, Sortable;
    public $translatable = ['title', 'description', 'seo_title', 'seo_description', 'seo_keywords'];

    private static function cacheKey(){
        return 'services';
    }


    public static function clearCaches(){
        Cache::forget(self::cacheKey());
    }

    public static function getServices(){

            return self::select('title', 'image','url')->where('active',1)->sort()->get();

    }

    public static function adminList(){
        return self::select('id', 'title', 'active', 'image', 'created_at')->sort()->get();
    }



    public static function action($model, $inputs) {
        self::clearCaches();
        if (empty($model)) {
            $model = new self;
            $action = 'add';
            $ignore = false;
        }
        else {
            $action = 'edit';
            $ignore = $model->id;
        }
        $model['active'] = (int) !empty($inputs['active']);
        if (!empty($inputs['generate_url'])) {
            $url = self::url_unique($inputs['generated_url'], $ignore);
        }
        else {
            $url = $inputs['url'];
        }
        $model['url'] = $url;
        merge_model($inputs, $model, ['title', 'description', 'seo_title', 'seo_description', 'seo_keywords']);
        $resizes = [
            [
                'width'=>100,
                'height'=>60,
                'upsize'=>true,
            ]
        ];
        if($image = upload_image('image', 'u/services/', $resizes, ($action=='edit' && !empty($model->image))?$model->image:false)) $model->image = $image;
        return $model->save();
    }

    public static function getItem($id){
        return self::findOrFail($id);
    }

    public static function getItemSite($url) {
        return self::where(['url'=>$url, 'active'=>1])->firstOrFail();
    }

    public static function deleteItem($model){
        self::clearCaches();
        $path = public_path('u/services/');
        if (!empty($model->image)) File::delete($path.$model->image);
        Gallery::clear('news_item', $model->id);
        VideoGallery::clear('news_item', $model->id);
        return $model->delete();
    }
}
