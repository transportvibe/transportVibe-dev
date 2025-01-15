<!DOCTYPE html>
<html lang="en" @if (Route::currentRouteName()=='admin.rtl_layout') dir="rtl" @endif>

<head>
    @include('layouts.user_simple.head')
    @include('layouts.user_simple.css')
</head>

@switch(Route::currentRouteName())
    @case('admin.dashboard')
    <body onload="startTime()"> 
    @break

    @case('admin.box_layout')
    <body class="box-layout"> 
    @break

    @case('admin.rtl_layout')
    <body class="rtl"> 
    @break 

    @case('admin.dark_layout')
    <body class="dark-only"> 
    @break

    @default
    <body>
@endswitch

    <!-- loader starts-->
    <div class="loader-wrapper">
        <div class="loader">
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
        </div>
    </div>
    <!-- loader ends-->

    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->

    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">

        @include('layouts.user_simple.header')

        <div class="page-body-wrapper">
            @include('layouts.user_simple.sidebar')

            @switch(Route::currentRouteName())
                @case('admin.checkout')
                    <div class="page-body checkout">
                @break
                @default
                    <div class="page-body">
            @endswitch
                @yield('main_content')
            </div>

            @include('layouts.user_simple.footer')
        </div>
    </div>

    @include('layouts.user_simple.script')
    @include('admin.inc.alerts')

    </body>
</html>