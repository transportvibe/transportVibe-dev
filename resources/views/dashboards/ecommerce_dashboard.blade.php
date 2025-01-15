@extends('layouts.simple.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/datatables.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 p-0">
                    <h3>
                        Ecommerce Dashboard</h3>
                </div>
                <div class="col-sm-6 p-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">E-Commerce</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid ecommerce-dashboard">
        <div class="row">
            <div class="col-xxl-6 col-xl-7 col-lg-7 box-col-7">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="card total-sales">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-8 xl-12 col-md-8 col-sm-12 col box-col-12">
                                        <div class="d-flex"> <span>
                                                <svg>
                                                    <use href="{{ asset('assets/svg/icon-sprite.svg#Revenue') }}"></use>
                                                </svg></span>
                                            <div class="flex-shrink-0">
                                                <h4>$73,927</h4>
                                                <h6>Total Revenue </h6>
                                                <div class="arrow-chart">
                                                    <svg>
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#arrow-chart-up') }}"></use>
                                                    </svg>
                                                    <h5 class="font-success">+34%</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-4 col-4 p-0 ecommerce-chart">
                                        <div class="earning-chart" id="earning-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="card total-sales">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-8 xl-12 col-md-8 col-sm-12 col box-col-12">
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
                                    <div class="col-xl-4 col-md-4 col-4 p-0 ecommerce-chart">
                                        <div class="sales-chart" id="sales-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="card total-sales">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-8 xl-12 col-md-8 col-sm-12 col box-col-12">
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
                                    <div class="col-xl-4 col-md-4 col-4 p-0 ecommerce-chart">
                                        <div class="customer-chart" id="total-customer-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="card total-sales">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-8 xl-12 col-md-8 col-sm-12 col box-col-12">
                                        <div class="d-flex total-product"><span>
                                                <svg>
                                                    <use href="{{ asset('assets/svg/icon-sprite.svg#Product') }}"></use>
                                                </svg></span>
                                            <div class="flex-shrink-0">
                                                <h4>72,982</h4>
                                                <h6>Total Product</h6>
                                                <div class="arrow-chart">
                                                    <svg>
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#arrow-chart-up') }}"></use>
                                                    </svg>
                                                    <h5 class="font-success">+42%</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-4 col-4 p-0 ecommerce-chart">
                                        <div class="total-product-chart" id="total-product-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-5 col-lg-5 box-col-5">
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
                            <div class="col-xl-8 xl-12 col-md-8 box-col-12">
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
            <div class="col-xxl-5 col-xl-4 col-lg-4 box-col-4">
                <div class="card product-card">
                    <div class="card-header pb-0">
                        <div class="header-top">
                            <h5>Top Product</h5>
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
                        <p>According to overall sales, the top 4 this week</p>
                        <div class="d-flex">
                            <div class="card-product"> <a href="{{ route('admin.product') }}"> <span> <img
                                            src="{{ asset('assets/images/dashboard-2/product/1.png') }}" alt=""></span><span
                                        class="badge badge-primary">Hot</span>
                                    <div class="details-product">
                                        <h6>Women's Yellow top</h6>
                                        <div class="price-product">$26.00
                                            <del>$30.00</del>
                                        </div>
                                    </div>
                                </a></div>
                            <div class="card-product"> <a href="{{ route('admin.product') }}"> <span> <img
                                            src="{{ asset('assets/images/dashboard-2/product/2.png') }}" alt=""></span>
                                    <div class="details-product">
                                        <h6>Full Sleeve Men Jacket</h6>
                                        <div class="price-product">$14.00
                                            <del>$15.00</del>
                                        </div>
                                    </div>
                                </a></div>
                            <div class="card-product"> <a href="{{ route('admin.product') }}"> <span> <img
                                            src="{{ asset('assets/images/dashboard-2/product/3.png') }}" alt=""></span><span
                                        class="badge badge-secondary">50%</span>
                                    <div class="details-product">
                                        <h6>Full Sleeve Men Jacket</h6>
                                        <div class="price-product">$30.00
                                            <del>$35.00</del>
                                        </div>
                                    </div>
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-7 col-xl-8 col-lg-8 box-col-8e">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="header-top">
                            <h5>Open invoices</h5>
                            <div class="dropdown icon-dropdown">
                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false"><i class="icon-more-alt"></i></button>
                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                        href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a
                                        class="dropdown-item" href="#">Yearly</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0 open-invoice">
                        <div class="table-responsive custom-scrollbar">
                            <table class="table display" id="invoice" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <label class="form-check-label"></label>
                                            </div>
                                        </th>
                                        <th>Invoice</th>
                                        <th>Customer</th>
                                        <th>Status</th>
                                        <th>Amount</th>
                                        <th>Due Date</th>
                                        <th> </th>
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
                                        <td>FV 00002/04/2024</td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0"><img
                                                        src="{{ asset('assets/images/dashboard-2/user/1.png') }}" alt="">
                                                </div>
                                                <div class="flex-grow-1 ms-3"><a href="{{ route('admin.list_products') }}">
                                                        <h6>Lena smith</h6><span>lena.smith@gmail.com</span>
                                                    </a></div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary">Paid</button>
                                        </td>
                                        <td>$8,892.00</td>
                                        <td>Feb 20,2024</td>
                                        <td>
                                            <div class="dropdown icon-dropdown">
                                                <button class="btn dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="icon-more-alt"></i></button>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                        href="#">Weekly</a><a class="dropdown-item"
                                                        href="#">Monthly</a><a class="dropdown-item"
                                                        href="#">Yearly</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <label class="form-check-label"></label>
                                            </div>
                                        </td>
                                        <td>FV 00008/07/2024</td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0"><img
                                                        src="{{ asset('assets/images/dashboard-2/user/2.png') }}" alt="">
                                                </div>
                                                <div class="flex-grow-1 ms-3"><a href="{{ route('admin.list_products') }}">
                                                        <h6>Aliah Lain</h6><span>aliah.lain@gmail.com</span>
                                                    </a></div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn btn-secondary">Unpaid</button>
                                        </td>
                                        <td>$4,942.00</td>
                                        <td>Feb 14,2024</td>
                                        <td>
                                            <div class="dropdown icon-dropdown">
                                                <button class="btn dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="icon-more-alt"></i></button>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                        href="#">Weekly</a><a class="dropdown-item"
                                                        href="#">Monthly</a><a class="dropdown-item"
                                                        href="#">Yearly</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <label class="form-check-label"></label>
                                            </div>
                                        </td>
                                        <td>FV 00007/09/2024</td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0"><img
                                                        src="{{ asset('assets/images/dashboard-2/user/3.png') }}" alt="">
                                                </div>
                                                <div class="flex-grow-1 ms-3"><a href="{{ route('admin.list_products') }}">
                                                        <h6>Nicol Green</h6><span>nicol.green@gmail.com</span>
                                                    </a></div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary">Paid</button>
                                        </td>
                                        <td>$3,753.00</td>
                                        <td>Feb 10,2024</td>
                                        <td>
                                            <div class="dropdown icon-dropdown">
                                                <button class="btn dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="icon-more-alt"></i></button>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                        href="#">Weekly</a><a class="dropdown-item"
                                                        href="#">Monthly</a><a class="dropdown-item"
                                                        href="#">Yearly</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <label class="form-check-label"></label>
                                            </div>
                                        </td>
                                        <td>FV 00009/04/2024</td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0"><img
                                                        src="{{ asset('assets/images/dashboard-2/user/4.png') }}" alt="">
                                                </div>
                                                <div class="flex-grow-1 ms-3"><a href="{{ route('admin.list_products') }}">
                                                        <h6>Paul Miller</h6><span>paul.miller@gmail.com</span>
                                                    </a></div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn btn-danger">Overdue</button>
                                        </td>
                                        <td>$2,852.00</td>
                                        <td>Feb 20,2024</td>
                                        <td>
                                            <div class="dropdown icon-dropdown">
                                                <button class="btn dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="icon-more-alt"></i></button>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                        href="#">Weekly</a><a class="dropdown-item"
                                                        href="#">Monthly</a><a class="dropdown-item"
                                                        href="#">Yearly</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 box-col-4">
                <div class="card categories-card">
                    <div class="card-header pb-0">
                        <div class="header-top">
                            <h5>Top Categories</h5>
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
                        <div class="categories-chart">
                            <div id="categories"></div>
                            <ul>
                                <li>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-2"><span class="bg-primary"></span></div>
                                        <div class="flex-grow-1">
                                            <h4>75%</h4>
                                            <h6>Electronics</h6>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-2"><span class="bg-secondary"></span></div>
                                        <div class="flex-grow-1">
                                            <h4>46,8%</h4>
                                            <h6>Fashion Trends</h6>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-2"><span class="bg-success"></span></div>
                                        <div class="flex-grow-1">
                                            <h4>17,8%</h4>
                                            <h6>Entertainment</h6>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 box-col-4">
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
                                <div class="flex-shrink-0"><img src="{{ asset('assets/images/dashboard-2/product/headphone.png') }}"
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
                                            src="{{ asset('assets/images/dashboard-2/product/4.png') }}" alt=""></div>
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
                                            src="{{ asset('assets/images/dashboard-2/product/5.png') }}" alt=""></div>
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
                                    <div class="flex-shrink-0"><img src="{{ asset('assets/images/dashboard-2/product/6.png') }}"
                                            alt=""></div>
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
                                    <div class="flex-shrink-0"><img src="{{ asset('assets/images/dashboard-2/product/7.png') }}"
                                            alt=""></div>
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
            <div class="col-xl-4 col-lg-4 box-col-4">
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
                        <div class="d-flex mt-3">
                            <h2 class="me-2">$12,000</h2><span>(15,080 To Goal)</span>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div id="product-sales"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 box-col-7">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="header-top">
                            <h5>Manage Order</h5>
                            <div class="dropdown icon-dropdown">
                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false"><i class="icon-more-alt"></i></button>
                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                        href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a
                                        class="dropdown-item" href="#">Yearly</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0 report">
                        <div class="table-responsive custom-scrollbar">
                            <table class="table display" id="report" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <label class="form-check-label"></label>
                                            </div>
                                        </th>
                                        <th>Products name</th>
                                        <th>ID</th>
                                        <th>Date</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Quantity</th>
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
                                        <td>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0"><img
                                                        src="{{ asset('assets/images/dashboard-2/product/8.png') }}" alt="">
                                                </div>
                                                <div class="flex-grow-1 ms-3"><a href="{{ route('admin.list_products') }}">
                                                        <h6>MacBook Pro</h6>
                                                    </a></div>
                                            </div>
                                        </td>
                                        <td>#36294</td>
                                        <td>15/08/23</td>
                                        <td>$524</td>
                                        <td>
                                            <button class="btn btn-primary">In Stock</button>
                                        </td>
                                        <td>15 PCS</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <label class="form-check-label"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0"><img
                                                        src="{{ asset('assets/images/dashboard-2/product/9.png') }}" alt="">
                                                </div>
                                                <div class="flex-grow-1 ms-3"><a href="{{ route('admin.list_products') }}">
                                                        <h6>i Phone 12 Pro</h6>
                                                    </a></div>
                                            </div>
                                        </td>
                                        <td>#65448</td>
                                        <td>13/08/23</td>
                                        <td>$450</td>
                                        <td>
                                            <button class="btn btn-success">Low Stock</button>
                                        </td>
                                        <td>06 PCS</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <label class="form-check-label"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0"><img
                                                        src="{{ asset('assets/images/dashboard-2/product/10.png') }}" alt="">
                                                </div>
                                                <div class="flex-grow-1 ms-3"><a href="{{ route('admin.list_products') }}">
                                                        <h6>Apple Watch</h6>
                                                    </a></div>
                                            </div>
                                        </td>
                                        <td>#35448</td>
                                        <td>#35448</td>
                                        <td>$500</td>
                                        <td>
                                            <button class="btn btn-primary">In Stock</button>
                                        </td>
                                        <td>20 PCS</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <label class="form-check-label"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0"><img
                                                        src="{{ asset('assets/images/dashboard-2/product/11.png') }}" alt="">
                                                </div>
                                                <div class="flex-grow-1 ms-3"><a href="{{ route('admin.list_products') }}">
                                                        <h6>Apple Headphone</h6>
                                                    </a></div>
                                            </div>
                                        </td>
                                        <td>#95421</td>
                                        <td>10/08/23</td>
                                        <td>$200</td>
                                        <td>
                                            <button class="btn btn-danger">Out of stock</button>
                                        </td>
                                        <td>12 PCS</td>
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
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#arrow-chart-up') }}"></use>
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
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#arrow-chart-up') }}"></use>
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
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#arrow-chart-up') }}"></use>
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
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('assets/js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ asset('assets/js/counter/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/counter/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/counter/counter-custom.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom1.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard/dashboard_2.js') }}"></script>
    <script src="{{ asset('assets/js/animation/wow/wow.min.js') }}"></script>
    <!-- Plugin used-->
    <script>
        new WOW().init();
    </script>
@endsection
