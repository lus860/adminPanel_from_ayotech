@extends('admin.layouts.app')
@section('content')
<form action="{!! $edit?route('admin.pages.edit', ['id'=>$page->id]):route('admin.pages.add') !!}" method="post" enctype="multipart/form-data">
    <input type="hidden" name="parent_id" value="{{$id??null}}">
    @csrf @method($edit?'patch':'put')
    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    @if($edit)
        <div class="py-2 h5">Ссылка: {{ $page->static==$homepage?'/':route('page', ['url'=>$page['url']], false) }}</div>
    @endif
    <div class="row">
        <div class="col-12 col-lg-6">
            <div class="card">
                @bylang(['id'=>'form_title', 'tp_classes'=>'little-p', 'title'=>'Название'])
                    <input type="text" name="title[{!! $iso !!}]" class="form-control" placeholder="Название" value="{{ old('title.'.$iso, tr($page, 'title', $iso)) }}">
                @endbylang
            </div>
        </div>

        <div class="col-12 col-lg-6">
            <div class="card px-3 p-t-5">
                <div class="form-group">
                    @if(!$edit || $page->static!=$homepage)
                    <div class="row cstm-input">
                        <div class="col-12 p-b-5">
                            <input class="labelauty-reverse toggle-bottom-input on-unchecked" type="checkbox" name="generate_url" value="1" data-labelauty="Вставить ссылку вручную" {!! oldCheck('generate_url', $edit?false:true) !!}>
                            <div class="bottom-input">
                                <input type="text" style="margin-top:3px;" name="url" class="form-control" id="form_url" placeholder="Ссылка" value="{{ old('url', $page->url??null) }}">
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
                @labelauty(['id'=>'to_menu', 'label'=>'Показать в меню', 'checked'=>oldCheck('to_menu', ($edit && empty($page->to_menu))?false:true)])@endlabelauty
                @if(!$edit || $page->static!=$homepage)
                    @labelauty(['id'=>'active', 'label'=>'Неактивно|Активно', 'checked'=>oldCheck('active', ($edit && empty($page->active))?false:true)])@endlabelauty
                @endif
                @labelauty(['id'=>'to_slider', 'label'=>'Показать на footer', 'checked'=>oldCheck('to_slider', ($edit && empty($page->to_slider))?false:true)])@endlabelauty
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <div class="card">
                <div class="c-title">Изоброжение  (1440 X 305)</div>
                @if (!empty($page->image))
                    <div class="p-2 text-center">
                        <img src="{{ asset('u/pages/'.$page->image) }}" alt="" class="img-responsive">
                    </div>
                @endif
                <div class="c-body">
                    @file(['name'=>'image'])@endfile
                </div>
            </div>

        </div>
        <div class="col-12 col-lg-6">

            <div class="c-title">Ссылка на видео с Youtube</div>
            <div class="card">

                <input class="form-control" name="title_content" placeholder="Ссылка" value="{{old('title_content',$page->title_content??null)}}">
            </div>



        </div>
        @if(!$edit || !$page->static)
        <div class="col-12">
            <div class="card">

                @bylang(['id'=>'form_content', 'tp_classes'=>'little-p', 'title'=>'Контент'])
                    <textarea class="ckeditor" name="content[{!! $iso !!}]">{!! old('content.'.$iso, tr($page, 'content', $iso)) !!}</textarea>
                @endbylang
            </div>
        </div>
        @endif
    </div>
    @seo(['item'=>$page??null])@endseo
    <div class="col-12 save-btn-fixed"><button type="submit"></button></div>
</form>
@endsection
@push('js')
    @ckeditor
@endpush
