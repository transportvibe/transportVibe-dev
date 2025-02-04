<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <style>
       .phone-container {
    display: flex;
    flex-direction: row;
    /* Align children horizontally */
    gap: 15px;
    /* Add space between dropdown and phone input */
    align-items: center;
    /* Vertically center align items */
}

.dropdown {
    width: 200px;
    height: 40px;
    font-size: 14px;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 5px;
    overflow: hidden;
    text-overflow: ellipsis;
}

.phone-input-wrapper {
    position: relative;
    width: 300px;
    /* Adjust width as needed */
}

.phone-number {
    width: 100%;
    padding-left: 70px;
    /* Reserve space for calling code */
    height: 40px;
    font-size: 14px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

.phone-number::placeholder {
    color: #aaa;
}

.phone-number:focus {
    outline: none;
    border-color: #007bff;
}

.calling-code-display {
    position: absolute;
    top: 0;
    left: 10px;
    height: 100%;
    display: flex;
    align-items: center;
    font-size: 14px;
    font-weight: bold;
    color: #333;
    pointer-events: none;
    margin-top: 5px;
}

.divider {
    position: absolute;
    top: 12px;
    left: 65px;
    height: 40px;
    width: 1px;
    background-color: #ccc;
}

/* General styles (no changes here) */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* back button */

.back-button-container {
    position: absolute;
    top: 25px;
    /* Adjust based on your layout */
    left: 80px;
    /* Adjust based on your layout */
}

.back-button {
    display: flex;
    align-items: center;
    text-decoration: none;
    font-size: 14px;
    /* Small font */
    font-weight: 500;
    /* Semi-bold text */
    transition: color 0.3s ease;
    color: black;
}

.back-button:hover {
    color: #0056b3;
    /* Darker blue on hover */
}



.phone-container input {
    flex: 1;
}

#callingCode {
    width: 80px;
    /* Adjust width of the calling code field */
    text-align: center;
}

#phoneNumber {
    flex: 2;
    /* Makes the phone number field take up more space */
}

#countryDropdown {
    width: 100%;
    margin-top: 10px;
}


/* Phone number input field styling */
.phone-container .number {
    flex: 3;
    border: none;
    padding: 8px;
    outline: none;
}

body {
    font-family: 'Red Hat Display', sans-serif;
    background: #eef6f9;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    color: #333;
    padding: 10px;
}

.container {
    display: flex;
    width: 75%;
    max-width: 1200px;
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    margin: 100px;
}

.left {
    flex: 1;
    padding: 40px 79px 80px;
    background: #eef6f9;
    display: flex;
    flex-direction: column;
}

.left img {
    width: 323px;
    margin-bottom: 20px;
}

.left h3 {
    font-size: 20px;
    font-weight: 600;
    margin: 15px 0;
}

.left p {
    margin-bottom: 15px;
    line-height: 1.6;
    color: #555;
}

.right {
    width: 95%;
    flex: 1;
    padding: 40px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    border-radius: 4px;
}

.right h2 {
    font-size: 32px;
    font-weight: 700;
    margin-bottom: 20px;
}

.google-btn {
    background: #4285F4;
    color: white;
    padding: 12px 15px;
    border-radius: 5px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 14px;
    font-weight: 500;
    cursor: pointer;
    border: none;
    margin-bottom: 15px;
}

.google-btn img {
    height: 18px;
    margin-right: 10px;
}

.form-title {
    font-size: 14px;
    color: #999;
    text-align: center;
    margin: 10px 0;
}

form {
    width: 100%;
}


.form-group label {
    font-size: 14px;
    color: #555;
    display: block;
    margin-bottom: 5px;
    margin-left: 56px;
    width: 369px;
    margin-top: 10px;
}

.form_group-country input {
    width: 100%;
    height: 44px;
    font-size: 14px;
    border: 1px solid #cac3c3;
    border-radius: 0px;
    margin-top: 10px;
}

.form-group input {
    width: 100%;
    height: 44px;
    font-size: 14px;
    border: 1px solid #cac3c3;
    border-radius: 0px;
    padding-left: 4px;
    margin-top: 10px;
}


.form-group select {
    width: 100%;
    /* padding: 13px; */
    font-size: 14px;
    border: 1px solid #cac3c3;
    border-radius: 0px;
    margin-top: 10px;
}

