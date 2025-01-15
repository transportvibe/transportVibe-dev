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
                    <h3>Tag & Pills</h3>
                </div>
                <div class="col-sm-6 pe-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item"> Ui Kits</li>
                        <li class="breadcrumb-item active">Tag & Pills</li>
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
                    <div class="card-header pb-0">
                        <h4>Badges Contextual Variations</h4>
                        <p class="f-m-light mt-1">
                            Use the<code>.badge </code>utility class to make more badges.</p>
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
                    <div class="card-body">
                        <div class="badge-spacing"><span class="badge badge-primary">Primary</span><span
                                class="badge badge-secondary">Secondary</span><span
                                class="badge badge-success">Success</span><span class="badge badge-info">Info</span><span
                                class="badge badge-warning text-dark">Warning</span><span
                                class="badge badge-danger">Danger</span><span
                                class="badge badge-light text-dark">Light</span><span
                                class="badge badge-dark tag-pills-sm-mb">Dark</span>
                            <div class="code-box-copy">
                                <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#badge-variations"
                                    title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                <pre><code class="language-html" id="badge-variations">&lt;!--You can use badge-* class through change the colors of badges (primary/secondary/success...).--&gt;
&lt;span class="badge badge-primary"&gt;Primary&lt;/span&gt;
&lt;span class="badge badge-secondary"&gt;Secondary&lt;/span&gt;
&lt;span class="badge badge-success"&gt;Success&lt;/span&gt;
&lt;span class="badge badge-info"&gt;Info&lt;/span&gt;
&lt;span class="badge badge-warning text-dark"&gt;Warning&lt;/span&gt;
&lt;span class="badge badge-danger"&gt;Danger&lt;/span&gt;
&lt;span class="badge badge-light text-dark"&gt;Light&lt;/span&gt;
&lt;span class="badge badge-dark tag-pills-sm-mb"&gt;Dark&lt;/span&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Pills Contextual Variations</h4>
                        <p class="f-m-light mt-1">
                            Use the <code>.rounded-pill</code> utility class to make badges more rounded with a larger
                            <code>border-radius</code>.
                        </p>
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
                    <div class="card-body">
                        <div class="badge-spacing"><span class="badge rounded-pill badge-primary">Primary</span><span
                                class="badge rounded-pill badge-secondary">Secondary</span><span
                                class="badge rounded-pill badge-success">Success</span><span
                                class="badge rounded-pill badge-info">Info</span><span
                                class="badge rounded-pill badge-warning text-dark">Warning</span><span
                                class="badge rounded-pill badge-danger">Danger</span><span
                                class="badge rounded-pill badge-light text-dark">Light</span><span
                                class="badge rounded-pill badge-dark tag-pills-sm-mb">Dark</span>
                            <div class="code-box-copy">
                                <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#pills-variations"
                                    title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                <pre><code class="language-html" id="pills-variations">&lt;!--You can use .rounded-pill class through change the rounded badges (rounded-pill).--&gt;
&lt;span class="badge rounded-pill badge-primary"&gt;Primary&lt;/span&gt;
&lt;span class="badge rounded-pill badge-secondary"&gt;Secondary&lt;/span&gt;
&lt;span class="badge rounded-pill badge-success"&gt;Success&lt;/span&gt;
&lt;span class="badge rounded-pill badge-info"&gt;Info&lt;/span&gt;
&lt;span class="badge rounded-pill badge-warning text-dark"&gt;Warning&lt;/span&gt;
&lt;span class="badge rounded-pill badge-danger"&gt;Danger&lt;/span&gt;
&lt;span class="badge rounded-pill badge-light text-dark"&gt;Light&lt;/span&gt;
&lt;span class="badge rounded-pill badge-dark tag-pills-sm-mb"&gt;Dark&lt;/span&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Number of Badge </h4>
                        <p class="f-m-light mt-1">
                            Use the <code>.badge</code> utility class to make number of more badges.</p>
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
                    <div class="card-body">
                        <div class="badge-spacing"><a class="badge badge-primary" href="#">1</a><a
                                class="badge badge-secondary" href="#">2</a><a class="badge badge-success"
                                href="#">3</a><a class="badge badge-info" href="#">4</a><a
                                class="badge badge-warning text-dark" href="#">5</a><a class="badge badge-danger"
                                href="#">6</a><a class="badge badge-light text-dark" href="#">7</a><a
                                class="badge badge-dark" href="#">8</a>
                            <div class="code-box-copy">
                                <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#number-of-badge"
                                    title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                <pre><code class="language-html" id="number-of-badge">&lt;!--You can use badge-* class through make badges (Numbered Badges).--&gt;
