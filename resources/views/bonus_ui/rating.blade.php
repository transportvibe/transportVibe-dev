@extends('layouts.simple.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/rating.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 ps-0">
                    <h3>Rating</h3>
                </div>
                <div class="col-sm-6 pe-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Bonus Ui</li>
                        <li class="breadcrumb-item active">Rating</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-4 col-md-4">
                <div class="card">
                    <div class="card-header pb-0 rating-header">
                        <h3>1 to 10 Rating Bar</h3>
                        <p class="f-m-light mt-1">Rating is displayed using <code>#u-rating-1to10</code> id using
                            javascript.</p>
                    </div>
                    <div class="card-body">
                        <div class="rating-container">
                            <select id="u-rating-1to10" name="rating" autocomplete="off">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7" selected="selected">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-4">
                <div class="card">
                    <div class="card-header pb-0 pb-0">
                        <h4>Movie Rating Bar </h4>
                        <p class="f-m-light mt-1">Movie rating is displayed using <code>#u-rating-movie</code> id using
                            javascript.</p>
                    </div>
                    <div class="card-body">
                        <div class="rating-container">
                            <select id="u-rating-movie" name="rating" autocomplete="off">
                                <option value="Bad">Bad</option>
                                <option value="Mediocre">Mediocre</option>
                                <option value="Good" selected="selected">Good</option>
                                <option value="Awesome">Awesome</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-4">
                <div class="card">
                    <div class="card-header pb-0 pb-0">
                        <h4>Square Rating Bar</h4>
                        <p class="f-m-light mt-1">Square rating is displayed using <code>#u-rating-square </code> id using
                            javascript.</p>
                    </div>
                    <div class="card-body">
                        <div class="rating-container">
                            <select id="u-rating-square" name="rating" autocomplete="off">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-4">
                <div class="card">
                    <div class="card-header pb-0 pb-0">
                        <h4>Pill Rating Bar </h4>
                        <p class="f-m-light mt-1">Pill rating is displayed using <code>#u-rating-pill </code> id using
                            javascript.</p>
                    </div>
                    <div class="card-body">
                        <div class="rating-container">
                            <select id="u-rating-pill" name="rating" autocomplete="off">
                                <option value="A">A </option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                                <option value="F">F </option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-4">
                <div class="card">
                    <div class="card-header pb-0 pb-0">
                        <h4>Reversed Rating Bar </h4>
                        <p class="f-m-light mt-1">Reversed rating is displayed using <code>#u-rating-reversed </code> id
                            using javascript.</p>
                    </div>
                    <div class="card-body">
                        <div class="rating-container">
                            <select id="u-rating-reversed" name="rating" autocomplete="off">
                                <option value="Strongly Agree">Strongly Agree</option>
                                <option value="Agree">Agree</option>
                                <option value="Neither Agree or Disagree" selected="selected">Neither Agree or Disagree
                                </option>
                                <option value="Disagree">Disagree</option>
                                <option value="Strongly Disagree">Strongly Disagree</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-4">
                <div class="card">
                    <div class="card-header pb-0 pb-0">
                        <h4>Star Rating Bar </h4>
                        <p class="f-m-light mt-1">Star rating is displayed using <code>#u-rating-fontawesome </code> id
                            using javascript.</p>
                    </div>
                    <div class="card-body">
                        <div class="rating-container">
                            <select id="u-rating-fontawesome" name="rating" autocomplete="off">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-4">
                <div class="card height-equal">
                    <div class="card-header pb-0 pb-0">
                        <h4>Horizontal Rating Bar </h4>
                        <p class="f-m-light mt-1">Horizontal rating is displayed using <code>#u-rating-horizontal</code> id
                            using javascript.</p>
                    </div>
                    <div class="card-body">
                        <div class="rating-container">
                            <select id="u-rating-horizontal" name="rating" autocomplete="off">
                                <option value="10">10</option>
                                <option value="9">9</option>
                                <option value="8">8</option>
                                <option value="7">7</option>
                                <option value="6">6</option>
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1" selected="selected">1</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-4">
                <div class="card height-equal">
                    <div class="card-header pb-0 pb-0">
                        <h4>Current Rating Bar</h4>
                        <p class="f-m-light mt-1">Star rating is displayed using <code>#u-rating-fontawesome-o </code> id
                            using javascript.</p>
                    </div>
                    <div class="card-body">
                        <div class="rating-container">
                            <div class="star-ratings">
                                <div class="stars stars-example-fontawesome-o">
                                    <select id="u-rating-fontawesome-o" name="rating" data-current-rating="5.6"
                                        autocomplete="off">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                    </select><span class="title current-rating">Current rating: <span
                                            class="value"></span></span><span class="title your-rating hidden">Your
                                        rating: <span class="value"></span><a class="clear-rating" href="#"><i
                                                class="fa fa-times-circle"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-4">
                <div class="card height-equal">
                    <div class="card-header pb-0 pb-0">
                        <h4>Animated Rating Bar</h4>
                        <p class="f-m-light mt-1">Star rating is displayed using <code>#u-rating-fontawesome-o </code> id
                            using javascript.</p>
                    </div>
                    <div class="card-body">
                        <div class="rating-container">
                            <ul class="feedback">
                                <li class="angry me-0">
                                    <div>
                                        <svg class="eye left">
                                            <use xlink:href="{{ asset('assets/svg/icon-sprite.svg#eye') }}"></use>
                                        </svg>
                                        <svg class="eye right">
                                            <use xlink:href="{{ asset('assets/svg/icon-sprite.svg#eye') }}"></use>
                                        </svg>
                                        <svg class="mouth">
                                            <use xlink:href="{{ asset('assets/svg/icon-sprite.svg#mouth') }}"></use>
                                        </svg>
                                    </div>
                                </li>
                                <li class="sad me-0">
                                    <div>
                                        <svg class="eye left">
                                            <use xlink:href="{{ asset('assets/svg/icon-sprite.svg#eye') }}"></use>
                                        </svg>
                                        <svg class="eye right">
                                            <use xlink:href="{{ asset('assets/svg/icon-sprite.svg#eye') }}"></use>
                                        </svg>
                                        <svg class="mouth">
                                            <use xlink:href="{{ asset('assets/svg/icon-sprite.svg#mouth') }}"></use>
                                        </svg>
                                    </div>
                                </li>
                                <li class="ok me-0">
                                    <div></div>
                                </li>
                                <li class="good active me-0">
                                    <div>
                                        <svg class="eye left">
                                            <use xlink:href="{{ asset('assets/svg/icon-sprite.svg#eye') }}"></use>
                                        </svg>
                                        <svg class="eye right">
                                            <use xlink:href="{{ asset('assets/svg/icon-sprite.svg#eye') }}"></use>
                                        </svg>
                                        <svg class="mouth">
                                            <use xlink:href="{{ asset('assets/svg/icon-sprite.svg#mouth') }}"></use>
                                        </svg>
                                    </div>
                                </li>
                                <li class="happy me-0">
                                    <div>
                                        <svg class="eye left">
                                            <use xlink:href="{{ asset('assets/svg/icon-sprite.svg#eye') }}"></use>
                                        </svg>
                                        <svg class="eye right">
                                            <use xlink:href="{{ asset('assets/svg/icon-sprite.svg#eye') }}"></use>
                                        </svg>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/rating/jquery.barrating.js') }}"></script>
    <script src="{{ asset('assets/js/rating/rating-script.js') }}"></script>
    <script src="{{ asset('assets/js/rating/emoji_rating.js') }}"></script>
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection
