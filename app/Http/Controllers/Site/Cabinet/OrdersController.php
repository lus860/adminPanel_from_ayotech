<?php

namespace App\Http\Controllers\Site\Cabinet;

use App\Http\Controllers\Site\BaseController;
use App\Models\Order;
use Illuminate\Http\Request;

class OrdersController extends BaseController
{
    public function accepted(){


        $data = [];
        $data['current_page']='accepted';
        $data['title'] = __('cabinet.accepted orders');
        $data['seo'] = $this->staticSEO($data['title']);
        $data['empty'] = __('cabinet.empty.accepted');
        $data['items'] = Order::getOrdersSite(Order::ACCEPTED);
        return view('site.pages.cabinet.orders', $data);
    }

    public function pending(){
        $data = [];
        $data['title'] = __('cabinet.pending orders');
        $data['seo'] = $this->staticSEO($data['title']);
        $data['empty'] = __('cabinet.empty.pending');
        $data['items'] = Order::getOrdersSite(Order::PENDING);
        return view('site.pages.cabinet.orders', $data);
    }

    public function declined(){
        $data = [];
        $data['title'] = __('cabinet.declined orders');
        $data['seo'] = $this->staticSEO($data['title']);
        $data['empty'] = __('cabinet.empty.declined');
        $data['items'] = Order::getOrdersSite(Order::DECLINED);
        return view('site.pages.cabinet.orders', $data);
    }

    public function order($id){
        $data = [];
        $data['order'] = Order::getOrderSite($id);
        $data['title'] = __('cabinet.order').' N'.$data['order']->id;
        $data['seo'] = $this->staticSEO($data['title']);
        $data['status'] = Order::getStatus($data['order']->status);
        return view('site.pages.cabinet.order', $data);
    }
}
