@extends('layouts.simple.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 ps-0">
                    <h3>Grid</h3>
                </div>
                <div class="col-sm-6 pe-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item"> Ui Kits</li>
                        <li class="breadcrumb-item active">Grid</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Grid options</h4>
                        <p class="mt-1 f-m-light"></p>Bootstrap grid system allow all six breakpoints, and any breakpoints
                        you can customize.
                    </div>
                    <div class="card-body">
                        <div class="table-responsive custom-scrollbar">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th class="text-center">
                                            <p>Extra small</p><small>&lt;576px</small>
                                        </th>
                                        <th class="text-center">
                                            <p>Small</p><small>≥576px</small>
                                        </th>
                                        <th class="text-center">
                                            <p>Medium</p><small>≥768px</small>
                                        </th>
                                        <th class="text-center">
                                            <p>Large</p><small>≥992px</small>
                                        </th>
                                        <th class="text-center">
                                            <p>Extra large</p><small>≥1200px</small>
                                        </th>
                                        <th class="text-center">
                                            <p>Extra extra large</p><small class="digits">≥1400px</small>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th class="text-nowrap" scope="row">Grid behavior</th>
                                        <td>Horizontal at all times</td>
                                        <td colspan="5">Collapsed to start, horizontal above breakpoints</td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap" scope="row">Max container width</th>
                                        <td>None (auto)</td>
                                        <td>540px</td>
                                        <td>720px</td>
                                        <td>960px</td>
                                        <td>1140px</td>
                                        <td>1320px</td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap" scope="row">Class prefix</th>
                                        <td><code>.col-</code></td>
                                        <td><code>.col-sm-</code></td>
                                        <td><code>.col-md-</code></td>
                                        <td><code>.col-lg-</code></td>
                                        <td><code>.col-xl-</code></td>
                                        <td><code>.col-xxl-</code></td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap" scope="row"># of columns</th>
                                        <td colspan="6">12</td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap" scope="row">Gutter width</th>
                                        <td colspan="6">1.5rem (.75rem on left and right)</td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap" scope="row">Nestable</th>
                                        <td colspan="6">Yes</td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap" scope="row">Offsets</th>
                                        <td colspan="6">Yes</td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap" scope="row">Column ordering</th>
                                        <td colspan="6">Yes</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Grid for column</h4>
                        <p class="mt-1 f-m-light">You may use predefined grid classes. Using <code>.col-md-* </code>you can
                            set the grid system.</p>
                    </div>
                    <div class="card-body grid-showcase">
                        <div class="row">
                            <div class="col-md-1 text-center"><span>col-md-1</span></div>
                            <div class="col-md-2 text-center"><span>col-md-2</span></div>
                            <div class="col-md-2 text-center"><span>col-md-2</span></div>
                            <div class="col-md-3 text-center"><span>col-md-3</span></div>
                            <div class="col-md-4 text-center"><span>col-md-4</span></div>
                            <div class="col-md-5 text-center"><span>col-md-5</span></div>
                            <div class="col-md-7 text-center"><span>col-md-7</span></div>
                            <div class="col-md-6 text-center"><span>col-md-6</span></div>
                            <div class="col-md-6 text-center"><span>col-md-6</span></div>
                            <div class="col-md-8 text-center"><span>col-md-8</span></div>
                            <div class="col-md-4 text-center"><span>col-md-4</span></div>
                            <div class="col-md-9 text-center"><span>col-md-9</span></div>
                            <div class="col-md-3 text-center"><span>col-md-3</span></div>
                            <div class="col-md-10 text-center"><span>col-md-10</span></div>
                            <div class="col-md-2 text-center"><span>col-md-2</span></div>
                            <div class="col-md-12 text-center"><span>col-md-12</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Vertical alignment</h4>
                        <p class="mt-1 f-m-light">You can use the <code>align-items-*</code> class
                            to set the vertical alignment.
                        </p>
                    </div>
                    <div class="card-body grid-showcase mb-0">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="row grid-vertical align-items-start m-1 g-2 bg-light">
                                    <div class="col-6"><span class="bg-white">one column</span></div>
                                    <div class="col-6"><span class="bg-white">two column</span></div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="row grid-vertical align-items-center m-1 g-2 bg-light">
                                    <div class="col-6"><span class="bg-white">one column</span></div>
                                    <div class="col-6"><span class="bg-white">two column</span></div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="row grid-vertical align-items-end m-1 g-2 bg-light">
                                    <div class="col-6"><span class="bg-white">one column</span></div>
                                    <div class="col-6"><span class="bg-white">two column</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="table-responsive custom-scrollbar">
                            <table class="w-100">
                                <tbody>
                                    <tr>
                                        <th> Class</th>
                                        <th>Value of the class</th>
                                    </tr>
                                    <tr>
                                        <td><code>.align-items-*</code></td>
                                        <td> start / center / end / baseline / stretch</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Horizontal alignment</h4>
                        <p class="mt-1 f-m-light">You can use the <code>justify-content-*</code> class
                            to set the horizontal alignment.
                        </p>
                    </div>
                    <div class="card-body grid-showcase grid-align">
                        <div class="row justify-content-start bg-light">
                            <div class="col-5"><span class="bg-white text-dark">One column</span></div>
                            <div class="col-5"><span class="bg-white text-dark">Two column</span></div>
                        </div>
                        <div class="row justify-content-center bg-light">
                            <div class="col-5"><span class="bg-white text-dark">One column</span></div>
                            <div class="col-5"><span class="bg-white text-dark">Two column</span></div>
                        </div>
                        <div class="row justify-content-end bg-light">
                            <div class="col-5"><span class="bg-white text-dark">One column</span></div>
                            <div class="col-5"><span class="bg-white text-dark">Two column</span></div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="table-responsive custom-scrollbar">
                            <table class="w-100">
                                <tbody>
                                    <tr>
                                        <th> Class</th>
                                        <th>Value of the class</th>
                                    </tr>
                                    <tr>
                                        <td><code>.justify-content-*</code></td>
                                        <td> start / center / end / around / between</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Nesting</h4>
                        <p class="mt-1 f-m-light">To nest your content with the default grid, add a new<code>.row</code>
                            and set
                            of <code>.col-sm-*</code> columns within an existing <code>.col-sm-*</code> column.
                        </p>
                    </div>
                    <div class="card-body grid-showcase">
                        <div class="row g-3">
                            <div class="col-3"><span>Level 1: .col-3</span></div>
                            <div class="col-9">
                                <div class="grid-wrapper pb-0">
                                    <div class="row g-2">
                                        <div class="col-5"><span class="border border-2">Level 2: .col-5</span></div>
                                        <div class="col-7"><span class="border border-2">Level 2: .col-7</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="grid-wrapper pb-0">
                                    <div class="row g-2">
                                        <div class="col-sm-2 col-4"><span class="border border-2">Level 1: .col-2</span>
                                        </div>
                                        <div class="col-sm-10 col-8"><span class="border border-2">Level 1: .col-10</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4"><span>Level 2: .col-4 </span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Order</h4>
                        <p class="mt-1 f-m-light">Using <code>.order </code>class, you can set the order position.</p>
                    </div>
                    <div class="card-body grid-showcase">
                        <div class="row g-2">
                            <div class="col-3 order-3"><span>First Item (order-3)</span></div>
                            <div class="col-5 order-first"><span>Second Item (order-first)</span></div>
                            <div class="col-4 order-last"><span>Third Item (order-last)</span></div>
                            <div class="col-3 order-2"><span>Fourth Item (order-2)</span></div>
                            <div class="col-sm-2 col-4 order-5"><span>fifth Item (order-5)</span></div>
                            <div class="col-sm-6 col-4 order-4"><span>sixth Item (order-4)</span></div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="table-responsive custom-scrollbar">
                            <table class="w-100">
                                <tbody>
                                    <tr>
                                        <th> Class</th>
                                        <th>Value of the class</th>
                                    </tr>
                                    <tr>
                                        <td><code>.order-*</code></td>
                                        <td> first / 2 / 3 / 4 / 5 / last</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Offset</h4>
                        <p class="mt-1 f-m-light">You can offset the grid column using <code>.offset-*</code> grid class.
                        </p>
                    </div>
                    <div class="card-body grid-showcase">
                        <div class="row g-2">
                            <div class="col-sm-5 col-4 offset-sm-3 offset-2"><span>col-5 offset-3</span></div>
                            <div class="col-sm-2 col-4 offset-sm-2 offset-1"><span>col-2 offset-2</span></div>
                            <div class="col-sm-4 col-5 offset-2"><span>col-4 offset-2</span></div>
                            <div class="col-sm-3 col-4 offset-sm-2 offset-1"><span>col-3 offset-2</span></div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="table-responsive custom-scrollbar">
                            <table class="w-100">
                                <tbody>
                                    <tr>
                                        <th> Class</th>
                                        <th>Value of the class</th>
                                    </tr>
                                    <tr>
                                        <td><code>.offset-*</code></td>
                                        <td> 1 / 2 / ... / 11 / 12</td>
                                    </tr>
                                </tbody>
                            </table>
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
