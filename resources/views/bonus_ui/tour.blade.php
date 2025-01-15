@extends('layouts.simple.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/tour.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 ps-0">
                    <h3>Tour</h3>
                </div>
                <div class="col-sm-6 pe-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Bonus Ui</li>
                        <li class="breadcrumb-item active">Tour</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="user-profile">
            <div class="row">
                <!-- user profile first-style start-->
                <div class="col-sm-12">
                    <div class="card hovercard text-center">
                        <div class="cardheader"></div>
                        <div class="user-image">
                            <div class="avatar"><img alt="" src="{{ asset('assets/images/user/7.jpg') }}"
                                    data-intro="This is Crocs profile"></div>
                            <div class="icon-wrapper"><i class="icofont icofont-pencil-alt-5"
                                    data-intro="Change Crocs profile image here"></i></div>
                        </div>
                        <div class="info">
                            <div class="row g-3" data-intro="This is your profile details">
                                <div class="col-sm-6 col-xl-4 order-sm-1 order-xl-0">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="text-start tour-email">
                                                <h6 class="tour-mb-space"><i class="fa fa-envelope"></i>   Email</h6>
                                                <span>William@jourrapide.com</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="text-start ttl-sm-mb-0 tour-email">
                                                <h6 class="tour-mb-space"><i class="fa fa-calendar"></i>   BOD</h6><span>02
                                                    January 1988</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-xl-4 order-sm-0 order-xl-1">
                                    <div class="user-designation tour-email">
                                        <div class="title"><a target="_blank" href="">William C. Jennings</a></div>
                                        <div class="desc mt-2"> Web Designer</div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-4 order-sm-2 order-xl-2">
                                    <div class="row g-3">
                                        <div class="col-md-6 mt-0 mt-sm-3">
                                            <div class="text-start ttl-xs-mt tour-email">
                                                <h6 class="tour-mb-space"><i class="fa fa-phone"></i>   Contact Us</h6>
                                                <span>US 310-273-0666</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="text-start ttl-sm-mb-0 tour-email">
                                                <h6 class="tour-mb-space"><i class="fa fa-location-arrow"></i>   Location
                                                </h6><span>4377 Libby Street Beverly Hills</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="social-media" data-intro="This is your social details">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="https://www.facebook.com/" target="_blank"><i
                                                class="fa fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="https://accounts.google.com/" target="_blank"><i
                                                class="fa fa-google-plus"></i></a></li>
                                    <li class="list-inline-item"><a href="https://twitter.com/" target="_blank"><i
                                                class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="https://www.instagram.com/" target="_blank"><i
                                                class="fa fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="https://rss.app/" target="_blank"><i
                                                class="fa fa-rss"></i></a></li>
                                </ul>
                            </div>
                            <div class="follow">
                                <div class="row">
                                    <div class="col-6 border-end">
                                        <div class="follow-num counter">25.8K</div><span>Follower</span>
                                    </div>
                                    <div class="col-6">
                                        <div class="follow-num counter">65.2M</div><span>Following</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- user profile first-style end-->
                <!-- user profile second-style start-->
                <div class="col-sm-12" data-intro="This is your first Post">
                    <div class="card">
                        <div class="profile-img-style">
                            <div class="row g-2">
                                <div class="col-sm-8">
                                    <div class="d-flex"><img class="img-thumbnail rounded-circle me-3"
                                            src="{{ asset('assets/images/user/7.jpg') }}" alt="Generic placeholder image">
                                        <div class="flex-grow-1 align-self-center">
                                            <h5 class="mt-0 user-name">William C. Jennings</h5>
                                            <div class="tour-wrapper"><span>25 Jan</span><i
                                                    class="tour-dot fa fa-circle"></i><span class="txt-danger">6 min
                                                    read</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 align-self-center mt-0 text-end">
                                    <div class="social-media social-tour" data-intro="This is your social details">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><a href="https://www.facebook.com/"
                                                    target="_blank"><i class="fa fa-facebook"></i></a></li>
                                            <li class="list-inline-item"><a href="https://accounts.google.com/"
                                                    target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="list-inline-item"><a href="https://twitter.com/"
                                                    target="_blank"><i class="fa fa-twitter"></i></a></li>
                                            <li class="list-inline-item"><a href="https://www.instagram.com/"
                                                    target="_blank"><i class="fa fa-instagram"></i></a></li>
                                            <li class="list-inline-item"><a href="https://rss.app/" target="_blank"><i
                                                        class="fa fa-rss"></i></a></li>
                                        </ul>
                                        <div class="float-sm-end"><small>3 min ago</small></div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <h3 class="pb-3">Wonderful piece that successfully conveys the magnificence of the mountains
                                and the natural world.</h3>
                            <p class="block-ellipsis">English Romantic painter, printer, and watercolourist <em
                                    class="txt-danger">William C. Jennings</em> Is most renowned for his expressive
                                colorization, creative landscapes, and stormy, sometimes violent maritime works. However,
                                this moody image of the Devil's Bridge in Switzerland, close to the Gotthard Pass, feels
                                incredibly authentic and accurately depicts historical occasions when Russian general
                                Suvorov crossed the Alps and fought not only far larger enemy troops!</p>
                            <div class="img-container">
                                <div id="aniimated-thumbnials"><a href="javascript:void(0)"><img
                                            class="img-fluid rounded"
                                            src="{{ asset('assets/images/other-images/profile-style-img3.png') }}"
                                            alt="gallery"></a>
                                    <p class="block-ellipsis pt-3">The curved canvas is enclosed in a complex frame that
                                        the artist created but that his buddy Gottlieb Christian Kuhn carved. A variety of
                                        Christian symbols are depicted on the frame, including the faces of five infant
                                        angels, a star, grapes, vines, corn, and God's eye.Many of the Romantic elements and
                                        subjects that he would explore throughout his career are present in this work, one
                                        of his earliest, most notable of which is the landscape's significant significance.
                                        In spite of the altarpiece's inclusion of a crucifix, the emphasis is<a
                                            class="txt-danger" href="{{ route('admin.user_profile') }}" target="_blank"> Read More</a>
                                    </p>
                                </div>
                            </div>
                            <div class="like-comment mt-4">
                                <ul class="list-inline">
                                    <li class="list-inline-item b-r-gray pe-3">
                                        <label class="m-0"><a href="#"><i
                                                    class="fa fa-heart"></i></a>  Like</label>
                                    </li>
                                    <li class="list-inline-item b-r-gray pe-3">
                                        <label class="m-0"><a href="#"><i
                                                    class="fa fa-comment"></i></a>  Comment</label>
                                    </li>
                                    <li class="list-inline-item">
                                        <label class="m-0"><a href="#"><i
                                                    class="fa fa-paper-plane"></i></a>  Share</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- user profile second-style end-->
                <!-- user profile third-style start-->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="profile-img-style">
                            <div class="row g-2">
                                <div class="col-sm-8">
                                    <div class="d-flex"><img class="img-thumbnail rounded-circle me-3"
                                            src="{{ asset('assets/images/user/7.jpg') }}" alt="Generic placeholder image">
                                        <div class="flex-grow-1 align-self-center">
                                            <h5 class="mt-0 user-name">William C. Jennings</h5>
                                            <div class="tour-wrapper"><span>25 Jan</span><i
                                                    class="tour-dot fa fa-circle"></i><span class="txt-danger">1 min
                                                    read</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 align-self-center mt-0 text-end">
                                    <div class="social-media social-tour" data-intro="This is your social details">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><a href="https://www.facebook.com/"
                                                    target="_blank"><i class="fa fa-facebook"></i></a></li>
                                            <li class="list-inline-item"><a href="https://accounts.google.com/"
                                                    target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="list-inline-item"><a href="https://twitter.com/"
                                                    target="_blank"><i class="fa fa-twitter"></i></a></li>
                                            <li class="list-inline-item"><a href="https://www.instagram.com/"
                                                    target="_blank"><i class="fa fa-instagram"></i></a></li>
                                            <li class="list-inline-item"><a href="https://rss.app/" target="_blank"><i
                                                        class="fa fa-rss"></i></a></li>
                                        </ul>
                                        <div class="float-sm-end"><small>10 Hours ago</small></div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <p class="block-ellipsis">you are going to use a passage of Lorem Ipsum, you need to be sure
                                there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum
                                generators on the Internet tend to repeat predefined chunks as necessary, making this the
                                first true generator on the Internet.</p>
                            <div class="row g-3 mt-4 pictures" id="aniimated-thumbnials-2"><a class="col-sm-6"
                                    href="javascript:void(0)">
                                    <div class="tour-blog"><img class="img-fluid rounded"
                                            src="{{ asset('assets/images/other-images/mountain.jpg') }}" alt="mountain">
                                    </div>
                                </a><a class="col-sm-6" href="javascript:void(0)">
                                    <div class="tour-blog"><img class="img-fluid rounded"
                                            src="{{ asset('assets/images/other-images/sea.jpg') }}" alt="sea"></div>
                                </a></div>
                            <div class="like-comment mt-4">
                                <ul class="list-inline">
                                    <li class="list-inline-item b-r-gray pe-3">
                                        <label class="m-0"><a href="#"><i
                                                    class="fa fa-heart"></i></a>  Like</label>
                                    </li>
                                    <li class="list-inline-item b-r-gray pe-3">
                                        <label class="m-0"><a href="#"><i
                                                    class="fa fa-comment"></i></a>  Comment</label>
                                    </li>
                                    <li class="list-inline-item">
                                        <label class="m-0"><a href="#"><i
                                                    class="fa fa-paper-plane"></i></a>  Share</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- user profile third-style end-->
                <!-- user profile fourth-style start-->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="profile-img-style">
                            <div class="row g-2">
                                <div class="col-sm-8">
                                    <div class="d-flex"><img class="img-thumbnail rounded-circle me-3"
                                            src="{{ asset('assets/images/user/7.jpg') }}"
                                            alt="Generic placeholder image">
                                        <div class="flex-grow-1 align-self-center">
                                            <h5 class="mt-0 user-name">William C. Jennings</h5>
                                            <div class="tour-wrapper"><span>09 Dec</span><i
                                                    class="tour-dot fa fa-circle"></i><span class="txt-danger">2 min
                                                    read</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 align-self-center mt-0 text-end">
                                    <div class="social-media social-tour" data-intro="This is your social details">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><a href="https://www.facebook.com/"
                                                    target="_blank"><i class="fa fa-facebook"></i></a></li>
                                            <li class="list-inline-item"><a href="https://accounts.google.com/"
                                                    target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="list-inline-item"><a href="https://twitter.com/"
                                                    target="_blank"><i class="fa fa-twitter"></i></a></li>
                                            <li class="list-inline-item"><a href="https://www.instagram.com/"
                                                    target="_blank"><i class="fa fa-instagram"></i></a></li>
                                            <li class="list-inline-item"><a href="https://rss.app/" target="_blank"><i
                                                        class="fa fa-rss"></i></a></li>
                                        </ul>
                                        <div class="float-sm-end"><small>9 Month ago</small></div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <p class="block-ellipsis">Nature has a role in our lives. We are a part of everything since we
                                sprang from a seed and the ground, but we are quickly losing the perception that we are
                                animals much like the rest. Is it possible to feel something when you gaze at, appreciate,
                                and hear a tree? Can you pay attention to the tiny weed, the creeper climbing the wall, the
                                light on the leaves, and the numerous shadows? All of this must be understood, and one must
                                have a feeling of connectedness with the natural world around them. Despite living in a
                                town, there are still a few trees here and there. The next garden's bloom could not be
                                well-kept.</p>
                            <div class="like-comment mt-4">
                                <ul class="list-inline">
                                    <li class="list-inline-item b-r-gray pe-3">
                                        <label class="m-0"><a href="#"><i
                                                    class="fa fa-heart"></i></a>  Like</label>
                                    </li>
                                    <li class="list-inline-item b-r-gray pe-3">
                                        <label class="m-0"><a href="#"><i
                                                    class="fa fa-comment"></i></a>  Comment</label>
                                    </li>
                                    <li class="list-inline-item">
                                        <label class="m-0"><a href="#"><i
                                                    class="fa fa-paper-plane"></i></a>  Share</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- user profile fourth-style end-->
                <!-- user profile fifth-style start-->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="profile-img-style">
                            <div class="row g-2">
                                <div class="col-sm-8">
                                    <div class="d-flex"><img class="img-thumbnail rounded-circle me-3"
                                            src="{{ asset('assets/images/user/7.jpg') }}"
                                            alt="Generic placeholder image">
                                        <div class="flex-grow-1 align-self-center">
                                            <h5 class="mt-0 user-name">William C. Jennings</h5>
                                            <div class="tour-wrapper"><span>02 Feb</span><i
                                                    class="tour-dot fa fa-circle"></i><span class="txt-danger">5 min
                                                    read</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 align-self-center mt-0 text-end">
                                    <div class="social-media social-tour" data-intro="This is your social details">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><a href="https://www.facebook.com/"
                                                    target="_blank"><i class="fa fa-facebook"></i></a></li>
                                            <li class="list-inline-item"><a href="https://accounts.google.com/"
                                                    target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="list-inline-item"><a href="https://twitter.com/"
                                                    target="_blank"><i class="fa fa-twitter"></i></a></li>
                                            <li class="list-inline-item"><a href="https://www.instagram.com/"
                                                    target="_blank"><i class="fa fa-instagram"></i></a></li>
                                            <li class="list-inline-item"><a href="https://rss.app/" target="_blank"><i
                                                        class="fa fa-rss"></i></a></li>
                                        </ul>
                                        <div class="float-sm-end"><small>2 Yours ago</small></div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-12 col-xl-4">
                                    <div id="aniimated-thumbnials-3"><a href="javascript:void(0)"><img
                                                class="img-fluid rounded"
                                                src="{{ asset('assets/images/other-images/sidebar-bg.jpg') }}"
                                                alt="nature"></a>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <p class="block-ellipsis pt-xl-0 pt-3">The wind gives life to the planet. This
                                        unobservable, enigmatic energy has the power to revitalize a setting. Its absence
                                        can cause the world to become serenely motionless. Its strength is scarcely visible
                                        on bare mountain summits, but it becomes obvious in woods and on the water. Winds
                                        may be violent and even harmful. When we investigate it carefully Nature is not a
                                        destination. Home is here. Garry Snyder In a very real sense, our home, or natural
                                        environment, is made up of mountains and valleys, the seas and the sky, the sun and
                                        the soil, the trees and the flowers. Growing up in the contemporary, civilized
                                        environment, it's simple to start believing</p>
                                    <div class="like-comment mt-4">
                                        <ul class="list-inline">
                                            <li class="list-inline-item b-r-gray pe-3">
                                                <label class="m-0"><a href="#"><i
                                                            class="fa fa-heart"></i></a>  Like</label>
                                            </li>
                                            <li class="list-inline-item b-r-gray pe-3">
                                                <label class="m-0"><a href="#"><i
                                                            class="fa fa-comment"></i></a>  Comment</label>
                                            </li>
                                            <li class="list-inline-item">
                                                <label class="m-0"><a href="#"><i
                                                            class="fa fa-paper-plane"></i></a>  Share</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- user profile fifth-style end-->
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/tour/intro.js') }}"></script>
    <script src="{{ asset('assets/js/tour/intro-init.js') }}"></script>
@endsection
