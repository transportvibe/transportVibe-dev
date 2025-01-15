@extends('layouts.simple.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/range-slider.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 ps-0">
                    <h3>Range Slider</h3>
                </div>
                <div class="col-sm-6 pe-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Bonus Ui</li>
                        <li class="breadcrumb-item active">Range Slider</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid range-slider-page">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Default Range Slider</h4>
                        <p class="f-m-light mt-1">
                            Use the <code>.range-slider </code> class. and Crocs used Ion range
                            slider.<code>[http://ionden.com/a/plugins/ion.rangeSlider]</code></p>
                    </div>
                    <div class="card-body">
                        <form class="theme-form form-label-align-right range-slider">
                            <div class="form-group row py-1">
                                <div class="col-md-10">
                                    <input id="u-range-01" type="text">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Min Max Value</h4>
                        <p class="f-m-light mt-1">
                            Use the <code>.range-slider </code> class. and Crocs used Ion range
                            slider.<code>[http://ionden.com/a/plugins/ion.rangeSlider]</code></p>
                    </div>
                    <div class="card-body">
                        <div class="form-group row py-1">
                            <div class="col-md-10">
                                <input id="u-range-02" type="text">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Prefix</h4>
                        <p class="f-m-light mt-1">
                            Use the <code>.range-slider </code> class. and Crocs used Ion range
                            slider.<code>[http://ionden.com/a/plugins/ion.rangeSlider]</code></p>
                    </div>
                    <div class="card-body">
                        <div class="form-group row py-1">
                            <div class="col-md-10">
                                <input id="u-range-03" type="text">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Negative Value</h4>
                        <p class="f-m-light mt-1">
                            Use the <code>.range-slider </code> class. and Crocs used Ion range
                            slider.<code>[http://ionden.com/a/plugins/ion.rangeSlider]</code></p>
                    </div>
                    <div class="card-body">
                        <div class="form-group row py-1">
                            <div class="col-md-10">
                                <input id="u-range-04" type="text">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Steps Range Slider</h4>
                        <p class="f-m-light mt-1">
                            Use the <code>.range-slider </code> class. and Crocs used Ion range
                            slider.<code>[http://ionden.com/a/plugins/ion.rangeSlider]</code></p>
                    </div>
                    <div class="card-body">
                        <div class="form-group row py-1">
                            <div class="col-md-10">
                                <input id="u-range-05" type="text">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Custom Values</h4>
                        <p class="f-m-light mt-1">
                            Use the <code>.range-slider </code> class. and Crocs used Ion range
                            slider.<code>[http://ionden.com/a/plugins/ion.rangeSlider]</code></p>
                    </div>
                    <div class="card-body">
                        <div class="form-group row py-1">
                            <div class="col-md-10">
                                <input id="u-range-06" type="text">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Prettify Numbers</h4>
                        <p class="f-m-light mt-1">
                            Use the <code>.range-slider </code> class. and Crocs used Ion range
                            slider.<code>[http://ionden.com/a/plugins/ion.rangeSlider]</code></p>
                    </div>
                    <div class="card-body">
                        <div class="form-group row py-1">
                            <div class="col-md-10">
                                <input id="u-range-07" type="text">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Disabled</h4>
                        <p class="f-m-light mt-1">
                            Use the <code>.range-slider </code> class. and Crocs used Ion range
                            slider.<code>[http://ionden.com/a/plugins/ion.rangeSlider]</code></p>
                    </div>
                    <div class="card-body">
                        <div class="form-group row py-1">
                            <div class="col-md-10">
                                <input id="u-range-08" type="text">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Manipulating UI</h4>
                        <p class="f-m-light mt-1">
                            Use the <code>.range-slider </code> class. and Crocs used Ion range
                            slider.<code>[http://ionden.com/a/plugins/ion.rangeSlider]</code></p>
                    </div>
                    <div class="card-body">
                        <div class="form-group row py-1">
                            <div class="col-md-10">
                                <input id="u-range-09" type="text">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Core UI Text</h4>
                        <p class="f-m-light mt-1">
                            Use the <code>.range-slider </code> class. and Crocs used Ion range
                            slider.<code>[http://ionden.com/a/plugins/ion.rangeSlider]</code></p>
                    </div>
                    <div class="card-body">
                        <div class="form-group row py-1">
                            <div class="col-md-10">
                                <input id="u-range-10" type="text">
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
    <script src="{{ asset('assets/js/range-slider/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('assets/js/range-slider/rangeslider-script.js') }}"></script>
@endsection
