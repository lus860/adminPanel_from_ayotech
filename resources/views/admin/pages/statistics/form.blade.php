@extends('admin.layouts.app')
@section('content')
    <form action="{!! $edit?route('admin.statistics.edit', ['id'=>$item->id]):route('admin.statistics.add') !!}"
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
                        @bylang(['id'=>'title', 'tp_classes'=>'little-p', 'title'=>'Название'])
                        <input type="text" name="title[{!! $iso !!}]" class="form-control"
                               placeholder="название"
                               value="{{ old('title.'.$iso, tr($item, 'title', $iso)) }}">
                        @endbylang
                    </div>
                </div>
            </div>

            <div class="col-6 col-lg-6">
                <div class="card">
                    @bylang(['id'=>'desc', 'tp_classes'=>'little-p', 'title'=>'Полное описание'])
                    <textarea type="text" name="description[{!! $iso !!}]" class="form-control ckeditor"
                              placeholder="description">{{ old('description.'.$iso, tr($item, 'description', $iso)) }}</textarea>
                    @endbylang
                </div>
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
            </div>
        </div>
        <div class="row">
            <div class="col-4 col-lg-4">
                <div class="card">
                    <label for="exampleFormControlFile1" class="btn btn-light-blue text-left">Կցել ֆայլ (Word)</label>
                    @if($edit || !empty($item->doc))
                        <a href="{{asset('u/scientific/files/'.$item->doc)}}" target="_blank">{{$item->doc}}</a>
                    @endif
                    @file(['name'=>'doc'])@endfile
                </div>
            </div>

            <div class="col-4 col-lg-4">
                <div class="card">
                    <label for="exampleFormControlFile1" class="btn btn-light-blue text-left">Կցել ֆայլ (Pdf)</label>
                    @if($edit || !empty($item->pdf))
                        <a href="{{asset('u/scientific/files/'.$item->pdf)}}" target="_blank">{{$item->pdf}}</a>
                    @endif
                    @file(['name'=>'pdf'])@endfile
                </div>
            </div>

            <div class="col-4 col-lg-4">
                <div class="card">
                    <label for="exampleFormControlFile1" class="btn btn-light-blue text-left">Կցել ֆայլ (Excel)</label>
                    @if($edit || !empty($item->xls))
                        <a href="{{asset('u/scientific/files/'.$item->xls)}}" target="_blank">{{$item->xls}}</a>
                    @endif
                    @file(['name'=>'xls'])@endfile
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
        $(document).ready(function () {
            $('#departments').select2();
        });
    </script>
    @ckeditor
@endpush
@css(aApp('select2/select2.css'))
