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
                    <h3>Default Style</h3>
                </div>
                <div class="col-sm-6 pe-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Buttons</li>
                        <li class="breadcrumb-item active">Default Style</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card" id="default">
                    <div class="card-header pb-0">
                        <h4>Default buttons</h4><span>Bootstrap state buttons</span>
                    </div>
                    <div class="card-body">
                        <div class="btn-showcase">
                            <button class="btn btn-primary" type="button">Primary Button</button>
                            <button class="btn btn-secondary" type="button">Secondary Button</button>
                            <button class="btn btn-success" type="button">Success Button</button>
                            <button class="btn btn-info" type="button">Info Button</button>
                            <button class="btn btn-warning" type="button">Warning Button</button>
                            <button class="btn btn-danger" type="button">Danger Button</button>
                            <button class="btn btn-light" type="button">Light Button</button>
                            <div class="code-box-copy">
                                <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head11"
                                    title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                <pre><code class="language-html" id="example-head11">&lt;!-- Cod Box Copy begin --&gt;
&lt;button type="button" class="btn btn-primary"&gt;primary button&lt;/button&gt;
&lt;button type="button" class="btn btn-secondary"&gt;secondary button&lt;/button&gt;
&lt;button type="button" class="btn btn-success"&gt;Success button&lt;/button&gt;
&lt;button type="button" class="btn btn-info"&gt;Info button&lt;/button&gt;
&lt;button type="button" class="btn btn-warning"&gt;warning button&lt;/button&gt;
&lt;button type="button" class="btn btn-danger"&gt;danger button&lt;/button&gt;
&lt;button type="button" class="btn btn-light"&gt;light button&lt;/button&gt; 
&lt;!-- Cod Box Copy end --&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Flat button</h4><span>Add <code>.btn-square</code> class for flat button</span>
                    </div>
                    <div class="card-body">
                        <div class="btn-showcase">
                            <button class="btn btn-square btn-primary" type="button">Primary Button</button>
                            <button class="btn btn-square btn-secondary" type="button">Secondary Button</button>
                            <button class="btn btn-square btn-success" type="button">Success Button</button>
                            <button class="btn btn-square btn-info" type="button">Info Button</button>
                            <button class="btn btn-square btn-warning" type="button">Warning Button</button>
                            <button class="btn btn-square btn-danger" type="button">Danger Button</button>
                            <button class="btn btn-square btn-light" type="button">Light Button</button>
                            <div class="code-box-copy">
                                <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head99"
                                    title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                <pre><code class="language-html" id="example-head99">&lt;!-- Cod Box Copy begin --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-primary&quot;&gt;primary button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-secondary&quot;&gt;secondary button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-success&quot;&gt;Success Button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-info&quot;&gt;Info button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-warning&quot;&gt;warning button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-danger&quot;&gt;danger button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-light&quot;&gt;light button&lt;/button&gt; 
&lt;!-- Cod Box Copy end --&gt; </code></pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Raised with Edge buttons</h4><span>Add <code>.btn-pill</code> and <code>.btn-air-*</code> class
                            button</span>
                    </div>
                    <div class="card-body">
                        <div class="btn-showcase">
                            <button class="btn btn-pill btn-primary btn-air-primary" type="button">Primary Button</button>
                            <button class="btn btn-pill btn-secondary btn-air-secondary btn-air-secondary"
                                type="button">Secondary Button</button>
                            <button class="btn btn-pill btn-success btn-air-success btn-air-success" type="button">Success
                                Button</button>
                            <button class="btn btn-pill btn-info btn-air-info btn-air-info" type="button">Info
                                Button</button>
                            <button class="btn btn-pill btn-warning btn-air-warning btn-air-warning" type="button">Warning
                                Button</button>
                            <button class="btn btn-pill btn-danger btn-air-danger" type="button">Danger Button</button>
                            <button class="btn btn-pill btn-light btn-air-light" type="button">Light Button</button>
                            <div class="code-box-copy">
                                <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head"
                                    title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                <pre><code class="language-html" id="example-head">&lt;!-- Cod Box Copy begin --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-pill btn-primary btn-air-primary&quot;&gt;Primary button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-pill btn-secondary btn-air-secondary&quot;&gt;Secondary button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-pill btn-success btn-air-success&quot;&gt;Success button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-pill btn-info btn-air-info&quot;&gt;Info button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-pill btn-warning btn-air-warning&quot;&gt;Warning button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-pill btn-danger btn-air-danger&quot;&gt;Danger button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-pill btn-light btn-air-light&quot;&gt;Light button&lt;/button&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card" id="large-btn">
                    <div class="card-header pb-0">
                        <h4>Sizing buttons</h4><span>Add <code>.btn-lg</code><code>.btn-sm</code><code>.btn-xs</code> class
                            for Different Sizing buttons</span>
                    </div>
                    <div class="card-body">
                        <div class="btn-showcase">
                            <button class="btn btn-primary btn-lg" type="button">Primary Button</button>
                            <button class="btn btn-secondary btn-lg" type="button">Secondary Button</button>
                            <button class="btn btn-success btn-lg" type="button">Success Button</button>
                            <button class="btn btn-info btn-lg" type="button">Info Button</button>
                            <button class="btn btn-warning btn-lg" type="button">Warning Button</button>
                            <button class="btn btn-danger btn-lg" type="button">Danger Button</button>
                            <button class="btn btn-light btn-lg" type="button">Light Button</button>
                            <div class="code-box-copy">
                                <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head1"
                                    title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                <pre><code class="language-html" id="example-head1">&lt;!-- Cod Box Copy begin --&gt;
