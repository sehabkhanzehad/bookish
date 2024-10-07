@extends('admin.master_layout')
@section('title')
<title>{{__('admin.Subject')}}</title>
@endsection
@section('admin-content')
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>{{__('admin.Create Subject')}}</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="{{ route('admin.subjects.index') }}">{{__('admin.Subject')}}</a></div>
              <div class="breadcrumb-item">{{__('admin.Create Subject')}}</div>
            </div>
          </div>

          <div class="section-body">
            <a href="{{ route('admin.subjects.index') }}" class="btn btn-primary"><i class="fas fa-list"></i> {{__('admin.Subject')}}</a>
            <div class="row mt-4">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.subjects.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group col-12">
                                    <label>{{__('admin.Title')}} <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control"  name="title">
                                </div>
                              	<div class="form-group col-12">
                                    <label>Priority <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control"  name="order">
                                </div>
                                <div class="form-group col-12">
                                    <label>{{__('Is Menu')}} <span class="text-danger">*</span></label>
                                    <select name="is_menu" class="form-control">
                                        <option value="1">{{__('Active')}}</option>
                                        <option value="0">{{__('InActive')}}</option>
                                    </select>
                                </div>
                                <div class="form-group col-12">
                                    <label>{{__('Is Home')}} <span class="text-danger">*</span></label>
                                    <select name="is_home" class="form-control">
                                        <option value="1">{{__('Active')}}</option>
                                        <option value="0">{{__('InActive')}}</option>
                                    </select>
                                </div>
                                <div class="form-group col-12">
                                    <label>{{__('Is Popular')}} <span class="text-danger">*</span></label>
                                    <select name="is_popular" class="form-control">
                                        <option value="1">{{__('Active')}}</option>
                                        <option value="0">{{__('InActive')}}</option>
                                    </select>
                                </div>
                                <div class="form-group col-12">
                                    <label>{{__('Status')}} <span class="text-danger">*</span></label>
                                    <select name="status" class="form-control">
                                        <option value="1">{{__('Active')}}</option>
                                        <option value="0">{{__('InActive')}}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button class="btn btn-primary">{{__('Save')}}</button>
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
