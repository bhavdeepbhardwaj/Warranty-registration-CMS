@extends('user.layouts.app')

@section('title')
    @lang('title.product_warranty_registration')
@stop

@section('content')
    <!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-xl-1 ">
                </div>
                <div class="col-xl-10 col-lg-12">
                    <div class="ec-cat-list card card-default mb-24px">
                        <div class="card-body">
                            <h4>Product Warranty Registration</h4>
                            <hr>
                            <small>Items marked with an asterisk (*) must be filled out.</small><br><br>

                            <div class="col-lg-12">
                                @include('component.alert')
                                <div class="ec-vendor-upload-detail">
                                    <form class="row g-3" method="POST" action="{{ route('productRegistrationStore.store') }}">
                                        <!-- <form class="row g-3" > -->
                                        {!! csrf_field() !!}
                                        <div class="col-md-12 ">
                                            <div class="row">
                                                <input type="hidden" name="user_name" value="{{ $user_name }}">
                                                <input type="hidden" name="user_email" value="{{ $user_email }}">
                                                <input type="hidden" name="user_phone" value="{{ $user_phone }}">
                                                <div class="div col-md-6">
                                                    <label for="product_type" class="form-label">Product Type: <span
                                                            class="required">*</span></label>
                                                </div>
                                                <div class="div col-md-6 p-1">
                                                    <select name="product_type" id="product_type" class="form-select">
                                                        <option hidden>Choose Product Type</option>
                                                        @foreach ($product_type as $item)
                                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="div col-md-6">
                                                    <label for="product_Series" class="form-label">Product Series:
                                                        <span class="required">*</span></label>
                                                </div>
                                                <div class="div col-md-6 p-1">
                                                    <select name="product_Series" id="product_series"
                                                        class="form-select"></select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="div col-md-6">
                                                    <label for="product_model" class="form-label">Product
                                                        Model: <span class="required">*</span></label>
                                                </div>
                                                <div class="div col-md-6 p-1">
                                                    <select name="product_model" id="product_model" class="form-select">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="div col-md-6">
                                                    <label for="product_number" class="form-label">Product
                                                        Number: <span class="required">*</span></label>
                                                </div>
                                                <div class="div col-md-6 p-1">
                                                    <select name="product_number" id="product_number"
                                                        class="form-select">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Product Configuration: --}}
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="div col-md-6">
                                                    <label for="product_configuration" class="form-label">Product
                                                        Configuration:
                                                    </label>
                                                </div>
                                                <div class="div col-md-6 p-1 p-2">
                                                    <textarea class="form-select1" id="product_configuration" name="product_configuration" rows="2"></textarea>
                                                    {{-- <p  class="form-select1" id="product_configuration" name="product_configuration"
                                                        class="">AVITA LIBER 14" 1920x1080 Full HD IPS,
                                                        Pentium® N4200, 4GB DDR3 RAM, 256GB
                                                        SSD, WIFI+BT, Non Backlit Keyboard, Win 10 Home, Office 365
                                                        one-month Trial Bundled, Space Grey</p> --}}
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Serial Number: --}}
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="div col-md-6">
                                                    <label class="form-label">Serial Number: <span
                                                            class="required">*</span></label>
                                                </div>
                                                <div class="div col-md-6 p-1">
                                                    <input id="serialNumber" name="serial_number" class="form-select1"
                                                        type="text">
                                                    <div class="py-3">
                                                        <img class="img-fluid"
                                                            src="{{ asset('assets/img/sn_location.png ') }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Reseller Name: --}}
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="div col-md-6">
                                                    <label class="form-label">Reseller Name: <span
                                                            class="required">*</span></label>
                                                </div>
                                                <div class="div col-md-6 p-1">
                                                    <input type="test" class="form-select1" id="resellerName"
                                                        name="reseller_name">
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Purchase Date: --}}
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="div col-md-6">
                                                    <label class="form-label">Purchase Date: <span
                                                            class="required">*</span></label>
                                                </div>
                                                <div class="div col-md-6 p-1">
                                                    <input type="date" class="form-select1" name="purchase_date"
                                                        id="purchaseDate">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 text-center mt-4">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-1 ">
                </div>
            </div>
        </div> <!-- End Content -->
    </div>
    <!-- End Content Wrapper -->
    <!-- End Content Wrapper -->
@endsection

@section('js')


    <script>
        jQuery(document).ready(function() {
            jQuery('#product_type').change(function() {
                let producttypeID = jQuery(this).val();
                jQuery('#product_model').html('<option value="">Select Product Model</option>')
                jQuery('#product_number').html('<option value="">Select Product Number</option>')
                // alert(producttypeID)
                jQuery('#product_series').html('<option value="">Select Product Series</option>')
                jQuery.ajax({
                    url: '/getproductseries',
                    type: 'post',
                    data: 'producttypeID=' + producttypeID + '&_token={{ csrf_token() }}',
                    success: function(result) {
                        jQuery('#product_series').html(result)
                    }
                });
            });

            jQuery('#product_series').change(function() {
                let productSeriesID = jQuery(this).val();
                // alert(productSeriesID)
                jQuery.ajax({
                    url: '/getproductmodel',
                    type: 'post',
                    data: 'productSeriesID=' + productSeriesID + '&_token={{ csrf_token() }}',
                    success: function(result) {
                        jQuery('#product_model').html(result)
                    }
                });
            });

            jQuery('#product_model').change(function() {
                let productModelID = jQuery(this).val();
                // alert(productModelID)
                jQuery.ajax({
                    url: '/getproductnumber',
                    type: 'post',
                    data: 'productModelID=' + productModelID + '&_token={{ csrf_token() }}',
                    success: function(result) {
                        jQuery('#product_number').html(result)
                    }
                });
            });

            jQuery('#product_number').change(function() {
                let productConfigurationID = jQuery(this).val();
                // alert(productConfigurationID)
                jQuery.ajax({
                    url: '/getproductConfiguration',
                    type: 'post',
                    data: 'productConfigurationID=' + productConfigurationID +
                        '&_token={{ csrf_token() }}',
                    success: function(result) {
                        jQuery('#product_configuration').html(result)
                    }
                });
            });

        });
    </script>
@endsection
