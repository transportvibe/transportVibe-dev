@extends('layouts.simple.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/owlcarousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/range-slider.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 ps-0">
                    <h3>Product</h3>
                </div>
                <div class="col-sm-6 pe-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">ECommerce</li>
                        <li class="breadcrumb-item active">Product</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid product-wrapper">
        <div class="product-grid">
            <div class="feature-products">
                <div class="row">
                    <div class="col-md-6 products-total">
                        <div class="square-product-setting d-inline-block"><a class="icon-grid grid-layout-view"
                                href="#" data-original-title="" title=""><i data-feather="grid"></i></a></div>
                        <div class="square-product-setting d-inline-block"><a class="icon-grid m-0 list-layout-view"
                                href="#" data-original-title="" title=""><i data-feather="list"></i></a></div>
                        <span class="d-none-productlist filter-toggle">
                            Filters<span class="ms-2"><i class="toggle-data"
                                    data-feather="chevron-down"></i></span></span>
                        <div class="grid-options d-inline-block">
                            <ul>
                                <li><a class="product-2-layout-view" href="#" data-original-title=""
                                        title=""><span class="line-grid line-grid-1 bg-primary"></span><span
                                            class="line-grid line-grid-2 bg-primary"></span></a></li>
                                <li><a class="product-3-layout-view" href="#" data-original-title=""
                                        title=""><span class="line-grid line-grid-3 bg-primary"></span><span
                                            class="line-grid line-grid-4 bg-primary"></span><span
                                            class="line-grid line-grid-5 bg-primary"></span></a></li>
                                <li><a class="product-4-layout-view" href="#" data-original-title=""
                                        title=""><span class="line-grid line-grid-6 bg-primary"></span><span
                                            class="line-grid line-grid-7 bg-primary"></span><span
                                            class="line-grid line-grid-8 bg-primary"></span><span
                                            class="line-grid line-grid-9 bg-primary"></span></a></li>
                                <li><a class="product-6-layout-view" href="#" data-original-title=""
                                        title=""><span class="line-grid line-grid-10 bg-primary"></span><span
                                            class="line-grid line-grid-11 bg-primary"></span><span
                                            class="line-grid line-grid-12 bg-primary"></span><span
                                            class="line-grid line-grid-13 bg-primary"></span><span
                                            class="line-grid line-grid-14 bg-primary"></span><span
                                            class="line-grid line-grid-15 bg-primary"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 text-sm-end"><span class="m-r-5">Showing Products 1 - 24 Of 200 Results</span>
                        <div class="select2-drpdwn-product select-options d-inline-block">
                            <select class="form-control btn-square" name="select">
                                <option value="opt1">Featured</option>
                                <option value="opt2">Lowest Prices</option>
                                <option value="opt3">Highest Prices</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="product-sidebar">
                            <div class="filter-section">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 class="mb-0">Filters<span class="pull-right"><i
                                                    class="fa fa-chevron-down toggle-data"></i></span></h6>
                                    </div>
                                    <div class="left-filter filter-sidebar custom-scrollbar">
                                        <div class="card-body filter-cards-view animate-chk">
                                            <div class="product-filter">
                                                <h3>Category</h3>
                                                <div class="checkbox-animated mt-0">
                                                    <label class="d-block" for="edo-ani5">
                                                        <input class="checkbox_animated" id="edo-ani5" type="checkbox"
                                                            data-original-title="" title="">Man Shirt
                                                    </label>
                                                    <label class="d-block" for="edo-ani6">
                                                        <input class="checkbox_animated" id="edo-ani6" type="checkbox"
                                                            data-original-title="" title="">Man Jeans
                                                    </label>
                                                    <label class="d-block" for="edo-ani7">
                                                        <input class="checkbox_animated" id="edo-ani7" type="checkbox"
                                                            data-original-title="" title="">Woman Top
                                                    </label>
                                                    <label class="d-block" for="edo-ani8">
                                                        <input class="checkbox_animated" id="edo-ani8" type="checkbox"
                                                            data-original-title="" title="">Woman Jeans
                                                    </label>
                                                    <label class="d-block" for="edo-ani9">
                                                        <input class="checkbox_animated" id="edo-ani9" type="checkbox"
                                                            data-original-title="" title="">Man T-shirt
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="product-filter">
                                                <h3>Brand</h3>
                                                <div class="checkbox-animated mt-0">
                                                    <label class="d-block" for="chk-ani">
                                                        <input class="checkbox_animated" id="chk-ani" type="checkbox"
                                                            data-original-title="" title=""> Levi's
                                                    </label>
                                                    <label class="d-block" for="chk-ani1">
                                                        <input class="checkbox_animated" id="chk-ani1" type="checkbox"
                                                            data-original-title="" title="">Diesel
                                                    </label>
                                                    <label class="d-block" for="chk-ani2">
                                                        <input class="checkbox_animated" id="chk-ani2" type="checkbox"
                                                            data-original-title="" title="">Lee
                                                    </label>
                                                    <label class="d-block" for="chk-ani3">
                                                        <input class="checkbox_animated" id="chk-ani3" type="checkbox"
                                                            data-original-title="" title="">Hudson
                                                    </label>
                                                    <label class="d-block" for="chk-ani4">
                                                        <input class="checkbox_animated" id="chk-ani4" type="checkbox"
                                                            data-original-title="" title="">Denizen
                                                    </label>
                                                    <label class="d-block" for="chk-ani5">
                                                        <input class="checkbox_animated" id="chk-ani5" type="checkbox"
                                                            data-original-title="" title="">Spykar
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="product-filter slider-product">
                                                <h3>Colors</h3>
                                                <div class="color-selector">
                                                    <ul>
                                                        <li class="white"></li>
                                                        <li class="gray"></li>
                                                        <li class="black"></li>
                                                        <li class="orange"></li>
                                                        <li class="green"></li>
                                                        <li class="pink"></li>
                                                        <li class="yellow"></li>
                                                        <li class="blue"></li>
                                                        <li class="red"></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-filter pb-0">
                                                <h3>Price</h3>
                                                <input id="u-range-03" type="text">
                                                <h3>New Products</h3>
                                            </div>
                                            <div class="product-filter pb-0 new-products">
                                                <div class="owl-carousel owl-theme" id="testimonial">
                                                    <div class="item">
                                                        <div class="product-box row">
                                                            <div class="product-img col-md-5"><img
                                                                    class="img-fluid img-100"
                                                                    src="{{ asset('assets/images/ecommerce/01.jpg') }}"
                                                                    alt="" data-original-title="" title="">
                                                            </div>
                                                            <div class="product-details col-md-7 text-start"><span><i
                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                        class="fa fa-star font-warning"></i></span>
                                                                <p class="mb-0">Woman T-shirt</p>
                                                                <div class="product-price">$100.00</div>
                                                            </div>
                                                        </div>
                                                        <div class="product-box row">
                                                            <div class="product-img col-md-5"><img
                                                                    class="img-fluid img-100"
                                                                    src="{{ asset('assets/images/ecommerce/02.jpg') }}"
                                                                    alt="" data-original-title="" title="">
                                                            </div>
                                                            <div class="product-details col-md-7 text-start"><span><i
                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                        class="fa fa-star font-warning"></i></span>
                                                                <p class="mb-0">Dream Beauty Fashion</p>
                                                                <div class="product-price">$150.00</div>
                                                            </div>
                                                        </div>
                                                        <div class="product-box row">
                                                            <div class="product-img col-md-5"><img
                                                                    class="img-fluid img-100"
                                                                    src="{{ asset('assets/images/ecommerce/03.jpg') }}"
                                                                    alt="" data-original-title="" title="">
                                                            </div>
                                                            <div class="product-details col-md-7 text-start"><span><i
                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                        class="fa fa-star font-warning"></i></span>
                                                                <p class="mb-0">VOXATI</p>
                                                                <div class="product-price">$200.00</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="product-box row">
                                                            <div class="product-img col-md-5"><img
                                                                    class="img-fluid img-100"
                                                                    src="{{ asset('assets/images/ecommerce/01.jpg') }}"
                                                                    alt="" data-original-title="" title="">
                                                            </div>
                                                            <div class="product-details col-md-7 text-start"><span><i
                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                        class="fa fa-star font-warning"></i></span>
                                                                <p class="mb-0">Fancy Shirt</p>
                                                                <div class="product-price">$100.00</div>
                                                            </div>
                                                        </div>
                                                        <div class="product-box row">
                                                            <div class="product-img col-md-5"><img
                                                                    class="img-fluid img-100"
                                                                    src="{{ asset('assets/images/ecommerce/02.jpg') }}"
                                                                    alt="" data-original-title="" title="">
                                                            </div>
                                                            <div class="product-details col-md-7 text-start"><span><i
                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                        class="fa fa-star font-warning"></i></span>
                                                                <p class="mb-0">Fancy Shirt</p>
                                                                <div class="product-price">$100.00</div>
                                                            </div>
                                                        </div>
                                                        <div class="product-box row">
                                                            <div class="product-img col-md-5"><img
                                                                    class="img-fluid img-100"
                                                                    src="{{ asset('assets/images/ecommerce/03.jpg') }}"
                                                                    alt="" data-original-title="" title="">
                                                            </div>
                                                            <div class="product-details col-md-7 text-start"><span><i
                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                        class="fa fa-star font-warning"></i></span>
                                                                <p class="mb-0">Fancy Shirt</p>
                                                                <div class="product-price">$100.00 </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-filter text-center"><img class="img-fluid banner-product"
                                                    src="{{ asset('assets/images/ecommerce/banner.jpg') }}"
                                                    alt="" data-original-title="" title=""></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-12">
                        <form>
                            <div class="form-group m-0">
                                <input class="form-control" type="search" placeholder="Search.." data-original-title=""
                                    title=""><i class="fa fa-search"></i>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="product-wrapper-grid">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="product-box">
                                <div class="product-img"><img class="img-fluid"
                                        src="{{ asset('assets/images/ecommerce/01.jpg') }}" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a href="{{ route('admin.cart') }}"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i
                                                        class="icon-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenter" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="product-box row">
                                                    <div class="product-img col-lg-6"><img class="img-fluid"
                                                            src="{{ asset('assets/images/ecommerce/01.jpg') }}"
                                                            alt=""></div>
                                                    <div class="product-details col-lg-6 text-start">
                                                        <h4>Women's Top</h4>
                                                        <div class="product-price">$50.00
                                                            <del>$35.00 </del>
                                                        </div>
                                                        <div class="product-view">
                                                            <h3>Product Details</h3>
                                                            <p class="mb-0">Rock Paper Scissors Women Tank Top High Neck
                                                                Cotton Top Stylish Women Top..</p>
                                                        </div>
                                                        <div class="product-size">
                                                            <ul>
                                                                <li>
                                                                    <button class="btn btn-light"
                                                                        type="button">M</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-light"
                                                                        type="button">L</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-light"
                                                                        type="button">Xl</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-qnty">
                                                            <h3>Quantity</h3>
                                                            <fieldset>
                                                                <div class="input-group">
                                                                    <input class="touchspin text-center" type="text"
                                                                        value="5">
                                                                </div>
                                                            </fieldset>
                                                            <div class="addcart-btn"><a class="btn btn-primary"
                                                                    href="{{ route('admin.cart') }}">Add to Cart</a><a
                                                                    class="btn btn-primary ms-2"
                                                                    href="{{ route('admin.product_page') }}">View Details</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star-o"></i><i
                                            class="fa fa-star-o"></i></div><a href="{{ route('admin.product_page') }}">
                                        <h4>Women's Top</h4>
                                    </a>
                                    <p>Regular Flare Fit Women's white Top</p>
                                    <div class="product-price">$50.00
                                        <del>$35.00 </del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="product-box">
                                <div class="product-img">
                                    <div class="ribbon ribbon-danger">Sale</div><img class="img-fluid"
                                        src="{{ asset('assets/images/ecommerce/02.jpg') }}" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a href="{{ route('admin.cart') }}"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter1"><i
                                                        class="icon-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenter1" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="product-box row">
                                                    <div class="product-img col-lg-6"><img class="img-fluid"
                                                            src="{{ asset('assets/images/ecommerce/02.jpg') }}"
                                                            alt=""></div>
                                                    <div class="product-details col-lg-6 text-start">
                                                        <h4>Men's Jacket</h4>
                                                        <div class="product-price">$45.00
                                                            <del>$50.00 </del>
                                                        </div>
                                                        <div class="product-view">
                                                            <h3>Product Details</h3>
                                                            <p class="mb-0">Lorate Solid Men's Fashion Full Sleeves
                                                                Latest Jacket for Men With Button Closure Long Sleeve Casual
                                                                Torn Lycra Denim Jacket.</p>
                                                        </div>
                                                        <div class="product-size">
                                                            <ul>
                                                                <li>
                                                                    <button class="btn btn-light"
                                                                        type="button">M</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-light"
                                                                        type="button">L</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-light"
                                                                        type="button">Xl</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-qnty">
                                                            <h3>Quantity</h3>
                                                            <fieldset>
                                                                <div class="input-group">
                                                                    <input class="touchspin text-center" type="text"
                                                                        value="5">
                                                                </div>
                                                            </fieldset>
                                                            <div class="addcart-btn"><a class="btn btn-primary"
                                                                    href="{{ route('admin.cart') }}">Add to Cart</a><a
                                                                    class="btn btn-primary ms-2"
                                                                    href="{{ route('admin.product_page') }}">View Details</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i
                                            class="fa fa-star-o"></i></div><a href="{{ route('admin.product_page') }}">
                                        <h4>Men's Jacket</h4>
                                    </a>
                                    <p>Cotton Blend Men's Blue Jacket</p>
                                    <div class="product-price">$45.00
                                        <del>$50.00 </del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="product-box">
                                <div class="product-img"><img class="img-fluid"
                                        src="{{ asset('assets/images/ecommerce/03.jpg') }}" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a href="{{ route('admin.cart') }}"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter2"><i
                                                        class="icon-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenter2" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="product-box row">
                                                    <div class="product-img col-lg-6"><img class="img-fluid"
                                                            src="{{ asset('assets/images/ecommerce/03.jpg') }}"
                                                            alt=""></div>
                                                    <div class="product-details col-lg-6 text-start">
                                                        <h4>Women's Coat</h4>
                                                        <div class="product-price">$426.00
                                                            <del>$480.00 </del>
                                                        </div>
                                                        <div class="product-view">
                                                            <h3>Product Details</h3>
                                                            <p class="mb-0">Women's Classic Stretchy All Time Trendy
                                                                Pleated Skirt Western coat midi Skirt plited Lehenga.</p>
                                                        </div>
                                                        <div class="product-size">
                                                            <ul>
                                                                <li>
                                                                    <button class="btn btn-light"
                                                                        type="button">M</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-light"
                                                                        type="button">L</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-light"
                                                                        type="button">Xl</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-qnty">
                                                            <h3>Quantity</h3>
                                                            <fieldset>
                                                                <div class="input-group">
                                                                    <input class="touchspin text-center" type="text"
                                                                        value="5">
                                                                </div>
                                                            </fieldset>
                                                            <div class="addcart-btn"><a class="btn btn-primary"
                                                                    href="{{ route('admin.cart') }}">Add to Cart</a><a
                                                                    class="btn btn-primary ms-2"
                                                                    href="{{ route('admin.product_page') }}">View Details</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i
                                            class="fa fa-star-o"></i></div><a href="{{ route('admin.product_page') }}">
                                        <h4>Women's Coat</h4>
                                    </a>
                                    <p>Cotton Blend Women's Coat</p>
                                    <div class="product-price"> $426.00
                                        <del>$480.00 </del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="product-box">
                                <div class="product-img">
                                    <div class="ribbon ribbon-success ribbon-right">50%</div><img class="img-fluid"
                                        src="{{ asset('assets/images/ecommerce/04.jpg') }}" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a href="{{ route('admin.cart') }}"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter3"><i
                                                        class="icon-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenter3" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="product-box row">
                                                    <div class="product-img col-lg-6"><img class="img-fluid"
                                                            src="{{ asset('assets/images/ecommerce/04.jpg') }}"
                                                            alt=""></div>
                                                    <div class="product-details col-lg-6 text-start">
                                                        <h4>Men's Shirt</h4>
                                                        <div class="product-price">$26.00
                                                            <del>$35.00 </del>
                                                        </div>
                                                        <div class="product-view">
                                                            <h3>Product Details</h3>
                                                            <p class="mb-0">Glamcci Men's Cotton Blend Printed One Piece
                                                                Party Jacket</p>
                                                        </div>
                                                        <div class="product-size">
                                                            <ul>
                                                                <li>
                                                                    <button class="btn btn-light"
                                                                        type="button">M</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-light"
                                                                        type="button">L</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-light"
                                                                        type="button">Xl</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-qnty">
                                                            <h3>Quantity</h3>
                                                            <fieldset>
                                                                <div class="input-group">
                                                                    <input class="touchspin text-center" type="text"
                                                                        value="5">
                                                                </div>
                                                            </fieldset>
                                                            <div class="addcart-btn"><a class="btn btn-primary"
                                                                    href="{{ route('admin.cart') }}">Add to Cart</a><a
                                                                    class="btn btn-primary ms-2"
                                                                    href="{{ route('admin.product_page') }}">View Details</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </div><a href="{{ route('admin.product_page') }}">
                                        <h4>Men's Shirt</h4>
                                    </a>
                                    <p>Cotton Regular Fit Men's Shirt</p>
                                    <div class="product-price">$26.00
                                        <del>$35.00 </del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="product-box">
                                <div class="product-img"><img class="img-fluid"
                                        src="{{ asset('assets/images/ecommerce/05.jpg') }}" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a href="{{ route('admin.cart') }}"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter4"><i
                                                        class="icon-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModalCenter4" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenter4" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="product-box row">
                                                    <div class="product-img col-lg-6"><img class="img-fluid"
                                                            src="{{ asset('assets/images/ecommerce/05.jpg') }}"
                                                            alt=""></div>
                                                    <div class="product-details col-lg-6 text-start">
                                                        <h4>Track Suit</h4>
                                                        <div class="product-price">$20.00
                                                            <del>$25.00 </del>
                                                        </div>
                                                        <div class="product-view">
                                                            <h3>Product Details</h3>
                                                            <p class="mb-0">Glamcci Men's Cotton Blend Printed One Piece
                                                                Track Suit.</p>
                                                        </div>
                                                        <div class="product-size">
                                                            <ul>
                                                                <li>
                                                                    <button class="btn btn-light"
                                                                        type="button">M</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-light"
                                                                        type="button">L</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-light"
                                                                        type="button">Xl</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-qnty">
                                                            <h3>Quantity</h3>
                                                            <fieldset>
                                                                <div class="input-group">
                                                                    <input class="touchspin text-center" type="text"
                                                                        value="5">
                                                                </div>
                                                            </fieldset>
                                                            <div class="addcart-btn"><a class="btn btn-primary"
                                                                    href="{{ route('admin.cart') }}">Add to Cart</a><a
                                                                    class="btn btn-primary ms-2"
                                                                    href="{{ route('admin.product_page') }}">View Details</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>
                                    </div><a href="{{ route('admin.product_page') }}">
                                        <h4>Track Suit</h4>
                                    </a>
                                    <p>Cotton Regular Fit Men's Track Suit</p>
                                    <div class="product-price">
                                        $20.00
                                        <del>$25.00 </del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="product-box">
                                <div class="ribbon ribbon-secondary ribbon-vertical-left"><i class="icon-gift"></i></div>
                                <div class="product-img"><img class="img-fluid"
                                        src="{{ asset('assets/images/ecommerce/06.jpg') }}" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a href="{{ route('admin.cart') }}"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter5"><i
                                                        class="icon-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModalCenter5" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenter5" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="product-box row">
                                                    <div class="product-img col-lg-6"><img class="img-fluid"
                                                            src="{{ asset('assets/images/ecommerce/06.jpg') }}"
                                                            alt=""></div>
                                                    <div class="product-details col-lg-6 text-start">
                                                        <h4>Women's Jacket</h4>
                                                        <div class="product-price">$25.00
                                                            <del>$30.00 </del>
                                                        </div>
                                                        <div class="product-view">
                                                            <h3>Product Details</h3>
                                                            <p class="mb-0">Rock Paper Scissors Womens Tank Top High Neck
                                                                Cotton Top Stylish Women Top..</p>
                                                        </div>
                                                        <div class="product-size">
                                                            <ul>
                                                                <li>
                                                                    <button class="btn btn-light"
                                                                        type="button">M</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-light"
                                                                        type="button">L</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-light"
                                                                        type="button">Xl</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-qnty">
                                                            <h3>Quantity</h3>
                                                            <fieldset>
                                                                <div class="input-group">
                                                                    <input class="touchspin text-center" type="text"
                                                                        value="5">
                                                                </div>
                                                            </fieldset>
                                                            <div class="addcart-btn"><a class="btn btn-primary"
                                                                    href="{{ route('admin.cart') }}">Add to Cart</a><a
                                                                    class="btn btn-primary ms-2"
                                                                    href="{{ route('admin.product_page') }}">View Details</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star-o"></i><i
                                            class="fa fa-star-o"></i></div><a href="{{ route('admin.product_page') }}">
                                        <h4>Women's Jacket</h4>
                                    </a>
                                    <p>Solid Denim Jacket</p>
                                    <div class="product-price">$25.00
                                        <del>$30.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="product-box">
                                <div class="product-img"><img class="img-fluid"
                                        src="{{ asset('assets/images/ecommerce/07.jpg') }}" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a href="{{ route('admin.cart') }}"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter6"><i
                                                        class="icon-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModalCenter6" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenter6" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="product-box row">
                                                    <div class="product-img col-lg-6"><img class="img-fluid"
                                                            src="{{ asset('assets/images/ecommerce/07.jpg') }}"
                                                            alt=""></div>
                                                    <div class="product-details col-lg-6 text-start">
                                                        <h4>Denim Jacket</h4>
                                                        <div class="product-price">$30.00
                                                            <del>$35.00 </del>
                                                        </div>
                                                        <div class="product-view">
                                                            <h3>Product Details</h3>
                                                            <p class="mb-0">Lorate Solid Men's Fashion Full Sleeves
                                                                Latest Jacket for Men With Button Closure Long Sleeve Casual
                                                                Torn Lycra Men Denim Shirt.</p>
                                                        </div>
                                                        <div class="product-size">
                                                            <ul>
                                                                <li>
                                                                    <button class="btn btn-light"
                                                                        type="button">M</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-light"
                                                                        type="button">L</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-light"
                                                                        type="button">Xl</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-qnty">
                                                            <h3>Quantity</h3>
                                                            <fieldset>
                                                                <div class="input-group">
                                                                    <input class="touchspin text-center" type="text"
                                                                        value="5">
                                                                </div>
                                                            </fieldset>
                                                            <div class="addcart-btn"><a class="btn btn-primary"
                                                                    href="{{ route('admin.cart') }}">Add to Cart</a><a
                                                                    class="btn btn-primary ms-2"
                                                                    href="{{ route('admin.product_page') }}">View Details</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i
                                            class="fa fa-star-o"></i></div><a href="{{ route('admin.product_page') }}">
                                        <h4>Denim Jacket</h4>
                                    </a>
                                    <p>Denim Regular Men's Jacket</p>
                                    <div class="product-price">$30.00
                                        <del>$35.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="product-box">
                                <div class="product-img"><img class="img-fluid"
                                        src="{{ asset('assets/images/ecommerce/08.jpg') }}" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a href="{{ route('admin.cart') }}"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter7"><i
                                                        class="icon-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModalCenter7" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenter7" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="product-box row">
                                                    <div class="product-img col-lg-6"><img class="img-fluid"
                                                            src="{{ asset('assets/images/ecommerce/08.jpg') }}"
                                                            alt=""></div>
                                                    <div class="product-details col-lg-6 text-start">
                                                        <h4>Men's Formal shirt</h4>
                                                        <div class="product-price">$35.00
                                                            <del>$40.00 </del>
                                                        </div>
                                                        <div class="product-view">
                                                            <h3>Product Details</h3>
                                                            <p class="mb-0">Ravaiyaa - Attitude is everything Cotton
                                                                Men's Formal One Top Shirt.</p>
                                                        </div>
                                                        <div class="product-size">
                                                            <ul>
                                                                <li>
                                                                    <button class="btn btn-light"
                                                                        type="button">M</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-light"
                                                                        type="button">L</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-light"
                                                                        type="button">Xl</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-qnty">
                                                            <h3>Quantity</h3>
                                                            <fieldset>
                                                                <div class="input-group">
                                                                    <input class="touchspin text-center" type="text"
                                                                        value="5">
                                                                </div>
                                                            </fieldset>
                                                            <div class="addcart-btn"><a class="btn btn-primary"
                                                                    href="{{ route('admin.cart') }}">Add to Cart</a><a
                                                                    class="btn btn-primary ms-2"
                                                                    href="{{ route('admin.product_page') }}">View Details</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star-o"></i><i
                                            class="fa fa-star-o"></i></div><a href="{{ route('admin.product_page') }}">
                                        <h4>Men's Formal shirt</h4>
                                    </a>
                                    <p>Regular Men's Denim Shirt.</p>
                                    <div class="product-price">$35.00
                                        <del>$40.00 </del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="product-box">
                                <div class="product-img"><img class="img-fluid"
                                        src="{{ asset('assets/images/ecommerce/09.jpg') }}" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a href="{{ route('admin.cart') }}"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter8"><i
                                                        class="icon-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModalCenter8" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenter8" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="product-box row">
                                                    <div class="product-img col-lg-6"><img class="img-fluid"
                                                            src="{{ asset('assets/images/ecommerce/09.jpg') }}"
                                                            alt=""></div>
                                                    <div class="product-details col-lg-6 text-start">
                                                        <h4>Woman's Gown</h4>
                                                        <div class="product-price">$45.00
                                                            <del>$50.00 </del>
                                                        </div>
                                                        <div class="product-view">
                                                            <h3>Product Details</h3>
                                                            <p class="mb-0">Women Tank Top High Neck Cotton Top Stylish
                                                                Women Gown..</p>
                                                        </div>
                                                        <div class="product-size">
                                                            <ul>
                                                                <li>
                                                                    <button class="btn btn-light"
                                                                        type="button">M</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-light"
                                                                        type="button">L</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-light"
                                                                        type="button">Xl</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-qnty">
                                                            <h3>Quantity</h3>
                                                            <fieldset>
                                                                <div class="input-group">
                                                                    <input class="touchspin text-center" type="text"
                                                                        value="5">
                                                                </div>
                                                            </fieldset>
                                                            <div class="addcart-btn"><a class="btn btn-primary"
                                                                    href="{{ route('admin.cart') }}">Add to Cart</a><a
                                                                    class="btn btn-primary ms-2"
                                                                    href="{{ route('admin.product_page') }}">View Details</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>
                                    </div><a href="{{ route('admin.product_page') }}">
                                        <h4>Woman's Gown</h4>
                                    </a>
                                    <p>Woman's Long Gown</p>
                                    <div class="product-price">$45.00
                                        <del>$50.00 </del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="product-box">
                                <div class="product-img"><img class="img-fluid"
                                        src="{{ asset('assets/images/ecommerce/10.jpg') }}" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a href="{{ route('admin.cart') }}"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter9"><i
                                                        class="icon-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModalCenter9" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenter9" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="product-box row">
                                                    <div class="product-img col-lg-6"><img class="img-fluid"
                                                            src="{{ asset('assets/images/ecommerce/10.jpg') }}"
                                                            alt=""></div>
                                                    <div class="product-details col-lg-6 text-start">
                                                        <h4>Men's Black Suit</h4>
                                                        <div class="product-price">$50.00
                                                            <del>$55.00 </del>
                                                        </div>
                                                        <div class="product-view">
                                                            <h3>Product Details</h3>
                                                            <p class="mb-0">Attitude is everything Cotton Men's Black
                                                                Suit.</p>
                                                        </div>
                                                        <div class="product-size">
                                                            <ul>
                                                                <li>
                                                                    <button class="btn btn-light"
                                                                        type="button">M</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-light"
                                                                        type="button">L</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-light"
                                                                        type="button">Xl</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-qnty">
                                                            <h3>Quantity</h3>
                                                            <fieldset>
                                                                <div class="input-group">
                                                                    <input class="touchspin text-center" type="text"
                                                                        value="5">
                                                                </div>
                                                            </fieldset>
                                                            <div class="addcart-btn"><a class="btn btn-primary"
                                                                    href="{{ route('admin.cart') }}">Add to Cart</a><a
                                                                    class="btn btn-primary ms-2"
                                                                    href="{{ route('admin.product_page') }}">View Details</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </div><a href="{{ route('admin.product_page') }}">
                                        <h4>Men's Black Suit</h4>
                                    </a>
                                    <p>Men's Full Black Suit</p>
                                    <div class="product-price">$50.00
                                        <del>$55.00 </del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="product-box">
                                <div class="product-img"><img class="img-fluid"
                                        src="{{ asset('assets/images/ecommerce/11.jpg') }}" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a href="{{ route('admin.cart') }}"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter10"><i
                                                        class="icon-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModalCenter10" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenter10" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="product-box row">
                                                    <div class="product-img col-lg-6"><img class="img-fluid"
                                                            src="{{ asset('assets/images/ecommerce/11.jpg') }}"
                                                            alt=""></div>
                                                    <div class="product-details col-lg-6 text-start">
                                                        <h4>Woman's Dress</h4>
                                                        <div class="product-price">$60.00
                                                            <del>$65.00 </del>
                                                        </div>
                                                        <div class="product-view">
                                                            <h3>Product Details</h3>
                                                            <p class="mb-0">Tops for Stylish Woman's Dress</p>
                                                        </div>
                                                        <div class="product-size">
                                                            <ul>
                                                                <li>
                                                                    <button class="btn btn-light"
                                                                        type="button">M</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-light"
                                                                        type="button">L</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-light"
                                                                        type="button">Xl</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-qnty">
                                                            <h3>Quantity</h3>
                                                            <fieldset>
                                                                <div class="input-group">
                                                                    <input class="touchspin text-center" type="text"
                                                                        value="5">
                                                                </div>
                                                            </fieldset>
                                                            <div class="addcart-btn"><a class="btn btn-primary"
                                                                    href="{{ route('admin.cart') }}">Add to Cart</a><a
                                                                    class="btn btn-primary ms-2"
                                                                    href="{{ route('admin.product_page') }}">View Details</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </div><a href="{{ route('admin.product_page') }}">
                                        <h4>Woman's Dress</h4>
                                    </a>
                                    <p>Tops for Stylish Woman's Dress</p>
                                    <div class="product-price">$60.00
                                        <del>$65.00 </del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="product-box">
                                <div class="product-img"><img class="img-fluid"
                                        src="{{ asset('assets/images/ecommerce/12.jpg') }}" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a href="{{ route('admin.cart') }}"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter11"><i
                                                        class="icon-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModalCenter11" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenter11" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="product-box row">
                                                    <div class="product-img col-lg-6"><img class="img-fluid"
                                                            src="{{ asset('assets/images/ecommerce/12.jpg') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="product-details col-lg-6 text-start">
                                                        <h4>Slim Fit Plastic Coat</h4>
                                                        <div class="product-price">$30.00
                                                            <del>$35.00 </del>
                                                        </div>
                                                        <div class="product-view">
                                                            <h3>Product Details</h3>
                                                            <p class="mb-0">Premier Cropped Skinny Jean</p>
                                                        </div>
                                                        <div class="product-size">
                                                            <ul>
                                                                <li>
                                                                    <button class="btn btn-light"
                                                                        type="button">M</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-light"
                                                                        type="button">L</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-light"
                                                                        type="button">Xl</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-qnty">
                                                            <h3>Quantity</h3>
                                                            <fieldset>
                                                                <div class="input-group">
                                                                    <input class="touchspin text-center" type="text"
                                                                        value="5">
                                                                </div>
                                                            </fieldset>
                                                            <div class="addcart-btn"><a class="btn btn-primary"
                                                                    href="{{ route('admin.cart') }}">Add to Cart</a><a
                                                                    class="btn btn-primary ms-2"
                                                                    href="{{ route('admin.product_page') }}">View Details</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star-o"></i><i
                                            class="fa fa-star-o"></i></div><a href="{{ route('admin.product_page') }}">
                                        <h4>Slim Fit Plastic Coat</h4>
                                    </a>
                                    <p>Slim Fit Plastic Thunder Coat</p>
                                    <div class="product-price">$30.00
                                        <del>$35.00 </del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="product-box">
                                <div class="product-img">
                                    <div class="ribbon ribbon-bookmark ribbon-vertical-right ribbon-info"><i
                                            class="icofont icofont-love"></i></div><img class="img-fluid"
                                        src="{{ asset('assets/images/ecommerce/13.jpg') }}" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a href="{{ route('admin.cart') }}"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter12"><i
                                                        class="icon-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModalCenter12" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenter12" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="product-box row">
                                                    <div class="product-img col-lg-6"><img class="img-fluid"
                                                            src="{{ asset('assets/images/ecommerce/13.jpg') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="product-details col-lg-6 text-start">
                                                        <h4>Women's Hoodie</h4>
                                                        <div class="product-price">$50.00
                                                            <del>$60.00 </del>
                                                        </div>
                                                        <div class="product-view">
                                                            <h3>Product Details</h3>
                                                            <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus
                                                                error sit voluptatem accusantium doloremque laudantium,
                                                                totam rem aperiam eaque ipsa, quae ab illo.</p>
                                                        </div>
                                                        <div class="product-size">
                                                            <ul>
                                                                <li>
                                                                    <button class="btn btn-light"
                                                                        type="button">M</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-light"
                                                                        type="button">L</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-light"
                                                                        type="button">Xl</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-qnty">
                                                            <h3>Quantity</h3>
                                                            <fieldset>
                                                                <div class="input-group">
                                                                    <input class="touchspin text-center" type="text"
                                                                        value="5">
                                                                </div>
                                                            </fieldset>
                                                            <div class="addcart-btn"><a class="btn btn-primary"
                                                                    href="{{ route('admin.cart') }}">Add to Cart</a><a
                                                                    class="btn btn-primary ms-2"
                                                                    href="{{ route('admin.product_page') }}">View Details</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star-half-o"></i></div><a href="{{ route('admin.product_page') }}">
                                        <h4>Women's Hoodie</h4>
                                    </a>
                                    <p>Women's Hoodie T-Shirt</p>
                                    <div class="product-price">$30.00
                                        <del>$360.00 </del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="product-box">
                                <div class="product-img"><img class="img-fluid"
                                        src="{{ asset('assets/images/ecommerce/14.jpg') }}" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a href="{{ route('admin.cart') }}"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter13"><i
                                                        class="icon-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModalCenter13" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenter13" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="product-box row">
                                                    <div class="product-img col-lg-6"><img class="img-fluid"
                                                            src="{{ asset('assets/images/ecommerce/14.jpg') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="product-details col-lg-6 text-start">
                                                        <h4>Men's T-shirt</h4>
                                                        <div class="product-price">$60.00
                                                            <del>$70.00 </del>
                                                        </div>
                                                        <div class="product-view">
                                                            <h3>Product Details</h3>
                                                            <p class="mb-0">Lorate Solid Men's Fashion Full Sleeves
                                                                Latest Jacket for Men With Button Closure Long Sleeve Casual
                                                                Torn Lycra Denim Shirt.</p>
                                                        </div>
                                                        <div class="product-size">
                                                            <ul>
                                                                <li>
                                                                    <button class="btn btn-light"
                                                                        type="button">M</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-light"
                                                                        type="button">L</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-light"
                                                                        type="button">Xl</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-qnty">
                                                            <h3>Quantity</h3>
                                                            <fieldset>
                                                                <div class="input-group">
                                                                    <input class="touchspin text-center" type="text"
                                                                        value="5">
                                                                </div>
                                                            </fieldset>
                                                            <div class="addcart-btn"><a class="btn btn-primary"
                                                                    href="{{ route('admin.cart') }}">Add to Cart</a><a
                                                                    class="btn btn-primary ms-2"
                                                                    href="{{ route('admin.product_page') }}">View Details</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star-half-o"></i></div><a href="{{ route('admin.product_page') }}">
                                        <h4>Men's T-shirt</h4>
                                    </a>
                                    <p>Men's Denim T-shirt</p>
                                    <div class="product-price">$60.00
                                        <del>$70.00 </del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="product-box">
                                <div class="product-img">
                                    <div class="ribbon ribbon-clip ribbon-warning">Hot</div><img class="img-fluid"
                                        src="{{ asset('assets/images/ecommerce/15.jpg') }}" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a href="{{ route('admin.cart') }}"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter14"><i
                                                        class="icon-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModalCenter14" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenter14" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="product-box row">
                                                    <div class="product-img col-lg-6"><img class="img-fluid"
                                                            src="{{ asset('assets/images/ecommerce/15.jpg') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="product-details col-lg-6 text-start">
                                                        <h4>Woman Party Wear</h4>
                                                        <div class="product-price">$57.00
                                                            <del>$60.00 </del>
                                                        </div>
                                                        <div class="product-view">
                                                            <h3>Product Details</h3>
                                                            <p class="mb-0">Stylish Party Wear for women</p>
                                                        </div>
                                                        <div class="product-size">
                                                            <ul>
                                                                <li>
                                                                    <button class="btn btn-light"
                                                                        type="button">M</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-light"
                                                                        type="button">L</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-light"
                                                                        type="button">Xl</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-qnty">
                                                            <h3>Quantity</h3>
                                                            <fieldset>
                                                                <div class="input-group">
                                                                    <input class="touchspin text-center" type="text"
                                                                        value="5">
                                                                </div>
                                                            </fieldset>
                                                            <div class="addcart-btn"><a class="btn btn-primary"
                                                                    href="{{ route('admin.cart') }}">Add to Cart</a><a
                                                                    class="btn btn-primary ms-2"
                                                                    href="{{ route('admin.product_page') }}">View Details</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i></div><a href="{{ route('admin.product_page') }}">
                                        <h4>Woman Party Wear</h4>
                                    </a>
                                    <p>Stylish Party Wear for women</p>
                                    <div class="product-price">$30.00
                                        <del>$350.00 </del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="product-box">
                                <div class="product-img"><img class="img-fluid"
                                        src="{{ asset('assets/images/ecommerce/16.jpg') }}" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a href="{{ route('admin.cart') }}"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter15"><i
                                                        class="icon-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModalCenter15" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenter15" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="product-box row">
                                                    <div class="product-img col-lg-6"><img class="img-fluid"
                                                            src="{{ asset('assets/images/ecommerce/16.jpg') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="product-details col-lg-6 text-start">
                                                        <h4>Woman T-shirt</h4>
                                                        <div class="product-price">$26.00
                                                            <del>$350.00 </del>
                                                        </div>
                                                        <div class="product-view">
                                                            <h3>Product Details</h3>
                                                            <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus
                                                                error sit voluptatem accusantium doloremque laudantium,
                                                                totam rem aperiam eaque ipsa, quae ab illo.</p>
                                                        </div>
                                                        <div class="product-size">
                                                            <ul>
                                                                <li>
                                                                    <button class="btn btn-light"
                                                                        type="button">M</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-light"
                                                                        type="button">L</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-light"
                                                                        type="button">Xl</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-qnty">
                                                            <h3>Quantity</h3>
                                                            <fieldset>
                                                                <div class="input-group">
                                                                    <input class="touchspin text-center" type="text"
                                                                        value="5">
                                                                </div>
                                                            </fieldset>
                                                            <div class="addcart-btn"><a class="btn btn-primary"
                                                                    href="{{ route('admin.cart') }}">Add to Cart</a><a
                                                                    class="btn btn-primary ms-2"
                                                                    href="{{ route('admin.product_page') }}">View Details</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i></div><a href="{{ route('admin.product_page') }}">
                                        <h4>Dream Beauty Fashion</h4>
                                    </a>
                                    <p>Tops for Women Stylish</p>
                                    <div class="product-price">$30.00
                                        <del>$360.00 </del>
                                    </div>
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
    <script src="{{ asset('assets/js/range-slider/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('assets/js/range-slider/rangeslider-script.js') }}"></script>
    <script src="{{ asset('assets/js/touchspin/vendors.min.js') }}"></script>
    <script src="{{ asset('assets/js/touchspin/touchspin.js') }}"></script>
    <script src="{{ asset('assets/js/touchspin/input-groups.min.js') }}"></script>
    <script src="{{ asset('assets/js/owlcarousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2/select2-custom.js') }}"></script>
    <script src="{{ asset('assets/js/product-tab.js') }}"></script>
@endsection
