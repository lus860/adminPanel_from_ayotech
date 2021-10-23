<?php

namespace App\Http\Controllers\Admin;
use App\Models\Partners;
use App\Services\Notify\Facades\Notify;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PartnersController extends BaseController
{
    public function main(){
        $data = ['title'=>'Партнер'];
        $data['items'] = Partners::adminList();
        return view('admin.pages.partners.main', $data);
    }
    public function add(){
        $data = [];
        $data['title'] = 'Добавление нового партнера';
        $data['back_url'] = route('admin.partners.main');
        $data['edit'] = false;
        return view('admin.pages.partners.form', $data);
    }
    public function add_put(Request $request){
        $validator = $this->validator($request);
        $validator['validator']->validate();
        if(Partners::action(null, $validator['inputs'])) {
            Notify::success('Партнер успешно добавлен.');
            return redirect()->route('admin.partners.main');
        }
        else {
            Notify::get('error_occured');
            return redirect()->back()->withInput();
        }
    }
    public function edit($id){
        $data = [];
        $data['item'] = Partners::getItem($id);
        $data['title'] = 'Редактирование партнера';
        $data['back_url'] = route('admin.partners.main');
        $data['edit'] = true;
        return view('admin.pages.partners.form', $data);
    }
    public function edit_patch($id, Request $request){
        $item = Partners::getItem($id);
        $validator = $this->validator($request, $id);
        $validator['validator']->validate();
        if(Partners::action($item, $validator['inputs'])) {
            Notify::success('Партнер успешно редактирован.');
            return redirect()->route('admin.partners.edit', ['id'=>$item->id]);
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
            $page = Partners::where('id', $id)->first();
            if ($page && Partners::deleteItem($page)) $result['success'] = true;
        }
        return response()->json($result);
    }
    public function sort(){return Partners::sortable();
    }

    private function validator($request, $ignore=false) {
        $inputs = $request->all();

        if (!$ignore) {
            $rules['image'] = 'required|image';
        }
        else {
            $rules['image'] = 'image|nullable';
        }
        $result['validator'] = Validator::make($inputs, $rules, [

            'image.image'=>'Неверное изоброжение.',
            'image.required'=>'Выберите изоброжение.',
        ]);
        $result['inputs'] = $inputs;
        return $result;
    }

}
