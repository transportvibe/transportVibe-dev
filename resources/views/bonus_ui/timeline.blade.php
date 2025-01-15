@extends('layouts.simple.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 ps-0">
                    <h3>Timeline</h3>
                </div>
                <div class="col-sm-6 pe-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Timeline</li>
                        <li class="breadcrumb-item active">Timeline 1</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 box-col-6 notification main-timeline">
                <div class="card height-equal">
                    <div class="card-header">
                        <h4>Basic Timeline </h4>
                        <p class="f-m-light mt-1">
                            Use the <code>.main-basic-timeline </code>class through made basic timeline.</p>
                    </div>
                    <div class="card-body dark-timeline">
                        <ul>
                            <li class="d-flex">
                                <div class="timeline-dot-primary"></div>
                                <div class="w-100 ms-3">
                                    <p class="d-flex justify-content-between mb-2"><span
                                            class="date-content light-background txt-dark">2 Feb 2024</span><span>7:00 AM
                                        </span></p>
                                    <h6>CONFERENCE WITH CLIENT<span class="dot-notification"></span></h6>
                                    <p class="f-light">At noon today, there will be a meeting with a UK client.</p>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="timeline-dot-secondary"></div>
                                <div class="w-100 ms-3">
                                    <p class="d-flex justify-content-between mb-2"><span
                                            class="date-content light-background txt-dark">22 March 2024</span><span>3:45 PM
                                        </span></p>
                                    <h6>DISCUSSION WITH MARKETING TEAM<span class="dot-notification"></span></h6>
                                    <p class="f-light">discussion with the marketing staff on the success of the most recent
                                        project</p>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="timeline-dot-success"></div>
                                <div class="w-100 ms-3">
                                    <p class="d-flex justify-content-between mb-2"><span
                                            class="date-content light-background txt-dark">16 May 2024</span><span>1:22
                                            AM</span></p>
                                    <h6>INVEST IN A NEW HOSTING PLAN<span class="dot-notification"></span></h6>
                                    <p class="f-light">today at 2 pm AM, purchase a new hosting package as agreed upon with
                                        the management team.</p>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="timeline-dot-warning"></div>
                                <div class="w-100 ms-3">
                                    <p class="d-flex justify-content-between mb-2"><span
                                            class="date-content light-background txt-dark">23 Nov 2024</span><span>6:56 AM
                                        </span></p>
                                    <h6>DISCUSSION WITH DESIGNER TEAM<span class="dot-notification"></span></h6>
                                    <p class="f-light">discussion with the designer employee on the success of the most
                                        recent project.</p>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="timeline-dot-info"></div>
                                <div class="w-100 ms-3">
                                    <p class="d-flex justify-content-between mb-2"><span
                                            class="date-content light-background txt-dark">12 Dec 2024</span><span>12:05
                                            AM</span></p>
                                    <h6>DISCUSSION WITH NEW THEME LAUNCH <span class="dot-notification"></span></h6>
                                    <p class="f-light">discussion with the how many themes made in our portfolio.</p>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="timeline-dot-danger"></div>
                                <div class="w-100 ms-3">
                                    <p class="d-flex justify-content-between mb-2"><span
                                            class="date-content light-background txt-dark">02 Jan 2024</span><span>6:56
                                            AM</span></p>
                                    <h6>PURCHASE NEW CHAIRS FOR OFFICE <span class="dot-notification"></span></h6>
                                    <p class="f-light">online purchase new chairs for office </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h4>Hovering Timeline </h4>
                        <p class="f-m-light mt-1">
                            Use the <code>.square-timeline</code> main class through create new variations of timeline.</p>
                    </div>
                    <div class="card-body">
                        <ul class="square-timeline">
                            <li class="timeline-event">
                                <label class="timeline-event-icon"></label>
                                <div class="timeline-event-wrapper">
                                    <p class="timeline-thumbnail">January 2024- Annual Function</p>
                                    <h5 class="f-w-500">Location</h5>
                                    <div class="text-muted">Largo Febo,10225012-Calvisano BS</div>
                                    <p class="pt-3 mb-4">What a dynamic performance by the eighth-grade students, Let's
                                        welcome the ninth-grade kid to the stage.</p>
                                </div>
                            </li>
                            <li class="timeline-event">
                                <label class="timeline-event-icon"></label>
                                <div class="timeline-event-wrapper">
                                    <p class="timeline-thumbnail">March 2024 - Fresher Interview</p>
                                    <h5 class="f-w-500">Ofwrrior Company</h5>
                                    <div class="text-muted">A fresher's interview is to be conducted
                                        <div class="list-group main-lists-content"><a
                                                class="list-group-item list-group-item-action border-0 p-0 mb-4"
                                                href="#" aria-current="true">
                                                <div class="d-flex w-100 justify-content-between align-items-center">
                                                    <div class="list-wrapper"><img class="list-img"
                                                            src="{{ asset('assets/images/user/1.jpg') }}" alt="profile">
                                                        <div class="list-content">
                                                            <h6>Molly Boake</h6>
                                                            <p>MollyBoake@rhyta.com</p>
                                                        </div>
                                                    </div>
                                                    <div class="timeline-icon"><i class="icon-facebook"></i><i
                                                            class="icon-google"> </i><i class="icon-twitter-alt"></i></div>
                                                </div>
                                                <p class="mb-1">Next step is to choose a tone of voice for your content
                                                    type.</p>
                                            </a></div>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-event">
                                <label class="timeline-event-icon"></label>
                                <div class="timeline-event-wrapper">
                                    <p class="timeline-thumbnail">December 2024 - Meetup</p>
                                    <h5 class="f-w-500">US Meeting</h5>
                                    <div class="text-muted">2209 Leverton Cove RoadSpringfield, MA 01109
                                        <div class="designer-details">
                                            <div class="designer-profile">
                                                <div class="designer-wrap"><img class="designer-img"
                                                        src="{{ asset('assets/images/avtar/4.jpg') }}" alt="profile">
                                                    <div class="designer-content">
                                                        <h6>Lillian J. Goodfellow</h6>
                                                        <p>239-664-7751</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="designer-profile">
                                                <div class="designer-wrap"><img class="designer-img"
                                                        src="{{ asset('assets/images/avtar/7.jpg') }}" alt="profile">
                                                    <div class="designer-content">
                                                        <h6>Carolyn A. Sutton</h6>
                                                        <p>218-793-6609</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-5 notification box-col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Variation Timeline </h4>
                        <p class="f-m-light mt-1">
                            Use the <code>.activity-dot-primary </code>through rounded animations.</p>
                    </div>
                    <div class="card-body dark-timeline">
                        <ul>
                            <li class="d-flex">
                                <div class="activity-dot-primary"></div>
                                <div class="w-100 ms-3">
                                    <p class="d-flex justify-content-between mb-2"><span
                                            class="date-content light-background txt-dark">8th March, 2024 </span><span>1
                                            day ago</span></p>
                                    <h6>Updated Product<span class="dot-notification"></span></h6>
                                    <p class="f-light">Quisque a consequat ante sit amet magna...</p>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="activity-dot-warning"></div>
                                <div class="w-100 ms-3">
                                    <p class="d-flex justify-content-between mb-2"><span
                                            class="date-content light-background txt-dark">5th Feb, 2024
                                        </span><span>Today</span></p>
                                    <h6>Added Bew Items<span class="dot-notification"></span></h6><span
                                        class="f-light">Quisque a consequat ante sit amet magna...</span>
                                    <div class="recent-images">
                                        <ul>
                                            <li>
                                                <div class="recent-img-wrap"><img
                                                        src="{{ asset('assets/images/dashboard-2/product/12.png') }}"
                                                        alt="chair">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="recent-img-wrap"><img
                                                        src="{{ asset('assets/images/dashboard-2/product/13.png') }}"
                                                        alt="chair">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="recent-img-wrap"><img
                                                        src="{{ asset('assets/images/dashboard-2/product/14.png') }}"
                                                        alt="men t-shirt"></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex pb-0">
                                <div class="activity-dot-secondary"></div>
                                <div class="w-100 ms-3">
                                    <p class="d-flex justify-content-between mb-2"><span
                                            class="date-content light-background txt-dark">20th Sep, 2024
                                        </span><span>12:00 PM</span></p>
                                    <h6>Tello just like your product<span class="dot-notification"></span></h6>
                                    <p>Quisque a consequat ante sit amet magna...</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xxl-8 col-xl-7 box-col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Horizontal Timeline </h4>
                        <p class="f-m-light mt-1">
                            Use the <code>.square-timeline</code> main class through create new variations of timeline.</p>
                    </div>
                    <div class="card-body">
                        <div class="list-inline events timeline-list timeline-border row">
                            <div class="col-xxl-4 col-sm-6">
                                <div>
                                    <div class="list-inline-item event-list">
                                        <div class="px-4">
                                            <div class="event-date alert-light-primary txt-primary">1 Jan</div>
                                            <h5 class="f-w-500">Conference </h5>
                                            <p class="text-muted">Conferences are intended to bring individuals with
                                                similar interests together to discuss problems.</p>
                                            <div class="read-more-btn"><a class="btn btn-primary px-3"
                                                    href="#">Read more</a></div>
                                        </div>
                                    </div>
                                    <div class="vertical-line"></div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-sm-6">
                                <div>
                                    <div class="list-inline-item event-list">
                                        <div class="px-4">
                                            <div class="event-date alert-light-success txt-success">4 Feb</div>
                                            <h5 class="f-w-500">Meet-up</h5>
                                            <p class="text-muted">You may connect with males from all around the world
                                                using the friend-forward.</p>
                                            <div class="read-more-btn"><a class="btn btn-primary px-3"
                                                    href="#">Read more</a></div>
                                        </div>
                                    </div>
                                    <div class="vertical-line"></div>
                                </div>
                            </div>
                            <div class="col-xxl-4 horizontal-timeline">
                                <div>
                                    <div class="list-inline-item event-list">
                                        <div class="px-4">
                                            <div class="event-date alert-light-danger txt-danger">2 May</div>
                                            <h5 class="f-w-500">Meeting</h5>
                                            <p class="text-muted">If several languages coalesce the grammar of the
                                                resulting simple and regular social networking platform.</p>
                                            <div class="read-more-btn"><a class="btn btn-primary px-3"
                                                    href="#">Read more</a></div>
                                        </div>
                                    </div>
                                    <div class="vertical-line"></div>
                                </div>
                            </div>
                        </div>
                        <div class="list-inline events border-0 timeline-list row">
                            <div class="col-xxl-4 col-sm-6">
                                <div>
                                    <div class="vertical-line"></div>
                                    <div class="list-inline-item event-list">
                                        <div class="px-4">
                                            <div class="event-date alert-light-primary txt-primary">1 Jan</div>
                                            <h5 class="f-w-500">Conference </h5>
                                            <p class="text-muted">A gathering of two or more people to talk about issues of
                                                interest.</p>
                                            <div><a class="btn btn-primary px-3" href="#">Read more</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-sm-6">
                                <div>
                                    <div class="vertical-line"> </div>
                                    <div class="list-inline-item event-list">
                                        <div class="px-4">
                                            <div class="event-date alert-light-danger txt-danger">2 May</div>
                                            <h5 class="f-w-500">Meeting</h5>
                                            <p class="text-muted">If several languages coalesce the grammar of the
                                                resulting simple and regular social networking platform.</p>
                                            <div><a class="btn btn-primary px-3" href="#">Read more</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 horizontal-timeline">
                                <div>
                                    <div class="vertical-line"></div>
                                    <div class="list-inline-item event-list">
                                        <div class="px-4">
                                            <div class="event-date alert-light-warning txt-warning">7 Dec</div>
                                            <h5 class="f-w-500">Launch Theme</h5>
                                            <p class="text-muted">Responsive Website is the approach that suggests website
                                                design and development should respond.</p>
                                            <div><a class="btn btn-primary px-3" href="#">Read more</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 box-col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Timeline</h4>
                        <p class="f-m-light mt-1">
                            This is a Riho timeline chart.</p>
                    </div>
                    <div class="card-body">
                        <!-- cd-timeline Start-->
                        <section class="cd-container" id="cd-timeline">
                            <div class="cd-timeline-block">
                                <div class="cd-timeline-img cd-picture bg-primary"><i class="icon-pencil-alt"></i></div>
                                <div class="cd-timeline-content">
                                    <div class="timeline-wrapper">
                                        <div class="badge bg-warning">app-ideas</div>
                                    </div>
                                    <h5 class="f-w-500 m-0">Established new the app-ideas repository.</h5>
                                    <p class="mb-0">
                                        developers who are just beginning their learning process. those who often
                                        concentrate on developing programmes with a user interface.</p>
                                    <div class="time-content pt-2"><i class="icon-github"></i>
                                        <h6>View it on Github </h6>
                                    </div><span class="cd-date">February 02 2024</span>
                                </div>
                            </div>
                            <div class="cd-timeline-block">
                                <div class="cd-timeline-img bg-danger"> <i class="icon-youtube"></i></div>
                                <div class="cd-timeline-content">
                                    <div class="timeline-wrapper">
                                        <div class="badge bg-danger">Blog</div>
                                    </div>
                                    <h5 class="f-w-500 m-0">Implemented the program for weekly code challenges.</h5>
                                    <p class="mb-0">
                                        Challenges <em class="txt-danger">help you build problem-solving skills, better
                                            understand the programming. </em>If you want to improve your skills in
                                        programming. </p>
                                    <div class="ratio ratio-21x9 m-t-20">
                                        <iframe src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"
                                            allowfullscreen=""></iframe>
                                    </div><span class="cd-date">March 12 2024</span>
                                </div>
                            </div>
                            <div class="cd-timeline-block">
                                <div class="cd-timeline-img cd-picture bg-success"><i class="icon-image"></i></div>
                                <div class="cd-timeline-content">
                                    <div class="timeline-wrapper">
                                        <div class="badge bg-info">Designer</div>
                                    </div>
                                    <h5 class="f-w-500 m-0">Research about most recent design trends.</h5>
                                    <p class="mb-0">
                                        Spend some time looking up current design trend. </p>
                                    <div class="carousel slide" id="carouselExampleIndicators" data-bs-ride="true">
                                        <div class="carousel-indicators">
                                            <button class="active" type="button"
                                                data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                                aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators"
                                                data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators"
                                                data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        </div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active"><img class="d-block w-100"
                                                    src="{{ asset('assets/images/banner/2.jpg') }}" alt="office-work">
                                            </div>
                                            <div class="carousel-item"><img class="d-block w-100"
                                                    src="{{ asset('assets/images/banner/1.jpg') }}" alt="office-work">
                                            </div>
                                            <div class="carousel-item"><img class="d-block w-100"
                                                    src="{{ asset('assets/images/banner/3.jpg') }}" alt="office-work">
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button"
                                            data-bs-target="#carouselExampleIndicators" data-bs-slide="prev"><span
                                                class="carousel-control-prev-icon" aria-hidden="true"></span><span
                                                class="visually-hidden">Previous</span></button>
                                        <button class="carousel-control-next" type="button"
                                            data-bs-target="#carouselExampleIndicators" data-bs-slide="next"><span
                                                class="carousel-control-next-icon" aria-hidden="true"></span><span
                                                class="visually-hidden">Next</span></button>
                                    </div><span class="cd-date">April 23 2024</span>
                                </div>
                            </div>
                            <div class="cd-timeline-block">
                                <div class="cd-timeline-img cd-location bg-info"><i class="icon-pulse"></i></div>
                                <div class="cd-timeline-content">
                                    <div class="timeline-wrapper">
                                        <div class="badge bg-primary">Audio testing</div>
                                    </div>
                                    <h5 class="f-w-500 m-0">Musical trends and predictability</h5>
                                    <p class="mb-0">
                                        So, the next time you listen to music, you might or might not consider how it's
                                        actively altering your mood.</p>
                                    <audio controls="">
                                        <source src="{{ asset('assets/audio/horse.ogg') }}" type="audio/ogg">
                                    </audio><span class="cd-date">June 12 2024</span>
                                </div>
                            </div>
                            <div class="cd-timeline-block">
                                <div class="cd-timeline-img cd-location bg-secondary"><i class="icon-pin-alt"></i></div>
                                <div class="cd-timeline-content">
                                    <div class="timeline-wrapper">
                                        <div class="badge bg-success">Meet-up</div>
                                    </div>
                                    <h5 class="f-w-500 m-0">Web-designer's meet-up</h5>
                                    <p class="mb-0">
                                        Find nearby web designers to network with! A Web Design Meetup is a place where you
                                        can discuss tools. </p>
                                    <div class="time-content pt-2"><i class="icon-android"></i>
                                        <h6>Please! Meet-up</h6>
                                    </div><span class="cd-date">November 04 2024</span>
                                </div>
                            </div>
                            <div class="cd-timeline-block">
                                <div class="cd-timeline-img cd-movie bg-danger"><i class="icon-agenda"></i></div>
                                <div class="cd-timeline-content">
                                    <div class="timeline-wrapper">
                                        <div class="badge bg-warning">Resolutions</div>
                                    </div>
                                    <h5 class="f-w-500 m-0">My Resolutions for 2024</h5>
                                    <p class="mb-0">
                                        I'm determined to streamline, organism, systematism, realign, and embrace life in
                                        2024. </p>
                                    <div class="time-content pt-2"><i class="icon-write"></i>
                                        <h6>My Resolutions </h6>
                                    </div><span class="cd-date">December 31 2024</span>
                                </div>
                            </div>
                        </section>
                        <!-- cd-timeline Ends-->
                        <!-- Container-fluid ends  -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/timeline/timeline-v-1/main.js') }}"></script>
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
    <script src="{{ asset('assets/js/modernizr.js') }}"></script>
@endsection
