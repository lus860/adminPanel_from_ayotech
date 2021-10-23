<?php

use Illuminate\Support\Facades\Route;
use App\Services\LanguageManager\Facades\LanguageManager;


//Route::get('exchange/change/{title}','Site\ExchangeController@set')->name('site.exchange.change');
//Route::get('ipcheck', function (){
//    function get_geolocation($apiKey, $ip, $lang = "en", $fields = "*", $excludes = "") {
//        $url = "https://api.ipgeolocation.io/ipgeo?apiKey=".$apiKey."&ip=".$ip."&lang=".$lang."&fields=".$fields."&excludes=".$excludes;
//        $cURL = curl_init();
//
//        curl_setopt($cURL, CURLOPT_URL, $url);
//        curl_setopt($cURL, CURLOPT_HTTPGET, true);
//        curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($cURL, CURLOPT_HTTPHEADER, array(
//            'Content-Type: application/json',
//            'Accept: application/json'
//        ));
//        return curl_exec($cURL);
//    }
//    $apiKey = "3a9250f71aac4ed8bc5811882a495979";
//    $ip = "195.250.83.48";//$_SERVER['REMOTE_ADDR'];
//    $location = get_geolocation($apiKey, $ip);
//    $decodedLocation = json_decode($location, true);
//
//    dd($decodedLocation);
//
//
//});
//region Admin
//region Login
Route::group(['prefix' => config('admin.prefix'), 'middleware' => 'notAdmin'], function () {
    Route::get('login', 'Admin\AuthController@login')->name('admin.login');
    Route::post('login', 'Admin\AuthController@attemptLogin');
    Route::get('password/reset', 'Admin\AuthController@reset')->name('admin.password.reset');
    Route::post('password/reset', 'Admin\AuthController@attemptReset');
    Route::get('password/recover/{email}/{token}', 'Admin\AuthController@recover')->where(['email' => '[^\/]+', 'token' => '[^\/]+'])->name('admin.password.recover');
    Route::post('password/recover/{email}/{token}', 'Admin\AuthController@attemptRecover')->where(['email' => '[^\/]+', 'token' => '[^\/]+']);
});
//endregion
Route::group(['prefix' => config('admin.prefix'), 'middleware' => 'admin'], function () {
    //region CKFinder
    Route::any('file_browser/connector', '\CKSource\CKFinderBridge\Controller\CKFinderController@requestAction')->name('ckfinder_connector');
    Route::any('file_browser/browser', '\CKSource\CKFinderBridge\Controller\CKFinderController@browserAction')->name('ckfinder_browser');
    //endregion
    Route::name('admin.')->namespace('Admin')->group(function () {
        //region Logout
        Route::post('logout', 'AuthController@logout')->name('logout');
        //endregion
        //region Home Page Redirect
        Route::get('/', 'AuthController@redirectIfAuthenticated');
        //endregion
        //region Dashboard
        Route::get('dashboard', 'DashboardController@main')->name('dashboard');
        //endregion
        //region Languages
        Route::prefix('languages')->name('languages.')->group(function () {
            $c = 'LanguagesController@';
            Route::get('', $c . 'main')->name('main');
            Route::patch('', $c . 'editLanguage');
        });
        //endregion
        //region Pages
        Route::prefix('pages')->name('pages.')->group(function () {
            $c = 'PagesController@';
            Route::get('', $c . 'main')->name('main');
            Route::get('add/{parent_id?}', $c . 'addPage')->name('add');
            Route::get('sub_list/{id}', $c . 'sub_list')->name('sub_list');
            Route::put('add', $c . 'addPage_put');
            Route::get('edit/{id}/{parent_id?}', $c . 'editPage')->name('edit');
            Route::patch('edit/{id}', $c . 'editPage_patch');
            Route::delete('delete', $c . 'deletePage_delete')->middleware('ajax')->name('delete');
            Route::patch('sort', $c . 'sort')->middleware('ajax')->name('sort');
        });
        //endregion
        //region Banners
        Route::match(['get', 'post'], 'banners/{page}', 'BannersController@renderPage')->name('banners');
        //endregion
        //region News
        Route::prefix('news')->name('news.')->group(function () {
            $c = 'NewsController@';
            Route::get('', $c . 'main')->name('main');
            Route::get('add', $c . 'add')->name('add');
            Route::put('add', $c . 'add_put');
            Route::get('edit/{id}', $c . 'edit')->name('edit');
            Route::patch('edit/{id}', $c . 'edit_patch');
            Route::delete('delete', $c . 'delete')->middleware('ajax')->name('delete');
        });

        Route::prefix('info')->name('info.')->group(function () {
            $c = 'InfoController@';
            Route::get('', $c . 'main')->name('main');
            Route::get('add', $c . 'add')->name('add');
            Route::put('add', $c . 'add_put');
            Route::get('edit/{id}', $c . 'edit')->name('edit');
            Route::patch('edit/{id}', $c . 'edit_patch');
            Route::delete('delete', $c . 'delete')->middleware('ajax')->name('delete');
        });


//        slider
        Route::prefix('main-slider')->name('main_slider.')->group(function () {
            $c = 'MainSliderController@';
            Route::get('', $c . 'main')->name('main');
            Route::get('add', $c . 'add')->name('add');
            Route::put('add', $c . 'add_put');
            Route::get('edit/{id}', $c . 'edit')->name('edit');
            Route::patch('edit/{id}', $c . 'edit_patch');
            Route::delete('delete', $c . 'delete')->middleware('ajax')->name('delete');
            Route::patch('sort', $c . 'sort')->middleware('ajax')->name('sort');
        });
//        slider end
//dirrector
        Route::prefix('director')->name('director.')->group(function () {
            $c = 'DirectorController@';
            Route::get('', $c . 'main')->name('main');
            Route::get('add', $c . 'add')->name('add');
            Route::put('add', $c . 'add_put');
            Route::get('edit/{id}', $c . 'edit')->name('edit');
            Route::patch('edit/{id}', $c . 'edit_patch');
            Route::delete('delete', $c . 'delete')->middleware('ajax')->name('delete');
            Route::patch('sort', $c . 'sort')->middleware('ajax')->name('sort');
        });
//enddirrector


        //departament
        Route::prefix('departament')->name('departament.')->group(function () {
            $c = 'DepartamentController@';
            Route::get('', $c . 'main')->name('main');
            Route::get('add', $c . 'add')->name('add');
            Route::put('add', $c . 'add_put');
            Route::get('edit/{id}', $c . 'edit')->name('edit');
            Route::patch('edit/{id}', $c . 'edit_patch');
            Route::delete('delete', $c . 'delete')->middleware('ajax')->name('delete');
            Route::patch('sort', $c . 'sort')->middleware('ajax')->name('sort');
        });
//enddepartament

//staff
        Route::prefix('staff')->name('staff.')->group(function () {
            $c = 'StaffController@';
            Route::get('', $c . 'main')->name('main');
            Route::get('add', $c . 'add')->name('add');
            Route::put('add', $c . 'add_put');
            Route::get('edit/{id}', $c . 'edit')->name('edit');
            Route::patch('edit/{id}', $c . 'edit_patch');
            Route::delete('delete', $c . 'delete')->middleware('ajax')->name('delete');
            Route::patch('sort', $c . 'sort')->middleware('ajax')->name('sort');
        });
//endstaff
// start benefactors
//staff
        Route::prefix('benefactors')->name('benefactors.')->group(function () {
            $c = 'BenefactorController@';
            Route::get('', $c . 'main')->name('main');
            Route::get('add', $c . 'add')->name('add');
            Route::put('add', $c . 'add_put');
            Route::get('edit/{id}', $c . 'edit')->name('edit');
            Route::patch('edit/{id}', $c . 'edit_patch');
            Route::delete('delete', $c . 'delete')->middleware('ajax')->name('delete');
            Route::patch('sort', $c . 'sort')->middleware('ajax')->name('sort');
        });
//endstaff
//end benefactors



        //      statistics
        Route::prefix('statistics')->name('statistics.')->group(function () {
            $c = 'StatisticsController@';
            Route::get('', $c . 'main')->name('main');
            Route::get('add', $c . 'add')->name('add');
            Route::put('add', $c . 'add_put');
            Route::get('edit/{id}', $c . 'edit')->name('edit');
            Route::patch('edit/{id}', $c . 'edit_patch');
            Route::delete('delete', $c . 'delete')->middleware('ajax')->name('delete');
            Route::patch('sort', $c . 'sort')->middleware('ajax')->name('sort');
        });
//      statistics end







//      partners
        Route::prefix('partners')->name('partners.')->group(function () {
            $c = 'PartnersController@';
            Route::get('', $c . 'main')->name('main');
            Route::get('add', $c . 'add')->name('add');
            Route::put('add', $c . 'add_put');
            Route::get('edit/{id}', $c . 'edit')->name('edit');
            Route::patch('edit/{id}', $c . 'edit_patch');
            Route::delete('delete', $c . 'delete')->middleware('ajax')->name('delete');
            Route::patch('sort', $c . 'sort')->middleware('ajax')->name('sort');
        });
//      partners end
//      vacancy
        Route::prefix('vacancy')->name('vacancy.')->group(function () {
            $c = 'VacancyController@';
            Route::get('', $c . 'main')->name('main');
            Route::get('add', $c . 'add')->name('add');
            Route::put('add', $c . 'add_put');
            Route::get('edit/{id}', $c . 'edit')->name('edit');
            Route::patch('edit/{id}', $c . 'edit_patch');
            Route::delete('delete', $c . 'delete')->middleware('ajax')->name('delete');
            Route::patch('sort', $c . 'sort')->middleware('ajax')->name('sort');
        });
//      vacancy end \
//      vacancy
        Route::prefix('shopping')->name('shopping.')->group(function () {
            $c = 'ShoppingController@';
            Route::get('', $c . 'main')->name('main');
            Route::get('add', $c . 'add')->name('add');
            Route::put('add', $c . 'add_put');
            Route::get('edit/{id}', $c . 'edit')->name('edit');
            Route::patch('edit/{id}', $c . 'edit_patch');
            Route::delete('delete', $c . 'delete')->middleware('ajax')->name('delete');
            Route::patch('sort', $c . 'sort')->middleware('ajax')->name('sort');
        });
//      vacancy end
//      vacancy
        Route::prefix('shopping_items')->name('shopping_items.')->group(function () {
            $c = 'ShoppingItemsController@';
            Route::get('main/{parent_id}', $c . 'main')->name('main');
            Route::get('add/{parent_id}', $c . 'add')->name('add');
            Route::put('add', $c . 'add_put')->name('add_put');
            Route::get('edit/{id}', $c . 'edit')->name('edit');
            Route::patch('edit/{id}', $c . 'edit_patch')->name('edit_patch');
            Route::delete('delete', $c . 'delete')->middleware('ajax')->name('delete');
            Route::patch('sort', $c . 'sort')->middleware('ajax')->name('sort');
        });
//      vacancy end
//      services
        Route::prefix('services')->name('services.')->group(function () {
            $c = 'ServicesController@';
            Route::get('', $c . 'main')->name('main');
            Route::get('add', $c . 'add')->name('add');
            Route::put('add', $c . 'add_put');
            Route::get('edit/{id}', $c . 'edit')->name('edit');
            Route::patch('edit/{id}', $c . 'edit_patch');
            Route::delete('delete', $c . 'delete')->middleware('ajax')->name('delete');
            Route::patch('sort', $c . 'sort')->middleware('ajax')->name('sort');
        });
//      service end

//      scientific
        Route::prefix('scientific')->name('scientific.')->group(function () {
            $c = 'ScientificController@';
            Route::get('', $c . 'main')->name('main');
            Route::get('add', $c . 'add')->name('add');
            Route::put('add', $c . 'add_put');
            Route::get('edit/{id}', $c . 'edit')->name('edit');
            Route::patch('edit/{id}', $c . 'edit_patch');
            Route::delete('delete', $c . 'delete')->middleware('ajax')->name('delete');
            Route::patch('sort', $c . 'sort')->middleware('ajax')->name('sort');
        });
//      scientific end

//      history
        Route::prefix('history')->name('history.')->group(function () {
            $c = 'HistoryController@';
            Route::get('', $c . 'main')->name('main');
            Route::get('add', $c . 'add')->name('add');
            Route::put('add', $c . 'add_put');
            Route::get('edit/{id}', $c . 'edit')->name('edit');
            Route::patch('edit/{id}', $c . 'edit_patch');
            Route::delete('delete', $c . 'delete')->middleware('ajax')->name('delete');
            Route::patch('sort', $c . 'sort')->middleware('ajax')->name('sort');
        });
//      scientific end

//      region sub services
        Route::prefix('sub_service')->name('sub_service.')->group(function () {
            $c = 'SubServicesController@';
            Route::get('{parent_id?}', $c . 'main')->name('main');
            Route::get('add/{parent_id?}', $c . 'add')->name('add');
            Route::put('add', $c . 'add_put');
            Route::get('edit/{id}', $c . 'edit')->name('edit');
            Route::patch('edit/{id}', $c . 'edit_patch');
            Route::delete('delete', $c . 'delete')->middleware('ajax')->name('delete');
            Route::patch('sort', $c . 'sort')->middleware('ajax')->name('sort');
        });
//      endregion


        //endregion
        //region Galleries
        Route::prefix('gallery')->group(function () {
            $c = 'GalleriesController@';
            Route::get('{gallery}/{id?}', $c . 'show')->name('gallery');
            Route::put('add', $c . 'add')->name('gallery.add');
            Route::patch('edit', $c . 'edit')->middleware('ajax')->name('gallery.edit');
            Route::patch('sort', $c . 'sort')->middleware('ajax')->name('gallery.sort');
            Route::delete('delete', $c . 'delete')->middleware('ajax')->name('gallery.delete');
        });
        //endregion
        //region Users
        Route::prefix('users')->name('users.')->group(function () {
            $c = 'UsersController@';
            Route::get('', $c . 'main')->name('main');
            Route::get('{id}', $c . 'view')->name('view');
            Route::patch('toggle-active', $c . 'toggleActive')->name('toggleActive');
        });
        //endregion
        //region Video Galleries
        Route::prefix('video-gallery')->group(function () {
            $c = 'VideoGalleriesController@';
            Route::get('{gallery}/{id?}', $c . 'show')->name('video_gallery');
            Route::get('{gallery}/add/{id?}', $c . 'add')->name('video_gallery.add');
            Route::put('{gallery}/add/{id?}', $c . 'add_put');
            Route::get('{id}/edit', $c . 'edit')->name('video_gallery.edit');
            Route::patch('{id}/edit', $c . 'edit_patch');
            Route::patch('sort', $c . 'sort')->middleware('ajax')->name('video_gallery.sort');
            Route::delete('delete', $c . 'delete')->middleware('ajax')->name('video_gallery.delete');
        });
        //endregion
        //region Profile
        Route::prefix('profile')->name('profile.')->group(function () {
            $c = 'ProfileController@';
            Route::get('', $c . 'main')->name('main');
            Route::patch('', $c . 'patch');
        });
        //endregion
        //region Translations
        Route::prefix('translations')->name('translations.')->group(function () {
            $c = 'TranslationsController@';
            Route::get('{locale}', $c . 'main')->name('main');
            Route::get('{locale}/{filename}', $c . 'edit')->name('edit');
            Route::patch('{locale}/{filename}', $c . 'edit_patch')->name('edit');
        });
        //endregion
        //region Catalogue
        Route::prefix('catalogue')->name('catalogue.')->group(function () {
            $c = 'CatalogueController@';
            Route::get('', $c . 'main')->name('main');
            Route::get('add', $c . 'add')->name('add');
            Route::put('add', $c . 'add_put');
            Route::get('edit/{id}', $c . 'edit')->name('edit');
            Route::patch('edit/{id}', $c . 'edit_patch');
            Route::delete('delete', $c . 'delete')->middleware('ajax')->name('delete');
            Route::patch('sort', $c . 'sort')->middleware('ajax')->name('sort');
        });
        //endregion
        //region Products
        Route::prefix('products')->name('products.')->group(function () {
            $c = 'ProductsController@';
            Route::get('{id}', $c . 'main')->name('main');
            Route::get('add/{id}', $c . 'add')->name('add');
            Route::put('add', $c . 'add_put')->name('add_put');
            Route::get('edit/{id}', $c . 'edit')->name('edit');
            Route::patch('edit/{id}', $c . 'edit_patch');
            Route::patch('sort', $c . 'sort')->middleware('ajax')->name('sort');
            Route::delete('delete', $c . 'delete')->middleware('ajax')->name('delete');
        });
        //endregion
        //region Product Options
        Route::prefix('product-options')->name('product_options.')->group(function () {
            $c = 'ProductOptionsController@';
            Route::get('', $c . 'main')->name('main');
            Route::get('add', $c . 'add')->name('add');
            Route::put('add', $c . 'add_put');
            Route::get('edit/{id}', $c . 'edit')->name('edit');
            Route::patch('edit/{id}', $c . 'edit_patch');
            Route::delete('delete', $c . 'delete')->middleware('ajax')->name('delete');
            Route::patch('sort', $c . 'sort')->middleware('ajax')->name('sort');
        });
        //endregion
        //region Delivery
        Route::prefix('delivery')->name('delivery.')->group(function () {
            $c = 'DeliveryController@';
            Route::get('', $c . 'main')->name('main');
            Route::get('add', $c . 'add')->name('add');
            Route::put('add', $c . 'add_put');
            Route::get('edit/{id}', $c . 'edit')->name('edit');
            Route::patch('edit/{id}', $c . 'edit_patch');
            Route::delete('delete', $c . 'delete')->middleware('ajax')->name('delete');
            Route::patch('sort', $c . 'sort')->middleware('ajax')->name('sort');
        });
        //endregion
        //region Home Catalogue
        Route::prefix('home-catalogue')->name('home_catalogue.')->group(function () {
            $c = 'HomeCatalogueController@';
            Route::get('', $c . 'main')->name('main');
            Route::get('edit/{id}', $c . 'edit')->name('edit');
            Route::patch('edit/{id}', $c . 'edit_patch');
        });
        //endregion
        //region Orders

        Route::prefix('orders')->name('orders.')->group(function () {
            $c = 'OrdersController@';
            Route::get('pending', $c . 'pending')->name('pending');
            Route::get('accepted', $c . 'accepted')->name('accepted');
            Route::get('declined', $c . 'declined')->name('declined');
            Route::get('view/{id}', $c . 'view')->name('view');
            Route::patch('respond', $c . 'respond')->name('respond');
            Route::delete('delete', $c . 'delete')->middleware('ajax')->name('delete');
            Route::delete('clear', $c . 'clear')->name('clear');
        });
        //endregion
    });
});
//endregion


