@extends('layouts.simple.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select2.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 ps-0">
                    <h3>Bookmarks</h3>
                </div>
                <div class="col-sm-6 pe-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Apps</li>
                        <li class="breadcrumb-item active">Bookmarks</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="email-wrap bookmark-wrap">
            <div class="row">
                <div class="col-xl-3 box-col-3">
                    <div class="md-sidebar"><a class="btn btn-primary md-sidebar-toggle" href="javascript:void(0)">bookmark
                            filter</a>
                        <div class="md-sidebar-aside job-left-aside custom-scrollbar">
                            <div class="email-left-aside">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="email-app-sidebar left-bookmark">
                                            <div class="d-flex align-items-center">
                                                <div class="media-size-email"><img class="me-3 rounded-circle"
                                                        src="{{ asset('assets/images/user/user.png') }}" alt="">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h3>MARK JENCO</h3>
                                                    <p>Markjecno@gmail.com</p>
                                                </div>
                                            </div>
                                            <ul class="nav main-menu" role="tablist">
                                                <li class="nav-item">
                                                    <button class="badge-light-primary btn-block btn-mail txt-primary w-100"
                                                        type="button" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="me-2"
                                                            data-feather="bookmark"></i> New Bookmark</button>
                                                </li>
                                                <li class="nav-item"><span class="main-title"> Views</span></li>
                                                <li><a class="active" id="pills-created-tab" data-bs-toggle="pill"
                                                        href="#pills-created" role="tab" aria-controls="pills-created"
                                                        aria-selected="true"><span class="title"> Created by me</span></a>
                                                </li>
                                                <li><a class="show" id="pills-favourites-tab" data-bs-toggle="pill"
                                                        href="#pills-favourites" role="tab"
                                                        aria-controls="pills-favourites" aria-selected="false"><span
                                                            class="title"> Favourites</span></a></li>
                                                <li><a class="show" id="pills-shared-tab" data-bs-toggle="pill"
                                                        href="#pills-shared" role="tab" aria-controls="pills-shared"
                                                        aria-selected="false"><span class="title"> Shared with
                                                            me</span></a></li>
                                                <li><a class="show" id="pills-bookmark-tab" data-bs-toggle="pill"
                                                        href="#pills-bookmark" role="tab" aria-controls="pills-bookmark"
                                                        aria-selected="false"><span class="title"> My bookmark</span></a>
                                                </li>
                                                <li>
                                                    <hr>
                                                </li>
                                                <li><span class="main-title"> Tags<span class="pull-right"><a href="#"
                                                                data-bs-toggle="modal" data-bs-target="#createtag"><i
                                                                    data-feather="plus-circle"></i></a></span></span></li>
                                                <li><a class="show" id="pills-notification-tab" data-bs-toggle="pill"
                                                        href="#pills-notification" role="tab"
                                                        aria-controls="pills-notification" aria-selected="false"><span
                                                            class="title"> Notification</span></a></li>
                                                <li><a class="show" id="pills-newsletter-tab" data-bs-toggle="pill"
                                                        href="#pills-newsletter" role="tab"
                                                        aria-controls="pills-newsletter" aria-selected="false"><span
                                                            class="title"> Newsletter</span></a></li>
                                                <li><a class="show" id="pills-business-tab" data-bs-toggle="pill"
                                                        href="#pills-business" role="tab"
                                                        aria-controls="pills-business-tab" aria-selected="false"><span
                                                            class="title"> Business</span></a></li>
                                                <li><a class="show" id="pills-holidays-tab" data-bs-toggle="pill"
                                                        href="#pills-holidays" role="tab"
                                                        aria-controls="pills-holidays-tab" aria-selected="false"><span
                                                            class="title"> Holidays</span></a></li>
                                                <li><a class="show" id="pills-important-tab" data-bs-toggle="pill"
                                                        href="#pills-important" role="tab"
                                                        aria-controls="pills-important-tab" aria-selected="false"><span
                                                            class="title"> Important</span></a></li>
                                                <li><a class="show" id="pills-orgenization-tab" data-bs-toggle="pill"
                                                        href="#pills-orgenization" role="tab"
                                                        aria-controls="pills-orgenization-tab" aria-selected="false"><span
                                                            class="title"> Orgenization</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-md-12 box-col-80">
                    <div class="email-right-aside bookmark-tabcontent">
                        <div class="card email-body radius-left">
                            <div class="ps-0">
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="pills-created" role="tabpanel"
                                        aria-labelledby="pills-created-tab">
                                        <div class="card mb-0">
                                            <div class="card-header d-flex pb-0">
                                                <h4 class="mb-0">Created by me</h4>
                                                <ul>
                                                    <li><a class="grid-bookmark-view" href="javascript:void(0)"><i
                                                                data-feather="grid"></i></a></li>
                                                    <li><a class="list-layout-view" href="javascript:void(0)"><i
                                                                data-feather="list"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="card-body pb-0">
                                                <div class="details-bookmark text-center">
                                                    <div class="row" id="bookmarkData">
                                                        <div class="col-xxl-3 col-md-4 col-ed-4">
                                                            <div class="card card-with-border bookmark-card o-hidden">
                                                                <div class="details-website"><img class="img-fluid"
                                                                        src="{{ asset('assets/images/lightgallry/01.jpg') }}"
                                                                        alt="">
                                                                    <div class="favourite-icon favourite_0"
                                                                        onclick="setFavourite(0)"><a href="#"><i
                                                                                class="fa fa-star"></i></a></div>
                                                                    <div class="desciption-data">
                                                                        <div class="title-bookmark">
                                                                            <h3 class="title_0">Admin Template</h3>
                                                                            <p class="weburl_0">http://admin.pixelstrap.com//ltr/landing-page.html
                                                                            </p>
                                                                            <div class="hover-block">
                                                                                <ul>
                                                                                    <li><a href=""
                                                                                            onclick="editBookmark(0)"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#edit-bookmark"><i
                                                                                                data-feather="edit-2"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                data-feather="link"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                data-feather="share-2"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                data-feather="trash-2"></i></a>
                                                                                    </li>
                                                                                    <li class="pull-right text-end"><a
                                                                                            href="#"><i
                                                                                                data-feather="tag"></i></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="content-general">
                                                                                <p class="desc_0"> is beautifully crafted, clean and modern designed admin theme with 6 different demos and light - dark versions.</p><span
                                                                                    class="collection_0">General</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-3 col-md-4 col-ed-4">
                                                            <div class="card card-with-border bookmark-card o-hidden">
                                                                <div class="details-website"><img class="img-fluid"
                                                                        src="{{ asset('assets/images/lightgallry/02.jpg') }}"
                                                                        alt="">
                                                                    <div class="favourite-icon favourite_1"
                                                                        onclick="setFavourite(1)"><a href="#"><i
                                                                                class="fa fa-star"></i></a></div>
                                                                    <div class="desciption-data">
                                                                        <div class="title-bookmark">
                                                                            <h3 class="title_1">Universal Template</h3>
                                                                            <p class="weburl_1">https://angular.pixelstrap.com/universal/landing
                                                                            </p>
                                                                            <div class="hover-block">
                                                                                <ul>
                                                                                    <li><a href=""
                                                                                            onclick="editBookmark(1)"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#edit-bookmark"><i
                                                                                                data-feather="edit-2"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                data-feather="link"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                data-feather="share-2"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                data-feather="trash-2"></i></a>
                                                                                    </li>
                                                                                    <li class="pull-right text-end"><a
                                                                                            href="#"><i
                                                                                                data-feather="tag"></i></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="content-general">
                                                                                <p class="desc_1">Universal is beautifully crafted, clean and modern designed admin theme</p><span
                                                                                    class="collection_1">General</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-3 col-md-4 col-ed-4">
                                                            <div class="card card-with-border bookmark-card o-hidden">
                                                                <div class="details-website"><img class="img-fluid"
                                                                        src="{{ asset('assets/images/lightgallry/03.jpg') }}"
                                                                        alt="">
                                                                    <div class="favourite-icon favourite_2"
                                                                        onclick="setFavourite(2)"><a href="#"><i
                                                                                class="fa fa-star"></i></a></div>
                                                                    <div class="desciption-data">
                                                                        <div class="title-bookmark">
                                                                            <h3 class="title_2">Angular Theme</h3>
                                                                            <p class="weburl_2">https://angular.pixelstrap.com/cuba/landing
                                                                            </p>
                                                                            <div class="hover-block">
                                                                                <ul>
                                                                                    <li><a href=""
                                                                                            onclick="editBookmark(2)"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#edit-bookmark"><i
                                                                                                data-feather="edit-2"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                data-feather="link"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                data-feather="share-2"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                data-feather="trash-2"></i></a>
                                                                                    </li>
                                                                                    <li class="pull-right text-end"><a
                                                                                            href="#"><i
                                                                                                data-feather="tag"></i></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="content-general">
                                                                                <p class="desc_2">Cuba is beautifully crafted, clean and modern designed admin theme</p><span
                                                                                    class="collection_2">Fs</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-3 col-md-4 col-ed-4">
                                                            <div class="card card-with-border bookmark-card o-hidden">
                                                                <div class="details-website"><img class="img-fluid"
                                                                        src="{{ asset('assets/images/lightgallry/04.jpg') }}"
                                                                        alt="">
                                                                    <div class="favourite-icon favourite_3"
                                                                        onclick="setFavourite(3)"><a href="#"><i
                                                                                class="fa fa-star"></i></a></div>
                                                                    <div class="desciption-data">
                                                                        <div class="title-bookmark">
                                                                            <h3 class="title_3">Multikart Admin</h3>
                                                                            <p class="weburl_3">http://themes.pixelstrap.com/multikart/back-end/index.html
                                                                            </p>
                                                                            <div class="hover-block">
                                                                                <ul>
                                                                                    <li><a href=""
                                                                                            onclick="editBookmark(3)"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#edit-bookmark"><i
                                                                                                data-feather="edit-2"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                data-feather="link"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                data-feather="share-2"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                data-feather="trash-2"></i></a>
                                                                                    </li>
                                                                                    <li class="pull-right text-end"><a
                                                                                            href="#"><i
                                                                                                data-feather="tag"></i></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="content-general">
                                                                                <p class="desc_3">Multikart Admin is modern designed admin theme</p><span
                                                                                    class="collection_3">General</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-3 col-md-4 col-ed-4">
                                                            <div class="card card-with-border bookmark-card o-hidden">
                                                                <div class="details-website"><img class="img-fluid"
                                                                        src="{{ asset('assets/images/lightgallry/05.jpg') }}"
                                                                        alt="">
                                                                    <div class="favourite-icon favourite_4"
                                                                        onclick="setFavourite(4)"><a href="#"><i
                                                                                class="fa fa-star"></i></a></div>
                                                                    <div class="desciption-data">
                                                                        <div class="title-bookmark">
                                                                            <h3 class="title_4">Ecommerece theme</h3>
                                                                            <p class="weburl_4">http://themes.pixelstrap.com/multikart</p>
                                                                            <div class="hover-block">
                                                                                <ul>
                                                                                    <li><a href=""
                                                                                            onclick="editBookmark(4)"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#edit-bookmark"><i
                                                                                                data-feather="edit-2"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                data-feather="link"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                data-feather="share-2"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                data-feather="trash-2"></i></a>
                                                                                    </li>
                                                                                    <li class="pull-right text-end"><a
                                                                                            href="#"><i
                                                                                                data-feather="tag"></i></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="content-general">
                                                                                <p class="desc_4">Multikart HTML template is an apparently simple but highly functional tempalate designed for creating a flourisahing online business.
                                                                                </p><span class="collection_4">General
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-3 col-md-4 col-ed-4">
                                                            <div class="card card-with-border bookmark-card o-hidden">
                                                                <div class="details-website"><img class="img-fluid"
                                                                        src="{{ asset('assets/images/lightgallry/06.jpg') }}"
                                                                        alt="">
                                                                    <div class="favourite-icon favourite_5"
                                                                        onclick="setFavourite(5)"><a href="#"><i
                                                                                class="fa fa-star"></i></a></div>
                                                                    <div class="desciption-data">
                                                                        <div class="title-bookmark">
                                                                            <h3 class="title_5">Tovo app landing page</h3>
                                                                            <p class="weburl_5">http://vue.pixelstrap.com/tovo/home-one</p>
                                                                            <div class="hover-block">
                                                                                <ul>
                                                                                    <li><a href=""
                                                                                            onclick="editBookmark(5)"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#edit-bookmark"><i
                                                                                                data-feather="edit-2"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                data-feather="link"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                data-feather="share-2"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                data-feather="trash-2"></i></a>
                                                                                    </li>
                                                                                    <li class="pull-right text-end"><a
                                                                                            href="#"><i
                                                                                                data-feather="tag"></i></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="content-general">
                                                                                <p class="desc_5">Amazing Landing Page With Easy Customization</p><span
                                                                                    class="collection_5">Fs </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fade tab-pane" id="pills-favourites" role="tabpanel"
                                        aria-labelledby="pills-favourites-tab">
                                        <div class="card mb-0">
                                            <div class="card-header d-flex">
                                                <h4 class="mb-0">Favourites</h4>
                                                <ul>
                                                    <li><a class="grid-bookmark-view" href="#"><i
                                                                data-feather="grid"></i></a></li>
                                                    <li><a class="list-layout-view" href="#"><i
                                                                data-feather="list"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="card-body">
                                                <div class="details-bookmark text-center">
                                                    <div class="row" id="favouriteData"></div>
                                                    <div class="no-favourite"><span>No Bookmarks Found.</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fade tab-pane" id="pills-shared" role="tabpanel"
                                        aria-labelledby="pills-shared-tab">
                                        <div class="card mb-0">
                                            <div class="card-header d-flex">
                                                <h4 class="mb-0">Shared with me</h4>
                                                <ul>
                                                    <li><a class="grid-bookmark-view" href="#"><i
                                                                data-feather="grid"></i></a></li>
                                                    <li><a class="list-layout-view" href="#"><i
                                                                data-feather="list"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="card-body">
                                                <div class="details-bookmark text-center"><span>No Bookmarks Found.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fade tab-pane" id="pills-bookmark" role="tabpanel"
                                        aria-labelledby="pills-bookmark-tab">
                                        <div class="card mb-0">
                                            <div class="card-header d-flex">
                                                <h4 class="mb-0">My bookmark</h4>
                                                <ul>
                                                    <li><a class="grid-bookmark-view" href="#"><i
                                                                data-feather="grid"></i></a></li>
                                                    <li><a class="list-layout-view" href="#"><i
                                                                data-feather="list"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="card-body">
                                                <div class="details-bookmark text-center">
                                                    <div class="row" id="bookmarkData1">
                                                        <div class="col-xxl-3 col-md-4 col-ed-4">
                                                            <div class="card card-with-border bookmark-card o-hidden">
                                                                <div class="details-website"><img class="img-fluid"
                                                                        src="{{ asset('assets/images/lightgallry/07.jpg') }}"
                                                                        alt="">
                                                                    <div class="favourite-icon favourite_0"
                                                                        onclick="setFavourite(0)"><a href="#"><i
                                                                                class="fa fa-star"></i></a></div>
                                                                    <div class="desciption-data">
                                                                        <div class="title-bookmark">
                                                                            <h3 class="title_0">Admin Template</h3>
                                                                            <p class="weburl_0">http://admin.pixelstrap.com/Cuba/ltr/landing-page.html
                                                                            </p>
                                                                            <div class="hover-block">
                                                                                <ul>
                                                                                    <li><a href=""
                                                                                            onclick="editBookmark(0)"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#edit-bookmark"><i
                                                                                                data-feather="edit-2"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                data-feather="link"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                data-feather="share-2"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                data-feather="trash-2"></i></a>
                                                                                    </li>
                                                                                    <li class="pull-right text-end"><a
                                                                                            href="#"><i
                                                                                                data-feather="tag"></i></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="content-general">
                                                                                <p class="desc_0">Cuba is beautifully crafted, clean and modern designed admin theme with 6 different demos and light - dark versions.</p><span
                                                                                    class="collection_0">General</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-3 col-md-4 col-ed-4">
                                                            <div class="card card-with-border bookmark-card o-hidden">
                                                                <div class="details-website"><img class="img-fluid"
                                                                        src="{{ asset('assets/images/lightgallry/07.jpg') }}"
                                                                        alt="">
                                                                    <div class="favourite-icon favourite_1"
                                                                        onclick="setFavourite(1)"><a href="#"><i
                                                                                class="fa fa-star"></i></a></div>
                                                                    <div class="desciption-data">
                                                                        <div class="title-bookmark">
                                                                            <h3 class="title_1">Universal Template</h3>
                                                                            <p class="weburl_1">https://angular.pixelstrap.com/universal/landing
                                                                            </p>
                                                                            <div class="hover-block">
                                                                                <ul>
                                                                                    <li><a href=""
                                                                                            onclick="editBookmark(1)"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#edit-bookmark"><i
                                                                                                data-feather="edit-2"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                data-feather="link"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                data-feather="share-2"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                data-feather="trash-2"></i></a>
                                                                                    </li>
                                                                                    <li class="pull-right text-end"><a
                                                                                            href="#"><i
                                                                                                data-feather="tag"></i></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="content-general">
                                                                                <p class="desc_1">Universal is beautifully crafted, clean and modern designed admin theme</p><span
                                                                                    class="collection_1">General</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-3 col-md-4 col-ed-4">
                                                            <div class="card card-with-border bookmark-card o-hidden">
                                                                <div class="details-website"><img class="img-fluid"
                                                                        src="{{ asset('assets/images/lightgallry/07.jpg') }}"
                                                                        alt="">
                                                                    <div class="favourite-icon favourite_2"
                                                                        onclick="setFavourite(2)"><a href="#"><i
                                                                                class="fa fa-star"></i></a></div>
                                                                    <div class="desciption-data">
                                                                        <div class="title-bookmark">
                                                                            <h3 class="title_2">Angular Theme</h3>
                                                                            <p class="weburl_2">https://angular.pixelstrap.com/cuba/landing
                                                                            </p>
                                                                            <div class="hover-block">
                                                                                <ul>
                                                                                    <li><a href=""
                                                                                            onclick="editBookmark(2)"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#edit-bookmark"><i
                                                                                                data-feather="edit-2"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                data-feather="link"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                data-feather="share-2"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                data-feather="trash-2"></i></a>
                                                                                    </li>
                                                                                    <li class="pull-right text-end"><a
                                                                                            href="#"><i
                                                                                                data-feather="tag"></i></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="content-general">
                                                                                <p class="desc_2">Cuba is beautifully crafted, clean and modern designed admin theme</p><span
                                                                                    class="collection_2">Fs</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-3 col-md-4 col-ed-4">
                                                            <div class="card card-with-border bookmark-card o-hidden">
                                                                <div class="details-website"><img class="img-fluid"
                                                                        src="{{ asset('assets/images/lightgallry/07.jpg') }}"
                                                                        alt="">
                                                                    <div class="favourite-icon favourite_3"
                                                                        onclick="setFavourite(3)"><a href="#"><i
                                                                                class="fa fa-star"></i></a></div>
                                                                    <div class="desciption-data">
                                                                        <div class="title-bookmark">
                                                                            <h3 class="title_3">Multikart Admin</h3>
                                                                            <p class="weburl_3">http://themes.pixelstrap.com/multikart/back-end/index.html
                                                                            </p>
                                                                            <div class="hover-block">
                                                                                <ul>
                                                                                    <li><a href=""
                                                                                            onclick="editBookmark(3)"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#edit-bookmark"><i
                                                                                                data-feather="edit-2"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                data-feather="link"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                data-feather="share-2"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                data-feather="trash-2"></i></a>
                                                                                    </li>
                                                                                    <li class="pull-right text-end"><a
                                                                                            href="#"><i
                                                                                                data-feather="tag"></i></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="content-general">
                                                                                <p class="desc_3">Multikart Admin is modern designed admin theme</p><span
                                                                                    class="collection_3">General</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-3 col-md-4 col-ed-4">
                                                            <div class="card card-with-border bookmark-card o-hidden">
                                                                <div class="details-website"><img class="img-fluid"
                                                                        src="{{ asset('assets/images/lightgallry/07.jpg') }}"
                                                                        alt="">
                                                                    <div class="favourite-icon favourite_4"
                                                                        onclick="setFavourite(4)"><a href="#"><i
                                                                                class="fa fa-star"></i></a></div>
                                                                    <div class="desciption-data">
                                                                        <div class="title-bookmark">
                                                                            <h3 class="title_4">Ecommerece theme</h3>
                                                                            <p class="weburl_4">http://themes.pixelstrap.com/multikart</p>
                                                                            <div class="hover-block">
                                                                                <ul>
                                                                                    <li><a href=""
                                                                                            onclick="editBookmark(4)"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#edit-bookmark"><i
                                                                                                data-feather="edit-2"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                data-feather="link"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                data-feather="share-2"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                data-feather="trash-2"></i></a>
                                                                                    </li>
                                                                                    <li class="pull-right text-end"><a
                                                                                            href="#"><i
                                                                                                data-feather="tag"></i></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="content-general">
                                                                                <p class="desc_4">Multikart HTML template is an apparently simple but highly functional tempalate designed for creating a flourisahing online business.
                                                                                </p><span class="collection_4">General
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-3 col-md-4 col-ed-4">
                                                            <div class="card card-with-border bookmark-card o-hidden">
                                                                <div class="details-website"><img class="img-fluid"
                                                                        src="{{ asset('assets/images/lightgallry/07.jpg') }}"
                                                                        alt="">
                                                                    <div class="favourite-icon favourite_5"
                                                                        onclick="setFavourite(5)"><a href="#"><i
                                                                                class="fa fa-star"></i></a></div>
                                                                    <div class="desciption-data">
                                                                        <div class="title-bookmark">
                                                                            <h3 class="title_5">Tovo app landing page</h3>
                                                                            <p class="weburl_5">http://vue.pixelstrap.com/tovo/home-one</p>
                                                                            <div class="hover-block">
                                                                                <ul>
                                                                                    <li><a href=""
                                                                                            onclick="editBookmark(5)"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#edit-bookmark"><i
                                                                                                data-feather="edit-2"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                data-feather="link"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                data-feather="share-2"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                data-feather="trash-2"></i></a>
                                                                                    </li>
                                                                                    <li class="pull-right text-end"><a
                                                                                            href="#"><i
                                                                                                data-feather="tag"></i></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="content-general">
                                                                                <p class="desc_5">Amazing Landing Page With Easy Customization</p><span
                                                                                    class="collection_5">Fs </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fade tab-pane" id="pills-notification" role="tabpanel"
                                        aria-labelledby="pills-notification-tab">
                                        <div class="card mb-0">
                                            <div class="card-header d-flex">
                                                <h4 class="mb-0">Notification</h4>
                                                <ul>
                                                    <li><a class="grid-bookmark-view" href="#"><i
                                                                data-feather="grid"></i></a></li>
                                                    <li><a class="list-layout-view" href="#"><i
                                                                data-feather="list"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="card-body">
                                                <div class="details-bookmark text-center"><span>No Bookmarks Found.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fade tab-pane" id="pills-newsletter" role="tabpanel"
                                        aria-labelledby="pills-newsletter-tab">
                                        <div class="card mb-0">
                                            <div class="card-header d-flex">
                                                <h4 class="mb-0">Newsletter</h4>
                                                <ul>
                                                    <li><a class="grid-bookmark-view" href="#"><i
                                                                data-feather="grid"></i></a></li>
                                                    <li><a class="list-layout-view" href="#"><i
                                                                data-feather="list"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="card-body">
                                                <div class="details-bookmark text-center"><span>No Bookmarks Found.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fade tab-pane" id="pills-business" role="tabpanel"
                                        aria-labelledby="pills-business-tab">
                                        <div class="card mb-0">
                                            <div class="card-header d-flex">
                                                <h4 class="mb-0">Business</h4>
                                                <ul>
                                                    <li><a class="grid-bookmark-view" href="#"><i
                                                                data-feather="grid"></i></a></li>
                                                    <li><a class="list-layout-view" href="#"><i
                                                                data-feather="list"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="card-body">
                                                <div class="details-bookmark text-center"><span>No Bookmarks Found.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fade tab-pane" id="pills-holidays" role="tabpanel"
                                        aria-labelledby="pills-holidays-tab">
                                        <div class="card mb-0">
                                            <div class="card-header d-flex">
                                                <h4 class="mb-0">Holidays</h4>
                                                <ul>
                                                    <li><a class="grid-bookmark-view" href="#"><i
                                                                data-feather="grid"></i></a></li>
                                                    <li><a class="list-layout-view" href="#"><i
                                                                data-feather="list"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="card-body">
                                                <div class="details-bookmark text-center"><span>No Bookmarks Found.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fade tab-pane" id="pills-important" role="tabpanel"
                                        aria-labelledby="pills-important-tab">
                                        <div class="card mb-0">
                                            <div class="card-header d-flex">
                                                <h4 class="mb-0">Important</h4>
                                                <ul>
                                                    <li><a class="grid-bookmark-view" href="#"><i
                                                                data-feather="grid"></i></a></li>
                                                    <li><a class="list-layout-view" href="#"><i
                                                                data-feather="list"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="card-body">
                                                <div class="details-bookmark text-center"><span>No Bookmarks Found.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fade tab-pane" id="pills-orgenization" role="tabpanel"
                                        aria-labelledby="pills-orgenization-tab">
                                        <div class="card mb-0">
                                            <div class="card-header d-flex">
                                                <h4 class="mb-0">Orgenization</h4>
                                                <ul>
                                                    <li><a class="grid-bookmark-view" href="#"><i
                                                                data-feather="grid"></i></a></li>
                                                    <li><a class="list-layout-view" href="#"><i
                                                                data-feather="list"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="card-body">
                                                <div class="details-bookmark text-center"><span>No Bookmarks Found.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade modal-bookmark" id="edit-bookmark" tabindex="-1"
                                        role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title">Edit Bookmark</h3>
                                                    <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="form-bookmark needs-validation" novalidate="">
                                                        <div class="row g-2">
                                                            <div class="mb-3 mt-0 col-md-12">
                                                                <label>Web Url</label>
                                                                <input class="form-control" id="editurl" type="text"
                                                                    required="" autocomplete="off"
                                                                    value="http://admin.pixelstrap.com/Cuba/ltr/landing-page.html">
                                                            </div>
                                                            <div class="mb-3 mt-0 col-md-12">
                                                                <label>Title</label>
                                                                <input class="form-control" id="edittitle" type="text"
                                                                    required="" autocomplete="off"
                                                                    value="Admin Template">
                                                            </div>
                                                            <div class="mb-3 mt-0 col-md-12">
                                                                <label>Description</label>
                                                                <textarea class="form-control" id="editdesc" required="" autocomplete="off">Cuba is beautifully crafted, clean and modern designed admin theme with 6 different demos and light - dark versions.</textarea>
                                                            </div>
                                                            <div class="mb-3 mt-0 col-md-6">
                                                                <label>Group</label>
                                                                <select class="form-select">
                                                                    <option value="AL">My Bookmarks</option>
                                                                </select>
                                                            </div>
                                                            <div class="mb-3 mt-0 col-md-6">
                                                                <label>Collection</label>
                                                                <select class="form-select">
                                                                    <option value="general">General</option>
                                                                    <option value="fs">fs</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-secondary" type="button">Save</button>
                                                        <button class="btn btn-primary" type="button"
                                                            data-bs-dismiss="modal">Cancel </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade modal-bookmark" id="createtag" tabindex="-1" role="dialog"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title">Create Tag</h3>
                                                    <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="form-bookmark needs-validation" novalidate="">
                                                        <div class="row g-2">
                                                            <div class="mb-3 mt-0 col-md-12">
                                                                <label>Tag Name</label>
                                                                <input class="form-control" type="text" required=""
                                                                    autocomplete="off">
                                                            </div>
                                                            <div class="mb-3 mt-0 col-md-12">
                                                                <label>Tag color</label>
                                                                <input class="form-color d-block" type="color"
                                                                    value="#5C61F2">
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-secondary" type="button">Save</button>
                                                        <button class="btn btn-primary" type="button"
                                                            data-bs-dismiss="modal">Cancel</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade modal-bookmark" id="exampleModal" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title" id="exampleModalLabel">Add Bookmark</h3>
                                                    <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="form-bookmark needs-validation" id="bookmark-form"
                                                        novalidate="">
                                                        <div class="row g-2">
                                                            <div class="mb-3 mt-0 col-md-12">
                                                                <label for="bm-weburl">Web Url</label>
                                                                <input class="form-control" id="bm-weburl" type="text"
                                                                    required="" autocomplete="off">
                                                            </div>
                                                            <div class="mb-3 mt-0 col-md-12">
                                                                <label for="bm-title">Title</label>
                                                                <input class="form-control" id="bm-title" type="text"
                                                                    required="" autocomplete="off">
                                                            </div>
                                                            <div class="mb-3 mt-0 col-md-12">
                                                                <label>Description</label>
                                                                <textarea class="form-control" id="bm-desc" required="" autocomplete="off"></textarea>
                                                            </div>
                                                            <div class="mb-3 mt-0 col-md-6">
                                                                <label>Group</label>
                                                                <select class="form-select">
                                                                    <option value="bookmark">My Bookmarks</option>
                                                                </select>
                                                            </div>
                                                            <div class="mb-3 mt-0 col-md-6">
                                                                <label>Collection</label>
                                                                <select class="form-select">
                                                                    <option value="general">General</option>
                                                                    <option value="fs">fs</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <input id="index_var" type="hidden" value="6">
                                                        <button class="btn btn-secondary" id="Bookmark"
                                                            onclick="submitBookMark()" type="submit">Save</button>
                                                        <button class="btn btn-primary" type="button"
                                                            data-bs-dismiss="modal">Cancel</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
    <script src="{{ asset('assets/js/bookmark/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/bookmark/custom.js') }}"></script>
    <script src="{{ asset('assets/js/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2/select2-custom.js') }}"></script>
    <script src="{{ asset('assets/js/form-validation-custom.js') }}"></script>
@endsection
