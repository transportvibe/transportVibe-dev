@extends('layouts.simple.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/jsgrid.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 ps-0">
                    <h3>Typography</h3>
                </div>
                <div class="col-sm-6 pe-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ui Kits</li>
                        <li class="breadcrumb-item active">Typography</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-6">
                <div class="card height-equal">
                    <div class="card-header pb-0">
                        <h4 class="mb-0">Headings</h4>
                        <p class="f-m-light mt-1">All HTML headings, <code>&lt;h1&gt;</code> through
                            <code>&lt;h6&gt;</code>, are available.</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive custom-scrollbar">
                            <table class="table mb-0 typography-table">
                                <thead>
                                    <tr>
                                        <th class="pt-0">Code</th>
                                        <th class="pt-0">Font-Size</th>
                                        <th class="pt-0">Heading</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>&lt;h1&gt;&lt;/h1&gt;</code></td>
                                        <td>
                                            <h1 class="mb-0">1.75rem</h1>
                                        </td>
                                        <td>
                                            <h1><span> Heading 1 (MEGA)</span></h1>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> <code>&lt;h2&gt;&lt;/h2&gt;</code></td>
                                        <td>
                                            <h2 class="mb-0">1.63rem </h2>
                                        </td>
                                        <td>
                                            <h2><span> Heading 2 (XL)</span></h2>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>&lt;h3&gt;&lt;/h3&gt;</code></td>
                                        <td>
                                            <h3 class="mb-0">1.5rem</h3>
                                        </td>
                                        <td>
                                            <h3><span> Heading 3 (LARGE)</span></h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>&lt;h4&gt;&lt;/h4&gt;</code></td>
                                        <td>
                                            <h4 class="mb-0">1.25rem</h4>
                                        </td>
                                        <td>
                                            <h4><span> Heading 4 (MEDIUM)</span></h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>&lt;h5&gt;&lt;/h5&gt;</code></td>
                                        <td>
                                            <h5 class="mb-0">1rem</h5>
                                        </td>
                                        <td>
                                            <h5><span> Heading 5 (SMALL)</span></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pb-0"><code>&lt;h6&gt;&lt;/h6&gt;</code></td>
                                        <td class="pb-0">
                                            <h6 class="mb-0">0.94rem</h6>
                                        </td>
                                        <td class="pb-0">
                                            <h5><span> Heading 6 </span></h5>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6">
                <div class="card height-equal">
                    <div class="card-header pb-0">
                        <h4 class="mb-0">Colored headings</h4>
                        <p class="f-m-light mt-1">All HTML headings, <code>&lt;h1&gt;</code> through
                            <code>&lt;h6&gt;</code>, are available.</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive custom-scrollbar">
                            <table class="table mb-0 typography-table">
                                <thead>
                                    <tr>
                                        <th class="pt-0">Code</th>
                                        <th class="pt-0">Heading</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>&lt;h1&gt;&lt;/h1&gt;</code></td>
                                        <td>
                                            <h1><span class="txt-primary"> Heading 1</span> Sub Heading</h1>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>&lt;h2&gt;&lt;/h2&gt;</code></td>
                                        <td>
                                            <h2><span class="txt-secondary"> Heading 1</span> Sub Heading</h2>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>&lt;h3&gt;&lt;/h3&gt;</code></td>
                                        <td>
                                            <h3><span class="txt-success"> Heading 1</span> Sub Heading</h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>&lt;h4&gt;&lt;/h4&gt;</code></td>
                                        <td>
                                            <h4><span class="txt-info"> Heading 1</span> Sub Heading</h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>&lt;h5&gt;&lt;/h5&gt;</code></td>
                                        <td>
                                            <h5><span class="txt-warning"> Heading 1</span> Sub Heading</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pb-0"><code>&lt;h6&gt;&lt;/h6&gt;</code></td>
                                        <td class="pb-0">
                                            <h5><span class="txt-danger"> Heading 1</span> Sub Heading</h5>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="mb-0">Font weight</h4>
                        <p class="f-m-light mt-1">Using <code>f-w-*</code> class, you can change the font weight.</p>
                    </div>
                    <div class="card-body d-flex flex-column gap-3">
                        <h1 class="f-w-700">You can set bolder font weight Heading 1 using<code> f-w-700</code></h1>
                        <h2 class="f-w-600">You can set bold font weight Heading 2 using<code> f-w-600</code></h2>
                        <h3 class="f-w-500">You can set medium font weight Heading 3 using<code> f-w-500</code></h3>
                        <h4 class="f-w-400">You can set normal font weight Heading 4 using<code> f-w-400</code></h4>
                        <h5 class="f-w-300">You can set light font weight Heading 5 using<code> f-w-300</code></h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 listing">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="mb-0">Listing typography</h4>
                        <p class="f-m-light mt-1">All typography list:- <code>&lt;ul&gt;</code>,<code>&lt;ol&gt;</code>
                            &amp; <code>&lt;dl&gt;</code></p>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-6 col-xxl-4">
                                <div class="card-wrapper border rounded-3">
                                    <h6 class="sub-title fw-bold">Unorder list</h6>
                                    <ul>
                                        <li>One who looks on the bright side of things</li>
                                        <li>One who does something not professionally but for pleasure</li>
                                        <li>A person who knows everything</li>
                                        <li>A handwriting that cannot be read</li>
                                        <li>One who looks on the bright side of things</li>
                                        <li>A sound that cannot be heard</li>
                                        <li>The study of ancient writing and scriptures</li>
                                        <li>The study of rocks and soil</li>
                                        <li>creates more sophisticated capabilities for a web page to use coding language.
                                        </li>
                                        <li>Maintaining contact and communicating clearly are also essential. possess
                                            abilities for a designer</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-xxl-4">
                                <div class="card-wrapper border rounded-3 h-100">
                                    <h6 class="sub-title fw-bold">Order list</h6>
                                    <ol>
                                        <li>UI Kits</li>
                                        <li>Bonus Ui</li>
                                        <li>Animations</li>
                                        <li>
                                            <ol>
                                                <li>Typography</li>
                                                <li>Avatars</li>
                                                <li>Grid</li>
                                                <li>Tag & pills</li>
                                                <li>Alert</li>
                                            </ol>
                                        </li>
                                        <li>Dropdown</li>
                                        <li>Tabs</li>
                                        <li>Accordion</li>
                                    </ol>
                                </div>
                            </div>
                            <div class="col-md-12 col-xxl-4">
                                <div class="card-wrapper border rounded-3">
                                    <h6 class="sub-title fw-bold">Description list</h6>
                                    <dl>
                                        <dt>The way to get started is to quit talking and begin doing.</dt>
                                        <dd>-Walt Disney</dd>
                                        <dt>Life is what happens when you're busy making other plans.</dt>
                                        <dd>-John Lennon</dd>
                                        <dt>Whoever is happy will make others happy too. </dt>
                                        <dd>-Anne Frank</dd>
                                        <dt>Life is either a daring adventure or nothing at all.</dt>
                                        <dd>-Helen Keller</dd>
                                        <dt>The purpose of our lives is to be happy.</dt>
                                        <dd class="mb-0">-Dalai Lama</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="mb-0">Display headings</h4>
                        <p class="f-m-light mt-1">
                            Traditional heading elements are designed to work
                            best in the meat of your
                            page content. When you need a heading to stand out, consider using a
                            <mark>display heading</mark>&mdash;a
                            larger, slightly more opinionated heading style.
                        </p>
                    </div>
                    <div class="card-body d-flex flex-column gap-2">
                        <h1 class="display-1">Display 1</h1>
                        <h2 class="display-2">Display 2</h2>
                        <h3 class="display-3">Display 3</h3>
                        <h4 class="display-4">Display 4</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Inline text elements</h4>
                        <p class="f-m-light mt-1">Styling for common inline HTML5 elements.</p>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-column gap-2">
                            <p class="mb-0">You can use the mark tag to
                                <mark>highlight</mark> text.
                            </p>
                            <p class="mb-0">
                                <del>This line of text is meant to be treated as deleted text.</del>
                            </p>
                            <p class="mb-0">
                                <s>This line of text is meant to be treated as no longer accurate.</s>
                            </p>
                            <p class="mb-0"><ins>
                                    This line of text is meant to be treated as an addition to the
                                    document.</ins></p>
                            <p class="mb-0">
                                <u>This line of text will render as underlined</u>
                            </p>
                            <p class="mb-0"><small>This line of text is meant to be treated as fine print.</small></p>
                            <p class="mb-0"><strong>This line rendered as bold text.</strong></p>
                            <p class="mb-0"><em>This line rendered as italicized text.</em></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="mb-0">Text color</h4>
                        <p class="f-m-light mt-1">You can Give text color by using <code>txt-*</code> class</p>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-column gap-2">
                            <p class="txt-primary mb-0">This is Primary text You can archive this
                                adding<code>.txt-primary</code> class</p>
                            <p class="txt-secondary mb-0">This is Secondary text You can archive this
                                adding<code>.txt-secondary</code> class</p>
                            <p class="txt-success mb-0">This is Success text You can archive this
                                adding<code>.txt-success</code> class</p>
                            <p class="txt-info mb-0">This is Info text You can archive this adding<code>.txt-info</code>
                                class</p>
                            <p class="txt-warning mb-0">This is Warning text You can archive this
                                adding<code>.txt-warning</code> class</p>
                            <p class="txt-danger mb-0">This is Danger text You can archive this
                                adding<code>.txt-danger</code> class</p>
                            <p class="txt-dark mb-0">This is Dark text You can archive this adding<code>.txt-dark</code>
                                class</p>
                            <p class="txt-primary mb-0">This is Primary text You can archive this
                                adding<code>.txt-primary</code> class</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card overflow-hidden">
                    <div class="card-header pb-0">
                        <h4 class="mb-0">Blockquotes</h4>
                        <p class="f-m-light mt-1">The <code>&lt;blockquote&gt;</code> tag specifies a section that is
                            quoted from another source.</p>
                    </div>
                    <div class="card-body">
                        <div class="figure d-block dark-blockquote">
                            <blockquote class="blockquote light-card mb-2">
                                <p class="mb-0 txt-dark">The only impossible journey is the one you never begin.</p><span
                                    class="blockquote-footer pt-3">Tony Robbins</span>
                            </blockquote>
                        </div>
                        <div class="figure text-center d-block dark-blockquote">
                            <blockquote class="blockquote light-card mb-2">
                                <p class="mb-0 txt-dark">In this life we cannot do great things. We can only do small
                                    things with great love.</p><span class="blockquote-footer pt-3">Mother Teresa</span>
                            </blockquote>
                        </div>
                        <div class="figure text-end d-block dark-blockquote">
                            <blockquote class="blockquote mb-0 light-card mb-2">
                                <p class="mb-0 txt-dark">Live in the sunshine, swim the sea, drink the wild air.</p><span
                                    class="blockquote-footer pt-3">Ralph Waldo Emerson</span>
                            </blockquote>
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
