@extends('layouts.simple.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/date-picker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/owlcarousel.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 ps-0">
                    <h3>General</h3>
                </div>
                <div class="col-sm-6 pe-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Widgets</li>
                        <li class="breadcrumb-item active">General</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid general-widget">
        <div class="row">
            <div class="col-xl-2 col-xl-25 col-lg-4 col-md-4 col-sm-6">
                <div class="card mobile-app">
                    <div class="card-body">
                        <div class="app-design">
                            <div class="d-flex">
                                <div class="flex-shrink-0 bg-light-primary me-2">
                                    <svg>
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#mobile-app') }}"></use>
                                    </svg>
                                </div>
                                <div class="flex-grow-1">
                                    <h6>Mobile App</h6><span>joohe.lee@gmail.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="client-budget">
                            <ul>
                                <li>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="activity-primary"></div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between"> <a href="{{ route('admin.product') }}">
                                                    <h6>Due Date</h6><span>25-10-2024</span>
                                                </a></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="activity-primary"></div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between"> <a href="{{ route('admin.product') }}">
                                                    <h6>Budget</h6><span>$36,000.00</span>
                                                </a></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between"> <a href="{{ route('admin.product') }}">
                                                    <h6>Client</h6><span>Joohee Lee</span>
                                                </a></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="user-details customers">
                            <ul>
                                <li class="d-inline-block"><img src="{{ asset('assets/images/dashboard-3/user/20.png') }}"
                                        alt="user"></li>
                                <li class="d-inline-block"><img src="{{ asset('assets/images/dashboard-3/user/21.png') }}"
                                        alt="user"></li>
                                <li class="d-inline-block"><img src="{{ asset('assets/images/dashboard-3/user/22.png') }}"
                                        alt="user"></li>
                            </ul>
                            <button class="btn btn-secondary">Pending</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-xl-25 col-lg-4 col-md-4 col-sm-6">
                <div class="card mobile-app">
                    <div class="card-body banking-web">
                        <div class="app-design">
                            <div class="d-flex">
                                <div class="flex-shrink-0 bg-light-secondary me-2">
                                    <svg>
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#banking-web') }}"></use>
                                    </svg>
                                </div>
                                <div class="flex-grow-1">
                                    <h6>Banking Web</h6><span>wonkyu@gmail.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="client-budget">
                            <ul>
                                <li>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="activity-secondary"></div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between"> <a href="{{ route('admin.product') }}">
                                                    <h6>Due Date</h6><span>12-04-2024</span>
                                                </a></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between"> <a href="{{ route('admin.product') }}">
                                                    <h6>Budget</h6><span>$42,500.00</span>
                                                </a></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="activity-secondary"></div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between"> <a href="{{ route('admin.product') }}">
                                                    <h6>Client</h6><span>Wonkyu Min</span>
                                                </a></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="user-details customers">
                            <ul>
                                <li class="d-inline-block"><img src="{{ asset('assets/images/dashboard-3/user/23.png') }}"
                                        alt="user"></li>
                                <li class="d-inline-block"><img src="{{ asset('assets/images/dashboard-3/user/24.png') }}"
                                        alt="user"></li>
                                <li class="d-inline-block"><img src="{{ asset('assets/images/dashboard-3/user/25.png') }}"
                                        alt="user"></li>
                            </ul>
                            <button class="btn btn-success">Done</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 finance">
                <div class="card mobile-app">
                    <div class="card-body finance-app">
                        <div class="app-design">
                            <div class="d-flex">
                                <div class="flex-shrink-0 bg-light-success me-2">
                                    <svg>
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#finance-app') }}"></use>
                                    </svg>
                                </div>
                                <div class="flex-grow-1">
                                    <h6>Finance App</h6><span>yongjae@gmail.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="client-budget">
                            <ul>
                                <li>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="activity-success"></div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between"> <a href="{{ route('admin.product') }}">
                                                    <h6>Due Date</h6><span>10-09-2024</span>
                                                </a></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="activity-success"></div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between"> <a href="{{ route('admin.product') }}">
                                                    <h6>Budget</h6><span>$15,600.00</span>
                                                </a></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between"> <a href="{{ route('admin.product') }}">
                                                    <h6>Client</h6><span>Yongjae Choi</span>
                                                </a></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="user-details customers">
                            <ul>
                                <li class="d-inline-block"><img
                                        src="{{ asset('assets/images/dashboard-3/user/26.png') }}" alt="user"></li>
                                <li class="d-inline-block"><img
                                        src="{{ asset('assets/images/dashboard-3/user/27.png') }}" alt="user"></li>
                            </ul>
                            <button class="btn btn-primary">Inprogress</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-8 col-md-8 box-col-6">
                <div class="card visitors">
                    <div class="card-header pb-0">
                        <div class="header-top">
                            <h5>Daily Visitors</h5>
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
                        <div class="row">
                            <div class="col-xl-8 xl-12 col-md-12 box-col-12">
                                <div class="area-line" id="area-line"></div>
                            </div>
                            <div class="col-xl-4 col-md-4 ecommerce-chart daily-visitors">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 bg-light-primary me-3">
                                        <div class="deals">
                                            <h4>350</h4><span>Deals</span>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0 bg-light-secondary">
                                        <div class="deals">
                                            <h4>$31K</h4><span>Order Price</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-value">
                                    <p>Visits<span>20,200</span></p>
                                    <div class="progress bg-light-primary">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 70%"
                                            aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="progress-value">
                                    <p>Order Value<span>15,610</span></p>
                                    <div class="progress bg-light-secondary">
                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 70%"
                                            aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-xl-25 col-lg-4 col-md-4 col-sm-6 box-col-3">
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
            <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 expenses-card">
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
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
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
            <div class="col-xl-4 col-xl-5a col-lg-4 col-md-12 col-sm-6 box-col-6">
                <div class="card product-chart">
                    <div class="card-header pb-0">
                        <div class="header-top">
                            <h5>Product Sales</h5>
                            <div class="dropdown icon-dropdown">
                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false"><i class="icon-more-alt"></i></button>
                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                        href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a
                                        class="dropdown-item" href="#">Yearly</a></div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mt-3">
                            <h2 class="me-2">$12,000</h2><span>(15,080 To Goal)</span>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div id="product-sales"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="card total-sales">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xxl-8 col-xl-12 col-sm-12 col box-col-12">
                                <div class="d-flex"> <span>
                                        <svg>
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#Revenue') }}"></use>
                                        </svg></span>
                                    <div class="flex-shrink-0">
                                        <h4>$73,927</h4>
                                        <h6>Total Revenue </h6>
                                        <div class="arrow-chart">
                                            <svg>
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#arrow-chart-up') }}">
                                                </use>
                                            </svg>
                                            <h5 class="font-success">+34%</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-4 col-4 p-0 revenue-card">
                                <div class="earning-chart" id="earning-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="card total-sales">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xxl-8 col-xl-12 col-sm-12 col box-col-12">
                                <div class="d-flex up-sales"><span>
                                        <svg>
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#Sales') }}"></use>
                                        </svg></span>
                                    <div class="flex-shrink-0">
                                        <h4>24k USD</h4>
                                        <h6>Total Sales</h6>
                                        <div class="arrow-chart">
                                            <svg>
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#arrow-chart') }}"></use>
                                            </svg>
                                            <h5 class="font-danger">-14%</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-4 col-4 p-0 revenue-card">
                                <div class="sales-chart" id="sales-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-4 customer-total">
                <div class="card total-sales">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xxl-8 col-xl-12 col-sm-12 col box-col-12">
                                <div class="d-flex total-customer"><span>
                                        <svg>
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#Customer') }}"></use>
                                        </svg></span>
                                    <div class="flex-shrink-0">
                                        <h4>62,828</h4>
                                        <h6>Total Customer</h6>
                                        <div class="arrow-chart">
                                            <svg>
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#arrow-chart') }}"></use>
                                            </svg>
                                            <h5 class="font-danger">-24%</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-4 col-4 p-0 revenue-card">
                                <div class="customer-chart" id="total-customer-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 box-col-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="header-top">
                            <h5>Stock Report</h5>
                            <div class="dropdown icon-dropdown">
                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false"><i class="icon-more-alt"></i></button>
                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                        href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a
                                        class="dropdown-item" href="#">Yearly</a></div>
                            </div>
                        </div>
                        <div class="stock-report mt-4">
                            <ul>
                                <li>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <h4>$625,083</h4>
                                            <svg class="ms-1">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#arrow-chart-up') }}">
                                                </use>
                                            </svg>
                                            <h6 class="font-success">+34%</h6>
                                        </div>
                                    </div><span>Sales Account</span>
                                </li>
                                <li>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <h4>36,900</h4>
                                            <svg class="ms-1">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#arrow-chart') }}"></use>
                                            </svg>
                                            <h6 class="font-danger">-14%</h6>
                                        </div>
                                    </div><span>General Leads</span>
                                </li>
                                <li>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <h4>4,5%</h4>
                                            <svg class="ms-1">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#arrow-chart-up') }}">
                                                </use>
                                            </svg>
                                            <h6 class="font-success">+30%</h6>
                                        </div>
                                    </div><span>Churn Rate</span>
                                </li>
                                <li>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <h4>8,640</h4>
                                            <svg class="ms-1">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#arrow-chart-up') }}">
                                                </use>
                                            </svg>
                                            <h6 class="font-success">+34%</h6>
                                        </div>
                                    </div><span>Returning Uses</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div id="report-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 box-col-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="header-top">
                            <h5>Track Order</h5>
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
                        <div class="order-place">
                            <div class="d-flex">
                                <div class="flex-shrink-0"><img
                                        src="{{ asset('assets/images/dashboard-2/product/headphone.png') }}"
                                        alt=""></div>
                                <div class="flex-grow-1"> <a href="{{ route('admin.product') }}">
                                        <h6 class="f-w-500">Wired Headphones with Mic (Black)</h6>
                                        <h5 class="font-primary f-w-600 mt-1">$27.93</h5>
                                    </a></div>
                            </div>
                        </div>
                        <ul class="track-order">
                            <li>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 bg-primary"><img
                                            src="{{ asset('assets/images/dashboard-2/product/4.png') }}" alt="">
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="d-flex justify-content-between"> <a href="{{ route('admin.product') }}">
                                                <h6>Order Placed</h6>
                                                <p class="text-truncate">We have received Your Order</p>
                                            </a><span class="font-primary f-w-500">Jun20 05:40PM</span></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 bg-secondary"><img
                                            src="{{ asset('assets/images/dashboard-2/product/5.png') }}" alt="">
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="d-flex justify-content-between"> <a href="{{ route('admin.product') }}">
                                                <h6>Order Packed</h6>
                                                <p class="text-truncate">Your Product Packed and ready to shipped</p>
                                            </a><span class="font-secondary f-w-500">Jun20 06:30PM</span></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><img
                                            src="{{ asset('assets/images/dashboard-2/product/6.png') }}" alt="">
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="d-flex justify-content-between"> <a href="{{ route('admin.product') }}">
                                                <h6>On the way</h6>
                                                <p class="text-truncate">Your Ordeis placed successfully.</p>
                                            </a><span class="f-w-600">July 20</span></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><img
                                            src="{{ asset('assets/images/dashboard-2/product/7.png') }}" alt="">
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="d-flex justify-content-between"> <a href="{{ route('admin.product') }}">
                                                <h6>Product Deliverd</h6>
                                                <p class="text-truncate">Our courier partner will deliver our stuff on July
                                                    3, 2024...</p>
                                            </a></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-12 col-md-6 box-col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="header-top">
                            <h5>Project Deliveries</h5>
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
                        <div id="company-viewchart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('assets/js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.en.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.custom.js') }}"></script>
    <script src="{{ asset('assets/js/owlcarousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/owlcarousel/owl-custom.js') }}"></script>
    <script src="{{ asset('assets/js/general-widget.js') }}"></script>
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection
