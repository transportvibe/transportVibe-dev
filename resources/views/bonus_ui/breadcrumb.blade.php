@extends('layouts.simple.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 ps-0">
                    <h3>Breadcrumb</h3>
                </div>
                <div class="col-sm-6 pe-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Bonus Ui</li>
                        <li class="breadcrumb-item active">Breadcrumb</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <!-- Basic Breadcrumb-->
            <div class="col-sm-6">
                <div class="card height-equal">
                    <div class="card-header pb-0">
                        <h4>Default Breadcrumb</h4>
                        <p class="f-m-light mt-1">You can set breadcrumb using <code>.breadcrumb </code> class.</p>
                    </div>
                    <div class="card-body">
                        <nav class="breadcrumb"><a class="breadcrumb-item" href="javascript:void(0)">Home</a><span
                                class="breadcrumb-item active">Ui Kits</span></nav>
                        <nav class="breadcrumb m-0"><a class="breadcrumb-item" href="javascript:void(0)">Home</a><a
                                class="breadcrumb-item" href="javascript:void(0)">Ui Kits</a><span
                                class="breadcrumb-item active">Alert</span></nav>
                    </div>
                </div>
            </div>
            <!-- default breadcrumb ends-->
            <!-- Dividers Breadcrumbs-->
            <div class="col-sm-6">
                <div class="card height-equal">
                    <div class="card-header pb-0">
                        <h4>Divider Breadcrumb</h4>
                        <p class="f-m-light mt-1">You can set breadcrumb using <code>.breadcrumb-icon</code> class.</p>
                    </div>
                    <div class="card-body">
                        <nav class="breadcrumb breadcrumb-icon"><a class="breadcrumb-item"
                                href="javascript:void(0)">Home</a><span class="breadcrumb-item active">Ui Kits</span></nav>
                        <nav class="breadcrumb breadcrumb-icon m-0"><a class="breadcrumb-item"
                                href="javascript:void(0)">Home</a><a class="breadcrumb-item" href="javascript:void(0)">Ui
                                Kits</a><span class="breadcrumb-item active">Progress</span></nav>
                    </div>
                </div>
            </div>
            <!-- Icons breadcrumb start-->
            <div class="col-sm-6">
                <div class="card height-equal">
                    <div class="card-header pb-0">
                        <h4>With Icons Breadcrumb</h4>
                        <p class="f-m-light mt-1">You can set icons breadcrumb using <code>.breadcrumb </code>class.</p>
                    </div>
                    <div class="card-body">
                        <ol class="breadcrumb bg-white p-l-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item active">Bonus Ui</li>
                        </ol>
                        <ol class="breadcrumb bg-white m-b-0 p-b-0 p-l-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item">Bonus Ui</li>
                            <li class="breadcrumb-item active">Breadcrumb</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- Nav breadcrumb start-->
            <div class="col-sm-6">
                <div class="card height-equal">
                    <div class="card-header pb-0">
                        <h4>Variation Of Breadcrumb</h4>
                        <p class="f-m-light mt-1">You can set variations breadcrumb using <code>.breadcrumb </code>class
                            through any icons sets.</p>
                    </div>
                    <div class="card-body breadcrumb-space">
                        <nav class="breadcrumb breadcrumb-no-divider mb-0 gap-2"><a class="breadcrumb-item mb-1 mb-xl-0"
                                href="javascript:void(0)">Home -></a><a class="breadcrumb-item ps-0 mb-1 mb-xl-0"
                                href="javascript:void(0)">Tables -></a><a class="breadcrumb-item ps-0 mb-1 mb-xl-0"
                                href="javascript:void(0)">Bootstrap Tables -></a><span
                                class="breadcrumb-item active ps-0">Basic Tables</span></nav>
                    </div>
                </div>
            </div>
            <!-- Nav breadcrumb ends-->
            <!-- colored navigation start-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Colored Breadcrumb</h4>
                        <p class="f-m-light mt-1">You can set breadcrumb using <code>.breadcrumb </code> class and set
                            background colors like <code>[.bg-*]</code> .</p>
                    </div>
                    <div class="card-body">
                        <ol class="breadcrumb breadcrumb-colored m-b-30 bg-primary">
                            <li class="breadcrumb-item"><a class="fw-bold" href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item"><a class="fw-bold" href="javascript:void(0)">Bonus Ui</a></li>
                            <li class="breadcrumb-item active fw-bold">Breadcrumb</li>
                        </ol>
                        <ol class="breadcrumb breadcrumb-colored m-b-30 bg-secondary">
                            <li class="breadcrumb-item"><a class="fw-bold" href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item"><a class="fw-bold" href="javascript:void(0)">Icons</a></li>
                            <li class="breadcrumb-item active fw-bold">Flag-icon</li>
                        </ol>
                        <ol class="breadcrumb breadcrumb-colored m-0 bg-success">
                            <li class="breadcrumb-item"><a class="fw-bold" href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item"><a class="fw-bold" href="javascript:void(0)">Gallery</a></li>
                            <li class="breadcrumb-item active fw-bold">Gallery-grid</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection
