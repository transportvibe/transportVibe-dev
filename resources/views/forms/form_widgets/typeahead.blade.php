@extends('layouts.simple.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 ps-0">
                    <h3>Typeahead</h3>
                </div>
                <div class="col-sm-6 pe-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Form Widgets</li>
                        <li class="breadcrumb-item active">Typeahead</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="alert txt-primary alert-light-primary alert-dismissible fade show" role="alert"><i
                data-feather="alert-triangle"></i>
            <p>This is the Typeahead page where <strong>jQuery </strong> was utilised.</p>
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <div class="typeahead typeahead-wrapper">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4>Basic typeahead</h4>
                            <p class="f-m-light mt-1"> This is the simple demo for Typeahead.</p>
                        </div>
                        <div class="card-body">
                            <div id="the-basics">
                                <form class="theme-form">
                                    <div>
                                        <input class="typeahead form-control" type="text" placeholder="States of USA">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4>Prefetch</h4>
                            <p class="f-m-light mt-1">Prefetched data is fetched and processed on initialization</p>
                        </div>
                        <div class="card-body">
                            <div id="prefetch">
                                <form class="theme-form">
                                    <div>
                                        <input class="typeahead form-control" type="text" placeholder="Countries">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4>Bloodhound (Suggestion Engine)</h4>
                            <p class="f-m-light mt-1">Bloodhound offers advanced functionalities such as prefetching and
                                backfilling with remote data.</p>
                        </div>
                        <div class="card-body">
                            <div id="bloodhound">
                                <form class="theme-form">
                                    <div>
                                        <input class="typeahead form-control" type="text" placeholder="States of USA">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4>Remote typeahead</h4>
                            <p class="f-m-light mt-1">Remote data is only used when the data provided by local and prefetch
                                is insufficient</p>
                        </div>
                        <div class="card-body">
                            <div id="remote">
                                <form class="theme-form">
                                    <div>
                                        <input class="typeahead form-control" type="text" placeholder="Choose Option">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4>Custom templates</h4>
                            <p class="f-m-light mt-1">Custom templates give you full control over how suggestions get
                                rendered</p>
                        </div>
                        <div class="card-body">
                            <div id="custom-templates">
                                <form class="theme-form">
                                    <div>
                                        <input class="typeahead form-control" type="text" placeholder="Oscar winners">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4>Multiple sections with headers</h4>
                            <p class="f-m-light mt-1">Two datasets that are prefetched, stored, and searched on the client.
                                Highlighting is enabled.</p>
                        </div>
                        <div class="card-body">
                            <div id="multiple-datasets">
                                <form class="theme-form">
                                    <div>
                                        <input class="typeahead form-control" type="text"
                                            placeholder="NBA and NHL teams">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4>Scrollable Dropdown Menu</h4>
                            <p class="f-m-light mt-1">
                                Dataset shows in scrollable dropdown menu.</p>
                        </div>
                        <div class="card-body">
                            <div id="scrollable-dropdown-menu">
                                <form class="theme-form">
                                    <div>
                                        <input class="typeahead form-control" type="text" placeholder="Countries">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4>RTL Support</h4>
                            <p class="f-m-light mt-1">Dataset shows in Right Side.</p>
                        </div>
                        <div class="card-body">
                            <div id="rtl-support">
                                <form class="theme-form">
                                    <div>
                                        <input class="typeahead form-control" type="text" dir="rtl"
                                            placeholder="Countries">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/typeahead/handlebars.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead/typeahead.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead/typeahead.custom.js') }}"></script>
@endsection
