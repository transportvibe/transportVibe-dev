@extends('layouts.simple.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 ps-0">
                    <h3>Morris Chart</h3>
                </div>
                <div class="col-sm-6 pe-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Charts</li>
                        <li class="breadcrumb-item active">Morris Chart</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-sm-12 box-col-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Line Chart</h4>
                    </div>
                    <div class="card-body chart-block">
                        <div class="flot-chart-container">
                            <div class="flot-chart-placeholder" id="morris-line-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 box-col-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Updating Data</h4>
                    </div>
                    <div class="card-body chart-block">
                        <div class="flot-chart-container">
                            <div class="flot-chart-placeholder" id="updating-data-morris-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 box-col-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Decimal Data</h4>
                    </div>
                    <div class="card-body chart-block">
                        <div class="flot-chart-container">
                            <div class="flot-chart-placeholder float-start" id="decimal-morris-chart"></div>
                            <p class="float-end" id="choices"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 box-col-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Displaying X Labels Diagonally</h4>
                    </div>
                    <div class="card-body chart-block">
                        <div class="flot-chart-container">
                            <div class="flot-chart-placeholder" id="x-Labels-Diagonally-morris-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 box-col-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Bar Line Chart</h4>
                    </div>
                    <div class="card-body chart-block">
                        <div class="flot-chart-container">
                            <div class="flot-chart-placeholder" id="bar-line-chart-morris"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 box-col-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Displaying X Labels Diagonally(Bar Chart)</h4>
                    </div>
                    <div class="card-body chart-block">
                        <div class="flot-chart-container">
                            <div class="flot-chart-placeholder" id="x-lable-morris-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 box-col-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Stacked Bars Chart</h4>
                    </div>
                    <div class="card-body chart-block">
                        <div class="flot-chart-container">
                            <div class="flot-chart-placeholder" id="stacked-bar-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 box-col-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Simple Bar Charts</h4>
                    </div>
                    <div class="card-body chart-block">
                        <div class="flot-chart-container">
                            <div class="flot-chart-placeholder" id="morris-simple-bar-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 box-col-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Area charts behaving like line Charts</h4>
                    </div>
                    <div class="card-body chart-block">
                        <div class="flot-chart-container">
                            <div class="flot-chart-placeholder" id="graph123"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 box-col-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Donut Color Chart</h4>
                    </div>
                    <div class="card-body chart-block">
                        <div class="flot-chart-container">
                            <div class="flot-chart-placeholder" id="donut-color-chart-morris"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/chart/morris-chart/raphael.js') }}"></script>
    <script src="{{ asset('assets/js/chart/morris-chart/morris.js') }}"></script>
    <script src="{{ asset('assets/js/chart/morris-chart/prettify.min.js') }}"></script>
    <script src="{{ asset('assets/js/chart/morris-chart/morris-script.js') }}"></script>
@endsection
