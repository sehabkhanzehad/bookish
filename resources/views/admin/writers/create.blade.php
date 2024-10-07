@extends('admin.master_layout')
@section('title')
<title>{{__('admin.Writer')}}</title>
@endsection
@section('admin-content')
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>{{__('admin.Create Writer')}}</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="{{ route('admin.writers.index') }}">{{__('admin.Writer')}}</a></div>
              <div class="breadcrumb-item">{{__('admin.Create Writer')}}</div>
            </div>
          </div>

          <div class="section-body">
            <a href="{{ route('admin.writers.index') }}" class="btn btn-primary"><i class="fas fa-list"></i> {{__('admin.Writer')}}</a>
            <div class="row mt-4">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.writers.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group col-12">
                                    <label>{{__('admin.Image')}}</label>
                                    <input type="file" class="form-control-file"  name="image">
                                </div>
                                <div class="form-group col-12">
                                    <label>{{__('admin.Name')}} <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control"  name="name">
                                </div>
                              	<div class="form-group col-12">
                                    <label>Designation <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control"  name="designation">
                                </div>
                              	<div class="form-group col-12">
                                    <label>Priority <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control"  name="order">
                                </div>
                              	<div class="form-group col-12">
                                    <label>Address </label>
                                    <input type="text" class="form-control"  name="address">
                                </div>
                              	<div class="form-group col-12">
                                    <label>Phone</label>
                                    <input type="text" class="form-control"  name="phone">
                                </div>
                                <div class="form-group col-12">
                                    <label>{{__('admin.Status')}} <span class="text-danger">*</span></label>
                                    <select name="status" class="form-control">
                                        <option value="1">{{__('admin.Active')}}</option>
                                        <option value="0">{{__('admin.InActive')}}</option>
                                    </select>
                                </div>
                                <div class="form-group col-12">
                                    <label>{{__('admin.Is Popular')}} <span class="text-danger">*</span></label>
                                    <select name="is_popular" class="form-control">
                                        <option value="0">Normal</option>
                                        <option value="1">Populer</option>
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
