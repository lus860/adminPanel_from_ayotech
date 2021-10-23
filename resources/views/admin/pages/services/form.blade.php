@extends('admin.layouts.app')
@section('content')
    <form action="{!! $edit?route('admin.services.edit', ['id'=>$item->id]):route('admin.services.add') !!}"
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
            <div class="col-12 col-lg-6">
                <div class="card">
                     <div class="c-body">
                        @bylang(['id'=>'title', 'tp_classes'=>'little-p', 'title'=>'Title'])
                        <input type="text" name="title[{!! $iso !!}]" class="form-control" placeholder="Title"
                               value="{{ old('title.'.$iso, tr($item, 'title', $iso)) }}">
                        @endbylang
                    </div>

                </div>
                <div class="card px-3 pt-3">
                    <div class="row cstm-input">
                        <div class="col-12 p-b-5">
                            <input class="labelauty-reverse toggle-bottom-input on-unchecked" type="checkbox" name="generate_url" value="1" data-labelauty="Вставить ссылку вручную" {!! oldCheck('generate_url', $edit?false:true) !!}>
                            <div class="bottom-input">
                                <input type="text" style="margin-top:3px;" name="url" class="form-control" id="form_url" placeholder="Ссылка" value="{{ old('url', $item->url??null) }}">
                            </div>
                        </div>
                    </div>
                    @labelauty(['id'=>'active', 'label'=>'Неактивно|Активно', 'checked'=>oldCheck('active', ($edit && empty($item->active))?false:true)])@endlabelauty
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="card">
                    <div class="c-title">Изоброжение (100x60)</div>
                    @if (!empty($item->image))
                        <div class="p-2 text-center bg-success">
                            <img src="{{ asset('u/services/'.$item->image) }}" alt="" class="aaa img-responsive">
                        </div>
                    @endif
                    <div class="c-body">
                        @file(['name'=>'image'])@endfile
                    </div>
                </div>

            </div>
{{--            <div class="col-12 col-lg-6">--}}
{{--                <div class="card">--}}
{{--                    @bylang(['id'=>'form_description', 'tp_classes'=>'little-p ', 'title'=>'Short Description'])--}}
{{--                    <textarea type="text" name="short_description[{!! $iso !!}]" class="form-control ckeditor" placeholder="Short description">{{ old('title.'.$iso, tr($item, 'short_description', $iso)) }}</textarea>--}}
{{--                    @endbylang--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="col-12 col-lg-6">
                <div class="card">
                    @bylang(['id'=>'description', 'tp_classes'=>'little-p', 'title'=>'Description'])
                    <textarea type="text" name="description[{!! $iso !!}]" class="form-control ckeditor" placeholder="description">{{ old('title.'.$iso, tr($item, 'description', $iso)) }}</textarea>
                    @endbylang
                </div>
            </div>
            <input type="hidden" name="slider_type" value="1">

            <div class="col-12 save-btn-fixed">
                <button type="submit"></button>
            </div>
        </div>
        @seo(['item'=>$item])@endseo
    </form>


@endsection
@push('js')
@ckeditor
@endpush
