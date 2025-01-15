        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper" data-layout="fill-svg">
            <div>
                <div class="logo-wrapper"><a href="{{ route('user.dashboard') }}"><img class="img-fluid"
                            src="{{ asset('assets/images/logo/logo.png') }}" alt=""></a>
                    <div class="toggle-sidebar">
                        <svg class="sidebar-toggle">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#toggle-icon') }}"></use>
                        </svg>
                    </div>
                </div>
                <div class="logo-icon-wrapper"><a href="{{ route('user.dashboard') }}"><img class="img-fluid"
                            src="{{ asset('assets/images/logo/logo-icon.png') }}" alt=""></a></div>
                <nav class="sidebar-main">
                    <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                    <div id="sidebar-menu">
                        <ul class="sidebar-links" id="simple-bar">
                            <li class="back-btn"><a href="{{ route('user.dashboard') }}"><img class="img-fluid"
                                        src="{{ asset('assets/images/logo/logo-icon.png') }}" alt=""></a>
                                <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                        aria-hidden="true"></i></div>
                            </li>
                            <li class="pin-title sidebar-main-title">
                                <div>
                                    <h6>Pinned</h6>
                                </div>
                            </li>
                            <li class="sidebar-main-title">
                                <div>
                                    <h6 class="lan-1">General</h6>
                                </div>
                            </li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title" href="javascript:void(0)">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-home') }}"></use>
                                    </svg><span class="lan-3">Dashboard </span></a>
                                <ul class="sidebar-submenu">
                                    <li><a class="lan-4" href="{{ route('user.dashboard') }}">Default</a></li>
                                    <li><a class="lan-5" href="{{ route('user.ecommerce_dashboard') }}">Ecommerce</a></li>
                                    <li><a href="{{ route('user.project_dashboard') }}">Project</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                class="sidebar-link sidebar-title" href="javascript:void(0)">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-layout') }}"></use>
                                </svg>
                                <svg class="fill-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#fill-layout') }}"></use>
                                </svg><span class="lan-7-1">Laravel Example</span></a>
                                <ul class="sidebar-submenu">
                                    @can('role.index')
                                        <li><a href="{{ route('user.role.index') }}">Roles Management</a></li>
                                    @endcan
                                    @can('user.index')
                                        <li><a href="{{ route('user.user.index') }}">Users Management</a></li>
                                    @endcan
                                    <li><a href="{{ route('user.blog.index') }}">Blogs Management</a></li>
                                    <li><a href="{{ route('user.category.index') }}">Categories Management</a></li>
                                    <li><a href="{{ route('user.tag.index') }}">Tags Management</a></li>
                                    <li><a href="{{ route('user.page.index') }}">Pages Management</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title" href="javascript:void(0)">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-widget') }}"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-widget') }}"></use>
                                    </svg><span class="lan-6">Widgets</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{ route('user.general_widget') }}">General</a></li>
                                    <li><a href="{{ route('user.chart_widget') }}">Chart</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title" href="javascript:void(0)">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-layout') }}"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-layout') }}"></use>
                                    </svg><span class="lan-7">Page layout</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{ route('user.box_layout') }}">Boxed</a></li>
                                    <li><a href="{{ route('user.rtl_layout') }}">RTL</a></li>
                                    <li><a href="{{ route('user.dark_layout') }}">Dark Layout</a></li>
                                    <li><a href="{{ route('user.hide_on_scroll') }}">Hide Nav Scroll</a></li>
                                </ul>
                            </li>

                            <li class="sidebar-main-title">
                                <div>
                                    <h6 class="lan-8">Applications</h6>
                                </div>
                            </li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"> </i><a
                                    class="sidebar-link sidebar-title" href="javascript:void(0)">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-project') }}"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-project') }}"></use>
                                    </svg><span>Project </span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{ route('user.list_project') }}">Project List</a></li>
                                    <li><a href="{{ route('user.create_project') }}">Create new</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title link-nav" href="{{ route('user.file_manager') }}">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-file') }}"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-file') }}"></use>
                                    </svg><span>File manager</span></a></li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"> </i><a
                                    class="sidebar-link sidebar-title link-nav" href="{{ route('user.kanban') }}">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-board') }}"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-board') }}"></use>
                                    </svg><span>kanban Board</span></a></li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title" href="javascript:void(0)">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-ecommerce') }}"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-ecommerce') }}"></use>
                                    </svg><span>Ecommerce</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{ route('user.add_products') }}">Add Product</a></li>
                                    <li><a href="{{ route('user.product') }}">Product</a></li>
                                    <li><a href="{{ route('user.product_page') }}">Product page</a></li>
                                    <li><a href="{{ route('user.list_products') }}">Product list</a></li>
                                    <li><a href="{{ route('user.payment_details') }}">Payment Details</a></li>
                                    <li><a href="{{ route('user.order_history') }}">Order History</a></li>
                                    <li><a class="submenu-title" href="javascript:void(0)">Invoices
                                            <h5 class="sub-arrow"><i class="fa fa-angle-right"></i></h5>
                                        </a>
                                        <ul class="submenu-content opensubmegamenu">
                                            <li><a href="{{ route('user.invoice_1') }}">Invoice-1</a></li>
                                            <li><a href="{{ route('user.invoice_2') }}">Invoice-2</a></li>
                                            <li><a href="{{ route('user.invoice_3') }}">Invoice-3</a></li>
                                            <li><a href="{{ route('user.invoice_4') }}">Invoice-4</a></li>
                                            <li><a href="{{ route('user.invoice_5') }}">Invoice-5</a></li>
                                            <li><a href="{{ route('user.invoice_6') }}">Invoice-6</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('user.cart') }}">Cart</a></li>
                                    <li><a href="{{ route('user.list_wish') }}">Wishlist</a></li>
                                    <li><a href="{{ route('user.checkout') }}">Checkout</a></li>
                                    <li><a href="{{ route('user.pricing') }}">Pricing</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title link-nav" href="{{ route('user.letter_box') }}">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-email') }}"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-email') }}"></use>
                                    </svg><span>Letter Box</span></a></li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title" href="javascript:void(0)">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-chat') }}"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-chat') }}"></use>
                                    </svg><span>Chat</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{ route('user.chat_private') }}">Private Chat</a></li>
                                    <li><a href="{{ route('user.chat_group') }}">Group Chat</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title" href="javascript:void(0)">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-user') }}"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-user') }}"></use>
                                    </svg><span>Users</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{ route('user.user_profile') }}">Users Profile</a></li>
                                    <li><a href="{{ route('user.edit_profile') }}">Users Edit</a></li>
                                    <li><a href="{{ route('user.user_cards') }}">Users Cards</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title link-nav" href="{{ route('user.bookmark') }}">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-bookmark') }}"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-bookmark') }}"> </use>
                                    </svg><span>Bookmarks</span></a></li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title link-nav" href="{{ route('user.contacts') }}">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-contact') }}"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-contact') }}"> </use>
                                    </svg><span>Contacts</span></a></li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title link-nav" href="{{ route('user.task') }}">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-task') }}"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-task') }}"> </use>
                                    </svg><span>Tasks</span></a></li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title link-nav" href="{{ route('user.calendar_basic') }}">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-calendar') }}"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-calender') }}"></use>
                                    </svg><span>Calendar</span></a></li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title link-nav" href="{{ route('user.social_app') }}">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-social') }}"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-social') }}"> </use>
                                    </svg><span>Social App</span></a></li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title link-nav" href="{{ route('user.to_do') }}">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-to-do') }}"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-to-do') }}"> </use>
                                    </svg><span>To-Do</span></a></li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title link-nav" href="{{ route('user.search') }}">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-search') }}"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-search') }}"> </use>
                                    </svg><span>Search Result</span></a></li>
                            <li class="sidebar-main-title">
                                <div>
                                    <h6>Forms & Table</h6>
                                </div>
                            </li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title" href="javascript:void(0)">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-form') }}"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-form') }}"> </use>
                                    </svg><span>Forms</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a class="submenu-title" href="javascript:void(0)">Form Controls
                                            <h5 class="sub-arrow"><i class="fa fa-angle-right"></i></h5>
                                        </a>
                                        <ul class="submenu-content opensubmegamenu">
                                            <li><a href="{{ route('user.form_validation') }}">Form Validation</a></li>
                                            <li><a href="{{ route('user.base_input') }}">Base Inputs</a></li>
                                            <li><a href="{{ route('user.radio_checkbox_control') }}">Checkbox & Radio</a></li>
                                            <li><a href="{{ route('user.input_group') }}">Input Groups</a></li>
                                            <li><a href="{{ route('user.input_mask') }}">Input Mask</a></li>
                                            <li><a href="{{ route('user.megaoptions') }}">Mega Options</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="submenu-title" href="javascript:void(0)">Form Widgets
                                            <h5 class="sub-arrow"><i class="fa fa-angle-right"></i></h5>
                                        </a>
                                        <ul class="submenu-content opensubmegamenu">
                                            <li><a href="{{ route('user.datepicker') }}">Datepicker</a></li>
                                            <li><a href="{{ route('user.touchspin') }}">Touchspin</a></li>
                                            <li><a href="{{ route('user.select2') }}">Select2</a></li>
                                            <li><a href="{{ route('user.switch') }}">Switch</a></li>
                                            <li><a href="{{ route('user.typeahead') }}">Typeahead</a></li>
                                            <li><a href="{{ route('user.clipboard') }}">Clipboard</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="submenu-title" href="javascript:void(0)">Form layout
                                            <h5 class="sub-arrow"><i class="fa fa-angle-right"></i></h5>
                                        </a>
                                        <ul class="submenu-content opensubmegamenu">
                                            <li><a href="{{ route('user.form_wizard') }}">Form Wizard 1</a></li>
                                            <li><a href="{{ route('user.form_wizard_two') }}">Form Wizard 2</a></li>
                                            <li><a href="{{ route('user.two_factor') }}">Two Factor</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title" href="javascript:void(0)">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-table') }}"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-table') }}"></use>
                                    </svg><span>Tables</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a class="submenu-title" href="javascript:void(0)">Bootstrap Tables
                                            <h5 class="sub-arrow"><i class="fa fa-angle-right"></i></h5>
                                        </a>
                                        <ul class="submenu-content opensubmegamenu">
                                            <li><a href="{{ route('user.bootstrap_basic_table') }}">Basic Tables</a></li>
                                            <li><a href="{{ route('user.table_components') }}">Table components</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="submenu-title" href="javascript:void(0)">Data Tables
                                            <h5 class="sub-arrow"><i class="fa fa-angle-right"></i></h5>
                                        </a>
                                        <ul class="submenu-content opensubmegamenu">
                                            <li><a href="{{ route('user.datatable_basic_init') }}">Basic Init</a></li>
                                            <li> <a href="{{ route('user.datatable_advance_init') }}">Advance Init </a></li>
                                            <li><a href="{{ route('user.datatable_api') }}">API</a></li>
                                            <li><a href="{{ route('user.datatable_data_source') }}">Data Sources</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('user.datatable_ext_autofill') }}">Ex. Data Tables</a></li>
                                    <li><a href="{{ route('user.jsgrid_table') }}">Js Grid Table </a></li>
                                </ul>
                            </li>
                            <li class="sidebar-main-title">
                                <div>
                                    <h6>Components</h6>
                                </div>
                            </li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title" href="javascript:void(0)">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-ui-kits') }}"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-ui-kits') }}"></use>
                                    </svg><span>Ui Kits</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{ route('user.typography') }}">Typography</a></li>
                                    <li><a href="{{ route('user.avatars') }}">Avatars</a></li>
                                    <li><a href="{{ route('user.helper_classes') }}">helper classes</a></li>
                                    <li><a href="{{ route('user.grid') }}">Grid</a></li>
                                    <li><a href="{{ route('user.tag_pills') }}">Tag & pills</a></li>
                                    <li><a href="{{ route('user.progress_bar') }}">Progress</a></li>
                                    <li><a href="{{ route('user.modal') }}">Modal</a></li>
                                    <li><a href="{{ route('user.alert') }}">Alert</a></li>
                                    <li><a href="{{ route('user.popover') }}">Popover</a></li>
                                    <li><a href="{{ route('user.tooltip') }}">Tooltip</a></li>
                                    <li><a href="{{ route('user.dropdown') }}">Dropdown</a></li>
                                    <li><a href="{{ route('user.according') }}">Accordion</a></li>
                                    <li><a href="{{ route('user.tabs') }}">Tabs</a></li>
                                    <li><a href="{{ route('user.list') }}">Lists</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title" href="javascript:void(0)">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-bonus-kit') }}"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-bonus-kit') }}"></use>
                                    </svg><span>Bonus Ui</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{ route('user.scrollable') }}">Scrollable</a></li>
                                    <li><a href="{{ route('user.tree') }}">Tree view</a></li>
                                    <li><a href="{{ route('user.toasts') }}">Toasts</a></li>
                                    <li><a href="{{ route('user.rating') }}">Rating</a></li>
                                    <li><a href="{{ route('user.dropzone') }}">dropzone</a></li>
                                    <li><a href="{{ route('user.tour') }}">Tour</a></li>
                                    <li><a href="{{ route('user.sweet_alert2') }}">SweetAlert2</a></li>
                                    <li><a href="{{ route('user.modal_animated') }}">Animated Modal</a></li>
                                    <li><a href="{{ route('user.owl_carousel') }}">Owl Carousel</a></li>
                                    <li><a href="{{ route('user.ribbons') }}">Ribbons</a></li>
                                    <li><a href="{{ route('user.pagination') }}">Pagination</a></li>
                                    <li><a href="{{ route('user.breadcrumb') }}">Breadcrumb</a></li>
                                    <li><a href="{{ route('user.range_slider') }}">Range Slider</a></li>
                                    <li><a href="{{ route('user.image_cropper') }}">Image cropper</a></li>
                                    <li><a href="{{ route('user.basic_card') }}">Basic Card</a></li>
                                    <li><a href="{{ route('user.creative_card') }}">Creative Card</a></li>
                                    <li><a href="{{ route('user.dragable_card') }}">Draggable Card</a></li>
                                    <li><a href="{{ route('user.timeline') }}">Timeline </a></li>
                                </ul>
                            </li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title" href="javascript:void(0)">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-animation') }}"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-animation') }}"></use>
                                    </svg><span>Animation</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{ route('user.animate') }}">Animate</a></li>
                                    <li><a href="{{ route('user.scroll_reveal') }}">Scroll Reveal</a></li>
                                    <li><a href="{{ route('user.aos') }}">AOS animation</a></li>
                                    <li><a href="{{ route('user.tilt') }}">Tilt Animation</a></li>
                                    <li><a href="{{ route('user.wow') }}">Wow Animation</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title" href="javascript:void(0)">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-icons') }}"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-icons') }}"></use>
                                    </svg><span>Icons</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{ route('user.flag_icon') }}">Flag icon</a></li>
                                    <li><a href="{{ route('user.font_awesome') }}">Fontawesome Icon</a></li>
                                    <li><a href="{{ route('user.ico_icon') }}">Ico Icon</a></li>
                                    <li><a href="{{ route('user.themify_icon') }}">Themify Icon</a></li>
                                    <li><a href="{{ route('user.feather_icon') }}">Feather icon</a></li>
                                    <li><a href="{{ route('user.whether_icon') }}">Whether Icon</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title" href="javascript:void(0)">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-button') }}"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-button') }}"></use>
                                    </svg><span>Buttons</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{ route('user.buttons') }}">Default Style</a></li>
                                    <li><a href="{{ route('user.button_group') }}">Button Group</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title" href="javascript:void(0)">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-charts') }}"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-charts') }}"></use>
                                    </svg><span>Charts</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{ route('user.chart_apex') }}">Apex Chart</a></li>
                                    <li><a href="{{ route('user.chart_google') }}">Google Chart</a></li>
                                    <li><a href="{{ route('user.chart_sparkline') }}">Sparkline chart</a></li>
                                    <li><a href="{{ route('user.chart_flot') }}">Flot Chart</a></li>
                                    <li><a href="{{ route('user.chart_knob') }}">Knob Chart</a></li>
                                    <li><a href="{{ route('user.chart_morris') }}">Morris Chart</a></li>
                                    <li><a href="{{ route('user.chartjs') }}">Chatjs Chart</a></li>
                                    <li><a href="{{ route('user.chartist') }}">Chartist Chart</a></li>
                                    <li><a href="{{ route('user.chart_peity') }}">Peity Chart</a></li>
                                    <li><a href="{{ route('user.echarts') }}">Echarts</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-main-title">
                                <div>
                                    <h6>Pages</h6>
                                </div>
                            </li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title link-nav" href="{{ route('user.sample_page') }}">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-sample-page') }}">
                                        </use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-sample-page') }}"></use>
                                    </svg><span>Sample page</span></a></li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title link-nav" href="{{ route('user.translate') }}">
                                    <svg class="stroke-icon">
                                        <use
                                            href="{{ asset('assets/svg/icon-sprite.svg#stroke-internationalization') }}">
                                        </use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use
                                            href="{{ asset('assets/svg/icon-sprite.svg#fill-internationalization') }}">
                                        </use>
                                    </svg><span>Translate</span></a></li>
                            <li class="mega-menu sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title" href="javascript:void(0)">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-others') }}"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-others') }}"></use>
                                    </svg><span>Others</span></a>
                                <div class="mega-menu-container menu-content">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col mega-box">
                                                <div class="link-section">
                                                    <div class="submenu-title">
                                                        <h5>Error Page</h5>
                                                    </div>
                                                    <ul class="submenu-content opensubmegamenu">
                                                        <li><a href="{{ route('user.error_400') }}">Error 400</a></li>
                                                        <li><a href="{{ route('user.error_401') }}">Error 401</a></li>
                                                        <li><a href="{{ route('user.error_403') }}">Error 403</a></li>
                                                        <li><a href="{{ route('user.error_404') }}">Error 404</a></li>
                                                        <li><a href="{{ route('user.error_500') }}">Error 500</a></li>
                                                        <li><a href="{{ route('user.error_503') }}">Error 503</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col mega-box">
                                                <div class="link-section">
                                                    <div class="submenu-title">
                                                        <h5> Authentication</h5>
                                                    </div>
                                                    <ul class="submenu-content opensubmegamenu">
                                                        <li><a href="{{ route('login') }}" target="_blank">Login Simple</a></li>
                                                        <li><a href="{{ route('user.login_one') }}" target="_blank">Login bg
                                                                image</a></li>
                                                        <li><a href="{{ route('user.login_two') }}" target="_blank">Login image two
                                                            </a></li>
                                                        <li><a href="{{ route('user.login_bs_validation') }}" target="_blank">Login
                                                                validation</a></li>
                                                        <li><a href="{{ route('user.login_bs_tt_validation') }}"
                                                                target="_blank">Login tooltip</a></li>
                                                        <li><a href="{{ route('user.login_sa_validation') }}" target="_blank">Login
                                                                sweetalert</a></li>
                                                        <li><a href="{{ route('user.sign_up') }}" target="_blank">Register Simple</a>
                                                        </li>
                                                        <li><a href="{{ route('user.sign_up_one') }}" target="_blank">Register Image
                                                            </a></li>
                                                        <li><a href="{{ route('user.sign_up_two') }}" target="_blank">Register
                                                                two</a></li>
                                                        <li><a href="{{ route('user.sign_up_wizard') }}" target="_blank">Register
                                                                wizard</a></li>
                                                        <li><a href="{{ route('user.unlock') }}">Unlock User</a></li>
                                                        <li><a href="{{ route('user.forget_password') }}">Forget Password</a></li>
                                                        <li><a href="{{ route('user.reset_password') }}">Reset Password</a></li>
                                                        <li><a href="{{ route('user.maintenance') }}">Maintenance</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col mega-box">
                                                <div class="link-section">
                                                    <div class="submenu-title">
                                                        <h5>Coming Soon</h5>
                                                    </div>
                                                    <ul class="submenu-content opensubmegamenu">
                                                        <li><a href="{{ route('user.comingsoon') }}">Coming Simple</a></li>
                                                        <li><a href="{{ route('user.comingsoon_bg_video') }}">Coming with Bg video</a>
                                                        </li>
                                                        <li><a href="{{ route('user.comingsoon_bg_img') }}">Coming with Bg Image</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col mega-box">
                                                <div class="link-section">
                                                    <div class="submenu-title">
                                                        <h5>Email templates</h5>
                                                    </div>
                                                    <ul class="submenu-content opensubmegamenu">
                                                        <li><a href="{{ route('user.basic_template') }}">Basic Email</a></li>
                                                        <li><a href="{{ route('user.email_header') }}">Basic Header</a></li>
                                                        <li><a href="{{ route('user.template_email') }}">Ecomerce Template</a></li>
                                                        <li><a href="{{ route('user.template_email_2') }}">Email Template 2</a></li>
                                                        <li><a href="{{ route('user.ecommerce_templates') }}">Ecommerce Email</a></li>
                                                        <li><a href="{{ route('user.email_order_success') }}">Order Success</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="sidebar-main-title">
                                <div>
                                    <h6>Miscellaneous</h6>
                                </div>
                            </li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title" href="javascript:void(0)">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-gallery') }}"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-gallery') }}"></use>
                                    </svg><span>Gallery</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{ route('user.gallery') }}">Gallery Grid</a></li>
                                    <li><a href="{{ route('user.gallery_with_description') }}">Gallery Grid Desc</a></li>
                                    <li><a href="{{ route('user.gallery_masonry') }}">Masonry Gallery</a></li>
                                    <li><a href="{{ route('user.masonry_gallery_with_disc') }}">Masonry with Desc</a></li>
                                    <li><a href="{{ route('user.gallery_hover') }}">Hover Effects</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title" href="javascript:void(0)">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-blog') }}"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-blog') }}"></use>
                                    </svg><span>Blog</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{ route('user.blog_details') }}">Blog Details</a></li>
                                    <li><a href="{{ route('user.blog_single') }}">Blog Single</a></li>
                                    <li><a href="{{ route('user.add_post') }}">Add Post</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title link-nav" href="{{ route('user.faq') }}">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-faq') }}"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-faq') }}"></use>
                                    </svg><span>FAQ</span></a></li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title" href="javascript:void(0)">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-job-search') }}"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-job-search') }}"></use>
                                    </svg><span>Job Search</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{ route('user.job_cards_view') }}">Cards view</a></li>
                                    <li><a href="{{ route('user.job_list_view') }}">List View</a></li>
                                    <li><a href="{{ route('user.job_details') }}">Job Details</a></li>
                                    <li><a href="{{ route('user.job_apply') }}">Apply</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title" href="javascript:void(0)">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-learning') }}"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-learning') }}"></use>
                                    </svg><span>Learning</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{ route('user.learning_list_view') }}">Learning List</a></li>
                                    <li><a href="{{ route('user.learning_detailed') }}">Detailed Course</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title" href="javascript:void(0)">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-maps') }}"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-maps') }}"></use>
                                    </svg><span>Maps</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{ route('user.map_js') }}">Maps JS</a></li>
                                    <li><a href="{{ route('user.vector_map') }}">Vector Maps</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title" href="javascript:void(0)">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-editors') }}"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-editors') }}"></use>
                                    </svg><span>Editors</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{ route('user.summernote') }}">Summer Note</a></li>
                                    <li><a href="{{ route('user.ckeditor') }}">CK editor</a></li>
                                    <li><a href="{{ route('user.mdeeditor') }}">MDE editor</a></li>
                                    <li><a href="{{ route('user.ace_code_editor') }}">ACE code editor </a></li>
                                </ul>
                            </li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title link-nav" href="{{ route('user.knowledgebase') }}">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-knowledgebase') }}">
                                        </use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-knowledgebase') }}">
                                        </use>
                                    </svg><span>Knowledgebase</span></a></li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title link-nav" href="{{ route('user.support_ticket') }}">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-support-tickets') }}">
                                        </use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-support-tickets') }}">
                                        </use>
                                    </svg><span>Support Ticket</span></a></li>
                        </ul>
                    </div>
                    <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                </nav>
            </div>
        </div>
        <!-- Page Sidebar Ends-->
