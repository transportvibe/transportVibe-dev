@extends('layouts.simple.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/datatables.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 ps-0">
                    <h3>Blogs Management</h3>
                </div>
                <div class="col-sm-6 pe-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Laravel Example</li>
                        <li class="breadcrumb-item active">Blogs Management</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-6 box-col-12">
                <div class="card blog-management">
                    <div class="card-body bg-primary">
                        <div class="blog-card">
                            <div class="blog-card-content">
                                <h5>Good day, {{ \Illuminate\Support\Str::title(auth()->user()->first_name ?? '') }} {{ \Illuminate\Support\Str::title(auth()->user()->last_name ?? '') }}</h5>
                                <p>Welcome to the Crocs ! We are glad that you have visited our dashboard.</p>
                                <div class="divider-h-line bg-light"></div>
                                <div class="d-flex">
                                    <div class="blog-tags">
                                        <div class="tags-icon">
                                            <svg class="stroke-icon">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-widget') }}"></use>
                                            </svg>
                                        </div>
                                        <div class="tag-details">
                                            <h2 class="total-num counter">{{ sprintf("%02d",\App\Models\Category::all()->count()) }}</h2>
                                            <p>Total Categories</p>
                                        </div>
                                    </div>
                                    <div class="blog-tags">
                                        
                                        <div class="tags-icon">
                                            <svg class="stroke-icon">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-bookmark') }}"></use>
                                            </svg>
                                        </div>
                                        <div class="tag-details">
                                            <h2 class="total-num counter">{{ sprintf("%02d",\App\Models\Tag::all()->count()) }}</h2>
                                            <p>Total Tags</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-card-image">
                                <img src="{{ asset('assets/images/blog-management.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 box-col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="bg-light-primary b-r-15">
                                    <div class="upcoming-box">
                                        <div class="upcoming-icon bg-primary">
                                            <svg class="stroke-icon">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-blog') }}"></use>
                                            </svg>
                                        </div>
                                        <p>Blog</p>
                                        <a href="{{ route('admin.blog.create') }}" class="btn btn-primary">{{ __('Add Blog') }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 tag-card">
                                <div class="bg-light-secondary b-r-15">
                                    <div class="upcoming-box">
                                        <div class="upcoming-icon bg-secondary">
                                            <svg class="stroke-icon">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-bookmark') }}"></use>
                                            </svg>
                                        </div>
                                        <p>Tag</p>
                                        <a href="{{ route('admin.tag.create') }}" class="btn btn-secondary">{{ __('Add Tag') }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="bg-light-warning b-r-15">
                                    <div class="upcoming-box">
                                        <div class="upcoming-icon bg-warning">
                                            <img src="{{ asset('assets/images/dashboard/icon/total.png') }}" alt="">
                                        </div>
                                        <p>Category</p>
                                        <a href="{{ route('admin.category.index') }}" class="btn btn-warning">{{ __('Add Category') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive custom-scrollbar" id="row_create">
                            {!! $dataTable->table() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
    {!! $dataTable->scripts() !!}
@endsection
