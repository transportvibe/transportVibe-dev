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
                    <h3>Project Dashboard</h3>
                </div>
                <div class="col-sm-6 p-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Project</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid project-dashboard">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-4">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6">
                        <div class="card project-task">
                            <div class="card-body">
                                <div class="website-design">
                                    <div class="d-flex">
                                        <h4 class="font-primary">Website Design</h4><span>Running</span>
                                    </div>
                                    <div class="progress-value">
                                        <h5>Task Completed: 8/10</h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 70%"
                                                aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="client">
                                        <div class="flex-grow-1">
                                            <h6>Client: Brave Wings</h6><span>Deadline: 25 April 2024</span>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div class="design-card bg-light-primary">
                                                <svg>
                                                    <use href="{{ asset('assets/svg/icon-sprite.svg#website-design') }}"></use>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6">
                        <div class="card project-task">
                            <div class="card-body">
                                <div class="website-design">
                                    <div class="d-flex">
                                        <h4 class="font-secondary">NFT App Design</h4><span>Running</span>
                                    </div>
                                    <div class="progress-value">
                                        <h5>Task Completed: 4/10</h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 50%"
                                                aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="client">
                                        <div class="flex-grow-1">
                                            <h6>Client: Brave Wings</h6><span>Deadline: 25 April 2024</span>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div class="design-card bg-light-secondary">
                                                <svg>
                                                    <use href="{{ asset('assets/svg/icon-sprite.svg#nft-app') }}"></use>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card total-revenue">
                    <div class="card-header pb-0">
                        <div class="header-top">
                            <h5>Total Revenue</h5>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-xl-9 col-xl-100 col-lg-9 col-md-12">
                                <div class="revenue-legend">
                                    <ul>
                                        <li class="me-3">
                                            <div class="circle bg-primary me-1"> </div><span>Earning</span>
                                        </li>
                                        <li>
                                            <div class="circle bg-secondary me-1"></div><span>Expense </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="revenue-chart" id="revenue-chart"></div>
                            </div>
                            <div class="col-xl-3 col-lg-3 increase ps-0">
                                <div class="d-flex pe-3"><span class="me-2">Year:</span><span>2024<i
                                            class="fa fa-caret-down ms-2"></i></span></div>
                                <div class="total-increase">
                                    <h2>$25,837</h2><span>Total : 23,000</span>
                                </div>
                                <div id="monthlychart"></div>
                                <button class="btn btn-primary">Increase</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-5 col-md-5">
                <div class="card upgrade-card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <h4>Upgrade Your Subscription Plan</h4>
                                <p>The goal of this message is to welcome you to our app.</p><a class="btn btn-primary"
                                    href="{{ route('admin.list_products') }}">Go Premium</a>
                            </div>
                            <div class="flex-shrink-0"> <img src="{{ asset('assets/images/dashboard-3/upgrade.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-7 col-md-7">
                <div class="card today-task">
                    <div class="card-header pb-0">
                        <div class="header-top">
                            <h5>Today Task</h5>
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
                                            class="ms-2 bg-primary">5</span></a></li>
                                <li class="nav-item"><a class="nav-link nav-border tab-primary" id="bottom-inbox-tab"
                                        data-bs-toggle="tab" href="#bottom-inbox" role="tab"
                                        aria-controls="bottom-inbox" aria-selected="false">Important</a></li>
                                <li class="nav-item"><a class="nav-link nav-border tab-primary" id="bottom-contact-tab"
                                        data-bs-toggle="tab" href="#bottom-contact" role="tab"
                                        aria-controls="bottom-contact" aria-selected="false">Notes</a></li>
                                <li class="nav-item"><a class="nav-link nav-border tab-primary" id="bottom-links-tab"
                                        data-bs-toggle="tab" href="#bottom-links" role="tab"
                                        aria-controls="bottom-links" aria-selected="false">Links</a></li>
                            </ul>
                        </div>
                        <div class="tab-content content-tab" id="bottom-tabContent">
                            <div class="tab-pane fade show active" id="bottom-home" role="tabpanel">
                                <div class="table-responsive custom-scrollbar">
                                    <table class="table display" style="width:100%">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>Create a Userflow. Social Application Design</p>
                                                </td>
                                                <td>
                                                    <button class="btn btn-success">Done</button>
                                                </td>
                                                <td>Nov 03,2024</td>
                                                <td> <span class="delete-option"> <a href="javascript:void(0)">
                                                            <svg class="remove">
                                                                <use href="{{ asset('assets/svg/icon-sprite.svg#Delete') }}"></use>
                                                            </svg></a></span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>Slimmuch Product Design Main Page</p>
                                                </td>
                                                <td>
                                                    <button class="btn btn-secondary">Pending</button>
                                                </td>
                                                <td>Aug 06,2024</td>
                                                <td> <span class="delete-option"> <a href="javascript:void(0)">
                                                            <svg class="remove">
                                                                <use href="{{ asset('assets/svg/icon-sprite.svg#Delete') }}"></use>
                                                            </svg></a></span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>Design of Interactive Prototypes</p>
                                                </td>
                                                <td>
                                                    <button class="btn btn-primary">In Progress</button>
                                                </td>
                                                <td>Nov 03,2024</td>
                                                <td> <span class="delete-option"> <a href="javascript:void(0)">
                                                            <svg class="remove">
                                                                <use href="{{ asset('assets/svg/icon-sprite.svg#Delete') }}"></use>
                                                            </svg></a></span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>Create Userflow Social Application Design</p>
                                                </td>
                                                <td>
                                                    <button class="btn btn-success">Done</button>
                                                </td>
                                                <td>Dec 20,2024</td>
                                                <td> <span class="delete-option"> <a href="javascript:void(0)">
                                                            <svg class="remove">
                                                                <use href="{{ asset('assets/svg/icon-sprite.svg#Delete') }}"></use>
                                                            </svg></a></span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>Create Userflow Social Application Design</p>
                                                </td>
                                                <td>
                                                    <button class="btn btn-primary">In Progress</button>
                                                </td>
                                                <td>Sep 20,2024</td>
                                                <td> <span class="delete-option"> <a href="javascript:void(0)">
                                                            <svg class="remove">
                                                                <use href="{{ asset('assets/svg/icon-sprite.svg#Delete') }}"></use>
                                                            </svg></a></span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content content-tab" id="bottom-tabContent-2">
                            <div class="tab-pane fade show" id="bottom-inbox" role="tabpanel">
                                <div class="table-responsive custom-scrollbar">
                                    <table class="table display" style="width:100%">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>Create a Userflow. Social Application Design</p>
                                                </td>
                                                <td>
                                                    <button class="btn btn-success">Done</button>
                                                </td>
                                                <td>Nov 03,2024</td>
                                                <td> <span class="delete-option"> <a href="javascript:void(0)">
                                                            <svg class="remove">
                                                                <use href="{{ asset('assets/svg/icon-sprite.svg#Delete') }}"></use>
                                                            </svg></a></span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>Slimmuch Product Design Main Page</p>
                                                </td>
                                                <td>
                                                    <button class="btn btn-secondary">Pending</button>
                                                </td>
                                                <td>Aug 06,2024</td>
                                                <td> <span class="delete-option"> <a href="javascript:void(0)">
                                                            <svg class="remove">
                                                                <use href="{{ asset('assets/svg/icon-sprite.svg#Delete') }}"></use>
                                                            </svg></a></span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>Design of Interactive Prototypes</p>
                                                </td>
                                                <td>
                                                    <button class="btn btn-primary">In Progress</button>
                                                </td>
                                                <td>Nov 03,2024</td>
                                                <td> <span class="delete-option"> <a href="javascript:void(0)">
                                                            <svg class="remove">
                                                                <use href="{{ asset('assets/svg/icon-sprite.svg#Delete') }}"></use>
                                                            </svg></a></span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content content-tab" id="bottom-tabContent-3">
                            <div class="tab-pane fade show" id="bottom-contact" role="tabpanel">
                                <div class="table-responsive custom-scrollbar">
                                    <table class="table display" style="width:100%">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>Create a Userflow. Social Application Design</p>
                                                </td>
                                                <td>
                                                    <button class="btn btn-success">Done</button>
                                                </td>
                                                <td>Nov 03,2024</td>
                                                <td> <span class="delete-option"> <a href="javascript:void(0)">
                                                            <svg class="remove">
                                                                <use href="{{ asset('assets/svg/icon-sprite.svg#Delete') }}"></use>
                                                            </svg></a></span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>Slimmuch Product Design Main Page</p>
                                                </td>
                                                <td>
                                                    <button class="btn btn-secondary">Pending</button>
                                                </td>
                                                <td>Aug 06,2024</td>
                                                <td> <span class="delete-option"> <a href="javascript:void(0)">
                                                            <svg class="remove">
                                                                <use href="{{ asset('assets/svg/icon-sprite.svg#Delete') }}"></use>
                                                            </svg></a></span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content content-tab" id="bottom-tabContent-4">
                            <div class="tab-pane fade show" id="bottom-links" role="tabpanel">
                                <div class="table-responsive custom-scrollbar">
                                    <table class="table display" style="width:100%">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>Create a Userflow. Social Application Design</p>
                                                </td>
                                                <td>
                                                    <button class="btn btn-success">Done</button>
                                                </td>
                                                <td>Nov 03,2024</td>
                                                <td> <span class="delete-option"> <a href="javascript:void(0)">
                                                            <svg class="remove">
                                                                <use href="{{ asset('assets/svg/icon-sprite.svg#Delete') }}"></use>
                                                            </svg></a></span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>Slimmuch Product Design Main Page</p>
                                                </td>
                                                <td>
                                                    <button class="btn btn-secondary">Pending</button>
                                                </td>
                                                <td>Aug 06,2024</td>
                                                <td> <span class="delete-option"> <a href="javascript:void(0)">
                                                            <svg class="remove">
                                                                <use href="{{ asset('assets/svg/icon-sprite.svg#Delete') }}"></use>
                                                            </svg></a></span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>Design of Interactive Prototypes</p>
                                                </td>
                                                <td>
                                                    <button class="btn btn-primary">In Progress</button>
                                                </td>
                                                <td>Nov 03,2024</td>
                                                <td> <span class="delete-option"> <a href="javascript:void(0)">
                                                            <svg class="remove">
                                                                <use href="{{ asset('assets/svg/icon-sprite.svg#Delete') }}"></use>
                                                            </svg></a></span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>Create Userflow Social Application Design</p>
                                                </td>
                                                <td>
                                                    <button class="btn btn-success">Done</button>
                                                </td>
                                                <td>Dec 20,2024</td>
                                                <td> <span class="delete-option"> <a href="javascript:void(0)">
                                                            <svg class="remove">
                                                                <use href="{{ asset('assets/svg/icon-sprite.svg#Delete') }}"> </use>
                                                            </svg></a></span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="header-top">
                            <h5>Project Summery</h5>
                            <div class="dropdown icon-dropdown">
                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false"><i class="icon-more-alt"></i></button>
                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                        href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a
                                        class="dropdown-item" href="#">Yearly</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0 project-summary">
                        <div class="table-responsive custom-scrollbar">
                            <table class="table display" id="project-summary" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <label class="form-check-label"></label>
                                            </div>
                                        </th>
                                        <th> <span>Project name</span></th>
                                        <th> <span>Project Type</span></th>
                                        <th> <span>Teams</span></th>
                                        <th> <span>Start Date</span></th>
                                        <th> <span>Clients Location</span></th>
                                        <th> <span>Status</span></th>
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
                                        <td><span>Landing page</span></td>
                                        <td>Website</td>
                                        <td>
                                            <div class="user-details customers">
                                                <ul>
                                                    <li class="d-inline-block"><img
                                                            src="{{ asset('assets/images/dashboard-3/user/14.png') }}" alt="user">
                                                    </li>
                                                    <li class="d-inline-block"><img
                                                            src="{{ asset('assets/images/dashboard-3/user/15.png') }}" alt="user">
                                                    </li>
                                                    <li class="d-inline-block"><img
                                                            src="{{ asset('assets/images/dashboard-3/user/16.png') }}" alt="user">
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>Oct 26,2024</td>
                                        <td>UK-John Peter</td>
                                        <td class="font-success">Active</td>
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
                                        <td><span>NFT Website Page</span></td>
                                        <td>Campaign</td>
                                        <td>
                                            <div class="user-details customers">
                                                <ul>
                                                    <li class="d-inline-block"><img
                                                            src="{{ asset('assets/images/dashboard-3/user/17.png') }}" alt="user">
                                                    </li>
                                                    <li class="d-inline-block"><img
                                                            src="{{ asset('assets/images/dashboard-3/user/3.png') }}" alt="user">
                                                    </li>
                                                    <li class="d-inline-block"><img
                                                            src="{{ asset('assets/images/dashboard-3/user/7.png') }}" alt="user">
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>Nov 10,2024</td>
                                        <td>Srinsoft technology</td>
                                        <td class="font-secondary">Pending</td>
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
                                        <td><span>Email Design</span></td>
                                        <td>Design</td>
                                        <td>
                                            <div class="user-details customers">
                                                <ul>
                                                    <li class="d-inline-block"><img
                                                            src="{{ asset('assets/images/dashboard-3/user/12.png') }}" alt="user">
                                                    </li>
                                                    <li class="d-inline-block"><img
                                                            src="{{ asset('assets/images/dashboard-3/user/18.png') }}" alt="user">
                                                    </li>
                                                    <li class="d-inline-block"><img
                                                            src="{{ asset('assets/images/dashboard-3/user/19.png') }}" alt="user">
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>Feb 19,2024</td>
                                        <td>CA William sck</td>
                                        <td class="font-success">Active</td>
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
                                        <td><span>Banner Design</span></td>
                                        <td>Banner</td>
                                        <td>
                                            <div class="user-details customers">
                                                <ul>
                                                    <li class="d-inline-block"><img
                                                            src="{{ asset('assets/images/dashboard-3/user/14.png') }}" alt="user">
                                                    </li>
                                                    <li class="d-inline-block"><img
                                                            src="{{ asset('assets/images/dashboard-3/user/15.png') }}" alt="user">
                                                    </li>
                                                    <li class="d-inline-block"><img
                                                            src="{{ asset('assets/images/dashboard-3/user/16.png') }}" alt="user">
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>Nov 10,2024</td>
                                        <td>USA</td>
                                        <td class="font-secondary">Pending</td>
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
                                        <td><span>Redesign Layout</span></td>
                                        <td>Landing</td>
                                        <td>
                                            <div class="user-details customers">
                                                <ul>
                                                    <li class="d-inline-block"><img
                                                            src="{{ asset('assets/images/dashboard-3/user/17.png') }}" alt="user">
                                                    </li>
                                                    <li class="d-inline-block"><img
                                                            src="{{ asset('assets/images/dashboard-3/user/3.png') }}" alt="user">
                                                    </li>
                                                    <li class="d-inline-block"><img
                                                            src="{{ asset('assets/images/dashboard-3/user/7.png') }}" alt="user">
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>Jan 10,2024</td>
                                        <td>Design technology</td>
                                        <td class="font-Success">Active</td>
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
                                        <td><span>Login & Sign Up Ui</span></td>
                                        <td>Ui Design</td>
                                        <td>
                                            <div class="user-details customers">
                                                <ul>
                                                    <li class="d-inline-block"><img
                                                            src="{{ asset('assets/images/dashboard-3/user/12.png') }}" alt="user">
                                                    </li>
                                                    <li class="d-inline-block"><img
                                                            src="{{ asset('assets/images/dashboard-3/user/18.png') }}" alt="user">
                                                    </li>
                                                    <li class="d-inline-block"><img
                                                            src="{{ asset('assets/images/dashboard-3/user/19.png') }}" alt="user">
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>Feb 19,2024</td>
                                        <td>CA William sck</td>
                                        <td class="font-success">Active</td>
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
                                        <td><span>Front-End Website</span></td>
                                        <td>Website</td>
                                        <td>
                                            <div class="user-details customers">
                                                <ul>
                                                    <li class="d-inline-block"><img
                                                            src="{{ asset('assets/images/dashboard-3/user/14.png') }}" alt="user">
                                                    </li>
                                                    <li class="d-inline-block"><img
                                                            src="{{ asset('assets/images/dashboard-3/user/15.png') }}" alt="user">
                                                    </li>
                                                    <li class="d-inline-block"><img
                                                            src="{{ asset('assets/images/dashboard-3/user/16.png') }}" alt="user">
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>Nov 26,2024</td>
                                        <td>New zealand</td>
                                        <td class="font-success">Active</td>
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
                                        <td><span>NFT Website Page</span></td>
                                        <td>Campaign</td>
                                        <td>
                                            <div class="user-details customers">
                                                <ul>
                                                    <li class="d-inline-block"><img
                                                            src="{{ asset('assets/images/dashboard-3/user/17.png') }}" alt="user">
                                                    </li>
                                                    <li class="d-inline-block"><img
                                                            src="{{ asset('assets/images/dashboard-3/user/3.png') }}" alt="user">
                                                    </li>
                                                    <li class="d-inline-block"><img
                                                            src="{{ asset('assets/images/dashboard-3/user/7.png') }}" alt="user">
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>Nov 10,2024</td>
                                        <td>Srinsoft technology</td>
                                        <td class="font-secondary">Pending</td>
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
                                        <td><span>Social Design</span></td>
                                        <td>Product Design</td>
                                        <td>
                                            <div class="user-details customers">
                                                <ul>
                                                    <li class="d-inline-block"><img
                                                            src="{{ asset('assets/images/dashboard-3/user/12.png') }}" alt="user">
                                                    </li>
                                                    <li class="d-inline-block"><img
                                                            src="{{ asset('assets/images/dashboard-3/user/18.png') }}" alt="user">
                                                    </li>
                                                    <li class="d-inline-block"><img
                                                            src="{{ asset('assets/images/dashboard-3/user/19.png') }}" alt="user">
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>Feb 19,2024</td>
                                        <td>CA William</td>
                                        <td class="font-success">Active</td>
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
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="header-top">
                            <h5>Project Statistics</h5>
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
                        <div id="Statistics"></div>
                    </div>
                </div>
            </div>
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
            <div class="col-xl-2 col-lg-4 col-md-4 finance">
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
                                <li class="d-inline-block"><img src="{{ asset('assets/images/dashboard-3/user/26.png') }}"
                                        alt="user"></li>
                                <li class="d-inline-block"><img src="{{ asset('assets/images/dashboard-3/user/27.png') }}"
                                        alt="user"></li>
                            </ul>
                            <button class="btn btn-primary">Inprogress</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 proorder-xl-1">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="header-top">
                            <h5>Upcoming Deadlines</h5>
                            <div class="dropdown icon-dropdown">
                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false"><i class="icon-more-alt"></i></button>
                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                        href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a
                                        class="dropdown-item" href="#">Yearly</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0 upcoming">
                        <div class="table-responsive custom-scrollbar">
                            <table class="table display" id="upcoming-deadlines" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Employee</th>
                                        <th>Task</th>
                                        <th>Deadline</th>
                                        <th>Progress</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0"><img
                                                        src="{{ asset('assets/images/dashboard-3/user/29.png') }}" alt="">
                                                </div>
                                                <div class="flex-grow-1 ms-2"><a href="{{ route('admin.user_profile') }}">
                                                        <h6>Kyuwon</h6>
                                                    </a></div>
                                            </div>
                                        </td>
                                        <td> <span>Mobile</span></td>
                                        <td>10 Aug</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-primary" role="progressbar"
                                                    style="width: 70%" aria-valuenow="10" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0"><img
                                                        src="{{ asset('assets/images/dashboard-3/user/30.png') }}" alt="">
                                                </div>
                                                <div class="flex-grow-1 ms-2"><a href="{{ route('admin.user_profile') }}">
                                                        <h6>Junsung</h6>
                                                    </a></div>
                                            </div>
                                        </td>
                                        <td> <span>Landing</span></td>
                                        <td>3 Oct</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-secondary" role="progressbar"
                                                    style="width: 20%" aria-valuenow="10" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0"><img
                                                        src="{{ asset('assets/images/dashboard-3/user/31.png') }}" alt="">
                                                </div>
                                                <div class="flex-grow-1 ms-2"><a href="{{ route('admin.user_profile') }}">
                                                        <h6>Joohe</h6>
                                                    </a></div>
                                            </div>
                                        </td>
                                        <td> <span>NFT</span></td>
                                        <td>26 Dec</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 70%" aria-valuenow="10" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0"><img
                                                        src="{{ asset('assets/images/dashboard-3/user/32.png') }}" alt="">
                                                </div>
                                                <div class="flex-grow-1 ms-2"><a href="{{ route('admin.user_profile') }}">
                                                        <h6>Wonkyu</h6>
                                                    </a></div>
                                            </div>
                                        </td>
                                        <td> <span>Hire</span></td>
                                        <td>10 Jun</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 30%"
                                                    aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
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
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="header-top">
                            <h5>Team Members</h5>
                            <div class="dropdown icon-dropdown">
                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false"><i class="icon-more-alt"></i></button>
                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                        href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a
                                        class="dropdown-item" href="#">Yearly</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0 team-members">
                        <div class="table-responsive custom-scrollbar">
                            <table class="table display" id="team-members" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Team Name</th>
                                        <th>Designation</th>
                                        <th>Hours</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0"><img
                                                        src="{{ asset('assets/images/dashboard-3/user/33.png') }}" alt="">
                                                </div>
                                                <div class="flex-grow-1 ms-2"><a href="{{ route('admin.user_profile') }}">
                                                        <h6>David</h6>
                                                    </a></div>
                                            </div>
                                        </td>
                                        <td>Designer</td>
                                        <td>10h</td>
                                        <td>
                                            <div class="member-chart" id="teamChart1"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0"><img
                                                        src="{{ asset('assets/images/dashboard-3/user/34.png') }}" alt="">
                                                </div>
                                                <div class="flex-grow-1 ms-2"><a href="{{ route('admin.user_profile') }}">
                                                        <h6>Nasuha</h6>
                                                    </a></div>
                                            </div>
                                        </td>
                                        <td>Developer</td>
                                        <td>65h</td>
                                        <td>
                                            <div class="member-chart" id="teamChart2"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0"><img
                                                        src="{{ asset('assets/images/dashboard-3/user/35.png') }}" alt="">
                                                </div>
                                                <div class="flex-grow-1 ms-2"><a href="{{ route('admin.user_profile') }}">
                                                        <h6>Induan</h6>
                                                    </a></div>
                                            </div>
                                        </td>
                                        <td>Designer</td>
                                        <td>25h</td>
                                        <td>
                                            <div class="member-chart" id="teamChart3"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0"><img
                                                        src="{{ asset('assets/images/dashboard-3/user/36.png') }}" alt="">
                                                </div>
                                                <div class="flex-grow-1 ms-2"><a href="{{ route('admin.user_profile') }}">
                                                        <h6>Wonkyu</h6>
                                                    </a></div>
                                            </div>
                                        </td>
                                        <td>Tester</td>
                                        <td>38h</td>
                                        <td>
                                            <div class="member-chart" id="teamChart4"></div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
    <script src="{{ asset('assets/js/chart/apex-chart/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom1.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard/dashboard_3.js') }}"></script>
@endsection