&lt;button type="button" class="btn btn-primary btn-lg"&gt;primary button&lt;/button&gt;
&lt;button type="button" class="btn btn-secondary btn-lg"&gt;secondary button&lt;/button&gt;
&lt;button type="button" class="btn btn-success btn-lg"&gt;Success button&lt;/button&gt;
&lt;button type="button" class="btn btn-info btn-lg"&gt;Info button&lt;/button&gt;
&lt;button type="button" class="btn btn-warning btn-lg"&gt;warning button&lt;/button&gt;
&lt;button type="button" class="btn btn-danger btn-lg"&gt;danger button&lt;/button&gt;
&lt;button type="button" class="btn btn-light btn-lg"&gt;light button&lt;/button&gt; 
&lt;!-- Cod Box Copy end --&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card" id="active-btn">
                    <div class="card-header pb-0">
                        <h4>Active Buttons</h4><span>Add <code>.active</code> class for active state</span>
                    </div>
                    <div class="card-body">
                        <div class="btn-showcase">
                            <button class="btn btn-primary active" type="button">Active</button>
                            <button class="btn btn-secondary active" type="button">Active</button>
                            <button class="btn btn-success active" type="button">Active</button>
                            <button class="btn btn-info active" type="button">Active</button>
                            <button class="btn btn-warning active" type="button">Active</button>
                            <button class="btn btn-danger active" type="button">Active</button>
                            <button class="btn btn-light active txt-dark" type="button">Active</button>
                            <div class="code-box-copy">
                                <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head4"
                                    title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                <pre><code class="language-html" id="example-head4">&lt;!-- Cod Box Copy begin --&gt;
&lt;button type="button" class="btn btn-primary active"&gt;Active&lt;/button&gt;
&lt;button type="button" class="btn btn-secondary active"&gt;Active&lt;/button&gt;
&lt;button type="button" class="btn btn-success active"&gt;Active&lt;/button&gt;
&lt;button type="button" class="btn btn-info active"&gt;Active&lt;/button&gt;
&lt;button type="button" class="btn btn-warning active"&gt;Active&lt;/button&gt;
&lt;button type="button" class="btn btn-danger active"&gt;Active&lt;/button&gt;
&lt;button type="button" class="btn btn-light active"&gt;Active&lt;/button&gt; 
&lt;!-- Cod Box Copy end --&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card" id="disabled-btn">
                    <div class="card-header pb-0">
                        <h4>Disabled buttons</h4><span>Add <code>.disabled</code> class or <code>disabled="disabled"</code>
                            attribute for disabled button</span>
                    </div>
                    <div class="card-body">
                        <div class="btn-showcase">
                            <button class="btn btn-primary disabled" type="button">Disabled</button>
                            <button class="btn btn-secondary disabled" type="button">Disabled</button>
                            <button class="btn btn-success disabled" type="button">Disabled</button>
                            <button class="btn btn-info disabled" type="button">Disabled</button>
                            <button class="btn btn-warning disabled" type="button">Disabled</button>
                            <button class="btn btn-danger disabled" type="button">Disabled</button>
                            <button class="btn btn-light disabled" type="button">Disabled</button>
                            <div class="code-box-copy">
                                <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head5"
                                    title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                <pre><code class="language-html" id="example-head5">&lt;!-- Cod Box Copy begin --&gt;
