@extends('admin.layouts.app')

@section('title')
    @lang('title.admin_product_registration_Number')
@stop


@section('content')
    <!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper breadcrumb-wrapper-2 breadcrumb-contacts">
                <h1>Product Registration</h1>
                <p class="breadcrumbs"><span><a href="{{ route('admin.home') }}">Home</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span><a href="{{ route('products.create') }}">Add
                        Product</a>
                </p>
            </div>
            <div class="row">
                <div class="col-xl-1 ">
                </div>
                <div class="col-xl-10 col-lg-12">
                    <div class="ec-cat-list card card-default mb-24px">
                        <div class="card-body">
                            <h4>Product Number Registration</h4>
                            <hr>
                            <small>Items marked with an asterisk (*) must be filled out.</small><br><br>

                            <div class="col-lg-12">
                                @include('component.alert')
                                <div class="ec-vendor-upload-detail">
                                    <div class="col-md-12 ">
                                        <form action="{{ route('number.store') }}" method="POST">
                                            {!! csrf_field() !!}
                                            <div class="row">
                                                <div class=" col-md-6">
                                                    <label for="product_type" class="form-label">Product Type: <span
                                                            class="required">*</span></label>
                                                </div>
                                                <div class=" col-md-6 p-1">
                                                    <div class="mb-3">
                                                        <select name="product_type" id="product_type"
                                                            class="form-select">
                                                            <option hidden>Choose Product Type</option>
                                                            @foreach ($product_type as $item)
                                                                <option value="{{ $item->id }}">{{ $item->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=" col-md-6">
                                                    <label for="product_series" class="form-label">Product Series: <span
                                                            class="required">*</span></label>
                                                </div>
                                                <div class=" col-md-6 p-1">
                                                    <div class="mb-3">
                                                        <select name="products_id" id="product_series"
                                                            class="form-select"></select>
                                                    </div>
                                                </div>
                                                <div class=" col-md-6">
                                                    <label for="product_model" class="form-label">Product Model: <span
                                                            class="required">*</span></label>
                                                </div>
                                                <div class=" col-md-6 p-1">
                                                    <div class="mb-3">
                                                        <select name="product_model_id" id="product_model"
                                                            class="form-select"></select>
                                                    </div>
                                                </div>
                                                <div class=" col-md-6">
                                                    <div class="mb-3">
                                                        <label for="product_number" class="form-label">Product Number:
                                                            <span class="required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class=" col-md-6 p-1">
                                                    <div class="mb-3">
                                                        <input type="text" class="form-select1" id="product_number"
                                                            name="product_number" value="">
                                                    </div>
                                                </div>
                                                <div class=" col-md-6">
                                                    <div class="mb-3">
                                                        <label for="titleName" class="form-label">Product Configuration:
                                                            <span class="required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class=" col-md-6 p-1">
                                                    <div class="mb-3">
                                                        <input type="text" class="form-select1" id="titleName"
                                                            name="titleName" value="">
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
