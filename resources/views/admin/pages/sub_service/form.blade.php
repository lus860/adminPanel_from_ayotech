@extends('admin.layouts.app')
@section('content')
    <form
        action="{!! $edit?route('admin.sub_service.edit', ['id'=>$item->id]):route('admin.sub_service.add') !!}"
        method="post" enctype="multipart/form-data">
        <input type="hidden" value="{{$parent_id??null}}" name="parent_id">
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
                    @labelauty(['id'=>'active', 'label'=>'Неактивно|Активно', 'checked'=>oldCheck('active', ($edit && empty($item->active))?false:true)])@endlabelauty
                </div>
            </div>
            <input type="hidden" name="slider_type" value="1">
            <div class="col-12 save-btn-fixed">
                <button type="submit"></button>
            </div>
        </div>
        <div class="row mt-4 without-interval {{($item->have_interval??null) || !$edit ?'hidden':''}} ">
            <div class="col-sm-12">
                <div class="card card-underline" style="margin:0;">
                    <div class="c-title">
                        Критерии
                    </div>
                    @bylang(['id'=>'criteria-container', 'tp_classes'=>'little-p', 'title'=>'Название'])
                    @if(!empty($item->option) && count($item->option) && !$item->have_interval)
                        @foreach($item->option as $option)
                            <div class="inputs_for_index my-2" style="display: flex">
                                <div class="col-11" data-index="{{$loop->index}}">
                                    <div class="row">
                                        <div class="col-9">
                                            <input placeholder="Введите название"
                                                                  class="form-control characteristics-inputs"
                                                                  name="criterions[{{$option->id}}][title][{!! $iso !!}]"
                                                                  type="text"
                                                                  data-index="{{$loop->index}}"
                                                                  value="{{ tr($option, 'title', $iso) }}">
                                        </div>
                                        <div class="col-3">
                                            <input placeholder="Введите цена"
                                                   class="form-control price_inp characteristics-inputs"
                                                   name="criterions[{{$option->id}}][price]"
                                                   type="number"
                                                   data-index="{{$loop->index}}"
                                                   value="{{ $option->price }}">
                                        </div>
                                    </div>

                                </div>
                                <div class="col-1  text-center delete-criterion-item">
                                    <i class="fa fa-trash " style="vertical-align: middle;"></i>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    @endbylang
                    <div class="char-add-row text-center">
                        <i class="icon-btn add " onclick="addCriterionRow()"></i>
                    </div>
                </div>


                <!--end .card -->
            </div>
        </div>
    </form>


@endsection
@push('js')
    <script>
        var isos = '{!! json_encode($isos) !!}';
        isos = JSON.parse(isos);

        function charRow(index, iso) {
            return '<div  class="inputs_for_index my-2" style="display: flex"> <div class="col-11 " data-index="' + index + '"> <input placeholder="Введите название" class="form-control characteristics-inputs" name="criterions[' + index + '][title][' + iso + ']" type="text" value="" data-index="' + index + '"> <input placeholder="Введите цена" class="price_inp form-control characteristics-inputs" name="criterions[' + index + '][price]" type="number" value="" data-index="' + index + '"></div>' + '<div class="col-1  text-center delete-criterion-item"><i class="fa fa-trash"></i> </div></div>';
        }

        $(document).on('keyup', '.price_inp', function (e) {
            console.log()
            $(document).find('.price_inp[data-index="' + $(this).data('index') + '"]').val($(this).val())
        })
        $(document).on('click', '.delete-criterion-item', function () {
            var dataIndex = $(this).prev().data('index');
            console.log(dataIndex)
            for (var j = 0; j < isos.length; j++) {
                $('.characteristics-inputs').each(function () {
                    if ($(this).data('index') == dataIndex) {
                        $(this).parent().parent().remove();
                    }
                })
            }
        });

        function addCriterionRow() {
            var index = 0;
            $('.characteristics-inputs').each(function () {
                if ($(this).data('index') > index) {
                    index = $(this).data('index');

                }
            });
            index++;
            for (var j = 0; j < isos.length; j++) {
                $('#criteria-container_' + isos[j]).append(charRow(index, isos[j]))
            }
        }    </script>



    @ckeditor
@endpush
