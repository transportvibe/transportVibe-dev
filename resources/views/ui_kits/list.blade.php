@extends('layouts.simple.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-sm-6 p-0">
                    <h3>Lists</h3>
                </div>
                <div class="col-12 col-sm-6 p-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#breadcrumb-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ui Kits</li>
                        <li class="breadcrumb-item active">Lists</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header card-no-border pb-0">
                        <h4>Default Lists </h4>
                        <p class="f-m-light mt-1">
                            Use the <code>.list-group </code>define the list of items. and used <code>.list-group-item
                            </code>to indicate the current content.</p>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item"> <i class="icofont icofont-arrow-right"></i>Logo Design</li>
                            <li class="list-group-item"> <i class="icofont icofont-arrow-right"></i>Web Design & Development
                            </li>
                            <li class="list-group-item"> <i class="icofont icofont-arrow-right"></i>E-Commerce</li>
                            <li class="list-group-item"> <i class="icofont icofont-arrow-right"></i>SEO</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header card-no-border pb-0">
                        <h4>Active Lists </h4>
                        <p class="f-m-light mt-1">
                            Use<code>.active </code>to a<code>.list-group-item</code> to indicate the current active.</p>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item active bg-warning-light" aria-current="true"><i
                                    class="icofont icofont-arrow-right"> </i>UI Kits</li>
                            <li class="list-group-item"><i class="icofont icofont-arrow-right"> </i>Wow Animations</li>
                            <li class="list-group-item"> <i class="icofont icofont-arrow-right"> </i>Apex Charts</li>
                            <li class="list-group-item"><i class="icofont icofont-arrow-right"> </i>Starter Kits</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12">
                <div class="card">
                    <div class="card-header card-no-border pb-0">
                        <h4>Flush Lists</h4>
                        <p class="f-m-light mt-1">
                            Use <code> .list-group-flush</code> to remove some borders and rounded corners to render list
                            group items.</p>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="icofont icofont-arrow-right"> </i>PRODUCT</li>
                            <li class="list-group-item"><i class="icofont icofont-arrow-right"> </i>PRODUCT DETAILS </li>
                            <li class="list-group-item"><i class="icofont icofont-arrow-right"> </i>CART </li>
                            <li class="list-group-item"><i class="icofont icofont-arrow-right"> </i>CHECKOUT</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-sm-12 box-col-6">
                <div class="card height-equal">
                    <div class="card-header card-no-border pb-0">
                        <h4>Contextual classes</h4>
                        <p class="f-m-light mt-1">Use contextual classes to style list items with a stateful background and
                            color.<code>.list-light-*</code> and <code>txt-*</code>.</p>
                    </div>
                    <div class="card-body">
                        <div class="list-group"><a class="list-group-item list-group-item-action list-light-primary"
                                href="#">This is Primary bg you can use <em
                                    class="txt-primary f-w-800">.list-light-primary</em> class.</a><a
                                class="list-group-item list-group-item-action list-light-secondary" href="#">This is
                                Secondary bg you can use <em class="txt-secondary f-w-800">.list-light-secondary</em>
                                class.</a><a class="list-group-item list-group-item-action list-light-success"
                                href="#">This is Success bg you can use <em
                                    class="txt-success f-w-800">.list-light-success</em> class.</a><a
                                class="list-group-item list-group-item-action list-light-danger" href="#">This is
                                Danger bg you can use<em class="txt-danger f-w-800">.list-light-danger</em> class.</a><a
                                class="list-group-item list-group-item-action list-light-warning" href="#">This is
                                Warning bg you can use <em class="txt-warning f-w-800">.list-light-warning</em> class.</a><a
                                class="list-group-item list-group-item-action list-light-info" href="#">This is Info
                                bg you can use <em class="txt-info f-w-800">.list-light-info</em> class.</a><a
                                class="list-group-item list-group-item-action list-light-white" href="#">This is White
                                bg you can use <em class="txt-white f-w-800">.list-light-white</em> class.</a><a
                                class="list-group-item list-group-item-action list-light-dark" href="#">This is White
                                bg you can use <em class="txt-white f-w-800">.list-light-dark</em> class.</a></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-12 box-col-6">
                <div class="card height-equal">
                    <div class="card-header card-no-border pb-0">
                        <h4>Horizontal Lists</h4>
                        <p class="f-m-light mt-1">Use <code>.list-group-horizontal</code>to change the layout of list group
                            items from vertical to horizontal across all
                            breakpoints.<code>.list-group-horizontal-[sm/md/lg/xl/xxl]</code>.</p>
                    </div>
                    <div class="card-body">
                        <div class="horizontal-list-wrapper dark-list">
                            <ul class="fw-bold list-group list-group-horizontal-sm pb-2">
                                <li class="list-group-item border-left-primary">Product </li>
                                <li class="list-group-item">Product details</li>
                                <li class="list-group-item">Pricing</li>
                                <li class="list-group-item">Payment details</li>
                                <li class="list-group-item">Checkout </li>
                                <li class="list-group-item">Mega options </li>
                            </ul>
                            <ul class="fw-bold list-group list-group-horizontal-md pb-2">
                                <li class="list-group-item border-left-secondary">Basic table</li>
                                <li class="list-group-item">Sizing table </li>
                                <li class="list-group-item">Border table</li>
                                <li class="list-group-item">Basic inputs </li>
                                <li class="list-group-item">Form validations</li>
                            </ul>
                            <ul class="fw-bold list-group list-group-horizontal-lg pb-2">
                                <li class="list-group-item border-left-warning">Flat style </li>
                                <li class="list-group-item">Edge style </li>
                                <li class="list-group-item">Button group</li>
                                <li class="list-group-item">Rating</li>
                                <li class="list-group-item">Crypto</li>
                            </ul>
                            <ul class="fw-bold list-group list-group-horizontal-xl pb-2">
                                <li class="list-group-item border-left-success">Blog </li>
                                <li class="list-group-item">Blog details </li>
                                <li class="list-group-item">Blog single </li>
                                <li class="list-group-item">Order history </li>
                            </ul>
                            <ul class="fw-bold list-group list-group-horizontal-xxl">
                                <li class="list-group-item border-left-info">Gallery grid </li>
                                <li class="list-group-item">Gallery desc</li>
                                <li class="list-group-item">Masonry Desc</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-no-border pb-0">
                        <h4>Custom Content Lists</h4>
                        <p class="f-m-light mt-1">Use the <code>.list-group-item</code> through make custom design of all
                            lists.</p>
                    </div>
                    <div class="card-body">
                        <div class="list-group main-lists-content"><a
                                class="list-group-item list-group-item-action active bg-primary" href="#"
                                aria-current="true">
                                <div class="d-flex w-100 justify-content-between align-items-center">
                                    <div class="list-wrapper"><img class="list-img"
                                            src="{{ asset('assets/images/user/1.jpg') }}" alt="profile">
                                        <div class="list-content">
                                            <h5 class="txt-light">Molly Boake</h5>
                                            <p>MollyBoake@rhyta.com</p>
                                        </div>
                                    </div><small>5 days ago</small>
                                </div>
                                <p class="mb-1">Next step is to choose a tone of voice for your content type. From casual
                                    to convincing, pick one from 20+ tones in the dropdown.Why did we say “snag eyeballs”
                                    instead of “get attention?” Why do we say “brick-and-mortar words” instead of “concrete
                                    words?” Because, in your email subject lines, it’s better to use words that people can
                                    picture.</p><small class="text-white">20K Followers</small>
                            </a><a class="list-group-item list-group-item-action list-hover-primary" href="#">
                                <div class="d-flex w-100 justify-content-between align-items-center">
                                    <div class="list-wrapper"><img class="list-img"
                                            src="{{ asset('assets/images/user/3.png') }}" alt="profile">
                                        <div class="list-content">
                                            <h5>Gabrielle Fahey</h5>
                                            <p>GabrielleFahey@dayrep.com</p>
                                        </div>
                                    </div><small class="text-muted">10 days ago</small>
                                </div>
                                <p class="mb-1">Your aim with this blog is to advertise yourself and your services in
                                    blog design. That means it's vital to create content about just that: blog design.
                                    Anything else on your page may act as a distraction to your potential customers, and you
                                    don't want that!</p><small class="text-muted">100 Followers</small>
                            </a><a class="list-group-item list-group-item-action list-hover-primary" href="#">
                                <div class="d-flex w-100 justify-content-between align-items-center">
                                    <div class="list-wrapper"><img class="list-img"
                                            src="{{ asset('assets/images/user/2.jpg') }}" alt="profile">
                                        <div class="list-content">
                                            <h5>Lucinda Moseley</h5>
                                            <p>LucindaMoseley@teleworm.us</p>
                                        </div>
                                    </div><small class="text-muted">3 days ago</small>
                                </div>
                                <p class="mb-1">People who are looking to hire a web designer may not know what to look
                                    out for. This will give you a chance to prove your trustworthiness by providing
                                    potential customers with advice and will let you sell your services by highlighting
                                    their best qualities.</p><small class="text-muted">23M Followers </small>
                            </a></div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6">
                <div class="card">
                    <div class="card-header card-no-border pb-0">
                        <h4>Lists With Checkbox</h4>
                        <p class="f-m-light mt-1">Use the <code>.form-check-input </code>to check your checkbox.</p>
                    </div>
                    <div class="card-body dark-list">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <input class="form-check-input me-1 checkbox-primary" id="firstCheckbox" type="checkbox"
                                    value="">
                                <label class="form-check-label txt-primary mb-0" for="firstCheckbox">Auto Start</label>
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-1 checkbox-secondary" id="secondCheckbox"
                                    type="checkbox" value="">
                                <label class="form-check-label txt-secondary mb-0" for="secondCheckbox">Auto
                                    Update</label>
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-1 checkbox-success" id="thirdCheckbox" type="checkbox"
                                    value="">
                                <label class="form-check- txt-success mb-0" for="thirdCheckbox">Don't check auth
                                    key</label>
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-1 checkbox-warning" id="fourCheckbox" type="checkbox"
                                    value="">
                                <label class="form-check-label txt-warning mb-0" for="fourCheckbox">Success all</label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6">
                <div class="card">
                    <div class="card-header card-no-border pb-0">
                        <h4>Lists With Radios</h4>
                        <p class="f-m-light mt-1">
                            Use the <code>.form-check-input </code>to check your radio buttons.</p>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <input class="form-check-input me-1 active checkbox-danger" id="firstRadio"
                                    type="radio" name="listGroupRadio" value="" checked="">
                                <label class="form-check-label mb-0" for="firstRadio">Meditations</label>
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-1 checkbox-primary" id="secondRadio" type="radio"
                                    name="listGroupRadio" value="">
                                <label class="form-check-label mb-0" for="secondRadio">Read a book</label>
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-1 checkbox-success" id="thirdRadio" type="radio"
                                    name="listGroupRadio" value="">
                                <label class="form-check-label mb-0" for="thirdRadio">Learn to code </label>
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-1 checkbox-info" id="FourRadio" type="radio"
                                    name="listGroupRadio" value="">
                                <label class="form-check-label mb-0" for="FourRadio">Drink more water</label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-12">
                <div class="card">
                    <div class="card-header card-no-border pb-0">
                        <h4>Lists With Numbers</h4>
                        <p class="f-m-light mt-1">Use the <code>.list-group-numbered</code>to ordered wise print numbers.
                        </p>
                    </div>
                    <div class="card-body">
                        <ol class="list-group list-group-numbered">
                            <li class="list-group-item txt-primary fw-bold">known for delivery of useful and usable
                                solutions</li>
                            <li class="list-group-item txt-danger fw-bold">Solve your problem with us</li>
                            <li class="list-group-item txt-success fw-bold">Certified Professionals</li>
                            <li class="list-group-item txt-warning fw-bold">Growth-Driven </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-12">
                <div class="card">
                    <div class="card-header card-no-border pb-0">
                        <h4>JavaScript Behavior</h4>
                        <p class="f-m-light mt-1">
                            Use the tab JavaScript plugin—include it individually or through the compiled<code> bootstrap.js
                            </code>file to extend our list group to create table panes of local content.</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="list-group" id="list-tab" role="tablist"><a
                                        class="list-group-item list-group-item-action bg-primary active"
                                        id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab"
                                        aria-controls="list-home">Home</a><a
                                        class="list-group-item list-group-item-action list-hover-primary"
                                        id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab"
                                        aria-controls="list-profile">Profile</a><a
                                        class="list-group-item list-group-item-action list-hover-primary"
                                        id="list-messages-list" data-bs-toggle="list" href="#list-messages"
                                        role="tab" aria-controls="list-messages">Contact Us</a><a
                                        class="list-group-item list-group-item-action list-hover-primary"
                                        id="list-settings-list" data-bs-toggle="list" href="#list-settings"
                                        role="tab" aria-controls="list-settings">Settings</a></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="list-home" role="tabpanel"
                                        aria-labelledby="list-home-list">
                                        <div class="d-flex mb-xl-4 list-behavior-1">
                                            <div class="flex-shrink-0"><img class="tab-img img-fluid"
                                                    src="{{ asset('assets/images/blog/img.png') }}" alt="home"></div>
                                            <div class="flex-grow-1">
                                                <p class="mb-xl-0 mb-sm-4">We provide end to end digital solutions, right
                                                    from designing your website/application development: Domain, Web
                                                    Hosting, Email Hosting Registration, Search Engine Optimization and
                                                    other Internet Marketing, Renewal of Services timely and effectively.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="d-xl-flex list-behavior-2">
                                            <div class="flex-grow-1">
                                                <p class="mb-0">When someone visits your homepage, your design should
                                                    inspire them to stay. Therefore, your value proposition should be
                                                    established on the homepage for visitors to select to stay on your
                                                    website.Building trust, expressing value, and guiding visitors to the
                                                    next step all depend on a page's design.</p>
                                            </div>
                                            <div class="flex-shrink-0"> <img class="tab-img img-fluid"
                                                    src="{{ asset('assets/images/blog/blog.jpg') }}" alt="home"></div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade dark-list" id="list-profile" role="tabpanel"
                                        aria-labelledby="list-profile-list">
                                        <div class="mb-0">
                                            <div class="flex-space flex-wrap align-items-center list-light-dark"><img
                                                    class="tab-img" src="{{ asset('assets/images/avtar/3.jpg') }}"
                                                    alt="profile">
                                                <p> <strong>Visit Us: </strong> 2600 Hollywood Blvd,Florida, United States-
                                                    33020<br><strong>Mail
                                                        Us:</strong>contact@us@gmail.com<br><strong>Contact Number:
                                                    </strong>(954) 357-7760</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="list-messages" role="tabpanel"
                                        aria-labelledby="list-messages-list">
                                        <p class="pt-3">Us Technology offers web & mobile development solutions for all
                                            industry verticals.Include a short form using fields that'll help your business
                                            understand who's contacting them.<br><strong>Visit Us: </strong> 2600 Hollywood
                                            Blvd,Florida, United States- 33020<br><strong>Mail
                                                Us:</strong>contact@us@gmail.com<br><strong>Contact Number: </strong>(954)
                                            357-7760</p>
                                    </div>
                                    <div class="tab-pane fade" id="list-settings" role="tabpanel"
                                        aria-labelledby="list-settings-list">
                                        <p><strong>Available pages in Theme: </strong><br>--> Typography: <br>Typography is
                                            the art of arranging letters and text in a way that makes the copy legible,
                                            clear, and visually appealing to the reader.<br>--> Tooltip: <br>A tooltip is a
                                            brief, informative message that appears when a user interacts with an element in
                                            a graphical user interface (GUI). </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6">
                <div class="card">
                    <div class="card-header card-no-border pb-0">
                        <h4>Numbered & Badge Lists</h4>
                        <p class="f-m-light mt-1">
                            Use the<code> .list-group-numbered</code> modifier class to numbered list group items.Numbers
                            are generated via CSS for better placement inside list group items.</p>
                    </div>
                    <div class="card-body">
                        <ol class="list-group list-group-numbered">
                            <li class="list-group-item d-flex justify-content-between align-items-start flex-wrap">
                                <div class="ms-2 me-auto">Stella Nowland</div><span
                                    class="badge bg-warning rounded-pill p-2">Freelance</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start flex-wrap">
                                <div class="ms-2 me-auto">Lola Stanford</div><span
                                    class="badge bg-danger text-white rounded-pill p-2">Issue</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start flex-wrap">
                                <div class="ms-2 me-auto">Caitlin Coungeau</div><span
                                    class="badge bg-primary text-white rounded-pill p-2">Social</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start flex-wrap">
                                <div class="ms-2 me-auto">Graciela W. McClaran</div><span
                                    class="badge bg-danger text-white rounded-pill p-2">Issue</span>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6">
                <div class="card">
                    <div class="card-header card-no-border pb-0">
                        <h4>Disabled Lists </h4>
                        <p class="f-m-light mt-1">
                            Use<code> .disabled </code>to a <code>.list-group-item</code> to make it appear disabled.</p>
                    </div>
                    <div class="card-body">
                        <div class="list-group"><a
                                class="list-group-item list-group-item-action bg-light-hover-primary active"
                                href="javascript:void(0)"><img class="rounded-circle"
                                    src="{{ asset('assets/images/user/1.jpg') }}" alt="user">Teresa J. Mosteller</a><a
                                class="list-group-item list-group-item-action bg-light-hover-primary"
                                href="javascript:void(0)"><img class="rounded-circle"
                                    src="{{ asset('assets/images/user/3.png') }}" alt="user">Gloria D. Acheson</a><a
                                class="list-group-item list-group-item-action disabled" href="javascript:void(0)"><img
                                    class="rounded-circle" src="{{ asset('assets/images/user/2.jpg') }}"
                                    alt="user">Sharon C.
                                Obrien</a><a class="list-group-item list-group-item-action disabled"
                                href="javascript:void(0)"><img class="rounded-circle"
                                    src="{{ asset('assets/images/user/5.jpg') }}" alt="user">Bryan A. Owens</a></div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4">
                <div class="card">
                    <div class="card-header card-no-border pb-0">
                        <h4>Scrollable Lists </h4>
                        <p class="f-m-light mt-1">
                            Use the property <code>overflow:auto </code>through scrollable lists.</p>
                    </div>
                    <div class="card-body">
                        <div class="list-group main-lists-content scrollbar-wrapper custom-scrollbar"><a
                                class="list-group-item list-group-item-action active light-primary" href="#"
                                aria-current="true">
                                <div class="list-wrapper gap-0"><img class="list-img"
                                        src="{{ asset('assets/images/user/9.jpg') }}" alt="profile">
                                    <div class="list-content">
                                        <h5 class="txt-light">Molly Boake</h5>
                                        <p>MollyBoake@rhyta.com</p><small>5 days ago</small>
                                    </div>
                                </div>
                            </a><a class="list-group-item list-group-item-action bg-light-hover-primary" href="#">
                                <div class="list-wrapper gap-0"><img class="list-img"
                                        src="{{ asset('assets/images/user/10.jpg') }}" alt="profile">
                                    <div class="list-content">
                                        <h5>Gabrielle Fahey</h5>
                                        <p>GabrielleFahey@dayrep.com</p><small class="text-muted">10 days ago</small>
                                    </div>
                                </div>
                            </a><a class="list-group-item list-group-item-action bg-light-hover-primary" href="#">
                                <div class="list-wrapper gap-0"><img class="list-img"
                                        src="{{ asset('assets/images/user/2.jpg') }}" alt="profile">
                                    <div class="list-content">
                                        <h5>Lucinda Moseley</h5>
                                        <p>LucindaMoseley@teleworm.us</p><small class="text-muted">3 days ago</small>
                                    </div>
                                </div>
                            </a><a class="list-group-item list-group-item-action bg-light-hover-primary" href="#">
                                <div class="list-wrapper gap-0"><img class="list-img"
                                        src="{{ asset('assets/images/user/12.png') }}" alt="profile">
                                    <div class="list-content">
                                        <h5>Francis K. Henriques</h5>
                                        <p>FrancisKHenriques@teleworm.us</p><small class="text-muted">2 days ago</small>
                                    </div>
                                </div>
                            </a><a class="list-group-item list-group-item-action bg-light-hover-primary" href="#">
                                <div class="list-wrapper gap-0"><img class="list-img"
                                        src="{{ asset('assets/images/user/14.png') }}" alt="profile">
                                    <div class="list-content">
                                        <h6>Jose A. Seay</h6>
                                        <p>JoseASeay@rhyta.com</p><small class="text-muted">15 days ago</small>
                                    </div>
                                </div>
                            </a><a class="list-group-item list-group-item-action bg-light-hover-primary" href="#">
                                <div class="list-wrapper gap-0"><img class="list-img"
                                        src="{{ asset('assets/images/user/3.jpg') }}" alt="profile">
                                    <div class="list-content">
                                        <h5>Phil F. Cunningham</h5>
                                        <p>PhilFCunningham@dayrep.com</p><small class="text-muted">6 days ago</small>
                                    </div>
                                </div>
                            </a><a class="list-group-item list-group-item-action bg-light-hover-primary" href="#">
                                <div class="list-wrapper gap-0"><img class="list-img"
                                        src="{{ asset('assets/images/user/7.jpg') }}" alt="profile">
                                    <div class="list-content">
                                        <h5>Richard E. Johnson</h5>
                                        <p>RichardEJohnson@teleworm.us</p><small class="text-muted">20 days ago</small>
                                    </div>
                                </div>
                            </a><a class="list-group-item list-group-item-action bg-light-hover-primary" href="#">
                                <div class="list-wrapper gap-0"><img class="list-img"
                                        src="{{ asset('assets/images/user/2.png') }}" alt="profile">
                                    <div class="list-content">
                                        <h5>Lawrence L. Nash</h5>
                                        <p>LawrenceLNash@jourrapide.com</p><small class="text-muted">8 days ago</small>
                                    </div>
                                </div>
                            </a></div>
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
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection
