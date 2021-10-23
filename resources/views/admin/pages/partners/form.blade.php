@extends('admin.layouts.app')
@section('content')
    <form action="{!! $edit?route('admin.partners.edit', ['id'=>$item->id]):route('admin.partners.add') !!}"
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
                    @labelauty(['id'=>'active', 'label'=>'Неактивно|Активно', 'checked'=>oldCheck('active', ($edit && empty($item->active))?false:true)])@endlabelauty

                </div>

            </div>
            <div class="col-12 col-lg-6">
                <div class="card">
                    <div class="c-title">Изоброжение (100x60)</div>
                    @if (!empty($item->image))
                        <div class="p-2 text-center bg-success">
                            <img src="{{ asset('u/partners/'.$item->image) }}" alt="" class="img-responsive">
                        </div>
                    @endif
                    <div class="c-body">
                        @file(['name'=>'image'])@endfile
                    </div>
                </div>
                <div class="card">
                    <div class="c-title">Ссылка</div>
                    <input type="text" style="margin-top:3px;" name="link" class="form-control" id="form_url" placeholder="Ссылка" value="{{ old('url', $item->link??null) }}">
                </div>

            </div>
            </div>


            <input type="hidden" name="slider_type" value="1">

            <div class="col-12 save-btn-fixed">
                <button type="submit"></button>
            </div>
        </div>

    </form>


@endsection
@push('js')
@ckeditor
@endpush
