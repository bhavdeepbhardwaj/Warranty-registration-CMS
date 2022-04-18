@extends('admin.layouts.app')

@section('title')
    @lang('title.admin_product_registration_Type')
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
                            <h4>Product Type Registration</h4>
                            <hr>
                            <small>Items marked with an asterisk (*) must be filled out.</small><br><br>

                            <div class="col-lg-12">
                                @if (session('msg'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('msg') }}
                                    </div>
                                @endif
                                <div class="ec-vendor-upload-detail">
                                    <div class="col-md-12 ">
                                        <div class="row">
                                            <div class=" col-md-6">
                                                <label for="product_type" class="form-label">Product Type: <span
                                                        class="required">*</span></label>
                                            </div>
                                            <div class=" col-md-6 p-1">
                                                <form action="{{ route('product.store') }}" method="POST">
                                                    {!! csrf_field() !!}
                                                    <div class="mb-3">
                                                        <input type="text" class="form-select1" id="recipient-name"
                                                            name="name" value="" required>
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


@endsection
