@extends('admin.layouts.layout')

@section('content')
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-header">
                        <div class="row align-items-end">
                            <div class="col-lg-8">
                                <div class="page-header-title">
                                    <div class="d-inline">
                                        <h4>Usuarios</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Usuarios</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-body">
                        <table-component></table-component>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="/files/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/files/assets/pages/data-table/js/jszip.min.js"></script>
    <script src="/files/assets/pages/data-table/js/pdfmake.min.js"></script>
    <script src="/files/assets/pages/data-table/js/vfs_fonts.js"></script>
    <script src="/files/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="/files/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="/files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
@endpush
@push('css')
<link rel="stylesheet" type="text/css" href="/files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="/files/assets/pages/data-table/css/buttons.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="/files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
@endpush