.btn-submit {
    background: #28a745;
    color: white;
    padding: 12px;
    border: none;
    border-radius: 5px;
    width: 100%;
    font-size: 16px;
    cursor: pointer;
}

.btn-submit:hover {
    background: #218838;
}

.form-footer {
    margin-top: 15px;
    font-size: 12px;
    color: #555;
}

.form-footer a {
    text-decoration: none;
    color: #28a745;
}

.form-footer a:hover {
    text-decoration: underline;
}


.or-separator {
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 20px 0;
}

.css-5fs0b8 {
    font-weight: 700;
    font-size: 26px;
    line-height: 28px;
    color: rgb(0, 0, 50);
    margin-top: 5px;
    margin-bottom: 9px;
}


.or-separator {
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 20px 0;
}

.or-separator .line {
    width: 140px;
    /* Adjust width if needed */
    border: none;
    border-top: 1px solid #ccc;
    /* Adjust color if needed */
    margin: 0;
}

.or-separator .or-text {
    margin: 0 15px;
    /* Add horizontal space between text and lines */
    font-weight: bold;
    color: #555;
    /* Adjust color if needed */
    font-size: 14px;
    /* Adjust size if needed */
}

.terms-container {
    display: flex;
    align-items: center;
    gap: 193px;
    /* Adds some space between the checkbox and label */
    font-size: 10px;
    /* Adjust text size if needed */
}

.terms-container input[type="checkbox"] {
    margin-bottom: 5px;
    margin-left: 0px;
    margin-top: 8px;
    margin-right: -178px;
}

#countryDropdown {
    width: 100px;
    height: 45px;
}

.form-control {
    border: 1px solid #000000;
    width: 100%;
    height: 44px;
    font-size: 14px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}



/* Media Queries for Responsiveness */

 @media (max-width: 922px) {
    /* .container {
        flex-direction: column;
        box-shadow: none;
    } */
    .container {
        display: block;
        width: 100%;
        max-width: 1215px;
        background: #fff;
        border-radius: 10px;
        overflow: hidden;
        margin: 0;
        margin-top: 50px;
    }

    .left,
    .right {
        padding: 20px;
        width: 100%;
    }

    .left {
        text-align: center;
    }

    .left img {
        margin: 0 auto 20px;
    }

    .left h3 {
        font-size: 18px;
        margin: 10px 0;
    }

    .left p {
        font-size: 14px;
    }

    .right h2 {
        font-size: 20px;
    }

    .google-btn {
        font-size: 12px;
        padding: 10px 12px;
    }

    .form-group label {
        font-size: 12px;
    }

    .btn-submit {
        font-size: 14px;
    }
}



@media (max-width: 480px) {
    body {
        padding: 5px;
    }
    /* .container {
        display: flex;
        width: 94%;
        max-width: 1200px;
        background: #fff;
        border-radius: 10px;
        overflow: hidden;
        margin: 0;
        margin-top: 50px;
    } */

    .left h3 {
        font-size: 16px;
    }

    .left p {
        font-size: 12px;
    }

    .right h2 {
        font-size: 18px;
    }

    .google-btn {
        font-size: 11px;
    }

    .form-group input,
    .form-group select {
        padding: 8px;
        font-size: 12px;
    }

    .btn-submit {
        font-size: 12px;
        padding: 10px;
    }

    .form-footer {
        font-size: 10px;
    }
} 
    </style>
</head>

