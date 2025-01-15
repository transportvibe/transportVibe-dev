@extends('layouts.simple.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 ps-0">
                    <h3>Avatars</h3>
                </div>
                <div class="col-sm-6 pe-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ui Kits</li>
                        <li class="breadcrumb-item active">Avatars</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="user-profile">
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4 class="mb-0">Sizes</h4>
                            <p class="mb-0 mt-1">You can change the size of avatar using <code>.img- * (70/80/90/100)</code>
                                class.</p>
                            <div class="card-header-right">
                                <ul class="list-unstyled card-option">
                                    <li>
                                        <div><i class="icon-settings"></i></div>
                                    </li>
                                    <li><i class="view-html fa fa-code"></i></li>
                                    <li><i class="icofont icofont-maximize full-card"></i></li>
                                    <li><i class="icofont icofont-minus minimize-card"></i></li>
                                    <li><i class="icofont icofont-refresh reload-card"></i></li>
                                    <li><i class="icofont icofont-error close-card"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body avatar-showcase">
                            <div class="avatars">
                                <div class="avatar"><img class="img-100 rounded-circle"
                                        src="{{ asset('assets/images/avtar/3.jpg') }}" alt="#"></div>
                                <div class="avatar"><img class="img-90 rounded-circle"
                                        src="{{ asset('assets/images/avtar/4.jpg') }}" alt="#"></div>
                                <div class="avatar"><img class="img-80 rounded-circle"
                                        src="{{ asset('assets/images/avtar/7.jpg') }}" alt="#"></div>
                                <div class="avatar"><img class="img-70 rounded-circle"
                                        src="{{ asset('assets/images/avtar/11.jpg') }}" alt="#"></div>
                                <div class="code-box-copy">
                                    <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#avatar-size"
                                        title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                    <pre><code class="language-html" id="avatar-size">&lt;!--You can use img-* class through change the size of avatar (70/80/90/100).--&gt;
&lt;div class="avatar"&gt;
&lt;img class="img-100 rounded-circle" src="{{ asset('assets/images/avtar/3.jpg') }}" alt="#"&gt;
&lt;/div&gt;
&lt;div class="avatar"&gt;
&lt;img class="img-90 rounded-circle" src="{{ asset('assets/images/avtar/4.jpg') }}" alt="#"&gt;
&lt;/div&gt;
&lt;div class="avatar"&gt;
&lt;img class="img-80 rounded-circle" src="{{ asset('assets/images/avtar/7.jpg') }}" alt="#"&gt;
&lt;/div&gt;
&lt;div class="avatar"&gt;
&lt;img class="img-70 rounded-circle" src="{{ asset('assets/images/avtar/11.jpg') }}" alt="#"&gt;
&lt;/div&gt;</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4 class="mb-0">Status Indicator</h4>
                            <p class="mb-0 mt-1">Using <code> .status-* (online/offline/dnd)</code> class you can set the
                                status of avatar.</p>
                            <div class="card-header-right">
                                <ul class="list-unstyled card-option">
                                    <li>
                                        <div><i class="icon-settings"></i></div>
                                    </li>
                                    <li><i class="view-html fa fa-code"></i></li>
                                    <li><i class="icofont icofont-maximize full-card"></i></li>
                                    <li><i class="icofont icofont-minus minimize-card"></i></li>
                                    <li><i class="icofont icofont-refresh reload-card"></i></li>
                                    <li><i class="icofont icofont-error close-card"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body avatar-showcase">
                            <div class="avatars">
                                <div class="avatar"><img class="img-100 rounded-circle"
                                        src="{{ asset('assets/images/user/1.jpg') }}" alt="#">
                                    <div class="status status-online"></div>
                                </div>
                                <div class="avatar"><img class="img-90 rounded-circle"
                                        src="{{ asset('assets/images/avtar/16.jpg') }}" alt="#">
                                    <div class="status status-dnd"></div>
                                </div>
                                <div class="avatar"><img class="img-80 rounded-circle"
                                        src="{{ asset('assets/images/avtar/7.jpg') }}" alt="#">
                                    <div class="status status-offline"></div>
                                </div>
                                <div class="avatar"><img class="img-70 rounded-circle"
                                        src="{{ asset('assets/images/avtar/3.jpg') }}" alt="#">
                                    <div class="status status-online"></div>
                                </div>
                                <div class="code-box-copy">
                                    <button class="code-box-copy__btn btn-clipboard"
                                        data-clipboard-target="#avatar-indicator" title="Copy"><i
                                            class="icofont icofont-copy-alt"></i></button>
                                    <pre><code class="language-html" id="avatar-indicator">&lt;!-- You can use status-* class through the set status (online/offline/dnd). --&gt;
&lt;div class="avatar"&gt;
&lt;img class="img-100 rounded-circle" src="{{ asset('assets/images/user/1.jpg') }}" alt="#"&gt;
&lt;div class="status status-online"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="avatar"&gt;
&lt;img class="img-90 rounded-circle" src="{{ asset('assets/images/avtar/16.jpg') }}" alt="#"&gt;
&lt;div class="status status-dnd"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="avatar"&gt;&lt;img class="img-80 rounded-circle" src="{{ asset('assets/images/avtar/7.jpg') }}" alt="#"&gt;
&lt;div class="status status-offline"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="avatar"&gt;&lt;img class="img-70 rounded-circle" src="{{ asset('assets/images/avtar/3.jpg') }}" alt="#"&gt;
&lt;div class="status status-online"&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4>Shapes</h4>
                            <p class="mb-0 mt-1">Using the<code>.b-r-* (8/30/35/25)</code> class you can set the shapes of
                                avatar.</p>
                            <div class="card-header-right">
                                <ul class="list-unstyled card-option">
                                    <li>
                                        <div><i class="icon-settings"></i></div>
                                    </li>
                                    <li><i class="view-html fa fa-code"></i></li>
                                    <li><i class="icofont icofont-maximize full-card"></i></li>
                                    <li><i class="icofont icofont-minus minimize-card"></i></li>
                                    <li><i class="icofont icofont-refresh reload-card"></i></li>
                                    <li><i class="icofont icofont-error close-card"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body avatar-showcase">
                            <div class="avatars">
                                <div class="avatar"><img class="img-100 b-r-8"
                                        src="{{ asset('assets/images/avtar/4.jpg') }}" alt="#"></div>
                                <div class="avatar"><img class="img-90 b-r-30"
                                        src="{{ asset('assets/images/avtar/16.jpg') }}" alt="#"></div>
                                <div class="avatar"><img class="img-80 b-r-35"
                                        src="{{ asset('assets/images/avtar/3.jpg') }}" alt="#"></div>
                                <div class="avatar"><img class="img-70 rounded-circle"
                                        src="{{ asset('assets/images/avtar/11.jpg') }}" alt="#"></div>
                                <div class="code-box-copy">
                                    <button class="code-box-copy__btn btn-clipboard"
                                        data-clipboard-target="#avatar-shapes" title="Copy"><i
                                            class="icofont icofont-copy-alt"></i></button>
                                    <pre><code class="language-html" id="avatar-shapes">&lt;!-- Give the shape to avatar using .b-r-* class. (8/25/30/35). --&gt;
&lt;div class="avatar"&gt;
&lt;img class="img-100 b-r-8" src="{{ asset('assets/images/avtar/4.jpg') }}" alt="#"&gt;
&lt;/div&gt;
&lt;div class="avatar"&gt;
&lt;img class="img-90 b-r-30" src="{{ asset('assets/images/avtar/16.jpg') }}" alt="#"&gt;
&lt;/div&gt;
&lt;div class="avatar"&gt;
&lt;img class="img-80 b-r-35" src="{{ asset('assets/images/avtar/3.jpg') }}" alt="#"&gt;
&lt;/div&gt;
&lt;div class="avatar"&gt;
&lt;img class="img-70 rounded-circle" src="{{ asset('assets/images/avtar/11.jpg') }}" alt="#"&gt;
&lt;/div&gt;</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4>Ratio</h4>
                            <p class="mb-0 mt-1">Give the shape to avatar using <code>.ratio</code> and <code> img-*
                                    (50/70/80/90/100)</code> class.</p>
                            <div class="card-header-right">
                                <ul class="list-unstyled card-option">
                                    <li>
                                        <div><i class="icon-settings"></i></div>
                                    </li>
                                    <li><i class="view-html fa fa-code"></i></li>
                                    <li><i class="icofont icofont-maximize full-card"></i></li>
                                    <li><i class="icofont icofont-minus minimize-card"></i></li>
                                    <li><i class="icofont icofont-refresh reload-card"></i></li>
                                    <li><i class="icofont icofont-error close-card"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body avatar-showcase">
                            <div class="avatars">
                                <div class="avatar ratio"><img class="b-r-8 img-100"
                                        src="{{ asset('assets/images/avtar/11.jpg') }}" alt="#"></div>
                                <div class="avatar ratio"><img class="b-r-8 img-90"
                                        src="{{ asset('assets/images/avtar/4.jpg') }}" alt="#"></div>
                                <div class="avatar ratio"><img class="b-r-8 img-80"
                                        src="{{ asset('assets/images/user/1.jpg') }}" alt="#"></div>
                                <div class="avatar ratio"><img class="b-r-8 img-70"
                                        src="{{ asset('assets/images/avtar/16.jpg') }}" alt="#"></div>
                                <div class="avatar ratio"><img class="b-r-8 img-50"
                                        src="{{ asset('assets/images/avtar/7.jpg') }}" alt="#"></div>
                                <div class="code-box-copy">
                                    <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#avatar-ratio"
                                        title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                    <pre><code class="language-html" id="avatar-ratio">&lt;!-- You can use b-r-* class through the set status (100/90/80/70/50). --&gt;
&lt;div class="avatars"&gt;
&lt;div class="avatar ratio"&gt;
&lt;img class="b-r-8 img-100" src="{{ asset('assets/images/avtar/11.jpg') }}" alt="#"&gt;
&lt;/div&gt;
&lt;div class="avatar ratio"&gt;
&lt;img class="b-r-8 img-90" src="{{ asset('assets/images/avtar/4.jpg') }}" alt="#"&gt;
&lt;/div&gt;
&lt;div class="avatar ratio"&gt;
&lt;img class="b-r-8 img-80" src="{{ asset('assets/images/user/1.jpg') }}" alt="#"&gt;
&lt;/div&gt;
&lt;div class="avatar ratio"&gt;
&lt;img class="b-r-8 img-70" src="{{ asset('assets/images/avtar/16.jpg') }}" alt="#"&gt;
&lt;/div&gt;
&lt;div class="avatar ratio"&gt;
&lt;img class="b-r-8 img-50" src="{{ asset('assets/images/avtar/7.jpg') }}" alt="#"&gt;
&lt;/div&gt;</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4>Grouping</h4>
                            <p class="mb-0 mt-1">You can set the group of avatars like <code>.img-* (40/50/60/80/100)
                                </code>and <code>.b-r-* (8/30/35)</code>.</p>
                            <div class="card-header-right">
                                <ul class="list-unstyled card-option">
                                    <li>
                                        <div><i class="icon-settings"></i></div>
                                    </li>
                                    <li><i class="view-html fa fa-code"></i></li>
                                    <li><i class="icofont icofont-maximize full-card"></i></li>
                                    <li><i class="icofont icofont-minus minimize-card"></i></li>
                                    <li><i class="icofont icofont-refresh reload-card"></i></li>
                                    <li><i class="icofont icofont-error close-card"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body avatar-showcase">
                            <div class="avatars">
                                <div class="customers d-inline-block avatar-group">
                                    <ul>
                                        <li class="d-inline-block"><img class="img-100 b-r-8"
                                                src="{{ asset('assets/images/avtar/4.jpg') }}" alt="#"></li>
                                        <li class="d-inline-block"><img class="img-80 b-r-30"
                                                src="{{ asset('assets/images/avtar/16.jpg') }}" alt="#"></li>
                                        <li class="d-inline-block"><img class="img-50 b-r-35"
                                                src="{{ asset('assets/images/avtar/3.jpg') }}" alt="#"></li>
                                    </ul>
                                </div>
                                <div class="customers d-inline-block avatar-group">
                                    <ul>
                                        <li class="d-inline-block"><img class="img-60 rounded-circle"
                                                src="{{ asset('assets/images/avtar/16.jpg') }}" alt="#"></li>
                                        <li class="d-inline-block"><img class="b-r-8 img-80"
                                                src="{{ asset('assets/images/user/1.jpg') }}" alt="#"></li>
                                        <li class="d-inline-block"><img class="img-60 rounded-circle"
                                                src="{{ asset('assets/images/avtar/16.jpg') }}" alt="#"></li>
                                    </ul>
                                </div>
                                <div class="customers d-inline-block avatar-group">
                                    <ul>
                                        <li class="d-inline-block"><img class="img-40 rounded-circle"
                                                src="{{ asset('assets/images/user/3.jpg') }}" alt=""></li>
                                        <li class="d-inline-block"><img class="img-40 rounded-circle"
                                                src="{{ asset('assets/images/user/5.jpg') }}" alt=""></li>
                                        <li class="d-inline-block"><img class="img-40 rounded-circle"
                                                src="{{ asset('assets/images/user/1.jpg') }}" alt=""></li>
                                    </ul>
                                </div>
                                <div class="code-box-copy">
                                    <button class="code-box-copy__btn btn-clipboard"
                                        data-clipboard-target="#avatar-grouping" title="Copy"><i
                                            class="icofont icofont-copy-alt"></i></button>
                                    <pre><code class="language-html" id="avatar-grouping">&lt;!-- You can set the group of avatars use img-* and .b-r-* class (40/50/60/80/100) and (8/30/35). --&gt;
&lt;div class="customers d-inline-block avatar-group"&gt;
&lt;ul&gt;
&lt;li class="d-inline-block"&gt;
&lt;img class="img-100 b-r-8" src="{{ asset('assets/images/avtar/4.jpg') }}" alt="#"&gt;
&lt;/li&gt;
&lt;li class="d-inline-block"&gt;
&lt;img class="img-80 b-r-30" src="{{ asset('assets/images/avtar/16.jpg') }}" alt="#"&gt;
&lt;/li&gt;
&lt;li class="d-inline-block"&gt;
&lt;/li&gt;&lt;img class="img-50 b-r-35" src="{{ asset('assets/images/avtar/3.jpg') }}" alt="#"&gt;
&lt;/ul&gt;
&lt;/div&gt;
&lt;div class="customers d-inline-block avatar-group"&gt;
&lt;ul&gt;
&lt;li class="d-inline-block"&gt;
&lt;img class="img-60 rounded-circle" src="{{ asset('assets/images/avtar/16.jpg') }}" alt="#"&gt;
&lt;/li&gt;
&lt;li class="d-inline-block"&gt;
&lt;img class="b-r-8 img-80" src="{{ asset('assets/images/user/1.jpg') }}" alt="#"&gt;
&lt;/li&gt;
&lt;li class="d-inline-block"&gt;
&lt;img class="img-60 rounded-circle" src="{{ asset('assets/images/avtar/16.jpg') }}" alt="#"&gt;
&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;
&lt;div class="customers d-inline-block avatar-group"&gt;
&lt;ul&gt;
&lt;li class="d-inline-block"&gt;
&lt;img class="img-40 rounded-circle" src="{{ asset('assets/images/user/3.jpg') }}" alt=""&gt;
&lt;/li&gt;
&lt;li class="d-inline-block"&gt;
&lt;img class="img-40 rounded-circle" src="{{ asset('assets/images/user/5.jpg') }}" alt=""&gt;
&lt;/li&gt;
&lt;li class="d-inline-block"&gt;
&lt;img class="img-40 rounded-circle" src="{{ asset('assets/images/user/1.jpg') }}" alt=""&gt;
&lt;/li&gt;
&lt;/ul&gt;</code></pre>
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
    <script src="{{ asset('assets/js/prism/prism.min.js') }}"></script>
    <script src="{{ asset('assets/js/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom-card/custom-card.js') }}"></script>
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection
