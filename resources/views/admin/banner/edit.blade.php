@extends('admin.master_layout')
@section('title')
<title>{{__('Banners')}}</title>
@endsection
@section('admin-content')
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>{{__('Update Banners')}}</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="{{ route('admin.banners.index') }}">{{__('Banners')}}</a></div>
              <div class="breadcrumb-item">{{__('Update Banners')}}</div>
            </div>
          </div>

          <div class="section-body">
            <a href="{{ route('admin.banners.index') }}" class="btn btn-primary"><i class="fas fa-list"></i> {{__('Banners')}}</a>
            <div class="row mt-4">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.banners.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="form-group col-12">
                                    <label>{{__('admin.Image')}}</label>
                                    <input type="file" class="form-control-file"  name="image">
                                </div>
                                <div class="form-group col-12">
                                    <label>{{__('Section')}} <span class="text-danger">*</span></label>
                                    <select name="section" class="form-control">
                                        <option value="After Slider" {{ $item->section == 'After Slider' ? 'selected' : '' }}>{{__('After Slider')}}</option>
                                        <option value="After Pre-order" {{ $item->section == 'After Pre-order' ? 'selected' : '' }}>{{__('After Pre-order')}}</option>
                                        <option value="After Best Seller" {{ $item->section == 'After Best Seller' ? 'selected' : '' }}>{{__('After Best Seller')}}</option>
                                        <option value="Before Other Products" {{ $item->section == 'Before Other Products' ? 'selected' : '' }}>{{__('Before Other Products')}}</option>
                                        <option value="Before Package" {{ $item->section == 'Before Package' ? 'selected' : '' }}>{{__('Before Package')}}</option>
                                        <option value="Before Footer" {{ $item->section == 'Before Footer' ? 'selected' : '' }}>{{__('Before Footer')}}</option>
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
