@extends('layouts.simple.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/owlcarousel.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 ps-0">
                    <h3>Owl Carousel</h3>
                </div>
                <div class="col-sm-6 pe-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Bonus Ui</li>
                        <li class="breadcrumb-item active">Owl Carousel</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Slides Only </h4>
                        <p class="f-m-light mt-1">The <code>.active</code> class needs to be added to one of the slides
                            otherwise the carousel will not be visible.<code>.d-block</code> and <code>.w-100 </code> on
                            carousel images to prevent browser default image alignment.</p>
                    </div>
                    <div class="card-body">
                        <div class="carousel slide" id="carouselExampleSlidesOnly" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active"><img class="d-block w-100"
                                        src="{{ asset('assets/images/slider/11.jpg') }}" alt="drawing-room"></div>
                                <div class="carousel-item"><img class="d-block w-100"
                                        src="{{ asset('assets/images/slider/9.jpg') }}" alt="drawing-room"></div>
                                <div class="carousel-item"><img class="d-block w-100"
                                        src="{{ asset('assets/images/slider/6.jpg') }}" alt="drawing-room"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>With Controls</h4>
                        <p class="f-m-light mt-1">Use the <code>.carousel-control-prev</code> &
                            <code>.carousel-control-next</code> through previous and next controls. We recommend using
                            <code>&lt;button&gt;</code> elements, but you can also use <code>&lt;a&gt;</code> elements with
                            <code>role="button".</code>
                        </p>
                    </div>
                    <div class="card-body">
                        <div class="carousel slide" id="carouselExampleControls" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active"><img class="d-block w-100"
                                        src="{{ asset('assets/images/slider/6.jpg') }}" alt="drawing-room"></div>
                                <div class="carousel-item"><img class="d-block w-100"
                                        src="{{ asset('assets/images/slider/7.jpg') }}" alt="drawing-room"></div>
                                <div class="carousel-item"><img class="d-block w-100"
                                        src="{{ asset('assets/images/slider/10.jpg') }}" alt="drawing-room"></div>
                                <div class="carousel-item"><img class="d-block w-100"
                                        src="{{ asset('assets/images/slider/4.jpg') }}" alt="drawing-room"></div>
                                <div class="carousel-item"><img class="d-block w-100"
                                        src="{{ asset('assets/images/slider/1.jpg') }}" alt="drawing-room"></div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                                data-bs-slide="prev"><span class="carousel-control-prev-icon"
                                    aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                                data-bs-slide="next"><span class="carousel-control-next-icon"
                                    aria-hidden="true"></span><span class="visually-hidden">Next</span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Auto Play Variant</h4>
                        <p class="f-m-light mt-1">Use the <code>.owl-carousel </code>through slides.</p>
                    </div>
                    <div class="card-body">
                        <div class="owl-carousel owl-theme" id="owl-carousel-13">
                            <div class="item"><img src="{{ asset('assets/images/slider/1.jpg') }}" alt="Drawing-room">
                            </div>
                            <div class="item"><img src="{{ asset('assets/images/slider/2.jpg') }}" alt="Drawing-room">
                            </div>
                            <div class="item"><img src="{{ asset('assets/images/slider/3.jpg') }}" alt="Drawing-room">
                            </div>
                            <div class="item"><img src="{{ asset('assets/images/slider/4.jpg') }}" alt="Drawing-room">
                            </div>
                            <div class="item"><img src="{{ asset('assets/images/slider/5.jpg') }}" alt="Drawing-room">
                            </div>
                            <div class="item"><img src="{{ asset('assets/images/slider/6.jpg') }}" alt="Drawing-room">
                            </div>
                            <div class="item"><img src="{{ asset('assets/images/slider/7.jpg') }}" alt="Drawing-room">
                            </div>
                            <div class="item"><img src="{{ asset('assets/images/slider/8.jpg') }}" alt="Drawing-room">
                            </div>
                            <div class="item"><img src="{{ asset('assets/images/slider/9.jpg') }}" alt="Drawing-room">
                            </div>
                            <div class="item"><img src="{{ asset('assets/images/slider/10.jpg') }}"
                                    alt="Drawing-room"></div>
                            <div class="item"><img src="{{ asset('assets/images/slider/11.jpg') }}"
                                    alt="Drawing-room"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Mouse Wheel Variant</h4>
                        <p class="f-m-light mt-1">Use the <code>.owl-carousel </code>through slides.</p>
                    </div>
                    <div class="card-body">
                        <div class="owl-carousel owl-theme mouse-wheel" id="owl-carousel-15">
                            <div class="item"><img src="{{ asset('assets/images/slider/1.jpg') }}" alt="Drawing-room">
                            </div>
                            <div class="item"><img src="{{ asset('assets/images/slider/2.jpg') }}" alt="Drawing-room">
                            </div>
                            <div class="item"><img src="{{ asset('assets/images/slider/3.jpg') }}" alt="Drawing-room">
                            </div>
                            <div class="item"><img src="{{ asset('assets/images/slider/4.jpg') }}" alt="Drawing-room">
                            </div>
                            <div class="item"><img src="{{ asset('assets/images/slider/5.jpg') }}" alt="Drawing-room">
                            </div>
                            <div class="item"><img src="{{ asset('assets/images/slider/6.jpg') }}" alt="Drawing-room">
                            </div>
                            <div class="item"><img src="{{ asset('assets/images/slider/7.jpg') }}" alt="Drawing-room">
                            </div>
                            <div class="item"><img src="{{ asset('assets/images/slider/8.jpg') }}" alt="Drawing-room">
                            </div>
                            <div class="item"><img src="{{ asset('assets/images/slider/9.jpg') }}" alt="Drawing-room">
                            </div>
                            <div class="item"><img src="{{ asset('assets/images/slider/10.jpg') }}"
                                    alt="Drawing-room"></div>
                            <div class="item"><img src="{{ asset('assets/images/slider/11.jpg') }}"
                                    alt="Drawing-room"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>With Indicators</h4>
                        <p class="f-m-light mt-1">Use the <code>.carousel-indicators</code> through carousel indicates.</p>
                    </div>
                    <div class="card-body">
                        <div class="carousel slide" id="carouselExampleIndicators" data-bs-ride="true">
                            <div class="carousel-indicators">
                                <button class="active" type="button" data-bs-target="#carouselExampleIndicators"
                                    data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active"><img class="d-block w-100"
                                        src="{{ asset('assets/images/slider/3.jpg') }}" alt="drawing-room"></div>
                                <div class="carousel-item"><img class="d-block w-100"
                                        src="{{ asset('assets/images/slider/8.jpg') }}" alt="drawing-room"></div>
                                <div class="carousel-item"><img class="d-block w-100"
                                        src="{{ asset('assets/images/slider/10.jpg') }}" alt="drawing-room"></div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="prev"><span
                                    class="carousel-control-prev-icon" aria-hidden="true"></span><span
                                    class="visually-hidden">Previous</span></button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="next"><span
                                    class="carousel-control-next-icon" aria-hidden="true"></span><span
                                    class="visually-hidden">Next</span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>With Captions</h4>
                        <p class="f-m-light mt-1">Add captions to your slides easily with the<code>
                                .carousel-caption</code> element within any <code>.carousel-item</code>.</p>
                    </div>
                    <div class="card-body">
                        <div class="carousel slide" id="carouselExampleCaptions" data-bs-ride="false">
                            <div class="carousel-indicators">
                                <button class="active" type="button" data-bs-target="#carouselExampleCaptions"
                                    data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active"><img class="d-block w-100"
                                        src="{{ asset('assets/images/slider/9.jpg') }}" alt="drawing-room">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>The area in the house that is most comfortable.</h3>
                                        <p> You can watch folks you wouldn't have in your house amuse you in your living
                                            room thanks to the development of television.</p>
                                    </div>
                                </div>
                                <div class="carousel-item"><img class="d-block w-100"
                                        src="{{ asset('assets/images/slider/1.jpg') }}" alt="drawing-room">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>Drawing Room</h3>
                                        <p>Regardless of how big or tiny your home is, think about hiring an interior
                                            designer. They give you a calm living atmosphere in addition to decorating your
                                            home.</p>
                                    </div>
                                </div>
                                <div class="carousel-item"><img class="d-block w-100"
                                        src="{{ asset('assets/images/slider/2.jpg') }}" alt="drawing-room">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>House Interior</h3>
                                        <p>If you want to alter your way of life, start with redesigning your house's
                                            interior.</p>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleCaptions" data-bs-slide="prev"><span
                                    class="carousel-control-prev-icon" aria-hidden="true"></span><span
                                    class="visually-hidden">Previous</span></button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleCaptions" data-bs-slide="next"><span
                                    class="carousel-control-next-icon" aria-hidden="true"></span><span
                                    class="visually-hidden">Next</span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-12">
                <div class="card height-equal">
                    <div class="card-header pb-0">
                        <h4>Cross-Fade</h4>
                        <p class="f-m-light mt-1">Add <code>.carousel-fade</code> to your carousel to animate slides with a
                            fade transition instead of a slide. Depending on your carousel content, you may want to
                            add<code> .bg-body</code> or some custom CSS to the .carousel-items for proper cross-fading.</p>
                    </div>
                    <div class="card-body">
                        <div class="carousel slide carousel-fade" id="carouselExampleFade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active"><img class="d-block w-100"
                                        src="{{ asset('assets/images/slider/1.jpg') }}" alt="drawing-room"></div>
                                <div class="carousel-item"><img class="d-block w-100"
                                        src="{{ asset('assets/images/slider/11.jpg') }}" alt="drawing-room"></div>
                                <div class="carousel-item"><img class="d-block w-100"
                                        src="{{ asset('assets/images/slider/7.jpg') }}" alt="drawing-room"></div>
                                <div class="carousel-item"><img class="d-block w-100"
                                        src="{{ asset('assets/images/slider/10.jpg') }}" alt="drawing-room"></div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                                data-bs-slide="prev"><span class="carousel-control-prev-icon"
                                    aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                                data-bs-slide="next"><span class="carousel-control-next-icon"
                                    aria-hidden="true"></span><span class="visually-hidden">Next</span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-12">
                <div class="card height-equal">
                    <div class="card-header pb-0">
                        <h4>Individual Carousel-Item Interval</h4>
                        <p class="f-m-light mt-1"></p>Add <code>data-bs-interval=""</code> to a<code>
                            .carousel-item</code> to change the amount of time to delay between automatically cycling to the
                        next item.
                    </div>
                    <div class="card-body">
                        <div class="carousel slide" id="carouselExampleInterval" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000"><img class="d-block w-100"
                                        src="{{ asset('assets/images/slider/5.jpg') }}" alt="drawing-room"></div>
                                <div class="carousel-item" data-bs-interval="2000"><img class="d-block w-100"
                                        src="{{ asset('assets/images/slider/2.jpg') }}" alt="drawing-room"></div>
                                <div class="carousel-item"><img class="d-block w-100"
                                        src="{{ asset('assets/images/slider/10.jpg') }}" alt="drawing-room"></div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleInterval" data-bs-slide="prev"><span
                                    class="carousel-control-prev-icon" aria-hidden="true"></span><span
                                    class="visually-hidden">Previous</span></button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleInterval" data-bs-slide="next"><span
                                    class="carousel-control-next-icon" aria-hidden="true"></span><span
                                    class="visually-hidden">Next</span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-12">
                <div class="card height-equal">
                    <div class="card-header pb-0">
                        <h4>Disable Touch Swiping</h4>
                        <p class="f-m-light mt-1">Carousels support swiping left/right on touchscreen devices to move
                            between slides. This can be disabled using the <code>data-bs-touch </code> attribute.</p>
                    </div>
                    <div class="card-body">
                        <div class="carousel slide" id="carouselExampleControlsNoTouching" data-bs-touch="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active"><img class="d-block w-100"
                                        src="{{ asset('assets/images/slider/4.jpg') }}" alt="drawing-room"></div>
                                <div class="carousel-item"><img class="d-block w-100"
                                        src="{{ asset('assets/images/slider/8.jpg') }}" alt="drawing-room"></div>
                                <div class="carousel-item"><img class="d-block w-100"
                                        src="{{ asset('assets/images/slider/6.jpg') }}" alt="drawing-room"></div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev"><span
                                    class="carousel-control-prev-icon" aria-hidden="true"></span><span
                                    class="visually-hidden">Previous</span></button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next"><span
                                    class="carousel-control-next-icon" aria-hidden="true"></span><span
                                    class="visually-hidden">Next</span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-12">
                <div class="card height-equal">
                    <div class="card-header pb-0">
                        <h4>Dark Variant</h4>
                        <p class="f-m-light mt-1">Add <code>.carousel-dark</code> to the <code>.carousel</code> for darker
                            controls, indicators, and captions. </p>
                    </div>
                    <div class="card-body">
                        <div class="carousel carousel-dark slide" id="carouselExampleDark" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button class="active" type="button" data-bs-target="#carouselExampleDark"
                                    data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000"><img class="d-block w-100"
                                        src="{{ asset('assets/images/slider/1.jpg') }}" alt="drawing-room">
                                    <div class="carousel-caption d-none d-md-block carousel-opacity">
                                        <h3>We decorate our homes</h3>
                                        <p>If you have been dreaming about bringing your living room together, our designers
                                            are here to help. Come see what we can do for your space.</p>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="2000"><img class="d-block w-100"
                                        src="{{ asset('assets/images/slider/3.jpg') }}" alt="drawing-room">
                                    <div class="carousel-caption d-none d-md-block carousel-opacity">
                                        <h3>This couch is a great topic of conversation.</h3>
                                        <p>A sofa is the ideal spot to enjoy a movie, nod off, and wake up.</p>
                                    </div>
                                </div>
                                <div class="carousel-item"><img class="d-block w-100"
                                        src="{{ asset('assets/images/slider/6.jpg') }}" alt="drawing-room">
                                    <div class="carousel-caption d-none d-md-block carousel-opacity">
                                        <h3>Sometimes all you really need to unwind is a comfortable couch.</h3>
                                        <p>A house you can create with your friends is a great place.</p>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                                data-bs-slide="prev"><span class="carousel-control-prev-icon"
                                    aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                                data-bs-slide="next"><span class="carousel-control-next-icon"
                                    aria-hidden="true"></span><span class="visually-hidden">Next</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/owlcarousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/owlcarousel/owl-custom.js') }}"></script>
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection
