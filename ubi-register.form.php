<?php require_once 'resources/config.php'; validate_ubi_login_page(); ?>
<!doctype html>
<html lang="en">

<head>
    <!--  meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/banners/ubi-home-banner.png">

    <!-- Bootstrap / Style CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>UBI Register Form</title>
</head>

<body>
    <input type="hidden" id="email_availabilty">
    <form action="" method="POST" id="UBIForm">
        <section class="registerFoms">
            <div class="container p-0">
                <div class="row no-gutters formFS">
                    <div class="col-md-5">
                        <div class="graph13">
                            <img class="img-fluid" src="images/graphics/graphic-13.png" alt="">

                            <div class="leftTitle">
                                <h2>Universal Basic <br>
                                Income Program (UBI)</h2>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-7">
                        <div class="p-3 text-right pr-5 formActionBtns">
                            <a href="ubi-login.php" class="active">Sign in</a> <a href="#">Sign up</a>
                        </div>
                        <div class="formBox pt-3 pb-3 pr-5 pl-0">
                            <h2 class="formTile">Register</h2>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">I.D. Code </label>
                                        <input name="id_code" type="text" class="form-control validate_it" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Pocketbook Code </label>
                                        <input name="pocketbook_code" type="text" class="form-control validate_it" >
                                    </div>
                                </div>
                            </div>

                            <small class="formSmall">*Note: You MUST first download the BarterUnit mobile application and successfully sign up to obtain access to your I.D. Code
                                and Pocketbook Code. Your I.D. Code and Pocketbook Code information can be found in your profile page.
                            </small>

                            <h2 class="formTile" id="personal_information">Personal Information</h2>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">First Name </label>
                                        <input name="first_name" type="text" class="form-control validate_it" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Middle Name </label>
                                        <input name="middle_name" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Last Name </label>
                                        <input name="last_name" type="text" class="form-control validate_it" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Date of Birth </label>
                                        <input name="date_of_birth" type="text" class="form-control validate_it" id="dob_mask" >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="ssn_number_confirm">
                                        <label class="custom-control-label" for="ssn_number_confirm"> <span><small>I don't have a SSN.</small></span></label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Social Security Number </label>
                                        <input name="social_security_number" type="text" class="form-control validate_it" id="ssn_mask" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Sex </label>
                                        <!-- <input name="sex" type="text" class="form-control" > -->
                                        <select class="form-control validate_it">
                                            <option hidden=""></option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Intersex">Intersex</option>
                                            <option value="Trans Person">Trans Person</option>
                                            <option value="Prefer not to say">Prefer not to say</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">State Driver’s License Number </label>
                                        <input name="driving_license_number" type="text" class="form-control first_validation">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">State Identification Number </label>
                                        <input name="stat_identification_number" type="text" class="form-control first_validation">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <p class="alert alert-danger text-center" id="field_error_div" style="display: none;">Please fill at least one of above</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" id="email_error">Email Address </label>
                                        <input name="email" type="email" class="form-control email_input validate_it" data-table="ubi_registrations" id="email_val" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" id="email_error1">Confirm Email Address </label>
                                        <input name="confirm_email" type="email" class="form-control email_input validate_it" id="confirm_email_val">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="password-div">
                                            <div class="input-div">
                                                <label for="" id="password_error_div">Password </label>
                                                <input name="password" type="password" class="form-control password_input validate_it" id="password_val"  autocomplete="off">
                                            </div>
                                            <div class="password-conditions-div">
                                                <div class="arrow-up"></div>
                                                <div class="password-conditions">
                                                    <p class="text-primary">Make sure you use</p>
                                                    <ol type="1" class="conditions-list fa-ul">
                                                        <li><i class="fa fa-check fa-li text-success"></i> <i class="fa fa-check fa-li text-success"></i> 8 characters</li>
                                                        <li><i class="fa fa-check fa-li text-success"></i> <i class="fa fa-check fa-li text-success"></i> Alphabetic Letters</li>
                                                        <li><i class="fa fa-check fa-li text-success"></i> <i class="fa fa-check fa-li text-success"></i> Numerics Letters</li>
                                                        <li><i class="fa fa-check fa-li text-success"></i> <i class="fa fa-check fa-li text-success"></i> Special characters</li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" id="confirm_password_error_div">Confirm Password </label>
                                        <input name="confirm_password" type="password" class="form-control password_input validate_it" id="confirm_password_val" autocomplete="off">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--  -->

                <img class="waveImage" src="images/graphics/wave-10.png" alt="">
                <div class="row no-gutters formSS">
                    <div class="col-md-5 d-flex align-items-center">
                        <div class="graph14">
                            <img class="img-fluid" src="images/graphics/graphic-14.png" alt="">
                        </div>

                    </div>

                    <div class="col-md-7">
                        <div class="formBox pt-3 pb-3 pr-5 pl-0">
                            <h2 class="formTile">current address</h2>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Address Number </label>
                                        <input name="address_number" type="text" class="form-control validate_it" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">City </label>
                                        <input name="city" type="text" class="form-control validate_it" >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">State </label>
                                        <input name="state" type="text" class="form-control validate_it" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Postal Code </label>
                                        <input name="postal_code" type="text" class="form-control validate_it" >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Country </label>
                                        <input name="country" type="text" class="form-control validate_it" >
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3 customRadtioBtn">
                                <div class="col-md-6 d-flex align-items-center">
                                    <label class="labelBols">Are you U.S. Citizen?</label>
                                </div>
                                <div class="col-md-6 text-right d-flex align-items-center justify-content-end">
                                    <div class="custom-control custom-radio custom-control-inline">

                                        <input name="are_you_us_citizen" type="radio" id="yes01" value="YES" name="usCiti" class="custom-control-input" checked>
                                        <label class="custom-control-label" for="yes01">YES</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">

                                        <input name="are_you_us_citizen" type="radio" value="NO" id="yes02" name="usCiti" class="custom-control-input">
                                        <label class="custom-control-label" for="yes02">NO</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3 customRadtioBtn">
                                <div class="col-md-6 d-flex align-items-center">
                                    <label class="labelBols">Have you ever been
                                        <br> convicted of a felony? </label>
                                    </div>
                                    <div class="col-md-6 text-right d-flex align-items-center justify-content-end">
                                        <div class="custom-control custom-radio custom-control-inline">

                                            <input name="have_you_ever_convicted" type="radio" id="yes03" value="YES" name="customRadio" class="custom-control-input" >
                                            <label class="custom-control-label" for="yes03">YES</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">

                                            <input name="have_you_ever_convicted" type="radio" id="yes04" value="NO" name="customRadio" class="custom-control-input" checked>
                                            <label class="custom-control-label" for="yes04">NO</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="labelBols mb-2" for="">If, so what were the charges? </label>
                                            <input name="have_you_ever_convicted_if" type="text" class="form-control maxInput">
                                        </div>
                                    </div>

                                </div>

                                <div class="row mt-3 customRadtioBtn">
                                    <div class="col-md-6 d-flex align-items-center">
                                        <label class="labelBols">Are you currently incarcerated? </label>
                                    </div>
                                    <div class="col-md-6 text-right d-flex align-items-center justify-content-end">
                                        <div class="custom-control custom-radio custom-control-inline">

                                            <input name="currently_incarcerated" type="radio" value="YES" id="yes05" name="currently" class="custom-control-input" >
                                            <label class="custom-control-label" for="yes05">YES</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">

                                            <input name="currently_incarcerated" type="radio" value="NO" id="yes06" name="currently" class="custom-control-input" checked>
                                            <label class="custom-control-label" for="yes06">NO</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="labelBols mb-2" for="">If so, what is your expected release date? </label>
                                            <input name="currently_incarcerated_if" type="text" class="form-control maxInput">
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                    <!--  -->
                    <img class="waveImage" src="images/graphics/wave-11.png" alt="">

                    <div class="row no-gutters formtS">

                        <div class="col-md-7">
                            <div class="formBox pt-3 pb-3 pl-5 pr-0">
                                <h2 class="formTile">provide proof of identity</h2>
                                <small class="formSmall mt-3 mb-3">Note: The Barter Unit Universal Basic Income program is applied globally. A foreigner applying MUST submit the following required documents.
                                </small>
                                <p class="alert alert-danger text-center" style="display: none;" id="upload_error_div">Please upload one of below</p>

                                <div class="uploadBtn mt-2" id="upload_1_main">
                                    <div class="uploadContent">
                                        <h3>CERTIFIED COPY OF BIRTH CERTIFICATE </h3>
                                        <p id="upload_1_msg">Upload proof of identity document</p>
                                    </div>
                                    <div class="uploadContentBox">
                                        <div class="upload-btn-wrapper">
                                            <button class="btn upload_button upload_button_1"> <img src="images/icons/uploadIcon.png" alt=""> </button>
                                            <input type="file" id="birth_certificate" class="second_validation" multiple />
                                            <input type="hidden" name="birth_certificate" id="birth_certificate_val">
                                        </div>
                                    </div>
                                </div>

                                <div class="uploadBtn mt-2" id="upload_2_main">
                                    <div class="uploadContent">
                                        <h3>NATIONAL PASSPORT (Recommended)</h3>
                                        <p id="upload_2_msg">Upload proof of identity document</p>
                                    </div>
                                    <div class="uploadContentBox">
                                        <div class="upload-btn-wrapper">
                                            <button class="btn upload_button upload_button_2"> <img src="images/icons/uploadIcon.png" alt=""> </button>
                                            <input type="file" id="us_passport" class="second_validation" multiple />
                                            <input type="hidden" name="us_passport" id="us_passport_val">
                                        </div>
                                    </div>
                                </div>

                                <div class="uploadBtn mt-2" id="upload_3_main">
                                    <div class="uploadContent">
                                        <h3>STATE IDENTIFICATION CARD / STATE DRIVERS LICENSE CARD</h3>
                                        <p id="upload_3_msg">Upload your card</p>
                                    </div>
                                    <div class="uploadContentBox">
                                        <div class="upload-btn-wrapper">
                                            <button class="btn upload_button upload_button_3"> <img src="images/icons/uploadIcon.png" alt=""> </button>
                                            <input type="file" id="identity_document" class="second_validation" multiple />
                                            <input type="hidden" name="identity_document" id="identity_document_val">
                                        </div>
                                    </div>
                                </div>

                                <div class="uploadBtn mt-2" id="upload_4_main">
                                    <div class="uploadContent">
                                        <h3>PERMANENT RESIDENT CARD OR FOREIGN PASSPORT WITH AN APPROVED FORM I-94</h3>
                                        <p id="upload_4_msg">Upload you card</p>
                                    </div>
                                    <div class="uploadContentBox">
                                        <div class="upload-btn-wrapper">
                                            <button class="btn upload_button upload_button_4"> <img src="images/icons/uploadIcon.png" alt=""> </button>
                                            <input type="file" id="resident_card" class="second_validation" multiple />
                                            <input type="hidden" name="resident_card" id="resident_card_val">
                                        </div>
                                    </div>
                                </div>

                                <div class="uploadBtn mt-2" id="upload_5_main">
                                    <div class="uploadContent">
                                        <h3>AND SOCIAL SECUIRTY NUMBER (SNN) OR NATIONAL IDENTIFCATION NUMBER EQUIVALENT. YOU MUST SHOW PROOF OF YOUR SOCIAL SECURITY CARD AND/OR OR NATIONAL IDENTIFCATION NUMBER EQUIVALENT WITH ONE OF THE ABOVE FOUR IDENTIFICATION DOCUMENTS</h3>
                                        <p id="upload_5_msg">Upload proof of identity document </p>
                                        <small class="formSmall mt-1 mb-1">Examples of equivalent National Identification Number would be as followed: Mexico, CURP | Canada, SIN | Africa, NIN | Philippines. PSN | Honk Kong, HKID | India, UIDA | France, INSEE | Australia, TFN
                                        </small>
                                    </div>
                                    <div class="uploadContentBox">
                                        <div class="upload-btn-wrapper">
                                            <button class="btn upload_button upload_button_5"> <img src="images/icons/uploadIcon.png" alt=""> </button>
                                            <input type="file"  id="ssn_card" multiple />
                                            <input type="hidden" name="ssn_card" id="ssn_card_val">
                                        </div>
                                    </div>
                                </div>

                                <small class="formSmall mt-3 mb-3">*Note: You MUST first download the BarterUnit mobile application and successfully sign up to obtain access to your I.D. Code
                                    and Pocketbook Code. Your I.D. Code and Pocketbook Code information can be found in your profile page.
                                </small>


                                <div class="checkBoxBtn">
                                    <div class="custom-control custom-checkbox">
                                        <input name="agree" type="checkbox" value="YES" class="custom-control-input" id="customCheck1" checked >
                                        <label class="custom-control-label" for="customCheck1">I certify that the information submitted in this application is true and correct to the best of my knowledge. I further understand that any false statements may result in denial or revocation of the BarterUnit Universal Basic Income benefits. </label>
                                    </div>
                                </div>

                                <div class="checkBoxBtn mt-3 readCheckBox">
                                    <div class="custom-control custom-checkbox">
                                        <input name="agree_terms" type="checkbox" value="YES" class="custom-control-input" id="customCheck2" checked>
                                        <label class="custom-control-label" for="customCheck2"> <span>I have read, understand and agree to the BarterUnit Terms of Service and Privacy Policy.</span> </label>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-5 d-flex align-items-center justify-content-end position-relative">
                            <div class="graph15">
                                <img class="img-fluid" src="images/graphics/graphic-15.png" alt="">
                            </div>

                            <div class="formSubmitBtn">
                                <button type="submit" name="register_ubi" id="register_button">SUBMIT</button>
                            </div>

                        </div>

                    </div>

                </div>
            </section>
        </form>
        <!--  -->

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/ajax_calls.js?v=3"></script>
        <script src="js/alerts.js?v=3"></script>
        <script src="js/form_validation.js?v=3"></script>
        <script src="js/inputmask.js"></script>
        <?php #ubi_registration(); ?>
        <script>
            new WOW().init();
            $(window).scroll(function() {
                var sticky = $('.navbar'),
                scroll = $(window).scrollTop();

                if (scroll >= 200) sticky.addClass('fixed');
                else sticky.removeClass('fixed');
            });

            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();

                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });

            $(document).ready(function() {
                // console.clear();
            });
        </script>
    </body>

    </html>
