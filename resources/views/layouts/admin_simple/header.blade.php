<!-- Page Header Start-->
<div class="page-header">
    <div class="header-wrapper row m-0">
        <div class="header-logo-wrapper col-auto p-0">
            <div class="logo-wrapper"><a href="{{ route('admin.dashboard') }}"><img class="img-fluid for-light"
                        src="{{ asset('assets/images/logo/logo-1.png') }}" alt=""><img class="img-fluid for-dark"
                        src="{{ asset('assets/images/logo/logo.png') }}" alt=""></a></div>
            <div class="toggle-sidebar">
                <svg class="sidebar-toggle">
                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-animation') }}"></use>
                </svg>
            </div>
        </div>
        <div class="left-header col-xxl-5 col-xl-6 col-md-4 col-auto box-col-6 horizontal-wrapper p-0">
            <div class="left-menu-header">
                <ul class="header-left">
                    <li>
                        <div class="form-group w-100">
                            <div class="Typeahead Typeahead--twitterUsers">
                                <div class="u-posRelative d-flex">
                                    <svg class="search-bg svg-color me-2">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-search') }}"></use>
                                    </svg>
                                    <input class="demo-input py-0 Typeahead-input form-control-plaintext w-100"
                                        type="text" placeholder="Search anything..." name="q" title="">
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="nav-right col-xxl-7 col-xl-6 col-auto box-col-6 pull-right right-header p-0 ms-auto">
            <ul class="nav-menus">
                <li class="serchinput">
                    <div class="serchbox">
                        <svg>
                            <use href="{{ asset('assets/svg/icon-sprite.svg#fill-search') }}"></use>
                        </svg>
                    </div>
                    <div class="form-group search-form">
                        <input type="text" placeholder="Search here...">
                    </div>
                </li>
                <li class="onhover-dropdown">
                    <div class="notification-box">
                        <svg>
                            <use href="{{ asset('assets/svg/icon-sprite.svg#fill-Bell') }}"></use>
                        </svg><span class="badge rounded-pill badge-primary">3</span>
                    </div>
                    <div class="onhover-show-div notification-dropdown">
                        <h6 class="f-18 mb-0 dropdown-title">Notifications</h6>
                        <div class="d-flex align-items-center"><img
                                src="{{ asset('assets/images/dashboard/user/5.png') }}" alt="">
                            <div class="flex-grow-1 ms-2"><a href="{{ route('admin.user_profile') }}">
                                    <h5>
                                        Ralph Edwards <strong> wants to edit </strong> tetrisly design system</h5>
                                    <span>2hrs Ago</span>
                                </a></div>
                            <div class="flex-shrink-0">
                                <div class="activity-dot-primary"></div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center"><img
                                src="{{ asset('assets/images/dashboard/user/6.png') }}" alt="">
                            <div class="flex-grow-1 ms-2"><a href="{{ route('admin.user_profile') }}">
                                    <h5>
                                        Jenny Wilson <strong> Completed </strong> Create new component</h5>
                                    <span>2.15pm</span>
                                </a></div>
                            <div class="flex-shrink-0">
                                <div class="activity-dot-secondary"></div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center figma-line"><img
                                src="{{ asset('assets/images/dashboard/user/7.png') }}" alt="">
                            <div class="flex-grow-1 ms-2"><a href="{{ route('admin.user_profile') }}">
                                    <h5>Jenny Wilson mentioned you in rewrite button component</h5>
                                    <span>3.10pm</span>
                                </a></div>
                        </div>
                    </div>
                </li>
                <li class="onhover-dropdown">
                    <svg>
                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}"></use>
                    </svg>
                    <div class="onhover-show-div bookmark-flip">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="front">
                                    <h6 class="f-18 mb-0 dropdown-title">Bookmark</h6>
                                    <ul class="bookmark-dropdown">
                                        <li>
                                            <div class="row">
                                                <div class="col-4 text-center">
                                                    <div class="bookmark-content">
                                                        <div class="bookmark-icon"><i data-feather="file-text"></i>
                                                        </div>
                                                        <span>Forms</span>
                                                    </div>
                                                </div>
                                                <div class="col-4 text-center">
                                                    <div class="bookmark-content">
                                                        <div class="bookmark-icon"><i data-feather="user"></i>
                                                        </div><span>Profile</span>
                                                    </div>
                                                </div>
                                                <div class="col-4 text-center">
                                                    <div class="bookmark-content">
                                                        <div class="bookmark-icon"><i data-feather="server"></i>
                                                        </div><span>Tables</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="text-center"><a class="flip-btn f-w-700" id="flip-btn"
                                                href="javascript:void(0)">Add New Bookmark</a></li>
                                    </ul>
                                </div>
                                <div class="back">
                                    <ul>
                                        <li>
                                            <div class="bookmark-dropdown flip-back-content">
                                                <input type="text" placeholder="search...">
                                            </div>
                                        </li>
                                        <li><a class="f-w-700 d-block flip-back" id="flip-back"
                                                href="javascript:void(0)">Back</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="mode">
                        <svg>
                            <use href="{{ asset('assets/svg/icon-sprite.svg#fill-dark') }}"></use>
                        </svg>
                    </div>
                </li>
                <li class="onhover-dropdown">
                    <div class="message">
                        <svg>
                            <use href="{{ asset('assets/svg/icon-sprite.svg#fill-message') }}"></use>
                        </svg><span class="badge rounded-pill badge-secondary">4</span>
                    </div>
                    <div class="onhover-show-div message-dropdown">
                        <h6 class="f-18 mb-0 dropdown-title">Message </h6>
                        <ul>
                            <li>
                                <div class="d-flex align-items-start">
                                    <div class="message-img bg-light-primary"><img
                                            src="{{ asset('assets/images/user/3.jpg') }}" alt=""></div>
                                    <div class="flex-grow-1">
                                        <h5 class="mb-1"><a href="{{ route('admin.chat_private') }}">Helen Walter</a></h5>
                                        <p>Do you want to go see movie?</p>
                                    </div>
                                    <div class="notification-right"><i data-feather="x"></i></div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-start">
                                    <div class="message-img bg-light-primary"><img
                                            src="{{ asset('assets/images/user/6.jpg') }}" alt=""></div>
                                    <div class="flex-grow-1">
                                        <h5 class="mb-1"><a href="{{ route('admin.chat_private') }}">Jason Borne</a></h5>
                                        <p>Thank you for rating us.</p>
                                    </div>
                                    <div class="notification-right"><i data-feather="x"></i></div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-start">
                                    <div class="message-img bg-light-primary"><img
                                            src="{{ asset('assets/images/user/10.jpg') }}" alt=""></div>
                                    <div class="flex-grow-1">
                                        <h5 class="mb-1"><a href="{{ route('admin.chat_private') }}">Sarah Loren</a></h5>
                                        <p>What`s the project report update?</p>
                                    </div>
                                    <div class="notification-right"><i data-feather="x"></i></div>
                                </div>
                            </li>
                            <li><a class="f-w-700" href="{{ route('admin.chat_private') }}">Check all</a></li>
                        </ul>
                    </div>
                </li>
                <li class="cart-nav onhover-dropdown">
                    <div class="cart-box">
                        <svg>
                            <use href="{{ asset('assets/svg/icon-sprite.svg#fill-Buy') }}"></use>
                        </svg>
                    </div>
                    <div class="cart-dropdown onhover-show-div">
                        <h6 class="f-18 mb-0 dropdown-title">Cart</h6>
                        <ul>
                            <li>
                                <div class="d-flex"><img class="img-fluid b-r-5 img-60"
                                        src="{{ asset('assets/images/ecommerce/06.jpg') }}" alt="">
                                    <div class="flex-grow-1"><span>Winter T-shirt</span>
                                        <h6>1 X $ 299.00</h6>
                                    </div>
                                    <div class="close-circle"><a href="#"><i class="fa fa-times"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex"><img class="img-fluid b-r-5 img-60"
                                        src="{{ asset('assets/images/ecommerce/02.jpg') }}" alt="">
                                    <div class="flex-grow-1"><span>Men Shirt</span>
                                        <h6>1 X $ 299.00</h6>
                                    </div>
                                    <div class="close-circle"><a href="#"><i class="fa fa-times"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li class="total">
                                <h5 class="mb-0">Subtotal :<span class="f-right">$299.00</span></h5>
                            </li>
                            <li><a class="view-cart" href="{{ route('admin.cart') }}">View Cart</a><a class="view-checkout f-right"
                                    href="{{ route('admin.checkout') }}">Checkout</a></li>
                        </ul>
                    </div>
                </li>
                <li class="profile-nav onhover-dropdown p-0">
                    <div class="d-flex align-items-center profile-media"><img class="b-r-10 img-40"
                            src="{{ asset('assets/images/dashboard/profile.png') }}" alt="">
                        <div class="flex-grow-1"><span>{{ ucfirst(auth()?->user()?->first_name) }}</span>
                            <p class="mb-0">{{ auth()?->user()->role->name }}</p>
                        </div>
                    </div>
                    <ul class="profile-dropdown onhover-show-div">
                        <li><a href="{{ route('admin.user.edit-profile',auth()->user()->role->name) }}"><i data-feather="user"></i><span>My Profile </span></a>
                        </li>
                        <li><a href="{{ route('admin.letter_box') }}"><i data-feather="mail"></i><span>Inbox</span></a>
                        </li>
                        <li><a href="{{ route('admin.task') }}"><i data-feather="file-text"></i><span>Taskboard</span></a></li>
                        <li><a href="{{ route('admin.edit_profile') }}"><i data-feather="settings"></i><span>Settings</span></a>
                        </li>
                        <li><a href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i data-feather="log-in"> </i><span>Log out</span></a></li>
                        <form action="{{route('logout')}}" method="POST" class="d-none" id="logout-form">
                            @csrf
                        </form>
                    </ul>
                </li>
            </ul>
        </div>
        <script class="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">                        
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName">name</div>
            </div>
            </div>
        </script>
        <script class="empty-template" type="text/x-handlebars-template">
            <div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div>
        </script>
    </div>
</div>
<!-- Page Header Ends-->
