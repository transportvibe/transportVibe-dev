@extends('layouts.simple.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 ps-0">
                    <h3>Mega Options</h3>
                </div>
                <div class="col-sm-6 pe-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Form Controls</li>
                        <li class="breadcrumb-item active">Mega options</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Variation radio</h4>
                        <p class="f-m-light mt-1">
                            Use the <code>radio </code>attribute through create variation of radio designs.</p>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-xl-4 col-md-6">
                                <div class="card-wrapper border rounded-3 h-100 checkbox-checked">
                                    <h6 class="sub-title">Select your payment method</h6>
                                    <div class="payment-wrapper">
                                        <div class="payment-first">
                                            <div class="form-check radio radio-primary">
                                                <input class="form-check-input" id="ptm11" type="radio" name="radio1"
                                                    value="option1">
                                                <label class="form-check-label mb-0" for="ptm11">BOB</label>
                                            </div>
                                        </div>
                                        <div class="payment-second"><img class="img-fluid"
                                                src="{{ asset('assets/images/ecommerce/card.png') }}" alt="card"></div>
                                    </div>
                                    <div class="payment-wrapper">
                                        <div class="payment-first">
                                            <div class="form-check radio radio-primary">
                                                <input class="form-check-input" id="ptm22" type="radio" name="radio1"
                                                    value="option1" checked="">
                                                <label class="form-check-label mb-0" for="ptm22">MasterCard</label>
                                            </div>
                                        </div>
                                        <div class="payment-second"><img class="img-fluid"
                                                src="{{ asset('assets/images/ecommerce/mastercard.png') }}" alt="card">
                                        </div>
                                    </div>
                                    <div class="payment-wrapper">
                                        <div class="payment-first">
                                            <div class="form-check radio radio-primary">
                                                <input class="form-check-input" id="ptm33" type="radio" name="radio1"
                                                    value="option1">
                                                <label class="form-check-label mb-0" for="ptm33">Paypal</label>
                                            </div>
                                        </div>
                                        <div class="payment-second"><img class="img-fluid"
                                                src="{{ asset('assets/images/ecommerce/paypal.png') }}" alt="card">
                                        </div>
                                    </div>
                                    <div class="payment-wrapper">
                                        <div class="payment-first">
                                            <div class="form-check radio radio-primary">
                                                <input class="form-check-input" id="ptm44" type="radio" name="radio1"
                                                    value="option1">
                                                <label class="form-check-label mb-0" for="ptm44">VISA</label>
                                            </div>
                                        </div>
                                        <div class="payment-second"><img class="img-fluid"
                                                src="{{ asset('assets/images/ecommerce/visa.png') }}" alt="card"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card-wrapper border rounded-3 h-100 checkbox-checked">
                                    <h6 class="sub-title">What are the most important things to learn about web design?</h6>
                                    <div class="payment-wrapper">
                                        <div class="payment-first">
                                            <div class="form-check radio radio-primary">
                                                <input class="form-check-input" id="ptm101" type="radio" name="radio3"
                                                    value="option1">
                                                <label class="form-check-label mb-0" for="ptm101">A. HTML </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="payment-wrapper">
                                        <div class="payment-first">
                                            <div class="form-check radio radio-primary">
                                                <input class="form-check-input" id="ptm201" type="radio"
                                                    name="radio3" value="option1">
                                                <label class="form-check-label mb-0" for="ptm201">B. CSS</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="payment-wrapper">
                                        <div class="payment-first">
                                            <div class="form-check radio radio-primary">
                                                <input class="form-check-input" id="ptm301" type="radio"
                                                    name="radio3" value="option1" checked="">
                                                <label class="form-check-label mb-0" for="ptm301">C. Javascript</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="payment-wrapper">
                                        <div class="payment-first">
                                            <div class="form-check radio radio-primary">
                                                <input class="form-check-input" id="ptm401" type="radio"
                                                    name="radio3" value="option1">
                                                <label class="form-check-label mb-0" for="ptm401">D. Above the all
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card-wrapper border rounded-3 h-100 checkbox-checked">
                                    <h6 class="sub-title">Radios With Creative Options & SVG Icons</h6>
                                    <div class="payment-wrapper">
                                        <div class="payment-first">
                                            <div class="form-check radio radio-primary">
                                                <input class="form-check-input" id="ptm100" type="radio"
                                                    name="radio2" value="option1">
                                                <label class="form-check-label mb-0" for="ptm100">The notification icon
                                                    displayed new messages.</label>
                                            </div>
                                        </div>
                                        <div class="payment-second">
                                            <svg class="mega-icons stroke-danger">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#notification') }}"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="payment-wrapper">
                                        <div class="payment-first">
                                            <div class="form-check radio radio-primary">
                                                <input class="form-check-input" id="ptm200" type="radio"
                                                    name="radio2" value="option1">
                                                <label class="form-check-label mb-0" for="ptm200">The download icon
                                                    indicated completion.</label>
                                            </div>
                                        </div>
                                        <div class="payment-second">
                                            <svg class="mega-icons stroke-success">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-calendar') }}">
                                                </use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="payment-wrapper">
                                        <div class="payment-first">
                                            <div class="form-check radio radio-primary">
                                                <input class="form-check-input" id="ptm300" type="radio"
                                                    name="radio2" value="option1" checked="">
                                                <label class="form-check-label mb-0" for="ptm300">The tag icon allowed
                                                    easy categorization.</label>
                                            </div>
                                        </div>
                                        <div class="payment-second">
                                            <svg class="mega-icons stroke-dark">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#tag') }}"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="payment-wrapper">
                                        <div class="payment-first">
                                            <div class="form-check radio radio-primary">
                                                <input class="form-check-input" id="ptm400" type="radio"
                                                    name="radio2" value="option1">
                                                <label class="form-check-label mb-0" for="ptm400">The email icon was
                                                    inaccessibly located.</label>
                                            </div>
                                        </div>
                                        <div class="payment-second">
                                            <svg class="mega-icons stroke-primary">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-email') }}"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Variation checkbox </h4>
                        <p class="f-m-light mt-1">
                            We can create any creative design by using <code>(type='checkbox')</code>attribute.</p>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-xl-4 col-md-5">
                                <div class="card-wrapper border rounded-3 h-100 checkbox-checked">
                                    <h6 class="sub-title">Which of the following activities do you enjoy doing in your free
                                        time?</h6>
                                    <div class="payment-wrapper">
                                        <div class="payment-first">
                                            <div class="form-check checkbox checkbox-success">
                                                <input class="form-check-input" id="check-a" type="checkbox">
                                                <label class="form-check-label mb-0" for="check-a">Reading </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="payment-wrapper">
                                        <div class="payment-first">
                                            <div class="form-check checkbox checkbox-success">
                                                <input class="form-check-input" id="check-b" type="checkbox"
                                                    checked="">
                                                <label class="form-check-label mb-0" for="check-b">Watching TV</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="payment-wrapper">
                                        <div class="payment-first">
                                            <div class="form-check checkbox checkbox-danger">
                                                <input class="form-check-input" id="check-c" type="checkbox">
                                                <label class="form-check-label mb-0" for="check-c">Listening to
                                                    music</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="payment-wrapper">
                                        <div class="payment-first">
                                            <div class="form-check checkbox checkbox-danger">
                                                <input class="form-check-input" id="check-d" type="checkbox">
                                                <label class="form-check-label mb-0" for="check-d">Playing video
                                                    games</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="payment-wrapper">
                                        <div class="payment-first">
                                            <div class="form-check checkbox checkbox-success">
                                                <input class="form-check-input" id="check-e" type="checkbox">
                                                <label class="form-check-label mb-0"
                                                    for="check-e">Painting/Drawing</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8 col-md-7">
                                <div class="card-wrapper border rounded-3 h-100 checkbox-checked">
                                    <section class="main-upgrade">
                                        <div> <i class="fa fa-rocket"></i>
                                            <h5 class="mb-2">It&apos;s time to <span class="txt-primary">upgrade</span>
                                            </h5>
                                            <p class="text-muted mb-2">Select the theme that best suits your requirements,
                                                and you're ready to go!</p>
                                        </div>
                                        <div class="variation-box">
                                            <div class="selection-box">
                                                <input id="feature1" type="checkbox">
                                                <div class="custom--mega-checkbox">
                                                    <ul class="d-flex flex-column">
                                                        <li>Voxo</li>
                                                        <li class="txt-primary">270 Sales</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="selection-box">
                                                <input id="feature2" type="checkbox">
                                                <div class="custom--mega-checkbox">
                                                    <ul class="d-flex flex-column">
                                                        <li>Crocs</li>
                                                        <li class="txt-primary">4.8K Sales</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="selection-box">
                                                <input id="feature3" type="checkbox">
                                                <div class="custom--mega-checkbox">
                                                    <ul class="d-flex flex-column">
                                                        <li>Multikart </li>
                                                        <li class="txt-primary">2.6k Sales</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="selection-box">
                                                <input id="feature4" type="checkbox" checked="">
                                                <div class="custom--mega-checkbox">
                                                    <ul class="d-flex flex-column">
                                                        <li>Viho</li>
                                                        <li class="txt-primary">2k Sales</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xxl-6 box-col-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Default style</h4>
                        <p class="f-m-light mt-1">
                            This option is show by default you don't need to add any extra class.</p>
                    </div>
                    <div class="card-body megaoptions-border-space-sm">
                        <form class="mega-inline">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="d-flex p-20">
                                            <div class="form-check radio radio-primary m-0">
                                                <input class="form-check-input" id="radio14" type="radio"
                                                    name="radio1" value="option1">
                                                <label class="form-check-label" for="radio14"><span
                                                        class="flex-grow-1 megaoption-space"><span
                                                            class="mt-0 mega-title-badge">COD<span
                                                                class="badge badge-primary pull-right digits">50
                                                                INR</span></span><span>Estimated 2 Day Shipping ( Duties end
                                                            tax may be due delivery )</span></span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="d-flex p-20">
                                            <div class="form-check radio radio-secondary m-0">
                                                <input class="form-check-input" id="radio13" type="radio"
                                                    name="radio1" value="option1">
                                                <label class="form-check-label" for="radio13"><span
                                                        class="flex-grow-1 megaoption-space"><span
                                                            class="mt-0 mega-title-badge">Fast<span
                                                                class="badge badge-secondary pull-right digits">100
                                                                INR</span></span><span>Estimated 1 Day Shipping ( Duties end
                                                            tax may be due delivery )</span></span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-end">
                        <button class="btn btn-primary m-r-15" type="submit">Submit</button>
                        <button class="btn btn-light" type="submit">Cancel</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xxl-6 box-col-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Without borders style</h4>
                        <p class="f-m-light mt-1">
                            By adding <code>.plain-style </code>class to <code>.mega-inline</code> You can archive this
                            style</p>
                    </div>
                    <div class="card-body">
                        <form class="mega-inline plain-style">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="d-flex p-20">
                                            <div class="form-check checkbox checkbox-warning m-0">
                                                <input class="form-check-input" id="checkbox11" type="checkbox"
                                                    checked="">
                                                <label class="form-check-label" for="checkbox11"><span
                                                        class="flex-grow-1 megaoption-space"><span
                                                            class="mt-0 mega-title-badge">$39<span
                                                                class="badge badge-warning pull-right digits">100
                                                                MBPS</span></span><span>Plans for 2/4/6 months are offered
                                                            to new clients.</span></span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="d-flex p-20">
                                            <div class="form-check checkbox checkbox-info m-0">
                                                <input class="form-check-input" id="checkbox22" type="checkbox">
                                                <label class="form-check-label" for="checkbox22"><span
                                                        class="flex-grow-1 megaoption-space"><span
                                                            class="mt-0 mega-title-badge">$50<span
                                                                class="badge badge-info pull-right digits">Hired</span></span><span>Plans
                                                            for 2 years projects offered to new
                                                            clients.</span></span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-end">
                        <button class="btn btn-warning m-r-15" type="submit">Submit</button>
                        <button class="btn bg-light-warning" type="submit">Cancel</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xxl-6 box-col-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Solid border style</h4>
                        <p class="f-m-light mt-1">
                            Use the <code>.border-style</code> class to <code>.mega-inline</code> you can archive this
                            style.</p>
                    </div>
                    <div class="card-body megaoptions-border-space-sm">
                        <form class="mega-inline border-style">
                            <div class="row flex-column">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="d-flex p-20">
                                            <div class="form-check radio radio-primary">
                                                <input class="form-check-input" id="radio15" type="radio"
                                                    name="radio1" value="option1">
                                                <label class="form-check-label my-0" for="radio15"><span
                                                        class="flex-grow-1"><span class="d-flex list-behavior-1"><span
                                                                class="flex-shrink-0"><img class="tab-img img-fluid"
                                                                    src="{{ asset('assets/images/blog/img.png') }}"
                                                                    alt="home"></span><span class="flex-grow-1"><span
                                                                    class="mb-0">We provide end to end digital solutions,
                                                                    right from designing your website/application
                                                                    development: Domain, Web Hosting, Email Hosting
                                                                    Registration.</span></span></span></span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card">
                                        <div class="d-flex p-20">
                                            <div class="form-check radio radio-primary">
                                                <input class="form-check-input" id="radio16" type="radio"
                                                    name="radio1" value="option1">
                                                <label class="form-check-label my-0" for="radio16"><span
                                                        class="flex-grow-1"><span class="d-flex list-behavior-1"><span
                                                                class="flex-shrink-0"> <img class="tab-img img-fluid"
                                                                    src="{{ asset('assets/images/blog/blog.jpg') }}"
                                                                    alt="home"></span><span class="flex-grow-1"><span
                                                                    class="mb-0">When someone visits your homepage, your
                                                                    design should inspire them to stay. Therefore, your
                                                                    value proposition should be established on the homepage
                                                                    for visitors.</span></span></span></span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-end">
                        <button class="btn btn-primary m-r-15" type="submit">Submit</button>
                        <button class="btn btn-light" type="submit">Cancel</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xxl-6 box-col-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Offer style border</h4>
                        <p class="f-m-light mt-1">
                            Use the <code>.offer-style </code>class to<code> .mega-inline</code> you can archive this style.
                        </p>
                    </div>
                    <div class="card-body megaoptions-border-space-sm">
                        <form class="mega-inline offer-style">
                            <div class="row flex-column">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="d-flex p-20">
                                            <div class="form-check checkbox checkbox-success">
                                                <input class="form-check-input" id="checkbox50" type="checkbox">
                                                <label class="form-check-label my-0" for="checkbox50"><span
                                                        class="flex-grow-1"><span class="d-flex list-behavior-1"><span
                                                                class="flex-shrink-0"><img class="tab-img img-fluid"
                                                                    src="{{ asset('assets/images/email-template/11.jpg') }}"
                                                                    alt="fruits"></span><span class="flex-grow-1"><span
                                                                    class="mb-0">Fruits are an essential part of a
                                                                    healthy diet, and offer many health benefits. They're
                                                                    packed with vitamins, minerals, and fiber, which can
                                                                    help improve
                                                                    digestion.</span></span></span></span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card">
                                        <div class="d-flex p-20">
                                            <div class="form-check checkbox checkbox-danger">
                                                <input class="form-check-input" id="checkbox101" type="checkbox"
                                                    checked="">
                                                <label class="form-check-label my-0" for="checkbox101"><span
                                                        class="flex-grow-1"><span class="d-flex list-behavior-1"><span
                                                                class="flex-shrink-0"> <img class="tab-img img-fluid"
                                                                    src="{{ asset('assets/images/email-template/10.jpg') }}"
                                                                    alt="flowers"></span><span class="flex-grow-1"><span
                                                                    class="mb-0">Flowers have long been used to express
                                                                    feelings and sentiments, and each bloom has its own
                                                                    distinct significance. For instance, while daisies
                                                                    signify innocence and
                                                                    purity.</span></span></span></span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-end">
                        <button class="btn btn-success m-r-15" type="submit">Submit</button>
                        <button class="btn bg-light-success" type="submit">Cancel</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Inline style</h4>
                        <p class="f-m-light mt-1">
                            For Create inline megaoption add <code>.mega-inline</code> class in form tag</p>
                    </div>
                    <div class="card-body megaoptions-border-space-sm">
                        <form class="mega-inline">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="d-flex p-20">
                                            <div class="form-check radio radio-warning m-0 w-100">
                                                <input class="form-check-input" id="radio19" type="radio"
                                                    name="radio1" value="option1">
                                                <label class="form-check-label mb-0 w-100" for="radio19"><span
                                                        class="flex-grow-1"><span class="mt-0 mega-title-badge">COD<span
                                                                class="badge badge-warning pull-right digits">50
                                                                INR</span></span><span>Estimated 14-20 Day Shipping ( Duties
                                                            end taxes may be due upon delivery )</span></span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="d-flex p-20">
                                            <div class="form-check radio radio-secondary m-0 w-100">
                                                <input class="form-check-input" id="radio20" type="radio"
                                                    name="radio1" value="option1">
                                                <label class="form-check-label mb-0 w-100" for="radio20"><span
                                                        class="flex-grow-1"><span class="mt-0 mega-title-badge">Fast<span
                                                                class="badge badge-secondary pull-right digits">100
                                                                INR</span></span><span>Estimated 1 Day Shipping ( Duties end
                                                            taxes may be due upon delivery )</span></span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="d-flex p-20">
                                            <div class="form-check radio radio-secondary m-0 w-100">
                                                <input class="form-check-input" id="radio21" type="radio"
                                                    name="radio1" value="option1">
                                                <label class="form-check-label mb-0 w-100" for="radio21"><span
                                                        class="flex-grow-1"><span
                                                            class="mt-0 mega-title-badge">Standard<span
                                                                class="badge badge-secondary pull-right digits">80
                                                                INR</span></span><span>Estimated 3 Day Shipping ( Duties end
                                                            taxes may be due upon delivery )</span></span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="d-flex p-20">
                                            <div class="form-check radio radio-warning m-0 w-100">
                                                <input class="form-check-input" id="radio22" type="radio"
                                                    name="radio1" value="option1">
                                                <label class="form-check-label mb-0 w-100" for="radio22"><span
                                                        class="flex-grow-1"><span class="mt-0 mega-title-badge">Local
                                                            <span
                                                                class="badge badge-warning pull-right digits">Free</span></span><span>Estimated
                                                            15 Day Shipping ( Duties end taxes may be due upon delivery
                                                            )</span></span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-end">
                        <button class="btn btn-warning m-r-15" type="submit">Submit</button>
                        <button class="btn bg-light-warning" type="submit">Cancel</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xxl-6 box-col-12">
                <div class="card height-equal">
                    <div class="card-header pb-0">
                        <h4>Vertical style</h4>
                        <p class="f-m-light mt-1">vertical style in mega-options. Use the <code>.mega-vertical </code>class
                            through created vertical alignments.</p>
                    </div>
                    <div class="card-body">
                        <form class="mega-vertical">
                            <div class="row">
                                <div class="col-sm-12">
                                    <p class="mega-title m-b-5">Delivery Option</p>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="d-flex p-20">
                                            <div class="form-check radio radio-primary m-0 w-100">
                                                <input class="form-check-input" id="radio23" type="radio"
                                                    name="radio5" value="option1">
                                                <label class="form-check-label mb-0 w-100" for="radio23"><span
                                                        class="flex-grow-1 megaoption-space"><span
                                                            class="mt-0 mega-title-badge">COD<span
                                                                class="badge badge-primary pull-right digits">50
                                                                INR</span></span><span>Estimated 10 to 15 Day Shipping (
                                                            Duties end tax may be due delivery )</span></span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="d-flex p-20">
                                            <div class="form-check radio radio-secondary m-0 w-100">
                                                <input class="form-check-input" id="radio24" type="radio"
                                                    name="radio5" value="option1">
                                                <label class="form-check-label mb-0 w-100" for="radio24"><span
                                                        class="flex-grow-1 megaoption-space"><span
                                                            class="mt-0 mega-title-badge">Fast <span
                                                                class="badge badge-secondary pull-right digits">100
                                                                INR</span></span><span>Estimated 10 to 12 Day Shipping (
                                                            Duties end tax may be due delivery )</span></span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="d-flex p-20">
                                            <div class="form-check radio radio-success m-0 w-100">
                                                <input class="form-check-input" id="radio25" type="radio"
                                                    name="radio5" value="option1">
                                                <label class="form-check-label mb-0 w-100" for="radio25"><span
                                                        class="flex-grow-1 megaoption-space"><span
                                                            class="mt-0 mega-title-badge">Standard <span
                                                                class="badge badge-success pull-right digits">80
                                                                INR</span></span><span>Estimated 3 to 5 Day Shipping (
                                                            Duties end tax may be due delivery )</span></span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="d-flex p-20">
                                            <div class="form-check radio radio-info m-0 w-100">
                                                <input class="form-check-input" id="radio5" type="radio"
                                                    name="radio5" value="option1" checked="">
                                                <label class="form-check-label mb-0 w-100" for="radio5"><span
                                                        class="flex-grow-1 megaoption-space"><span
                                                            class="mt-0 mega-title-badge">Local <span
                                                                class="badge badge-info pull-right digits">Free</span></span><span>Estimated
                                                            3 to 5 Day Shipping ( Duties end taxes may be due upon delivery
                                                            )</span></span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <p class="mega-title m-b-5">Buying Option</p>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card mb-0">
                                        <div class="d-flex p-20">
                                            <div class="form-check radio radio-warning m-0 w-100">
                                                <input class="form-check-input" id="radio26" type="radio"
                                                    name="radio7" value="option1" checked="">
                                                <label class="form-check-label mb-0 w-100" for="radio26"><span
                                                        class="flex-grow-1"><span
                                                            class="mt-0 mega-title-badge">Pixelstrap<span
                                                                class="badge badge-warning pull-right digits">250
                                                                INR</span></span><span class="rating-star-wrapper"><i
                                                                class="icofont icofont-star txt-warning"></i><i
                                                                class="icofont icofont-star txt-warning"></i><i
                                                                class="icofont icofont-star txt-warning"></i><i
                                                                class="icofont icofont-star txt-warning"></i><i
                                                                class="icofont icofont-star txt-warning m-r-5"></i>5 start
                                                            rating</span></span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card mb-0">
                                        <div class="d-flex p-20">
                                            <div class="form-check radio radio-danger m-0 w-100">
                                                <input class="form-check-input" id="radio27" type="radio"
                                                    name="radio7" value="option1">
                                                <label class="form-check-label mb-0 w-100" for="radio27"><span
                                                        class="flex-grow-1"><span
                                                            class="mt-0 mega-title-badge">Multikart<span
                                                                class="badge badge-danger pull-right digits">150
                                                                INR</span></span><span class="rating-star-wrapper"><i
                                                                class="icofont icofont-star txt-warning"></i><i
                                                                class="icofont icofont-star txt-warning"></i><i
                                                                class="icofont icofont-star"></i><i
                                                                class="icofont icofont-star"></i><i
                                                                class="icofont icofont-star m-r-5"></i>2 start
                                                            rating</span></span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-end">
                        <button class="btn btn-primary m-r-15" type="submit">Submit</button>
                        <button class="btn btn-light" type="submit">Cancel</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xxl-6 box-col-12">
                <div class="card height-equal">
                    <div class="card-header pb-0">
                        <h4>Horizontal style</h4>
                        <p class="f-m-light mt-1">horizontal style in mega-options. Use the <code>.mega-horizontal</code>
                            class through created horizontal alignments.</p>
                    </div>
                    <div class="card-body">
                        <form class="mega-horizontal">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mega-title">Delivery Option</p>
                                </div>
                                <div class="col-sm-9">
                                    <div class="card">
                                        <div class="d-flex p-20">
                                            <div class="form-check radio radio-primary m-0 w-100">
                                                <input class="form-check-input" id="radio30" type="radio"
                                                    name="radio22" value="option1">
                                                <label class="form-check-label mb-0 w-100" for="radio30"><span
                                                        class="flex-grow-1 megaoption-space"><span
                                                            class="mt-0 mega-title-badge">COD<span
                                                                class="badge badge-primary pull-right digits">50
                                                                INR</span></span><span>Estimated 5 Day Shipping ( Duties end
                                                            tax may be due delivery )</span></span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-9 offset-sm-3">
                                    <div class="card">
                                        <div class="d-flex p-20">
                                            <div class="form-check radio radio-secondary m-0 w-100">
                                                <input class="form-check-input" id="radio31" type="radio"
                                                    name="radio22" value="option1" checked="">
                                                <label class="form-check-label mb-0 w-100" for="radio31"><span
                                                        class="flex-grow-1 megaoption-space"><span
                                                            class="mt-0 mega-title-badge">Fast <span
                                                                class="badge badge-secondary pull-right digits">100
                                                                INR</span></span><span>Estimated 1 Day Shipping ( Duties end
                                                            tax may be due delivery )</span></span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <p class="mega-title">Buying Option</p>
                                </div>
                                <div class="col-sm-9">
                                    <div class="card">
                                        <div class="d-flex p-20">
                                            <div class="form-check radio radio-success m-0 w-100">
                                                <input class="form-check-input" id="radio32" type="radio"
                                                    name="radio23" value="option1">
                                                <label class="form-check-label mb-0 w-100" for="radio32"><span
                                                        class="flex-grow-1"><span
                                                            class="mt-0 mega-title-badge">Pixelstrap<span
                                                                class="badge badge-success pull-right digits">250
                                                                INR</span></span><span class="rating-star-wrapper"><i
                                                                class="icofont icofont-star txt-warning"></i><i
                                                                class="icofont icofont-star txt-warning"></i><i
                                                                class="icofont icofont-star txt-warning"></i><i
                                                                class="icofont icofont-star txt-warning"></i><i
                                                                class="icofont icofont-star txt-warning m-r-5"></i>5 start
                                                            rating</span></span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-9 offset-sm-3">
                                    <div class="card mb-0">
                                        <div class="d-flex p-20">
                                            <div class="form-check radio radio-info m-0 w-100">
                                                <input class="form-check-input" id="radio33" type="radio"
                                                    name="radio23" value="option1" checked="">
                                                <label class="form-check-label mb-0 w-100" for="radio33"><span
                                                        class="flex-grow-1"><span class="mt-0 mega-title-badge">Tivo<span
                                                                class="badge badge-info pull-right digits">150
                                                                INR</span></span><span class="rating-star-wrapper"><i
                                                                class="icofont icofont-star txt-warning"></i><i
                                                                class="icofont icofont-star"></i><i
                                                                class="icofont icofont-star"></i><i
                                                                class="icofont icofont-star"></i><i
                                                                class="icofont icofont-star m-r-5"></i>1 start
                                                            rating</span></span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-end">
                        <button class="btn btn-primary m-r-15" type="submit">Submit</button>
                        <button class="btn btn-light" type="submit">Cancel</button>
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