&lt;button type="button" class="btn btn-primary disabled"&gt;Disabled&lt;/button&gt;
&lt;button type="button" class="btn btn-secondary disabled"&gt;Disabled&lt;/button&gt;
&lt;button type="button" class="btn btn-success disabled"&gt;Disabled&lt;/button&gt;
&lt;button type="button" class="btn btn-info disabled"&gt;Info button&lt;/button&gt;
&lt;button type="button" class="btn btn-warning disabled"&gt;Disabled&lt;/button&gt;
&lt;button type="button" class="btn btn-danger disabled"&gt;Disabled&lt;/button&gt;
&lt;button type="button" class="btn btn-light disabled"&gt;Disabled&lt;/button&gt; 
&lt;!-- Cod Box Copy end --&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card" id="outline-button">
                    <div class="card-header pb-0">
                        <h4>outline buttons</h4><span>Add <code>.btn-outline-*</code> class for border button</span>
                    </div>
                    <div class="card-body">
                        <div class="btn-showcase">
                            <button class="btn btn-outline-primary" type="button">Primary Button</button>
                            <button class="btn btn-outline-secondary" type="button">Secondary Button</button>
                            <button class="btn btn-outline-success" type="button">Success Button</button>
                            <button class="btn btn-outline-info" type="button">Info Button</button>
                            <button class="btn btn-outline-warning" type="button">Warning Button</button>
                            <button class="btn btn-outline-danger" type="button">Danger Button</button>
                            <button class="btn btn-outline-light txt-dark" type="button">Light Button</button>
                            <div class="code-box-copy">
                                <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head7"
                                    title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                <pre><code class="language-html" id="example-head7">&lt;!-- Cod Box Copy begin --&gt;
&lt;button type="button" class="btn btn-outline-primary"&gt;primary button&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-secondary"&gt;secondary button&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-success"&gt;Success button&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-info"&gt;Info button&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-warning"&gt;warning button&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-danger"&gt;danger button&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-light txt-dark"&gt;light button&lt;/button&gt; 
&lt;!-- Cod Box Copy end --&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card" id="outline-bold-button">
                    <div class="card-header pb-0">
                        <h4>bold Border outline buttons</h4><span>Add <code>.btn-outline-*-2x</code> class for bold
                            outline</span>
                    </div>
                    <div class="card-body">
                        <div class="btn-showcase">
                            <button class="btn btn-outline-primary-2x" type="button">Primary Button</button>
                            <button class="btn btn-outline-secondary-2x" type="button">Secondary Button</button>
                            <button class="btn btn-outline-success-2x" type="button">Success Button</button>
                            <button class="btn btn-outline-info-2x" type="button">Info Button</button>
                            <button class="btn btn-outline-warning-2x" type="button">Warning Button</button>
                            <button class="btn btn-outline-danger-2x" type="button">Danger Button</button>
                            <button class="btn btn-outline-light-2x txt-dark" type="button">Light Button</button>
                            <div class="code-box-copy">
                                <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head8"
                                    title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                <pre><code class="language-html" id="example-head8">&lt;!-- Cod Box Copy begin --&gt;
&lt;button type="button" class="btn btn-outline-primary-2x"&gt;primary button&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-secondary-2x"&gt;secondary button&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-success-2x"&gt;Success button&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-info-2x"&gt;Info button&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-warning-2x"&gt;warning button&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-danger-2x"&gt;danger button&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-light-2x txt-dark"&gt;light button&lt;/button&gt; 
&lt;!-- Cod Box Copy end --&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card" id="gradiant">
                    <div class="card-header pb-0">
                        <h4>Gradien buttons</h4><span>Add <code>.btn-*-gradien</code> class for gradien button</span>
                    </div>
                    <div class="card-body">
                        <div class="btn-showcase">
                            <button class="btn btn-primary-gradien" type="button">Primary Button</button>
                            <button class="btn btn-secondary-gradien" type="button">Secondary Button</button>
                            <button class="btn btn-success-gradien" type="button">Success Button</button>
                            <button class="btn btn-info-gradien" type="button">Info Button</button>
                            <button class="btn btn-warning-gradien" type="button">Warning Button</button>
                            <button class="btn btn-danger-gradien" type="button">Danger Button</button>
                            <div class="code-box-copy">
                                <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head13"
                                    title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                <pre><code class="language-html" id="example-head13">&lt;!-- Cod Box Copy begin --&gt;
&lt;button type="button" class="btn btn-primary-gradien"&gt;primary button&lt;/button&gt;
&lt;button type="button" class="btn btn-secondary-gradien"&gt;secondary button&lt;/button&gt;
&lt;button type="button" class="btn btn-success-gradien"&gt;Success button&lt;/button&gt;
&lt;button type="button" class="btn btn-info-gradien"&gt;Info button&lt;/button&gt;
&lt;button type="button" class="btn btn-warning-gradien"&gt;warning button&lt;/button&gt;
&lt;button type="button" class="btn btn-danger-gradien"&gt;danger button&lt;/button&gt; 
&lt;!-- Cod Box Copy end --&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/prism/prism.min.js') }}"></script>
    <script src="{{ asset('assets/js/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom-card/custom-card.js') }}"></script>
    <script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
@endsection
