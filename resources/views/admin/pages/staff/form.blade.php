@extends('admin.layouts.app')
@section('content')
    <form action="{!! $edit?route('admin.staff.edit', ['id'=>$item->id]):route('admin.staff.add') !!}"
          method="post" enctype="multipart/form-data">
        @csrf @method($edit?'patch':'put')
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <div class="row">
            <div class="col-12 ">
                <div class="card">
                    <div class="c-body">
                        @bylang(['id'=>'ns', 'tp_classes'=>'little-p', 'title'=>'Имя фамилия'])
                        <input type="text" name="ns[{!! $iso !!}]" class="form-control"
                               placeholder="Имя фамилия работника"
                               value="{{ old('ns.'.$iso, tr($item, 'ns', $iso)) }}">
                        @endbylang
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="card">
                    <div class="c-body">
                        @bylang(['id'=>'position', 'tp_classes'=>'little-p', 'title'=>'Профессия работника'])
                        <input type="text" name="position[{!! $iso !!}]" class="form-control"
                               placeholder="Профессия работника"
                               value="{{ old('position.'.$iso, tr($item, 'position', $iso)) }}">
                        @endbylang
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="c-body">
                        <input type="text" name="email" class="form-control" placeholder="Email работника"
                               value="{{ old('email', $item->email??null) }}">

                    </div>
                </div>
            </div>


            <div class="col-6 col-lg-6">
                <div class="card">
                    @bylang(['id'=>'short_desc', 'tp_classes'=>'little-p ', 'title'=>'Краткое описание'])
                    <textarea type="text" name="short_desc[{!! $iso !!}]" class="form-control ckeditor"
                              placeholder="Short description">  {!! old('short_desc.'.$iso, tr($item, 'short_desc', $iso)) !!}</textarea>
                    @endbylang
                </div>
            </div>

            <div class="col-6 col-lg-6">
                <div class="card">
                    @bylang(['id'=>'desc', 'tp_classes'=>'little-p', 'title'=>'Полное описание'])
                    <textarea type="text" name="desc[{!! $iso !!}]" class="form-control ckeditor"
                              placeholder="description">{!! old('desc.'.$iso, tr($item, 'desc', $iso)) !!}</textarea>
                    @endbylang
                </div>
            </div>

            <div class="col-6 col-lg-6">
                <div class="card">
                    <div class="c-title">Изоброжение (600x600)</div>
                    @if (!empty($item->image))
                        <div class="p-2 text-center  ">
                            <img src="{{ asset('u/staff/'.$item->image) }}" alt="" class="img-responsive">
                        </div>
                    @endif
                    <div class="c-body">
                        @file(['name'=>'image'])@endfile
                    </div>
                </div>

            </div>

            <div class="col-6 col-lg-6">
                <div class="card px-3 pt-3">
                    <div class="row cstm-input">
                        <div class="col-12 p-b-5">
                            <input class="labelauty-reverse toggle-bottom-input on-unchecked" type="checkbox"
                                   name="generate_url" value="1"
                                   data-labelauty="Вставить ссылку вручную" {!! oldCheck('generate_url', $edit?false:true) !!}>
                            <div class="bottom-input">
                                <input type="text" style="margin-top:3px;" name="url" class="form-control" id="form_url"
                                       placeholder="Ссылка" value="{{ old('url', $item->url??null) }}">
                            </div>
                        </div>
                    </div>
                    @labelauty(['id'=>'active', 'label'=>'Неактивно|Активно', 'checked'=>oldCheck('active', ($edit && empty($item->active))?false:true)])@endlabelauty
                </div>
                <div class="card">
                    <div class="c-title">
                        Отделы
                    </div>
                    <div class="c-body">
                        @if(!empty($departments) && count($departments))
                            <select name="departments[]" id="departments" class="form-control" multiple>
                                @foreach($departments as $department)
{{--                                    @dd(oldCheck())--}}
                                    <option value="{{$department->id}}"  {{(!empty($edit) && $edit)?  (in_array($department->id,(old('departments',$related_departments)))  ? 'selected':'')   : (in_array($department->id,(old('departments',[])))  ? 'selected':'')}}>
                                        {{$department->title}}
                                    </option>
                                @endforeach
                            </select>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @seo(['item'=>$item])@endseo


        <div class="col-12 save-btn-fixed">
            <button type="submit"></button>
        </div>


        </div>

    </form>


@endsection
@push('js')
    @js(aApp('select2/select2.js'))
    <script>
        $(document).ready(function() {
            $('#departments').select2();
        });
    </script>
    @ckeditor
@endpush
@css(aApp('select2/select2.css'))
