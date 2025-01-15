@extends('layouts.simple.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-sm-6 p-0">
                    <h3>Bootstrap Tabs</h3>
                </div>
                <div class="col-12 col-sm-6 p-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#breadcrumb-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Tabs</li>
                        <li class="breadcrumb-item active">Bootstrap Tabs</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header card-no-border pb-0">
                        <h4>Simple tabs</h4>
                        <p class="mt-1 f-m-light">Use the <code>.nav-link</code> with <code>.show </code>class to jump
                            particular tabs.</p>
                    </div>
                    <div class="card-body">
                        <ul class="simple-wrapper nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item"><a class="nav-link txt-primary" id="home-tab" data-bs-toggle="tab"
                                    href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a></li>
                            <li class="nav-item"><a class="nav-link active txt-primary" id="profile-tabs"
                                    data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                                    aria-selected="false">Profile</a></li>
                            <li class="nav-item"><a class="nav-link txt-primary" id="contact-tab" data-bs-toggle="tab"
                                    href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <p class="pt-3">Tabs have long been used to show alternative views of the same group of
                                    information tabs in software. Known as<em class="txt-danger"> “module tabs”</em>, these
                                    are still used today in web sites. For instance, airline companies such as Ryanair,
                                    easyJet and AirMalta use module tabs to enable the user to switch between bookings for
                                    flights, hotels and car hire.</p>
                            </div>
                            <div class="tab-pane fade show active" id="profile" role="tabpanel">
                                <div class="pt-3 mb-0">
                                    <div class="flex-space flex-wrap align-items-center"><img class="tab-img"
                                            src="{{ asset('assets/images/avtar/3.jpg') }}" alt="profile">
                                        <ul class="d-flex flex-column gap-1">
                                            <li> <strong>Visit Us:</strong> 2600 Hollywood Blvd,Florida, United States-33020
                                            </li>
                                            <li> <strong>Mail Us:</strong> contact@us@gmail.com</li>
                                            <li><strong>Contact Number: </strong> (954) 357-7760</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <ul class="pt-3 d-flex flex-column gap-1">
                                    <li>Us Technology offers web & mobile development solutions for all industry
                                        verticals.Include a short form using fields that'll help your business understand
                                        who's contacting them.</li>
                                    <li> <strong>Visit Us: </strong> 2600 Hollywood Blvd,Florida, United States- 33020</li>
                                    <li> <strong>Mail Us:</strong> contact@us@gmail.com</li>
                                    <li> <strong>Contact Number: </strong> (954) 357-7760</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header card-no-border pb-0">
                        <h4>Icons With Tabs</h4>
                        <p class="mt-1 f-m-light">Use the <code>.nav-link </code>with feather icons. And <code>.show</code>
                            class to tabs change.</p>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="icon-tab" role="tablist">
                            <li class="nav-item"><a class="nav-link active txt-secondary" id="icon-home-tab"
                                    data-bs-toggle="tab" href="#icon-home" role="tab" aria-controls="icon-home"
                                    aria-selected="true"> <i class="icofont icofont-ui-home"></i>Home</a></li>
                            <li class="nav-item"><a class="nav-link txt-secondary" id="profile-icon-tabs"
                                    data-bs-toggle="tab" href="#profile-icon" role="tab" aria-controls="profile-icon"
                                    aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Profile</a></li>
                            <li class="nav-item"><a class="nav-link txt-secondary" id="contact-icon-tab"
                                    data-bs-toggle="tab" href="#contact-icon" role="tab"
                                    aria-controls="contact-icon" aria-selected="false"><i
                                        class="icofont icofont-contacts"></i>Contact</a></li>
                        </ul>
                        <div class="tab-content" id="icon-tabContent">
                            <div class="tab-pane fade show active" id="icon-home" role="tabpanel"
                                aria-labelledby="icon-home-tab">
                                <p class="pt-3"> Not limited to any states, boundaries. All over India providing
                                    cutting-edge design and website development services for over 12 years. We provide end
                                    to end digital solutions, right from designing your website/application development:
                                    Domain, Web Hosting, Email Hosting Registration, Search Engine Optimization and other
                                    Internet Marketing, Renewal of Services timely and effectively.</p>
                            </div>
                            <div class="tab-pane fade" id="profile-icon" role="tabpanel">
                                <div class="pt-3 mb-0">
                                    <div class="flex-space flex-wrap align-items-center"><img class="tab-img"
                                            src="{{ asset('assets/images/avtar/7.jpg') }}" alt="profile">
                                        <ul class="d-flex flex-column gap-1">
                                            <li> <strong>Visit Us: </strong> 278 Green Avenue Oakland, CA 94612</li>
                                            <li><strong>Mail Us:</strong> MichaelMMcGowan@teleworm.us</li>
                                            <li><strong>Contact Number: </strong> 510-767-0025</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact-icon" role="tabpanel"
                                aria-labelledby="contact-icon-tab">
                                <p class="pt-3">Us Technology offers web & mobile development solutions for all industry
                                    verticals.Include a short form using fields that'll help your business understand who's
                                    contacting them. </p>
                                <div class="pt-3">
                                    <label class="form-label" for="exampleFormControlInput1">Email address</label>
                                    <input class="form-control" id="exampleFormControlInput" type="email"
                                        placeholder="youremail@gmail.com">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card height-equal">
                    <div class="card-header card-no-border pb-0">
                        <h4>Vertical Tabs</h4>
                        <p class="mt-1 f-m-light">Use the <code>#var-pills-tab</code> id thorough change vertical tabs.</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-xs-12">
                                <div class="nav flex-column nav-pills nav-success" id="ver-pills-tab" role="tablist"
                                    aria-orientation="vertical"><a class="f-w-600 nav-link" id="ver-pills-home-tab"
                                        data-bs-toggle="pill" href="#ver-pills-home" role="tab"
                                        aria-controls="ver-pills-home" aria-selected="true">Home</a><a
                                        class="f-w-600 nav-link active" id="ver-pills-components-tab"
                                        data-bs-toggle="pill" href="#ver-pills-components" role="tab"
                                        aria-controls="ver-pills-components" aria-selected="false">Components</a><a
                                        class="f-w-600 nav-link" id="ver-pills-pages-tab" data-bs-toggle="pill"
                                        href="#ver-pills-pages" role="tab" aria-controls="ver-pills-pages"
                                        aria-selected="false">Pages</a><a class="f-w-600 nav-link"
                                        id="ver-pills-settings-tab" data-bs-toggle="pill" href="#ver-pills-settings"
                                        role="tab" aria-controls="ver-pills-settings"
                                        aria-selected="false">Settings</a></div>
                            </div>
                            <div class="col-md-8 col-xs-12">
                                <div class="tab-content" id="ver-pills-tabContent">
                                    <div class="tab-pane fade" id="ver-pills-home" role="tabpanel"
                                        aria-labelledby="ver-pills-home-tab">
                                        <p>It was an easy decision.an affordable expense! Absolutely! we got peace of mind.
                                            Now, my time is spent on the<em class="txt-danger">“Sale”</em> and not on
                                            technology. Create product Builder tool is also pre-bundled in this template so
                                            that you can let the audience configure the product by themselves before placing
                                            the order.We are a small yet highly-skilled group of creative brains with a vast
                                            experience. Our team of web designers, online marketing experts, content
                                            writers, graphic professionals have completed numerous projects.</p>
                                    </div>
                                    <div class="tab-pane fade show active" id="ver-pills-components" role="tabpanel"
                                        aria-labelledby="ver-pills-components-tab">
                                        <ul class="d-flex flex-column gap-1">
                                            <li>
                                                If you are a business owner, your website is absolutely one of the most
                                                important tools you have in your arsenal to get more - and better - clients
                                                and customers or a good one from a great one? Here are 10 qualities that a
                                                great website will need. Whether or not you end up retaining makespace based
                                                web designers, you should find them helpful:</li>
                                            <li>
                                                --> Navigation</li>
                                            <li>--> Visual Design</li>
                                            <li>--> Web Friendly</li>
                                            <li>--> Conversion</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="ver-pills-pages" role="tabpanel"
                                        aria-labelledby="ver-pills-pages-tab">
                                        <ul class="d-flex flex-column gap-1">
                                            <li>Available pages in Theme: </li>
                                            <li><strong> Typography: </strong> Typography is the art of arranging letters
                                                and text in a way that makes the copy legible, clear, and visually appealing
                                                to the reader.</li>
                                            <li> <strong> Tooltip: </strong> A tooltip is a brief, informative message that
                                                appears when a user interacts with an element in a graphical user interface
                                                (GUI). </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="ver-pills-settings" role="tabpanel"
                                        aria-labelledby="ver-pills-settings-tab">
                                        <ul class="d-flex flex-column gap-1 p-sm-0 pt-2">
                                            <li><strong> Site purpose</strong> Like a mission statement, a website's purpose
                                                gives the primary reason for the site's existence in the world. Whether for
                                                education, advocacy, service provision, community organizing, etc.</li>
                                            <li><strong> Features</strong> It's important to figure out as many of these in
                                                advance as you can for the sake of a more coherent design. </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card height-equal">
                    <div class="card-header card-no-border pb-0">
                        <h4>Pills tabs</h4>
                        <p class="mt-1 f-m-light">Use the <code>data-bs-toggle="pill"</code> to tabs pill shape. And
                            mandatory for <code>.active </code> class.</p>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-pills nav-primary" id="pills-tab" role="tablist">
                            <li class="nav-item"><a class="f-w-600 nav-link" id="pills-aboutus-tab"
                                    data-bs-toggle="pill" href="#pills-aboutus" role="tab"
                                    aria-controls="pills-aboutus" aria-selected="true">About us</a></li>
                            <li class="nav-item"><a class="f-w-600 nav-link" id="pills-contactus-tab"
                                    data-bs-toggle="pill" href="#pills-contactus" role="tab"
                                    aria-controls="pills-contactus" aria-selected="false">Contact us</a></li>
                            <li class="nav-item"><a class="f-w-600 nav-link active" id="pills-blog-tab"
                                    data-bs-toggle="pill" href="#pills-blog" role="tab" aria-controls="pills-blog"
                                    aria-selected="false">Blog </a></li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade" id="pills-aboutus" role="tabpanel"
                                aria-labelledby="pills-aboutus-tab">
                                <p class="pt-3">The ultimate goal of every web design is to create a site that will reach
                                    its audience and be useful to them. In order to achieve that, it is necessary to
                                    befriend Google's mechanisms and algorithms. There is no use of a pretty website, if
                                    it's displayed on a 10th page of search results, because this way no one will ever find
                                    it. That brings us to the topic of Google's Website Ranking.Generally speaking, it's a
                                    list of pages and their keywords, sorted in the order of search results. The higher your
                                    place in the ranking is, the more people are likely to see your page.</p>
                            </div>
                            <div class="tab-pane fade" id="pills-contactus" role="tabpanel"
                                aria-labelledby="pills-contactus-tab">
                                <ul class="d-flex flex-column gap-1 pt-3">
                                    <li> Create professional web page design. Responsive, fully customizable with easy
                                        Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and
                                        other design elements, as well as content and images.</li>
                                    <li><strong>Visit Us: </strong> 4 Marigold Close, Glenmore Park, New South Wales, 2745
                                        Australia- 2745</li>
                                    <li> <strong>Mail Us:</strong> SamuelMario@armyspy.com</li>
                                    <li> <strong>Contact Number: </strong> (02) 4733 6337</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade show active" id="pills-blog" role="tabpanel"
                                aria-labelledby="pills-blog-tab">
                                <div class="pt-3 d-flex align-items-center gap-3 pills-blogger">
                                    <div class="blog-wrapper"> <img class="blog-img"
                                            src="{{ asset('assets/images/dashboard-2/headphones.png') }}"
                                            alt="head-phone"></div>
                                    <div class="blog-content">
                                        <p> </p><em class="txt-danger fw-bold">Smart headphones</em> — also called smart
                                        earbuds or hearable — are high-tech in-ear devices that do more than transmit audio.
                                        These headphones are usually wireless, and they can sync up with your phone, tablet,
                                        computer or other Bluetooth-enabled device. The main appeal of hearables is
                                        convenience, as they allow you to complete common tasks without directly accessing
                                        your phone or computer. Smart wireless headphones sync up to other devices using
                                        Bluetooth technology, and many of their features rely on data from your smartphone
                                        or computer.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header card-no-border pb-0">
                        <h4>Justify Tabs</h4>
                        <p class="mt-1 f-m-light">Use the <code>.nav-link</code> with <code>.active </code>class and set
                            content using flex property.</p>
                    </div>
                    <div class="card-body">
                        <div
                            class="card-header d-flex justify-content-between align-items-center flex-wrap gap-2 pb-2 p-0">
                            <p> <em class="txt-danger">Boho Profiles For New Employees:</em></p>
                            <ul class="nav nav-pills nav-warning" id="j-pills-tab" role="tablist">
                                <li class="nav-item"><a class="nav-link" id="j-pills-web-designer-tab"
                                        data-bs-toggle="pill" href="#j-pills-web-designer" role="tab"
                                        aria-controls="j-pills-web-designer" aria-selected="true"> Web designer</a></li>
                                <li class="nav-item"><a class="nav-link active" id="j-pills-UX-designer-tab"
                                        data-bs-toggle="pill" href="#j-pills-UX-designer" role="tab"
                                        aria-controls="j-pills-UX-designer" aria-selected="false">UX designer</a></li>
                                <li class="nav-item"><a class="nav-link" id="j-pills-IOT-developer-tab"
                                        data-bs-toggle="pill" href="#j-pills-IOT-developer" role="tab"
                                        aria-controls="j-pills-IOT-developer" aria-selected="false">IOT developer</a></li>
                            </ul>
                        </div>
                        <div class="card-body px-0 pb-0">
                            <div class="tab-content" id="j-pills-tabContent">
                                <div class="tab-pane fade" id="j-pills-web-designer" role="tabpanel"
                                    aria-labelledby="j-pills-web-designer-tab">
                                    <div class="designer-details">
                                        <div class="designer-profile">
                                            <div class="designer-wrap"><img class="designer-img"
                                                    src="{{ asset('assets/images/avtar/3.jpg') }}" alt="profile">
                                                <div class="designer-content">
                                                    <h6>Kathy M. Anderson</h6>
                                                    <p> 440-494-0729</p>
                                                </div>
                                            </div>
                                        </div>
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
                                        <div class="designer-profile">
                                            <div class="designer-wrap"><img class="designer-img"
                                                    src="{{ asset('assets/images/avtar/11.jpg') }}" alt="profile">
                                                <div class="designer-content">
                                                    <h6>Mary O. Miller</h6>
                                                    <p>720-744-0921</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="designer-profile">
                                            <div class="designer-wrap"><img class="designer-img"
                                                    src="{{ asset('assets/images/avtar/16.jpg') }}" alt="profile">
                                                <div class="designer-content">
                                                    <h6>Patricia H. Hummel</h6>
                                                    <p>314-445-1451</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="designer-profile">
                                            <div class="designer-wrap"><img class="designer-img"
                                                    src="{{ asset('assets/images/blog/4.jpg') }}" alt="profile">
                                                <div class="designer-content">
                                                    <h6>Minnie F. Evans</h6>
                                                    <p>718-740-8438</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade show active" id="j-pills-UX-designer" role="tabpanel"
                                    aria-labelledby="j-pills-UX-designer-tab">
                                    <div class="designer-details">
                                        <div class="designer-profile">
                                            <div class="designer-wrap"><img class="designer-img"
                                                    src="{{ asset('assets/images/blog/9.jpg') }}" alt="profile">
                                                <div class="designer-content">
                                                    <h6>Thomas A. Leroy</h6>
                                                    <p>305-539-6871</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="designer-profile">
                                            <div class="designer-wrap"><img class="designer-img"
                                                    src="{{ asset('assets/images/blog/12.png') }}" alt="profile">
                                                <div class="designer-content">
                                                    <h6>Mark S. Ward</h6>
                                                    <p>303-561-8880</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="designer-profile">
                                            <div class="designer-wrap"><img class="designer-img"
                                                    src="{{ asset('assets/images/blog/14.png') }}" alt="profile">
                                                <div class="designer-content">
                                                    <h6>Emily T. Hooper</h6>
                                                    <p>301-553-1836</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="designer-profile">
                                            <div class="designer-wrap"><img class="designer-img"
                                                    src="{{ asset('assets/images/blog/comment.jpg') }}" alt="profile">
                                                <div class="designer-content">
                                                    <h6>Natasha W. Watson</h6>
                                                    <p>267-605-4499</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="designer-profile">
                                            <div class="designer-wrap"><img class="designer-img"
                                                    src="{{ asset('assets/images/blog/9.jpg') }}" alt="profile">
                                                <div class="designer-content">
                                                    <h6>Jennifer A. Camacho</h6>
                                                    <p>770-527-7554</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="designer-profile">
                                            <div class="designer-wrap"><img class="designer-img"
                                                    src="{{ asset('assets/images/avtar/3.jpg') }}" alt="profile">
                                                <div class="designer-content">
                                                    <h6>Ann J. Strickland</h6>
                                                    <p>469-218-4678</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="j-pills-IOT-developer" role="tabpanel"
                                    aria-labelledby="j-pills-IOT-developer-tab">
                                    <div class="designer-details">
                                        <div class="designer-profile">
                                            <div class="designer-wrap"><img class="designer-img"
                                                    src="{{ asset('assets/images/avtar/11.jpg') }}" alt="profile">
                                                <div class="designer-content">
                                                    <h6>Jaclyn T. Duncan</h6>
                                                    <p>413-618-9222</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="designer-profile">
                                            <div class="designer-wrap"><img class="designer-img"
                                                    src="{{ asset('assets/images/avtar/16.jpg') }}" alt="profile">
                                                <div class="designer-content">
                                                    <h6>Christine H. Lin</h6>
                                                    <p>909-219-0342</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="designer-profile">
                                            <div class="designer-wrap"><img class="designer-img"
                                                    src="{{ asset('assets/images/avtar/3.jpg') }}" alt="profile">
                                                <div class="designer-content">
                                                    <h6>Ronnie S. Mountain</h6>
                                                    <p>978-426-9732</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="designer-profile">
                                            <div class="designer-wrap"><img class="designer-img"
                                                    src="{{ asset('assets/images/blog/12.png') }}" alt="profile">
                                                <div class="designer-content">
                                                    <h6>Louise A. Hilliard</h6>
                                                    <p>502-262-5600</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="designer-profile">
                                            <div class="designer-wrap"><img class="designer-img"
                                                    src="{{ asset('assets/images/blog/comment.jpg') }}" alt="profile">
                                                <div class="designer-content">
                                                    <h6>Kayla Hutt</h6>
                                                    <p>312-456-8275</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="designer-profile">
                                            <div class="designer-wrap"><img class="designer-img"
                                                    src="{{ asset('assets/images/blog/4.jpg') }}" alt="profile">
                                                <div class="designer-content">
                                                    <h6>Amber Cecil</h6>
                                                    <p>802-662-2407</p>
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
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header card-no-border pb-0">
                        <h4>Material Style Left Tabs</h4>
                        <p class="mt-1 f-m-light">Use the <code>.nav-link </code>with <code>.active </code>class through
                            jump another tabs.And <code>aria-orientation='vertical'</code>thorough change vertical tabs.
                        </p>
                    </div>
                    <div class="card-body">
                        <div class="tabs-responsive-side">
                            <div class="material-wrapper">
                                <div class="d-flex">
                                    <div class="nav flex-column nav-secondary border-tab nav-left" id="sideline-tab"
                                        role="tablist" aria-orientation="vertical"><a
                                            class="f-w-600 nav-link nav-effect active" id="sideline-home-tab"
                                            data-bs-toggle="pill" href="#sideline-home" role="tab"
                                            aria-controls="sideline-home" aria-selected="true">Home</a><a
                                            class="f-w-600 nav-link nav-effect" id="sideline-profile-tab"
                                            data-bs-toggle="pill" href="#sideline-profile" role="tab"
                                            aria-controls="sideline-profile" aria-selected="false">Profile</a><a
                                            class="f-w-600 nav-link nav-effect" id="sideline-messages-tab"
                                            data-bs-toggle="pill" href="#sideline-messages" role="tab"
                                            aria-controls="sideline-messages" aria-selected="false">Inbox</a><a
                                            class="f-w-600 nav-link nav-effect pb-0" id="sideline-settings-tab"
                                            data-bs-toggle="pill" href="#sideline-settings" role="tab"
                                            aria-controls="sideline-settings" aria-selected="false">Settings</a></div>
                                </div>
                                <div class="material-content">
                                    <div class="tab-content" id="sideline-tabContent">
                                        <div class="tab-pane fade show active" id="sideline-home" role="tabpanel"
                                            aria-labelledby="sideline-home-tab">
                                            <p>This product is meant for educational purposes only. Any resemblance to real
                                                persons, living or dead is purely coincidental. Void where prohibited. Some
                                                assembly required. List each check separately by bank number. Batteries not
                                                included.Google Web Designer gives you the power to create beautiful and
                                                compelling videos, images and HTML5 ads. Use animation and interactive
                                                elements to build out your creative vision, then scale your content for
                                                different sizes or audiences with responsive and dynamic workflows.</p>
                                        </div>
                                        <div class="tab-pane fade" id="sideline-profile" role="tabpanel"
                                            aria-labelledby="sideline-profile-tab">
                                            <p class="mb-0"></p>
                                            <div class="flex-space flex-wrap align-items-center"><img class="tab-img"
                                                    src="{{ asset('assets/images/ecommerce/08.jpg') }}" alt="profile">
                                                <p><strong> Name: </strong>Jully Catlin<br><strong>Visit Us: </strong>50006
                                                    Ehrenberg/Parker,Arkansas-85334<br><strong>Mail
                                                        Us:</strong>hello.@gmail.com<br><strong>Contact Number:
                                                    </strong>(928) 923-7940</p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="sideline-messages" role="tabpanel"
                                            aria-labelledby="sideline-messages-tab">
                                            <div class="card-body p-0">
                                                <div class="main-inbox">
                                                    <div class="header-inbox justify-content-start gap-2">
                                                        <div class="header-left-inbox">
                                                            <div class="inbox-img"><img
                                                                    src="{{ asset('assets/images/ecommerce/07.jpg') }}"
                                                                    alt="profile"></div>
                                                        </div>
                                                        <div class="inbox-content">
                                                            <h4>Dalbult Caslin </h4>
                                                            <p class="text-muted">stroman.rogers@gmail.com</p>
                                                        </div>
                                                    </div>
                                                    <div class="body-inbox mt-2">
                                                        <div class="body-h-wrapper"><i
                                                                class="me-2 tab-space icofont icofont-star"></i><em>Compare
                                                                Prices Find the Best Computer Assessors Fronted Issue.</em>
                                                        </div>
                                                        <p class="pt-2">Site speed and design are two of the most
                                                            important ranking factors Google takes into consideration, as
                                                            they have the biggest effect of customer staying on site as the
                                                            website respond faster.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="sideline-settings" role="tabpanel"
                                            aria-labelledby="sideline-settings-tab">
                                            <p><strong> In this situation, you would probably do two things:</strong> exit
                                                the page, or look for the trusty search bar. If you decide to stick around,
                                                a proper search function should take your query and send you to your
                                                destination. Problem solved. It's not a perfect experience, but it's a hard
                                                one to avoid on larger websites that simply can't link to every piece of
                                                content from the homepage.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header card-no-border pb-0">
                        <h4>Material Style Tabs</h4>
                        <p class="mt-1 f-m-light">Use the <code>.nav-link </code>with <code>.active </code>class through
                            access new tabs. And icons of design for attractive webpage.</p>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs border-tab border-0 mb-0 nav-danger" id="topline-tab" role="tablist">
                            <li class="nav-item"><a class="nav-link active nav-border pt-0 txt-danger nav-danger"
                                    id="topline-top-user-tab" data-bs-toggle="tab" href="#topline-top-user"
                                    role="tab" aria-controls="topline-top-user" aria-selected="true"><i
                                        class="icofont icofont-man-in-glasses"></i>User</a></li>
                            <li class="nav-item"><a class="nav-link nav-border txt-danger nav-danger"
                                    id="topline-top-description-tab" data-bs-toggle="tab" href="#topline-top-description"
                                    role="tab" aria-controls="topline-top-description" aria-selected="false"><i
                                        class="icofont icofont-file-document"></i>Description</a></li>
                            <li class="nav-item"><a class="nav-link nav-border txt-danger nav-danger"
                                    id="topline-top-review-tab" data-bs-toggle="tab" href="#topline-top-review"
                                    role="tab" aria-controls="topline-top-review" aria-selected="false"><i
                                        class="icofont icofont-star"></i>Review</a></li>
                        </ul>
                        <div class="tab-content" id="topline-tabContent">
                            <div class="tab-pane fade show active" id="topline-top-user" role="tabpanel"
                                aria-labelledby="topline-top-user-tab">
                                <div class="card-body px-0 pb-0">
                                    <div class="user-header pb-2">
                                        <h6 class="fw-bold">User Details:</h6>
                                    </div>
                                    <div class="user-content">
                                        <div class="table-responsive custom-scrollbar">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Country</th>
                                                        <th scope="col">Contact No</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Neha</td>
                                                        <td>India </td>
                                                        <td>5698741236</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>Jacklin</td>
                                                        <td>Thailand</td>
                                                        <td>7800030320</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="topline-top-description" role="tabpanel"
                                aria-labelledby="topline-top-description-tab">
                                <div class="card-body px-0 pb-0">
                                    <div class="user-header pb-2">
                                        <h6 class="fw-bold">Description:</h6>
                                    </div>
                                    <div class="user-content">
                                        <div class="table-responsive custom-scrollbar">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Technology</th>
                                                        <th scope="col">Interest </th>
                                                        <th scope="col">Salary Expected </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Web Designer</td>
                                                        <td>HTML,CSS,JS,SCSS</td>
                                                        <td>45000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>UX Designer</td>
                                                        <td>Figma,Photoshop,craft</td>
                                                        <td>20000</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="topline-top-review" role="tabpanel"
                                aria-labelledby="topline-top-review-tab">
                                <div class="card-body px-0 pb-0">
                                    <div class="user-header pb-2">
                                        <h6 class="fw-bold">Review:</h6>
                                    </div>
                                    <div class="user-content">
                                        <div class="table-responsive custom-scrollbar">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Country</th>
                                                        <th scope="col">Rating </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Neha</td>
                                                        <td>India </td>
                                                        <td> <i class="ico-color icofont icofont-star"></i><i
                                                                class="ico-color icofont icofont-star"></i><i
                                                                class="ico-color icofont icofont-star"></i><i
                                                                class="ico-color icofont icofont-star"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Irfan</td>
                                                        <td>India</td>
                                                        <td> <i class="ico-color icofont icofont-star"></i><i
                                                                class="ico-color icofont icofont-star"></i><i
                                                                class="ico-color icofont icofont-star"></i></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header card-no-border pb-0">
                        <h4>Border Tabs </h4>
                        <p class="mt-1 f-m-light">Use the <code>.nav-link </code>with <code>.active </code>class. And hover
                            effect added on bottom border styles.</p>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs border-tab mb-0" id="bottom-tab" role="tablist">
                            <li class="nav-item"><a class="nav-link nav-border txt-info tab-info pt-0"
                                    id="bottom-home-tab" data-bs-toggle="tab" href="#bottom-home" role="tab"
                                    aria-controls="bottom-home" aria-selected="true"><i class="icofont icofont-ui-home">
                                    </i>Home</a></li>
                            <li class="nav-item"><a class="nav-link nav-border txt-info tab-info active"
                                    id="bottom-inbox-tab" data-bs-toggle="tab" href="#bottom-inbox" role="tab"
                                    aria-controls="bottom-inbox" aria-selected="false"><i
                                        class="icofont icofont-ui-message"></i>Inbox</a></li>
                            <li class="nav-item"><a class="nav-link nav-border txt-info tab-info" id="bottom-contact-tab"
                                    data-bs-toggle="tab" href="#bottom-contact" role="tab"
                                    aria-controls="bottom-contact" aria-selected="false"><i
                                        class="icofont icofont-man-in-glasses"></i>Contact</a></li>
                        </ul>
                        <div class="tab-content" id="bottom-tabContent">
                            <div class="tab-pane fade" id="bottom-home" role="tabpanel"
                                aria-labelledby="bottom-home-tab">
                                <p class="pt-3">A navigation bar is a particularly important feature because it allows
                                    visitors to quickly and easily find <em class="txt-danger">important pages on your
                                        website,</em> like your blog, product pages, pricing, contact info, and
                                    documentation. This improves the chances of visitors browsing your site longer, which
                                    can boost your page views and reduce your bounce rate.Create product Builder tool is
                                    also pre-bundled in this template so that you can let the audience configure the product
                                    by themselves before placing the order.</p>
                            </div>
                            <div class="tab-pane fade show active" id="bottom-inbox" role="tabpanel"
                                aria-labelledby="bottom-inbox-tab">
                                <div class="card-body pb-0">
                                    <div class="main-inbox">
                                        <div class="header-inbox">
                                            <div class="header-left-inbox">
                                                <div class="inbox-img"><img
                                                        src="{{ asset('assets/images/ecommerce/06.jpg') }}"
                                                        alt="profile"></div>
                                                <div class="inbox-content">
                                                    <h4>Dalbult Caslin </h4>
                                                    <p class="text-muted">stroman.rogers@gmail.com</p>
                                                </div>
                                            </div>
                                            <ul class="header-right-inbox">
                                                <li>
                                                    <p>8 JAN 11:30PM</p>
                                                </li>
                                                <li> <i class="txt-danger icofont icofont-ui-delete"></i></li>
                                                <li> <i class="icofont icofont-telegram"></i></li>
                                            </ul>
                                        </div>
                                        <div class="body-inbox mt-2">
                                            <div class="body-h-wrapper"><i
                                                    class="me-2 tab-space icofont icofont-star"></i><em>Compare Prices Find
                                                    the Best Computer Assessors Fronted Issue.</em></div>
                                            <p class="pt-2">Site speed and design are two of the most important ranking
                                                factors Google takes into consideration, as they have the biggest effect of
                                                customer staying on site as the website respond faster.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="bottom-contact" role="tabpanel"
                                aria-labelledby="bottom-contact-tab">
                                <div class="card-body px-0 pb-0">
                                    <div class="form">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleFormControlInput1">Email address</label>
                                            <input class="form-control" id="exampleFormControlInput1" type="email"
                                                placeholder="youremail@gmail.com">
                                        </div>
                                        <div class="mb-0">
                                            <label class="form-label" for="exampleFormControlTextarea1">Example
                                                textarea</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection
