<?php

namespace App\Http\Controllers\Admin;

use App\Models\Banner;
use App\Services\Notify\Facades\Notify;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Request;

class BannersController extends BaseController
{
    //region Private
    private $data = [];
    private $notify = false;
    private $page;
    private function render(){
        $this->data['banners'] = Banner::getBanners($this->page);
        if (Request::getMethod()=='POST') {
            return $this->post();
        }
        return view('admin.pages.banners.'.$this->page, $this->data);
    }
    private function post() {
        $request = Request::all();
        foreach ($this->data['params'] as $key=>$params) {
            if (array_key_exists($key, $request)) {
                $inputs = $request[$key];
                $count = $params['count']??1;
                for($i=0;$i<$count;$i++) {
                    $this->updateData($params['params'], $inputs[$i]??null, $key, $i);
                }
            }
        }
        if ($this->notify) {
            Cache::forget(Banner::cacheKey($this->page));
            Notify::get('changes_saved');
        }
        return redirect()->back();

    }
    private function updateData($params, $inputs, $key, $i){
        if (arraySize($inputs)) {
            $data = [];
            foreach($params as $index=>$param) {
                if (is_array($param)) {
                    $type = $param['type'];
                    unset($param['type']);
                    $settings = $param;
                }
                else {
                    $type = $param;
                    $settings = [];
                }
                $banner = $this->data['banners'][$key][$i]['data'][$index]??null;
                $data[$index] = $this->updateParam($type, $settings, $inputs[$index]??null, $banner);
            }
            if(arraySize($data)) {
                $id = $this->data['banners'][$key][$i]['id']??false;
                if(Banner::updateBanner($this->page, $key, $data, $id)) $this->notify = true;
            }
        }
        return true;
    }
    private function updateParam($type, $settings, $input, $banner) {
        switch ($type) {
            case 'image': return $this->typeImage($settings,$input,$banner);  break;
            case 'file': return $this->typeFile($settings,$input,$banner);  break;
            case 'labelauty': return $this->typeCheckbox($input); break;
            default: return $input;
        }
    }
    private function typeImage($settings, $input, $banner) {
        if (empty($settings['original_file'])) {
            $resize = [];
            if (array_key_exists('resize', $settings)) {
                $resize[] = [
                    'method'=>$settings['resize'][0],
                    'width'=>$settings['resize'][1],
                    'height'=>$settings['resize'][2],
                    'upsize'=>empty($settings['resize'][3])?false:true,
                ];
            }
            else $resize[] = ['method'=>'original'];
            if ($input && $input->isFile() &&
                $image = upload_image($input, 'u/banners/', $resize, !empty($banner)?$banner:false)

            ) return $image;
        }
        else {
            if ($input && $input->isFile() && $image = upload_original_image($input, 'u/banners/', !empty($banner)?$banner:false)) return $image;
        }
        return $banner;
    }
    private function typeFile($settings, $input, $banner) {
        if ($input && $input->isFile() &&
            $file = upload_file($input, 'u/banners/', !empty($banner)?$banner:false)

        ) return $file;
        return $banner;
    }
    private function typeCheckbox($input) {
        return $input?true:false;
    }
    public function fixBanners(){
        Banner::fixBanners($this->settings);
    }
    public function renderPage($page) {

        if (!array_key_exists($page, $this->settings)) abort(404);
        $this->page = $page;
        $this->data['params'] = $this->settings[$page];
        return $this->render();
    }
    public function getSettings() {
        return $this->settings;
    }
    //endregion

