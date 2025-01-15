@extends('layouts.simple.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 ps-0">
                    <h3>Ribbons</h3>
                </div>
                <div class="col-sm-6 pe-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Bonus Ui</li>
                        <li class="breadcrumb-item active">Ribbons</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <!-- ribbon left (default) side-->
        <div class="row">
            <div class="col-sm-12 col-xl-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Variations Of Left Ribbons</h4>
                        <p class="f-m-light mt-1">Use the class of
                            <code>.ribbon-*</code>[ribbon-space-bottom/ribbon-clip/ribbon-vertical-left/ribbon-bookmark/ribbon-clip-bottom/ribbon-vertical-left]
                            through create ribbons and all ribbon colors are available.<code>[.ribbon-*] </code>
                        </p>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-sm-6 col-xl-4">
                                <div class="ribbon-wrapper border border-1 height-equal alert-light-light">
                                    <div class="ribbon ribbon-primary ribbon-space-bottom">SAVE 10%</div>
                                    <p><em class="txt-danger">Ribbon designs</em> have been a part of web design. There is a
                                        design for you in this collection, regardless of whether you use <em
                                            class="txt-danger">CSS ribbons </em> to identify your items.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="ribbon-wrapper border border-1 height-equal">
                                    <div class="ribbon ribbon-secondary ribbon-clip">SAVE 50%</div>
                                    <p>The <em class="txt-danger">ribbon and tag</em> frequently appear together because
                                        they have similar features that capture attention and make wonderful spaces for
                                        vital information.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div
                                    class="ribbon-vertical-left-wrapper border border-1 vertical-lp-space height-equal alert-light-light">
                                    <div class="ribbon ribbon-warning ribbon-vertical-left"><i
                                            class="icofont icofont-love"></i></div>
                                    <p>The <em class="txt-danger">ribbons</em> have also been utilised by certain inventive
                                        developers in the menu and navigation choices.The possibilities are endless when it
                                        comes to creativity. </p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="ribbon-wrapper border border-1 height-equal">
                                    <div class="ribbon ribbon-info ribbon-bookmark">Cashback 20%</div>
                                    <p> Although the majority of the <em class="txt-danger">ribbon components</em> on this
                                        list have static, straightforward styles, we have also gathered dynamic ribbons.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div
                                    class="ribbon-wrapper-bottom border border-1 clip-bp-space height-equal alert-light-light">
                                    <div class="ribbon ribbon-dark ribbon-clip-bottom">40% OFF</div>
                                    <p>Edge <em class="txt-danger">ribbon </em>among the most often used <em
                                            class="txt-danger">ribbon styles is CSS.</em> This design's author provides you
                                        with a short piece of code that has room for several optional components and
                                        effects.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="ribbon-vertical-left-wrapper border border-1 vertical-lp-space height-equal">
                                    <div class="ribbon ribbon-bookmark ribbon-vertical-left ribbon-danger"><i
                                            class="icon-gift"></i></div>
                                    <p>The entire ribbon and other components seem clean since they were created entirely
                                        with CSS. You may utilize the <em class="txt-danger">ribbons</em> as cards to
                                        deliver the material.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ribbon right side(default)-->
        <div class="row">
            <div class="col-sm-12 col-xl-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Variations Of Right Ribbons</h4>
                        <p class="f-m-light mt-1">Use the class of
                            <code>.ribbon-*</code>[ribbon-right/ribbon-clip-right/ribbon-vertical-right/ribbon-bookmark/ribbon-clip-bottom-right/ribbon-vertical-right]
                            through create ribbons and all ribbon colors are available.<code>[.ribbon-*]</code>
                        </p>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-sm-6 col-xl-4">
                                <div class="ribbon-wrapper border border-1 height-equal">
                                    <div class="ribbon ribbon-dark ribbon-right">50% OFF</div>
                                    <p>The <em class="txt-danger">ribbon and tag</em> frequently appear together because
                                        they have similar features that capture attention and make wonderful spaces for
                                        vital information.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="ribbon-wrapper-right border border-1 height-equal alert-light-light">
                                    <div class="ribbon ribbon-primary ribbon-clip-right ribbon-right">SAVE 50%</div>
                                    <p>Since very early times, <em class="txt-danger">ribbon designs</em> have been a part
                                        of web design. There is a design for you in this collection, regardless of whether
                                        you use <em class="txt-danger">CSS ribbons </em> to identify your items.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="ribbon-vertical-right-wrapper border border-1 vertical-rp-space height-equal">
                                    <div class="ribbon ribbon-bookmark ribbon-vertical-right ribbon-secondary"><i
                                            class="icon-signal"></i></div>
                                    <p>The entire ribbon and other components seem clean since they were created entirely
                                        with CSS. You may utilize the <em class="txt-danger">ribbons</em> as cards to
                                        deliver the material. </p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="ribbon-wrapper border border-1 height-equal alert-light-light">
                                    <div class="ribbon ribbon-warning ribbon-bookmark ribbon-right">SAVE 20%</div>
                                    <p>Edge <em class="txt-danger">ribbon </em>among the most often used <em
                                            class="txt-danger">ribbon styles is CSS.</em> This design's author provides you
                                        with a short piece of code that has room for several optional components and
                                        effects.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="ribbon-wrapper-bottom border border-1 clip-bp-space height-equal">
                                    <div class="ribbon ribbon-success ribbon-clip-bottom-right">Cashback 10%</div>
                                    <p> Although the majority of the <em class="txt-danger">ribbon components</em> on this
                                        list have static, straightforward styles, we have also gathered dynamic ribbons.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div
                                    class="ribbon-vertical-right-wrapper border border-1 vertical-rp-space height-equal alert-light-light">
                                    <div class="ribbon ribbon-danger ribbon-vertical-right"><i class="fa fa-taxi"></i></div>
                                    <p>The <em class="txt-danger">ribbons</em> have also been utilized by certain inventive
                                        developers in the menu and navigation choices. The possibilities are endless when it
                                        comes to creativity.</p>
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
