@extends('layouts.simple.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 ps-0">
                    <h3>Blog Details</h3>
                </div>
                <div class="col-sm-6 pe-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Blog</li>
                        <li class="breadcrumb-item active">Blog Details</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid blog-page">
        <div class="row">
            <div class="col-xxl-6 box-col-40 xl-40">
                <div class="card">
                    <div class="blog-box blog-shadow"><img class="img-fluid"
                            src="{{ asset('assets/images/blog/blog.jpg') }}" alt="">
                        <div class="blog-details">
                            <p>25 July 2024</p>
                            <h4>People just don't do it anymore. We have to change that. Sometimes the simplest things are
                                the most profound.</h4>
                            <ul class="blog-social">
                                <li><i class="icofont icofont-user"></i>Mark Jecno</li>
                                <li><i class="icofont icofont-thumbs-up"></i>02 Hits</li>
                                <li><i class="icofont icofont-ui-chat"></i>598 Comments</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 box-col-60 xl-60">
                <div class="card">
                    <div class="blog-box blog-list row">
                        <div class="col-sm-5"><img class="img-fluid sm-100-w"
                                src="{{ asset('assets/images/blog/blog-2.jpg') }}" alt=""></div>
                        <div class="col-sm-7">
                            <div class="blog-details">
                                <div class="blog-date"><span>02</span> January 2024</div>
                                <h4>Encounter every day.</h4>
                                <div class="blog-bottom-content">
                                    <ul class="blog-social">
                                        <li>by: Admin</li>
                                        <li>0 Hits</li>
                                    </ul>
                                    <hr>
                                    <p class="mt-0">A huge part of it is the incomparable beauty you can encounter every
                                        day.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="blog-box blog-list row">
                        <div class="col-sm-5"><img class="img-fluid sm-100-w"
                                src="{{ asset('assets/images/blog/blog-3.jpg') }}" alt=""></div>
                        <div class="col-sm-7">
                            <div class="blog-details">
                                <div class="blog-date"><span>03</span> January 2024</div>
                                <h4>Black color is important.</h4>
                                <div class="blog-bottom-content">
                                    <ul class="blog-social">
                                        <li>by: Admin</li>
                                        <li>02 Hits</li>
                                    </ul>
                                    <hr>
                                    <p class="mt-0">The simplest things are the most profound. People just don't do it
                                        anymore.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 box-col-3">
                <div class="card">
                    <div class="blog-box blog-grid text-center"><img class="img-fluid top-radius-blog"
                            src="{{ asset('assets/images/blog/blog-5.jpg') }}" alt="">
                        <div class="blog-details-main">
                            <ul class="blog-social">
                                <li>20 April 2024</li>
                                <li>by: Admin</li>
                                <li>0 Hits</li>
                            </ul>
                            <hr>
                            <h4 class="blog-bottom-details">A huge part of it is the incomparable beauty you can encounter
                                every day.People just anymore profound.</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 box-col-3">
                <div class="card">
                    <div class="blog-box blog-grid text-center"><img class="img-fluid top-radius-blog"
                            src="{{ asset('assets/images/blog/blog-6.jpg') }}" alt="">
                        <div class="blog-details-main">
                            <ul class="blog-social">
                                <li>9 April 2024</li>
                                <li>by: Admin</li>
                                <li>0 Hits</li>
                            </ul>
                            <hr>
                            <h4 class="blog-bottom-details">People just don't do it anymore. We have to change that.
                                Sometimes the simplest things are the most profound.</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 box-col-3">
                <div class="card">
                    <div class="blog-box blog-grid text-center"><img class="img-fluid top-radius-blog"
                            src="{{ asset('assets/images/blog/blog-5.jpg') }}" alt="">
                        <div class="blog-details-main">
                            <ul class="blog-social">
                                <li>15 April 2024</li>
                                <li>by: Admin</li>
                                <li>0 Hits</li>
                            </ul>
                            <hr>
                            <h4 class="blog-bottom-details">A huge part of it is the incomparable beauty you can encounter
                                every day.People just anymore profound.</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 box-col-3">
                <div class="card">
                    <div class="blog-box blog-grid text-center"><img class="img-fluid top-radius-blog"
                            src="{{ asset('assets/images/blog/blog-6.jpg') }}" alt="">
                        <div class="blog-details-main">
                            <ul class="blog-social">
                                <li>11 April 2024</li>
                                <li>by: Admin</li>
                                <li>0 Hits</li>
                            </ul>
                            <hr>
                            <h4 class="blog-bottom-details">People just don't do it anymore. We have to change that.
                                Sometimes the simplest things are the most profound.</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('scripts')
@endsection