    private $settings = [
        'home' => [
            'main_banner' => [
                'params' => [
                    'image' => [
                        'type'=>'image',
                        'resize' => ['resize', 700, 460, true],
                        'hint' => false,
                    ],
                    'title' => 'title',
                    'second_title' => 'title',
                    'desc' => 'text',

                ]
            ],
            'main_banner1' => [
                'params' => [
                    'image' => [
                        'type'=>'image',
                        'resize' => ['resize', 1440, 768, true],
                        'hint' => false,
                    ],
                    'title' => 'title',
                    'desc' => 'text',
                ]
            ],
        ],

        'about' => [
            'content' => [
                'params' => [
                    'title' => 'title',
                    'content' => 'text',
                    'content1' => 'text',
                    'image1'=>[
                        'type'=>'image',
                        'resize' => ['resize', 580, 550, true],
                        'hint'=>false,
                    ],
                ]
            ],
        ],
        'statistics' => [
            'content' => [
                'params' => [
                    'title' => 'title',
                    'content' => 'text',
                    'file'=>'file'
                ]
            ],
        ],
        'history' => [
            'content' => [
                'params' => [
                    'image'=>[
                        'type'=>'image',
                        'resize' => ['resize', 488, null, true],
                        'hint'=>false,
                    ],
                    'title'=>'title',
                    'desc'=>'text',
                ]
            ],
            'home' => [
                'params' => [
                    'title'=>'title',
                    'desc'=>'textarea',
                ]
            ],
        ],
        'allinfo' => [
            'content' => [
                'params' => [
                    'image'=>[
                        'type'=>'image',
                        'resize' => ['resize', 564, null, true],
                        'hint'=>false,
                    ],
                    'title'=>'title',
                    'desc'=>'text',
                ]
            ],
            'home' => [
                'params' => [
                    'title'=>'title',
                    'desc'=>'textarea',
                ]
            ],
        ],

//        'restaurant' => [
//            'content' => [
//                'params' => [
//                    'title' => 'title',
//                    'image'=>[
//                        'type'=>'image',
//                        'resize' => ['resize', 1920, null, true],
//                        'hint'=>false,
//                    ],
//                ]
//            ],
//            'menu' => [
//                'params' => [
//                    'title' => 'title',
//                    'file'=>'file',
//                    'icon'=>[
//                        'type'=>'image',
//                        'resize' => ['resize', 36, 36, true],
//                        'hint'=>false,
//                    ],
//                ]
//            ],
//            'text' => [
//                'params' => [
//                    'text' => 'text',
//                ]
//            ],
//            'info' => [
//                'params' => [
//                    'title' => 'title',
//                    'text' => 'text',
//                    'phone' => 'input',
//                    'image'=>[
//                        'type'=>'image',
//                        'resize' => ['resize', 600, 520, true],
//                        'hint'=>false,
//                    ],
//                ]
//            ],
//
//
//        ],

        'contact' => [
            'content' => [
                'params' => [
                    'title' => 'title',
                    'image'=>[
                        'type'=>'image',
                        'resize' => ['resize', 1440, 500, true],
                        'hint'=>false,
                    ],
                ]
            ]
        ],
//        'news' => [
//            'content' => [
//                'params' => [
//                    'title' => 'title',
//                ]
//            ]
//        ],

        'info'=>[
            'seo' => [
                'params' => [
                    'title_suffix'=>'title',
                ]
            ],
            'header_info' => [
                'params' => [
                    'title1'=>'title',
                    'title2'=>'title',
                    'phone'=>'input',
                    'email'=>'input',
                    'button1_title'=>'title',
                    'button1'=>'input',
                    'button2_title'=>'title',
                    'button2'=>'input',
                    'color'=>'color',

                ]
            ],


            'footer_info' => [
                'params' => [
                    'director_reception'=>'input',
                    'informer'=>'input',
                    'title1'=>'title',
                    'title2'=>'title',
                    'title3'=>'title',
                    'title4'=>'title',
                    'title5'=>'title',
                    'address'=>'title',
                    'time'=>'title',
                    'title_bannera'=>'title',
                    'copyright'=>'input',
                    'email'=>'input',
                    'human_resources'=>'input',
                    'accounting'=>'input',
                    'national_reference'=>'input',
                ]
            ],

            'footer_1' => [
                'count' => 10,
                'params' => [
                    'title' => 'title',
                    'url' => 'input',
                ]
            ],
            'footer_2' => [
                'count' => 10,
                'params' => [
                    'title' => 'title',
                    'url' => 'input',
                ]
            ],
            'footer_3' => [
                'count' => 10,
                'params' => [
                    'title' => 'title',
                    'url' => 'input',
                ]
            ],


            'data' => [
                'params' => [
                    'header_logo' => [
                        'type' => 'image',
                        'original_file '=> true,
                    ],
                    'menu_logo' => [
                        'type' => 'image',
                        'original_file '=> true,
                    ],
                    'iframe' => 'input',
                    'iframe1' => 'input',
                    'contact_email' => 'input',
                    'min_sum'=>[
                        'type' => 'number',
                        'min' => '0',
                        'max' => '99999',
                    ],
                    'product_image' => [
                        'type'=>'image',
                        'resize' => ['fit', 512, 288, true]
                    ],
                    'options_selected' => 'labelauty',
                ]
            ],
            'social_title' => [
                'params'=>[
                    'title' => 'title',
                ]
            ],
            'socials' => [
                'count'=>5,
                'params'=>[
                    'icon' => [
                        'type' => 'image',
                        'original_file' => 'true'
                    ],
                    'title' => 'input',
                    'url' => 'input',
                ]
            ],
        ],

        'menu' => [
            'data' => [
                'params' => [
                    'other_products' => 'title'
                ]
            ]
        ],

        'exchange'=>[
            'exchange'=>[
                'count'=>4,
                'params'=>[
                    'title'=>'input',
                    'rate'=>'input',
                    'name'=>'input',
                    'status'=>'labelauty'
                ]
            ]
        ] ,

        'auth' => [
            'login' => [
                'params' => [
                    'image'=>[
                        'type'=>'image',
                        'resize' => ['fit', 1920, 1180, true]

                    ],
                ]
            ],
            'register' => [
                'params' => [
                    'image'=>[
                        'type'=>'image',
                        'resize' => ['fit', 1920, 1180, true]

                    ],
                ]
            ],
            'reset' => [
                'params' => [
                    'image'=>[
                        'type'=>'image',
                        'resize' => ['fit', 1920, 1180, true]

                    ],
                ]
            ],
        ],

    ];

}
