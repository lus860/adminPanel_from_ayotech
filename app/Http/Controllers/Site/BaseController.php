<?php

namespace App\Http\Controllers\Site;

use App\Models\Banner;
use App\Models\Catalogue;
use App\Models\Language;
use App\Models\Order;
use App\Models\Page;
use App\Models\Rooms;
use App\Models\User;
use App\Services\Basket\Facades\Basket;
use App\Services\PageManager\Facades\PageManager;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;

class BaseController extends Controller
{
    protected $shared = [];

    protected function view_share() {
        if (count($this->shared)) return false;
        $this->shared['locale'] = app()->getLocale();
        $this->shared['languages'] = Language::getLanguages();
        $other_languages = [];
        foreach($this->shared['languages'] as $language) {
            if ($language->iso == $this->shared['locale']) $this->shared['current_language'] = $language;
            else $other_languages[] = $language;
        }
        $this->shared['exchanges'] = Banner::get('exchange')->exchange;
        $this->shared['other_languages'] = $other_languages;
        $this->shared['homepage'] = PageManager::getHomePage();
        $this->shared['menu_pages'] = Page::getMenu();
        $this->shared['footer_pages'] = Page::getfooterpages();
        $this->shared['current_url'] = url()->current();
        $this->shared['info'] = Banner::get('info');
        $this->shared['suffix'] =  $this->shared['info']->seo->title_suffix;
        $this->shared['contact'] =  Banner::get('contact');
        $this->shared['contacts'] = $this->shared['info']->contacts;
        $this->shared['payments'] = collect($this->shared['info']->payments)->filter(function($item){
            return $item->image && $item->active;
        });
        $this->shared['socials'] = collect($this->shared['info']->socials)->filter(function($item){
            return $item->icon && $item->url;
        });
        view()->share($this->shared);
        return true;
    }
    public function __construct(){
        $this->middleware(function($request, $next){
            $this->view_share();
            return $next($request);
        });
    }
    protected function renderSEO($item) {
        $seo = [
            'title' => $item->seo_title,
            'keywords' => $item->seo_keywords,
            'description' => $item->seo_description,
        ];
        if (!$seo['title']) {
            if ($item->static == 'home') {
                $title = '';
            }else{
                $title = $item->title;
            }
            if ($this->shared['suffix']) {
                if ($title && $item->static != 'home') $title.= ' - ';
                $title.=$this->shared['suffix'];
            }
            $seo['title'] = $title;
        }
        return $seo;
    }

    protected function staticSEO($title){
        $seo = ['title' => $title];
        if ($this->shared['suffix']) {
            if ($seo['title']) $seo['title'] .= ' - ';
            $seo['title'].= $this->shared['suffix'];
        }
        return $seo;
    }
}