&lt;a class="badge badge-primary" href="#"&gt;1&lt;/a&gt;
&lt;a class="badge badge-secondary" href="#"&gt;2&lt;/a&gt;
&lt;a class="badge badge-success" href="#"&gt;3&lt;/a&gt;
&lt;a class="badge badge-info" href="#"&gt;4&lt;/a&gt;
&lt;a class="badge badge-warning text-dark" href="#"&gt;5&lt;/a&gt;
&lt;a class="badge badge-danger" href="#"&gt;6&lt;/a&gt;
&lt;a class="badge badge-light text-dark" href="#"&gt;7&lt;/a&gt;
&lt;a class="badge badge-dark" href="#"&gt;8&lt;/a&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Number of Pills Tags</h4>
                        <p class="f-m-light mt-1">
                            Use the <code>.rounded-circle</code> utility class to make badges more rounded with a larger
                            <code>border-radius</code>.
                        </p>
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
                    <div class="card-body">
                        <div class="badge-spacing"><span
                                class="badge rounded-circle badge-p-space badge-primary">1</span><span
                                class="badge rounded-circle badge-p-space badge-secondary">2</span><span
                                class="badge rounded-circle badge-p-space badge-success">3</span><span
                                class="badge rounded-circle badge-p-space badge-info">4</span><span
                                class="badge rounded-circle badge-p-space badge-warning text-dark">5</span><span
                                class="badge rounded-circle badge-p-space badge-danger">6</span><span
                                class="badge rounded-circle badge-p-space badge-light text-dark">7</span><span
                                class="badge rounded-circle badge-p-space badge-dark">8</span>
                            <div class="code-box-copy">
                                <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#number-of-pills"
                                    title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                <pre><code class="language-html" id="number-of-pills">&lt;!--You can use .rounded-circle class through change the circled badges (rounded-circle).--&gt;
&lt;span class="badge rounded-circle badge-p-space badge-primary"&gt;1&lt;/span&gt;
&lt;span class="badge rounded-circle badge-p-space badge-secondary"&gt;2&lt;/span&gt;
&lt;span class="badge rounded-circle badge-p-space badge-success"&gt;3&lt;/span&gt;
&lt;span class="badge rounded-circle badge-p-space badge-info"&gt;4&lt;/span&gt;
&lt;span class="badge rounded-circle badge-p-space badge-warning text-dark"&gt;5&lt;/span&gt;
&lt;span class="badge rounded-circle badge-p-space badge-danger"&gt;6&lt;/span&gt;
&lt;span class="badge rounded-circle badge-p-space badge-light text-dark"&gt;7&lt;/span&gt;
&lt;span class="badge rounded-circle badge-p-space badge-dark"&gt;8&lt;/span&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Badge Tags With Icons</h4>
                        <p class="f-m-light mt-1">
                            Use the <code>.badge </code>utility class to make more icons.</p>
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
                    <div class="card-body">
                        <div class="badge-spacing"><a class="badge b-ln-height badge-primary" href="#"><i
                                    data-feather="dollar-sign"></i></a><a class="badge b-ln-height badge-secondary"
                                href="#"><i data-feather="headphones"></i></a><a
                                class="badge b-ln-height badge-success" href="#"><i data-feather="link"></i></a><a
                                class="badge b-ln-height badge-info" href="#"><i data-feather="github"></i></a><a
                                class="badge b-ln-height badge-warning text-dark" href="#"><i
                                    data-feather="award"></i></a><a class="badge b-ln-height badge-danger"
                                href="#"><i data-feather="activity"></i></a><a
                                class="badge b-ln-height badge-light text-dark" href="#"><i
                                    data-feather="heart"></i></a><a class="badge badge-dark" href="#"><i
                                    data-feather="mail"></i></a>
                            <div class="code-box-copy">
                                <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#badge-icons"
                                    title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                <pre><code class="language-html" id="badge-icons">&lt;!--You can use data-feather icons through change the icons badges.--&gt;
&lt;a class="badge badge-primary" href="#"&gt;&lt;i data-feather="dollar-sign"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="badge badge-secondary" href="#"&gt;&lt;i data-feather="headphones"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="badge badge-success" href="#"&gt;&lt;i data-feather="link"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="badge badge-info" href="#"&gt;&lt;i data-feather="github"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="badge badge-warning text-dark" href="#"&gt;&lt;i data-feather="award"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="badge badge-danger" href="#"&gt;&lt;i data-feather="activity"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="badge badge-light text-dark" href="#"&gt;&lt;i data-feather="heart"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="badge badge-dark" href="#"&gt;&lt;i data-feather="mail"&gt;&lt;/i&gt;&lt;/a&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Rounded Pills With Icons</h4>
                        <p class="f-m-light mt-1">
                            Use the <code>.rounded-pill</code> utility class to make icons badges more rounded with a larger
                            <code>border-radius</code>.
                        </p>
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
                    <div class="card-body">
                        <div class="badge-spacing"><a class="badge rounded-circle p-2 badge-primary" href="#"><i
                                    data-feather="dollar-sign"></i></a><a class="badge rounded-circle p-2 badge-secondary"
                                href="#"><i data-feather="headphones"></i></a><a
                                class="badge rounded-circle p-2 badge-success" href="#"><i
                                    data-feather="link"></i></a><a class="badge rounded-circle p-2 badge-info"
                                href="#"><i data-feather="github"></i></a><a
                                class="badge rounded-circle p-2 badge-warning text-dark" href="#"><i
                                    data-feather="award"></i></a><a class="badge rounded-circle p-2 badge-danger"
                                href="#"><i data-feather="activity"></i></a><a
                                class="badge rounded-circle p-2 badge-light text-dark" href="#"><i
                                    data-feather="heart"></i></a><a class="badge rounded-circle p-2 badge-dark"
                                href="#"><i data-feather="mail"></i></a>
                            <div class="code-box-copy">
                                <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#rounded-icons"
                                    title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                <pre><code class="language-html" id="rounded-icons">&lt;!--You can use .rounded-circle class through change the icons badge.--&gt;
&lt;a class="badge rounded-circle p-2 badge-primary" href="#"&gt;&lt;i data-feather="dollar-sign"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="badge rounded-circle p-2 badge-secondary" href="#"&gt;&lt;i data-feather="headphones"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="badge rounded-circle p-2 badge-success" href="#"&gt;&lt;i data-feather="link"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="badge rounded-circle p-2 badge-info" href="#"&gt;&lt;i data-feather="github"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="badge rounded-circle p-2 badge-warning text-dark" href="#"&gt;&lt;i data-feather="award"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="badge rounded-circle p-2 badge-danger" href="#"&gt;&lt;i data-feather="activity"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="badge rounded-circle p-2 badge-light text-dark" href="#"&gt;&lt;i data-feather="heart"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="badge rounded-circle p-2 badge-dark" href="#"&gt;&lt;i data-feather="mail"&gt;&lt;/i&gt;&lt;/a&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Badge Headings Example</h4>
                        <p class="f-m-light mt-1">
                            All html headings,<code>&lt;h1&gt;</code>through <code>&lt;h6&gt;</code>, are available in
                            <code>.badge </code>tags.
                        </p>
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
                    <div class="card-body">
                        <h1 class="pb-2 d-flex gap-2 flex-wrap">Badge Heading 1<span
                                class="badge badge-primary">Latest</span></h1>
                        <h2 class="pb-2 d-flex gap-2 flex-wrap">Badge Heading 2<span
                                class="badge badge-secondary">Trending</span></h2>
                        <h3 class="pb-2 d-flex gap-2 flex-wrap">Badge Heading 3<span
                                class="badge badge-success">Checkout</span></h3>
                        <h3 class="pb-2 d-flex gap-2 flex-wrap">Badge Heading 4<span
                                class="badge badge-warning">Inbox</span></h3>
                        <h5 class="pb-2 d-flex gap-2 flex-wrap">Badge Heading 5<span
                                class="badge badge-danger">Login</span></h5>
                        <h6 class="pb-2 d-flex gap-2 flex-wrap">Badge Heading 6<span
                                class="badge badge-dark">Logout</span></h6>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#badge-headings"
                                title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                            <pre><code class="language-html" id="badge-headings">&lt;!--You can use headings with .badge class.--&gt;
&lt;h1 class="pb-2 d-flex gap-2 flex-wrap"&gt;Badge Heading 1&lt;span class="badge badge-primary"&gt;Latest&lt;/span&gt;&lt;/h1&gt;
&lt;h2 class="pb-2 d-flex gap-2 flex-wrap"&gt;Badge Heading 2&lt;span class="badge badge-secondary"&gt;Trending&lt;/span&gt;&lt;/h2&gt;
&lt;h3 class="pb-2 d-flex gap-2 flex-wrap"&gt;Badge Heading 3&lt;span class="badge badge-success"&gt;Checkout&lt;/span&gt;&lt;/h3&gt;
&lt;h3 class="pb-2 d-flex gap-2 flex-wrap"&gt;Badge Heading 4&lt;span class="badge badge-warning"&gt;Inbox&lt;/span&gt;&lt;/h3&gt;
&lt;h5 class="pb-2 d-flex gap-2 flex-wrap"&gt;Badge Heading 5&lt;span class="badge badge-danger"&gt;Login&lt;/span&gt;&lt;/h5&gt;
&lt;h6 class="pb-2 d-flex gap-2 flex-wrap"&gt;Badge Heading 6&lt;span class="badge badge-dark"&gt;Logout&lt;/span&gt;&lt;/h6&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Badges As Part Buttons</h4>
                        <p class="f-m-light mt-1"> <code>.badge</code> can be used as part of <code>.btn</code> to provide
                            a icons.</p>
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
                    <div class="card-body">
                        <div class="badge-spacing flex-column align-items-start">
                            <button class="btn btn-primary d-flex align-items-center" type="button">Messages <span
                                    class="badge rounded-circle btn-p-space badge-light text-dark ms-2"><i
                                        data-feather="mail"></i></span></button>
                            <button class="btn btn-secondary d-flex align-items-center" type="button">notifications <span
                                    class="badge rounded-circle btn-p-space badge-light text-dark ms-2"><i
                                        data-feather="bell"></i></span></button>
                            <button class="btn btn-success d-flex align-items-center" type="button">Update available
                                <span class="badge rounded-circle btn-p-space badge-light text-dark ms-2"><i
                                        data-feather="settings"></i></span></button>
                            <button class="btn btn-info d-flex align-items-center" type="button">Playing Now <span
                                    class="badge rounded-circle btn-p-space badge-light text-dark ms-2"><i
                                        data-feather="music"></i></span></button>
                            <button class="btn btn-warning text-dark d-flex align-items-center" type="button">1.2 GB Used
                                <span class="badge rounded-circle btn-p-space badge-light text-dark ms-2"><i
                                        data-feather="alert-triangle"></i></span></button>
                            <div class="code-box-copy">
                                <button class="code-box-copy__btn btn-clipboard"
                                    data-clipboard-target="#badge-as-part-btn" title="Copy"><i
                                        class="icofont icofont-copy-alt"></i></button>
                                <pre><code class="language-html" id="badge-as-part-btn">&lt;!--You can use badge-* class with any icons used.(badge-icons/headings).--&gt;
&lt;div class="badge-spacing flex-column align-items-start"&gt;
&lt;button class="btn btn-primary d-flex align-items-center" type="button"&gt;Messages &lt;span class="badge rounded-circle btn-p-space badge-light text-dark ms-2"&gt;&lt;i data-feather="mail"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/button&gt;
&lt;button class="btn btn-secondary d-flex align-items-center" type="button"&gt;notifications &lt;span class="badge rounded-circle btn-p-space badge-light text-dark ms-2"&gt;&lt;i data-feather="bell"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/button&gt;
&lt;button class="btn btn-success d-flex align-items-center" type="button"&gt;Update available &lt;span class="badge rounded-circle btn-p-space badge-light text-dark ms-2"&gt;&lt;i data-feather="settings"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/button&gt;
&lt;button class="btn btn-info d-flex align-items-center" type="button"&gt;Playing Now &lt;span class="badge rounded-circle btn-p-space badge-light text-dark ms-2"&gt;&lt;i data-feather="music"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/button&gt;
&lt;button class="btn btn-warning text-dark d-flex align-items-center" type="button"&gt;1.2 GB Used &lt;span class="badge rounded-circle btn-p-space badge-light text-dark ms-2"&gt;&lt;i data-feather="alert-triangle"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/button&gt;</code></pre>
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
