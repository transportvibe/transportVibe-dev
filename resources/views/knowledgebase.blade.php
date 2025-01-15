@extends('layouts.simple.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 ps-0">
                    <h3>Knowledgebase</h3>
                </div>
                <div class="col-sm-6 pe-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Knowledgebase</li>
                        <li class="breadcrumb-item active">Knowledgebase</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid knowledgebase">
        <div class="row">
            <div class="col-12">
                <div class="knowledgebase-bg"><img class="bg-img-cover bg-center"
                        src="{{ asset('assets/images/knowledgebase/bg_1.jpg') }}" alt="looginpage"></div>
                <div class="knowledgebase-search">
                    <div>
                        <h3>How Can I help you?</h3>
                        <form class="form-inline" action="#" method="get">
                            <div class="form-group w-100"><i data-feather="search"></i>
                                <input class="form-control-plaintext w-100" type="text" placeholder="Type question here"
                                    title="">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6">
                <div class="card bg-primary">
                    <div class="card-body">
                        <div class="d-flex faq-widgets">
                            <div class="flex-grow-1">
                                <h3>Articles</h3>
                                <p>How little experience or technical knowledge you currently have. The web is a very big
                                    place, and if you are the typical internet user, you probably visit several websites
                                    every day.</p>
                            </div><i data-feather="book-open"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6">
                <div class="card bg-primary">
                    <div class="card-body">
                        <div class="d-flex faq-widgets">
                            <div class="flex-grow-1">
                                <h3>Knowledgebase</h3>
                                <p>A Website Designing course enables learners to use essential designing and programming
                                    tools required to do the job. The curriculum is a blend of various themes.</p>
                            </div><i data-feather="aperture"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card bg-primary">
                    <div class="card-body">
                        <div class="d-flex faq-widgets">
                            <div class="flex-grow-1">
                                <h3>Support</h3>
                                <p>The customer support industry is renaissance. Customer support as a specialty is coming
                                    into its own, offering companies a competitive advantage that’s difficult to copy.</p>
                            </div><i data-feather="file-text"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="header-faq">
                    <h3 class="mb-0">Browse articles by category</h3>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h3>Browse Articles</h3>
                            </div>
                            <div class="card-body">
                                <div class="row browse g-sm-4 g-3">
                                    <div class="col-xl-4 col-md-6 box-col-33">
                                        <div class="browse-articles">
                                            <h4><span><i data-feather="archive"></i></span>Any other legal pages I should
                                                know about?</h4>
                                            <ul>
                                                <li><a href="{{ route('admin.learning_detailed') }}"><span><i
                                                                data-feather="file-text"></i></span><span>They are best
                                                            treated with common sense.</span></a></li>
                                                <li><a href="{{ route('admin.learning_detailed') }}"><span><i
                                                                data-feather="file-text"></i></span><span>Policies have wide
                                                            acceptance editors.</span></a></li>
                                                <li><a href="{{ route('admin.learning_detailed') }}"><span><i
                                                                data-feather="file-text"></i></span><span>Guidelines are
                                                            sets of best practices supported.</span><span
                                                            class="badge badge-primary pull-right">New</span></a></li>
                                                <li><a href="{{ route('admin.learning_detailed') }}"><span><i
                                                                data-feather="file-text"></i></span><span>Editors should
                                                            attempt to follow guidelines. </span></a></li>
                                                <li><a class="f-w-600 font-primary" href="{{ route('admin.learning_detailed') }}"><span><i
                                                                data-feather="arrow-right"></i></span><span>See More
                                                            (40)</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6 box-col-33">
                                        <div class="browse-articles">
                                            <h4><span><i data-feather="archive"></i></span> Does Moment have an API or
                                                automatic export?</h4>
                                            <ul>
                                                <li><a href="{{ route('admin.learning_detailed') }}"><span><i
                                                                data-feather="file-text"></i></span><span>API allows search
                                                            and download AP Images.</span><span
                                                            class="badge badge-primary pull-right">Review</span></a></li>
                                                <li><a href="{{ route('admin.learning_detailed') }}"><span><i
                                                                data-feather="file-text"></i></span><span>API retrieve
                                                            breaking news categories.</span></a></li>
                                                <li><a href="{{ route('admin.learning_detailed') }}"><span><i
                                                                data-feather="file-text"></i></span><span>API retrieves
                                                            rules for fantasy league.</span><span
                                                            class="badge badge-primary pull-right">Articles</span></a></li>
                                                <li><a href="{{ route('admin.learning_detailed') }}"><span><i
                                                                data-feather="file-text"></i></span><span>Resource API
                                                            retrieves content produced business.</span></a></li>
                                                <li><a class="f-w-600 font-primary" href="{{ route('admin.learning_detailed') }}"><span><i
                                                                data-feather="arrow-right"></i></span><span>See More
                                                            (90)</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6 box-col-33">
                                        <div class="browse-articles">
                                            <h4><span><i data-feather="archive"></i></span>How do WordPress Site
                                                Maintenance?</h4>
                                            <ul>
                                                <li><a href="{{ route('admin.learning_detailed') }}"><span><i
                                                                data-feather="file-text"></i></span><span>Make a backup of
                                                            your WordPress website.</span></a></li>
                                                <li><a href="{{ route('admin.learning_detailed') }}"><span><i
                                                                data-feather="file-text"></i></span><span>Run a Wordpress
                                                            security Website check.</span><span
                                                            class="badge badge-primary pull-right">Closed</span></a></li>
                                                <li><a href="{{ route('admin.learning_detailed') }}"><span><i
                                                                data-feather="file-text"></i></span><span>Monitor your
                                                            search engine optimization.</span></a></li>
                                                <li><a href="{{ route('admin.learning_detailed') }}"><span><i
                                                                data-feather="file-text"></i></span><span>Set a regular
                                                            maintenance schedule.</span></a></li>
                                                <li><a class="f-w-600 font-primary" href="{{ route('admin.learning_detailed') }}"><span><i
                                                                data-feather="arrow-right"></i></span><span>See More
                                                            (50)</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6 box-col-33">
                                        <div class="browse-articles browse-bottom">
                                            <h4><span><i data-feather="archive"></i> Can I change my plan later?</span>
                                            </h4>
                                            <ul>
                                                <li><a href="{{ route('admin.learning_detailed') }}"><span><i
                                                                data-feather="file-text"></i></span><span>When an unknown
                                                            printer took a galley</span><span
                                                            class="badge badge-primary pull-right">Popular</span></a></li>
                                                <li><a href="{{ route('admin.learning_detailed') }}"><span><i
                                                                data-feather="file-text"></i></span><span>You can easily
                                                            change plans at any time.</span></a></li>
                                                <li><a href="{{ route('admin.learning_detailed') }}"><span><i
                                                                data-feather="file-text"></i></span><span>you’ll be charged
                                                            a prorated cover that upgrade.</span></a></li>
                                                <li><a href="{{ route('admin.learning_detailed') }}"><span><i
                                                                data-feather="file-text"></i></span><span>But also the leap
                                                            into electronic typesetting,</span></a></li>
                                                <li><a class="f-w-600 font-primary" href="{{ route('admin.learning_detailed') }}"><span><i
                                                                data-feather="arrow-right"></i></span><span>See More
                                                            (90)</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6 box-col-33">
                                        <div class="browse-articles browse-bottom">
                                            <h4><span><i data-feather="archive"></i></span>How do I pay for the Premium
                                                Plan?</h4>
                                            <ul>
                                                <li><a href="{{ route('admin.learning_detailed') }}"><span><i
                                                                data-feather="file-text"></i></span><span>Premium plans are
                                                            billed as a single yearly payment.</span></a></li>
                                                <li><a href="{{ route('admin.learning_detailed') }}"><span><i
                                                                data-feather="file-text"></i></span><span>Monthly plan are
                                                            bill every month of signup.</span></a></li>
                                                <li><a href="{{ route('admin.learning_detailed') }}"><span><i
                                                                data-feather="file-text"></i></span><span>You can set
                                                            Monthly or Yearly for Premium plan.</span></a></li>
                                                <li><a href="{{ route('admin.learning_detailed') }}"><span><i
                                                                data-feather="file-text"></i></span><span>unknown printer
                                                            took galley.</span><span
                                                            class="badge badge-primary pull-right">Closed</span></a></li>
                                                <li><a class="f-w-600 font-primary" href="{{ route('admin.learning_detailed') }}"><span><i
                                                                data-feather="arrow-right"></i></span><span>See More
                                                            (50)</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6 box-col-33">
                                        <div class="browse-articles browse-bottom">
                                            <h4><span><i data-feather="archive"></i></span>What is your Shopping Policy
                                            </h4>
                                            <ul>
                                                <li><a href="{{ route('admin.learning_detailed') }}"><span><i
                                                                data-feather="file-text"></i></span><span>Many new editors
                                                            rely on policy interpretations.</span></a></li>
                                                <li><a href="{{ route('admin.learning_detailed') }}"><span><i
                                                                data-feather="file-text"></i></span><span>Editor
                                                            continually attempts to find a different policy.</span></a></li>
                                                <li><a href="{{ route('admin.learning_detailed') }}"><span><i
                                                                data-feather="file-text"></i></span><span>Violation of
                                                            maintaining a neutral point of view.</span><span
                                                            class="badge badge-primary pull-right">Article</span></a></li>
                                                <li><a href="{{ route('admin.learning_detailed') }}"><span><i
                                                                data-feather="file-text"></i></span><span>You double check
                                                            your sources.</span></a></li>
                                                <li><a class="f-w-600 font-primary" href="{{ route('admin.learning_detailed') }}"><span><i
                                                                data-feather="arrow-right"></i></span><span>See More
                                                            (26)</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6 box-col-33">
                                        <div class="browse-articles browse-bottom">
                                            <h4><span><i data-feather="archive"></i></span>How can I change the component?
                                            </h4>
                                            <ul>
                                                <li><a href="{{ route('admin.learning_detailed') }}"><span><i
                                                                data-feather="file-text"></i></span><span>You can modify
                                                            some specific component settings.</span><span
                                                            class="badge badge-primary pull-right">Review</span></a></li>
                                                <li><a href="{{ route('admin.learning_detailed') }}"><span><i
                                                                data-feather="file-text"></i></span><span>Click Apply to
                                                            validate the set preferences. </span></a></li>
                                                <li><a href="{{ route('admin.learning_detailed') }}"><span><i
                                                                data-feather="file-text"></i></span><span>Following
                                                            procedure apply the components</span><span
                                                            class="badge badge-primary pull-right">Closed</span></a></li>
                                                <li><a href="{{ route('admin.learning_detailed') }}"><span><i
                                                                data-feather="file-text"></i></span><span> To modify those
                                                            specific components settings.</span></a></li>
                                                <li><a class="f-w-600 font-primary" href="{{ route('admin.learning_detailed') }}"><span><i
                                                                data-feather="arrow-right"></i></span><span>See More
                                                            (10)</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6 box-col-33">
                                        <div class="browse-articles browse-bottom">
                                            <h4><span><i data-feather="archive"></i></span>How does it work?</h4>
                                            <ul>
                                                <li><a href="{{ route('admin.learning_detailed') }}"><span><i
                                                                data-feather="file-text"></i></span><span>To get started
                                                            with your account. </span></a></li>
                                                <li><a href="{{ route('admin.learning_detailed') }}"><span><i
                                                                data-feather="file-text"></i></span><span>Compile your
                                                            theme using gulp</span><span
                                                            class="badge badge-primary pull-right">Popular</span></a></li>
                                                <li><a href="{{ route('admin.learning_detailed') }}"><span><i
                                                                data-feather="file-text"></i></span><span>Users can browse
                                                            by topic or use the visually.</span><span
                                                            class="badge badge-primary pull-right">Review</span></a></li>
                                                <li><a href="{{ route('admin.learning_detailed') }}"><span><i
                                                                data-feather="file-text"></i></span><span>This works
                                                            through various methods of site tracking</span></a></li>
                                                <li><a class="f-w-600 font-primary" href="{{ route('admin.learning_detailed') }}"><span><i
                                                                data-feather="arrow-right"></i></span><span>See More
                                                            (21)</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6 box-col-33">
                                        <div class="browse-articles browse-bottom">
                                            <h4><span><i data-feather="archive"></i></span>What is Lorem Ipsum?</h4>
                                            <ul>
                                                <li><a href="{{ route('admin.learning_detailed') }}"><span><i
                                                                data-feather="file-text"></i></span><span>Language regular
                                                            existing languages.</span></a></li>
                                                <li><a href="{{ route('admin.learning_detailed') }}"><span><i
                                                                data-feather="file-text"></i></span><span>Lorem has been
                                                            the industry standard dummy.</span></a></li>
                                                <li><a href="{{ route('admin.learning_detailed') }}"><span><i
                                                                data-feather="file-text"></i></span><span>Language is not
                                                            real even ‘Lorem’ does't exist.</span></a></li>
                                                <li><a href="{{ route('admin.learning_detailed') }}"><span><i
                                                                data-feather="file-text"></i></span><span>dummy text that
                                                            is not meant anything.</span><span
                                                            class="badge badge-primary pull-right">On hold</span></a></li>
                                                <li><a class="f-w-600 font-primary" href="{{ route('admin.learning_detailed') }}"><span><i
                                                                data-feather="arrow-right"></i></span><span>See More
                                                            (34)</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="header-faq">
                    <h3 class="mb-0">Featured Tutorials</h3>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-sm-6 box-col-3">
                        <div class="card features-faq product-box">
                            <div class="faq-image product-img"><img class="img-fluid"
                                    src="{{ asset('assets/images/faq/1.jpg') }}" alt="">
                                <div class="product-hover">
                                    <ul>
                                        <li><i class="icon-link"></i></li>
                                        <li><i class="icon-import"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6> Web Design</h6>
                                <p>A Web Designing course belongs to the field of Computer It enables students to learn
                                    various techniques.</p>
                            </div>
                            <div class="card-footer"><span>Dec 15, 2024</span><span class="pull-right"><i
                                        class="fa fa-star font-primary"></i><i class="fa fa-star font-primary"></i><i
                                        class="fa fa-star font-primary"></i><i class="fa fa-star font-primary"></i><i
                                        class="fa fa-star font-primary"></i></span></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 box-col-3">
                        <div class="card features-faq product-box">
                            <div class="faq-image product-img"><img class="img-fluid"
                                    src="{{ asset('assets/images/faq/2.jpg') }}" alt="">
                                <div class="product-hover">
                                    <ul>
                                        <li><i class="icon-link"></i></li>
                                        <li><i class="icon-import"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6>Web Development</h6>
                                <p>A Web Development course belongs to the field of Computer It enables students to learn
                                    various techniques.</p>
                            </div>
                            <div class="card-footer"><span>Dec 15, 2024</span><span class="pull-right"><i
                                        class="fa fa-star font-primary"></i><i class="fa fa-star font-primary"></i><i
                                        class="fa fa-star font-primary"></i><i class="fa fa-star font-primary"></i><i
                                        class="fa fa-star-o font-primary"></i></span></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 box-col-3">
                        <div class="card features-faq product-box">
                            <div class="faq-image product-img"><img class="img-fluid"
                                    src="{{ asset('assets/images/faq/3.jpg') }}" alt="">
                                <div class="product-hover">
                                    <ul>
                                        <li><i class="icon-link"></i></li>
                                        <li><i class="icon-import"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6>UI Design</h6>
                                <p>User interface design (UI) is the design for machines and software, such as mobile
                                    devices, computers.</p>
                            </div>
                            <div class="card-footer"><span>Dec 15, 2024</span><span class="pull-right"><i
                                        class="fa fa-star font-primary"></i><i class="fa fa-star font-primary"></i><i
                                        class="fa fa-star font-primary"></i><i class="fa fa-star font-primary"></i><i
                                        class="fa fa-star font-primary"></i></span></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 box-col-3">
                        <div class="card features-faq product-box">
                            <div class="faq-image product-img"><img class="img-fluid"
                                    src="{{ asset('assets/images/faq/4.jpg') }}" alt="">
                                <div class="product-hover">
                                    <ul>
                                        <li><i class="icon-link"></i></li>
                                        <li><i class="icon-import"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6> UX Design</h6>
                                <p>User Experience design (UX) is the design for machines and software, such as mobile
                                    devices, computers.</p>
                            </div>
                            <div class="card-footer"><span>Dec 15, 2024</span><span class="pull-right"><i
                                        class="fa fa-star font-primary"></i><i class="fa fa-star font-primary"></i><i
                                        class="fa fa-star font-primary"></i><i class="fa fa-star font-primary"></i><i
                                        class="fa fa-star-half-o font-primary"></i></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 faq-articles">
                <div class="header-faq">
                    <h3 class="mb-0">Latest articles and videos</h3>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex"><i class="m-r-30" data-feather="codepen"></i>
                                            <div class="flex-grow-1">
                                                <h6 class="f-w-600">Article Base Video</h6>
                                                <p>The web is a very big place, and if you are the typical internet base
                                                    user.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex"><i class="m-r-30" data-feather="codepen"></i>
                                            <div class="flex-grow-1">
                                                <h6 class="f-w-600">Knows your sources</h6>
                                                <p>A book giving information on many subjects or on many aspects of one
                                                    subject.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex"><i class="m-r-30" data-feather="codepen"></i>
                                            <div class="flex-grow-1">
                                                <h6 class="f-w-600"> Sources credible/reliable</h6>
                                                <p>Simple demos of frequently asked questions about using the information
                                                    resources </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex"><i class="m-r-30" data-feather="file-text"></i>
                                            <div class="flex-grow-1">
                                                <h6 class="f-w-600"> Validate website</h6>
                                                <p> Website is the process of ensuring that the pages on the website
                                                    conform. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex"><i class="m-r-30" data-feather="file-text"></i>
                                            <div class="flex-grow-1">
                                                <h6 class="f-w-600"> Tailwind Design</h6>
                                                <p> Tailwind is so low-level, it never encourages you to design the same
                                                    site twice.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex"><i class="m-r-30" data-feather="file-text"></i>
                                            <div class="flex-grow-1">
                                                <h6 class="f-w-600">Knows your sources </h6>
                                                <p>A book giving information on many subjects or on many aspects of one
                                                    subject.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="row">
                            <div class="col-xl-12 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex"><i class="m-r-30" data-feather="youtube"></i>
                                            <div class="flex-grow-1">
                                                <h6 class="f-w-600"> Sources Demos</h6>
                                                <p>Simple demos of frequently asked questions about using the information
                                                    resources</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex"><i class="m-r-30" data-feather="youtube"></i>
                                            <div class="flex-grow-1">
                                                <h6 class="f-w-600"> Validate Html</h6>
                                                <p>Website is the process of ensuring that the pages on the website conform.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex"><i class="m-r-30" data-feather="youtube"></i>
                                            <div class="flex-grow-1">
                                                <h6 class="f-w-600">Web Design</h6>
                                                <p>Web is so high-level, it never encourages you to design the same site
                                                    twice</p>
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
@endsection
