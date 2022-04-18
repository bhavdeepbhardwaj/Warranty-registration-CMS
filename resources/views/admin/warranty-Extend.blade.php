@extends('admin.layouts.app')
@section('title')
    @lang('title.admin_product_warranty_extend')
@stop
@section('css')
    <!-- No Extra plugin used -->
    <link href="{{ asset('assets/plugins/data-tables/datatables.bootstrap5.min.css') }}" rel='stylesheet'>
    <link href="{{ asset('assets/plugins/data-tables/responsive.datatables.min.css') }}" rel='stylesheet'>
    <style>
    </style>
@endsection
@section('content')
    <!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                <div>
                    <h2>Warranty Extend</h2>
                    <p class="breadcrumbs"><span><a href="{{ route('admin.home') }}">Home</a></span>
                        <span><i class="mdi mdi-chevron-right"></i></span>Warranty Extend
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-default">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="responsive-data-table" class="table" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>User Name</th>
                                            <th>User Email</th>
                                            <th>User Phone</th>
                                            <th>Product Type</th>
                                            <th>Product Series</th>
                                            <th>Product Model</th>
                                            <th>Product Number</th>
                                            <th>Product Configuration</th>
                                            <th>Serial Number</th>
                                            <th>Purchase Code</th>
                                            <th>Reseller Name</th>
                                            <th>Purchase Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($warranty_extend as $we)
                                            <tr>
                                                <td>{{ $we->user_name }}</td>
                                                <td>{{ $we->user_email }}</td>
                                                <td>{{ $we->user_phone }}</td>
                                                <td>
                                                    <?php $producttype = \App\Models\product_type::where('id', $we->product_type)->first(); ?>
                                                    {{ $producttype->name }}
                                                </td>
                                                <td>
                                                    <?php $productseries = \App\Models\Product::where('id', $we->product_Series)->first(); ?>
                                                    {{ $productseries->name }}
                                                </td>
                                                <td>
                                                    <?php $product_model = \App\Models\product_model::where('id', $we->product_model)->first(); ?>
                                                    {{ $product_model->model_number }}
                                                </td>
                                                <td><?php $product_number = \App\Models\product_number::where('id', $we->product_number)->first(); ?>
                                                    {{ $product_number->product_number }}
                                                </td>
                                                <td>{{ $we->product_configuration }}</td>
                                                <td class="">{{ $we->serial_number }}</td>
                                                <td class="">{{ $we->purchase_code }}</td>
                                                <td class="">{{ $we->reseller_name }}</td>
                                                <td class="">{{ $we->purchase_date }}</td>
                                                <td class="text-right">
                                                    <div class="dropdown show d-inline-block widget-dropdown">
                                                        <a class="dropdown-toggle icon-burger-mini" href="" role="button"
                                                            id="dropdown-recent-order1" data-bs-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false"
                                                            data-display="static"></a>
                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                            <li class="dropdown-item">
                                                                <a href="#">View</a>
                                                            </li>
                                                            <li class="dropdown-item">
                                                                <a href="#">Remove</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Content -->
    </div>
    <!-- End Content Wrapper -->
@endsection
@section('js')
    <!-- Datatables -->
    <script src="{{ asset('assets/plugins/data-tables/jquery.datatables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/data-tables/datatables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/data-tables/datatables.responsive.min.js') }}"></script>
@endsection
