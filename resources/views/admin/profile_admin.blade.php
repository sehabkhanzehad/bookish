@extends('seller.master_layout')
@section('title')
<title>{{__('admin.My Profile')}}</title>
@endsection
@section('seller-content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>{{__('admin.My Profile')}}</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="{{ route('seller.dashboard') }}">{{__('admin.Dashboard')}}</a></div>
          <div class="breadcrumb-item">{{__('admin.My Profile')}}</div>
        </div>
      </div>
      <div class="section-body">
        <div class="row mt-5">
            <div class="col-md-3">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="fas fa-coins"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>{{__('admin.Total Product Sale')}}</h4>
                  </div>
                  <div class="card-body">
                    
                  </div>
                </div>
              </div>
            </div>

                <div class="col-md-3">
                    <a href="{{ route('seller.my-withdraw.index') }}">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-danger">
                            <i class="far fa-newspaper"></i>
                            </div>
                            <div class="card-wrap">
                            <div class="card-header">
                                <h4>{{__('admin.Total Withdraw')}}</h4>
                            </div>
                            <div class="card-body">
                                {{ $setting->currency_icon }}
                            </div>
                            </div>
                        </div>
                    </a>
                </div>



            <div class="col-md-3">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>{{__('admin.Current Balance')}}</h4>
                  </div>
                  <div class="card-body">
                    {{ $setting->currency_icon }}{
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
                <a href="{{ route('seller.product.index') }}">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-circle"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>{{__('admin.Total Products')}}</h4>
                  </div>
                  <div class="card-body">
                    
                  </div>
                </div>
              </div>
            </a>
            </div>
          </div>
        <div class="row mt-sm-4">
            <div class="col-12 col-md-12 col-lg-5">
              <div class="card profile-widget">
                <div class="profile-widget-header">
                 
                        <img alt="image" src="" class="rounded-circle profile-widget-picture">
                  
                        <img alt="image" src="" class="rounded-circle profile-widget-picture">
                
                  <div class="profile-widget-items">
                    <div class="profile-widget-item">
                      <div class="profile-widget-item-label">{{__('admin.Joined at')}}</div>
                      <div class="profile-widget-item-value"></div>
                    </div>
                    <div class="profile-widget-item">
                      <div class="profile-widget-item-label">{{__('admin.Balance')}}</div>
                      <div class="profile-widget-item-value"></div>
                    </div>
                  </div>
                </div>
                <div class="profile-widget-description">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <td>{{__('admin.Name')}}</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>{{__('admin.Email')}}</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>{{__('admin.Phone')}}</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>{{__('admin.User Status')}}</td>
                                <td>
                                   
                                    <span class="badge badge-success">{{__('admin.Active')}}</span>
                                    
                                    <span class="badge badge-danger">{{__('admin.Inactive')}}</span>
                                
                                </td>
                            </tr>

                            <tr>
                                <td>{{__('admin.Shop Status')}}</td>
                                <td>
                                   
                                    <span class="badge badge-success">{{__('admin.Active')}}</span>
                                   
                                    <span class="badge badge-danger">{{__('admin.Inactive')}}</span>
                                
                                </td>
                            </tr>


                        </table>
                    </div>
                </div>
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

            $("#country_id").on("change",function(){
                var countryId = $("#country_id").val();
                if(countryId){
                    $.ajax({
                        type:"get",
                        url:"{{url('/seller/state-by-country/')}}"+"/"+countryId,
                        success:function(response){
                            $("#state_id").html(response.states);
                            var response= "<option value=''>{{__('admin.Select a City')}}</option>";
                            $("#city_id").html(response);
                        },
                        error:function(err){
                        }
                    })
                }else{
                    var response= "<option value=''>{{__('admin.Select a State')}}</option>";
                    $("#state_id").html(response);
                    var response= "<option value=''>{{__('admin.Select a City')}}</option>";
                    $("#city_id").html(response);
                }

            })

            $("#state_id").on("change",function(){
                var countryId = $("#state_id").val();
                if(countryId){
                    $.ajax({
                        type:"get",
                        url:"{{url('/seller/city-by-state/')}}"+"/"+countryId,
                        success:function(response){
                            $("#city_id").html(response.cities);
                        },
                        error:function(err){
                        }
                    })
                }else{
                    var response= "<option value=''>{{__('admin.Select a City')}}</option>";
                    $("#city_id").html(response);
                }

            })


        });
    })(jQuery);
</script>
@endsection
