@extends('layouts.simple.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 ps-0">
                    <h3>Form Wizard</h3>
                </div>
                <div class="col-sm-6 pe-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Form Layout</li>
                        <li class="breadcrumb-item active"> Form Wizard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6">
                <div class="card height-equal">
                    <div class="card-header pb-0">
                        <h4>Numbering wizard </h4>
                        <p class="f-m-light mt-1">
                            Fill up your details and proceed next steps.</p>
                    </div>
                    <div class="card-body basic-wizard important-validation">
                        <div class="stepper-horizontal" id="stepper1">
                            <div class="stepper-one stepper step editing active">
                                <div class="step-circle"><span>1</span></div>
                                <div class="step-title">Basic Info</div>
                                <div class="step-bar-left"></div>
                                <div class="step-bar-right"></div>
                            </div>
                            <div class="stepper-two step">
                                <div class="step-circle"><span>2</span></div>
                                <div class="step-title">Cart Info</div>
                                <div class="step-bar-left"></div>
                                <div class="step-bar-right"></div>
                            </div>
                            <div class="stepper-three step">
                                <div class="step-circle"><span>3</span></div>
                                <div class="step-title">Feedback</div>
                                <div class="step-bar-left"></div>
                                <div class="step-bar-right"></div>
                            </div>
                            <div class="stepper-four step">
                                <div class="step-circle"><span>4</span></div>
                                <div class="step-title">Finish</div>
                                <div class="step-bar-left"></div>
                                <div class="step-bar-right"></div>
                            </div>
                        </div>
                        <div id="msform">
                            <form class="stepper-one row g-3 needs-validation custom-input" novalidate="">
                                <div class="col-sm-6">
                                    <label class="form-label" for="email-basic-wizard">Email<span
                                            class="txt-danger">*</span></label>
                                    <input class="form-control" id="email-basic-wizard" type="email" required=""
                                        placeholder="crocs@gmail.com">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="firstnamewizard">First Name<span
                                            class="txt-danger">*</span></label>
                                    <input class="form-control" id="firstnamewizard" type="text" required=""
                                        placeholder="Enter your name">
                                </div>
                                <div class="col-12">
                                    <label class="col-sm-12 form-label" for="passwordwizard">Password<span
                                            class="txt-danger">*</span></label>
                                    <input class="form-control" id="passwordwizard" type="password"
                                        placeholder="Enter password" required="">
                                </div>
                                <div class="col-12">
                                    <label class="col-sm-12 form-label" for="confirmpasswordwizard">Confirm Password<span
                                            class="txt-danger">*</span></label>
                                    <input class="form-control" id="confirmpasswordwizard" type="password"
                                        placeholder="Enter confirm password" required="">
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" id="inputcheckwizard" type="checkbox" value=""
                                            required="">
                                        <label class="form-check-label mb-0" for="inputcheckwizard">Agree to terms and
                                            conditions</label>
                                    </div>
                                </div>
                            </form>
                            <form class="stepper-two row g-3 needs-validation custom-input" novalidate="">
                                <div class="col-md-12">
                                    <label class="form-label" for="placeholdername1">Placeholder Name </label>
                                    <input class="form-control" id="placeholdername1" type="text" required=""
                                        placeholder="Placeholder name">
                                </div>
                                <div class="col-xxl-4 col-sm-6">
                                    <label class="form-label" for="cardNumber01">Card Number</label>
                                    <input class="form-control" id="cardNumber01" type="text" required=""
                                        placeholder="xxxx xxxx xxxx xxxx">
                                </div>
                                <div class="col-xxl-4 col-sm-6">
                                    <label class="form-label" for="expirationDates01">Expiration(MM/YY)</label>
                                    <input class="form-control" id="expirationDates01" type="number" required=""
                                        placeholder="xx/xx">
                                </div>
                                <div class="col-xxl-4">
                                    <label class="form-label" for="cvvNumber-a">CVV Number</label>
                                    <input class="form-control" id="cvvNumber-a" type="text" required="">
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="formFileDocument">Upload Documentation</label>
                                    <input class="form-control" id="formFileDocument" type="file"
                                        aria-label="file example" required="">
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" id="invalidCheck-a" type="checkbox"
                                            value="" required="">
                                        <label class="form-check-label" for="invalidCheck-a">All the above information is
                                            correct</label>
                                    </div>
                                </div>
                            </form>
                            <form class="stepper-three row g-3 needs-validation custom-input" novalidate="">
                                <div class="col-sm-6">
                                    <label class="form-label" for="email-basic">LinkedIn<span
                                            class="txt-danger">*</span></label>
                                    <input class="form-control" id="email-basic" type="url" required=""
                                        placeholder="https://linkedIn.com/crocs">
                                    <div class="invalid-feedback">Please enter your valid link</div>
                                    <div class="valid-feedback">
                                        Looks's Good!</div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="validationCustom996">Github<span
                                            class="txt-danger">*</span></label>
                                    <input class="form-control" id="validationCustom996" type="url" required=""
                                        placeholder="https://github.com/crocs">
                                    <div class="invalid-feedback">Please enter your valid link</div>
                                    <div class="valid-feedback">
                                        Looks's Good! </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="validationCustom09">Select State<span
                                            class="txt-danger">*</span></label>
                                    <select class="form-select" id="validationCustom09" required="">
                                        <option selected="" disabled="" value="">Choose...</option>
                                        <option>U.K </option>
                                        <option>U.S </option>
                                        <option>India</option>
                                    </select>
                                    <div class="invalid-feedback">Please select a valid state.</div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="givefeedback">Give Feedback</label>
                                    <textarea class="form-control" id="givefeedback" required=""></textarea>
                                    <div class="invalid-feedback">Please enter a message in the textarea.</div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" id="invalidCheck46" type="checkbox"
                                            value="" required="">
                                        <label class="form-check-label mb-0" for="invalidCheck46">Agree to terms and
                                            conditions</label>
                                        <div class="invalid-feedback">You must agree before submitting.</div>
                                    </div>
                                </div>
                            </form>
                            <form class="stepper-four row g-3 needs-validation" novalidate="">
                                <div class="col-12 m-0">
                                    <div class="successful-form"><img class="img-fluid"
                                            src="{{ asset('assets/images/gif/dashboard-8/successful.gif') }}"
                                            alt="successful">
                                        <h3>Congratulations </h3>
                                        <p>Well done! You have successfully completed. </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="wizard-footer d-flex gap-2 justify-content-end">
                            <button class="btn alert-light-primary" id="backbtn" onclick="backStep()"> Back</button>
                            <button class="btn btn-primary" id="nextbtn" onclick="nextStep()">Next</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card height-equal">
                    <div class="card-header pb-0">
                        <h4>Student validation form</h4>
                        <p class="f-m-light mt-1">
                            Please make sure fill all the filed before click on next button.</p>
                    </div>
                    <div class="card-body custom-input">
                        <form class="form-wizard" id="regForm" action="#" method="get">
                            @csrf
                            <div class="tab">
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <label for="name">Name</label>
                                        <input class="form-control" id="name" type="text"
                                            placeholder="Enter your name" required="required">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="student-email-wizard">Email<span
                                                class="txt-danger">*</span></label>
                                        <input class="form-control" id="student-email-wizard" type="email"
                                            required="" placeholder="crocs@gmail.com">
                                    </div>
                                    <div class="col-12">
                                        <label class="col-sm-12 form-label" for="password-wizard">Password<span
                                                class="txt-danger">*</span></label>
                                        <input class="form-control" id="password-wizard" type="password"
                                            placeholder="Enter password" required="">
                                    </div>
                                    <div class="col-12">
                                        <label class="col-sm-12 form-label" for="confirmpassowrd">Confirm Password<span
                                                class="txt-danger">*</span></label>
                                        <input class="form-control" id="confirmpassowrd" type="password"
                                            placeholder="Enter confirm password" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="tab">
                                <div class="row g-3 avatar-upload">
                                    <div class="col-12">
                                        <div>
                                            <div class="avatar-edit">
                                                <input id="imageUpload" type="file" accept=".png, .jpg, .jpeg">
                                                <label for="imageUpload"></label>
                                            </div>
                                            <div class="avatar-preview">
                                                <div id="image"></div>
                                            </div>
                                        </div>
                                        <h3 class="text-center">Add Profile</h3>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" for="exampleFormControlInput1">Portfolio URL</label>
                                        <input class="form-control" id="exampleFormControlInput1" type="url"
                                            placeholder="https://crocs">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" for="projectDescription">Project Description</label>
                                        <textarea class="form-control" id="projectDescription" rows="2"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="tab">
                                <h5 class="mb-2">Social Links </h5>
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <label class="form-label" for="twitterControlInput">Twitter</label>
                                        <input class="form-control" id="twitterControlInput" type="url"
                                            placeholder="https://twitter.com">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="githubControlInput">Github</label>
                                        <input class="form-control" id="githubControlInput" type="url"
                                            placeholder="https:/github.com">
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group">
                                            <input class="form-control" id="inputGroupFile04" type="file"
                                                aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                            <button class="btn btn-outline-secondary" id="inputGroupFileAddon04"
                                                type="button">Submit</button>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected="">Positions</option>
                                            <option value="1">Web Designer</option>
                                            <option value="2">Software Engineer</option>
                                            <option value="3">UI/UX Designer </option>
                                            <option value="3">Web Developer</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" for="quationsTextarea">Why do you want to take this
                                            position?</label>
                                        <textarea class="form-control" id="quationsTextarea" rows="2"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="text-end pt-3">
                                    <button class="btn btn-secondary" id="prevBtn" type="button"
                                        onclick="nextPrev(-1)">Previous</button>
                                    <button class="btn btn-primary" id="nextBtn" type="button"
                                        onclick="nextPrev(1)">Next</button>
                                </div>
                            </div>
                            <!-- Circles which indicates the steps of the form:-->
                            <div class="text-center"><span class="step"></span><span class="step"></span><span
                                    class="step"></span><span class="step"></span></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Vertical validation wizard </h4>
                        <p class="f-m-light mt-1">
                            Fill up your true details and next proceed.</p>
                    </div>
                    <div class="card-body">
                        <div class="vertical-main-wizard">
                            <div class="row g-3">
                                <div class="col-xxl-3 col-xl-4 col-12">
                                    <div class="nav flex-column header-vertical-wizard" id="wizard-tab" role="tablist"
                                        aria-orientation="vertical"><a class="nav-link active" id="wizard-contact-tab"
                                            data-bs-toggle="pill" href="#wizard-contact" role="tab"
                                            aria-controls="wizard-contact" aria-selected="true">
                                            <div class="vertical-wizard">
                                                <div class="stroke-icon-wizard"><i class="fa fa-user"></i></div>
                                                <div class="vertical-wizard-content">
                                                    <h3>Your Info</h3>
                                                    <p>Add your details </p>
                                                </div>
                                            </div>
                                        </a><a class="nav-link" id="wizard-cart-tab" data-bs-toggle="pill"
                                            href="#wizard-cart" role="tab" aria-controls="wizard-cart"
                                            aria-selected="false">
                                            <div class="vertical-wizard">
                                                <div class="stroke-icon-wizard"><i class="fa fa-chain-broken"></i></div>
                                                <div class="vertical-wizard-content">
                                                    <h3>Cart Info</h3>
                                                    <p>Add your a/c details</p>
                                                </div>
                                            </div>
                                        </a><a class="nav-link" id="wizard-banking-tab" data-bs-toggle="pill"
                                            href="#wizard-banking" role="tab" aria-controls="wizard-banking"
                                            aria-selected="false">
                                            <div class="vertical-wizard">
                                                <div class="stroke-icon-wizard"><i class="fa fa-group"></i></div>
                                                <div class="vertical-wizard-content">
                                                    <h3>Net Banking</h3>
                                                    <p>Choose your bank</p>
                                                </div>
                                            </div>
                                        </a></div>
                                </div>
                                <div class="col-xxl-9 col-xl-8 col-12">
                                    <div class="tab-content" id="wizard-tabContent">
                                        <div class="tab-pane fade show active" id="wizard-contact" role="tabpanel"
                                            aria-labelledby="wizard-contact-tab">
                                            <form class="row g-3 needs-validation custom-input" novalidate="">
                                                <div class="col-xxl-4 col-sm-6">
                                                    <label class="form-label" for="validationCustom0-a">First name<span
                                                            class="txt-danger">*</span></label>
                                                    <input class="form-control" id="validationCustom0-a" type="text"
                                                        placeholder="Enter first name" required="">
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                                <div class="col-xxl-4 col-sm-6">
                                                    <label class="form-label" for="validationCustom-b">Last name<span
                                                            class="txt-danger">*</span></label>
                                                    <input class="form-control" id="validationCustom-b" type="text"
                                                        placeholder="Enter last name" required="">
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                                <div class="col-xxl-4 col-sm-6">
                                                    <label class="form-label" for="validationemail-b">Email<span
                                                            class="txt-danger">*</span></label>
                                                    <input class="form-control" id="validationemail-b" type="email"
                                                        required="" placeholder="crocs@example.com">
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                                <div class="col-xxl-5 col-sm-6">
                                                    <label class="form-label" for="validationCustom04">State</label>
                                                    <select class="form-select" id="validationCustom04" required="">
                                                        <option selected="" disabled="" value="">Choose...
                                                        </option>
                                                        <option>USA </option>
                                                        <option>U.K </option>
                                                        <option>U.S</option>
                                                    </select>
                                                    <div class="invalid-feedback">Please select a valid state.</div>
                                                </div>
                                                <div class="col-xxl-3 col-sm-6">
                                                    <label class="form-label" for="validationCustom05">Zip Code</label>
                                                    <input class="form-control" id="validationCustom05" type="text"
                                                        required="">
                                                    <div class="invalid-feedback">Please provide a valid zip.</div>
                                                </div>
                                                <div class="col-xxl-4 col-sm-6">
                                                    <label class="form-label" for="contactnumber">Contact Number</label>
                                                    <input class="form-control" id="contactnumber" type="number"
                                                        placeholder="Enter number" required="">
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-check">
                                                        <input class="form-check-input" id="invalidCheck-n"
                                                            type="checkbox" value="" required="">
                                                        <label class="form-check-label" for="invalidCheck-n">Agree to
                                                            terms and conditions</label>
                                                        <div class="invalid-feedback">You must agree before submitting.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 text-end">
                                                    <button class="btn btn-primary">Next</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="wizard-cart" role="tabpanel"
                                            aria-labelledby="wizard-cart-tab">
                                            <form class="row g-3 needs-validation custom-input" novalidate="">
                                                <div class="col-xxl-6">
                                                    <div class="card-wrapper border rounded-3 checkbox-checked">
                                                        <h3 class="sub-title">Select your payment method</h3>
                                                        <div class="radio-form">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="flexRadioDefault1"
                                                                    type="radio" name="flexRadioDefault-a">
                                                                <label class="form-check-label"
                                                                    for="flexRadioDefault1">Visa</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="flexRadioDefault2"
                                                                    type="radio" name="flexRadioDefault-a"
                                                                    checked="">
                                                                <label class="form-check-label"
                                                                    for="flexRadioDefault2">MasterCard</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="flexRadioDefault3"
                                                                    type="radio" name="flexRadioDefault-a"
                                                                    checked="">
                                                                <label class="form-check-label"
                                                                    for="flexRadioDefault3">Paypal</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="input-group mb-3">
                                                                <input class="form-control" type="text"
                                                                    placeholder="Recipient's username"
                                                                    aria-label="Recipient's username"
                                                                    aria-describedby="button-addon2">
                                                                <button class="btn btn-outline-secondary"
                                                                    id="button-addon2" type="button">Submit</button>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="input-group"><span class="input-group-text"
                                                                    id="basic-addon1">@</span>
                                                                <input class="form-control" type="text"
                                                                    placeholder="Username" aria-label="Username"
                                                                    aria-describedby="basic-addon1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6">
                                                    <label class="form-label" for="txtCardNumber1">Card Number</label>
                                                    <input class="form-control" id="txtCardNumber1" type="text"
                                                        required="" placeholder="xxxx xxxx xxxx xxxx">
                                                    <div class="invalid-feedback">Please enter your valid number</div>
                                                    <div class="valid-feedback">
                                                        Looks's Good!</div>
                                                </div>
                                                <div class="col-md-4 col-sm-6">
                                                    <label class="form-label"
                                                        for="validationDates">Expiration(MM/YY)</label>
                                                    <input class="form-control" id="validationDates" type="number"
                                                        required="" placeholder="xx/xx">
                                                    <div class="invalid-feedback">Please enter your valid number</div>
                                                    <div class="valid-feedback">
                                                        Looks's Good!</div>
                                                </div>
                                                <div class="col-md-4 col-sm-6">
                                                    <label class="form-label" for="cvvNumber-b">CVV</label>
                                                    <input class="form-control" id="cvvNumber-b" type="text"
                                                        required="">
                                                    <div class="invalid-feedback">Please enter your valid number</div>
                                                    <div class="valid-feedback">
                                                        Looks's Good!</div>
                                                </div>
                                                <div class="col-md-12 col-sm-6">
                                                    <label class="form-label" for="formFile2">Upload Documentation</label>
                                                    <input class="form-control" id="formFile2" type="file"
                                                        aria-label="file example" required="">
                                                    <div class="invalid-feedback">Invalid form file selected</div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-check mb-0">
                                                        <input class="form-check-input" id="invalidCheck-b"
                                                            type="checkbox" value="" required="">
                                                        <label class="form-check-label" for="invalidCheck-b">All the above
                                                            information is correct</label>
                                                        <div class="invalid-feedback">You must agree before submitting.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 text-end">
                                                    <button class="btn btn-primary">Previous</button>
                                                    <button class="btn btn-primary">Next</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade custom-input" id="wizard-banking" role="tabpanel"
                                            aria-labelledby="wizard-banking-tab">
                                            <form class="row g-3 mb-3 needs-validation" novalidate="">
                                                <div class="col-md-12">
                                                    <div class="accordion dark-accordion" id="accordionExample-a">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingOne-a">
                                                                <button
                                                                    class="accordion-button collapsed accordion-light-primary txt-primary"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseOne-a" aria-expanded="true"
                                                                    aria-controls="collapseOne-a">NET BANKING<i
                                                                        class="svg-color"
                                                                        data-feather="chevron-down"></i></button>
                                                            </h2>
                                                            <div class="accordion-collapse collapse" id="collapseOne-a"
                                                                aria-labelledby="headingOne-a"
                                                                data-bs-parent="#accordionExample-a">
                                                                <div class="accordion-body weight-title card-wrapper">
                                                                    <h3 class="sub-title f-14">SELECT YOUR BANK</h3>
                                                                    <div class="row choose-bank">
                                                                        <div class="col-sm-6">
                                                                            <div class="form-check radio radio-primary">
                                                                                <input class="form-check-input"
                                                                                    id="flexRadioDefault-z" type="radio"
                                                                                    name="flexRadioDefault-v">
                                                                                <label class="form-check-label"
                                                                                    for="flexRadioDefault-z">Industrial &
                                                                                    Commercial Bank</label>
                                                                            </div>
                                                                            <div class="form-check radio radio-primary">
                                                                                <input class="form-check-input"
                                                                                    id="flexRadioDefault-y" type="radio"
                                                                                    name="flexRadioDefault-v">
                                                                                <label class="form-check-label"
                                                                                    for="flexRadioDefault-y">Agricultural
                                                                                    Bank</label>
                                                                            </div>
                                                                            <div class="form-check radio radio-primary">
                                                                                <input class="form-check-input"
                                                                                    id="flexRadioDefault-x" type="radio"
                                                                                    name="flexRadioDefault-v"
                                                                                    checked="">
                                                                                <label class="form-check-label"
                                                                                    for="flexRadioDefault-x">JPMorgan Chase
                                                                                    & Co.</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <div class="form-check radio radio-primary">
                                                                                <input class="form-check-input"
                                                                                    id="flexRadioDefault-w" type="radio"
                                                                                    name="flexRadioDefault-v">
                                                                                <label class="form-check-label"
                                                                                    for="flexRadioDefault-w">Construction
                                                                                    Bank Corp.</label>
                                                                            </div>
                                                                            <div class="form-check radio radio-primary">
                                                                                <input class="form-check-input"
                                                                                    id="flexRadioDefault-v" type="radio"
                                                                                    name="flexRadioDefault-v">
                                                                                <label class="form-check-label"
                                                                                    for="flexRadioDefault-v">Bank of
                                                                                    America</label>
                                                                            </div>
                                                                            <div class="form-check radio radio-primary">
                                                                                <input class="form-check-input"
                                                                                    id="flexRadioDefault-u" type="radio"
                                                                                    name="flexRadioDefault-v">
                                                                                <label class="form-check-label"
                                                                                    for="flexRadioDefault-u">HDFC
                                                                                    Bank</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <form class="row g-3 needs-validation" novalidate="">
                                                <div class="col-12">
                                                    <textarea class="form-control" id="validationTextarea24" placeholder="Your Feedback" required=""></textarea>
                                                    <div class="invalid-feedback">Please enter a message in the textarea.
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-check mb-0">
                                                        <input class="form-check-input" id="invalidCheck67"
                                                            type="checkbox" value="" required="">
                                                        <label class="form-check-label mb-0" for="invalidCheck67">Agree to
                                                            terms and conditions</label>
                                                        <div class="invalid-feedback">You must agree before submitting.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 text-end">
                                                    <button class="btn btn-success">Finish</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Shipping form</h4>
                        <p class="f-m-light mt-1">
                            Fill up your true details and next proceed.</p>
                    </div>
                    <div class="card-body">
                        <div class="row shopping-wizard">
                            <div class="col-12">
                                <div class="row shipping-form g-5">
                                    <div class="col-xl-8 shipping-border">
                                        <div class="nav nav-pills horizontal-options shipping-options"
                                            id="cart-options-tab" role="tablist" aria-orientation="vertical"><a
                                                class="nav-link b-r-0 active" id="bill-wizard-tab" data-bs-toggle="pill"
                                                href="#bill-wizard" role="tab" aria-controls="bill-wizard"
                                                aria-selected="true">
                                                <div class="cart-options">
                                                    <div class="stroke-icon-wizard"><i class="fa fa-user"></i></div>
                                                    <div class="cart-options-content">
                                                        <h3>Billing</h3>
                                                    </div>
                                                </div>
                                            </a><a class="nav-link b-r-0" id="ship-wizard-tab" data-bs-toggle="pill"
                                                href="#ship-wizard" role="tab" aria-controls="ship-wizard"
                                                aria-selected="false">
                                                <div class="cart-options">
                                                    <div class="stroke-icon-wizard"><i class="fa fa-truck"></i></div>
                                                    <div class="cart-options-content">
                                                        <h3>Shipping</h3>
                                                    </div>
                                                </div>
                                            </a><a class="nav-link b-r-0" id="payment-wizard-tab" data-bs-toggle="pill"
                                                href="#payment-wizard" role="tab" aria-controls="payment-wizard"
                                                aria-selected="false">
                                                <div class="cart-options">
                                                    <div class="stroke-icon-wizard"><i class="fa fa-money"></i></div>
                                                    <div class="cart-options-content">
                                                        <h3>Payment</h3>
                                                    </div>
                                                </div>
                                            </a><a class="nav-link b-r-0" id="finish-wizard-tab" data-bs-toggle="pill"
                                                href="#finish-wizard" role="tab" aria-controls="finish-wizard"
                                                aria-selected="false">
                                                <div class="cart-options">
                                                    <div class="stroke-icon-wizard"><i class="fa fa-check-square"></i>
                                                    </div>
                                                    <div class="cart-options-content">
                                                        <h3>Finish</h3>
                                                    </div>
                                                </div>
                                            </a></div>
                                        <div class="tab-content dark-field shipping-content" id="cart-options-tabContent">
                                            <div class="tab-pane fade show active" id="bill-wizard" role="tabpanel"
                                                aria-labelledby="bill-wizard-tab">
                                                <h3>Billing Information </h3>
                                                <p class="f-light">Fill up the following information </p>
                                                <form class="row g-3 needs-validation" novalidate="">
                                                    <div class="col-sm-6">
                                                        <label class="form-label" for="customFirstname">First Name<span
                                                                class="txt-danger">*</span></label>
                                                        <input class="form-control" id="customFirstname" type="text"
                                                            placeholder="Enter first name" required="">
                                                        <div class="valid-feedback">Looks good!</div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="form-label" for="customLastname">Last Name<span
                                                                class="txt-danger">*</span></label>
                                                        <input class="form-control" id="customLastname" type="text"
                                                            placeholder="Enter last name" required="">
                                                        <div class="valid-feedback">Looks good!</div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="form-label" for="customContact">Contact
                                                            Number</label>
                                                        <input class="form-control" id="customContact" type="number"
                                                            placeholder="Enter number" required="">
                                                        <div class="valid-feedback">Looks good!</div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="form-label" for="customEmail">Email<span
                                                                class="txt-danger">*</span></label>
                                                        <input class="form-control" id="customEmail" type="email"
                                                            required="" placeholder="crocs@example.com">
                                                        <div class="valid-feedback">Looks good!</div>
                                                    </div>
                                                    <div class="col-12">
                                                        <label class="form-label"
                                                            for="exampleFormControlTextarea1">Address </label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label class="form-label" for="customState-wizard">Country</label>
                                                        <select class="form-select" id="customState-wizard"
                                                            required="">
                                                            <option selected="" disabled="" value="">Select
                                                                Country</option>
                                                            <option>Africa </option>
                                                            <option>India</option>
                                                            <option>Indonesia </option>
                                                            <option>Netherlands</option>
                                                            <option>U.K </option>
                                                            <option>U.S</option>
                                                        </select>
                                                        <div class="invalid-feedback">Please select a valid state.</div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label class="form-label" for="customstate">State</label>
                                                        <input class="form-control" id="customstate" type="text"
                                                            placeholder="Enter state" required="">
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label class="form-label" for="custom-zipcode">Zip Code</label>
                                                        <input class="form-control" id="custom-zipcode" type="text"
                                                            required="">
                                                        <div class="invalid-feedback">Please provide a valid zip.</div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-check">
                                                            <input class="form-check-input" id="invalid-check-wizard"
                                                                type="checkbox" value="" required="">
                                                            <label class="form-check-label mb-0 d-block"
                                                                for="invalid-check-wizard">Remember me for next
                                                                time</label>
                                                            <div class="invalid-feedback">You must agree before submitting.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <label class="form-label"
                                                            for="exampleFormControlTextarea-01">Other Notes</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea-01" rows="3"
                                                            placeholder="Enter your queries..."></textarea>
                                                    </div>
                                                    <div class="col-12 text-end">
                                                        <button class="btn btn-primary">Proceed to Next<i
                                                                class="fa fa-truck proceed-next pe-2"></i></button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane fade shipping-wizard" id="ship-wizard" role="tabpanel"
                                                aria-labelledby="ship-wizard-tab">
                                                <h3>Shipping Information</h3>
                                                <p class="f-light">Fill up the following information to send you the order
                                                </p>
                                                <div class="shipping-title">
                                                    <h3 class="mb-2">Saved Address</h3>
                                                    <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalgetbootstrap"
                                                        data-whatever="@getbootstrap"> <i
                                                            class="fa fa-plus-square f-20"></i></button>
                                                    <div class="modal fade" id="exampleModalgetbootstrap" tabindex="-1"
                                                        role="dialog" aria-labelledby="exampleModalgetbootstrap"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5>Information</h5>
                                                                    <button class="btn-close py-0" type="button"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form class="row g-3 needs-validation" novalidate="">
                                                                        <div class="col-12">
                                                                            <label class="form-label"
                                                                                for="validationCustom01">Name</label>
                                                                            <input class="form-control"
                                                                                id="validationCustom01" type="text"
                                                                                placeholder="Enter your name"
                                                                                required="">
                                                                            <div class="valid-feedback">Looks good!</div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <label class="form-label"
                                                                                for="validationAddress-a">Address</label>
                                                                            <textarea class="form-control" id="validationAddress-a" rows="3" placeholder="Enter your address..."></textarea>
                                                                            <div class="valid-feedback">Looks good!</div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <label class="form-label w-100"
                                                                                for="addressType-a">Address Type
                                                                                <select class="form-select"
                                                                                    id="addressType-a" required="">
                                                                                    <option selected="" value="">
                                                                                        Home</option>
                                                                                    <option>Office</option>
                                                                                </select>
                                                                            </label>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <label for="contact">Contact No</label>
                                                                            <input class="form-control" id="contact"
                                                                                type="number" placeholder="123456789">
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button class="btn m-0" type="button"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <button class="btn btn-primary m-0"
                                                                        type="button">Save</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3">
                                                    <div class="col-xxl-4 col-sm-6">
                                                        <div class="card-wrapper border rounded-3 h-100 light-card">
                                                            <div class="collect-address">
                                                                <div class="d-flex gap-2 align-items-center">
                                                                    <div class="form-check radio radio-primary">
                                                                        <input class="form-check-input"
                                                                            id="shipping-choose1" type="radio"
                                                                            name="radio1" value="option1"
                                                                            checked="">
                                                                        <label class="form-check-label mb-0"
                                                                            for="shipping-choose1">Home</label>
                                                                    </div>
                                                                </div>
                                                                <div class="card-icon"><i class="fa fa-pencil"></i><i
                                                                        class="fa fa-trash-o"></i></div>
                                                            </div>
                                                            <div class="shipping-address">
                                                                <h3>Filomena Green </h3><span>
                                                                    Address: 2211 Fruitville Rd, Sarasota, Florida, US
                                                                    34237</span><span>
                                                                    Contact: (941) 321-5643</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-4 col-sm-6">
                                                        <div class="card-wrapper border rounded-3 h-100 light-card">
                                                            <div class="collect-address">
                                                                <div class="d-flex gap-2 align-items-center">
                                                                    <div class="form-check radio radio-primary">
                                                                        <input class="form-check-input"
                                                                            id="shipping-choose2" type="radio"
                                                                            name="radio1" value="option1"
                                                                            checked="">
                                                                        <label class="form-check-label mb-0"
                                                                            for="shipping-choose2">Work</label>
                                                                    </div>
                                                                </div>
                                                                <div class="card-icon"><i class="fa fa-pencil"></i><i
                                                                        class="fa fa-trash-o"></i></div>
                                                            </div>
                                                            <div class="shipping-address">
                                                                <h3>Ms. Ila Runte DDS</h3><span>
                                                                    Address: 1531 E 23rd St S, Independence, Mississippi, US
                                                                    64055</span><span>
                                                                    Contact: (816) 252-4500</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="mt-4 mb-2">Shipping Method</h3>
                                                <div class="row shipping-method g-3">
                                                    <div class="col-sm-6">
                                                        <div class="card-wrapper border rounded-3 h-100 light-card">
                                                            <div class="form-check radio radio-primary">
                                                                <input class="form-check-input" id="shipping-choose3"
                                                                    type="radio" name="radio2" value="option1"
                                                                    checked="">
                                                                <label class="form-check-label mb-0"
                                                                    for="shipping-choose3">Standard Delivery - Free</label>
                                                            </div>
                                                            <p>Estimated 5-7 days shipping</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="card-wrapper border rounded-3 h-100 light-card">
                                                            <div class="form-check radio radio-primary">
                                                                <input class="form-check-input" id="shipping-choose4"
                                                                    type="radio" name="radio2" value="option1"
                                                                    checked="">
                                                                <label class="form-check-label mb-0"
                                                                    for="shipping-choose4">Express Delivery - $24</label>
                                                            </div>
                                                            <P>Estimated 1-2 days shipping</P>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 text-end">
                                                        <button class="btn btn-primary">Proceed to Next<i
                                                                class="fa fa-truck proceed-next pe-2"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade shipping-wizard" id="payment-wizard"
                                                role="tabpanel" aria-labelledby="payment-wizard-tab">
                                                <h3>Payment Information</h3>
                                                <p class="f-light">Fill up the following information to send you the order
                                                </p>
                                                <div class="payment-info-wrapper">
                                                    <div class="row shipping-method g-3">
                                                        <div class="col-12">
                                                            <div class="card-wrapper border rounded-3 light-card">
                                                                <div>
                                                                    <div class="form-check radio radio-primary">
                                                                        <input class="form-check-input"
                                                                            id="shipping-choose5" type="radio"
                                                                            name="radio3" value="option1"
                                                                            checked="">
                                                                        <label class="form-check-label mb-0 f-w-600"
                                                                            for="shipping-choose5">Paypal</label>
                                                                    </div>
                                                                    <p>You will be taken to the paypal website to finish
                                                                        your transaction safely</p>
                                                                </div>
                                                                <div> <img
                                                                        src="{{ asset('assets/images/checkout/paypal.png') }}"
                                                                        alt="paypal"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="card-wrapper border rounded-3 pay-info light-card">
                                                                <div>
                                                                    <div>
                                                                        <div class="form-check radio radio-primary">
                                                                            <input class="form-check-input"
                                                                                id="shipping-choose6" type="radio"
                                                                                name="radio3" value="option1">
                                                                            <label class="form-check-label mb-0 f-w-600"
                                                                                for="shipping-choose6">Credit Card</label>
                                                                        </div>
                                                                        <P>Transferring money securely through your bank
                                                                            account. Mastercard, Visa, Discover, and Stripe
                                                                            are all accepted</P>
                                                                    </div>
                                                                    <div> <img
                                                                            src="{{ asset('assets/images/forms/credit-card.png') }}"
                                                                            alt="card"></div>
                                                                </div>
                                                                <form class="row g-3 needs-validation" novalidate="">
                                                                    <div class="col-md-12">
                                                                        <label class="form-label"
                                                                            for="placeholdername">Card Holder</label>
                                                                        <input class="form-control" id="placeholdername"
                                                                            type="text" required=""
                                                                            placeholder="Enter card holder name">
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label class="form-label" for="holdernumber">Card
                                                                            Number</label>
                                                                        <input class="form-control" id="holdernumber"
                                                                            type="text" required=""
                                                                            placeholder="xxxx xxxx xxxx xxxx">
                                                                        <div class="invalid-feedback">Please enter your
                                                                            valid number</div>
                                                                        <div class="valid-feedback">
                                                                            Looks's Good!</div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label class="form-label"
                                                                            for="expirationdates">Expiration(MM/YY)</label>
                                                                        <input class="form-control" id="expirationdates"
                                                                            type="number" required=""
                                                                            placeholder="xx/xx">
                                                                        <div class="invalid-feedback">Please enter your
                                                                            valid number</div>
                                                                        <div class="valid-feedback">
                                                                            Looks's Good!</div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label class="form-label"
                                                                            for="cvvNumber-c">CVV</label>
                                                                        <input class="form-control" id="cvvNumber-c"
                                                                            type="text" required="">
                                                                        <div class="invalid-feedback">Please enter your
                                                                            valid number</div>
                                                                        <div class="valid-feedback">
                                                                            Looks's Good!</div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <label class="form-label" for="formFile3">Upload
                                                                            Documentation</label>
                                                                        <input class="form-control" id="formFile3"
                                                                            type="file" aria-label="file example"
                                                                            required="">
                                                                        <div class="invalid-feedback">Invalid form file
                                                                            selected</div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                id="invalidCheck-c" type="checkbox"
                                                                                value="" required="">
                                                                            <label class="form-check-label"
                                                                                for="invalidCheck-c">All the above
                                                                                information is correct</label>
                                                                            <div class="invalid-feedback">You must agree
                                                                                before submitting.</div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="card-wrapper border rounded-3 light-card">
                                                                <div>
                                                                    <div class="form-check radio radio-primary">
                                                                        <input class="form-check-input"
                                                                            id="shipping-choose7" type="radio"
                                                                            name="radio3" value="option1">
                                                                        <label class="form-check-label mb-0 f-w-600"
                                                                            for="shipping-choose7">Cash On
                                                                            Delivery</label>
                                                                    </div>
                                                                    <p>After your order is delivered, make a cash payment
                                                                    </p>
                                                                </div>
                                                                <div> <img
                                                                        src="{{ asset('assets/images/forms/delivery.png') }}"
                                                                        alt="delivery"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 text-end">
                                                            <button class="btn btn-primary">Proceed to Next<i
                                                                    class="fa fa-truck proceed-next pe-2"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade shipping-wizard finish-wizard1" id="finish-wizard"
                                                role="tabpanel" aria-labelledby="finish-wizard-tab">
                                                <div class="order-confirm"><img
                                                        src="{{ asset('assets/images/gif/dashboard-8/successful.gif') }}"
                                                        alt="popper">
                                                    <h5>Thank you! Your order is confirmed.</h5>
                                                    <p class="mb-0">An email with your order's specifics will be sent to
                                                        you as order confirmation.</p>
                                                    <p class="text-center f-w-600 mt-2">Order ID: <a
                                                            class="text-decoration-underline"
                                                            href="javascript:void(0)">GE34598 </a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="shipping-info">
                                            <h5>Current Cart </h5>
                                            <div class="overflow-auto">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Product</th>
                                                            <th scope="col">Product Detail </th>
                                                            <th scope="col">Price </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td> <img src="{{ asset('assets/images/product/13.png') }}"
                                                                    alt="t-shirt"></td>
                                                            <td>
                                                                <div>
                                                                    <h3>T-shirt </h3><span>$98 * 2</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <p>$400</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td> <img
                                                                    src="{{ asset('assets/images/email-template/4.png') }}"
                                                                    alt="headphone"></td>
                                                            <td>
                                                                <div>
                                                                    <h3>i Phone</h3><span>$4*2</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <p>$450</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td> <img src="{{ asset('assets/images/product/2.png') }}"
                                                                    alt="headphone"></td>
                                                            <td>
                                                                <div>
                                                                    <h3>T-shirt </h3><span>$10 * 2</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <p>$234</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td> <img
                                                                    src="{{ asset('assets/images/dashboard-2/product/2.png') }}"
                                                                    alt="headphone"></td>
                                                            <td>
                                                                <div>
                                                                    <h3>Chairs</h3><span>$98 * 2</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <p>$200</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td>Sub Total :</td>
                                                            <td colspan="2">$1284.00 </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Discount :</td>
                                                            <td colspan="2">$20.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shipping Charge :</td>
                                                            <td colspan="2">$100.78</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tax :</td>
                                                            <td colspan="2">$205.34</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Total (USD) :</td>
                                                            <td colspan="2">$1569.7</td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Container-fluid Ends-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/form-wizard/form-wizard.js') }}"></script>
    <script src="{{ asset('assets/js/form-wizard/image-upload.js') }}"></script>
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection
