<?php

namespace App\Http\Controllers\Admin;
use App\Models\Service;
use App\Services\Notify\Facades\Notify;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServicesController extends BaseController
{
    public function main(){
        $data = ['title'=>'Сервисы'];
        $data['items'] = Service::adminList();
        return view('admin.pages.services.main', $data);
    }
    public function add(){
        $data = [];
        $data['title'] = 'Добавление сервисы';
        $data['back_url'] = route('admin.services.main');
        $data['edit'] = false;
        return view('admin.pages.services.form', $data);
    }
    public function add_put(Request $request){
        $validator = $this->validator($request);
        $validator['validator']->validate();
        if(Service::action(null, $validator['inputs'])) {
            Notify::success('Сервисы успешно добавлен.');
            return redirect()->route('admin.services.add');
        }
        else {
            Notify::get('error_occured');
            return redirect()->back()->withInput();
        }
    }
    public function edit($id){
        $data = [];
        $data['item'] = Service::getItem($id);
        $data['title'] = 'Редактирование сервисы';
        $data['back_url'] = route('admin.services.main');
        $data['edit'] = true;
        return view('admin.pages.services.form', $data);
    }
    public function edit_patch($id, Request $request){
        $item = Service::getItem($id);
        $validator = $this->validator($request, $id);
        $validator['validator']->validate();
        if(Service::action($item, $validator['inputs'])) {
            Notify::success('Сервисы успешно редактирован.');
            return redirect()->route('admin.services.edit', ['id'=>$item->id]);
        }
        else {
            Notify::get('error_occured');
            return redirect()->back()->withInput();
        }
    }
    public function delete(Request $request) {
        $result = ['success'=>false];
        $id = $request->input('item_id');
        if ($id && is_id($id)) {
            $page = Service::where('id', $id)->first();
            if ($page && Service::deleteItem($page)) $result['success'] = true;
        }
        return response()->json($result);
    }
    public function sort(){return Service::sortable();
    }

    private function validator($request, $ignore=false) {
        $inputs = $request->all();
        if(!empty($inputs['url'])) $inputs['url'] = lower_case($inputs['url']);
        $inputs['generated_url'] = !empty($inputs['title'][$this->urlLang])?to_url($inputs['title'][$this->urlLang]):null;
        $request->merge(['url' => $inputs['url']]);
        $unique = $ignore===false?null:','.$ignore;
        $result = [];
        $rules = [
            'generated_url'=>'required_with:generate_url|string|nullable',
        ];
        if (empty($inputs['generate_url'])) {
            $rules['url'] = 'required|is_url|string|unique:news,url'.$unique.'|nullable';
        }
        if (!$ignore) {
            $rules['image'] = 'required|image';
        }
        else {
            $rules['image'] = 'image|nullable';
        }
        $result['validator'] = Validator::make($inputs, $rules, [
            'generated_url.required_with'=>'Введите название ('.$this->urlLang.') чтобы сгенерировать URL.',
            'url.required'=>'Введите URL или подставьте галочку "сгенерировать автоматический".',
            'url.is_url'=>'Неправильный URL.',
            'url.unique'=>'URL уже используется.',
            'image.image'=>'Неверное изоброжение.',
            'image.required'=>'Выберите изоброжение.',
        ]);
        $result['inputs'] = $inputs;
        return $result;
    }

}
