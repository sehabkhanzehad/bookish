@extends('admin.master_layout')
@section('title')
<title>{{__('admin.Products')}}</title>
@endsection
@section('admin-content')
      <!-- Main Content -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.9.359/pdf.min.js"></script>
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>{{__('admin.Edit Product')}}</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">{{__('admin.Dashboard')}}</a></div>
              <div class="breadcrumb-item">{{__('admin.Edit Product')}}</div>
            </div>
          </div>
          <div class="section-body">
            <a href="{{ route('admin.product.index') }}" class="btn btn-primary"><i class="fas fa-list"></i> {{__('admin.Products')}}</a>
            <div class="row mt-4">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.product.update',$product->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>{{__('admin.Thumbnail Image Preview')}}</label>
                                    <div>
                                        <img id="preview-img" class="admin-img" src="{{ asset('uploads/custom-images/'.$product->thumb_image) }}" alt="">
                                    </div>

                                </div>

                                <div class="form-group col-6 col-lg-3">
                                    <label>{{__('admin.Thumnail Image')}} <span class="text-danger">*</span></label>
                                    <input type="file" class="form-control-file"  name="thumb_image" onchange="previewThumnailImage(event)">
                                </div>
                                <div class="form-group col-6 col-lg-3">
                                @foreach($product->gallery as $key=>$pGImg)

                                <!--<i class="fa fa-times" aria-hidden="true"></i>-->
                                <a href="javascript:;" data-toggle="modal" data-target="#deleteModal" class="btn btn-danger btn-sm" onclick="deleteData({{ $pGImg->id }})"><i class="fa fa-times" aria-hidden="true"></i></a>

                                <img src="{{asset($pGImg->image)}}" width="100px" height="100px">
                                @endforeach

                                </div>
                                <br/>
                                <div class="form-group col-6">
                                    <label for="">Select Multiple images here </label>
                                    <input type="file" class="form-control-file" name="images[]" multiple>
                                </div>
                                <div class="form-group col-4 col-lg-3">
                                    <label>Read File Upload <span class="text-danger">*</span></label>  <button id="convertPdfButton" type="button" class="btn btn-secondary">Convert PDF</button>
                                    <input type="file" class="form-control-file" id="readFileUpload" name="read_file">
                                    <div id="preview-images" class="col-12 mt-3">
                                        <ul id="pdfImagesList" class="list-unstyled">
                                            @foreach($product->pdf_images as $file)
                                                    <li>
                                                        <img src="{{ asset($file->image) }}">
                                                    </li>
                                                @endforeach
                                        </ul>
                                    </div>
                                    <style>
                                        #pdfImagesList{
                                            display: flex;
                                            gap: 5px;
                                        }
                                        #pdfImagesList li img{
                                            width: 50px;
                                        }
                                    </style>
                                </div>
                                <input type="file" class="form-control-file" id="convertedImages" name="productpdf[]" multiple style="opacity: 0;">
                                <input type="file" class="form-control-file" id="convertedPdfImages" name="productfilepdf[]" multiple style="opacity: 0;">
                            <input type="hidden" name="product_id" required value="{{ $product->id }}">




                                <!--<div class="form-group col-12">-->
                                <!--    <label>{{__('admin.Short Name')}} <span class="text-danger">*</span></label>-->
                                <!--    <input type="text" id="short_name" class="form-control"  name="short_name" value="{{ $product->short_name }}">-->
                                <!--</div>-->

                                <div class="form-group col-6">
                                    <label>{{__('admin.Name')}} <span class="text-danger">*</span></label>
                                    <input type="text" id="name" class="form-control"  name="name" value="{{ $product->name }}">
                                </div>

                                <div class="form-group col-6">
                                    <label>{{__('admin.Slug')}} <span class="text-danger">*</span></label>
                                    <input type="text" id="slug" class="form-control"  name="slug" value="{{ $product->slug }}">
                                </div>

                                <div class="form-group col-4">
                                    <label>Vedio URL </label>
                                    <input type="text" id="slug" class="form-control"  name="video_link" value="{{ $product->video_link }}">
                                </div>
                                <div class="form-group col-4">
                                    <label>{{__('admin.Writer')}} <span class="text-danger">*</span></label>
                                    <select name="writer_id" class="form-control select2" id="Writer">
                                        <option value="">{{__('Select Writer')}}</option>
                                        @foreach ($writers as $writer)
                                            <option value="{{ $writer->id }}" {{ $product->writer_id == $writer->id ? 'selected' : '' }}>{{ $writer->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-4">
                                    <label>{{__('Product Type')}} <span class="text-danger">*</span></label>
                                    <select name="product_type" class="form-control select2" id="product_type">
                                        <option value="">{{__('Product Type')}}</option>
                                        <option value="1" {{ $product->product_type == 1 ? 'selected' : '' }}>Regular Product</option>
                                        <option value="2" {{ $product->product_type == 2 ? 'selected' : '' }}>Book</option>
                                        <option value="3" {{ $product->product_type == 3 ? 'selected' : '' }}>E-Book</option>
                                    </select>
                                    <div id="pdf_upload" class="{{ $product->product_type != 3 ? 'd-none' : '' }}">
                                        <label>{{__('Select PDF')}} <span class="text-danger">*</span></label>
                                        <input type="file" class="form-control-file" id="pdfFileUpload" name="pdf_file">
                                        <div id="preview-images" class="col-12 mt-3">
                                            <ul id="pdffileImagesList" class="list-unstyled">
                                                @foreach($product->pdf_file_images as $file)
                                                    <li>
                                                        <img src="{{ asset($file->image) }}">
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <style>
                                            #pdffileImagesList{
                                                display: flex;
                                                gap: 5px;
                                            }
                                            #pdffileImagesList li img{
                                                width: 50px;
                                            }
                                        </style>
                                    </div>
                                </div>
                                <div class="form-group col-4">
                                    <label>{{__('admin.Publication')}} <span class="text-danger">*</span></label>
                                    <select name="publication_id" class="form-control select2" id="Publication">
                                        <option value="">{{__('Select Publication')}}</option>
                                        @foreach ($publications as $publication)
                                            <option value="{{ $publication->id }}" {{ $product->publication_id == $publication->id ? 'selected' : '' }}>{{ $publication->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-4">
                                    <label>{{__('admin.Category')}} <span class="text-danger">*</span></label>
                                    <select name="category" class="form-control select2" id="category">
                                        <option value="">{{__('admin.Select Category')}}</option>
                                        @foreach ($categories as $category)
                                            <option {{ $product->category_id == $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-4">
                                    <label>{{__('admin.Sub Category')}}</label>
                                    <select name="sub_category" class="form-control select2" id="sub_category">
                                        <option value="">{{__('admin.Select Sub Category')}}</option>
                                        @if ($product->category_id != 0)
                                            @foreach ($subCategories as $subCategory)
                                            <option {{ $product->sub_category_id == $subCategory->id ? 'selected' : '' }} value="{{ $subCategory->id }}">{{ $subCategory->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>

                                <div class="form-group col-4">
                                    <label>{{__('admin.Child Category')}}</label>
                                    <select name="child_category" class="form-control select2" id="child_category">
                                        <option value="">{{__('admin.Select Child Category')}}</option>
                                        @if ($product->sub_category_id != 0)
                                            @foreach ($childCategories as $childCategory)
                                            <option {{ $product->child_category_id == $childCategory->id ? 'selected' : '' }} value="{{ $childCategory->id }}">{{ $childCategory->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>

                                <div class="form-group col-4">
                                    <label>{{__('Active for Pre-order')}}</label>
                                    <select name="pre_order" class="form-control select2" id="brand">
                                        <option {{ $product->pre_order == 1 ? 'selected' : '' }} value="1">{{__('admin.Active')}}</option>
                                        <option {{ $product->pre_order == 0 ? 'selected' : '' }} value="0">{{__('admin.Inactive')}}</option>
                                    </select>
                                </div>

                                <div class="form-group col-4">
                                    <label>{{__('Select Package')}}</label>
                                    <select name="package_id" class="form-control select2" id="brand">
                                        <option value="">Select Package</option>
                                        @foreach ($packages as $package)
                                        <option value="{{ $package->id }}"{{ $package->id == $product->package_id ? 'selected' : '' }}>{{ $package->title }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-4">
                                    <label>{{__('admin.Brand')}}</label>
                                    <select name="brand" class="form-control select2" id="brand">
                                        <option value="">{{__('admin.Select Brand')}}</option>
                                        @foreach ($brands as $brand)
                                            <option {{ $product->brand_id == $brand->id ? 'selected' : '' }} value="{{ $brand->id }}">{{ $brand->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-4">
                                    <label>{{__('admin.Subject')}} </label>
                                    <select name="subject_id" class="form-control select2" id="brand">
                                        <option value="">{{__('Subject')}}</option>
                                        @foreach ($subjects as $subject)
                                            <option {{ $product->subject_id == $subject->id ? 'selected' : '' }} value="{{ $subject->id }}">{{ $subject->title }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-6">
                                    <label>{{__('admin.SKU')}} </label>
                                   <input type="text" class="form-control" name="sku" value="{{ $product->sku }}">
                                </div>

                                <div class="form-group col-6">
                                    <label>{{__('admin.Price')}} <span class="text-danger">*</span></label>
                                   <input type="text" class="form-control" name="price" value="{{ $product->price }}">
                                </div>

                                <div class="form-group col-6">
                                    <label>{{__('admin.Offer Price')}} </label>
                                   <input type="text" class="form-control" name="offer_price" value="{{ $product->offer_price }}">
                                </div>
                                <div class="form-group col-6">
                                    <label>{{__('admin.Short Description')}} </label>
                                   <input type="text" class="form-control" name="short_description" value="{{ $product->short_description }}">
                                </div>

                              <!--<div class="col-md-12">-->
                              <!--  <div class="row">-->

                              <!--          <div class="col-md-6">-->
                              <!--                    <div class="form-group col-12">-->
                              <!--                      <label>{{__('admin.Weight')}} <span class="text-danger">*</span></label>                                            -->

                              <!--                      <input type="text" class="form-control" name="weight" value="{{ $product->weight }}">-->
                              <!--                  </div>-->
                              <!--          </div>-->
                              <!--    <div class="col-md-6">-->

                              <!--    <div class="form-group col-12" style="margin-bottom: 7px;">-->
                              <!--      <label></label>-->
                                  <!-- <input type="text" class="form-control" name="weight" value="{{ old('weight') }}"> -->
                              <!--  </div>-->

                              <!--<select name="measure" class="form-control form-select shadow-none" id="">-->
                              <!--              <option {{ $product->measure == 'Grm' ? 'selected' : '' }} value="Grm">Grm</option>-->
                              <!--              <option {{ $product->measure == 'Ltr' ? 'selected' : '' }} value="Ltr">Ltr</option>-->

                              <!--</select>-->
                              <!--  </div>                                  -->

                              <!--    </div>-->

                              <!--</div>     -->



                                <!--<div class="form-group col-12">-->
                                <!--    <label>{{__('admin.Tag')}} <span class="text-danger">*</span></label>-->
                                <!--   <input type="text" class="form-control tags" name="tags" value="{{ $product->tags }}">-->
                                <!--</div>-->



                                <!--<div class="form-group col-12">-->
                                <!--    <label>{{__('admin.Short Description') }}</label>-->
                                <!--    <textarea name="short_description" id="" cols="30" rows="10" class="summernote">{{ $product->short_description }}</textarea>-->
                                <!--</div>-->

                                <div class="form-group col-12">
                                    <label>{{__('admin.Long Description')}} <span class="text-danger">*</span></label>
                                    <textarea name="long_description" id="" cols="30" rows="10" class="summernote">{{ $product->long_description }}</textarea>
                                </div>



                                @if ($product->vendor_id != 0)
                                    <div class="form-group col-12">
                                        <label>{{__('admin.Product Request from seller')}} <span class="text-danger">*</span></label>
                                        <select name="approve_by_admin" class="form-control">
                                            <option {{ $product->approve_by_admin == 1 ? 'selected' : '' }} value="1">{{__('admin.Approved')}}</option>
                                            <option {{ $product->approve_by_admin == 0 ? 'selected' : '' }} value="0">{{__('admin.Pending')}}</option>
                                        </select>
                                    </div>
                                @endif
                                <div class="form-group col-12">
                                    <label>{{__('admin.Status')}} <span class="text-danger">*</span></label>
                                    <select name="status" class="form-control">
                                        <option {{ $product->status == 1 ? 'selected' : '' }} value="1">{{__('admin.Active')}}</option>
                                        <option {{ $product->status == 0 ? 'selected' : '' }} value="0">{{__('admin.Inactive')}}</option>
                                    </select>
                                </div>
                                <div class="form-group col-12">
                                    <label>{{__('Is Best Seller')}} <span class="text-danger">*</span></label>
                                    <select name="is_best_seller" class="form-control">
                                        <option {{ $product->is_best_seller == 1 ? 'selected' : '' }} value="1">{{__('admin.Active')}}</option>
                                        <option {{ $product->is_best_seller == 0 ? 'selected' : '' }} value="0">{{__('admin.Inactive')}}</option>
                                    </select>
                                </div>


                                <div class="form-group col-12" style="display: none;">
                                    <label>{{__('admin.SEO Title')}}</label>
                                   <input type="text" class="form-control" name="seo_title" value="{{ $product->seo_title }}">
                                </div>

                                <div class="form-group col-12" style="display: none;">
                                    <label>{{__('admin.SEO Description')}}</label>
                                    <textarea name="seo_description" id="" cols="30" rows="10" class="form-control text-area-5">{{ $product->seo_description }}</textarea>
                                </div>

                            <div class="row">
 @if(!empty($product->type == 'variable'))

 @if(!empty($product->prod_color == 'varcolor'))

                                <div class="col-md-5">


                                <div class="table-responsive">
                                    <table class="table table-centered table-nowrap table-bordered text-center">
                                        <thead>
                                            <tr>
                                               <th>Sizesssss</th>

                                                <th style="">Price</th>

                                                <th width="5">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($product->variations as $v)
                                            <tr>
                                                <td>
                                                    <input type="hidden" name="variation_id[]" value="{{$v->id}}">
                                                    <select name="size_id[]" class="form-control">
                                                        @foreach($sizes as $size)
                                                        <option {{$size->id==$v->size_id ?'selected':''}} value="{{$size->id}}">{{ $size->title }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>

                                                <td style="">
                                                    <input class="variable_sell_price form-control" type="number" value="{{ $v->sell_price }}" name="sell_price[]" placeholder="Price">
                                                </td>

                                                <td style="display:flex; align-items: flex-end;">
                                                    <a class="action-icon btn btn-primary add_moore" style="cursor: pointer;color: #ffffff;">Add</a>
                                                    <a class="action-icon btn btn-danger remove" style="cursor: pointer;color: #ffffff;">Delete </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>


                                </div>
           @else
            <div class="col-md-12">



                                <div class="table-responsive">
                                    <table class="table table-centered table-nowrap table-bordered text-center">
                                        <thead>
                                            <tr>
                                               <th>Size</th>

                                                <th style="">Price</th>

                                                <th width="5">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($product->variations as $v)
                                            <tr>
                                                <td>
                                                    <input type="hidden" name="variation_id[]" value="{{$v->id}}">
                                                    <select name="size_id[]" class="form-control">
                                                        @foreach($sizes as $size)
                                                        <option {{$size->id==$v->size_id ?'selected':''}} value="{{$size->id}}">{{ $size->title }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>

                                                <td style="">
                                                    <input class="variable_sell_price form-control" type="number" value="{{ $v->sell_price }}" name="sell_price[]" placeholder="Price">
                                                </td>

                                                <td style="display:flex; align-items: flex-end;">
                                                    <a class="action-icon btn btn-primary add_moore" style="cursor: pointer;color: #ffffff;">Add</a>
                                                    <a class="action-icon btn btn-danger remove" style="cursor: pointer;color: #ffffff;">Delete </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                </div>
           @endif
                                	@endif
@if(!empty($product->prod_color == 'varcolor'))
                                <div class="col-md-7">

                                        <div id="variable_table_color" class="" >
                                    <div class="table-responsive">
                                        <table class="table table-centered table-nowrap table-bordered text-center color_table">
                                            <thead>
                                                <tr>
                                                    <th style="width: 23%">Color</th>
                                                    <th style="width: 45%;">Image</th>
                                                  	<th style="width: 23%"> preview <th>

                                                    <th >Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              @foreach($product->colorVariations as $vc)
                                                <tr id="color_row">
                                                    <td>
                                                       <input type="hidden" name="color_variation_id[]" value="{{$vc->id}}">
                                                        <select name="color_id[]" class="form-control">
                                                            @foreach($colors as $color)
                                                            <option {{$color->id==$vc->color_id ? 'selected' :''}} value="{{$color->id}}">{{ $color->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input class="variable_product_image form-control" type="file" name="var_images[]" placeholder="Price">
                                                    </td>
                                                  <td>
                                                  		<img src="{{asset($vc->var_images)}}" width="100px" height="100px" />
                                                  </td>
                                                    <td style="display:flex; align-items: flex-end;">
                                                        <a class="btn action-icon btn-primary add_moore_color" style="cursor: pointer;color: #ffffff;">Add </a>
                                                      	<a class="action-icon btn btn-danger remove" style="cursor: pointer;color: #ffffff;">Delete </a>
                                                    </td>
                                                </tr>
                                              @endforeach
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                                    </div>


                            @endif
                                </div>

                            </div>
                            @if(!empty($var_stock))
                            <div id="variation_quantity_table" class="col-md-12" style="">
                                <div class="table-responsive">
                                    <label for="" class="form-label">Manage Variation Quantity</label>
                                    <table class="table table-centered table-nowrap table-bordered text-center">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th class="variation-name">Variation</th>
                                                <th>Quantity</th>
                                            </tr>
                                        </thead>
                                        <tbody id="variation_quantity_body">
                                           @foreach($var_stock as $key=>$vstock)
                                            <tr class="">

                                                <td>{{$key+1}}
                                                    <input type="hidden" name="stock_id[]" value="{{$vstock->id}}">
                                                </td>
                                                <td>{{$vstock->sizeName}}_{{$vstock->cname}} </td>
                                                <td><input class="form-controll" type="number" name="stockqty[]" value="{{$vstock->quantity}}"></td>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            @endif

                            <div class="row">
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit" id="submit">{{__('admin.Update')}}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                  </div>
                </div>
          </div>
        </section>
      </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script>
    (function($) {
        "use strict";
        var specification = '{{ $product->is_specification == 1 ? true : false }}';
        $(document).ready(function () {
            $("#name").on("focusout",function(e){
                $("#slug").val(convertToSlug($(this).val()));
            })

            $("#category").on("change",function(){
                var categoryId = $("#category").val();
                if(categoryId){
                    $.ajax({
                        type:"get",
                        url:"{{url('/admin/subcategory-by-category/')}}"+"/"+categoryId,
                        success:function(response){
                            $("#sub_category").html(response.subCategories);
                            var response= "<option value=''>{{__('admin.Select Child Category')}}</option>";
                            $("#child_category").html(response);

                        },
                        error:function(err){
                            console.log(err);

                        }
                    })
                }else{
                    var response= "<option value=''>{{__('admin.Select Sub Category')}}</option>";
                    $("#sub_category").html(response);
                    var response= "<option value=''>{{__('admin.Select Child Category')}}</option>";
                    $("#child_category").html(response);
                }


            })

            $("#sub_category").on("change",function(){
                var SubCategoryId = $("#sub_category").val();
                if(SubCategoryId){
                    $.ajax({
                        type:"get",
                        url:"{{url('/admin/childcategory-by-subcategory/')}}"+"/"+SubCategoryId,
                        success:function(response){
                            $("#child_category").html(response.childCategories);
                        },
                        error:function(err){
                            console.log(err);

                        }
                    })
                }else{
                    var response= "<option value=''>{{__('admin.Select Child Category')}}</option>";
                    $("#child_category").html(response);
                }

            })

            $("#is_return").on('change',function(){
                var returnId = $("#is_return").val();
                if(returnId == 1){
                    $("#policy_box").removeClass('d-none');
                }else{
                    $("#policy_box").addClass('d-none');
                }

            })

            $("#addNewSpecificationRow").on('click',function(){
                var html = $("#hidden-specification-box").html();
                $("#specification-box").append(html);
            })

            $(document).on('click', '.deleteSpeceficationBtn', function () {
                $(this).closest('.delete-specification-row').remove();
            });


            $("#manageSpecificationBox").on("click",function(){
                if(specification){
                    specification = false;
                    $("#specification-box").addClass('d-none');
                }else{
                    specification = true;
                    $("#specification-box").removeClass('d-none');
                }


            })

            $(".removeExistSpecificationRow").on("click",function(){
                var isDemo = "{{ env('APP_MODE') }}"
                if(isDemo == 'DEMO'){
                    toastr.error('This Is Demo Version. You Can Not Change Anything');
                    return;
                }
                var specificationId = $(this).attr("data-specificationiId");
                $.ajax({
                    type:"put",
                    data: { _token : '{{ csrf_token() }}' },
                    url:"{{url('/admin/removed-product-exist-specification/')}}"+"/"+specificationId,
                    success:function(response){
                        toastr.success(response)
                        $("#existSpecificationBox-"+specificationId).remove();
                    },
                    error:function(err){
                        console.log(err);

                    }
                })
            })

        });
    })(jQuery);

    function convertToSlug(Text){
            return Text
                .toLowerCase()
                .replace(/[^\w ]+/g,'')
                .replace(/ +/g,'-');
    }

    function previewThumnailImage(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('preview-img');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    };

</script>

<script>
    function deleteData(id){
        $("#deleteForm").attr("action",'{{ url("admin/delete-product-image/") }}'+"/"+id)
    }
    function changeProductStatus(id){
        var isDemo = "{{ env('APP_MODE') }}"
        if(isDemo == 'DEMO'){
            toastr.error('This Is Demo Version. You Can Not Change Anything');
            return;
        }
        $.ajax({
            type:"put",
            data: { _token : '{{ csrf_token() }}' },
            url:"{{url('/admin/product-gallery-status/')}}"+"/"+id,
            success:function(response){
                toastr.success(response)
            },
            error:function(err){
                console.log(err);

            }
        })
    }


// manage variation quantity start

// Track selected color and size options

let selectedColors = [];

let selectedSizes = [];

function updateVariationQuantityTable() {
    let variationQuantityTable = $('#variation_quantity_table');

     var variationQuantityBody = $("#variation_quantity_body");
        var existingQuantities = [];
        var existingstockId = [];

        // Save existing quantity values before updating the table
        variationQuantityBody.find("input[name='stockqty[]']").each(function () {
            existingQuantities.push($(this).val());
        });

        variationQuantityBody.find("input[name='stock_id[]']").each(function () {
            existingstockId.push($(this).val());
        });


    // Clear existing rows
    variationQuantityBody.empty();

    // Loop through each selected color and size
    let serialNumber = 1;
    selectedSizes.forEach(function (size, sizeIndex) {
    selectedColors.forEach(function (color, colorIndex) {

    let sizeValue = selectedSizesvalue[sizeIndex];
    let colorValue = selectedColorsvalue[colorIndex];

    if (color && size && sizeValue && colorValue) {
        // Create a new row
        let newRow = $('<tr>');

        // Add cells to the row
        newRow.append($('<td>').text(serialNumber++));
        newRow.append($('<td>').addClass('variation-name').text(size + '_' + color).append(
            $('<input>').addClass('form-control').attr({
                type: 'hidden',
                name: 'size_id[]',
                placeholder: 'Size id',
                value: sizeValue
            })
        ).append(
            $('<input>').addClass('form-control').attr({
                type: 'hidden',
                name: 'color_id[]',
                placeholder: 'Size id',
                value: colorValue
            })
        ));
        newRow.append($('<td>').append(
            $('<input>').addClass('form-control').attr({
                type: 'number',
                name: 'stock_id[]',
                placeholder: 'StockId',
                value: existingstockId.shift()
            })
        ));
        newRow.append($('<td>').append(
            $('<input>').addClass('form-control').attr({
                type: 'number',
                name: 'stockqty[]',
                placeholder: 'Quantity',
                value: existingQuantities.shift()
            })
        ));

        // Append the new row to the table body
        variationQuantityBody.append(newRow);
    }
});
});


    // Show the variation quantity table if variations are added
    if (serialNumber > 1) {
        variationQuantityTable.show();
    } else {
        variationQuantityTable.hide();
    }
}

// Call this function on color and size change
$(document).on('change', "select[name='color_id[]'], select[name='size_id[]']", function () {
    selectedColors = $("select[name='color_id[]']").find('option:selected').map(function () {
        return $(this).text();
    }).get();

    selectedColorsvalue = $("select[name='color_id[]']").find('option:selected').map(function () {
        return $(this).val();
    }).get();

    selectedSizes = $("select[name='size_id[]']").find('option:selected').map(function () {
        return $(this).text();
        // return $(this).val();
    }).get();

    selectedSizesvalue = $("select[name='size_id[]']").find('option:selected').map(function () {
        return $(this).val();
    }).get();

    updateVariationQuantityTable();
});
// Add more variation quantities
$(document).on('click', 'a.add_moore_color, a.add_moore', function () {
    updateVariationQuantityTable();
});

// Handle color or size removal
function handleOptionRemoval(optionType) {
    if (optionType === 'color') {
        selectedColors = $("select[name='color_id[]']").find('option:selected').map(function () {
            return $(this).text();
        }).get();
    } else if (optionType === 'size') {
        selectedSizes = $("select[name='size_id[]']").find('option:selected').map(function () {
            return $(this).text();
        }).get();
    }

    updateVariationQuantityTable();
}

     // add moore

    $(document).on('blur', '.variable_sell_price', function() {
            let tblrow = $(this).closest("tr");

            var discount_type=$("select[name='discount_type']").val();

            let variable_sell_price = tblrow.find('td input.variable_sell_price').val();
            var discount_amount = $("input[name='dicount_amount']").val();

            if (discount_type=='percentage') {
                new_price= (variable_sell_price / 100) * discount_amount;
                new_price=variable_sell_price - new_price;
            }else{
                new_price= variable_sell_price - discount_amount;
            }
            tblrow.find('td input.variable_dis_price').val(new_price);
        });
    $(document).on('click','a.add_moore', function(){
            let tblrow = $(this).closest("tr");

            let variable_sell_price = tblrow.find('td input.variable_sell_price').val();
            let variable_dis_price = tblrow.find('td input.variable_dis_price').val();

            let type='{{ $product->type}}';

            if (type=='single') {
                toastr.error('For Single Product You Can\'t Add Moore');
                return;
            }
            let row=`<tr>
                        <td>
                            <select name="size_id[]" class="form-control">
                                @foreach($sizes as $size)
                                <option value="{{$size->id}}">{{ $size->title }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                        <input class="variable_sell_price form-control" type="number" value="${variable_sell_price}" name="sell_price[]" placeholder="Price">
                        </td>

                        <td style="display:flex; align-items: flex-end;">
                            <a class="action-icon btn-primary add_moore"> Add  </a>
                            <a class="action-icon btn-danger remove"> Delete </a>
                        </td>
                    </tr>`;
            $(document).find('.table tbody').append(row);

        });
  	$(document).on('click','a.add_moore_color', function(){

            let tblrow = $(this).closest("#color_row");

            let variable_product_image = tblrow.find('td input.variable_product_image').val();

            let type=$("select[name='prod_color']").val();

            if (type=='sincolor') {
                toastr.error('For Single Product You Can\'t Add Moore');
                return;
            }
            let row=`<tr id="color_row">
                        <td>
                            <select name="color_id[]" class="form-control">
                                @foreach($colors as $color)
                                  <option {{$color->is_default==1 ?'selected':''}} value="{{$color->id}}">{{ $color->name }}</option>
                                @endforeach
                            </select>
                        </td>


                        <td>

			<input class="variable_product_image form-control" type="file" name="var_images[]" placeholder="Price">

                        </td>

                        <td style="display:flex; align-items: flex-end;">

                                <a class="btn action-icon btn-primary add_moore_color" style="cursor: pointer;color: #ffffff;"> Add </a>
                                <a class="btn action-icon btn-danger remove" style="cursor: pointer;color: #ffffff;"> Delete </a>

                        </td>
                    </tr>`;
            $(document).find('.color_table tbody').append(row);

        });

    $(document).on('change', "select[name='prod_color']", function() {
                let type=$("select[name='prod_color']").val();
                if(type == 'varcolor') {
                    document.getElementById('variable_table_color').style.display = 'block';
                } else {
                    document.getElementById('variable_table_color').style.display = 'none';
                }
        });
    $(document).on('click', "a.remove",function(e) {
                var whichtr = $(this).closest("tr");
                whichtr.remove();
            });
            
        $(document).ready(function(){
            $('#product_type').change(function(){
                var    $value = $(this).val();
                if($value == '3'){
                    $('#pdf_upload').removeClass('d-none');
                }else{ 
                    $('#pdf_upload').addClass('d-none');
                }
            })
        })
        
</script>
<script>
        document.getElementById('readFileUpload').addEventListener('change', function (event) {
            const file = event.target.files[0];
            if (!file || file.type !== 'application/pdf') {
                console.error('Please upload a valid PDF file.');
                return;
            }

            const submitButton = document.getElementById('submit');
            submitButton.disabled = true;  // Disable the submit button initially

            const reader = new FileReader();
            reader.onload = function(e) {
                const pdfData = new Uint8Array(e.target.result);
                pdfjsLib.getDocument({data: pdfData}).promise.then(pdf => {
                    const pdfImagesList = document.getElementById('pdfImagesList');
                    const convertedImages = document.getElementById('convertedImages');
                    pdfImagesList.innerHTML = ''; // Clear previous images

                    const dataTransfer = new DataTransfer();
                    let processedPages = 0;

                    // Loop through each page and convert to image
                    for (let pageNum = 1; pageNum <= pdf.numPages; pageNum++) {
                        pdf.getPage(pageNum).then(page => {
                            const scale = 2.5;
                            const viewport = page.getViewport({ scale });
                            const canvas = document.createElement('canvas');
                            const context = canvas.getContext('2d');
                            canvas.height = viewport.height;
                            canvas.width = viewport.width;

                            page.render({
                                canvasContext: context,
                                viewport: viewport
                            }).promise.then(() => {
                                const img = document.createElement('img');
                                img.src = canvas.toDataURL();
                                const li = document.createElement('li');
                                li.appendChild(img);
                                pdfImagesList.appendChild(li);

                                const blob = dataURLtoBlob(canvas.toDataURL());
                                const file = new File([blob], `page_${pageNum}.png`, { type: 'image/png' });
                                dataTransfer.items.add(file);

                                // Update the hidden input element with the DataTransfer object
                                convertedImages.files = dataTransfer.files;

                                processedPages++;
                                // Enable the submit button if all pages are processed
                                if (processedPages === pdf.numPages) {
                                    submitButton.disabled = false;
                                }
                            });
                        });
                    }
                }).catch(error => {
                    console.error('Error loading PDF: ', error);
                });
            };

            reader.readAsArrayBuffer(file);
        });
        
        document.getElementById('pdfFileUpload').addEventListener('change', function (event) {
            const file = event.target.files[0];
            if (!file || file.type !== 'application/pdf') {
                console.error('Please upload a valid PDF file.');
                return;
            }
            
            const reader = new FileReader();
            reader.onload = function(e) {
                const pdfData = new Uint8Array(e.target.result);
                pdfjsLib.getDocument({data: pdfData}).promise.then(pdf => {
                    const pdffileImagesList = document.getElementById('pdffileImagesList');
                    const convertedPdfImages = document.getElementById('convertedPdfImages');
                    pdffileImagesList.innerHTML = ''; // Clear previous images

                    const dataTransfer = new DataTransfer();
                    let processedPages = 0;

                    // Loop through each page and convert to image
                    for (let pageNum = 1; pageNum <= pdf.numPages; pageNum++) {
                        pdf.getPage(pageNum).then(page => {
                            const scale = 2.5;
                            const viewport = page.getViewport({ scale });
                            const canvas = document.createElement('canvas');
                            const context = canvas.getContext('2d');
                            canvas.height = viewport.height;
                            canvas.width = viewport.width;

                            page.render({
                                canvasContext: context,
                                viewport: viewport
                            }).promise.then(() => {
                                const img = document.createElement('img');
                                img.src = canvas.toDataURL();
                                const li = document.createElement('li');
                                li.appendChild(img);
                                pdffileImagesList.appendChild(li);

                                const blob = dataURLtoBlob(canvas.toDataURL());
                                const file = new File([blob], `page_${pageNum}.png`, { type: 'image/png' });
                                dataTransfer.items.add(file);

                                // Update the hidden input element with the DataTransfer object
                                convertedPdfImages.files = dataTransfer.files;

                                processedPages++;
                                // Enable the submit button if all pages are processed
                            });
                        });
                    }
                }).catch(error => {
                    console.error('Error loading PDF: ', error);
                });
            };

            reader.readAsArrayBuffer(file);
        });

        function dataURLtoBlob(dataurl) {
            const arr = dataurl.split(',');
            const mime = arr[0].match(/:(.*?);/)[1];
            const bstr = atob(arr[1]);
            let n = bstr.length;
            const u8arr = new Uint8Array(n);
            while (n--) {
                u8arr[n] = bstr.charCodeAt(n);
            }
            return new Blob([u8arr], { type: mime });
        }
    </script>
@endsection
