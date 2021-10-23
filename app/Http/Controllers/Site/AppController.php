<?php

namespace App\Http\Controllers\Site;

use App\Mail\Contact;
use App\Mail\Suggestions;
use App\Models\Banner;
use App\Models\Benefactor;
use App\Models\Catalogue;
use App\Models\Departament;
use App\Models\Director;
use App\Models\Gallery;
use App\Models\History;
use App\Models\HomeCatalogue;
use App\Models\MainSlide;
use App\Models\News;
use App\Models\Info;
use App\Models\Partners;
use App\Models\Page;
use App\Models\Product;
use App\Models\Rooms;
use App\Models\RoomsTypes;
use App\Models\Scientific;
use App\Models\Service;
use App\Models\Shopping;
use App\Models\Staff;
use App\Models\Statistics;
use App\Models\SubService;
use App\Models\SubServicesCriterion;
use App\Models\Vacancy;
use App\Models\VideoGallery;
use App\Services\Basket\Facades\Basket;
use App\Services\PageManager\Facades\PageManager;
use App\Services\PageManager\StaticPages;
use Illuminate\Http\Request;
use Illuminate\Session\TokenMismatchException;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AppController extends BaseController
{
    use StaticPages;

    protected function static_home($page)
    {
        $data = [];
        $data['current_page'] = $page['id'];
        $data['page'] = $page;
       // $data['home_news'] = News::homeList();
        $data['gallery'] = Gallery::where(['gallery' => 'gallery'])->orderBy('id', 'desc')->limit(8)->get();
       // $data['video_gallery'] = VideoGallery::where(['gallery' => 'gallery'])->orderBy('id', 'desc')->limit(8)->get();
       // $data['news'] = News::getNews();
        $data['home_banners'] = Banner::get('home');
       // $data['services'] = Service::getServices();
        $data['sliders'] = MainSlide::getHeaderSlides();
        $data['seo'] = $this->renderSEO($page);
        return view('site.pages.home', $data);
    }


    public function getservices($url)
    {

        $data['services'] = Service::where('url', $url)->firstOrFail();
        $data['ogdesc'] = str_limit(strip_tags($data['services']->description), 250);
        $data['current_page'] = get_page('services')->id ?? null;
        $data['sub_services'] = SubService::getSubServices($data['services']->id);
        $data['seo'] = $this->renderSEO($data['services']);
        return view('site.pages.services_item', $data);

    }




//end get director

    protected function static_about($page)
    {
        $data = [];
        $data['current_page'] = $page['id'];
        $data['pages'] = $page['id'];
        $data['banners'] = Banner::get('about');
        $data['gallery'] = Gallery::get('about');
        $data['video_gallery'] = VideoGallery::get('about');
        $data['pages'] = Page::getStaticPages()->whereNotIn('static', ['about', 'contact', 'home', 'news']);
        $data['seo'] = $this->renderSEO($page);
        return view('site.pages.about', $data);
    }

    protected function static_contact($page)
    {
        $data = [];
        $data['current_page'] = $page['title'];
        $data['page'] = $page;
        $data['banners'] = Banner::get('contact');
        $data['seo'] = $this->renderSEO($page);
        return view('site.pages.contact', $data);
    }

    protected function static_services($page)
    {
        $data = [];
        $data['current_page'] = $page['id'];
        $data['page'] = $page;
        $data['services'] = Service::getServices();
        $data['seo'] = $this->renderSEO($page);
        return view('site.pages.services', $data);
    }


    protected function dynamic_page($page)
    {
        $data = [];
        $data['current_page'] = $page['id'];
        $data['page'] = $page;
        $data['ogdesc'] = str_limit(strip_tags($data['page']->content), 250);
        $data['ogimage'] = '/u/pages/' . $data['page']->image;
        $data['gallery'] = Gallery::get('pages', $page->id);
        $data['video_gallery'] = VideoGallery::get('pages', $page->id);
        $data['seo'] = $this->renderSEO($page);
        return view('site.pages.dynamic_page', $data);
    }


    protected function static_news($page)
    {
        $data = [];
        $data['page'] = $page;
        $data['current_page'] = $page['id'];
        $data['items'] = News::getNews();
        $data['page'] = $page;
        $data['ogdesc'] = str_limit(strip_tags($data['items']->first()->short), 250);
        $data['ogimage'] = '/u/news/' . $data['items']->first()->image_cover;
        $data['banner'] = Banner::get('news');
        $data['gallery'] = Gallery::get('news');
        $data['video_gallery'] = VideoGallery::get('news');
        $data['seo'] = $this->renderSEO($page);

        return view('site.pages.news', $data);
    }

    public function news_item($url)
    {

        if (!is_active('news')) abort(404);
        $data = [];
        $data['current_page'] = get_page('news')->title ?? null;
        $data['item'] = News::getItemSite($url);
        $data['ogdesc'] = str_limit(strip_tags($data['item']->short), 250);
        $data['ogimage'] = '/u/news/' . $data['item']->image;
        $data['seo'] = $this->renderSEO($data['item']);
        $data['gallery'] = Gallery::get('news_item', $data['item']->id);
        $data['video_gallery'] = VideoGallery::get('news_item', $data['item']->id);
        $data['last_news'] = News::where('active', 1)->limit(4)->get();
        return view('site.pages.news_item', $data);
    }


//info


    protected function static_gallery($page)
    {

        $data['current_page'] = $page->id;
        $data['page'] = $page;
        $data['gallery'] = Gallery::where(['gallery' => 'gallery', 'key' => null])->orderBy('id', 'desc')->get();
        $data['video_gallery'] = VideoGallery::where(['gallery' => 'gallery', 'key' => null])->orderBy('id', 'desc')->get();
        $data['ogimage'] = 'u/gallery/' . $data['gallery']->first()->image;
        $data['seo'] = $this->renderSEO($page);
        return view('site.pages.gallery', $data);
    }


//serach
    public function search(Request $request)
    {

        $searchStr = '%' . escape_like(mb_strtolower($request['search'])) . '%';
        $pages = Page::query()->where('active', 1)->whereRaw('LOWER(`title`->"$.*") LIKE ?', [$searchStr])
            ->orwhereRaw('LOWER(`content`->"$.*") LIKE ?', [$searchStr])->get();

        $benefactor = Benefactor::query()->where('active', 1)->whereRaw('LOWER(`title`->"$.*") LIKE ?', [$searchStr])
            ->orwhereRaw('LOWER(`description`->"$.*") LIKE ?', [$searchStr])->get();

        $departament = Departament::query()->where('active', 1)->whereRaw('LOWER(`title`->"$.*") LIKE ?', [$searchStr])
            ->orwhereRaw('LOWER(`description`->"$.*") LIKE ?', [$searchStr])->get();

        $staff = Staff::query()->where('active', 1)->whereRaw('LOWER(`ns`->"$.*") LIKE ?', [$searchStr])
            ->orwhereRaw('LOWER(`desc`->"$.*") LIKE ?', [$searchStr])->get();

        $director = Director::query()->where('active', 1)->whereRaw('LOWER(`title`->"$.*") LIKE ?', [$searchStr])
            ->orwhereRaw('LOWER(`description`->"$.*") LIKE ?', [$searchStr])->get();

        $history = History::whereRaw('LOWER(`title`->"$.*") LIKE ?', [$searchStr])
            ->orwhereRaw('LOWER(`desc`->"$.*") LIKE ?', [$searchStr])->get();

        $news = News::query()->where('active', 1)->whereRaw('LOWER(`title`->"$.*") LIKE ?', [$searchStr])
            ->orwhereRaw('LOWER(`description`->"$.*") LIKE ?', [$searchStr])->get();

        $services = Service::query()->where('active', 1)->whereRaw('LOWER(`title`->"$.*") LIKE ?', [$searchStr])
            ->orwhereRaw('LOWER(`description`->"$.*") LIKE ?', [$searchStr])->get();

        $subservices = SubServicesCriterion::query()->where('active', 1)->whereRaw('LOWER(`title`->"$.*") LIKE ?', [$searchStr])
            ->orwhereRaw('LOWER(`price`->"$.*") LIKE ?', [$searchStr])->get();

        $statistics = Statistics::query()->where('active', 1)->whereRaw('LOWER(`title`->"$.*") LIKE ?', [$searchStr])
            ->orwhereRaw('LOWER(`description`->"$.*") LIKE ?', [$searchStr])->get();

        $vacancy = Vacancy::query()->where('active', 1)->whereRaw('LOWER(`title`->"$.*") LIKE ?', [$searchStr])
            ->orwhereRaw('LOWER(`desc`->"$.*") LIKE ?', [$searchStr])->get();


        $data = [
            'search' => $request['search'],
            'pages' => $pages,
            'benefactor' => $benefactor,
            'departament' => $departament,
            'director' => $director,
            'history' => $history,
            'news' => $news,
            'services' => $services,
            'subservices' => $subservices,
            'statistics' => $statistics,
            'vacancy' => $vacancy,
            'staff' => $staff,

        ];

        return view('site.pages.search', $data);
    }


//end serach


    /**
     * @throws TokenMismatchException
     */
    public function sendMail(Request $request)
    {

        $redirect = redirect(page('contact') . '#contact-form');
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|mail|max:255',
        ], [
            'required' => __('auth.ns'),
            'mail' => __('auth.invalid email'),
        ]);
        if ($validator->fails()) {
            return $redirect->withErrors($validator);
        }

        $email = $this->shared['info']->data->contact_email;
        if (!$email || !is_email($email)) {
            return $redirect->withErrors(['global' => __('app.internal error')])->withInput();
        }
        try {
            Mail::to($email)->send(new Contact($request->only('name', 'email', 'phone', 'theme', 'message')));
        } catch (\Exception $exception) {
            return $redirect->withErrors(['global' => __('app.internal error')])->withInput();
        }

        return $redirect->with(['message_sent' => true]);
    }

    public function suggestions(Request $request)
    {

        $redirect = redirect()->back();
        $validator = Validator::make($request->all(), [
            'ns' => 'required|string|max:255',
            'email' => 'required|mail',
            'text' => 'nullable|string|max:255',
//          'phone' => 'phone|max:255',
            'file' => 'file|mimes:jpeg,docx,doc,ppt,pdf,png,jpg,mp4,3gp,mov',
        ], [
            'required' => __('auth.required'),
            'max' => __('auth.max'),
            'mail' => __('auth.invalid email'),
            'string' => __('auth.text'),
//           'phone' => __('auth.invalid phone'),
            'file' => t('auth.invalid file type'),
        ]);

        if ($validator->fails()) {
            return $redirect->withErrors($validator);
        }
        $email = $this->shared['info']->data->contact_email;
        if (!empty($email) || !is_email($email))
            try {
                $data = $request->all();
                $data[] = $request->file();


                Mail::to($email)->send(new Suggestions($data));
            } catch (\Exception $exception) {
                dd($exception);
                return $redirect->withErrors(['global' => __('app.internal error')])->withInput();
            }
      return $redirect->with(['message_sent' => true]);
    }
}

