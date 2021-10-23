<?php

namespace App\Http\Controllers\Admin;

use App\Models\SubService;
use App\Services\Notify\Facades\Notify;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class SubServicesController extends BaseController
{
    public function main($parent_id = 0)
    {
        $data = ['title' => 'Условие для комнат'];
        $data['items'] = SubService::adminList($parent_id);
        $data['parent_id'] = $parent_id;
        return view('admin.pages.sub_service.main', $data);
    }

    public function add($parent_id = false)
    {
        if ($parent_id) {
            $data = [];
            $data['title'] = 'Добавление Условие для комнат';
            $data['parent_id'] = $parent_id;
            $data['back_url'] = route('admin.sub_service.main');
            $data['edit'] = false;
            return view('admin.pages.sub_service.form', $data);
        } else {
            return redirect()->back();
        }

    }
    public function sort(){return SubService::sortable();
    }

    public function add_put(Request $request)
    {
        $validator = $this->validator($request);
        $validator['validator']->validate();

        if (SubService::action(null, $validator['inputs'])) {
            Notify::success(' успешно добавлен.');
            return redirect()->route('admin.sub_service.main');
        } else {
            Notify::get('error_occurred');
            return redirect()->back()->withInput();
        }
    }

    public function edit($id)
    {
        $data = [];
        $data['item'] = SubService::getItem($id);
       // dd($data['item']);
        $data['title'] = 'Редактирование Условие';
        $data['back_url'] = route('admin.services.main');
        $data['edit'] = true;
        $data['parent_id'] = $data['item']->parent_id;

        return view('admin.pages.sub_service.form', $data);
    }

    public function edit_patch($id, Request $request)
    {
        $item = SubService::getItem($id);
        $validator = $this->validator($request, $id);
        $validator['validator']->validate();

        if (SubService::action($item, $validator['inputs'])) {
            Notify::success('успешно редактирован.');
            return redirect()->route('admin.sub_service.edit', ['id' => $item->id]);
        } else {
            Notify::get('error_occurred');
            return redirect()->back()->withInput();
        }
    }

    public function delete(Request $request)
    {
        $result = ['success' => false];
        $id = $request->input('item_id');
        if ($id && is_id($id)) {
            $item = SubService::where('id', $id)->first();
            if ($item && SubService::deleteItem($item)) $result['success'] = true;
        }
        return response()->json($result);
    }

    private function validator($request, $ignore = false)
    {
        $inputs = $request->all();
        $result = [];
        $rules['title.*'] = 'required|string|max:255';
        $result['validator'] = Validator::make($inputs, $rules, [
            'title.required' => 'Неверное изоброжение.',
        ]);
        $result['inputs'] = $inputs;
        return $result;
    }
}