<body>
    <div class="back-button-container">
        <a href="javascript:history.back()" class="back-button">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" style="margin:8px;" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.80769 8.46698L7.72341 12.3396L7.05565 13L2 8L7.05565 3L7.72341 3.66041L3.80769 7.53302L14 7.53302L14 8.46698L3.80769 8.46698Z" fill="#205CD4"></path>
            </svg> Back
        </a>
    </div>

    <div class="container">
        <div class="left">
            <img src="https://transportvibe.com/wp-content/uploads/2025/01/Logo-2-768x120.png" alt="Logo">
            <h3>Build credibility with reviews</h3>
            <p>Collect trustworthy reviews on an open, transparent platform millions of consumers use.</p>
            <h3>Strengthen your reputation</h3>
            <p>94% of users that sent automated review invites increased their rating.</p>
            <h3>Grow performance</h3>
            <p>Showcase your stars to convert more customers and outperform competitors.</p>
        </div>
        <div class="right">
            <h2>Create a free account</h2>
            <!-- Include the Google API -->
            <script src="https://accounts.google.com/gsi/client" async defer></script>
            <div id="g_id_onload"
                data-client_id="102313842809-v56b49dascomnoguhs6cfl726frklqil.apps.googleusercontent.com"
                data-context="signin"
                data-ux_mode="redirect"
                data-login_uri="{{ url('/dashboard') }}"
                data-auto_prompt="false">
            </div>
            <div class="g_id_signin" data-type="standard"></div>
            <!-- Add this between the Google Sign-In button and the email sign-up form -->
            <div class="or-separator">
                <hr class="line">
                <span class="or-text">OR</span>
                <hr class="line">
            </div>
            <div class="css-5fs0b8">Signup with email</div>
            <form id="signupForm">
                <div class="row">
                    <div class="form-group">
                        <!-- <label for="website">Website</label> -->
                        <input type="text" id="website" name="website" placeholder="Website">
                    </div>
                    <div class="form-group">
                        <!-- <label for="companyName">Company Name</label> -->
                        <input type="text" id="companyName" name="company_name" placeholder="Company Name">
                    </div>
                    <div class="form-group col-6">
                        <!-- <label for="firstName">First Name</label> -->
                        <input type="text" id="firstName" name="first_name" placeholder="First Name">
                    </div>
                    <div class="form-group col-6">
                        <!-- <label for="lastName">Last Name</label> -->
                        <input type="text" id="lastName" name="last_name" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                        <!-- <label for="jobTitle">Job Title</label> -->
                        <input type="text" id="jobTitle" name="job_title" placeholder="Job Title">
                    </div>
                    <div class="form-group">
                        <!-- <label for="workEmail">Work Email</label> -->
                        <input type="email" id="workEmail" name="email" placeholder="Work Email">
                    </div>
                    <div class="form-group">
                        <!-- <label for="workEmail">Work Email</label> -->
                        <input type="password" id="password" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <!-- <label for="workEmail">Work Email</label> -->
                        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password">
                    </div>

                    <div class="form_group-country phone-container">
                        <select id="countryDropdown" name="country" class="form-control">
                            <option value="">Country</option>
                        </select>

                        <!-- Phone Input Wrapper -->
                        <div class="phone-input-wrapper">
                            <input
                                type="text"
                                id="phoneNumber"
                                name="phone_number"
                                class="form-control phone-number"
                                placeholder="Phone number" />
                        </div>

                        <input type="hidden" name="calling_code" id="hiddenCallingCode" />

                    </div>

                    <!-- Additional fields -->
                    <select id="employees" name="employees" class="form-control" style="margin-top: 10px;">
                        <option value="">Select</option>
                        <option value="0-10">0-10</option>
                        <option value="11-50">11-50</option>
                        <option value="51-100">51-100</option>
                        <option value="101+">101+</option>
                    </select>
                    <br>
                    <select id="annual_revenue" name="annual_revenue" class="form-control" style="margin-top: 10px;">
                        <option value="">Select</option>
                        <option value="<$1M">&lt;$1M</option>
                        <option value="$1M-$10M">$1M-$10M</option>
                        <option value="$10M+">$10M+</option>
                    </select>
                    <br>

                    <!-- <div class="terms-container">
                        <input type="checkbox" id="terms" name="terms" required>
                        <label for="terms">I'd like to receive updates and a demo of premium plans</label>
                    </div> -->

                    <button id="submitBtn" class="btn-submit" style="margin-top: 10px;">Create Free Account</button>

                </div>
            </form>
            <p id="successMessage" style="display:none; color: green;"></p>
            <div class="form-footer">
                By signing up, you agree to our <a href="#">Privacy Policy</a> and <a href="#">Terms of Service</a>.
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <script>
        // // Initialize Google Sign-In
        // function handleCredentialResponse(response) {
        //     console.log("Encoded JWT ID token: " + response.credential);

        //     const decodedPayload = JSON.parse(atob(response.credential.split('.')[1]));
        //     console.log("User Data:", decodedPayload);

        //     alert("Logged in as: " + decodedPayload.name + " (Email: " + decodedPayload.email + ")");
        // }

        // window.onload = function() {
        //     google.accounts.id.initialize({
        //         client_id: "102313842809-v56b49dascomnoguhs6cfl726frklqil.apps.googleusercontent.com",
        //         callback: handleCredentialResponse,
        //         ux_mode: "redirect",
        //         redirect_uri: "http://localhost/transportvibe/public/register", // Adjust if needed
        //     });
        //     google.accounts.id.renderButton(
        //         document.getElementById("google-signin-btn"), {
        //             theme: "outline",
        //             size: "large",
        //             text: "continue_with",
        //         }
        //     );
        //     google.accounts.id.prompt(); // Shows the One Tap dialog
        // };

        $(document).ready(function() {
            $.ajax({
                url: 'https://app.transportvibe.com/api/countries',
                type: 'GET',
                success: function(response) {
                    const countries = response.data || [];
                    const countryDropdown = $('#countryDropdown');
                    countryDropdown.empty();
                    countryDropdown.append('<option value="">Country</option>');

                    countries.forEach((country) => {
                        countryDropdown.append(
                            `<option value="${country.name}" data-calling-code="${country.calling_code}">${country.name}</option>`
                        );
                    });
                },
                error: function(xhr, status, error) {
                    alert('An error occurred while fetching countries.');
                },
            });

            // On country change, set the phone number input field with the calling code
            $('#countryDropdown').on('change', function() {
                const divider = document.createElement("div");
                divider.className = "divider";
                phoneInputWrapper.appendChild(divider);
               
                const selectedOption = this.options[this.selectedIndex];
                const countryCode = selectedOption.getAttribute("data-calling-code");

                // Update the calling code display
                const callingCodeDisplay = document.querySelector(".calling-code-display");
                callingCodeDisplay.textContent = "+" + countryCode || "";

                // Store the calling code in a hidden field
                document.getElementById("hiddenCallingCode").value = countryCode || "";

                // Enable phone number input if a country is selected
                document.getElementById("phoneNumber").disabled = !countryCode;
            });

            // Initialize phone number input as disabled
            document.getElementById("phoneNumber").disabled = false;

            // Append calling code and divider dynamically
            const phoneInputWrapper = document.querySelector(".phone-input-wrapper");

            const callingCodeDisplay = document.createElement("span");
            callingCodeDisplay.className = "calling-code-display";
            callingCodeDisplay.textContent = ""; // Initially empty
            phoneInputWrapper.appendChild(callingCodeDisplay);


            $('#submitBtn').on('click', function(e) {
                e.preventDefault();
                let call_code = $('.calling-code-display').text();
                call_code = call_code.replace("+", "");
                const formData = {
                    website: $('input[name="website"]').val(),
                    company_name: $('input[name="company_name"]').val(),
                    password: $('input[name="password"]').val(),
                    password_confirmation: $('input[name="password_confirmation"]').val(),
                    first_name: $('input[name="first_name"]').val(),
                    last_name: $('input[name="last_name"]').val(),
                    job_title: $('input[name="job_title"]').val(),
                    email: $('input[name="email"]').val(),
                    country: $('#countryDropdown').val(),
                    phone_number: $('input[name="phone_number"]').val(),
                    calling_code: call_code,
                    employees: $('#employees').val(),
                    annual_revenue: $('#annual_revenue').val(),
                    // terms: $('#terms').prop('checked'),
                };
                console.log(formData);
                // Validate required fields
                if (!formData.email || !formData.first_name || !formData.last_name || !formData.password) {
                    alert('Please fill out all required fields and accept the terms.');
                    return;
                }

                $.ajax({
                    url: 'http://localhost/transportvibe/public/api/register',
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    data: JSON.stringify(formData),
                    success: function(response) {

                        $('.calling-code-display').text("");   // clear calling code

                        $('.divider').hide();
                        // Display success message
                        $('#successMessage').text('You have rgistered successfully!').show();
                        // Clear the form
                        $('form')[0].reset();

                        // Hide the message after 5 seconds
                        setTimeout(function() {
                            $('#successMessage').hide();
                        }, 5000);
                    },
                    error: function(xhr, status, error) {
                        if (xhr.responseJSON && xhr.responseJSON.errors) {
                            const errors = xhr.responseJSON.errors;
                            let errorMessage = 'An error occurred:\n';
                            Object.keys(errors).forEach((field) => {
                                errorMessage += `${field}: ${errors[field].join(', ')}\n`;
                            });
                            alert(errorMessage);
                        } else {
                            alert('An error occurred while registering. Please try again.');
                        }
                    },
                });
            });
        });
    </script>

</body>

</html>