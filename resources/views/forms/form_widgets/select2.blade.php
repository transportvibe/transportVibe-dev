@extends('layouts.simple.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/intltelinput.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/tagify.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 ps-0">
                    <h3>Select2</h3>
                </div>
                <div class="col-sm-6 pe-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Form Widgets</li>
                        <li class="breadcrumb-item active">Select2</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="select2-drpdwn">
            <div class="row">
                <!-- Tagify select2 start-->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4>Single-value select</h4>
                            <p class="f-m-light mt-1">
                                Use the tagify plugin for drag and sort options available.</p>
                        </div>
                        <div class="card-body">
                            <form class="row g-3">
                                <div class="col-xl-3 col-sm-6">
                                    <input class="selectMode badge-light-primary" name="tags-select-mode"
                                        placeholder="Please select">
                                </div>
                                <div class="col-xl-3 col-sm-6">
                                    <input class="selectMode badge-light-secondary" name="tags-select-value-mode"
                                        placeholder="Please select">
                                </div>
                                <div class="col-xl-3 col-sm-6">
                                    <input class="selectMode badge-light-light" name="tags-select-v-mode"
                                        placeholder="Please select">
                                </div>
                                <div class="col-xl-3 col-sm-6">
                                    <input class="selectMode badge-light-warning" name="tags-s-value-mode"
                                        placeholder="Please select">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4>Default select </h4>
                            <p class="f-m-light mt-1">
                                Use the tagify plugin for select options and edit.</p>
                        </div>
                        <div class="card-body">
                            <form>
                                <input name="basic" value="tag1, tag2, tag3, tag4 autofocus">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4>Random suggestions</h4>
                            <p class="f-m-light mt-1">
                                Use the tagify plugin for select options.</p>
                        </div>
                        <div class="card-body">
                            <form>
                                <input class="some_class_name" name="input-custom-dropdown" placeholder="write some tags"
                                    value="tivo, roxo, sheltos, viho, zeta, koho">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4>Colors select options</h4>
                            <p class="f-m-light mt-1">
                                Use the tagify plugin for select colors options.</p>
                        </div>
                        <div class="card-body">
                            <form>
                                <input name="tags3"
                                    value="[{&quot;value&quot;:&quot;point&quot;}, {&quot;value&quot;:&quot;soft&quot;}, {&quot;value&quot;:&quot;horse&quot;}, {&quot;value&quot;:&quot;flood&quot;}, {&quot;value&quot;:&quot;asset&quot;}]"
                                    pattern="^[A-Za-z_✲ ]{1,15}$">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4>Flags selection</h4>
                            <p class="f-m-light mt-1">
                                Use the tagify plugin for select flags options.</p>
                        </div>
                        <div class="card-body">
                            <form>
                                <input class="countries" name="tags3-1" placeholder="Try to add tags from the list">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4>Readonly options</h4>
                            <p class="f-m-light mt-1">
                                Use the tagify plugin for readonly options.</p>
                        </div>
                        <div class="card-body">
                            <form>
                                <input name="tags4" readonly="" value="tag1, tag 2, another tag">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4>Read and write options</h4>
                            <p class="f-m-light mt-1">
                                Use the tagify plugin for read and write options.</p>
                        </div>
                        <div class="card-body">
                            <form>
                                <input class="readonlyMix" name="tags-readonly-mix" placeholder="Type something"
                                    value="[                        {                        &quot;value&quot;    : &quot;foo&quot;,                        &quot;readonly&quot; : true,                        &quot;title&quot;    : &quot;read-only tag&quot;                        },                        {                        &quot;value&quot;    : &quot;bar&quot;                        },                        {                        &quot;value&quot;    : &quot;Locked tag&quot;,                        &quot;readonly&quot; : true,                        &quot;title&quot;    : &quot;Another readonly tag&quot;                        }                        ]">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4>Disabled readonly</h4>
                            <p class="f-m-light mt-1">
                                Use the tagify plugin for readonly option available.</p>
                        </div>
                        <div class="card-body">
                            <form>
                                <input name="disabledInput" disabled="" value="tag1, tag 2, another tag">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4>Customize emails</h4>
                            <p class="f-m-light mt-1">
                                Use the tagify plugin for select email options.</p>
                        </div>
                        <div class="card-body">
                            <form>
                                <input class="customLook" value="pixelstrap.theme@website.com">
                                <button type="button">+</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4>Telephone input</h4>
                            <p class="f-m-light mt-1">
                                Select the country and enter your telephone number.</p>
                        </div>
                        <div class="card-body">
                            <form class="international-num">
                                <input id="country" type="tel">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4>Movie suggestions</h4>
                            <p class="f-m-light mt-1">
                                Use the tagify plugin for select movie options.</p>
                        </div>
                        <div class="card-body">
                            <form>
                                <textarea name="tags2" placeholder="Enter movie names">[{&quot;value&quot;:&quot;Hot Sit&quot;}, {&quot;value&quot;:&quot;The Matrix&quot;}]</textarea>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card height-equal">
                        <div class="card-header pb-0">
                            <h4>Autocomplete words</h4>
                            <p class="f-m-light mt-1">
                                Enter any letter and display autocomplete words.</p>
                        </div>
                        <div class="card-body">
                            <form class="international-num row">
                                <div class="col-12">
                                    <label for="autokeyword">Search programming language </label>
                                </div>
                                <div class="col-12">
                                    <input id="autokeyword" type="text" placeholder="Search.."
                                        onkeyup="getValue(this.value)">
                                    <div class="results"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card height-equal">
                        <div class="card-header pb-0">
                            <h4>Select input using search option</h4>
                            <p class="f-m-light mt-1">
                                Use search option through select any options.</p>
                        </div>
                        <div class="card-body">
                            <div class="select-box">
                                <div class="options-container">
                                    <div class="selection-option">
                                        <input class="radio" id="webdesigner" type="radio" name="category">
                                        <label class="mb-0" for="webdesigner">web-designer</label>
                                    </div>
                                    <div class="selection-option">
                                        <input class="radio" id="film" type="radio" name="category">
                                        <label class="mb-0" for="film">Film &amp; Animation</label>
                                    </div>
                                    <div class="selection-option">
                                        <input class="radio" id="software" type="radio" name="category">
                                        <label class="mb-0" for="software">software-engineer</label>
                                    </div>
                                    <div class="selection-option">
                                        <input class="radio" id="art" type="radio" name="category">
                                        <label class="mb-0" for="art">Art</label>
                                    </div>
                                    <div class="selection-option">
                                        <input class="radio" id="music" type="radio" name="category">
                                        <label class="mb-0" for="music">Music</label>
                                    </div>
                                    <div class="selection-option">
                                        <input class="radio" id="travel" type="radio" name="category">
                                        <label class="mb-0" for="travel">Travel &amp; Events</label>
                                    </div>
                                    <div class="selection-option">
                                        <input class="radio" id="sports" type="radio" name="category">
                                        <label class="mb-0" for="sports">Sports</label>
                                    </div>
                                    <div class="selection-option">
                                        <input class="radio" id="news" type="radio" name="category">
                                        <label class="mb-0" for="news">News &amp; Politics</label>
                                    </div>
                                    <div class="selection-option">
                                        <input class="radio" id="tutorials" type="radio" name="category">
                                        <label class="mb-0" for="tutorials">Tutorials</label>
                                    </div>
                                </div>
                                <div class="selected-box">Select Your Profession</div>
                                <div class="search-box">
                                    <input type="text" placeholder="Start Typing...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4>Render suggestions list manually</h4>
                            <p class="f-m-light mt-1">
                                Use the tagify plugin for select random options.</p>
                        </div>
                        <div class="card-body">
                            <form>
                                <input name="tags-manual-suggestions" placeholder="write some tags">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/select2/tagify.js') }}"></script>
    <script src="{{ asset('assets/js/select2/tagify.polyfills.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2/intltelinput.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2/telephone-input.js') }}"></script>
    <script src="{{ asset('assets/js/select2/custom-inputsearch.js') }}"></script>
    <script src="{{ asset('assets/js/select2/select3-custom.js') }}"></script>
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection
