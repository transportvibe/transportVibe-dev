@extends('layouts.simple.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 ps-0">
                    <h3>Payment Details</h3>
                </div>
                <div class="col-sm-6 pe-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ecommerce</li>
                        <li class="breadcrumb-item active">Payment Details</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid credit-card">
        <div class="row">
            <!-- Individual column searching (text inputs) Starts-->
            <div class="col-xl-8 box-col-80">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Credit card </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7 order-md-0 order-1">
                                <form class="theme-form mega-form">
                                    <div class="mb-3">
                                        <input class="form-control" type="text" placeholder="Card number">
                                    </div>
                                    <div class="mb-3">
                                        <input class="form-control" type="text" placeholder="First Name">
                                    </div>
                                    <div class="mb-3">
                                        <input class="form-control" type="date">
                                    </div>
                                    <div class="mb-3">
                                        <input class="form-control" type="text" placeholder="Name on card">
                                    </div>
                                    <div class="mb-3">
                                        <select class="form-select" size="1">
                                            <option>Select Type</option>
                                            <option>Master</option>
                                            <option>Visa</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-5 text-center"><img class="img-fluid"
                                    src="{{ asset('assets/images/ecommerce/card.png') }}" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Individual column searching (text inputs) Ends-->
            <!-- Debit Card Starts-->
            <div class="col-xl-4 col-lg-6 box-col-33 debit-card">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Debit card </h4>
                    </div>
                    <div class="card-body">
                        <form class="theme-form e-commerce-form row">
                            <div class="mb-3 col-6 p-r-0">
                                <input class="form-control" type="text" placeholder="Full name here">
                            </div>
                            <div class="mb-3 col-6">
                                <input class="form-control" type="text" placeholder="Card number">
                            </div>
                            <div class="mb-3 col-6 p-r-0">
                                <input class="form-control" type="text" placeholder="CVV number">
                            </div>
                            <div class="mb-3 col-6">
                                <input class="form-control" type="text" placeholder="CVC">
                            </div>
                            <div class="col-12">
                                <label class="col-form-label p-b-20">Expiration Date</label>
                            </div>
                            <div class="mb-3 col-6 p-r-0">
                                <select class="form-select" size="1">
                                    <option>Select Month</option>
                                    <option>Jan</option>
                                    <option>Fab</option>
                                    <option>March</option>
                                    <option>April</option>
                                </select>
                            </div>
                            <div class="mb-3 col-6">
                                <select class="form-select" size="1">
                                    <option>Select Year</option>
                                    <option>2023</option>
                                    <option>2023</option>
                                    <option>2023</option>
                                    <option>2023</option>
                                    <option>2023</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary btn-block" type="button" title="">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Debit Card Ends-->
            <!-- COD Starts-->
            <div class="col-xl-4 col-lg-6 box-col-33">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>COD</h4>
                    </div>
                    <div class="card-body">
                        <form class="theme-form row">
                            <div class="mb-3 col-6 p-r-0">
                                <input class="form-control" type="text" placeholder="First Name">
                            </div>
                            <div class="mb-3 col-6">
                                <input class="form-control" type="text" placeholder="Last name">
                            </div>
                            <div class="mb-3 col-6 p-r-0">
                                <input class="form-control" type="text" placeholder="Pincode">
                            </div>
                            <div class="mb-3 col-6">
                                <input class="form-control" type="number" placeholder="Enter mobile number">
                            </div>
                            <div class="mb-3 col-6 p-r-0">
                                <input class="form-control" type="text" placeholder="State">
                            </div>
                            <div class="mb-3 col-6">
                                <input class="form-control" type="text" placeholder="City">
                            </div>
                            <div class="mb-3 col-12">
                                <textarea class="form-control" rows="3" placeholder="Address"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary btn-block" type="button" title="">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- COD Ends-->
            <!-- EMI Starts-->
            <div class="col-xl-4 col-lg-6 box-col-33">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>EMI</h4>
                    </div>
                    <div class="card-body">
                        <form class="theme-form row">
                            <div class="mb-3 col-6 p-r-0">
                                <input class="form-control" type="text" placeholder="First Name">
                            </div>
                            <div class="mb-3 col-6">
                                <input class="form-control" type="text" placeholder="Last name">
                            </div>
                            <div class="mb-3 col-6 p-r-0">
                                <input class="form-control" type="text" placeholder="Pincode">
                            </div>
                            <div class="mb-3 col-6">
                                <select class="form-select" size="1">
                                    <option>Bank Name</option>
                                    <option>SBI</option>
                                    <option>ICICI</option>
                                    <option>KOTAK</option>
                                    <option>BOB</option>
                                </select>
                            </div>
                            <div class="mb-3 col-12">
                                <select class="form-select" size="1">
                                    <option>Select Card</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="mb-3 col-12">
                                <select class="form-select" size="1">
                                    <option>Select Duration</option>
                                    <option>2023-2023</option>
                                    <option>2023-2023</option>
                                    <option>2023-2023</option>
                                    <option>2023-2023</option>
                                </select>
                            </div>
                            <div class="mb-3 col-12">
                                <ul class="payment-opt">
                                    <li><img src="{{ asset('assets/images/ecommerce/mastercard.png') }}" alt="">
                                    </li>
                                    <li><img src="{{ asset('assets/images/ecommerce/visa.png') }}" alt=""></li>
                                    <li><img src="{{ asset('assets/images/ecommerce/paypal.png') }}" alt=""></li>
                                </ul>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary btn-block" type="button" title="">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- EMI Ends-->
            <!-- EMI Starts-->
            <div class="col-xl-4 col-lg-6 box-col-33">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Net Banking</h4>
                    </div>
                    <div class="card-body">
                        <form class="theme-form row">
                            <div class="mb-3 col-12">
                                <input class="form-control" type="text" placeholder="AC Holder name">
                            </div>
                            <div class="mb-3 col-12">
                                <input class="form-control" type="text" placeholder="Account number">
                            </div>
                            <div class="mb-3 col-6 p-r-0">
                                <select class="form-select" size="1">
                                    <option>Select Bank</option>
                                    <option>SBI</option>
                                    <option>ICICI</option>
                                    <option>KOTAK</option>
                                    <option>BOB</option>
                                </select>
                            </div>
                            <div class="mb-3 col-6">
                                <input class="form-control" type="text" placeholder="ICFC code">
                            </div>
                            <div class="mb-3 col-12">
                                <input class="form-control" type="number" placeholder="Enter mobile number">
                            </div>
                            <div class="mb-3 col-12">
                                <input class="form-control" type="text" placeholder="Other Details">
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary btn-block" type="button" title="">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- EMI Ends-->
            <!-- Container-fluid Ends-->
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
@endsection
