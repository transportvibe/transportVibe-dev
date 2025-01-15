@extends('layouts.simple.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/photoswipe.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 ps-0">
                    <h3>User Profile</h3>
                </div>
                <div class="col-sm-6 pe-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Users</li>
                        <li class="breadcrumb-item active">User Profile</li>
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
                            <div class="avatar"><img alt="" src="{{ asset('assets/images/user/7.jpg') }}"></div>
                            <div class="icon-wrapper"><i class="icofont icofont-pencil-alt-5"></i></div>
                        </div>
                        <div class="info">
                            <div class="row">
                                <div class="col-sm-6 col-lg-4 order-sm-1 order-xl-0">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="ttl-info text-start">
                                                <h5><i class="fa fa-envelope"></i>   Email</h5>
                                                <span>Marekjecno@yahoo.com</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="ttl-info text-start">
                                                <h5><i class="fa fa-calendar"></i>   BOD</h5><span>02 January 1988</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-4 order-sm-0 order-xl-1">
                                    <div class="user-designation">
                                        <div class="title"><a target="_blank" href="">Mark jecno</a></div>
                                        <div class="desc">designer</div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4 order-sm-2 order-xl-2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="ttl-info text-start">
                                                <h5><i class="fa fa-phone"></i>   Contact Us</h5><span>India +91
                                                    123-456-7890</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="ttl-info text-start">
                                                <h5><i class="fa fa-location-arrow"></i>   Location</h5><span>B69 Near
                                                    Schoool Demo Home</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="social-media">
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
                                    <div class="col-6 text-md-end border-right">
                                        <div class="follow-num counter">25869</div><span>Follower</span>
                                    </div>
                                    <div class="col-6 text-md-start">
                                        <div class="follow-num counter">659887</div><span>Following</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- user profile first-style end-->
                <!-- user profile second-style start-->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="profile-img-style">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="d-flex"><img class="img-thumbnail rounded-circle me-3"
                                            src="{{ asset('assets/images/user/7.jpg') }}" alt="Generic placeholder image">
                                        <div class="flex-grow-1 align-self-center">
                                            <h5 class="mt-0 user-name">JOHAN DIO</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 align-self-center">
                                    <div class="float-sm-end"><small>10 Hours ago</small></div>
                                </div>
                            </div>
                            <hr>
                            <p>Dressing is a way of life. My customers are successful working women. I want people to be
                                afraid of the women I dress. Age is something only in your head or a stereotype. Age means
                                nothing when you are passionate about something. There has to be a balance between your
                                mental satisfaction and the financial needs of your company.</p>
                            <div class="img-container">
                                <div class="my-gallery" id="aniimated-thumbnials" itemscope="">
                                    <figure itemprop="associatedMedia" itemscope=""><a
                                            href="{{ asset('assets/images/other-images/profile-style-img3.png') }}"
                                            itemprop="contentUrl" data-size="1600x950"><img class="img-fluid rounded"
                                                src="{{ asset('assets/images/other-images/profile-style-img3.png') }}"
                                                itemprop="thumbnail" alt="gallery"></a>
                                        <figcaption itemprop="caption description">Image caption 1</figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="like-comment">
                                <ul class="list-inline">
                                    <li class="list-inline-item border-right pe-3">
                                        <label class="m-0"><a href="#"><i
                                                    class="fa fa-heart"></i></a>  Like</label><span
                                            class="ms-2 counter">2659</span>
                                    </li>
                                    <li class="list-inline-item ms-2">
                                        <label class="m-0"><a href="#"><i
                                                    class="fa fa-comment"></i></a>  Comment</label><span
                                            class="ms-2 counter">569</span>
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
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="d-flex"><img class="img-thumbnail rounded-circle me-3"
                                            src="{{ asset('assets/images/user/7.jpg') }}" alt="Generic placeholder image">
                                        <div class="flex-grow-1 align-self-center">
                                            <h5 class="mt-0 user-name">JOHAN DIO</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 align-self-center">
                                    <div class="float-sm-end"><small>10 Hours ago</small></div>
                                </div>
                            </div>
                            <hr>
                            <p>Success isn't about the end result, it's about what you learn along the way. Confidence. If
                                you have it, you can make anything look good. Grunge is a hippied romantic version of punk.
                                I'm an accomplice to helping women get what they want. Clothes can transform your mood and
                                confidence. I think it's an old fashioned notion that fashion needs to be exclusive to be
                                fashionable.</p>
                            <div class="row mt-4 pictures my-gallery" id="aniimated-thumbnials-2" itemscope="">
                                <figure class="col-sm-6" itemprop="associatedMedia" itemscope=""><a
                                        href="{{ asset('assets/images/other-images/profile-style-img3.png') }}"
                                        itemprop="contentUrl" data-size="1600x950"><img class="img-fluid rounded"
                                            src="{{ asset('assets/images/other-images/profile-style-img.png') }}"
                                            itemprop="thumbnail" alt="gallery"></a>
                                    <figcaption itemprop="caption description">Image caption 1</figcaption>
                                </figure>
                                <figure class="col-sm-6" itemprop="associatedMedia" itemscope=""><a
                                        href="{{ asset('assets/images/other-images/profile-style-img3.png') }}"
                                        itemprop="contentUrl" data-size="1600x950"><img class="img-fluid rounded"
                                            src="{{ asset('assets/images/other-images/profile-style-img.png') }}"
                                            itemprop="thumbnail" alt="gallery"></a>
                                    <figcaption itemprop="caption description">Image caption 2</figcaption>
                                </figure>
                            </div>
                            <div class="like-comment">
                                <ul class="list-inline">
                                    <li class="list-inline-item border-right pe-3">
                                        <label class="m-0"><a href="#"><i
                                                    class="fa fa-heart"></i></a>  Like</label><span
                                            class="ms-2 counter">2659</span>
                                    </li>
                                    <li class="list-inline-item ms-2">
                                        <label class="m-0"><a href="#"><i
                                                    class="fa fa-comment"></i></a>  Comment</label><span
                                            class="ms-2 counter">569</span>
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
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="d-flex"><img class="img-thumbnail rounded-circle me-3"
                                            src="{{ asset('assets/images/user/7.jpg') }}"
                                            alt="Generic placeholder image">
                                        <div class="flex-grow-1 align-self-center">
                                            <h5 class="mt-0 user-name">JOHAN DIO</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 align-self-center">
                                    <div class="float-sm-end"><small>10 Hours ago</small></div>
                                </div>
                            </div>
                            <hr>
                            <p>Comfort is very important to me. I think people live better in big houses and in big clothes.
                                Design and style should work toward making you look good and feel good without a lot of
                                effort so you can get on with the things that matter. My shows are about the complete woman
                                who swallows it all. Its a question of survival. Those fashion designers are just crazy; but
                                arent we all? You can only go forward by making mistakes.</p>
                            <div class="like-comment mt-4">
                                <ul class="list-inline">
                                    <li class="list-inline-item border-right pe-3">
                                        <label class="m-0"><a href="#"><i
                                                    class="fa fa-heart"></i></a>  Like</label><span
                                            class="ms-2 counter">2659</span>
                                    </li>
                                    <li class="list-inline-item ms-2">
                                        <label class="m-0"><a href="#"><i
                                                    class="fa fa-comment"></i></a>  Comment</label><span
                                            class="ms-2 counter">569</span>
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
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="d-flex"><img class="img-thumbnail rounded-circle me-3"
                                            src="{{ asset('assets/images/user/7.jpg') }}"
                                            alt="Generic placeholder image">
                                        <div class="flex-grow-1 align-self-center">
                                            <h5 class="mt-0 user-name">JOHAN DIO</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 align-self-center">
                                    <div class="float-sm-end"><small>10 Hours ago</small></div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-12 col-xl-4">
                                    <div class="my-gallery" id="aniimated-thumbnials-3" itemscope="">
                                        <figure itemprop="associatedMedia" itemscope=""><a
                                                href="{{ asset('assets/images/blog/img.png') }}" itemprop="contentUrl"
                                                data-size="1600x950"><img class="img-fluid rounded"
                                                    src="{{ asset('assets/images/blog/img.png') }}" itemprop="thumbnail"
                                                    alt="gallery"></a>
                                            <figcaption itemprop="caption description">Image caption 1</figcaption>
                                        </figure>
                                    </div>
                                    <div class="like-comment mt-4 like-comment-sm-mb">
                                        <ul class="list-inline">
                                            <li class="list-inline-item border-right pe-3">
                                                <label class="m-0"><a href="#"><i
                                                            class="fa fa-heart"></i></a>  Like</label><span
                                                    class="ms-2 counter">2659</span>
                                            </li>
                                            <li class="list-inline-item ms-2">
                                                <label class="m-0"><a href="#"><i
                                                            class="fa fa-comment"></i></a>  Comment</label><span
                                                    class="ms-2 counter">569</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                        piece of classical Latin literature from 45 BC, making it over 2000 years old.
                                        Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked
                                        up one of the more obscure Latin words, consecteturContrary to popular belief, Lorem
                                        Ipsum is not simply random text. It has roots in a piece of classical Latin
                                        literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
                                        professor at Hampden-Sydney College in Virginia, looked up one of the more obscure
                                        Latin words, consectetur</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- user profile fifth-style end-->
                <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="pswp__bg"></div>
                    <div class="pswp__scroll-wrap">
                        <div class="pswp__container">
                            <div class="pswp__item"></div>
                            <div class="pswp__item"></div>
                            <div class="pswp__item"></div>
                        </div>
                        <div class="pswp__ui pswp__ui--hidden">
                            <div class="pswp__top-bar">
                                <div class="pswp__counter"></div>
                                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                                <button class="pswp__button pswp__button--share" title="Share"></button>
                                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                                <div class="pswp__preloader">
                                    <div class="pswp__preloader__icn">
                                        <div class="pswp__preloader__cut">
                                            <div class="pswp__preloader__donut"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                <div class="pswp__share-tooltip"></div>
                            </div>
                            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                            <div class="pswp__caption">
                                <div class="pswp__caption__center"></div>
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
    <script src="{{ asset('assets/js/counter/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/counter/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/counter/counter-custom.js') }}"></script>
    <script src="{{ asset('assets/js/photoswipe/photoswipe.min.js') }}"></script>
    <script src="{{ asset('assets/js/photoswipe/photoswipe-ui-default.min.js') }}"></script>
    <script src="{{ asset('assets/js/photoswipe/photoswipe.js') }}"></script>
@endsection
