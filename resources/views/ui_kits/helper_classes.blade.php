@extends('layouts.simple.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 ps-0">
                    <h3>Helper Classes</h3>
                </div>
                <div class="col-sm-6 pe-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ui Kits</li>
                        <li class="breadcrumb-item active">Helper Classes</li>
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
                        <h4>Styles in borders</h4>
                        <p class="f-m-light mt-1">
                            Use the different styles of borders like: <code>border radius/border-color/border-width</code>.
                            Use of any components.</p>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-xxl-3 col-sm-6">
                                <div class="border-wrapper h-100 alert-light-light dark-helper">
                                    <h3 class="mb-3">Custom border-radius class</h3>
                                    <div class="helper-common-box">
                                        <div class="helper-box b-r-0 bg-light border"></div><span>.b-r-0</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box b-r-1 bg-light border"></div><span>.b-r-1</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box b-r-2 bg-light border"></div><span>.b-r-2</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box b-r-3 bg-light border"></div><span>.b-r-3</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box b-r-4 bg-light border"></div><span>.b-r-4</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box b-r-5 bg-light border"></div><span>.b-r-5</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box b-r-6 bg-light border"></div><span>.b-r-6</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box b-r-7 bg-light border"></div><span>.b-r-7</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box b-r-8 bg-light border"></div><span>.b-r-8</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box b-r-9 bg-light border"></div><span>.b-r-9</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box b-r-10 bg-light border"></div><span>.b-r-10</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-sm-6">
                                <div class="border-wrapper h-100 alert-light-light dark-helper">
                                    <h3 class="mb-3">Border color</h3>
                                    <div class="helper-common-box">
                                        <div class="helper-box border-primary border"></div><span>.border-primary</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box border-secondary border"></div><span>.border-secondary</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box border-success border"></div><span>.border-success</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box border-danger border"></div><span>.border-danger</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box border-warning border"></div><span>.border-warning</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box border-info border"></div><span>.border-info</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box border-dark border"></div><span>.border-dark</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-sm-6">
                                <div class="border-wrapper h-100 alert-light-light dark-helper">
                                    <h3 class="mb-3">Border-width</h3>
                                    <div class="helper-common-box">
                                        <div class="helper-box border-1 border"> </div><span>.border-1</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box border-2 border"> </div><span>.border-2</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box border-3 border"> </div><span>.border-3</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box border-4 border"> </div><span>.border-4</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box border-5 border"> </div><span>.border-5</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box border-6 border"> </div><span>.border-6</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box border-7 border"> </div><span>.border-7</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box border-8 border"> </div><span>.border-8</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box border-9 border"> </div><span>.border-9</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box border-10 border"> </div><span>.border-10 </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-sm-6">
                                <div class="border-wrapper alert-light-light h-100 dark-helper">
                                    <h3 class="mb-3">Text colors</h3>
                                    <div class="helper-common-box">
                                        <div class="helper-box helper-text border txt-primary">C </div>
                                        <span>.txt-primary</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box helper-text border txt-secondary">C </div>
                                        <span>.txt-secondary</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box helper-text border txt-success">C </div>
                                        <span>.txt-success</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box helper-text border txt-danger">C </div>
                                        <span>.txt-danger</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box helper-text border txt-warning">C </div>
                                        <span>.txt-warning</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box helper-text border txt-info">C </div><span>.txt-info</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box helper-text border txt-dark">C </div><span>.txt-dark</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box helper-text border txt-light bg-dark">C </div>
                                        <span>.txt-light</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Borders and displays</h4>
                        <p class="f-m-light mt-1">
                            Use border utilities to add or remove an element's borders.</p>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-xl-4 col-sm-6">
                                <div class="border-wrapper h-100 border">
                                    <h3 class="mb-3">Additive border </h3>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-light border"></div><span>.border</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-light border-top"></div><span>.border-top</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-light border-bottom"></div><span>.border-bottom</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-light border-start"></div><span>.border-start</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-light border-end"></div><span>.border-end</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="border-wrapper h-100 border">
                                    <h3 class="mb-3">Subtractive border</h3>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-light border border-0"> </div><span>.border-0</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-light border border-top-0"> </div>
                                        <span>.border-top-0</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-light border border-end-0"> </div>
                                        <span>.border-end-0</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-light border border-bottom-0"> </div>
                                        <span>.border-bottom-0</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-light border border-start-0"> </div>
                                        <span>.border-start-0</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-12">
                                <div class="border-wrapper h-100 border">
                                    <h3 class="mb-3">Additive radius</h3>
                                    <div class="helper-common-box">
                                        <div class="helper-radius bg-light rounded"></div><span>.rounded</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-radius bg-light rounded-top"></div><span>.rounded-top</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-radius bg-light rounded-end"></div><span>.rounded-end</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-radius bg-light rounded-bottom"></div>
                                        <span>.rounded-bottom</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-radius bg-light rounded-start"></div><span>.rounded-start</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-radius bg-light rounded-pill"></div><span>.rounded-pill</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-radius bg-light rounded-circle"></div>
                                        <span>.rounded-circle</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-radius bg-light rounded-0"></div><span>.rounded-0 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Background colors </h4>
                        <p class="f-m-light mt-1">
                            Use the <code>.bg-* </code>and <code>.alert-light-* </code>colors in crocs theme. Use of any
                            components.</p>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-xl-4 col-sm-6">
                                <div class="border-wrapper h-100 border">
                                    <h3 class="mb-3">Dark background</h3>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-primary"></div><span>.bg-primary </span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-secondary"></div><span>.bg-secondary </span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-success"></div><span>.bg-success </span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-danger"></div><span>.bg-danger </span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-warning"></div><span>.bg-warning </span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-info"></div><span>.bg-info </span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-dark"></div><span>.bg-dark </span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-light"></div><span>.bg-light </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="border-wrapper h-100 border">
                                    <h3 class="mb-3">Light backgrounds</h3>
                                    <div class="helper-common-box">
                                        <div class="helper-box alert-light-primary"> </div><span>.alert-light-primary
                                        </span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box alert-light-secondary"></div>
                                        <span>.alert-light-secondary</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box alert-light-success"></div><span>.alert-light-success</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box alert-light-danger"></div><span>.alert-light-danger</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box alert-light-warning"></div><span>.alert-light-warning</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box alert-light-info"></div><span>.alert-light-info</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box alert-light-dark"></div><span>.alert-light-dark</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box alert-light-light"></div><span>.alert-light-light</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-12">
                                <div class="border-wrapper h-100 border">
                                    <h3 class="mb-3">Extended background colors</h3>
                                    <div class="helper-common-box">
                                        <div class="helper-box light-card"> </div><span>.light-card</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box light-background border"></div><span>.light-background
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Border color</h4>
                        <p class="f-m-light mt-1">
                            Use the <code>.b-*/.b-t-*/.b-b-*/.b-l-*/.b-r-* </code>class for borders.</p>
                    </div>
                    <div class="card-body">
                        <div class="gradient-border">
                            <div class="helper-common-box">
                                <div class="helper-box b-primary border fill-wrapper"> </div><span>.b-primary</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-t-primary border fill-wrapper"> </div><span>.b-t-primary</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-b-primary border fill-wrapper"> </div><span>.b-b-primary</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-l-primary border fill-wrapper"> </div><span>.b-l-primary</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-r-primary border fill-wrapper"> </div><span>.b-r-primary</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-secondary border fill-wrapper"> </div><span>.b-secondary</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-t-secondary border fill-wrapper"> </div>
                                <span>.b-t-secondary</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-b-secondary border fill-wrapper"> </div>
                                <span>.b-b-secondary</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-l-secondary border fill-wrapper"> </div>
                                <span>.b-l-secondary</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-r-secondary border fill-wrapper"> </div>
                                <span>.b-r-secondary</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-success border fill-wrapper"> </div><span>.b-success</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-t-success border fill-wrapper"> </div><span>.b-t-success</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-b-success border fill-wrapper"> </div><span>.b-b-success</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-l-success border fill-wrapper"> </div><span>.b-l-success</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-r-success border fill-wrapper"> </div><span>.b-r-success</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-danger border fill-wrapper"> </div><span>.b-danger</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-t-danger border fill-wrapper"> </div><span>.b-t-danger</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-b-danger border fill-wrapper"> </div><span>.b-b-danger</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-l-danger border fill-wrapper"> </div><span>.b-l-danger</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-r-danger border fill-wrapper"> </div><span>.b-r-danger</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-warning border fill-wrapper"> </div><span>.b-warning</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-t-warning border fill-wrapper"> </div><span>.b-t-warning</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-b-warning border fill-wrapper"> </div><span>.b-b-warning</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-l-warning border fill-wrapper"> </div><span>.b-l-warning</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-r-warning border fill-wrapper"> </div><span>.b-r-warning</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-info border fill-wrapper"> </div><span>.b-info</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-t-info border fill-wrapper"> </div><span>.b-t-info</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-b-info border fill-wrapper"> </div><span>.b-b-info</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-l-info border fill-wrapper"> </div><span>.b-l-info</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-r-info border fill-wrapper"> </div><span>.b-r-info</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-dark border fill-wrapper"> </div><span>.b-dark</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-t-dark border fill-wrapper"> </div><span>.b-t-dark</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-b-dark border fill-wrapper"> </div><span>.b-b-dark</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-l-dark border fill-wrapper"> </div><span>.b-l-dark</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-r-dark border fill-wrapper"> </div><span>.b-r-dark</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-light border fill-wrapper"> </div><span>.b-light</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-t-light border fill-wrapper"> </div><span>.b-t-light</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-b-light border fill-wrapper"> </div><span>.b-b-light</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-l-light border fill-wrapper"> </div><span>.b-l-light</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-r-light border fill-wrapper"> </div><span>.b-r-light</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card height-equal">
                    <div class="card-header pb-0">
                        <h4>Images sizes</h4>
                        <p class="f-m-light mt-1">
                            Use the width and height of images class like: <code>.img-* </code>and <code>.img-h-*</code>.
                        </p>
                    </div>
                    <div class="card-body">
                        <div class="gradient-border gap-3"><img class="img-30 img-h-30"
                                src="{{ asset('assets/images/blog/comment.jpg') }}" alt="img-size-30"><img
                                class="img-40 img-h-40" src="{{ asset('assets/images/blog/comment.jpg') }}"
                                alt="img-size-40"><img class="img-50 img-h-50"
                                src="{{ asset('assets/images/blog/comment.jpg') }}" alt="img-size-50"><img
                                class="img-60 img-h-60" src="{{ asset('assets/images/blog/comment.jpg') }}"
                                alt="img-size-60"><img class="img-70 img-h-70"
                                src="{{ asset('assets/images/blog/comment.jpg') }}" alt="img-size-70"><img
                                class="img-80 img-h-80" src="{{ asset('assets/images/blog/comment.jpg') }}"
                                alt="img-size-80"><img class="img-90 img-h-90"
                                src="{{ asset('assets/images/blog/comment.jpg') }}" alt="img-size-90"><img
                                class="img-100 img-h-100" src="{{ asset('assets/images/blog/comment.jpg') }}"
                                alt="img-size-100"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card height-equal">
                    <div class="card-header pb-0">
                        <h4>Font-style</h4>
                        <p class="f-m-light mt-1">
                            Use the font-style like: <code> .f-s-*[normal/italic/oblique/initial/inherit]</code>.</p>
                    </div>
                    <div class="card-body">
                        <p class="f-s-normal">
                            This is a <strong>.f-s-normal</strong> font-style </p>
                        <p class="f-s-italic">This is a <strong>.f-s-italic</strong> font-style </p>
                        <p class="f-s-oblique">This is a <strong>.f-s-oblique</strong> font-style </p>
                        <p class="f-s-initial">This is a <strong>.f-s-initial</strong> font-style </p>
                        <p class="f-s-inherit">This is a <strong>.f-s-inherit</strong> font-style </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card height-equal">
                    <div class="card-header pb-0">
                        <h4>Font weight </h4>
                        <p class="f-m-light mt-1">
                            Use the font-weight classes like: <code>.f-w-* [100/300/400/600/700/900]</code></p>
                    </div>
                    <div class="card-body">
                        <div class="helper-common-box">
                            <div class="f-w-100">
                                You can set light font weight heading .f-w-100</div>
                        </div>
                        <div class="helper-common-box">
                            <div class="f-w-300">You can set light font weight heading .f-w-300</div>
                        </div>
                        <div class="helper-common-box">
                            <div class="f-w-400">You can set light font weight heading .f-w-400</div>
                        </div>
                        <div class="helper-common-box">
                            <div class="f-w-600">You can set bolder font weight heading .f-w-600</div>
                        </div>
                        <div class="helper-common-box">
                            <div class="f-w-700">You can set bold font weight heading .f-w-700</div>
                        </div>
                        <div class="helper-common-box">
                            <div class="f-w-900">You can set bold font weight heading .f-w-900</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card height-equal">
                    <div class="card-header pb-0">
                        <h4>Text colors</h4>
                        <p class="f-m-light mt-1">
                            Use the text color for <code>.font-*</code> class.</p>
                    </div>
                    <div class="card-body">
                        <div class="helper-common-box"></div>
                        <div class="font-primary">
                            This is a <strong>font-primary </strong> text used class as .font-primary</div>
                        <div class="helper-common-box"></div>
                        <div class="font-secondary">This is a <strong>font-secondary </strong> text used class as
                            .font-secondary </div>
                        <div class="helper-common-box"></div>
                        <div class="font-success">This is a <strong>font-success </strong> text used class as .font-success
                        </div>
                        <div class="helper-common-box"></div>
                        <div class="font-danger">This is a <strong>font-danger </strong> text used class as .font-danger
                        </div>
                        <div class="helper-common-box"></div>
                        <div class="font-warning">This is a <strong>font-warning </strong> text used class as .font-warning
                        </div>
                        <div class="helper-common-box"></div>
                        <div class="font-info">This is a <strong>font-info </strong> text used class as .font-info</div>
                        <div class="helper-common-box"></div>
                        <div class="font-dark">This is a <strong>font-dark </strong> text used class as .font-dark</div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Font sizes</h4>
                        <p class="f-m-light mt-1">
                            Use the font-size for <code>.f-* [14/16/18/20/22/24/26/28/30/32/34/36/38/40]</code>.</p>
                    </div>
                    <div class="card-body">
                        <div class="gradient-border">
                            <div class="font-wrapper border">
                                <div class="f-14">Font-size .f-14</div>
                            </div>
                            <div class="font-wrapper border">
                                <div class="f-16">Font-size .f-16</div>
                            </div>
                            <div class="font-wrapper border">
                                <div class="f-18">Font-size .f-18</div>
                            </div>
                            <div class="font-wrapper border">
                                <div class="f-20">Font-size .f-20</div>
                            </div>
                            <div class="font-wrapper border">
                                <div class="f-22">Font-size .f-22</div>
                            </div>
                            <div class="font-wrapper border">
                                <div class="f-24">Font-size .f-24</div>
                            </div>
                            <div class="font-wrapper border">
                                <div class="f-26">Font-size .f-26</div>
                            </div>
                            <div class="font-wrapper border">
                                <div class="f-28">Font-size .f-28</div>
                            </div>
                            <div class="font-wrapper border">
                                <div class="f-30">Font-size .f-30</div>
                            </div>
                            <div class="font-wrapper border">
                                <div class="f-32">Font-size .f-32</div>
                            </div>
                            <div class="font-wrapper border">
                                <div class="f-34">Font-size .f-34</div>
                            </div>
                            <div class="font-wrapper border">
                                <div class="f-36">Font-size .f-36</div>
                            </div>
                            <div class="font-wrapper border">
                                <div class="f-38">Font-size .f-38</div>
                            </div>
                            <div class="font-wrapper border">
                                <div class="f-40">Font-size .f-40</div>
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
