@extends('admin.master_layout')
@section('title')
<title>{{__('Banners')}}</title>
@endsection
@section('admin-content')
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>{{__('admin.Create Banners')}}</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="{{ route('admin.banners.index') }}">{{__('Banners')}}</a></div>
              <div class="breadcrumb-item">{{__('admin.Create Banners')}}</div>
            </div>
          </div>

          <div class="section-body">
            <a href="{{ route('admin.banners.index') }}" class="btn btn-primary"><i class="fas fa-list"></i> {{__('Banners')}}</a>
            <div class="row mt-4">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.banners.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group col-12">
                                    <label>{{__('admin.Image')}}</label>
                                    <input type="file" class="form-control-file"  name="image">
                                </div>
                                <div class="form-group col-12">
                                    <label>{{__('admin.Section')}} <span class="text-danger">*</span></label>
                                    <select name="section" class="form-control">
                                        <option value="After Slider">{{__('After Slider')}}</option>
                                        <option value="After Pre-order">{{__('After Pre-order')}}</option>
                                        <option value="After Best Seller">{{__('After Best Seller')}}</option>
                                        <option value="Before Other Products">{{__('Before Other Products')}}</option>
                                        <option value="Before Package">{{__('Before Package')}}</option>
                                        <option value="Before Footer">{{__('Before Footer')}}</option>
                                    </select>
                                </div>
                                <div class="form-group col-12">
                                    <label>{{__('admin.Status')}} <span class="text-danger">*</span></label>
                                    <select name="status" class="form-control">
                                        <option value="1">{{__('admin.Active')}}</option>
                                        <option value="0">{{__('admin.InActive')}}</option>
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
