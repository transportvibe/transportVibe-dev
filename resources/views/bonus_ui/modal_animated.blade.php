@extends('layouts.simple.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 ps-0">
                    <h3>Animated Modal</h3>
                </div>
                <div class="col-sm-6 pe-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Bonus Ui</li>
                        <li class="breadcrumb-item active">Animated Modal</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Modal With Animations</h4>
                        <p class="f-m-light mt-1">
                            Use the different types of fades and animations in modals.</p>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-xl-6 col-md-8">
                                <div class="animate-img" id="animation-box">
                                    <div class="card">
                                        <div class="animate-widget">
                                            <div><img class="img-fluid" src="{{ asset('assets/images/slider/6.jpg') }}"
                                                    alt="Drawing-room"></div>
                                            <div class="text-center p-25">
                                                <p class="text-muted mb-0"></p>
                                                <h5>It&apos;s Magic!!</h5> Select the animation options given below and then
                                                click on the launch button.
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <form class="form-inline theme-form row animated-modal">
                                    <div class="mb-3 mb-0 animated-modal-md-mb w-100">
                                        <label class="me-3">Entrances</label>
                                        <select class="form-select w-75" id="entrance">
                                            <optgroup label="Attention Seekers">
                                                <option value="bounce">bounce</option>
                                                <option value="flash">flash</option>
                                                <option value="pulse">pulse</option>
                                                <option value="rubberBand">rubberBand</option>
                                                <option value="shake">shake</option>
                                                <option value="swing">swing</option>
                                                <option value="tada">tada</option>
                                                <option value="wobble">wobble</option>
                                                <option value="jello">jello</option>
                                            </optgroup>
                                            <optgroup label="Bouncing Entrances">
                                                <option value="bounceIn" selected="">bounceIn</option>
                                                <option value="bounceInDown">bounceInDown</option>
                                                <option value="bounceInLeft">bounceInLeft</option>
                                                <option value="bounceInRight">bounceInRight</option>
                                                <option value="bounceInUp">bounceInUp</option>
                                            </optgroup>
                                            <optgroup label="Fading Entrances">
                                                <option value="fadeIn">fadeIn</option>
                                                <option value="fadeInDown">fadeInDown</option>
                                                <option value="fadeInDownBig">fadeInDownBig</option>
                                                <option value="fadeInLeft">fadeInLeft</option>
                                                <option value="fadeInLeftBig">fadeInLeftBig</option>
                                                <option value="fadeInRight">fadeInRight</option>
                                                <option value="fadeInRightBig">fadeInRightBig</option>
                                                <option value="fadeInUp">fadeInUp</option>
                                                <option value="fadeInUpBig">fadeInUpBig</option>
                                            </optgroup>
                                            <optgroup label="Flippers">
                                                <option value="flipInX">flipInX</option>
                                                <option value="flipInY">flipInY</option>
                                            </optgroup>
                                            <optgroup label="Lightspeed">
                                                <option value="lightSpeedIn">lightSpeedIn</option>
                                            </optgroup>
                                            <optgroup label="Rotating Entrances">
                                                <option value="rotateIn">rotateIn</option>
                                                <option value="rotateInDownLeft">rotateInDownLeft</option>
                                                <option value="rotateInDownRight">rotateInDownRight</option>
                                                <option value="rotateInUpLeft">rotateInUpLeft</option>
                                                <option value="rotateInUpRight">rotateInUpRight</option>
                                            </optgroup>
                                            <optgroup label="Sliding Entrances">
                                                <option value="slideInUp">slideInUp</option>
                                                <option value="slideInDown">slideInDown</option>
                                                <option value="slideInLeft">slideInLeft</option>
                                                <option value="slideInRight">slideInRight</option>
                                            </optgroup>
                                            <optgroup label="Zoom Entrances">
                                                <option value="zoomIn">zoomIn</option>
                                                <option value="zoomInDown">zoomInDown</option>
                                                <option value="zoomInLeft">zoomInLeft</option>
                                                <option value="zoomInRight">zoomInRight</option>
                                                <option value="zoomInUp">zoomInUp</option>
                                            </optgroup>
                                            <optgroup label="Specials">
                                                <option value="rollIn">rollIn</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="mb-3 mb-0 animated-modal-md-mb w-100">
                                        <label class="me-3">Exits</label>
                                        <select class="form-select w-75" id="exit">
                                            <optgroup label="Attention Seekers">
                                                <option value="bounce">bounce</option>
                                                <option value="flash">flash</option>
                                                <option value="pulse">pulse</option>
                                                <option value="rubberBand">rubberBand</option>
                                                <option value="shake">shake</option>
                                                <option value="swing">swing</option>
                                                <option value="tada">tada</option>
                                                <option value="wobble">wobble</option>
                                                <option value="jello">jello</option>
                                            </optgroup>
                                            <optgroup label="Bouncing Exits">
                                                <option value="bounceOut">bounceOut</option>
                                                <option value="bounceOutDown">bounceOutDown</option>
                                                <option value="bounceOutLeft">bounceOutLeft</option>
                                                <option value="bounceOutRight">bounceOutRight</option>
                                                <option value="bounceOutUp">bounceOutUp</option>
                                            </optgroup>
                                            <optgroup label="Fading Exits">
                                                <option value="fadeOut">fadeOut</option>
                                                <option value="fadeOutDown">fadeOutDown</option>
                                                <option value="fadeOutDownBig">fadeOutDownBig</option>
                                                <option value="fadeOutLeft">fadeOutLeft</option>
                                                <option value="fadeOutLeftBig">fadeOutLeftBig</option>
                                                <option value="fadeOutRight">fadeOutRight</option>
                                                <option value="fadeOutRightBig">fadeOutRightBig</option>
                                                <option value="fadeOutUp">fadeOutUp</option>
                                                <option value="fadeOutUpBig">fadeOutUpBig</option>
                                            </optgroup>
                                            <optgroup label="Flippers">
                                                <option value="flipOutX" selected="">flipOutX</option>
                                                <option value="flipOutY">flipOutY</option>
                                            </optgroup>
                                            <optgroup label="Lightspeed">
                                                <option value="lightSpeedOut">lightSpeedOut</option>
                                            </optgroup>
                                            <optgroup label="Rotating Exits">
                                                <option value="rotateOut">rotateOut</option>
                                                <option value="rotateOutDownLeft">rotateOutDownLeft</option>
                                                <option value="rotateOutDownRight">rotateOutDownRight</option>
                                                <option value="rotateOutUpLeft">rotateOutUpLeft</option>
                                                <option value="rotateOutUpRight">rotateOutUpRight</option>
                                            </optgroup>
                                            <optgroup label="Sliding Exits">
                                                <option value="slideOutUp">slideOutUp</option>
                                                <option value="slideOutDown">slideOutDown</option>
                                                <option value="slideOutLeft">slideOutLeft</option>
                                                <option value="slideOutRight">slideOutRight</option>
                                            </optgroup>
                                            <optgroup label="Zoom Exits">
                                                <option value="zoomOut">zoomOut</option>
                                                <option value="zoomOutDown">zoomOutDown</option>
                                                <option value="zoomOutLeft">zoomOutLeft</option>
                                                <option value="zoomOutRight">zoomOutRight</option>
                                                <option value="zoomOutUp">zoomOutUp</option>
                                            </optgroup>
                                            <optgroup label="Specials">
                                                <option value="rollOut">rollOut</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <!-- Button trigger modal-->
                                    <div class="mt-2 text-center w-100">
                                        <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                            data-bs-target="#myModal">Launch modal</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Modal-->
                        <div class="modal fade modal-popup" id="myModal" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div>
                                    <button class="btn-close theme-close" type="button" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                    <div class="modal-body">
                                        <div class="card">
                                            <div class="animate-widget">
                                                <div><img class="img-fluid"
                                                        src="{{ asset('assets/images/slider/6.jpg') }}"
                                                        alt="Drawing-room"></div>
                                                <div class="text-center p-25">
                                                    <p class="text-muted mb-0"><strong class="txt-danger">Wow!!!</strong>
                                                        It's so beautiful animations in Riho theme...</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
    <script src="{{ asset('assets/js/modal-animated.js') }}"></script>
@endsection
