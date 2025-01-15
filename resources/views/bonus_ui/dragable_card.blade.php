@extends('layouts.simple.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 ps-0">
                    <h3>Draggable Card</h3>
                </div>
                <div class="col-sm-6 pe-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Bonus Ui</li>
                        <li class="breadcrumb-item active">Draggable Card</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row ui-sortable" id="draggableMultiple">
            <div class="col-xxl-4 col-md-6">
                <div class="card height-equal">
                    <div class="card-header card-no-border pb-0">
                        <h4>Basic Card</h4>
                        <p class="mt-1 f-m-light">You can draggable cards anywhere.</p>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item"> <i class="icofont icofont-arrow-right"></i>Logo Design</li>
                            <li class="list-group-item"> <i class="icofont icofont-arrow-right"></i>Web Designer </li>
                            <li class="list-group-item"> <i class="icofont icofont-arrow-right"></i>E-Commerce</li>
                            <li class="list-group-item"> <i class="icofont icofont-arrow-right"></i>UX Designer</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6">
                <div class="card height-equal">
                    <div class="card-header card-no-border pb-0">
                        <h4>Default Card</h4>
                        <p class="mt-1 f-m-light">You can draggable cards anywhere.</p>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item active bg-warning-light" aria-current="true"><i
                                    class="icofont icofont-arrow-right"> </i>UI Kits</li>
                            <li class="list-group-item"><i class="icofont icofont-arrow-right"> </i>Wow Animations</li>
                            <li class="list-group-item"> <i class="icofont icofont-arrow-right"> </i>Apex Charts</li>
                            <li class="list-group-item"><i class="icofont icofont-arrow-right"> </i>Starter Kits</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-6 col-12">
                <div class="card b-r-0 height-equal">
                    <div class="card-header card-no-border pb-0">
                        <h4>Flat Card</h4>
                        <p class="f-m-light mt-1">You can draggable cards anywhere.</p>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="icofont icofont-arrow-right"> </i>PRODUCT</li>
                            <li class="list-group-item"><i class="icofont icofont-arrow-right"> </i>PRODUCT DETAILS </li>
                            <li class="list-group-item"><i class="icofont icofont-arrow-right"> </i>CART </li>
                            <li class="list-group-item pb-0"><i class="icofont icofont-arrow-right"> </i>CHECKOUT</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-6 col-12">
                <div class="card shadow-none border">
                    <div class="card-header card-no-border pb-0">
                        <h4>Without Shadow Card</h4>
                        <p class="f-m-light mt-1">You can draggable cards anywhere.</p>
                    </div>
                    <div class="card-body">
                        <div class="alert txt-primary border-primary alert-dismissible fade show" role="alert"><i
                                data-feather="clock"></i>
                            <p>You can check in on some of those fields below.</p>
                            <button class="btn-close" type="button" aria-label="Close"></button>
                        </div>
                        <div class="alert txt-success border-success outline-2x alert-dismissible fade show alert-icons"
                            role="alert"><i data-feather="thumbs-up"></i>
                            <p><b> Well done! </b>You successfully read important message.</p>
                            <button class="btn-close" type="button" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-6 col-12">
                <div class="card">
                    <div class="card-header card-no-border pb-0">
                        <h4><i class="icon-move me-2"></i> Icon In Heading</h4>
                        <p class="f-m-light mt-1">You can draggable cards anywhere.</p>
                    </div>
                    <div class="card-body">
                        <div class="alert border-warning alert-dismissible fade show p-0" role="alert">
                            <div class="alert-arrow bg-warning"><i class="icon-timer"></i></div>
                            <p>Your time Over after 5 minute </p>
                        </div>
                        <div class="alert border-danger alert-dismissible fade show p-0 mb-0" role="alert">
                            <div class="alert-arrow bg-danger"><i class="icon-heart"></i></div>
                            <p>Oh snap! Change a few things up notification check</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-6 col-12">
                <div class="card">
                    <div class="card-header card-no-border pb-0">
                        <h4>Lists With Checkbox</h4>
                        <p class="f-m-light mt-1">You can draggable cards anywhere.</p>
                    </div>
                    <div class="card-body dark-list">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <input class="form-check-input me-1 checkbox-primary" id="firstCheckbox" type="checkbox"
                                    value="">
                                <label class="form-check-label txt-primary mb-0" for="firstCheckbox">Auto Start</label>
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-1 checkbox-secondary" id="secondCheckbox"
                                    type="checkbox" value="">
                                <label class="form-check-label txt-secondary mb-0" for="secondCheckbox">Auto
                                    Update</label>
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-1 checkbox-success" id="thirdCheckbox" type="checkbox"
                                    value="">
                                <label class="form-check- txt-success mb-0" for="thirdCheckbox">Don't check auth
                                    key</label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/jquery.ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/dragable/sortable.js') }}"></script>
    <script src="{{ asset('assets/js/dragable/sortable-custom.js') }}"></script>
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection
