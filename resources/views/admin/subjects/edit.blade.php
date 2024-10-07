@extends('admin.master_layout')
@section('title')
<title>{{__('admin.subject')}}</title>
@endsection
@section('admin-content')
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>{{__('admin.Edit subject')}}</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="{{ route('admin.subjects.index') }}">{{__('admin.subject')}}</a></div>
              <div class="breadcrumb-item">{{__('admin.Edit subject')}}</div>
            </div>
          </div>
          <div class="section-body">
            <a href="{{ route('admin.subjects.index') }}" class="btn btn-primary"><i class="fas fa-list"></i> {{__('admin.subject')}}</a>
            <div class="row mt-4">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.subjects.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <div class="row">
                                <div class="form-group col-12">
                                    <label>{{__('admin.Title')}} <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" value="{{ $item->title }}"  name="title">
                                </div>
                              	<div class="form-group col-12">
                                    <label>Priority <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" value="{{ $item->order }}" name="order">
                                </div>

                                <div class="form-group col-12">
                                    <label>{{__('Is Menu')}} <span class="text-danger">*</span></label>
                                    <select name="is_menu" class="form-control">
                                        <option value="1" {{ $item->is_menu == 1 ? 'selected' : '' }}>{{__('Active')}}</option>
                                        <option value="0" {{ $item->is_menu == 0 ? 'selected' : '' }}>{{__('InActive')}}</option>
                                    </select>
                                </div>
                                <div class="form-group col-12">
                                    <label>{{__('Is Home')}} <span class="text-danger">*</span></label>
                                    <select name="is_home" class="form-control">
                                        <option value="1" {{ $item->is_home == 1 ? 'selected' : '' }}>{{__('Active')}}</option>
                                        <option value="0" {{ $item->is_home == 0 ? 'selected' : '' }}>{{__('InActive')}}</option>
                                    </select>
                                </div>
                                <div class="form-group col-12">
                                    <label>{{__('Is Popular')}} <span class="text-danger">*</span></label>
                                    <select name="is_popular" class="form-control">
                                        <option value="1" {{ $item->is_popular == 1 ? 'selected' : '' }}>{{__('Active')}}</option>
                                        <option value="0" {{ $item->is_popular == 0 ? 'selected' : '' }}>{{__('InActive')}}</option>
                                    </select>
                                </div>
                                <div class="form-group col-12">
                                    <label>{{__('admin.Status')}} <span class="text-danger">*</span></label>
                                    <select name="status" class="form-control">
                                        <option value="1" {{ $item->status == 1 ? 'selected' : '' }}>{{__('admin.Active')}}</option>
                                        <option value="0" {{ $item->status == 0 ? 'selected' : '' }}>{{__('admin.InActive')}}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button class="btn btn-primary">{{__('admin.Save')}}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                  </div>
                </div>
          </div>
        </section>
      </div>

<script>
    (function($) {
        "use strict";
        $(document).ready(function () {
            $("#name").on("focusout",function(e){
                $("#slug").val(convertToSlug($(this).val()));
            })
        });
    })(jQuery);

    function convertToSlug(Text)
        {
            return Text
                .toLowerCase()
                .replace(/[^\w ]+/g,'')
                .replace(/ +/g,'-');
        }
</script>
@endsection
