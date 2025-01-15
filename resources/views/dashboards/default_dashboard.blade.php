@extends('layouts.admin_simple.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/calendar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/date-picker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/vector-map.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/fullcalender.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 p-0">
                    <h3>Default Dashboard </h3>
                </div>
                <div class="col-sm-6 p-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Default </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid default-dashboard">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-7 box-col-4">
                <div class="card welcome-card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <h1>Hello,Anna Miller.</h1>
                                <p>Welcome to the Admin clan! We appreciate your interest in our dashboard.</p><a
                                    class="btn" href="{{ route('admin.list_products') }}">Go Premium</a>
                            </div>
                            <div class="flex-shrink-0"> <img src="{{ asset('assets/images/dashboard/welcome.png') }}"
                                    alt="">
                            </div>
                            <div>
                                <div class="clockbox">
                                    <svg id="clock" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 600">
                                        <g id="face">
                                            <circle class="circle" cx="300" cy="300" r="253.9"></circle>
                                            <path class="hour-marks"
                                                d="M300.5 94V61M506 300.5h32M300.5 506v33M94 300.5H60M411.3 107.8l7.9-13.8M493 190.2l13-7.4M492.1 411.4l16.5 9.5M411 492.3l8.9 15.3M189 492.3l-9.2 15.9M107.7 411L93 419.5M107.5 189.3l-17.1-9.9M188.1 108.2l-9-15.6">
                                            </path>
                                            <circle class="mid-circle" cx="300" cy="300" r="16.2">
                                            </circle>
                                        </g>
                                        <g id="hour">
                                            <path class="hour-hand" d="M300.5 298V142"></path>
                                            <circle class="sizing-box" cx="300" cy="300" r="253.9">
                                            </circle>
                                        </g>
                                        <g id="minute">
                                            <path class="minute-hand" d="M300.5 298V67"> </path>
                                            <circle class="sizing-box" cx="300" cy="300" r="253.9">
                                            </circle>
                                        </g>
                                        <g id="second">
                                            <path class="second-hand" d="M300.5 350V55"></path>
                                            <circle class="sizing-box" cx="300" cy="300" r="253.9">
                                            </circle>
                                        </g>
                                    </svg>
                                    <div class="badge f-10 p-0" id="txt"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-xl-25 col-md-5 col-sm-6 box-col-3">
                <div class="card earning-card">
                    <div class="card-header">
                        <div class="header-top">
                            <h5>Total Earnings</h5>
                            <div class="dropdown icon-dropdown">
                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false"><i class="icon-more-alt"></i></button>
                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                        href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a
                                        class="dropdown-item" href="#">Yearly</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div id="Earnings-chart"></div>
                        <div class="d-flex p-3 pt-0">
                            <h2 class="me-2">$ 12,463</h2><span class="bg-light-danger">
                                <svg>
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#down-arrow') }}"> </use>
                                </svg></span>
                            <h6 class="font-danger">+ 20.08%</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-md-5 col-sm-6 expenses-card">
                <div class="card earning-card">
                    <div class="card-header">
                        <div class="header-top">
                            <h5>Total Expenses</h5>
                            <div class="dropdown icon-dropdown">
                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false"><i class="icon-more-alt"></i></button>
                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                        href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a
                                        class="dropdown-item" href="#">Yearly</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="expenses-chart" id="Expenses-chart"></div>
                        <div class="d-flex p-3 pt-0">
                            <h2 class="me-2">$ 14,852</h2><span class="bg-light-success">
                                <svg>
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#up-arrow') }}"> </use>
                                </svg></span>
                            <h6 class="font-success">+ 60.09%</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-xl-40 col-md-7 box-col-5e">
                <div class="card selling-product">
                    <div class="card-header pb-0">
                        <div class="header-top">
                            <h4>Top Selling Product</h4>
                            <div class="dropdown icon-dropdown">
                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false"><i class="icon-more-alt"></i></button>
                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                        href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a
                                        class="dropdown-item" href="#">Yearly</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive custom-scrollbar">
                            <table class="table display" style="width:100%">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><span class="bg-light-primary"><img
                                                        src="{{ asset('assets/images/dashboard/product/1.png') }}"
                                                        alt=""></span>
                                                <div class="flex-grow-1 ms-2"><a href="{{ route('admin.list_products') }}"><span>Sneaker
                                                            Shoes</span>
                                                        <h5>#A5647KB</h5>
                                                    </a></div>
                                            </div>
                                        </td>
                                        <td> <span>Coupon code</span>
                                            <h5>PIX001</h5>
                                        </td>
                                        <td> <img src="{{ asset('assets/images/dashboard/flag/1.png') }}" alt="">
                                        </td>
                                        <td> <span>-51%</span>
                                            <h5>$99.00</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><span class="bg-light-primary"><img
                                                        src="{{ asset('assets/images/dashboard/product/2.png') }}"
                                                        alt=""></span>
                                                <div class="flex-grow-1 ms-2"><a href="{{ route('admin.list_products') }}"><span>Sweat
                                                            Shirt</span>
                                                        <h5>#NB86H2E</h5>
                                                    </a></div>
                                            </div>
                                        </td>
                                        <td> <span>Coupon code</span>
                                            <h5>PIX002</h5>
                                        </td>
                                        <td> <img src="{{ asset('assets/images/dashboard/flag/2.png') }}" alt="">
                                        </td>
                                        <td> <span>-78%</span>
                                            <h5>$66.00</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><span class="bg-light-primary"><img
                                                        src="{{ asset('assets/images/dashboard/product/3.png') }}"
                                                        alt=""></span>
                                                <div class="flex-grow-1 ms-2"><a href="{{ route('admin.list_products') }}"><span>Nike
                                                            Travel Bag</span>
                                                        <h5>#UB654GH</h5>
                                                    </a></div>
                                            </div>
                                        </td>
                                        <td> <span>Coupon code</span>
                                            <h5>PIX003</h5>
                                        </td>
                                        <td> <img src="{{ asset('assets/images/dashboard/flag/3.png') }}" alt="">
                                        </td>
                                        <td> <span>-04%</span>
                                            <h5>$116.00</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><span class="bg-light-primary"><img
                                                        src="{{ asset('assets/images/dashboard/product/4.png') }}"
                                                        alt=""></span>
                                                <div class="flex-grow-1 ms-2"><a href="{{ route('admin.list_products') }}"><span>Monster
                                                            Cap</span>
                                                        <h5>#BAS4567</h5>
                                                    </a></div>
                                            </div>
                                        </td>
                                        <td> <span>Coupon code</span>
                                            <h5>PIX004</h5>
                                        </td>
                                        <td> <img src="{{ asset('assets/images/dashboard/flag/4.png') }}" alt="">
                                        </td>
                                        <td> <span>-60%</span>
                                            <h5>$99.00</h5>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 box-col-7">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="header-top">
                            <h4>Recent Order </h4>
                            <div class="dropdown icon-dropdown">
                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false"><i class="icon-more-alt"></i></button>
                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                        href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a
                                        class="dropdown-item" href="#">Yearly</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0 recent">
                        <div class="table-responsive custom-scrollbar">
                            <table class="table display" id="recent-order" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <label class="form-check-label"></label>
                                            </div>
                                        </th>
                                        <th>No.</th>
                                        <th>Customer Name</th>
                                        <th>ID</th>
                                        <th>Date</th>
                                        <th>City</th>
                                        <th>Status</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <label class="form-check-label"></label>
                                            </div>
                                        </td>
                                        <td>1</td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0"><img
                                                        src="{{ asset('assets/images/dashboard/user/1.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="flex-grow-1 ms-3"><a href="{{ route('admin.user_profile') }}">
                                                        <h6>Rocky Shoes </h6>
                                                    </a></div>
                                            </div>
                                        </td>
                                        <td>#8934</td>
                                        <td>01/12/2024</td>
                                        <td>Armenia</td>
                                        <td>
                                            <button class="btn btn-primary">Paid</button>
                                        </td>
                                        <td>$238.80</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <label class="form-check-label"></label>
                                            </div>
                                        </td>
                                        <td>2</td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0"><img
                                                        src="{{ asset('assets/images/dashboard/user/2.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="flex-grow-1 ms-3"><a href="{{ route('admin.user_profile') }}">
                                                        <h6>Nasuha Makusta</h6>
                                                    </a></div>
                                            </div>
                                        </td>
                                        <td>#6529</td>
                                        <td>12/10/2024</td>
                                        <td>Bhutan</td>
                                        <td>
                                            <button class="btn btn-secondary">Pending</button>
                                        </td>
                                        <td>$654.95</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <label class="form-check-label"></label>
                                            </div>
                                        </td>
                                        <td>3</td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0"><img
                                                        src="{{ asset('assets/images/dashboard/user/3.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="flex-grow-1 ms-3"><a href="{{ route('admin.user_profile') }}">
                                                        <h6>Induan Kastorika</h6>
                                                    </a></div>
                                            </div>
                                        </td>
                                        <td>#3659</td>
                                        <td>09/04/2024</td>
                                        <td>Ghana</td>
                                        <td>
                                            <button class="btn btn-success">Done</button>
                                        </td>
                                        <td>$864.35</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <label class="form-check-label"></label>
                                            </div>
                                        </td>
                                        <td>4</td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0"><img
                                                        src="{{ asset('assets/images/dashboard/user/4.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="flex-grow-1 ms-3"><a href="{{ route('admin.user_profile') }}">
                                                        <h6>Pogba Nehuntas</h6>
                                                    </a></div>
                                            </div>
                                        </td>
                                        <td>#2158</td>
                                        <td>10/05/2024</td>
                                        <td>Kenya</td>
                                        <td>
                                            <button class="btn btn-danger">Cancel </button>
                                        </td>
                                        <td>$951.37</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5 box-col-5">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="header-top">
                            <h4>Our Growth</h4>
                            <div class="dropdown icon-dropdown">
                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false"><i class="icon-more-alt"></i></button>
                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                        href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a
                                        class="dropdown-item" href="#">Yearly</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="growth-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-7">
                <div class="card transaction-history">
                    <div class="card-header pb-0">
                        <div class="header-top">
                            <h4>Product Valuation</h4>
                            <div class="dropdown icon-dropdown">
                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false"><i class="icon-more-alt"></i></button>
                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                        href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a
                                        class="dropdown-item" href="#">Yearly</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pb-0">
                        <div class="current-sale-container order-container">
                            <div class="overview-wrapper" id="orderoverview"></div>
                            <div class="back-bar-container">
                                <div id="order-bar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-5">
                <div class="card transaction-history">
                    <div class="card-header pb-0">
                        <div class="header-top">
                            <h4>Transaction History</h4>
                            <div class="dropdown icon-dropdown">
                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false"><i class="icon-more-alt"></i></button>
                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                        href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a
                                        class="dropdown-item" href="#">Yearly</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive custom-scrollbar">
                            <table class="table display" style="width:100%">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><span class="bg-light-primary history">
                                                    <svg>
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#send') }}"></use>
                                                    </svg></span>
                                                <div class="flex-grow-1 ms-2"><a href="{{ route('admin.list_products') }}"><span>Receipt
                                                            from external Wallet</span>
                                                        <h5>Mar 21,2024, 4:45pm</h5>
                                                    </a></div>
                                            </div>
                                        </td>
                                        <td>Completed</td>
                                        <td>+ $248.00</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><span class="bg-light-secondary history">
                                                    <svg>
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#work') }}"></use>
                                                    </svg></span>
                                                <div class="flex-grow-1 ms-2"><a href="{{ route('admin.list_products') }}"><span>Process
                                                            refund to</span>
                                                        <h5>Feb 20,2024, 2:10pm</h5>
                                                    </a></div>
                                            </div>
                                        </td>
                                        <td>Pending</td>
                                        <td>+ $548.00</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><span class="bg-light-success history">
                                                    <svg>
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#graph') }}"></use>
                                                    </svg></span>
                                                <div class="flex-grow-1 ms-2"><a href="{{ route('admin.list_products') }}"><span>Sending
                                                            to Citizen</span>
                                                        <h5>Jun 17,2024, 12:45pm</h5>
                                                    </a></div>
                                            </div>
                                        </td>
                                        <td>Verified</td>
                                        <td>+ $953.00</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><span class="bg-light-danger history">
                                                    <svg>
                                                        <use
                                                            href="{{ asset('assets/svg/icon-sprite.svg#payment-bookmark') }}">
                                                        </use>
                                                    </svg></span>
                                                <div class="flex-grow-1 ms-2"><a href="{{ route('admin.list_products') }}"><span>Payment
                                                            From #12345</span>
                                                        <h5>Oct 30,2024, 1:31pm</h5>
                                                    </a></div>
                                            </div>
                                        </td>
                                        <td>Rejected</td>
                                        <td>+ $349.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card notifications-tabs">
                    <div class="card-header pb-0">
                        <div class="header-top">
                            <h4>Notifications</h4>
                            <div class="dropdown icon-dropdown">
                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false"><i class="icon-more-alt"></i></button>
                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                        href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a
                                        class="dropdown-item" href="#">Yearly</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex header-tab">
                            <ul class="nav nav-tabs border-tab mb-0" id="bottom-tab" role="tablist">
                                <li class="nav-item"><a class="nav-link nav-border tab-primary active pt-0"
                                        id="bottom-home-tab" data-bs-toggle="tab" href="#bottom-home" role="tab"
                                        aria-controls="bottom-home" aria-selected="true">All<span
                                            class="ms-2 bg-primary">3</span></a></li>
                                <li class="nav-item"><a class="nav-link nav-border tab-primary" id="bottom-inbox-tab"
                                        data-bs-toggle="tab" href="#bottom-inbox" role="tab"
                                        aria-controls="bottom-inbox" aria-selected="false">Following</a></li>
                                <li class="nav-item"><a class="nav-link nav-border tab-primary" id="bottom-contact-tab"
                                        data-bs-toggle="tab" href="#bottom-contact" role="tab"
                                        aria-controls="bottom-contact" aria-selected="false">Archive</a></li>
                            </ul>
                            <h6>Mark all as read</h6>
                        </div>
                        <div class="tab-content content-tab" id="bottom-tabContent">
                            <div class="tab-pane fade show active" id="bottom-home" role="tabpanel"
                                aria-labelledby="bottom-tabContent">
                                <div class="d-flex align-items-center"><img
                                        src="{{ asset('assets/images/dashboard/user/5.png') }}" alt="">
                                    <div class="flex-grow-1 ms-2"><a href="{{ route('admin.user_profile') }}">
                                            <h5>
                                                Ralph Edwards <strong> wants to edit </strong> tetrisly design system</h5>
                                            <span>2hrs Ago</span>
                                        </a>
                                        <button class="btn btn-secondary mt-1 mb-1">Decline</button>
                                        <button class="btn btn-primary mt-1 mb-1">Accept</button>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div class="activity-dot-primary"></div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center"><img
                                        src="{{ asset('assets/images/dashboard/user/6.png') }}" alt="">
                                    <div class="flex-grow-1 ms-2"><a href="{{ route('admin.user_profile') }}">
                                            <h5>
                                                Jenny Wilson <strong> Completed </strong> Create new component</h5>
                                            <span>2.15pm</span>
                                        </a></div>
                                    <div class="flex-shrink-0">
                                        <div class="activity-dot-secondary"></div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center figma-line"><img
                                        src="{{ asset('assets/images/dashboard/user/7.png') }}" alt="">
                                    <div class="flex-grow-1 ms-2"><a href="{{ route('admin.user_profile') }}">
                                            <h5>Jenny Wilson mentioned you in rewrite button component</h5>
                                            <span>3.10pm</span>
                                        </a></div>
                                </div>
                                <div class="figma-icon">
                                    <svg class="me-2">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#file') }}"></use>
                                    </svg>
                                    <div class="flex-shrink-0">
                                        <h6>Tet_Dark_Mode_L103.fig</h6><span>2.4 MB</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content content-tab" id="bottom-tabContent2">
                            <div class="tab-pane fade show" id="bottom-contact" role="tabpanel"
                                aria-labelledby="bottom-tabContent2">
                                <div class="d-flex align-items-center"><img
                                        src="{{ asset('assets/images/dashboard/user/5.png') }}" alt="">
                                    <div class="flex-grow-1 ms-2"><a href="{{ route('admin.user_profile') }}">
                                            <h5>
                                                Ralph Edwards Started Following you.</h5><span>35 min Ago</span>
                                        </a></div>
                                    <div class="flex-shrink-0">
                                        <div class="activity-dot-primary"></div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center"><img
                                        src="{{ asset('assets/images/dashboard/user/6.png') }}" alt="">
                                    <div class="flex-grow-1 ms-2"><a href="{{ route('admin.user_profile') }}">
                                            <h5>
                                                Jenny Wilson Requested to Follow</h5><span>1w Ago</span>
                                        </a></div>
                                </div>
                                <div class="d-flex align-items-center"><img
                                        src="{{ asset('assets/images/dashboard/user/7.png') }}" alt="">
                                    <div class="flex-grow-1 ms-2"><a href="{{ route('admin.user_profile') }}">
                                            <h5>Jenny Wilson Started Following you.</h5><span>3.10pm</span>
                                        </a></div>
                                    <div class="flex-shrink-0">
                                        <div class="activity-dot-primary"></div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center figma-line"><img
                                        src="{{ asset('assets/images/dashboard/user/2.png') }}" alt="">
                                    <div class="flex-grow-1 ms-2"><a href="{{ route('admin.user_profile') }}">
                                            <h5>
                                                Nasuha Makusta Requested to Follow</h5><span>20 min Ago</span>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content content-tab" id="bottom-tabContent3">
                            <div class="tab-pane fade show" id="bottom-inbox" role="tabpanel"
                                aria-labelledby="bottom-tabContent3">
                                <div class="d-flex align-items-center"><img
                                        src="{{ asset('assets/images/dashboard/user/5.png') }}" alt="">
                                    <div class="flex-grow-1 ms-2"><a href="{{ route('admin.user_profile') }}">
                                            <h5>
                                                Ralph Edwards Started Following you.</h5><span>35 min Ago</span>
                                        </a></div>
                                    <div class="flex-shrink-0">
                                        <div class="activity-dot-primary"></div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center"><img
                                        src="{{ asset('assets/images/dashboard/user/6.png') }}" alt="">
                                    <div class="flex-grow-1 ms-2"><a href="{{ route('admin.user_profile') }}">
                                            <h5>
                                                Jenny Wilson Requested to Follow</h5><span>1w Ago</span>
                                        </a></div>
                                </div>
                                <div class="d-flex align-items-center"><img
                                        src="{{ asset('assets/images/dashboard/user/7.png') }}" alt="">
                                    <div class="flex-grow-1 ms-2"><a href="{{ route('admin.user_profile') }}">
                                            <h5>Jenny Wilson Started Following you.</h5><span>3.10pm</span>
                                        </a></div>
                                    <div class="flex-shrink-0">
                                        <div class="activity-dot-primary"></div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center figma-line"><img
                                        src="{{ asset('assets/images/dashboard/user/2.png') }}" alt="">
                                    <div class="flex-grow-1 ms-2"><a href="{{ route('admin.user_profile') }}">
                                            <h5>
                                                Nasuha Makusta Requested to Follow</h5><span>20 min Ago</span>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card user-country">
                    <div class="card-header pb-0">
                        <div class="header-top">
                            <h4>User By Country</h4>
                            <div class="dropdown icon-dropdown">
                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false"><i class="icon-more-alt"></i></button>
                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                        href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a
                                        class="dropdown-item" href="#">Yearly</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex">
                            <h2 class="me-2">216.459</h2><span class="bg-light-success">
                                <svg>
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#up-arrow') }}"> </use>
                                </svg></span>
                            <h6 class="font-success">+ 5.09%</h6>
                        </div><span>Increase than last month</span>
                        <div class="jvector-map-height" id="world-map2"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card schedule">
                    <div class="card-header pb-0">
                        <div class="header-top">
                            <h4>Schedule</h4>
                            <div class="dropdown icon-dropdown">
                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false"><i class="icon-more-alt"></i></button>
                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                        href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a
                                        class="dropdown-item" href="#">Yearly</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="timeline-calendar custom-scrollbar">
                            <div class="custom-calendar" id="calendar-container">
                                <div class="time-line" id="calendar"></div>
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
    <script src="{{ asset('assets/js/clock.js') }}"></script>
    <script src="{{ asset('assets/js/calendar/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('assets/js/calendar/fullcalendar-custom.js') }}"></script>
    <script src="{{ asset('assets/js/calendar/fullcalender.js') }}"></script>
    <script src="{{ asset('assets/js/calendar/custom-calendar.js') }}"></script>
    <script src="{{ asset('assets/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('assets/js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ asset('assets/js/chart/apex-chart/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('assets/js/vector-map/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('assets/js/vector-map/map/jquery-jvectormap-us-aea-en.js') }}"></script>
    <script src="{{ asset('assets/js/vector-map/map/jquery-jvectormap-uk-mill-en.js') }}"></script>
    <script src="{{ asset('assets/js/vector-map/map/jquery-jvectormap-au-mill.js') }}"></script>
    <script src="{{ asset('assets/js/vector-map/map/jquery-jvectormap-chicago-mill-en.js') }}"></script>
    <script src="{{ asset('assets/js/vector-map/map/jquery-jvectormap-in-mill.js') }}"></script>
    <script src="{{ asset('assets/js/vector-map/map/jquery-jvectormap-asia-mill.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard/default.js') }}"></script>
    <script src="{{ asset('assets/js/notify/index.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom1.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.en.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.custom.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead/handlebars.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead/typeahead.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead/typeahead.custom.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead-search/handlebars.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead-search/typeahead-custom.js') }}"></script>
    <script src="{{ asset('assets/js/vector-map/map-vector.js') }}"></script>
@endsection
