@extends('layouts.simple.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 ps-0">
                    <h3>Paginations</h3>
                </div>
                <div class="col-sm-6 pe-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item"> Bonus Ui</li>
                        <li class="breadcrumb-item active">Pagination</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <!-- simple pagination-->
            <div class="col-md-6">
                <div class="card height-equal">
                    <div class="card-header pb-0">
                        <h4>Default Pagination</h4>
                        <p class="f-m-light mt-1"></p>If the pagination component is used to navigate between a set of
                        search results, an appropriate label could be <code>aria-label="Search results pages"</code>.
                    </div>
                    <div class="card-body">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination pagination-primary pagin-border-primary">
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- pagination with active and disabled state-->
            <div class="col-md-6">
                <div class="card height-equal">
                    <div class="card-header pb-0">
                        <h4>Pagination With Active And Disabled</h4>
                        <p class="f-m-light mt-1">Use <code>.disabled </code>for links that appear un-clickable and<code>
                                .active</code> to indicate the current page.</p>
                    </div>
                    <div class="card-body">
                        <nav aria-label="...">
                            <ul class="pagination pagination-success pagin-border-success">
                                <li class="page-item disabled"><a class="page-link" href="javascript:void(0)"
                                        tabindex="-1">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                <li class="page-item active"><a class="page-link" href="javascript:void(0)">2 <span
                                            class="sr-only">(current)</span></a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- pagination with icons-->
            <div class="col-md-6">
                <div class="card height-equal">
                    <div class="card-header pb-0">
                        <h4>Pagination With Icons</h4>
                        <p class="f-m-light mt-1">Use an icon or symbol in place of text for some pagination links.</p>
                    </div>
                    <div class="card-body">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination pagination-secondary pagin-border-secondary">
                                <li class="page-item"><a class="page-link" href="javascript:void(0)"
                                        aria-label="Previous"><span aria-hidden="true">«</span><span
                                            class="sr-only">Previous</span></a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">...</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">20</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Next"><span
                                            aria-hidden="true">»</span><span class="sr-only">Next</span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Rounded Pagination-->
            <div class="col-md-6">
                <div class="card height-equal">
                    <div class="card-header pb-0">
                        <h4> Rounded Pagination</h4>
                        <p class="f-m-light mt-1">Used in rounded pagination.Use an icon or symbol in place of text for
                            some pagination links.<code>[.rounded-circle]</code></p>
                    </div>
                    <div class="card-body">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination pagination-dark pagin-border-dark gap-2">
                                <li class="page-item"><a class="page-link rounded-circle" href="javascript:void(0)"
                                        aria-label="Previous"><span aria-hidden="true">«</span><span
                                            class="sr-only">Previous</span></a></li>
                                <li class="page-item"><a class="page-link rounded-circle" href="javascript:void(0)">1</a>
                                </li>
                                <li class="page-item"><a class="page-link rounded-circle" href="javascript:void(0)">2</a>
                                </li>
                                <li class="page-item"><a class="page-link rounded-circle"
                                        href="javascript:void(0)">...</a></li>
                                <li class="page-item"><a class="page-link rounded-circle"
                                        href="javascript:void(0)">20</a></li>
                                <li class="page-item"><a class="page-link rounded-circle" href="javascript:void(0)"
                                        aria-label="Next"><span aria-hidden="true">»</span><span
                                            class="sr-only">Next</span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- pagination alignments-->
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Pagination Alignment</h4>
                        <p class="f-m-light mt-1">Change the alignment of pagination components with flexbox utilities. For
                            example, with <code>.justify-content-center:</code>.</p>
                    </div>
                    <div class="card-body">
                        <!-- left aligned pagination-->
                        <nav class="m-b-30" aria-label="Page navigation example">
                            <ul class="pagination pagin-border-primary pagination-primary">
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">Next</a></li>
                            </ul>
                        </nav>
                        <!-- center aligned pagination-->
                        <nav class="m-b-30" aria-label="Page navigation example">
                            <ul class="pagination justify-content-center pagin-border-danger pagination-danger">
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">I </a></li>
                                <li class="page-item active"><a class="page-link" href="javascript:void(0)">II </a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">III</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">Next</a></li>
                            </ul>
                        </nav>
                        <!-- right aligned pagination-->
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-end pagin-border-success pagination-success">
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">i </a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">ii </a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">iii</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- pagination sizing-->
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Pagination Sizing</h4>
                        <p class="f-m-light mt-1">Use <code>[pagination-lg/pagination-md/pagination-lg]</code> for
                            additional sizes.</p>
                    </div>
                    <div class="card-body">
                        <!-- large size pagination-->
                        <nav class="m-b-30" aria-label="Page navigation example">
                            <ul class="pagination pagination-lg pagination-info pagin-border-info">
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">Next</a></li>
                            </ul>
                        </nav>
                        <!--medium size pagination-->
                        <nav class="m-b-30" aria-label="Page navigation example">
                            <ul class="pagination pagination-md pagination-info pagin-border-info">
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">Next</a></li>
                            </ul>
                        </nav>
                        <!-- small size pagination-->
                        <nav aria-label="Page navigation example">
                            <ul class="pagination pagination-sm pagination-info pagin-border-info">
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">Next</a></li>
                            </ul>
                        </nav>
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
