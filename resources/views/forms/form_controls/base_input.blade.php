@extends('layouts.simple.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 ps-0">
                    <h3>Base Inputs</h3>
                </div>
                <div class="col-sm-6 pe-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Form Controls</li>
                        <li class="breadcrumb-item active">Base inputs</li>
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
                    <div class="card-header pb-0">
                        <h4>Basic form</h4>
                        <p class="f-m-light mt-1">
                            Use the <code>.form-label </code>and <code>.form-control </code>through create basic form.</p>
                    </div>
                    <div class="card-body">
                        <div class="card-wrapper border rounded-3">
                            <form class="row g-3">
                                <div class="col-md-12">
                                    <label class="form-label" for="inputEmail4">Email</label>
                                    <input class="form-control" id="inputEmail4" type="email"
                                        placeholder="Enter Your Email">
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label" for="inputPassword4">Password</label>
                                    <input class="form-control" id="inputPassword4" type="password"
                                        placeholder="Enter Your Password">
                                </div>
                                <div class="col-12">
                                    <div class="form-check checkbox-checked">
                                        <input class="form-check-input" id="gridCheck1" type="checkbox">
                                        <label class="form-check-label" for="gridCheck1">Check me out</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Sign in </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Floating form </h4>
                        <p class="f-m-light mt-1">
                            Use the <code>.form-floating</code> through create floating form.</p>
                    </div>
                    <div class="card-body">
                        <div class="card-wrapper border rounded-3">
                            <form class="row g-3 floating-wrapper">
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="floatingInput22" type="email"
                                            placeholder="name@example.com">
                                        <label for="floatingInput22">Email address</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input class="form-control" id="floatingPassword" type="password"
                                            placeholder="Password">
                                        <label for="floatingPassword">Password</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check checkbox-checked">
                                        <input class="form-check-input" id="gridCheck" type="checkbox">
                                        <label class="form-check-label" for="gridCheck">Check me out</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Sign in </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Select sizing</h4>
                        <p class="f-m-light mt-1"> <code>.form-select</code> to trigger the custom styles. You may also
                            choose from small and large custom selects to match our similarly sized text inputs. class:-
                            <code>[form-select-lg/form-select-sm]</code>.
                        </p>
                    </div>
                    <div class="card-body">
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option selected="">What's Your Hobbies </option>
                            <option value="1">Kho-kho</option>
                            <option value="2">Reading Books</option>
                            <option value="3">Creativity</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Form control sizing</h4>
                        <p class="f-m-light mt-1">
                            Set heights using classes like <code>.form-control-lg</code> and <code>.form-control-sm</code>.
                        </p>
                    </div>
                    <div class="card-body">
                        <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm"
                            aria-label=".form-control-sm example">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>File input </h4>
                        <p class="f-m-light mt-1">
                            For default file/multiple file/disabled file/small file/large file input for use
                            <code>&lt;input&gt; </code>with <code>(type='file').</code>
                        </p>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="formFile">Default file input example</label>
                            <input class="form-control" id="formFile" type="file">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="formFileMultiple">Multiple files input example</label>
                            <input class="form-control" id="formFileMultiple" type="file" multiple="">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="formFileDisabled">Disabled file input example</label>
                            <input class="form-control" id="formFileDisabled" type="file" disabled="">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="formFileSm">Small file input example</label>
                            <input class="form-control form-control-sm" id="formFileSm" type="file">
                        </div>
                        <div>
                            <label class="form-label" for="formFileLg">Large file input example</label>
                            <input class="form-control form-control-lg" id="formFileLg" type="file">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Flat input style</h4>
                        <p class="f-m-light mt-1">
                            Use the <code>.btn-square </code>through defined 0px border-radius.</p>
                    </div>
                    <form class="form theme-form dark-inputs">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleFormControlSelect12">Select your favorite
                                            roman number</label>
                                        <select class="form-select btn-square digits" id="exampleFormControlSelect12">
                                            <option>I </option>
                                            <option>II </option>
                                            <option>III</option>
                                            <option>IV </option>
                                            <option>V </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleFormControlSelect13">Select your multiple
                                            paintings</label>
                                        <select class="form-select btn-square digits" id="exampleFormControlSelect13"
                                            multiple="">
                                            <option class="rounded-0">Landscape </option>
                                            <option class="rounded-0">Portrait </option>
                                            <option class="rounded-0">Oil Painting</option>
                                            <option class="rounded-0">Abstract art</option>
                                            <option class="rounded-0">Acrylic </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div>
                                        <label class="form-label" for="exampleFormControlTextarea14">Please do
                                            comments</label>
                                        <textarea class="form-control btn-square" id="exampleFormControlTextarea14" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card height-equal">
                    <div class="card-header pb-0">
                        <h4>Basic HTML input control</h4>
                        <p class="f-m-light mt-1">
                            Give textual form controls like <code>&lt;input&gt;</code>s and <code>&lt;textarea&gt;</code>s
                            an upgrade with custom styles, sizing, focus states, and more.</p>
                    </div>
                    <form class="form theme-form">
                        <div class="card-body custom-input">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3">Placeholder</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text"
                                                placeholder="Type your title in Placeholder">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3">Password</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="password" placeholder="Password input">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3">Number</label>
                                        <div class="col-sm-9">
                                            <input class="form-control digits" type="number" placeholder="Number">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3">Telephone</label>
                                        <div class="col-sm-9">
                                            <input class="form-control m-input digits" type="tel"
                                                value="91-(999)-999-999">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3">URL</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="url" value="https://getbootstrap.com">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3">Date and time</label>
                                        <div class="col-sm-9">
                                            <input class="form-control digits" id="example-datetime-local-input"
                                                type="datetime-local" value="2018-01-19T18:45:00">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3">Date</label>
                                        <div class="col-sm-9">
                                            <input class="form-control digits" type="date" value="2018-01-01">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3">Month</label>
                                        <div class="col-sm-9">
                                            <input class="form-control digits" type="month" value="2018-01">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3">Week</label>
                                        <div class="col-sm-9">
                                            <input class="form-control digits" type="week" value="2018-W09">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-sm-3">
                                            <label class="form-label" for="exampleDataList">Datalist example</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input class="form-control" id="exampleDataList" list="datalistOptions"
                                                placeholder="Look up your nation...">
                                            <datalist id="datalistOptions">
                                                <option value="San Francisco"></option>
                                                <option value="New York"></option>
                                                <option value="Seattle"></option>
                                                <option value="Los Angeles"></option>
                                                <option value="Chicago"></option>
                                                <option value="India"> </option>
                                            </datalist>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3">Time</label>
                                        <div class="col-sm-9">
                                            <input class="form-control digits" type="time" value="21:45:00">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 pt-0">Color picker</label>
                                        <div class="col-sm-2">
                                            <input class="form-control form-control-color" type="color"
                                                value="#5C61F2">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3">
                                            Maximum
                                            Length
                                        </label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text"
                                                placeholder="Content must be in 6 characters" maxlength="6">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-3">Static Text</label>
                                        <div class="col-sm-9">
                                            <div class="form-control-static">
                                                Hello !... This is
                                                my magical text
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <div class="col-sm-9 offset-sm-3">
                                <button class="btn btn-primary me-3" type="submit">Submit</button>
                                <input class="btn btn-light" type="reset" value="Cancel">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card height-equal">
                    <div class="card-header pb-0">
                        <h4>Basic floating input control</h4>
                        <p class="f-m-light mt-1">
                            Give textual form controls like <code>&lt;input&gt;</code>s and <code>&lt;textarea&gt;</code>s
                            an upgrade with custom styles, sizing, focus states, and more.</p>
                    </div>
                    <form class="form theme-form">
                        <div class="card-body custom-input">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3">Valid input </label>
                                        <div class="col-sm-9">
                                            <div class="form-floating">
                                                <input class="form-control" id="floatingInputValue" type="email"
                                                    placeholder="name@example.com" value="test@example.com">
                                                <label for="floatingInputValue">Input with value</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3">Invalid input </label>
                                        <div class="col-sm-9">
                                            <div class="form-floating">
                                                <input class="form-control is-invalid" id="floatingInputInvalid"
                                                    type="email" placeholder="name@example.com"
                                                    value="test@example.com">
                                                <label for="floatingInputInvalid">Invalid input</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3">Comments</label>
                                        <div class="col-sm-9">
                                            <div class="form-floating">
                                                <textarea class="form-control" id="floatingTextarea" placeholder="Leave a comment here"></textarea>
                                                <label for="floatingTextarea">Comments</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3">Email</label>
                                        <div class="col-sm-9">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="floatingInput" type="email">
                                                <label for="floatingInput">Email address</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3">Password</label>
                                        <div class="col-sm-9">
                                            <div class="form-floating">
                                                <input class="form-control" id="floatingPassword1" type="password">
                                                <label for="floatingPassword1">Password</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3">Comments</label>
                                        <div class="col-sm-9">
                                            <div class="form-floating">
                                                <textarea class="form-control" id="floatingTextarea2" placeholder="Leave a comment here" style="height: 100px"></textarea>
                                                <label for="floatingTextarea2">Comments</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3">Open this select menu </label>
                                        <div class="col-sm-9">
                                            <div class="form-floating">
                                                <select class="form-select" id="floatingSelect"
                                                    aria-label="Floating label select example">
                                                    <option selected="">Open this select menu</option>
                                                    <option value="1">I </option>
                                                    <option value="2">II </option>
                                                    <option value="3">III </option>
                                                </select>
                                                <label for="floatingSelect">Works with selects</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3">Input group</label>
                                        <div class="col-sm-9">
                                            <div class="input-group mb-3"><span class="input-group-text">@</span>
                                                <div class="form-floating">
                                                    <input class="form-control" id="floatingInputGroup1" type="text">
                                                    <label for="floatingInputGroup1">Username</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3">Input group</label>
                                        <div class="col-sm-9">
                                            <div class="input-group has-validation"><span
                                                    class="input-group-text">@</span>
                                                <div class="form-floating is-invalid">
                                                    <input class="form-control is-invalid" id="floatingInputGroup2"
                                                        type="text" required="">
                                                    <label for="floatingInputGroup2">Username</label>
                                                </div>
                                                <div class="invalid-feedback">Please choose a username.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-0 row">
                                        <label class="col-sm-3">Layout</label>
                                        <div class="col-sm-9">
                                            <div class="row g-2">
                                                <div class="col-xxl-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="floatingInputGrid" type="email"
                                                            placeholder="name@example.com" value="mdo@example.com">
                                                        <label for="floatingInputGrid">Email address</label>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6">
                                                    <div class="form-floating">
                                                        <select class="form-select" id="floatingSelectGrid">
                                                            <option selected="">Open this select menu</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                        <label for="floatingSelectGrid">Works with selects</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <div class="col-sm-9 offset-sm-3">
                                <button class="btn btn-primary me-3" type="submit">Submit</button>
                                <input class="btn btn-light" type="reset" value="Cancel">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Edges input style</h4>
                        <p class="f-m-light mt-1">
                            Use the <code>.btn-pill </code>through defined border-radius.</p>
                    </div>
                    <form class="form theme-form dark-inputs">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleFormControlInput5">Email address</label>
                                        <input class="form-control btn-pill" id="exampleFormControlInput5" type="email"
                                            placeholder="name@example.com">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleInputPassword6">Password</label>
                                        <input class="form-control btn-pill" id="exampleInputPassword6" type="password"
                                            placeholder="Password">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleFormControlSelect7">Select your favorite
                                            pixelstrap theme</label>
                                        <select class="form-select btn-pill digits" id="exampleFormControlSelect7">
                                            <option>Tivo</option>
                                            <option>Crocs</option>
                                            <option>Roxo</option>
                                            <option>Oslo</option>
                                            <option>Voxo</option>
                                            <option>Sheltos </option>
                                            <option>Petkart</option>
                                            <option>Zeta</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="formFileSimple">Default file input example</label>
                                        <input class="form-control btn-pill px-4" id="formFileSimple" type="file">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Default Input</label>
                                        <input class="form-control btn-pill" type="text" placeholder="Default input"
                                            aria-label="default input example">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 d-flex gap-3 checkbox-checked">
                                        <div class="form-check">
                                            <input class="form-check-input" id="flexRadioDefault1" type="radio"
                                                name="flexRadioDefault">
                                            <label class="form-check-label mb-0" for="flexRadioDefault1">Male </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="flexRadioDefault2" type="radio"
                                                name="flexRadioDefault" checked="">
                                            <label class="form-check-label mb-0" for="flexRadioDefault2">Female</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div>
                                        <label class="form-label" for="exampleFormControlTextarea9">Comments</label>
                                        <textarea class="form-control btn-pill" id="exampleFormControlTextarea9" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button class="btn btn-primary me-3" type="submit">Submit</button>
                            <input class="btn btn-light" type="reset" value="Cancel">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Raise input style</h4>
                        <p class="f-m-light mt-1">
                            Use the <code>input-air-* </code>through defined bottom box-shadow.</p>
                    </div>
                    <form class="form theme-form dark-inputs">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleFormControlInput15">Email address</label>
                                        <input class="form-control input-air-primary" id="exampleFormControlInput15"
                                            type="email" placeholder="name@example.com">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleInputPassword16">Password</label>
                                        <input class="form-control input-air-primary" id="exampleInputPassword16"
                                            type="password" placeholder="Password">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleFormControlSelect17">Select your favorite
                                            pixelstrap theme</label>
                                        <select class="form-select input-air-primary digits"
                                            id="exampleFormControlSelect17">
                                            <option>Tivo</option>
                                            <option>Roxo</option>
                                            <option>Wingo</option>
                                            <option>Crocs</option>
                                            <option>Koho</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleFormControlSelect18">Select the color you
                                            like below</label>
                                        <select class="form-select input-air-primary digits"
                                            id="exampleFormControlSelect18" multiple="">
                                            <option class="rounded-0">Red</option>
                                            <option class="rounded-0">Yellow</option>
                                            <option class="rounded-0">Orange</option>
                                            <option class="rounded-0">White</option>
                                            <option class="rounded-0">Black</option>
                                            <option class="rounded-0">Gray </option>
                                            <option class="rounded-0">Brown</option>
                                            <option class="rounded-0">Purple </option>
                                            <option class="rounded-0">White </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div>
                                        <label class="form-label" for="exampleFormControlTextarea19">Comments</label>
                                        <textarea class="form-control input-air-primary" id="exampleFormControlTextarea19" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button class="btn btn-primary me-3" type="submit">Submit</button>
                            <input class="btn btn-light" type="reset" value="Cancel">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection
