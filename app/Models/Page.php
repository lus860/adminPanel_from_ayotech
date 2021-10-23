<?php

namespace App\Models;

use App\Http\Traits\UrlUnique;
use Illuminate\Support\Facades\Cache;
use App\Http\Traits\Sortable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use App\Http\Traits\HasTranslations;
use \PageManager;

class Page extends Model
{
    use HasTranslations, Sortable, UrlUnique;

    protected $sortableDesc = false;
    public $translatable = ['title', 'content', 'seo_title', 'seo_description', 'seo_keywords'];

    //region Cache
    private static function cacheKeyMenu(){
        return 'menu';
    }

    private static function cacheKeyStatic(){
        return 'pages_static';
    }
    public function childes(){
        return $this->hasMany(Page::class,'parent_id','id');
    }

    public static function clearCaches(){
        Cache::forget(self::cacheKeyMenu());
        Cache::forget(self::cacheKeyStatic());
    }

    public static function getStaticPages() {
        return Cache::rememberForever(self::cacheKeyStatic(), function(){
            return self::select('id','title', 'url', 'static','image','icon','to_slider', 'active')->whereNotNull('static')->get();
        });
    }

    public static function getMenu(){
//        return Cache::rememberForever(self::cacheKeyMenu(), function(){
            return self::select('id', 'url', 'title', 'static')->where(['active'=>1, 'to_menu'=>1])->whereNull('parent_id')->with('childes')->sort()->get();
//        });
    }
    public static function getfooterpages(){
            return self::select('id', 'url', 'title', 'static','image','icon')->where(['active'=>1, 'to_slider'=>1])->sort()->get();
    }

    public static function adminList(){
        return self::select('id', 'title', 'active','image','icon','to_slider', 'static')->whereNull('parent_id')->sort()->get();
    }
    public static function adminSubList($id){
        return self::select('id', 'title', 'active','image','icon','to_slider', 'static','parent_id')->where('parent_id',$id)->sort()->get();
    }

    public static function getStaticPage($static){
        return self::where(['static'=>$static, 'active'=>1])->firstOrFail();
    }

    public static function getPage($id){
        return self::findOrFail($id);
    }

    public static function actionPage($model, $inputs) {
          if (empty($model)) {
            $model = new self;
            $ignore = false;
            $action = 'add';
            $model['sort'] = $model->sortValue();
        }
        else {
            $ignore = $model->id;
            $action = 'edit';
        }
        if (!empty($inputs['generate_url'])) {
            $url = self::url_unique($inputs['generated_url'], $ignore);
            if (PageManager::inUsedRoutes($url) && $url!=$model->url) $url = $url.'-2';
            $length = mb_strlen($url, 'UTF-8');
            if($length==1) $url = '-'.$url.'-';
            else if ($length==2) $url=$url.'-';
        }
        else {
            $url = $inputs['url'];
        }
        $model['url'] = $url;
        $model['parent_id']=$inputs['parent_id'];
        $model['title_content']=$inputs['title_content'];

        $model['to_menu'] = (int) !empty($inputs['to_menu']);
        $model['to_slider'] = (int) !empty($inputs['to_slider']);
        $model['active'] = (int) (!empty($inputs['active']) || ($action=='edit' && $model['static'] == PageManager::getHomePage()));
        $resizes = [
            [
                'width'=>1440,
                'height'=>null,
                'upsize'=>true,
                'method'=>'resize'
            ]
        ];
     if($image = upload_image('image', 'u/pages/', $resizes, ($action=='edit' && !empty($model->image))?$model->image:false)) $model->image = $image;
//
//        $resizes_icon = [
//            [
//                'width'=>150,
//                'height'=>150,
//                'upsize'=>true,
//            ]
//        ];
        if(!empty($parent_id)){
            $model['parent_id']=$parent_id;
        }
      //  if($image_icon = upload_image('icon', 'u/pages/', $resizes_icon, ($action=='edit' && !empty($model->icon))?$model->icon:false)) $model->icon = $image_icon;

        //        if ($action == 'add' || !$model->static) {
//            $resizes = [
//                [
//                    'width'=>1920,
//                    'height'=>375,
//                    'upsize'=>true,
//                ]
//            ];
//            if($image = upload_image('image', 'u/pages/', $resizes, ($action=='edit' && !empty($model->image))?$model->image:false)) $model->image = $image;
//        }


        merge_model($inputs, $model, ['title', 'content', 'seo_title',  'seo_description','seo_keywords']);
        self::clearCaches();
        return $model->save();
    }

    public static function deletePage($model){
        self::clearCaches();
        if ($model->image) File::delete(public_path('u/pages/').$model->image);
        if ($model->icon) File::delete(public_path('u/pages/').$model->icon);
        Gallery::clear('pages', $model->id);
        VideoGallery::clear('pages', $model->id);
        return $model->delete();
    }
    /**
     * @return string|null
     */
    public function getYoutubeEmbedAttribute()
    {
        if (is_null($this->title_content)) {
            return null;
        }
        $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_-]+)\??/i';
        $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))([a-zA-Z0-9_-]+)/i';
        if (preg_match($longUrlRegex, $this->title_content, $matches)) {
            $youtube_id = $matches[count($matches) - 1];
        }
        if (preg_match($shortUrlRegex, $this->title_content, $matches)) {
            $youtube_id = $matches[count($matches) - 1];
        }
        if (!isset($youtube_id)) {
            return null;
        }
        return 'https://www.youtube.com/embed/' . $youtube_id;
    }

}
