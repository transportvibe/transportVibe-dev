@extends('layouts.simple.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 ps-0">
                    <h3>Switch</h3>
                </div>
                <div class="col-sm-6 pe-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Form Widgets</li>
                        <li class="breadcrumb-item active">Switch</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts                    -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Custom switch</h4>
                        <p class="f-m-light mt-1">
                            A switch has the markup of a custom checkbox but uses the .form-switch class to render a
                            <code>toggle switch</code>.
                        </p>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-4 col-sm-6">
                                <div class="card-wrapper border rounded-3">
                                    <div class="form-check-size">
                                        <div class="form-check form-switch form-check-inline">
                                            <input class="form-check-input switch-primary check-size" type="checkbox"
                                                role="switch" checked="">
                                        </div>
                                        <div class="form-check form-switch form-check-inline">
                                            <input class="form-check-input switch-secondary check-size" type="checkbox"
                                                role="switch" checked="">
                                        </div>
                                        <div class="form-check form-switch form-check-inline">
                                            <input class="form-check-input switch-success check-size" type="checkbox"
                                                role="switch" checked="">
                                        </div>
                                        <div class="form-check form-switch form-check-inline">
                                            <input class="form-check-input switch-danger check-size" type="checkbox"
                                                role="switch" checked="">
                                        </div>
                                        <div class="form-check form-switch form-check-inline">
                                            <input class="form-check-input switch-warning check-size" type="checkbox"
                                                role="switch" checked="">
                                        </div>
                                        <div class="form-check form-switch form-check-inline">
                                            <input class="form-check-input switch-info check-size" type="checkbox"
                                                role="switch" checked="">
                                        </div>
                                        <div class="form-check form-switch form-check-inline">
                                            <input class="form-check-input switch-dark check-size" type="checkbox"
                                                role="switch" checked="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="card-wrapper border rounded-3 radius-none">
                                    <div class="form-check-size default-square">
                                        <div class="form-check form-switch form-check-inline">
                                            <input class="form-check-input switch-primary check-size" type="checkbox"
                                                role="switch" checked="">
                                        </div>
                                        <div class="form-check form-switch form-check-inline">
                                            <input class="form-check-input switch-secondary check-size" type="checkbox"
                                                role="switch" checked="">
                                        </div>
                                        <div class="form-check form-switch form-check-inline">
                                            <input class="form-check-input switch-success check-size" type="checkbox"
                                                role="switch" checked="">
                                        </div>
                                        <div class="form-check form-switch form-check-inline">
                                            <input class="form-check-input switch-danger check-size" type="checkbox"
                                                role="switch" checked="">
                                        </div>
                                        <div class="form-check form-switch form-check-inline">
                                            <input class="form-check-input switch-warning check-size" type="checkbox"
                                                role="switch" checked="">
                                        </div>
                                        <div class="form-check form-switch form-check-inline">
                                            <input class="form-check-input switch-info check-size" type="checkbox"
                                                role="switch" checked="">
                                        </div>
                                        <div class="form-check form-switch form-check-inline">
                                            <input class="form-check-input switch-dark check-size" type="checkbox"
                                                role="switch" checked="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card-wrapper border rounded-3 common-flex">
                                    <div class="form-check-size">
                                        <div class="form-check form-switch form-check-inline">
                                            <input class="form-check-input switch-primary check-size" type="checkbox"
                                                role="switch" checked="" disabled="">
                                        </div>
                                        <div class="form-check form-switch form-check-inline">
                                            <input class="form-check-input switch-secondary check-size" type="checkbox"
                                                role="switch" checked="" disabled="">
                                        </div>
                                        <div class="form-check form-switch form-check-inline">
                                            <input class="form-check-input switch-success check-size" type="checkbox"
                                                role="switch" checked="" disabled="">
                                        </div>
                                        <div class="form-check form-switch form-check-inline">
                                            <input class="form-check-input switch-danger check-size" type="checkbox"
                                                role="switch" checked="" disabled="">
                                        </div>
                                        <div class="form-check form-switch form-check-inline">
                                            <input class="form-check-input switch-warning check-size" type="checkbox"
                                                role="switch" checked="" disabled="">
                                        </div>
                                        <div class="form-check form-switch form-check-inline">
                                            <input class="form-check-input switch-info check-size" type="checkbox"
                                                role="switch" checked="" disabled="">
                                        </div>
                                        <div class="form-check form-switch form-check-inline">
                                            <input class="form-check-input switch-dark check-size" type="checkbox"
                                                role="switch" checked="" disabled="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6">
                <div class="card height-equal">
                    <div class="card-header pb-0">
                        <h4>Icons switch</h4>
                        <p class="f-m-light mt-1">
                            Use the <code>.switch-state </code>and <code>icon-state </code>through defined icons switches.
                        </p>
                    </div>
                    <div class="card-body common-flex flex-column switch-wrapper">
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-end icon-state">
                                <label class="switch mb-0">
                                    <input type="checkbox" checked=""><span class="switch-state bg-primary"></span>
                                </label>
                            </div>
                            <label class="col-form-label m-l-10">Primary Switch</label>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-end icon-state">
                                <label class="switch mb-0">
                                    <input type="checkbox" checked=""><span class="switch-state bg-secondary"></span>
                                </label>
                            </div>
                            <label class="col-form-label m-l-10">Secondary Switch</label>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-end icon-state">
                                <label class="switch mb-0">
                                    <input type="checkbox" checked=""><span class="switch-state bg-success"></span>
                                </label>
                            </div>
                            <label class="col-form-label m-l-10">Success Switch</label>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-end icon-state">
                                <label class="switch mb-0">
                                    <input type="checkbox" checked=""><span class="switch-state bg-danger"></span>
                                </label>
                            </div>
                            <label class="col-form-label m-l-10">Danger Switch</label>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-end icon-state">
                                <label class="switch mb-0">
                                    <input type="checkbox" checked=""><span class="switch-state bg-warning"></span>
                                </label>
                            </div>
                            <label class="col-form-label m-l-10">Warning Switch</label>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-end icon-state">
                                <label class="switch mb-0">
                                    <input type="checkbox" checked=""><span class="switch-state bg-info"></span>
                                </label>
                            </div>
                            <label class="col-form-label m-l-10">Info Switch</label>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-end icon-state">
                                <label class="switch mb-0">
                                    <input type="checkbox" checked=""><span class="switch-state bg-dark"></span>
                                </label>
                            </div>
                            <label class="col-form-label m-l-10">Dark Switch</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6">
                <div class="card height-equal">
                    <div class="card-header pb-0">
                        <h4>Unchecked switch</h4>
                        <p class="f-m-light mt-1">
                            Use the <code>.bg-*</code> class through created default switches. </p>
                    </div>
                    <div class="card-body common-flex flex-column switch-wrapper">
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-end">
                                <label class="switch mb-0">
                                    <input type="checkbox" checked=""><span class="switch-state bg-primary"> </span>
                                </label>
                            </div>
                            <label class="col-form-label m-l-10">Unchecked Primary Switch</label>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-end">
                                <label class="switch mb-0">
                                    <input type="checkbox" checked=""><span class="switch-state bg-secondary"></span>
                                </label>
                            </div>
                            <label class="col-form-label m-l-10">Unchecked Secondary Switch</label>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-end">
                                <label class="switch mb-0">
                                    <input type="checkbox" checked=""><span class="switch-state bg-success"></span>
                                </label>
                            </div>
                            <label class="col-form-label m-l-10">Unchecked Success Switch</label>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-end">
                                <label class="switch mb-0">
                                    <input type="checkbox" checked=""><span class="switch-state bg-danger"></span>
                                </label>
                            </div>
                            <label class="col-form-label m-l-10">Unchecked Danger Switch</label>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-end">
                                <label class="switch mb-0">
                                    <input type="checkbox" checked=""><span class="switch-state bg-warning"></span>
                                </label>
                            </div>
                            <label class="col-form-label m-l-10">Unchecked Warning Switch</label>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-end">
                                <label class="switch mb-0">
                                    <input type="checkbox" checked=""><span class="switch-state bg-info"></span>
                                </label>
                            </div>
                            <label class="col-form-label m-l-10">Unchecked Info Switch</label>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-end">
                                <label class="switch mb-0">
                                    <input type="checkbox" checked=""><span class="switch-state bg-dark"></span>
                                </label>
                            </div>
                            <label class="col-form-label m-l-10">Unchecked Dark Switch</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card height-equal">
                    <div class="card-header pb-0">
                        <h4>Borders with icons</h4>
                        <p class="f-m-light mt-1">
                            Use the <code>.switch-outline </code>and <code>.icon-state</code> class through created outline
                            and icons. </p>
                    </div>
                    <div class="card-body common-flex flex-column switch-wrapper">
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-end icon-state switch-outline">
                                <label class="switch mb-0">
                                    <input type="checkbox" checked=""><span class="switch-state bg-primary"></span>
                                </label>
                            </div>
                            <label class="col-form-label m-l-10">Bordered Primary Switch</label>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-end icon-state switch-outline">
                                <label class="switch mb-0">
                                    <input type="checkbox" checked=""><span class="switch-state bg-secondary"></span>
                                </label>
                            </div>
                            <label class="col-form-label m-l-10">Bordered Secondary Switch</label>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-end icon-state switch-outline">
                                <label class="switch mb-0">
                                    <input type="checkbox" checked=""><span class="switch-state bg-success"></span>
                                </label>
                            </div>
                            <label class="col-form-label m-l-10">Bordered Success Switch</label>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-end icon-state switch-outline">
                                <label class="switch mb-0">
                                    <input type="checkbox" checked=""><span class="switch-state bg-danger"></span>
                                </label>
                            </div>
                            <label class="col-form-label m-l-10">Bordered Danger Switch</label>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-end icon-state switch-outline">
                                <label class="switch mb-0">
                                    <input type="checkbox" checked=""><span class="switch-state bg-warning"></span>
                                </label>
                            </div>
                            <label class="col-form-label m-l-10">Bordered Warning Switch</label>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-end icon-state switch-outline">
                                <label class="switch mb-0">
                                    <input type="checkbox" checked=""><span class="switch-state bg-info"></span>
                                </label>
                            </div>
                            <label class="col-form-label m-l-10">Bordered Info Switch</label>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-end icon-state switch-outline">
                                <label class="switch mb-0">
                                    <input type="checkbox" checked=""><span class="switch-state bg-dark"></span>
                                </label>
                            </div>
                            <label class="col-form-label m-l-10">Bordered Dark Switch</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Disabled outline switch</h4>
                        <p class="f-m-light mt-1">
                            Use the <code>.switch-outline </code> class through created outline. </p>
                    </div>
                    <div class="card-body common-flex">
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-end icon-state switch-outline">
                                <label class="switch mb-0">
                                    <input type="checkbox"><span class="switch-state bg-primary"></span>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-end icon-state switch-outline">
                                <label class="switch mb-0">
                                    <input type="checkbox"><span class="switch-state bg-secondary"></span>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-end icon-state switch-outline">
                                <label class="switch mb-0">
                                    <input type="checkbox"><span class="switch-state bg-success"></span>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-end icon-state switch-outline">
                                <label class="switch mb-0">
                                    <input type="checkbox"><span class="switch-state bg-danger"></span>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-end icon-state switch-outline">
                                <label class="switch mb-0">
                                    <input type="checkbox"><span class="switch-state bg-warning"></span>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-end icon-state switch-outline">
                                <label class="switch mb-0">
                                    <input type="checkbox"><span class="switch-state bg-info"></span>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-end icon-state switch-outline">
                                <label class="switch mb-0">
                                    <input type="checkbox"><span class="switch-state bg-dark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Variation of switches</h4>
                        <p class="f-m-light mt-1">
                            Use the <code>.tgl-skewed/tgl-flip</code> class through created variations. </p>
                    </div>
                    <div class="card-body switch-wrapper">
                        <ul class="tg-list common-flex">
                            <li class="tg-list-item">
                                <input class="tgl tgl-skewed" id="cb3" type="checkbox">
                                <label class="tgl-btn" data-tg-off="OFF" data-tg-on="ON" for="cb3"></label>
                            </li>
                            <li>
                                <p> Skewed</p>
                            </li>
                            <li class="tg-list-item">
                                <input class="tgl tgl-flip" id="cb5" type="checkbox">
                                <label class="tgl-btn" data-tg-off="Nope" data-tg-on="Yeah!" for="cb5"></label>
                            </li>
                            <li>
                                <p>Flip</p>
                            </li>
                            <li class="tg-list-item">
                                <div class="d-flex">
                                    <div class="flex-grow-1 text-end icon-state">
                                        <label class="switch mb-0 square-checked">
                                            <input type="checkbox" checked=""><span
                                                class="switch-state bg-warning rounded-2"></span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <p>Checked</p>
                            </li>
                            <li class="tg-list-item">
                                <div class="d-flex">
                                    <div class="flex-grow-1 text-end">
                                        <label class="switch square-checked mb-0">
                                            <input type="checkbox" checked=""><span
                                                class="switch-state bg-success rounded-2"></span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <p>Flat</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Switch sizing</h4>
                        <p class="f-m-light mt-1">
                            Use the <code>.switch-sm</code> and <code>.switch-lg </code>class through defined switch sizing.
                        </p>
                    </div>
                    <div class="card-body common-flex switch-wrapper">
                        <div class="d-flex">
                            <label class="col-form-label m-r-10">Small Size</label>
                            <div class="flex-grow-1 text-end switch-sm">
                                <label class="switch">
                                    <input type="checkbox" checked=""><span class="switch-state"></span>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex">
                            <label class="col-form-label m-r-10">Small Size Unhecked</label>
                            <div class="flex-grow-1 text-end switch-sm">
                                <label class="switch">
                                    <input type="checkbox"><span class="switch-state"> </span>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex">
                            <label class="col-form-label m-r-10">Normal Size</label>
                            <div class="flex-grow-1 text-end">
                                <label class="switch">
                                    <input type="checkbox" checked=""><span class="switch-state"></span>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex">
                            <label class="col-form-label m-r-10">Normal Unhecked</label>
                            <div class="flex-grow-1 text-end">
                                <label class="switch">
                                    <input type="checkbox"><span class="switch-state"> </span>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex">
                            <label class="col-form-label m-r-10">Disabled State</label>
                            <div class="flex-grow-1 text-end">
                                <label class="switch">
                                    <input type="checkbox" disabled=""><span class="switch-state"></span>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex">
                            <label class="col-form-label m-r-10">Large Size</label>
                            <div class="flex-grow-1 text-end switch-lg">
                                <label class="switch">
                                    <input type="checkbox" checked=""><span class="switch-state"></span>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex">
                            <label class="col-form-label m-r-10">Large Unhecked</label>
                            <div class="flex-grow-1 text-end switch-lg">
                                <label class="switch">
                                    <input type="checkbox"><span class="switch-state"></span>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex">
                            <label class="col-form-label m-r-10">Disabled</label>
                            <div class="flex-grow-1 text-end switch-lg">
                                <label class="switch">
                                    <input type="checkbox" disabled=""><span class="switch-state"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Switch with Icons</h4>
                        <p class="f-m-light mt-1">
                            Use the <code>.icon-state</code> class through visible icons in switches.</p>
                    </div>
                    <div class="card-body common-flex switch-wrapper">
                        <div class="d-flex">
                            <label class="col-form-label m-r-10">Small Size</label>
                            <div class="flex-grow-1 text-end switch-sm icon-state">
                                <label class="switch">
                                    <input type="checkbox" checked=""><span class="switch-state"></span>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex">
                            <label class="col-form-label m-r-10">Small Size Unhecked</label>
                            <div class="flex-grow-1 text-end switch-sm icon-state">
                                <label class="switch">
                                    <input type="checkbox"><span class="switch-state"></span>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex">
                            <label class="col-form-label m-r-10">Normal Size</label>
                            <div class="flex-grow-1 text-end icon-state">
                                <label class="switch">
                                    <input type="checkbox" checked=""><span class="switch-state"></span>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex">
                            <label class="col-form-label m-r-10">Normal Unhecked</label>
                            <div class="flex-grow-1 text-end icon-state">
                                <label class="switch">
                                    <input type="checkbox"><span class="switch-state"></span>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex">
                            <label class="col-form-label m-r-10">Disabled With Icon</label>
                            <div class="flex-grow-1 text-end icon-state">
                                <label class="switch">
                                    <input type="checkbox" disabled=""><span class="switch-state"></span>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex">
                            <label class="col-form-label m-r-10">Large Size</label>
                            <div class="flex-grow-1 text-end switch-lg icon-state">
                                <label class="switch">
                                    <input type="checkbox" checked=""><span class="switch-state"></span>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex">
                            <label class="col-form-label m-r-10">Large Unhecked</label>
                            <div class="flex-grow-1 text-end switch-lg icon-state">
                                <label class="switch">
                                    <input type="checkbox"><span class="switch-state"></span>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex">
                            <label class="col-form-label m-r-10">Disabled</label>
                            <div class="flex-grow-1 text-end switch-lg icon-state">
                                <label class="switch">
                                    <input type="checkbox" disabled=""><span class="switch-state"></span>
                                </label>
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
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection
