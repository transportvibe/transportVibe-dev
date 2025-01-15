@extends('layouts.simple.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/quill.snow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 ps-0">
                    <h3>Letter Box</h3>
                </div>
                <div class="col-sm-6 ps-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Email</li>
                        <li class="breadcrumb-item active"> Letter Box</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="email-wrap email-main-wrapper">
            <div class="row">
                <div class="col-xxl-3 col-xl-4 box-col-12">
                    <div class="md-sidebar"> <a class="btn btn-primary md-sidebar-toggle" href="javascript:void(0)">email
                            filter</a>
                        <div class="md-sidebar-aside job-left-aside custom-scrollbar">
                            <div class="email-left-aside">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="email-app-sidebar">
                                            <button class="btn btn-primary emailbox" type="button" data-bs-toggle="modal"
                                                data-bs-target="#compose_mail"><i class="fa fa-plus"></i>Compose
                                                Email</button>
                                            <ul class="nav nav-pills main-menu email-category" id="email-pills-tab"
                                                role="tablist">
                                                <li class="nav-item"><a class="nav-link active" id="inbox-pill-tab"
                                                        data-bs-toggle="pill" href="#inbox-pill" role="tab"
                                                        aria-controls="inbox-pill" aria-selected="false">
                                                        <svg class="stroke-icon">
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#inbox') }}">
                                                            </use>
                                                        </svg>
                                                        <div>Inbox<span class="badge">12</span></div>
                                                    </a></li>
                                                <li class="nav-item"><a class="nav-link" id="sent-pill-tab"
                                                        data-bs-toggle="pill" href="#sent-pill" role="tab"
                                                        aria-controls="sent-pill" aria-selected="false">
                                                        <svg class="stroke-icon">
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#sent') }}">
                                                            </use>
                                                        </svg>Sent</a></li>
                                                <li class="nav-item"><a class="nav-link" id="starred-pill-tab"
                                                        data-bs-toggle="pill" href="#starred-pill" role="tab"
                                                        aria-controls="starred-pill" aria-selected="false">
                                                        <svg class="stroke-icon">
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#star') }}">
                                                            </use>
                                                        </svg>Starred</a></li>
                                                <li class="nav-item"><a class="nav-link" id="draft-pill-tab"
                                                        data-bs-toggle="pill" href="#draft-pill" role="tab"
                                                        aria-controls="draft-pill" aria-selected="false">
                                                        <svg class="stroke-icon">
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#draft') }}">
                                                            </use>
                                                        </svg>Draft</a></li>
                                                <li class="nav-item"><a class="nav-link" id="trash-pill-tab"
                                                        data-bs-toggle="pill" href="#trash-pill" role="tab"
                                                        aria-controls="trash-pill" aria-selected="false">
                                                        <svg class="stroke-icon">
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash') }}">
                                                            </use>
                                                        </svg>Trash</a></li>
                                                <li class="nav-item"><a class="nav-link" id="work-pill-tab"
                                                        data-bs-toggle="pill" href="#work-pill" role="tab"
                                                        aria-controls="work-pill" aria-selected="false">
                                                        <svg class="stroke-icon stroke-primary">
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#pintag') }}">
                                                            </use>
                                                        </svg>Work</a></li>
                                                <li class="nav-item"><a class="nav-link" id="private-pill-tab"
                                                        data-bs-toggle="pill" href="#private-pill" role="tab"
                                                        aria-controls="private-pill" aria-selected="false">
                                                        <svg class="stroke-icon stroke-warning">
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#pintag') }}">
                                                            </use>
                                                        </svg>Private</a></li>
                                                <li class="nav-item"><a class="nav-link" id="support-pill-tab"
                                                        data-bs-toggle="pill" href="#support-pill" role="tab"
                                                        aria-controls="support-pill" aria-selected="false">
                                                        <svg class="stroke-icon stroke-success">
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#pintag') }}">
                                                            </use>
                                                        </svg>Support</a></li>
                                                <li class="nav-item"><a class="nav-link btn" data-bs-toggle="modal"
                                                        data-bs-target="#label-pill" href="#!"><i
                                                            class="fa fa-plus"></i>Add Label</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-9 col-xl-8 box-col-12">
                    <div class="email-right-aside">
                        <div class="card email-body email-list">
                            <div class="mail-header-wrapper">
                                <div class="mail-header">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input checkbox-primary" id="emailCheckboxA"
                                            type="checkbox" value="option1">
                                        <label class="form-check-label" for="emailCheckboxA"></label>
                                        <ul class="email-tabs nav" role="tablist">
                                            <li class="nav-item"><a class="nav-link" data-bs-toggle="pill"
                                                    href="#!" role="tab" aria-selected="true">
                                                    <svg class="stroke-icon">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#mail') }}"></use>
                                                    </svg><span>Important </span></a></li>
                                            <li class="nav-item"><a class="nav-link" data-bs-toggle="pill"
                                                    href="#!" role="tab" aria-selected="false">
                                                    <svg class="stroke-icon">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#goal') }}"></use>
                                                    </svg><span>Social</span></a></li>
                                            <li class="nav-item"><a class="nav-link active" data-bs-toggle="pill"
                                                    href="#!" role="tab" aria-selected="false">
                                                    <svg class="stroke-icon">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#tread') }}"></use>
                                                    </svg><span>Promotion</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mail-body">
                                    <div class="mail-search d-flex-align-items-center">
                                        <input class="form-control" type="text" placeholder="Search..."><i
                                            class="fa fa-search"></i>
                                    </div>
                                    <div class="light-square"><i class="fa fa-refresh"></i></div>
                                    <div class="light-square"> <i class="fa fa-trash"></i></div>
                                    <div class="light-square dropdown-toggle" role="main" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="fa fa-ellipsis-v"></i></div>
                                    <ul class="dropdown-menu dropdown-block dropdown-menu-end">
                                        <li> <a class="dropdown-item" href="#!">All</a></li>
                                        <li> <a class="dropdown-item" href="#!">None</a></li>
                                        <li> <a class="dropdown-item" href="#!">Read</a></li>
                                        <li> <a class="dropdown-item" href="#!">Unread</a></li>
                                        <li> <a class="dropdown-item" href="#!">Starred</a></li>
                                        <li> <a class="dropdown-item" href="#!">Unstarred</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-content" id="email-pills-tabContent">
                                <div class="tab-pane fade show active" id="inbox-pill" role="tabpanel"
                                    aria-labelledby="inbox-pill-tab">
                                    <div class="mail-body-wrapper">
                                        <ul id="paginated-list" data-current-page="1" aria-live="polite">
                                            <li class="inbox-data">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0">
                                                        <input class="form-check-input checkbox-primary"
                                                            id="emailCheckboxB" type="checkbox" value="option1">
                                                        <label class="form-check-label" for="emailCheckboxB"></label>
                                                    </div>
                                                    <svg class="important-mail active">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard/user/6.jpg') }}"
                                                            alt="user">
                                                    </div>
                                                    <p>Marvin McKinney</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>New comments on MSR2024 draft
                                                            presentation - <span>New Here's a list of all the topic
                                                                challenges...</span></span>
                                                        <div class="badge badge-light-primary">new</div>
                                                    </div>
                                                    <div class="email-timing"><span>2:30 PM</span></div>
                                                    <div class="email-options"><i
                                                            class="fa fa-envelope-o envelope-1 show"></i><i
                                                            class="fa fa-envelope-open-o envelope-2 hide"></i><i
                                                            class="fa fa-trash-o trash-3"></i><i class="fa fa-print"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0">
                                                        <input class="form-check-input checkbox-primary"
                                                            id="emailCheckboxC" type="checkbox" value="option1">
                                                        <label class="form-check-label" for="emailCheckboxC"></label>
                                                    </div>
                                                    <svg class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="{{ asset('assets/images/user/3.png') }}" alt="user">
                                                    </div>
                                                    <p>Brooklyn Simmons</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Confirm your booking id -<span> A
                                                                collection of textile samples lay spread out on the table -
                                                                Samsa was a travelling salesman..</span></span>
                                                        <div class="badge badge-light-primary">deadline</div>
                                                    </div>
                                                    <div class="email-timing"><span>7:50 AM</span></div>
                                                    <div class="email-options"><i
                                                            class="fa fa-envelope-o envelope-1 show"></i><i
                                                            class="fa fa-envelope-open-o envelope-2 hide"></i><i
                                                            class="fa fa-trash-o trash-3"></i><i class="fa fa-print"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0">
                                                        <input class="form-check-input checkbox-primary"
                                                            id="emailCheckboxD" type="checkbox" value="option1">
                                                        <label class="form-check-label" for="emailCheckboxD"></label>
                                                    </div>
                                                    <svg class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border">
                                                        <div>
                                                            <p class="txt-primary">EH</p>
                                                        </div>
                                                    </div>
                                                    <p>Esther Howard</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Confirm your booking id -<span>craft beer
                                                                labore wes anderson cred nesciunt sapiente ea
                                                                proident...</span></span>
                                                        <div class="badge badge-light-success">work</div>
                                                    </div>
                                                    <div class="email-timing"><span>1:00 PM</span></div>
                                                    <div class="email-options"><i
                                                            class="fa fa-envelope-o envelope-1 show"></i><i
                                                            class="fa fa-envelope-open-o envelope-2 hide"></i><i
                                                            class="fa fa-trash-o trash-3"></i><i class="fa fa-print"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0">
                                                        <input class="form-check-input checkbox-primary"
                                                            id="emailCheckboxE" type="checkbox" value="option1">
                                                        <label class="form-check-label" for="emailCheckboxE"></label>
                                                    </div>
                                                    <svg class="important-mail active">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border">
                                                        <div class="circle-success">
                                                            <p class="txt-success">CW</p>
                                                        </div>
                                                    </div>
                                                    <p>Cameron Williamson</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Very fiction Link -<span>Nihil anim
                                                                keffiyeh helvetica, craft beer labore wes anderson cred
                                                                nesciunt sapiente ea proident.</span></span></div>
                                                    <div class="email-timing"><span>5 Day ago</span></div>
                                                    <div class="email-options"><i
                                                            class="fa fa-envelope-o envelope-1 show"></i><i
                                                            class="fa fa-envelope-open-o envelope-2 hide"></i><i
                                                            class="fa fa-trash-o trash-3"></i><i class="fa fa-print"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0">
                                                        <input class="form-check-input checkbox-primary"
                                                            id="emailCheckboxF" type="checkbox" value="option1">
                                                        <label class="form-check-label" for="emailCheckboxF"></label>
                                                    </div>
                                                    <svg class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="{{ asset('assets/images/user/6.jpg') }}" alt="user">
                                                    </div>
                                                    <p>Ronald Richards</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Confirm your booking id -<span>Confirm
                                                                your booking id - A collection of textile samples lay spread
                                                                out on the table - Samsa was a travelling
                                                                salesman..</span></span>
                                                        <div class="badge badge-light-light">Update.Zip</div>
                                                    </div>
                                                    <div class="email-timing"><span>7 April</span></div>
                                                    <div class="email-options"><i
                                                            class="fa fa-envelope-o envelope-1 show"></i><i
                                                            class="fa fa-envelope-open-o envelope-2 hide"></i><i
                                                            class="fa fa-trash-o trash-3"></i><i class="fa fa-print"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0">
                                                        <input class="form-check-input checkbox-primary"
                                                            id="emailCheckboxG" type="checkbox" value="option1">
                                                        <label class="form-check-label" for="emailCheckboxG"></label>
                                                    </div>
                                                    <svg class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="{{ asset('assets/images/user/10.jpg') }}"
                                                            alt="user"></div>
                                                    <p>Darlene Robertson</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Promotion Mail -<span>Brunch 3 wolf moon
                                                                tempor, sunt aliqua put a bird on it squid single-origin
                                                                coffee nulla assumenda ...</span></span>
                                                        <div class="badge badge-light-light">Import File..</div>
                                                    </div>
                                                    <div class="email-timing"><span>04 April</span></div>
                                                    <div class="email-options"><i
                                                            class="fa fa-envelope-o envelope-1 show"></i><i
                                                            class="fa fa-envelope-open-o envelope-2 hide"></i><i
                                                            class="fa fa-trash-o trash-3"></i><i class="fa fa-print"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0">
                                                        <input class="form-check-input checkbox-primary"
                                                            id="emailCheckboxH" type="checkbox" value="option1">
                                                        <label class="form-check-label" for="emailCheckboxH"></label>
                                                    </div>
                                                    <svg class="important-mail active">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="{{ asset('assets/images/user/12.png ') }}"
                                                            alt="user"></div>
                                                    <p>Jacob Jones</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Welcome to our new office -<span>A
                                                                collection of textile samples lay spread out on the table -
                                                                Samsa was a travelling salesman..</span></span></div>
                                                    <div class="email-timing"><span>01 April</span></div>
                                                    <div class="email-options"><i
                                                            class="fa fa-envelope-o envelope-1 show"></i><i
                                                            class="fa fa-envelope-open-o envelope-2 hide"></i><i
                                                            class="fa fa-trash-o trash-3"></i><i class="fa fa-print"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0">
                                                        <input class="form-check-input checkbox-primary"
                                                            id="emailCheckboxI" type="checkbox" value="option1">
                                                        <label class="form-check-label" for="emailCheckboxI"></label>
                                                    </div>
                                                    <svg class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="{{ asset('assets/images/user/3.png') }}  "
                                                            alt="user"></div>
                                                    <p>Ralph Edwards</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Your Order #224820098 has been
                                                            Confirmed-<span>A collection of textile samples lay spread out
                                                                on the table...</span></span></div>
                                                    <div class="email-timing"><span>1:00 PM</span></div>
                                                    <div class="email-options"><i
                                                            class="fa fa-envelope-o envelope-1 show"></i><i
                                                            class="fa fa-envelope-open-o envelope-2 hide"></i><i
                                                            class="fa fa-trash-o trash-3"></i><i class="fa fa-print"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0">
                                                        <input class="form-check-input checkbox-primary"
                                                            id="emailCheckboxJ" type="checkbox" value="option1">
                                                        <label class="form-check-label" for="emailCheckboxJ"></label>
                                                    </div>
                                                    <svg class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="{{ asset('assets/images/user/6.jpg') }}  "
                                                            alt="user"></div>
                                                    <p>Ronald Richards</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Confirm your booking id -<span>Confirm
                                                                your booking id - A collection of textile samples lay spread
                                                                out on the table - Samsa was a travelling
                                                                salesman..</span></span>
                                                        <div class="badge badge-light-light">Update.Zip</div>
                                                    </div>
                                                    <div class="email-timing"><span>7 April</span></div>
                                                    <div class="email-options"><i
                                                            class="fa fa-envelope-o envelope-1 show"></i><i
                                                            class="fa fa-envelope-open-o envelope-2 hide"></i><i
                                                            class="fa fa-trash-o trash-3"></i><i class="fa fa-print"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0">
                                                        <input class="form-check-input checkbox-primary"
                                                            id="emailCheckboxK" type="checkbox" value="option1">
                                                        <label class="form-check-label" for="emailCheckboxK"></label>
                                                    </div>
                                                    <svg class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border">
                                                        <div class="circle-success">
                                                            <p class="txt-success">WT</p>
                                                        </div>
                                                    </div>
                                                    <p>William Turner</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Very fiction Link -<span>Nihil anim
                                                                keffiyeh helvetica, craft beer labore wes anderson cred
                                                                nesciunt sapiente ea proident.</span></span></div>
                                                    <div class="email-timing"><span>5 Day ago</span></div>
                                                    <div class="email-options"><i
                                                            class="fa fa-envelope-o envelope-1 show"></i><i
                                                            class="fa fa-envelope-open-o envelope-2 hide"></i><i
                                                            class="fa fa-trash-o trash-3"></i><i class="fa fa-print"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0">
                                                        <input class="form-check-input checkbox-primary"
                                                            id="emailCheckboxL" type="checkbox" value="option1">
                                                        <label class="form-check-label" for="emailCheckboxL"></label>
                                                    </div>
                                                    <svg class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="{{ asset('assets/images/user/12.png ') }} "
                                                            alt="user"></div>
                                                    <p>Jacob Jones</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Welcome to our new office -<span>A
                                                                collection of textile samples lay spread out on the table -
                                                                Samsa was a travelling salesman..</span></span></div>
                                                    <div class="email-timing"><span>01 April</span></div>
                                                    <div class="email-options"><i
                                                            class="fa fa-envelope-o envelope-1 show"></i><i
                                                            class="fa fa-envelope-open-o envelope-2 hide"></i><i
                                                            class="fa fa-trash-o trash-3"></i><i class="fa fa-print"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0">
                                                        <input class="form-check-input checkbox-primary"
                                                            id="emailCheckboxM" type="checkbox" value="option1">
                                                        <label class="form-check-label" for="emailCheckboxM"></label>
                                                    </div>
                                                    <svg class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="{{ asset('assets/images/user/3.png') }}  "
                                                            alt="user"></div>
                                                    <p>Ralph Edwards</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Your Order #224820098 has been
                                                            Confirmed-<span>A collection of textile samples lay spread out
                                                                on the table...</span></span></div>
                                                    <div class="email-timing"><span>1:00 PM</span></div>
                                                    <div class="email-options"><i
                                                            class="fa fa-envelope-o envelope-1 show"></i><i
                                                            class="fa fa-envelope-open-o envelope-2 hide"></i><i
                                                            class="fa fa-trash-o trash-3"></i><i class="fa fa-print"></i>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mail-pagination">
                                        <button class="pagination-button" id="prev-button" aria-label="Previous page"
                                            title="Previous page">&lt;</button>
                                        <div class="pagination-index" id="pagination-numbers"></div>
                                        <button class="pagination-button" id="next-button" aria-label="Next page"
                                            title="Next page">&gt;</button>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="sent-pill" role="tabpanel"
                                    aria-labelledby="sent-pill-tab">
                                    <div class="mail-body-wrapper">
                                        <ul>
                                            <li class="inbox-data">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0">
                                                        <input class="form-check-input checkbox-primary"
                                                            id="emailCheckboxN" type="checkbox" value="option1">
                                                        <label class="form-check-label" for="emailCheckboxN"></label>
                                                    </div>
                                                    <svg class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="{{ asset('assets/images/user/14.png') }}"
                                                            alt="user"></div>
                                                    <p>Brooklyn Simmons</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Confirm your booking id -<span> A
                                                                collection of textile samples lay spread out on the table -
                                                                Samsa was a travelling salesman..</span></span>
                                                        <div class="badge badge-light-primary">new</div>
                                                    </div>
                                                    <div class="email-timing"><span>7:50 AM</span></div>
                                                    <div class="email-options"><i
                                                            class="fa fa-envelope-o envelope-1 show"></i><i
                                                            class="fa fa-envelope-open-o envelope-2 hide"></i><i
                                                            class="fa fa-trash-o trash-3"></i><i class="fa fa-print"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0">
                                                        <input class="form-check-input checkbox-primary"
                                                            id="emailCheckboxO" type="checkbox" value="option1">
                                                        <label class="form-check-label" for="emailCheckboxO"></label>
                                                    </div>
                                                    <svg class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard/user/6.jpg') }}"
                                                            alt="user">
                                                    </div>
                                                    <p>Marvin McKinney</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>New comments on MSR2024 draft
                                                            presentation - <span>New Here's a list of all the topic
                                                                challenges...</span></span></div>
                                                    <div class="email-timing"><span>2:30 PM</span></div>
                                                    <div class="email-options"><i
                                                            class="fa fa-envelope-o envelope-1 show"></i><i
                                                            class="fa fa-envelope-open-o envelope-2 hide"></i><i
                                                            class="fa fa-trash-o trash-3"></i><i class="fa fa-print"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0">
                                                        <input class="form-check-input checkbox-primary"
                                                            id="emailCheckboxP" type="checkbox" value="option1">
                                                        <label class="form-check-label" for="emailCheckboxP"></label>
                                                    </div>
                                                    <svg class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border">
                                                        <div>
                                                            <p class="txt-primary">EH</p>
                                                        </div>
                                                    </div>
                                                    <p>Esther Howard</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Confirm your booking id -<span>craft beer
                                                                labore wes anderson cred nesciunt sapiente ea
                                                                proident...</span></span>
                                                        <div class="badge badge-light-primary">new</div>
                                                        <div class="badge badge-light-success">Task</div>
                                                    </div>
                                                    <div class="email-timing"><span>1:00 PM</span></div>
                                                    <div class="email-options"><i
                                                            class="fa fa-envelope-o envelope-1 show"></i><i
                                                            class="fa fa-envelope-open-o envelope-2 hide"></i><i
                                                            class="fa fa-trash-o trash-3"></i><i class="fa fa-print"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0">
                                                        <input class="form-check-input checkbox-primary"
                                                            id="emailCheckboxQ" type="checkbox" value="option1">
                                                        <label class="form-check-label" for="emailCheckboxQ"></label>
                                                    </div>
                                                    <svg class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border">
                                                        <div class="circle-success">
                                                            <p class="txt-success">JW</p>
                                                        </div>
                                                    </div>
                                                    <p>Jack Williamson</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Very fiction Link -<span>Nihil anim
                                                                keffiyeh helvetica, craft beer labore wes anderson cred
                                                                nesciunt sapiente ea proident.</span></span></div>
                                                    <div class="email-timing"><span>5 Day ago</span></div>
                                                    <div class="email-options"><i
                                                            class="fa fa-envelope-o envelope-1 show"></i><i
                                                            class="fa fa-envelope-open-o envelope-2 hide"></i><i
                                                            class="fa fa-trash-o trash-3"></i><i class="fa fa-print"></i>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="starred-pill" role="tabpanel"
                                    aria-labelledby="starred-pill-tab">
                                    <div class="mail-body-wrapper">
                                        <ul>
                                            <li class="inbox-data">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0">
                                                        <input class="form-check-input checkbox-primary"
                                                            id="emailCheckboxR" type="checkbox" value="option1">
                                                        <label class="form-check-label" for="emailCheckboxR"></label>
                                                    </div>
                                                    <svg class="important-mail active">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard/user/6.jpg') }}"
                                                            alt="user">
                                                    </div>
                                                    <p>Marvin McKinney</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>New comments on MSR2024 draft
                                                            presentation - <span>New Here's a list of all the topic
                                                                challenges...</span></span>
                                                        <div class="badge badge-light-primary">new</div>
                                                    </div>
                                                    <div class="email-timing"><span>2:30 PM</span></div>
                                                    <div class="email-options"><i
                                                            class="fa fa-envelope-o envelope-1 show"></i><i
                                                            class="fa fa-envelope-open-o envelope-2 hide"></i><i
                                                            class="fa fa-trash-o trash-3"></i><i class="fa fa-print"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0">
                                                        <input class="form-check-input checkbox-primary"
                                                            id="emailCheckboxS" type="checkbox" value="option1">
                                                        <label class="form-check-label" for="emailCheckboxS"></label>
                                                    </div>
                                                    <svg class="important-mail active">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="{{ asset('assets/images/user/3.png') }}  "
                                                            alt="user"></div>
                                                    <p>Brooklyn Simmons</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Confirm your booking id -<span> A
                                                                collection of textile samples lay spread out on the table -
                                                                Samsa was a travelling salesman..</span></span>
                                                        <div class="badge badge-light-primary">new</div>
                                                    </div>
                                                    <div class="email-timing"><span>7:50 AM</span></div>
                                                    <div class="email-options"><i
                                                            class="fa fa-envelope-o envelope-1 show"></i><i
                                                            class="fa fa-envelope-open-o envelope-2 hide"></i><i
                                                            class="fa fa-trash-o trash-3"></i><i class="fa fa-print"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0">
                                                        <input class="form-check-input checkbox-primary"
                                                            id="emailCheckboxT" type="checkbox" value="option1">
                                                        <label class="form-check-label" for="emailCheckboxT"></label>
                                                    </div>
                                                    <svg class="important-mail active">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border">
                                                        <div class="circle-success">
                                                            <p class="txt-success">CW</p>
                                                        </div>
                                                    </div>
                                                    <p>Cameron Williamson</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Very fiction Link -<span>Nihil anim
                                                                keffiyeh helvetica, craft beer labore wes anderson cred
                                                                nesciunt sapiente ea proident.</span></span></div>
                                                    <div class="email-timing"><span>5 Day ago</span></div>
                                                    <div class="email-options"><i
                                                            class="fa fa-envelope-o envelope-1 show"></i><i
                                                            class="fa fa-envelope-open-o envelope-2 hide"></i><i
                                                            class="fa fa-trash-o trash-3"></i><i class="fa fa-print"></i>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="draft-pill" role="tabpanel"
                                    aria-labelledby="draft-pill-tab">
                                    <div class="mail-body-wrapper">
                                        <ul>
                                            <li class="inbox-data">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0">
                                                        <input class="form-check-input checkbox-primary"
                                                            id="emailCheckboxU" type="checkbox" value="option1">
                                                        <label class="form-check-label" for="emailCheckboxU"></label>
                                                    </div>
                                                    <svg class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="{{ asset('assets/images/user/3.png') }}  "
                                                            alt="user"></div>
                                                    <p>Ralph Edwards</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Your Order #224820098 has been
                                                            Confirmed-<span>A collection of textile samples lay spread out
                                                                on the table...</span></span></div>
                                                    <div class="email-timing"><span>1:00 PM</span></div>
                                                    <div class="email-options"><i
                                                            class="fa fa-envelope-o envelope-1 show"></i><i
                                                            class="fa fa-envelope-open-o envelope-2 hide"></i><i
                                                            class="fa fa-trash-o trash-3"></i><i class="fa fa-print"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0">
                                                        <input class="form-check-input checkbox-primary"
                                                            id="emailCheckboxV" type="checkbox" value="option1">
                                                        <label class="form-check-label" for="emailCheckboxV"></label>
                                                    </div>
                                                    <svg class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="{{ asset('assets/images/user/6.jpg') }}  "
                                                            alt="user"></div>
                                                    <p>Ronald Richards</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Confirm your booking id -<span>Confirm
                                                                your booking id - A collection of textile samples lay spread
                                                                out on the table - Samsa was a travelling
                                                                salesman..</span></span>
                                                        <div class="badge badge-light-light">Update.Zip</div>
                                                    </div>
                                                    <div class="email-timing"><span>7 April</span></div>
                                                    <div class="email-options"><i
                                                            class="fa fa-envelope-o envelope-1 show"></i><i
                                                            class="fa fa-envelope-open-o envelope-2 hide"></i><i
                                                            class="fa fa-trash-o trash-3"></i><i class="fa fa-print"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0">
                                                        <input class="form-check-input checkbox-primary"
                                                            id="emailCheckboxW" type="checkbox" value="option1">
                                                        <label class="form-check-label" for="emailCheckboxW"></label>
                                                    </div>
                                                    <svg class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="{{ asset('assets/images/user/12.png ') }} "
                                                            alt="user"></div>
                                                    <p>Jacob Jones</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Welcome to our new office -<span>A
                                                                collection of textile samples lay spread out on the table -
                                                                Samsa was a travelling salesman..</span></span></div>
                                                    <div class="email-timing"><span>01 April</span></div>
                                                    <div class="email-options"><i
                                                            class="fa fa-envelope-o envelope-1 show"></i><i
                                                            class="fa fa-envelope-open-o envelope-2 hide"></i><i
                                                            class="fa fa-trash-o trash-3"></i><i class="fa fa-print"></i>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="trash-pill" role="tabpanel"
                                    aria-labelledby="trash-pill-tab">
                                    <div class="mail-body-wrapper">
                                        <ul>
                                            <li class="inbox-data">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0">
                                                        <input class="form-check-input checkbox-primary"
                                                            id="emailCheckboxX" type="checkbox" value="option1">
                                                        <label class="form-check-label" for="emailCheckboxX"></label>
                                                    </div>
                                                    <svg class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border">
                                                        <div>
                                                            <p class="txt-primary">EH</p>
                                                        </div>
                                                    </div>
                                                    <p>Esther Howard</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Confirm your booking id -<span>craft beer
                                                                labore wes anderson cred nesciunt sapiente ea
                                                                proident...</span></span>
                                                        <div class="badge badge-light-secondary">offer</div>
                                                    </div>
                                                    <div class="email-timing"><span>1:00 PM</span></div>
                                                    <div class="email-options"><i
                                                            class="fa fa-envelope-o envelope-1 show"></i><i
                                                            class="fa fa-envelope-open-o envelope-2 hide"></i><i
                                                            class="fa fa-trash-o trash-3"></i><i class="fa fa-print"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0">
                                                        <input class="form-check-input checkbox-primary"
                                                            id="emailCheckboxY" type="checkbox" value="option1">
                                                        <label class="form-check-label" for="emailCheckboxY"></label>
                                                    </div>
                                                    <svg class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border">
                                                        <div class="circle-success">
                                                            <p class="txt-success">CH</p>
                                                        </div>
                                                    </div>
                                                    <p>Cameron Hill</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Very fiction Link -<span>Nihil anim
                                                                keffiyeh helvetica, craft beer labore wes anderson cred
                                                                nesciunt sapiente ea proident.</span></span></div>
                                                    <div class="email-timing"><span>5 Day ago</span></div>
                                                    <div class="email-options"><i
                                                            class="fa fa-envelope-o envelope-1 show"></i><i
                                                            class="fa fa-envelope-open-o envelope-2 hide"></i><i
                                                            class="fa fa-trash-o trash-3"></i><i class="fa fa-print"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0">
                                                        <input class="form-check-input checkbox-primary"
                                                            id="emailCheckboxZ" type="checkbox" value="option1">
                                                        <label class="form-check-label" for="emailCheckboxZ"></label>
                                                    </div>
                                                    <svg class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border">
                                                        <div>
                                                            <p class="txt-primary">EH</p>
                                                        </div>
                                                    </div>
                                                    <p>Esther Howard</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Confirm your booking id -<span>craft beer
                                                                labore wes anderson cred nesciunt sapiente ea
                                                                proident...</span></span>
                                                        <div class="badge badge-light-primary">new</div>
                                                        <div class="badge badge-light-success">Task</div>
                                                    </div>
                                                    <div class="email-timing"><span>1:00 PM</span></div>
                                                    <div class="email-options"><i
                                                            class="fa fa-envelope-o envelope-1 show"></i><i
                                                            class="fa fa-envelope-open-o envelope-2 hide"></i><i
                                                            class="fa fa-trash-o trash-3"></i><i class="fa fa-print"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0">
                                                        <input class="form-check-input checkbox-primary"
                                                            id="emailCheckbox0" type="checkbox" value="option1">
                                                        <label class="form-check-label" for="emailCheckbox0"></label>
                                                    </div>
                                                    <svg class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border">
                                                        <div class="circle-success">
                                                            <p class="txt-success">CW</p>
                                                        </div>
                                                    </div>
                                                    <p>Cameron Williamson</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Very fiction Link -<span>Nihil anim
                                                                keffiyeh helvetica, craft beer labore wes anderson cred
                                                                nesciunt sapiente ea proident.</span></span></div>
                                                    <div class="email-timing"><span>5 Day ago</span></div>
                                                    <div class="email-options"><i
                                                            class="fa fa-envelope-o envelope-1 show"></i><i
                                                            class="fa fa-envelope-open-o envelope-2 hide"></i><i
                                                            class="fa fa-trash-o trash-3"></i><i class="fa fa-print"></i>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="work-pill" role="tabpanel"
                                    aria-labelledby="work-pill-tab">
                                    <div class="mail-body-wrapper">
                                        <ul>
                                            <li class="inbox-data">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0">
                                                        <input class="form-check-input checkbox-primary"
                                                            id="emailCheckbox77" type="checkbox" value="option1">
                                                        <label class="form-check-label" for="emailCheckbox77"></label>
                                                    </div>
                                                    <svg class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border">
                                                        <div>
                                                            <p class="txt-primary">EH</p>
                                                        </div>
                                                    </div>
                                                    <p>Esther Howard</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Confirm your booking id -<span>craft beer
                                                                labore wes anderson cred nesciunt sapiente ea
                                                                proident...</span></span>
                                                        <div class="badge badge-light-primary">new</div>
                                                        <div class="badge badge-light-success">Task</div>
                                                    </div>
                                                    <div class="email-timing"><span>1:00 PM</span></div>
                                                    <div class="email-options"><i
                                                            class="fa fa-envelope-o envelope-1 show"></i><i
                                                            class="fa fa-envelope-open-o envelope-2 hide"></i><i
                                                            class="fa fa-trash-o trash-3"></i><i class="fa fa-print"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0">
                                                        <input class="form-check-input checkbox-primary"
                                                            id="emailCheckbox22" type="checkbox" value="option1">
                                                        <label class="form-check-label" for="emailCheckbox22"></label>
                                                    </div>
                                                    <svg class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="{{ asset('assets/images/user/3.png') }}  "
                                                            alt="user"></div>
                                                    <p>Brooklyn Simmons</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Confirm your booking id -<span> A
                                                                collection of textile samples lay spread out on the table -
                                                                Samsa was a travelling salesman..</span></span>
                                                        <div class="badge badge-light-primary">deadline</div>
                                                    </div>
                                                    <div class="email-timing"><span>7:50 AM</span></div>
                                                    <div class="email-options"><i
                                                            class="fa fa-envelope-o envelope-1 show"></i><i
                                                            class="fa fa-envelope-open-o envelope-2 hide"></i><i
                                                            class="fa fa-trash-o trash-3"></i><i class="fa fa-print"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0">
                                                        <input class="form-check-input checkbox-primary"
                                                            id="emailCheckbox33" type="checkbox" value="option1">
                                                        <label class="form-check-label" for="emailCheckbox33"></label>
                                                    </div>
                                                    <svg class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border">
                                                        <div>
                                                            <p class="txt-primary">EV</p>
                                                        </div>
                                                    </div>
                                                    <p>Esther Voward</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Confirm your booking id -<span>craft beer
                                                                labore wes anderson cred nesciunt sapiente ea
                                                                proident...</span></span>
                                                        <div class="badge badge-light-primary">new</div>
                                                        <div class="badge badge-light-success">work</div>
                                                    </div>
                                                    <div class="email-timing"><span>1:00 PM</span></div>
                                                    <div class="email-options"><i
                                                            class="fa fa-envelope-o envelope-1 show"></i><i
                                                            class="fa fa-envelope-open-o envelope-2 hide"></i><i
                                                            class="fa fa-trash-o trash-3"></i><i class="fa fa-print"></i>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="private-pill" role="tabpanel"
                                    aria-labelledby="private-pill-tab">
                                    <div class="mail-body-wrapper">
                                        <ul>
                                            <li class="inbox-data">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0">
                                                        <input class="form-check-input checkbox-primary"
                                                            id="emailCheckbox44" type="checkbox" value="option1">
                                                        <label class="form-check-label" for="emailCheckbox44"></label>
                                                    </div>
                                                    <svg class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border">
                                                        <div>
                                                            <p class="txt-primary">AD</p>
                                                        </div>
                                                    </div>
                                                    <p>Asther Dolly</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Confirm your booking id -<span>craft beer
                                                                labore wes anderson cred nesciunt sapiente ea
                                                                proident...</span></span>
                                                        <div class="badge badge-light-primary">new</div>
                                                        <div class="badge badge-light-success">Task</div>
                                                    </div>
                                                    <div class="email-timing"><span>1:00 PM</span></div>
                                                    <div class="email-options"><i
                                                            class="fa fa-envelope-o envelope-1 show"></i><i
                                                            class="fa fa-envelope-open-o envelope-2 hide"></i><i
                                                            class="fa fa-trash-o trash-3"></i><i class="fa fa-print"></i>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="support-pill" role="tabpanel"
                                    aria-labelledby="support-pill-tab">
                                    <div class="mail-body-wrapper">
                                        <ul>
                                            <li class="inbox-data">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0">
                                                        <input class="form-check-input checkbox-primary"
                                                            id="emailCheckbox55" type="checkbox" value="option1">
                                                        <label class="form-check-label" for="emailCheckbox55"></label>
                                                    </div>
                                                    <svg class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border">
                                                        <div>
                                                            <p class="txt-primary">EH</p>
                                                        </div>
                                                    </div>
                                                    <p>Esther Howard</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Confirm your booking id -<span>craft beer
                                                                labore wes anderson cred nesciunt sapiente ea
                                                                proident...</span></span>
                                                        <div class="badge badge-light-primary">new</div>
                                                        <div class="badge badge-light-success">Task</div>
                                                    </div>
                                                    <div class="email-timing"><span>1:00 PM</span></div>
                                                    <div class="email-options"><i
                                                            class="fa fa-envelope-o envelope-1 show"></i><i
                                                            class="fa fa-envelope-open-o envelope-2 hide"></i><i
                                                            class="fa fa-trash-o trash-3"></i><i class="fa fa-print"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0">
                                                        <input class="form-check-input checkbox-primary"
                                                            id="emailCheckbox66" type="checkbox" value="option1">
                                                        <label class="form-check-label" for="emailCheckbox66"></label>
                                                    </div>
                                                    <svg class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border">
                                                        <div class="circle-success">
                                                            <p class="txt-success">CW</p>
                                                        </div>
                                                    </div>
                                                    <p>Cameron Williamson</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Very fiction Link -<span>Nihil anim
                                                                keffiyeh helvetica, craft beer labore wes anderson cred
                                                                nesciunt sapiente ea proident.</span></span></div>
                                                    <div class="email-timing"><span>5 Day ago</span></div>
                                                    <div class="email-options"><i
                                                            class="fa fa-envelope-o envelope-1 show"></i><i
                                                            class="fa fa-envelope-open-o envelope-2 hide"></i><i
                                                            class="fa fa-trash-o trash-3"></i><i class="fa fa-print"></i>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card email-body email-read">
                            <div class="mail-header-wrapper header-wrapper1">
                                <div class="mail-header1">
                                    <div class="light-square">
                                        <svg class="btn-email">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#back-arrow') }}"></use>
                                        </svg>
                                    </div><span>Interview Mail</span>
                                </div>
                                <div class="mail-body1">
                                    <div class="light-square" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Achieve">
                                        <svg>
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#sms') }}"></use>
                                        </svg>
                                    </div>
                                    <div class="light-square" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Bookmark">
                                        <svg class="bookmark-box">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#bookmark') }}"></use>
                                        </svg>
                                    </div>
                                    <div class="light-square" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Spam">
                                        <svg>
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#spam') }}"></use>
                                        </svg>
                                    </div>
                                    <div class="light-square" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Trash">
                                        <svg>
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#mail-trash') }}"></use>
                                        </svg>
                                    </div>
                                    <div class="light-square" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Settings">
                                        <svg>
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#setting') }}"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="mail-body-wrapper">
                                <div class="user-mail-wrapper">
                                    <div class="user-title">
                                        <div>
                                            <div class="rounded-border"> <img class="img-fluid"
                                                    src="{{ asset('assets/images/user/12.png') }}" alt="user">
                                            </div>
                                            <div class="dropdown-subtitle">
                                                <p>Jacob Jones</p>
                                                <div class="onhover-dropdown">
                                                    <button class="btn p-0 dropdown-button">To me <i
                                                            data-feather="chevron-down"> </i></button>
                                                    <div class="inbox-security onhover-show-div">
                                                        <p>From: <span>jones &lt;jacobjones3@gmail.com&gt;</span></p>
                                                        <p>to: <span>donut.horry@gmail.com</span></p>
                                                        <p>reply-to:<span>&lt;jacobjones3@gmail.com&gt;</span></p>
                                                        <p>date: <span>Jul 13, 2024, 7:10 AM</span></p>
                                                        <p>subject: <span>Important Account Security Update</span></p>
                                                        <p>security: <span>standard encryption (TLS)</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="inbox-options"> <span>Friday 07 Apr (4 hours ago)</span>
                                            <div class="light-square">
                                                <svg class="important-mail">
                                                    <use href="{{ asset('assets/svg/icon-sprite.svg#mail-star') }}">
                                                    </use>
                                                </svg>
                                            </div>
                                            <div class="light-square" onclick="myFunction()">
                                                <svg>
                                                    <use href="{{ asset('assets/svg/icon-sprite.svg#print') }}"></use>
                                                </svg>
                                            </div>
                                            <div class="light-square btn-group">
                                                <div class="dropdown-toggle" role="main" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <svg>
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#menubar') }}">
                                                        </use>
                                                    </svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-block"><a class="dropdown-item"
                                                        href="#!"><i class="fa fa-mail-reply"></i>Reply</a><a
                                                        class="dropdown-item" href="#!"> <i
                                                            class="fa fa-mail-forward"></i>Forward</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="user-body">
                                        <p>Dear Customer,</p>
                                        <p>We regret to notify you that an unauthorized attempt was made to access your
                                            account. Our system discovered suspicious activity, and we acted right away to
                                            safeguard your personal data.</p>
                                        <p>Please change your login information by clicking the following link in order to
                                            safeguard your account:</p>
                                        <p>Please be aware that your account may be temporarily suspended if no action is
                                            taken within 24 hours. We urge you to take immediate action to prevent any
                                            inconvenience.</p>
                                        <p>We sincerely apologize for any inconvenience this may cause and thank you for
                                            your immediate attention to this matter.</p>
                                        <div class="mail-subcontent">
                                            <p>Yours faithfully,</p>
                                            <p>Account Security Team</p>
                                        </div>
                                    </div>
                                    <div class="user-footer">
                                        <div>
                                            <svg>
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#attchment') }}"></use>
                                            </svg><span class="f-light">Attachments</span>
                                        </div>
                                        <div class="d-inline-block">
                                            <div class="attchment-file common-flex">
                                                <div class="common-flex align-items-center"><img
                                                        src="{{ asset('assets/images/email-template/pdfs.png') }}"
                                                        alt="pdf">
                                                    <div class="d-block">
                                                        <p>Offer_Letter.pdf</p>
                                                        <p>200KB</p>
                                                    </div>
                                                </div><a href="{{ asset('assets/pug/pages/template/text_file.txt') }}"
                                                    download> <i class="fa fa-download f-light"></i></a>
                                            </div>
                                        </div>
                                        <div class="toolbar-box">
                                            <div id="toolbar">
                                                <button class="ql-bold">Bold </button>
                                                <button class="ql-italic">Italic </button>
                                                <button class="ql-underline">underline</button>
                                                <button class="ql-strike">Strike </button>
                                                <button class="ql-list" value="ordered">List </button>
                                                <button class="ql-list" value="bullet"> </button>
                                                <button class="ql-indent" value="-1"> </button>
                                                <button class="ql-indent" value="+1"></button>
                                                <button class="ql-link"></button>
                                                <button class="ql-image"></button>
                                            </div>
                                            <div id="editor"> </div>
                                        </div>
                                    </div>
                                    <div class="send-btn">
                                        <button class="btn btn-primary">Send<i class="fa fa-paper-plane"> </i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="compose_mail" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title fs-5">Compose Message</h3>
                                    <button class="btn-close" type="button" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body compose-modal">
                                    <form>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="composeFrom">From :</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" id="composeFrom" type="email">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="composeTo">To :</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" id="composeTo" type="email">
                                                <div class="add-bcc">
                                                    <div class="d-flex gap-2"><a class="btn"
                                                            data-bs-toggle="collapse" href="#collapseCc"
                                                            role="button" aria-expanded="false"
                                                            aria-controls="collapseCc">Cc </a><a class="btn"
                                                            data-bs-toggle="collapse" href="#collapseBcc"
                                                            role="button" aria-expanded="false"
                                                            aria-controls="collapseBcc">Bcc</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="collapse row mb-3" id="collapseCc">
                                            <label class="col-sm-2 col-form-label" for="composeCc">Cc:</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" id="composeCc" type="email">
                                            </div>
                                        </div>
                                        <div class="collapse row mb-3" id="collapseBcc">
                                            <label class="col-sm-2 col-form-label" for="composeBcc">Bcc:</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" id="composeBcc" type="email">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="composeSubject">Subject
                                                :</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" id="composeSubject" type="email">
                                            </div>
                                        </div>
                                        <div class="toolbar-box">
                                            <div id="toolbar1">
                                                <button class="ql-bold">Bold </button>
                                                <button class="ql-italic">Italic </button>
                                                <button class="ql-underline">underline</button>
                                                <button class="ql-strike">Strike </button>
                                                <button class="ql-list" value="ordered">List </button>
                                                <button class="ql-list" value="bullet"> </button>
                                                <button class="ql-indent" value="-1"> </button>
                                                <button class="ql-indent" value="+1"></button>
                                                <button class="ql-link"></button>
                                                <button class="ql-image"></button>
                                            </div>
                                            <div id="editor1"></div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-light" type="button">Save as draft</button>
                                    <button class="btn btn-primary" type="button"
                                        data-bs-dismiss="modal">Send</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="label-pill" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title fs-5">Add Label</h3>
                                    <button class="btn-close" type="button" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="row g-sm-3 g-2 custom-input">
                                            <label class="col-sm-2 col-form-label" for="Label_Modal">Label Name
                                                :</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" id="Label_Modal" type="email">
                                            </div>
                                            <label class="col-sm-2 col-form-label" for="Email_Modal">Email :</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" id="Email_Modal" type="email">
                                            </div>
                                            <label class="form-label col-sm-2" for="exampleColorInput">Label Color
                                                :</label>
                                            <div class="col-sm-2 col-2">
                                                <input class="form-control form-control-color" id="exampleColorInput"
                                                    type="color" value="#5C61F2" title="Choose your color">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-light" type="button"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button class="btn btn-primary" type="button">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/letter-box/custom-mail-pagination.js') }}"></script>
    <script src="{{ asset('assets/js/letter-box/custom-usermail.js') }}"></script>
    <script src="{{ asset('assets/js/editors/quill.js') }}"></script>
    <script src="{{ asset('assets/js/editors/custom-quill.js') }}"></script>
    <script src="{{ asset('assets/js/print.js') }}"></script>
    <script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
@endsection
