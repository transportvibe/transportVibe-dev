@extends('layouts.simple.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/todo.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 ps-0">
                    <h3>To-Do</h3>
                </div>
                <div class="col-sm-6 pe-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Apps</li>
                        <li class="breadcrumb-item active">To-Do</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid email-wrap bookmark-wrap todo-wrap">
        <div class="row">
            <div class="col-xxl-3 col-xl-4 box-col-4e">
                <div class="email-sidebar md-sidebar"><a class="btn btn-primary email-aside-toggle md-sidebar-toggle">To Do
                        filter</a>
                    <div class="email-left-aside md-sidebar-aside">
                        <div class="card">
                            <div class="card-body">
                                <div class="email-app-sidebar left-bookmark custom-scrollbar">
                                    <div class="d-flex align-items-center">
                                        <div class="media-size-email"><img class="me-3 rounded-circle"
                                                src="{{ asset('assets/images/user/user.png') }}" alt=""></div>
                                        <div class="flex-grow-1">
                                            <h3>Mark Jecno</h3>
                                            <p>Markjecno@gmail.com</p>
                                        </div>
                                    </div>
                                    <ul class="nav main-menu">
                                        <li class="nav-item">
                                            <button class="btn-primary badge-light d-block btn-mail w-100 txt-light"><i
                                                    class="me-2" data-feather="check-circle"> </i>To Do List</button>
                                        </li>
                                        <li class="nav-item"> <a href="javascript:void(0)"><span
                                                    class="iconbg badge-light-primary"><i
                                                        data-feather="file-plus"></i></span><span class="title ms-2">All
                                                    Task</span></a></li>
                                        <li class="nav-item"><a href="javascript:void(0)"><span
                                                    class="iconbg badge-light-success"><i
                                                        data-feather="check-circle"></i></span><span
                                                    class="title ms-2">Completed</span><span
                                                    class="badge rounded-pill badge-success">3</span></a></li>
                                        <li class="nav-item"><a href="javascript:void(0)"><span
                                                    class="iconbg badge-light-danger"><i
                                                        data-feather="cast"></i></span><span
                                                    class="title ms-2">Pending</span><span
                                                    class="badge rounded-pill badge-danger">2</span></a></li>
                                        <li class="nav-item"><a href="javascript:void(0)"><span
                                                    class="iconbg badge-light-info"><i
                                                        data-feather="activity"></i></span><span class="title ms-2">In
                                                    Process</span><span
                                                    class="badge rounded-pill badge-primary">2</span></a></li>
                                        <li class="nav-item"><a href="javascript:void(0)"><span
                                                    class="iconbg badge-light-danger"><i
                                                        data-feather="trash"></i></span><span
                                                    class="title ms-2">Trash</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-9 col-xl-8 box-col-8">
                <div class="card">
                    <div class="card-header b-bottom">
                        <div class="todo-list-header">
                            <div class="new-task-wrapper input-group">
                                <input class="form-control m-0" id="new-task" placeholder="Enter new task here. . ."><span
                                    class="btn btn-primary add-new-task-btn" id="add-task">Add Task</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="todo">
                            <div class="todo-list-wrapper custom-scrollbar">
                                <div class="todo-list-container">
                                    <div class="todo-list-body">
                                        <ul id="todo-list">
                                            <li class="task">
                                                <div class="task-container">
                                                    <h4 class="task-label">Check validation involves making sure all your
                                                        tags are properly closed and nested.</h4>
                                                    <div class="d-flex align-items-center gap-3"><span
                                                            class="badge badge-light-primary done-badge">In Progress</span>
                                                        <h5 class="assign-name m-0">10 Nov</h5><span
                                                            class="task-action-btn"><span
                                                                class="action-box large delete-btn" title="Delete Task"><i
                                                                    class="icon"><i
                                                                        class="icon-trash"></i></i></span></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="task">
                                                <div class="task-container">
                                                    <h4 class="task-label">Test the outgoing links from all the pages to the
                                                        specific domain under test.</h4>
                                                    <div class="d-flex align-items-center gap-3"><span
                                                            class="badge badge-light-danger">Pending</span>
                                                        <h5 class="assign-name m-0">04 Aug</h5><span
                                                            class="task-action-btn"><span
                                                                class="action-box large delete-btn" title="Delete Task"><i
                                                                    class="icon"><i
                                                                        class="icon-trash"></i></i></span></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="completed task">
                                                <div class="task-container">
                                                    <h4 class="task-label">Test links are used to send emails to admin or
                                                        other users from web pages.</h4>
                                                    <div class="d-flex align-items-center gap-3"><span
                                                            class="badge badge-light-success">Done</span>
                                                        <h5 class="assign-name m-0">25 Feb</h5><span
                                                            class="task-action-btn"><span
                                                                class="action-box large delete-btn" title="Delete Task"><i
                                                                    class="icon"><i
                                                                        class="icon-trash"></i></i></span></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="task">
                                                <div class="task-container">
                                                    <h4 class="task-label">Options to create forms, if any, form deletes a
                                                        view or modify the forms.</h4>
                                                    <div class="d-flex align-items-center gap-3"><span
                                                            class="badge badge-light-primary">In Progress</span>
                                                        <h5 class="assign-name m-0">15 Dec</h5><span
                                                            class="task-action-btn"><span
                                                                class="action-box large delete-btn" title="Delete Task"><i
                                                                    class="icon"><i
                                                                        class="icon-trash"></i></i></span></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="task">
                                                <div class="task-container">
                                                    <h4 class="task-label">Wrong inputs in the forms to the fields in the
                                                        forms.</h4>
                                                    <div class="d-flex align-items-center gap-3"><span
                                                            class="badge badge-light-danger">Pending</span>
                                                        <h5 class="assign-name m-0">11 Nov</h5><span
                                                            class="task-action-btn"><span
                                                                class="action-box large delete-btn" title="Delete Task"><i
                                                                    class="icon"><i
                                                                        class="icon-trash"></i></i></span></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="task completed">
                                                <div class="task-container">
                                                    <h4 class="task-label">Check if the instructions provided are perfect
                                                        to satisfy its purpose.</h4>
                                                    <div class="d-flex align-items-center gap-3"><span
                                                            class="badge badge-light-danger">Pending</span>
                                                        <h5 class="assign-name m-0">04 Sept</h5><span
                                                            class="task-action-btn"><span
                                                                class="action-box large delete-btn" title="Delete Task"><i
                                                                    class="icon"><i
                                                                        class="icon-trash"></i></i></span></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="task">
                                                <div class="task-container">
                                                    <h4 class="task-label">Application server and Database server
                                                        interface.</h4>
                                                    <div class="d-flex align-items-center gap-3"><span
                                                            class="badge badge-light-success">Done</span>
                                                        <h5 class="assign-name m-0">08 July</h5><span
                                                            class="task-action-btn"><span
                                                                class="action-box large delete-btn" title="Delete Task"><i
                                                                    class="icon"><i
                                                                        class="icon-trash"></i></i></span></span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="notification-popup hide">
                                <p><span class="task"></span><span class="notification-text"></span></p>
                            </div>
                        </div>
                        <!-- HTML Template for tasks-->
                        <script id="task-template" type="tect/template">
                      <li class="task">
                        <div class="task-container">
                          <h4 class="task-label"></h4>
                          <div class="d-flex align-items-center gap-3">
                            <span class="badge badge-light-danger">Pending</span>
                            <h5 class="assign-name m-0">16 Jan</h5>
                            <span class="task-action-btn">
                              <span class="action-box large delete-btn" title="Delete Task">
                                <i class="icon"><i class="icon-trash"></i></i>
                              </span>
                            </span>
                          </div>
                        </div>
                      </li>
                    </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/todo/todo.js') }}"></script>
@endsection
