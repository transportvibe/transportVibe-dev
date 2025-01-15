@extends('layouts.simple.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 ps-0">
                    <h3>Progress</h3>
                </div>
                <div class="col-sm-6 pe-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ui Kits</li>
                        <li class="breadcrumb-item active">Progress</li>
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
                    <div class="card-header pb-0">
                        <h4>Basic Progress Bars</h4>
                        <p class="f-m-light mt-1">
                            Progress components are built with two HTML elements, some CSS to set the width, and a few
                            attributes.
                            We use the <code>.progress </code>as a wrapper to indicate the max value of the progress bar.
                            The <code>.progress-bar </code>requires an inline style, utility class, or custom CSS to set
                            their width.
                        </p>
                    </div>
                    <div class="card-body">
                        <div class="progress-showcase row">
                            <div class="col">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                        aria-valuemax="100"> </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 25%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 50%"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 75%"
                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 100%"
                                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h4>Progress Bars Striped</h4>
                                <p class="f-m-light mt-1">Add <code>.progress-bar-striped</code> to any <code>.progress-bar
                                    </code> to apply a stripe via CSS gradient over the progress bar's background color
                                    Using CSS Effects.</p>
                            </div>
                            <div class="card-body">
                                <div class="progress-showcase row">
                                    <div class="col">
                                        <div class="progress">
                                            <div class="progress-bar bg-primary progress-bar-striped" role="progressbar"
                                                style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped bg-warning" role="progressbar"
                                                style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                                                style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                                style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h4>Progress Bars animated</h4>
                                <p class="f-m-light mt-1">The striped gradient can also be animated. Add
                                    <code>.progress-bar-animated</code> to<code>.progress-bar</code> to animate the stripes
                                    right to left via CSS3 animations.
                                </p>
                            </div>
                            <div class="card-body">
                                <div class="progress-showcase row">
                                    <div class="col">
                                        <div class="progress">
                                            <div class="progress-bar-animated bg-primary progress-bar-striped"
                                                role="progressbar" style="width: 10%" aria-valuenow="10"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar-animated progress-bar-striped bg-warning"
                                                role="progressbar" style="width: 25%" aria-valuenow="25"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar-animated progress-bar-striped bg-danger"
                                                role="progressbar" style="width: 50%" aria-valuenow="50"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar-animated progress-bar-striped bg-success"
                                                role="progressbar" style="width: 75%" aria-valuenow="75"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h4>Multiple bars</h4>
                                <p class="f-m-light mt-1">Include multiple progress bars in a progress component if you
                                    need.</p>
                            </div>
                            <div class="card-body">
                                <div class="progress-showcase row">
                                    <div class="col">
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 30%"
                                                aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 20%"
                                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 15%"
                                                aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 10%"
                                                aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 10%"
                                                aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 10%"
                                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 10%"
                                                aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 10%"
                                                aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 10%"
                                                aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 10%"
                                                aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="progressbar" style="width: 10%"
                                                aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h4>Progress With Number Steps</h4>
                                <p class="f-m-light mt-1">
                                    Use the <code>.position-absolute </code>to set progress numbers steps.</p>
                            </div>
                            <div class="card-body">
                                <div class="position-relative m-4 progress-number">
                                    <div class="progress progress-wrapper">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-label="Progress"
                                            style="width: 50%;" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                    <button
                                        class="position-absolute top-0 start-0 translate-middle btn-sm btn-primary rounded-circle"
                                        type="button" style="width: 2rem; height:2rem;">1</button>
                                    <button
                                        class="position-absolute top-0 start-50 translate-middle btn-sm btn-primary rounded-circle"
                                        type="button" style="width: 2rem; height:2rem;">2</button>
                                    <button
                                        class="progress-btn position-absolute top-0 start-100 translate-middle btn-sm rounded-circle"
                                        type="button" style="width: 2rem; height:2rem;">3</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Custom Progress Bars</h4>
                        <p class="f-m-light mt-1">Use the <code>.progress-bar-animated </code>and
                            <code>.progress-bar-striped </code>to animate the stripes right to left.
                        </p>
                    </div>
                    <div class="card-body">
                        <div class="progress-showcase row">
                            <div class="col">
                                <h6 class="mb-2">0% Getting Started </h6>
                                <div class="progress mb-4">
                                    <div class="progress-bar-animated progress-bar-striped text-center" role="progressbar"
                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"> </div>
                                </div>
                                <h6 class="mb-2">30% Getting Uploading...</h6>
                                <div class="progress mb-4">
                                    <div class="progress-bar-animated progress-bar-striped bg-primary text-center"
                                        role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0"
                                        aria-valuemax="100">30%</div>
                                </div>
                                <h6 class="mb-2">60% Getting Pause...</h6>
                                <div class="progress mb-4">
                                    <div class="progress-bar-animated progress-bar-striped bg-secondary text-center"
                                        role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0"
                                        aria-valuemax="100">60%</div>
                                </div>
                                <h6 class="mb-2">70% Getting Uploading...</h6>
                                <div class="progress mb-4">
                                    <div class="progress-bar-animated progress-bar-striped bg-success text-center"
                                        role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0"
                                        aria-valuemax="100">70%</div>
                                </div>
                                <h6 class="mb-2">100% Completed</h6>
                                <div class="progress">
                                    <div class="progress-bar-animated progress-bar-striped bg-dark text-center"
                                        role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                        aria-valuemax="100">100%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card height-equal">
                            <div class="card-header pb-0">
                                <h4>Small Progress Bars</h4>
                                <p class="f-m-light mt-1">Use <code> .sm-progress-bar</code> class to change progress size
                                    to small:</p>
                            </div>
                            <div class="card-body">
                                <div class="progress-showcase row progress-b-space">
                                    <div class="col">
                                        <div class="progress sm-progress-bar overflow-visible mt-4">
                                            <div class="progress-bar-animated small-progressbar bg-primary rounded-pill progress-bar-striped"
                                                role="progressbar" style="width: 30%" aria-valuenow="30"
                                                aria-valuemin="0" aria-valuemax="100"><span
                                                    class="txt-primary progress-label">30 MB Data</span><span
                                                    class="animate-circle"></span></div>
                                        </div>
                                        <div class="progress sm-progress-bar overflow-visible">
                                            <div class="progress-bar-animated small-progressbar bg-primary rounded-pill progress-bar-striped"
                                                role="progressbar" style="width: 50%" aria-valuenow="50"
                                                aria-valuemin="0" aria-valuemax="100"><span
                                                    class="txt-primary progress-label">50 MB Data</span><span
                                                    class="animate-circle"></span></div>
                                        </div>
                                        <div class="progress sm-progress-bar overflow-visible">
                                            <div class="progress-bar-animated small-progressbar bg-primary rounded-pill progress-bar-striped"
                                                role="progressbar" style="width: 75%" aria-valuenow="75"
                                                aria-valuemin="0" aria-valuemax="100"><span
                                                    class="txt-primary progress-label">75 MB Data</span><span
                                                    class="animate-circle"></span></div>
                                        </div>
                                        <div class="progress sm-progress-bar overflow-visible">
                                            <div class="progress-bar-animated small-progressbar bg-primary rounded-pill progress-bar-striped"
                                                role="progressbar" style="width: 100%" aria-valuenow="100"
                                                aria-valuemin="0" aria-valuemax="100"><span
                                                    class="txt-primary progress-label">100 MB Data</span><span
                                                    class="animate-circle"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card height-equal">
                            <div class="card-header pb-0">
                                <h4>Large Progress Bars</h4>
                                <p class="f-m-light mt-1">Use <code> .lg-progress-bar</code> class to change progress size
                                    to large:</p>
                            </div>
                            <div class="card-body">
                                <div class="progress-showcase row">
                                    <div class="col">
                                        <div class="progress lg-progress-bar">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 25%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                        </div>
                                        <div class="progress lg-progress-bar">
                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 50%"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                        </div>
                                        <div class="progress lg-progress-bar">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 75%"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                        </div>
                                        <div class="progress lg-progress-bar">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 100%"
                                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Custom Height Progress Bars</h4>
                        <p class="f-m-light mt-1">Set a height value on the <code>.progress-bar</code>, so if you change
                            that value the outer<code>.progress</code> will automatically resize accordingly.</p>
                    </div>
                    <div class="card-body">
                        <div class="progress-showcase row">
                            <div class="col">
                                <div class="progress" style="height: 1px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 25%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 50%"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress" style="height: 11px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 75%"
                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress" style="height: 19px;">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 100%"
                                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
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
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection
