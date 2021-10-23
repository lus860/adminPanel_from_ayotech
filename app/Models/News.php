<?php

namespace App\Models;

use App\Http\Traits\UrlUnique;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use App\Http\Traits\HasTranslations;

class News extends Model
{
    use HasTranslations, UrlUnique;
    public $translatable = ['title', 'short', 'description', 'seo_title', 'seo_description', 'seo_keywords'];

    private static function cacheKey(){
        return 'news';
    }

    private static function cacheKeyHome(){
        return 'home_news';
    }

    public static function clearCaches(){
        Cache::forget(self::cacheKey());
        Cache::forget(self::cacheKeyHome());
    }

    public static function getNews(){

            return self::select('title', 'short', 'created_at', 'image_cover', 'url')->where('active',1)->sort()->get();

    }

    public static function adminList(){
        return self::select('id', 'title', 'active', 'created_at')->sort()->get();
    }

    public static function homeList(){
             return self::select('title', 'short', 'created_at', 'image', 'url')->where('active',1)->orderBy('created_at','desc')->limit(3)->get();

    }

    public function scopeSort($q){
        return $q->orderBy('created_at', 'desc');
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
        merge_model($inputs, $model, ['title', 'description', 'short', 'seo_title', 'seo_description', 'seo_keywords']);
        $resizes = [
            [
                'width'=>1440,
                'height'=>786,
                'upsize'=>true,
            ]
        ];
        if($image = upload_image('image', 'u/news/', $resizes, ($action=='edit' && !empty($model->image))?$model->image:false)) $model->image = $image;

        $resizes_cover = [
            [
                'width'=>339,
                'height'=>197,
                'upsize'=>true,
            ]
        ];
        if($image_cover = upload_image('image_cover', 'u/news/', $resizes_cover, ($action=='edit' && !empty($model->image_cover))?$model->image_cover:false)) $model->image_cover = $image_cover;

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
        $path = public_path('u/news/');
        if (!empty($model->image)) File::delete($path.$model->image);
        Gallery::clear('news_item', $model->id);
        VideoGallery::clear('news_item', $model->id);
        return $model->delete();
    }

    public function getYoutubeEmbedAttribute()
    {
        if (is_null($this->iframe)) {
            return null;
        }

        $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_-]+)\??/i';
        $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))([a-zA-Z0-9_-]+)/i';

        if (preg_match($longUrlRegex, $this->iframe, $matches)) {
            $youtube_id = $matches[count($matches) - 1];
        }

        if (preg_match($shortUrlRegex, $this->iframe, $matches)) {
            $youtube_id = $matches[count($matches) - 1];
        }

        if (!isset($youtube_id)) {
            return null;
        }

        return 'https://www.youtube.com/embed/' . $youtube_id;
    }
}