//region Site
Route::get('verify-email/{email}/{token}', 'Site\Auth\RegisterController@verifyEmail')->name('verify_email');
Route::post('logout', 'Site\Auth\LoginController@logout')->middleware('logged_in')->name('logout');

Route::middleware('setLocale')->group(function () {
    Route::post('login', 'Site\Auth\LoginController@login')->name('login.post');
    Route::post('order', 'Site\ProductsController@order')->name('order');
    Route::post('register', 'Site\Auth\RegisterController@register')->name('register.post');
    Route::post('reset', 'Site\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::post('password/reset/{email}/{token}', 'Site\Auth\ResetPasswordController@reset')->name('password.update');
    Route::post('send-mail', 'Site\AppController@sendMail')->name('contacts.send_mail');
    Route::post('send_suggestions', 'Site\AppController@suggestions')->name('send_suggestions');
});
Route::prefix('cabinet')->middleware('logged_in')->group(function () {
    Route::middleware('setLocale')->group(function () {
        Route::post('profile/security', 'Site\Cabinet\ProfileController@security')->name('cabinet.security');
        Route::post('profile/personal', 'Site\Cabinet\ProfileController@personal')->name('cabinet.personal');
    });
});
Route::group(['prefix' => LanguageManager::getPrefix(), 'middleware' => 'languageManager'], function () {

    Route::get('login', 'Site\Auth\LoginController@showLoginForm')->name('login');
    Route::get('register', 'Site\Auth\RegisterController@showRegistrationForm')->name('register');
    Route::get('reset', 'Site\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::get('password/reset/{email}/{token}', 'Site\Auth\ResetPasswordController@showResetForm')->name('password.reset');





//view
    Route::get(r('news') . '/{url}', 'Site\AppController@news_item')->name('news');
    Route::get(r('info') . '/{url}', 'Site\AppController@info_item')->name('info');
    Route::get(r('department') . '/{url}', 'Site\AppController@departament_item')->name('department');
    Route::get(r('benefactor') . '/{url}', 'Site\AppController@benefactor_item')->name('benefactor');
    Route::get(r('services') . '/{url}', 'Site\AppController@getservices')->name('services');
    Route::get(r('director') . '/{url}', 'Site\AppController@getdirector')->name('director');
    Route::get(r('staff') . '/{url}', 'Site\AppController@staff_item')->name('staff');
    Route::get(r('vacancy') . '/{url}', 'Site\AppController@vacancy_item')->name('vacancy');
    Route::get(r('statistics') . '/{url}', 'Site\AppController@statistics_item')->name('statistics');


//test
//    Route::get(r('posts'), 'Site\AppController@static_posts')->name('posts');
    Route::get(r('post/{url}'), 'Site\AppController@posts_item')->name('posts');

//    Route::get(r('phone/{url}'), 'Site\AppController@phone_item')->name('phone');
//endtest


    Route::group(['prefix' => 'cabinet', 'middleware' => 'logged_in'], function () {
        Route::get('profile', 'Site\Cabinet\ProfileController@main')->name('cabinet.profile');
        Route::get('orders/pending', 'Site\Cabinet\OrdersController@pending')->name('cabinet.orders.pending');
        Route::get('orders/accepted', 'Site\Cabinet\OrdersController@accepted')->name('cabinet.orders.accepted');
        Route::get('orders/declined', 'Site\Cabinet\OrdersController@declined')->name('cabinet.orders.declined');
        Route::get('order/{id}', 'Site\Cabinet\OrdersController@order')->name('cabinet.order');
    });
    Route::get('{url?}', 'Site\AppController@pageManager')->name('page');

    Route::post('search', 'Site\AppController@search')->name('search');

});
//endregion


