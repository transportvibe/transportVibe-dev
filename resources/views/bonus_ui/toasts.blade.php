@extends('layouts.simple.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 ps-0">
                    <h3>Toasts</h3>
                </div>
                <div class="col-sm-6 pe-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Bonus Ui</li>
                        <li class="breadcrumb-item active">Toasts</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Live Toast</h4>
                        <p class="f-m-light mt-1">
                            Use the <code>.hide </code>class through hide toast and <code>.show </code>class through visible
                            toast and given directions.<code>[top-0/bottom-0/start-0/end-0]</code></p>
                    </div>
                    <div class="card-body position-relative common-flex">
                        <button class="btn btn-primary" id="liveToastBtn" type="button">Top-right toast</button>
                        <div class="toast-container position-fixed top-0 end-0 p-3 toast-index toast-rtl">
                            <div class="toast hide toast fade" id="liveToast" role="alert" aria-live="assertive"
                                aria-atomic="true">
                                <div class="toast-header toast-img"><img class="rounded me-2"
                                        src="{{ asset('assets/images/dashboard-8/profile.png') }}" alt="profile"><strong
                                        class="me-auto">Crocs Theme</strong><small>5 min ago</small>
                                    <button class="btn-close" type="button" data-bs-dismiss="toast"
                                        aria-label="Close"></button>
                                </div>
                                <div class="toast-body toast-dark">Hello, I'm a web-designer.</div>
                            </div>
                        </div>
                        <button class="btn btn-secondary" id="liveToastBtn1" type="button">Bottom-right toast</button>
                        <div class="toast-container position-fixed bottom-0 end-0 p-3 toast-index toast-rtl">
                            <div class="toast hide toast fade" id="liveToast1" role="alert" aria-live="assertive"
                                aria-atomic="true">
                                <div class="d-flex justify-content-between alert-secondary">
                                    <div class="toast-body">Your time over after 5 minute.</div>
                                    <button class="btn-close btn-close-white me-2 m-auto" type="button"
                                        data-bs-dismiss="toast" aria-label="Close"></button>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-warning" id="liveToastBtn2" type="button">Top-left toast</button>
                        <div class="toast-container position-fixed start-0 top-0 p-3 toast-index toast-rtl">
                            <div class="toast hide toast fade" id="liveToast2" role="alert" aria-live="assertive"
                                aria-atomic="true">
                                <div class="toast-header toast-img"><img class="rounded me-2"
                                        src="{{ asset('assets/images/dashboard-8/profile.png') }}" alt="profile"><strong
                                        class="me-auto">Crocs Theme</strong><small class="d-sm-block d-none">10 min
                                        ago</small>
                                    <button class="btn-close" type="button" data-bs-dismiss="toast"
                                        aria-label="Close"></button>
                                </div>
                                <div class="toast-body toast-dark"><strong class="txt-success">Well done!</strong> You
                                    successfully read this important message.</div>
                            </div>
                        </div>
                        <button class="btn btn-success" id="liveToastBtn3" type="button">Bottom-left toast</button>
                        <div class="toast-container position-fixed start-0 bottom-0 p-3 toast-index toast-rtl">
                            <div class="toast hide toast fade" id="liveToast3" role="alert" aria-live="assertive"
                                aria-atomic="true">
                                <div class="toast-header toast-img"><img class="rounded me-2"
                                        src="{{ asset('assets/images/dashboard-8/profile.png') }}" alt="profile"><strong
                                        class="me-auto">Crocs Theme</strong>
                                    <button class="btn-close" type="button" data-bs-dismiss="toast"
                                        aria-label="Close"></button>
                                </div>
                                <div class="toast-body toast-dark">
                                    <h6 class="mb-2">Your account will be permanently deleted?</h6>
                                    <p class="mb-0">Do you intend to continue?</p>
                                    <div class="mt-2 pt-2 border-top d-flex gap-2">
                                        <button class="btn btn-dark btn-sm" type="button">I'm not sure</button>
                                        <button class="btn btn-danger btn-sm" type="button"
                                            data-bs-dismiss="toast">Remove My Account</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Colors Schemes</h4>
                        <p class="f-m-light mt-1">
                            Use the <code>.hide </code>class through hide toast and <code>.show </code>class through visible
                            toast.</p>
                    </div>
                    <div class="card-body toast-rtl">
                        <div class="toast default-show-toast align-items-center text-light bg-warning border-0 fade show"
                            role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="d-flex justify-content-between">
                                <div class="toast-body">Your time over after 5 minute.</div>
                                <button class="btn-close btn-close-white me-2 m-auto" type="button"
                                    data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Stacking Toasts</h4>
                        <p class="f-m-light mt-1">
                            You can stack toasts by wrapping them in a toast container, which will vertically add some
                            spacing.<code>[toast-*]</code>through change icons colors.</p>
                    </div>
                    <div class="card-body toast-rtl">
                        <div class="toast-container position-static">
                            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header"><i class="toast-icons toast-primary"
                                        data-feather="bell"></i><strong class="me-auto">Crocs theme</strong><small
                                        class="txt-danger">just now</small>
                                    <button class="btn-close" type="button" data-bs-dismiss="toast"
                                        aria-label="Close"></button>
                                </div>
                                <div class="toast-body toast-dark">Hello, I'm a web-designer.</div>
                            </div>
                            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header"><i class="toast-icons toast-warning"
                                        data-feather="bell"></i><strong class="me-auto">Roxo theme</strong><small
                                        class="text-muted">2 sec ago</small>
                                    <button class="btn-close" type="button" data-bs-dismiss="toast"
                                        aria-label="Close"></button>
                                </div>
                                <div class="toast-body toast-dark">Hello, I'm a UX-designer.</div>
                            </div>
                            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header"><i class="toast-icons toast-danger"
                                        data-feather="bell"></i><strong class="me-auto">Zeta theme</strong><small
                                        class="text-muted">6 min ago</small>
                                    <button class="btn-close" type="button" data-bs-dismiss="toast"
                                        aria-label="Close"></button>
                                </div>
                                <div class="toast-body toast-dark">Hello, I'm a Software developer.</div>
                            </div>
                            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header"><i class="toast-icons toast-success"
                                        data-feather="bell"></i><strong class="me-auto">Voxo theme</strong><small
                                        class="text-muted">3 sec ago</small>
                                    <button class="btn-close" type="button" data-bs-dismiss="toast"
                                        aria-label="Close"></button>
                                </div>
                                <div class="toast-body toast-dark">Hello, I'm a professional web-designer.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card overflow-hidden">
                    <div class="card-header">
                        <h4>Translucent Toasts</h4>
                        <p class="f-m-light mt-1">
                            Use the <code>.hide </code>class through hide toast and <code>.show </code>class through visible
                            toast and given directions.<code>[toast-*]</code>through change icons colors.</p>
                    </div>
                    <div class="card-body toast-rtl bg-dark">
                        <div class="toast-container">
                            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header"><i class="toast-icons toast-info"
                                        data-feather="disc"></i><strong class="me-auto">Crocs theme</strong><small
                                        class="text-muted d-sm-block d-none">11 mins ago</small>
                                    <button class="btn-close" type="button" data-bs-dismiss="toast"
                                        aria-label="Close"></button>
                                </div>
                                <div class="toast-body toast-dark"> Hello, I'm a web-designer.</div>
                            </div>
                            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header"><i class="toast-icons toast-dark"
                                        data-feather="disc"></i><strong class="me-auto">Koho theme</strong><small
                                        class="text-muted d-sm-block d-none">1 sec ago</small>
                                    <button class="btn-close" type="button" data-bs-dismiss="toast"
                                        aria-label="Close"></button>
                                </div>
                                <div class="toast-body toast-dark"> Hello, I'm a full-stack developer.</div>
                            </div>
                            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header"><i class="toast-icons toast-secondary"
                                        data-feather="disc"></i><strong class="me-auto">Fastkart theme</strong><small
                                        class="txt-danger d-sm-block d-none">just now</small>
                                    <button class="btn-close" type="button" data-bs-dismiss="toast"
                                        aria-label="Close"></button>
                                </div>
                                <div class="toast-body toast-dark"> Hello, I'm a UX-designer.</div>
                            </div>
                            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header"><i class="toast-icons toast-success"
                                        data-feather="disc"></i><strong class="me-auto">Oslo theme</strong><small
                                        class="text-muted d-sm-block d-none">44 min ago</small>
                                    <button class="btn-close" type="button" data-bs-dismiss="toast"
                                        aria-label="Close"></button>
                                </div>
                                <div class="toast-body toast-dark"> Hello, I'm a penetration-tester.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h4>Default Toast</h4>
                        <p class="f-m-light mt-1">
                            Use the <code>.hide </code>class through hide toast and <code>.show </code>class through visible
                            toast.</p>
                    </div>
                    <div class="card-body toast-rtl">
                        <div class="toast default-show-toast toast show" role="alert" aria-live="assertive"
                            aria-atomic="true">
                            <div class="toast-header toast-img"><img class="rounded me-2"
                                    src="{{ asset('assets/images/dashboard-8/profile.png') }}" alt="profile"><strong
                                    class="me-auto">Crocs Theme</strong><small class="d-sm-block d-none">10 min
                                    ago</small>
                                <button class="btn-close" type="button" data-bs-dismiss="toast"
                                    aria-label="Close"></button>
                            </div>
                            <div class="toast-body toast-dark"><strong class="txt-success">Well done!</strong> You
                                successfully read this important message.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h4>Unique Toast</h4>
                        <p class="f-m-light mt-1">
                            Use the <code>.hide </code>class through hide toast and <code>.show </code>class through visible
                            toast.</p>
                    </div>
                    <div class="card-body toast-rtl">
                        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header toast-img"><img class="rounded me-2"
                                    src="{{ asset('assets/images/dashboard-8/profile.png') }}" alt="profile"><strong
                                    class="me-auto">Crocs Theme</strong>
                                <button class="btn-close" type="button" data-bs-dismiss="toast"
                                    aria-label="Close"></button>
                            </div>
                            <div class="toast-body toast-dark">
                                <h6 class="mb-2">Your account will be permanently deleted?</h6>
                                <p class="mb-0">Do you intend to continue?</p>
                                <div class="mt-2 pt-2 border-top d-flex gap-2">
                                    <button class="btn btn-dark btn-sm" type="button">I'm not sure</button>
                                    <button class="btn btn-danger btn-sm" type="button" data-bs-dismiss="toast">Remove
                                        My Account</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Toast Placement</h4>
                        <p class="f-m-light mt-1">
                            Use the <code>.hide </code>class through hide toast and <code>.show </code>class through visible
                            toast.<code>.form-select</code> through select any positions.</p>
                    </div>
                    <div class="card-body toast-rtl toast-dark">
                        <form>
                            <div class="mb-3">
                                <select class="form-select mt-2" id="selectToastPlacement">
                                    <option value="" selected="">Select a position...</option>
                                    <option value="top-0 start-0">Top left</option>
                                    <option value="top-0 start-50 translate-middle-x">Top center</option>
                                    <option value="top-0 end-0">Top right</option>
                                    <option value="top-50 start-0 translate-middle-y">Middle left</option>
                                    <option value="top-50 start-50 translate-middle">Middle center</option>
                                    <option value="top-50 end-0 translate-middle-y">Middle right</option>
                                    <option value="bottom-0 start-0">Bottom left</option>
                                    <option value="bottom-0 start-50 translate-middle-x">Bottom center</option>
                                    <option value="bottom-0 end-0">Bottom right</option>
                                </select>
                            </div>
                        </form>
                        <div class="bg-light position-relative bd-example-toasts" aria-live="polite" aria-atomic="true">
                            <div class="toast-container p-3 position-absolute" id="toastPlacement">
                                <div class="toast toast-fade show">
                                    <div class="toast-header toast-img"><img class="rounded me-2"
                                            src="{{ asset('assets/images/dashboard-8/profile.png') }}"
                                            alt="profile"><strong class="me-auto">Crocs Theme</strong><small
                                            class="d-sm-block d-none">25 min
                                            ago</small></div>
                                    <div class="toast-body toast-dark txt-dark">
                                        <p class="toast-content"><em class="txt-danger">Attackers</em> on malicious
                                            activity may trick you into doing something dangrous like installing software or
                                            revealing your personal informations.</p>
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
    <script src="{{ asset('assets/js/notify/custom-notify.js') }}"></script>
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection
