<?php require_once 'resources/config.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/banners/ubi-home-banner.png">

    <!-- Bootstrap / Style CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style-01.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.tag-editor.css">
    <title>EDC Register Form</title>
    <style type="text/css">
        .tag-editor li {
            display: block;
            float: left;
            overflow: hidden;
            margin: 3px 0;
            padding-top: 7px;
        }

        .tag-editor .placeholder {
            padding: 0 8px;
            padding-top: 7px;
            color: #bbb;
        }

        ul.tag-editor{
            border-radius: 5px;
            background-color: rgb(255, 255, 255);
            box-shadow: 0px 7px 13px 0px rgba(31, 32, 93, 0.09);
            height: 40px;
            border: 0;
            border-left: 4px solid #205db7;
        }
    </style>
</head>

<body>
    <input type="hidden" id="email_availabilty">
    <form method="POST" id="EDCForm">
        <section class="registerFoms">
            <div class="container p-0">
                <div class="row no-gutters formFS">
                    <div class="col-md-5">
                        <div class="graph13">
                            <img class="img-fluid" src="images/graphics/graphic-16.png" alt="">

                            <div class="leftTitle">
                                <h2>ECONOMIC <br>
                                    DEVELOPMENT <br>
                                COMMITTEE ( EDC)</h2>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-7">
                        <div class="p-3 text-right pr-5 formActionBtns">
                            <a href="edc-login.php" class="active">Sign in</a> <a href="#">Sign up</a>
                        </div>
                        <div class="formBox pt-3 pb-3 pr-5 pl-0">
                            <h2 class="formTile">TELl US ABOUT YOUR BUSINESS</h2>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">I.D. Code </label>
                                        <input name="id_code" type="text" class="form-control validate_it">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Pocketbook Code </label>
                                        <input name="pocketbook_code" type="text" class="form-control validate_it">
                                    </div>
                                </div>
                            </div>

                            <small class="formSmall">*Note: You MUST first download the BarterUnit mobile application and successfully sign up to obtain access to your I.D. Code
                                and Pocketbook Code. Your I.D. Code and Pocketbook Code information can be found in your profile page.
                            </small>

                            <div class="row mt-5 mb-3 customRadtioBtn">
                                <div class="col-md-6 d-flex align-items-center">
                                    <label class="labelBols">Accepts Barter Units?</label>
                                </div>
                                <div class="col-md-6 text-right d-flex align-items-center justify-content-end">
                                    <div class="custom-control custom-radio custom-control-inline">

                                        <input name="accepts_barter_units" type="radio" value="YES" id="yes01" name="usCiti" class="custom-control-input" checked="">
                                        <label class="custom-control-label" for="yes01">YES</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">

                                        <input name="accepts_barter_units" type="radio" value="NO" id="yes02" name="usCiti" class="custom-control-input">
                                        <label class="custom-control-label" for="yes02">NO</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Business Legal Name </label>
                                        <input name="business_name" type="text" class="form-control validate_it">
                                    </div>
                                </div>
                            </div>

                            <div class="row" id="disable_tab_key">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Business Keywords <small>(Only five keywords allowed)</small> </label>
                                        <textarea name="business_keywords" id="business_keywords_input" class="form-control "></textarea>
                                        <!-- <input name="business_keywords" type="text" class="form-control" id="business_keywords_input"> -->
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Business Physical Address </label>
                                        <input name="business_address" type="text" class="form-control validate_it">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">City </label>
                                        <input name="business_city" type="text" class="form-control validate_it">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">State </label>
                                        <input name="business_state" type="text" class="form-control validate_it">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Zip Code </label>
                                        <input name="business_zipcode" type="text" class="form-control validate_it">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Country </label>
                                        <input name="business_country" type="text" class="form-control validate_it">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Phone 1 </label>
                                        <input name="business_phone_1" type="text" class="form-control validate_it">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Phone 2</label>
                                        <input name="business_phone_2" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Website</label>
                                        <input name="business_website" type="text" class="form-control validate_it">
                                    </div>
                                </div>
                            </div>

                            <h2 class="formTile mt-3">COmpany logo</h2>

                            <div class="uploadBtn mt-4" id="upload_6_main">
                                <div class="uploadContent">
                                    <h3>Upload Company Logo</h3>
                                    <p id="upload_6_msg">Please attach your company logo </p>
                                </div>
                                <div class="uploadContentBox">
                                    <div class="upload-btn-wrapper">
                                        <button class="btn upload_button upload_button_6"> <img src="images/icons/uploadIcon.png" alt=""> </button>
                                        <input type="file" id="business_logo" multiple />
                                        <input type="hidden" name="business_logo" id="business_logo_val">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--  -->

                <img class="waveImage" src="images/graphics/wave-10.png" alt="">
                <div class=" formSS formSS01">
                    <div class="row no-gutters">
                        <div class="col-md-5">
                            <div class="graph17 pl-5 pr-5 pt-5 pb-3">
                                <img class="img-fluid" src="images/graphics/graphic-17.png" alt="">
                            </div>

                        </div>

                        <div class="col-md-7">
                            <div class="formBox pt-3 pb-3 pr-5 pl-0">
                                <h2 class="formTile">Operation Hours</h2>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="d-flex justify-content-between">
                                                    <div class="form-group">
                                                        <label for="">Monday </label>
                                                        <input name="monday[]" type="text" class="form-control timepicker monday_input">
                                                    </div>
                                                    <div class="totext justify-content-center d-flex align-items-end">
                                                        to
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">&nbsp; </label>
                                                        <input name="monday[]" type="text" class="form-control timepicker monday_input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                             <label style="opacity: 0">a</label>
                                             <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input monday_checkbox close_checkbox" value="Closed" id="day_01" data-for="monday">
                                                <label class="custom-control-label" for="day_01"> <span><small>Closed</small></span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="d-flex justify-content-between">
                                                <div class="form-group">
                                                    <label for="">Tuesday </label>
                                                    <input name="tuesday[]" type="text" class="form-control timepicker tuesday_input">
                                                </div>
                                                <div class="totext justify-content-center d-flex align-items-end">
                                                    to
                                                </div>
                                                <div class="form-group">
                                                    <label for="">&nbsp; </label>
                                                    <input name="tuesday[]" type="text" class="form-control timepicker tuesday_input">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                         <label style="opacity: 0">a</label>
                                         <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input tuesday_checkbox close_checkbox" value="Closed" id="day_02" data-for="tuesday">
                                            <label class="custom-control-label" for="day_02"> <span><small>Closed</small></span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="d-flex justify-content-between">
                                            <div class="form-group">
                                                <label for="">Wednesday </label>
                                                <input name="wednesday[]" type="text" class="form-control timepicker wednesday_input">
                                            </div>
                                            <div class="totext justify-content-center d-flex align-items-end">
                                                to
                                            </div>
                                            <div class="form-group">
                                                <label for="">&nbsp; </label>
                                                <input name="wednesday[]" type="text" class="form-control timepicker wednesday_input">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                     <label style="opacity: 0">a</label>
                                     <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input wednesday_checkbox close_checkbox" value="Closed" id="day_03" data-for="wednesday">
                                        <label class="custom-control-label" for="day_03"> <span><small>Closed</small></span></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-8">
                                    <div class="d-flex justify-content-between">
                                        <div class="form-group">
                                            <label for="">Thursday </label>
                                            <input name="thursday[]" type="text" class="form-control timepicker thursday_input">
                                        </div>
                                        <div class="totext justify-content-center d-flex align-items-end">
                                            to
                                        </div>
                                        <div class="form-group">
                                            <label for="">&nbsp; </label>
                                            <input name="thursday[]" type="text" class="form-control timepicker thursday_input">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                 <label style="opacity: 0">a</label>
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input thursday_checkbox close_checkbox" value="Closed" id="day_04" data-for="thursday">
                                    <label class="custom-control-label" for="day_04"> <span><small>Closed</small></span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-8">
                                <div class="d-flex justify-content-between">
                                    <div class="form-group">
                                        <label for="">Friday </label>
                                        <input name="friday[]" type="text" class="form-control timepicker friday_input">
                                    </div>
                                    <div class="totext justify-content-center d-flex align-items-end">
                                        to
                                    </div>
                                    <div class="form-group">
                                        <label for="">&nbsp; </label>
                                        <input name="friday[]" type="text" class="form-control timepicker friday_input">
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                             <label style="opacity: 0">a</label>
                             <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input friday_checkbox close_checkbox" value="Closed" id="day_05" data-for="friday">
                                <label class="custom-control-label" for="day_05"> <span><small>Closed</small></span></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-8">
                            <div class="d-flex justify-content-between">
                                <div class="form-group">
                                    <label for="">Saturday </label>
                                    <input name="saturday[]" type="text" class="form-control timepicker saturday_input">
                                </div>
                                <div class="totext justify-content-center d-flex align-items-end">
                                    to
                                </div>
                                <div class="form-group">
                                    <label for="">&nbsp; </label>
                                    <input name="saturday[]" type="text" class="form-control timepicker saturday_input">
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                         <label style="opacity: 0">a</label>
                         <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input saturday_checkbox close_checkbox" value="Closed" id="day_06" data-for="saturday">
                            <label class="custom-control-label" for="day_06"> <span><small>Closed</small></span></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-8">
                        <div class="d-flex justify-content-between">
                            <div class="form-group">
                                <label for="">Sunday </label>
                                <input name="sunday[]" type="text" class="form-control timepicker sunday_input">
                            </div>
                            <div class="totext justify-content-center d-flex align-items-end">
                                to
                            </div>
                            <div class="form-group">
                                <label for="">&nbsp; </label>
                                <input name="sunday[]" type="text" class="form-control timepicker sunday_input">
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                     <label style="opacity: 0">a</label>
                     <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input sunday_checkbox close_checkbox" value="Closed" id="day_07" data-for="sunday">
                        <label class="custom-control-label" for="day_07"> <span><small>Closed</small></span></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<div class="row no-gutters mt-5" id="business_details">

    <div class="col-md-7">
        <div class="formBox pt-3 pb-3 pl-5 pl-0">
            <h2 class="formTile">Business Details</h2>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" id="email_error">Email Address </label>
                        <input name="email" type="email" class="form-control email_input validate_it" data-table="edc_registrations" id="email_val">
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
                                <input name="password" type="password" class="form-control password_input validate_it" id="password_val" autocomplete="off">
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
                        <input name="confirm_password" type="password" class="form-control password_input validate_it" id="confirm_password_val"  autocomplete="off">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Business Owner Legal Name</label>
                        <input name="business_owner_name" type="text" class="form-control validate_it">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Business Owner Phone</label>
                        <input name="business_owner_phone" type="text" class="form-control validate_it">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Year Founded</label>
                        <input name="year_founded" type="text" class="form-control validate_it">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Tax ID Number</label>
                        <input name="tax_id_number" type="text" class="form-control third_validation">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Employer Identification Number (EIN)</label>
                        <input name="ein_number" type="text" class="form-control third_validation">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Business License Number</label>
                        <input name="business_license_number" type="text" class="form-control third_validation">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p class="alert alert-danger text-center" id="field_error_div" style="display: none;">Please fill at least one of above</p>
                </div>
            </div>

        </div>
    </div>

    <div class="col-md-5 d-flex align-items-center">
        <div class="graph17 pl-5 pr-5 pt-1">
            <img class="img-fluid" src="images/graphics/graphic-18.png" alt="">
        </div>

    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <small class="formSmall01 pl-5 pr-5">*Note: All ‘Business Details’ and business ‘Legal Document’ information provided is kept confidential. We will not share, sell, rent, trade or give away your ‘Business Details’
            and/or business ‘Legal Document’ information including your Personal Identifiable information with other parties.
        </small>
    </div>
</div>

</div>

<!--  -->
<img class="waveImage" src="images/graphics/wave-11.png" alt="">

<div class="row no-gutters formtS">

    <div class="col-md-7">
        <div class="formBox pt-3 pb-3 pl-5 pr-0">
            <h2 class="formTile">provide legal documents</h2>
            <small class="formSmall mt-3 mb-3">Note: The Barter Unit Economic Development Committee (BUEDC) program is applied globally. A foreign merchant applying MUST submit the following required documents.
                                </small>
            <p class="alert alert-danger text-center" style="display: none;" id="upload_error_div">Please upload one of below</p>

            <div class="uploadBtn mt-2" id="upload_7_main">
                <div class="uploadContent">
                    <h3>BUSINESS OWNER STATE IDENTIFICATION OR DRIVER’S LICENSE OR PASSPORT</h3>
                    <p id="upload_7_msg">Upload proof of identity document</p>
                </div>
                <div class="uploadContentBox">
                    <div class="upload-btn-wrapper">
                        <button class="btn upload_button upload_button_7"> <img src="images/icons/uploadIcon.png" alt=""> </button>
                        <input type="file" id="identity_document_edc" class="forth_validation" multiple />
                        <input type="hidden" name="identity_document" id="identity_document_edc_val">
                    </div>
                </div>
            </div>

            <div class="uploadBtn mt-2"  id="upload_8_main">
                <div class="uploadContent">
                    <h3>ARTICLES OF ORGANIZATION</h3>
                    <p id="upload_8_msg">Upload your document</p>
                </div>
                <div class="uploadContentBox">
                    <div class="upload-btn-wrapper">
                        <button class="btn upload_button upload_button_8"> <img src="images/icons/uploadIcon.png" alt=""> </button>
                        <input type="file" id="articles_of_organization_edc" class="forth_validation" multiple />
                        <input type="hidden" name="articles_of_organization" id="articles_of_organization_edc_val">
                    </div>
                </div>
            </div>

            <div class="uploadBtn mt-2" id="upload_9_main">
                <div class="uploadContent">
                    <h3>OFFICIAL STATE OR CITY BUSINESS LICENSE DOCUMENT</h3>
                    <p id="upload_9_msg">Upload your document</p>
                </div>
                <div class="uploadContentBox">
                    <div class="upload-btn-wrapper">
                        <button class="btn  upload_button upload_button_9"> <img src="images/icons/uploadIcon.png" alt=""> </button>
                        <input type="file" id="official_state_edc" class="forth_validation" multiple />
                        <input type="hidden" name="official_state" id="official_state_edc_val">
                    </div>
                </div>
            </div>

            <div class="checkBoxBtn mt-4">
                <div class="custom-control custom-checkbox">
                    <input name="agree" type="checkbox" class="custom-control-input" value="Agree" id="customCheck1" checked>
                    <label class="custom-control-label" for="customCheck1">I certify that the information submitted in this application is true and correct to the best of my knowledge. I further understand that any false statements may result in denial or revocation of the BarterUnit Economic Development benefits. </label>
                </div>
            </div>

            <div class="checkBoxBtn mt-3 readCheckBox">
                <div class="custom-control custom-checkbox">
                    <input name="agree_terms" type="checkbox" class="custom-control-input" value="Agree" id="customCheck2">
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
            <button type="submit" name="register_edc" id="register_button">SUBMIT</button>
        </div>

    </div>

</div>

</div>
</section>
</form>
<!--  -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<!-- <script src="js/jquery.js"></script>

-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/jquery.ui.js"></script>
<script src="js/jquery.caret.min.js"></script>
<script src="js/jquery.tag-editor.js"></script>
<script src="js/sweetalert.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/inputmask.js"></script>
<script src="js/ajax_calls.js?v=3"></script>
<script src="js/wickedpicker.min.js"></script>
<script src="js/alerts.js?v=3"></script>
<script src="js/form_validation.js?v=3"></script>
<script src="js/inputmask.js"></script>
<?php #edc_registration(); ?>
<script type="text/javascript">
    $(document).ready(function() {
        // $('#business_keywords_input').tagEditor({
        //     delimiter: ',',
        //     maxTags : 5
        // });

        $('#business_keywords_input').tagEditor({
            delimiter: ',',
            maxTags : 5
        });

        $("#disable_tab_key").keydown(function(objEvent) {
            if (objEvent.keyCode == 9) {
                $(".tag-editor").trigger("click");
                objEvent.preventDefault();
            }
        })
    })
    var options = {
      title: '',

  };

  $('.timepicker').wickedpicker(options);
  $('.timepicker').val('')
</script>
</body>

</html>
