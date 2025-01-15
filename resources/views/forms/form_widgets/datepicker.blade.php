@extends('layouts.simple.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/flatpickr/flatpickr.min.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 ps-0">
                    <h3>Datepicker</h3>
                </div>
                <div class="col-sm-6 pe-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Form Widgets</li>
                        <li class="breadcrumb-item active">Date Picker</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Default calendar</h4>
                    </div>
                    <div class="card-body card-wrapper">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="input-group main-inline-calender">
                                    <input class="form-control mb-2" id="inline-calender" type="date">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Bootstrap calendar</h4>
                    </div>
                    <div class="card-body card-wrapper">
                        <div class="mb-3 row">
                            <label class="col-md-3 col-form-label">Date and time</label>
                            <div class="col-md-9">
                                <input class="form-control digits" id="example-datetime-local-input" type="datetime-local"
                                    value="2024-05-03T18:45:00">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md-3 col-form-label">Date</label>
                            <div class="col-md-9">
                                <input class="form-control digits" type="date" value="2024-05-01">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md-3 col-form-label">Month</label>
                            <div class="col-md-9">
                                <input class="form-control digits" type="month" value="2024-01">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md-3 col-form-label">Week</label>
                            <div class="col-md-9">
                                <input class="form-control digits" type="week" value="2024-W09">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md-3 col-form-label">Time</label>
                            <div class="col-md-9">
                                <input class="form-control digits" type="time" value="21:45:00">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Date picker</h4>
                    </div>
                    <div class="card-body main-flatpickr">
                        <div class="card-wrapper border rounded-3">
                            <form class="timepicker-wrapper">
                                <div class="row">
                                    <label class="col-xxl-3 box-col-12 text-start">Default Date </label>
                                    <div class="col-xxl-9 box-col-12">
                                        <div class="input-group flatpicker-calender">
                                            <input class="form-control" id="datetime-local" type="date"
                                                value="2024-05-03">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-xxl-3 box-col-12 text-start">Human Friendly </label>
                                    <div class="col-xxl-9 box-col-12">
                                        <div class="input-group flatpicker-calender">
                                            <input class="form-control" id="human-friendly" type="date">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-xxl-3 box-col-12 text-start">Min-Max Value</label>
                                    <div class="col-xxl-9 box-col-12">
                                        <div class="input-group flatpicker-calender">
                                            <input class="form-control" id="min-max" type="date">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-xxl-3 box-col-12 text-start">Disabled Dates</label>
                                    <div class="col-xxl-9 box-col-12">
                                        <div class="input-group flatpicker-calender">
                                            <input class="form-control" id="disabled-date" type="date"
                                                value="2024-05-03">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-xxl-3 box-col-12 text-start">Multiples Dates</label>
                                    <div class="col-xxl-9 box-col-12">
                                        <div class="input-group flatpicker-calender">
                                            <input class="form-control" id="multiple-date" type="date">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-xxl-3 box-col-12 text-start">Customizing Conjunction</label>
                                    <div class="col-xxl-9 box-col-12">
                                        <div class="input-group flatpicker-calender">
                                            <input class="form-control" id="customize-date" type="date">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-xxl-3 box-col-12 text-start"> Range</label>
                                    <div class="col-xxl-9 box-col-12">
                                        <div class="input-group flatpicker-calender">
                                            <input class="form-control" id="range-date" type="date">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-xxl-3 box-col-12 text-start"> Preloading Dates</label>
                                    <div class="col-xxl-9 box-col-12">
                                        <div class="input-group flatpicker-calender">
                                            <input class="form-control" id="preloading-date" type="date">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Time picker</h4>
                    </div>
                    <div class="card-body main-flatpickr">
                        <div class="card-wrapper border rounded-3">
                            <form class="timepicker-wrapper">
                                <div class="row">
                                    <label class="col-xxl-3 box-col-12 text-start">Time Picker</label>
                                    <div class="col-xxl-9 box-col-12">
                                        <div class="input-group">
                                            <input class="form-control" id="time-picker" type="time" value="12:00">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-xxl-3 box-col-12 text-start">24-hour Time Picker</label>
                                    <div class="col-xxl-9 box-col-12">
                                        <div class="input-group">
                                            <input class="form-control" id="twenty-four-hour" type="time"
                                                value="12:05">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-xxl-3 box-col-12 text-start">Time Picker W/Limits</label>
                                    <div class="col-xxl-9 box-col-12">
                                        <div class="input-group">
                                            <input class="form-control" id="limit-time" type="time" value="16:10">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-xxl-3 box-col-12 text-start">Preloading Time</label>
                                    <div class="col-xxl-9 box-col-12">
                                        <div class="input-group">
                                            <input class="form-control" id="preloading-time" type="time">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-xxl-3 box-col-12 text-start">TimePicker with Limited Time
                                        Range</label>
                                    <div class="col-xxl-9 box-col-12">
                                        <div class="input-group">
                                            <input class="form-control" id="limit-time-range" type="time">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-xxl-3 box-col-12 text-start">TimePicker with Min/Max Time
                                        Range</label>
                                    <div class="col-xxl-9 box-col-12">
                                        <div class="input-group flatpicker-calender">
                                            <input class="form-control" id="limit-min-max-range" type="time">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-xxl-3 box-col-12 text-start">Date With Time</label>
                                    <div class="col-xxl-9 box-col-12">
                                        <div class="input-group flatpicker-calender">
                                            <input class="form-control" id="datetime-local1" type="date">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/flat-pickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/js/flat-pickr/custom-flatpickr.js') }}"></script>
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection
