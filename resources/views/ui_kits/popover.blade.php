@extends('layouts.simple.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-sm-6 p-0">
                    <h3>Popover</h3>
                </div>
                <div class="col-12 col-sm-6 p-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ui Kits</li>
                        <li class="breadcrumb-item active">Popover</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row popover-main">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header card-no-border pb-0">
                        <h4>Basic Popover</h4>
                        <p class="f-m-light mt-1">
                            Use the<code> data-bs-toggle='popover'</code>through popover above buttons. </p>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li>
                                    <div><i class="icon-settings"></i></div>
                                </li>
                                <li><i class="view-html fa fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"> </i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body common-flex popover-wrapper">
                        <button class="btn btn-primary example-popover mb-0 me-0" type="button" data-bs-toggle="popover"
                            data-bs-placement="left" title="Basic Popover"
                            data-bs-content="If the package restore doesn't help, you can look at the Output window in the Visual Studio.">Hurry
                            Up! </button>
                        <button class="example-popover btn btn-success mb-0 me-0" type="button" data-bs-trigger="hover"
                            data-container="body" data-bs-toggle="popover" data-bs-placement="bottom" title="Hover Popover"
                            data-offset="-20px -20px"
                            data-bs-content=" Several utility instruction sets have been featured in the Bootstrap 4 to promote very easy learning for beginners in the business of web building.">Hover
                            tooltip</button><a class="btn btn-lg btn-secondary" tabindex="0" role="button"
                            data-bs-toggle="popover" data-bs-trigger="focus" title="Dismissible popover"
                            data-bs-title="Dismissible popover"
                            data-bs-content="You are able to even develop and suggest improvements to the Bootstrap 4 before its final version is delivered.">Dismissible
                            popover</a>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#badge-variations"
                                title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                            <pre><code class="language-html" id="badge-variations">&lt;!--You can use attribute (data-bs-toggle='popover') through make popover on buttons.--&gt;
&lt;div class="card-body common-flex"&gt;
&lt;button class="btn btn-primary example-popover mb-0 me-0" type="button" data-bs-toggle="popover" title="Basic Popover" data-bs-content="If the package restore doesn't help, you can look at the Output window in the Visual Studio."&gt;Hurry Up! &lt;/button&gt;
&lt;button class="example-popover btn btn-success mb-0 me-0" type="button" data-bs-trigger="hover" data-container="body" data-bs-toggle="popover" data-bs-placement="bottom" title="Hover Popover" data-offset="-20px -20px" data-bs-content=" Several utility instruction sets have been featured in the Bootstrap 4 to promote very easy learning for beginners in the business of web building."&gt;Hover tooltip&lt;/button&gt;
&lt;a class="btn btn-lg btn-secondary" tabindex="0" role="button" data-bs-toggle="popover" data-bs-trigger="focus" title="Dismissible popover" data-bs-title="Dismissible popover" data-bs-content="You are able to even develop and suggest improvements to the Bootstrap 4 before its final version is delivered."&gt;Dismissible popover&lt;/a&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header card-no-border pb-0">
                        <h4>Popover Direction</h4>
                        <p class="f-m-light mt-1">
                            Use the<code> data-bs-toggle='popover'</code>through popover directions above buttons. </p>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li>
                                    <div><i class="icon-settings"></i></div>
                                </li>
                                <li><i class="view-html fa fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"> </i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body common-flex popover-wrapper">
                        <button class="example-popover btn btn-warning mb-0 me-0" type="button" data-container="body"
                            data-bs-toggle="popover" data-bs-placement="top" title="Popover On Top"
                            data-bs-content="Popovers need the tooltip plugin considering that a dependency.">Popover on
                            top</button>
                        <button class="example-popover btn btn-danger mb-0 me-0" type="button" data-container="body"
                            data-bs-toggle="popover" data-bs-placement="right" title="Popover On Right"
                            data-bs-content="Popovers are opt-in for effectiveness causes, in this way you have to initialize them yourself.">Popover
                            on right</button>
                        <button class="example-popover btn btn-info mb-0 me-0" type="button" data-container="body"
                            data-bs-toggle="popover" data-bs-placement="bottom" title="Popover On Bottom"
                            data-bs-content="Identify container:to evade rendering problems in more complex components (like Bootstrap input groups, button groups, etc).">Popover
                            on bottom</button>
                        <button class="example-popover btn btn-dark mb-0 me-0" type="button" data-container="body"
                            data-bs-toggle="popover" data-bs-placement="left" title="Popover On Left"
                            data-bs-content="Popovers are opt-in for effectiveness causes, in this way you have to initialize them yourself.">Popover
                            on left</button>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#badge-variations1"
                                title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                            <pre><code class="language-html" id="badge-variations1">&lt;!--You can use attribute (data-bs-toggle='popover') through make popover on buttons(top/bottom/left/right).--&gt;
&lt;button class="example-popover btn btn-warning mb-0 me-0" type="button" data-container="body" data-bs-toggle="popover" data-bs-placement="top" title="Popover On Top" data-bs-content="Popovers need the tooltip plugin considering that a dependency."&gt;Popover on top&lt;/button&gt;
&lt;button class="example-popover btn btn-danger mb-0 me-0" type="button" data-container="body" data-bs-toggle="popover" data-bs-placement="right" title="Popover On Right" data-bs-content="Popovers are opt-in for effectiveness causes, in this way you have to initialize them yourself."&gt;Popover on right&lt;/button&gt;
&lt;button class="example-popover btn btn-info mb-0 me-0" type="button" data-container="body" data-bs-toggle="popover" data-bs-placement="bottom" title="Popover On Bottom" data-bs-content="Identify container:to evade rendering problems in more complex components (like Bootstrap input groups, button groups, etc)."&gt;Popover on bottom&lt;/button&gt;
&lt;button class="example-popover btn btn-dark mb-0 me-0" type="button" data-container="body" data-bs-toggle="popover" data-bs-placement="left" title="Popover On Left" data-bs-content="Popovers are opt-in for effectiveness causes, in this way you have to initialize them yourself."&gt;Popover on left&lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header card-no-border pb-0">
                        <h4>Popover Offset </h4>
                        <p class="f-m-light mt-1">
                            Use the<code> data-bs-offset="*,*"</code> through popover offset above buttons. </p>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li>
                                    <div><i class="icon-settings"></i></div>
                                </li>
                                <li><i class="view-html fa fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"> </i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body common-flex popover-wrapper">
                        <button class="btn btn-secondary mb-0 me-0" type="button" data-bs-offset="50,0"
                            data-bs-toggle="popover" data-bs-delay-show="5000" title="Popover title"
                            data-bs-content="And here's some amazing content. It's very engaging. Right?"
                            data-kt-initialized="1">Popover offset 50</button>
                        <button class="example-popover btn btn-success mb-0 me-0" type="button" data-bs-offset="-50,0"
                            data-container="body" data-bs-toggle="popover" data-bs-placement="left"
                            title="Popover On Left"
                            data-bs-content="Popovers are opt-in for effectiveness causes, in this way you have to initialize them yourself.">Popover
                            offset -50</button>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#badge-variations2"
                                title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                            <pre><code class="language-html" id="badge-variations2">&lt;!--You can use badge-* class through change the colors of badges (primary/secondary/success...).--&gt;
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
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/prism/prism.min.js') }}"></script>
    <script src="{{ asset('assets/js/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ asset('assets/js/counter/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/counter/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/counter/counter-custom.js') }}"></script>
    <script src="{{ asset('assets/js/custom-card/custom-card.js') }}"></script>
    <script src="{{ asset('assets/js/popover-custom.js') }}"></script>
@endsection
