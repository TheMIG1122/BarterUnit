<?php require_once '../resources/config.php'; validate_edc_login(); update_edc();  ?>
<?php
    $edc = get_edc_info($_SESSION['edc_id']);
    extract($edc);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="shortcut icon" href="../images/banners/ubi-home-banner.png">

    <!-- Bootstrap / Style CSS -->
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../js/wickedpicker.min.js"></script>
    <script type="text/javascript">
        var options = {
          title: '',

      };
      $('.timepicker').wickedpicker(options);
      $('.timepicker').val('');

  </script>
    <title>EDC Edit Form</title>
</head>

<body>
    <input type="hidden" id="email_availabilty">
    <form method="POST">
        <section class="registerFoms">
            <div class="container p-0">
                <div class="row no-gutters formFS">
                    <div class="col-md-5">
                        <div class="graph13">
                            <img class="img-fluid" src="../images/graphics/graphic-16.png" alt="">

                            <div class="leftTitle">
                                <h2>ECONOMIC <br>
                                    DEVELOPMENT <br>
                                COMMITTEE ( EDC)</h2>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-7">
                        <div class="p-3 text-right pr-5 formActionBtns">
                            <a href="#">Edit Registration</a>
                        </div>
                        <div class="formBox pt-3 pb-3 pr-5 pl-0">
                            <h2 class="formTile">TELl US ABOUT YOUR BUSINESS</h2>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Business Legal Name </label>
                                        <input name="business_name" type="text" class="form-control" value="<?php echo $business_name;?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Business Physical Address </label>
                                        <input name="business_address" type="text" class="form-control" value="<?php echo $business_address;?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Business Keywords </label>
                                        <input name="business_keywords" type="text" class="form-control" value="<?php echo $business_keywords;?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">City </label>
                                        <input name="business_city" type="text" class="form-control" value="<?php echo $business_city;?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">State </label>
                                        <input name="business_state" type="text" class="form-control" value="<?php echo $business_state;?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Zip Code </label>
                                        <input name="business_zipcode" type="text" class="form-control" value="<?php echo $business_zipcode;?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Country </label>
                                        <input name="business_country" type="text" class="form-control" value="<?php echo $business_country;?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Phone 1 </label>
                                        <input name="business_phone_1" type="text" class="form-control" value="<?php echo $business_phone_1;?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Phone 2</label>
                                        <input name="business_phone_2" type="text" class="form-control" value="<?php echo $business_phone_2;?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Website</label>
                                        <input name="business_website" type="text" class="form-control" value="<?php echo $business_website;?>">
                                    </div>
                                </div>
                            </div>

                            <h2 class="formTile mt-3">COmpany logo</h2>

                            <div class="uploadBtn mt-4" id="upload_6_main">
                                <div class="uploadContent">
                                    <h3>Upload Company Logo</h3>
                                    <div class="row">
                                        <?php echo genrate_download_resource_btn($business_logo); ?>
                                    </div>
                                    <p id="upload_6_msg">Please attach your company logo </p>
                                </div>
                                <div class="uploadContentBox">
                                    <div class="upload-btn-wrapper">
                                        <button class="btn upload_button upload_button_6"> <img src="../images/icons/uploadIcon.png" alt=""> </button>
                                        <input type="file" id="business_logo" multiple />
                                        <input type="hidden" name="business_logo" id="business_logo_val" value="<?php echo $business_logo;?>">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--  -->

                <img class="waveImage" src="../images/graphics/wave-10.png" alt="">
                <div class=" formSS formSS01">
                    <div class="row no-gutters">
                        <div class="col-md-5">
                            <div class="graph17 pl-5 pr-5 pt-5 pb-3">
                                <img class="img-fluid" src="../images/graphics/graphic-17.png" alt="">
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
                                                        <input  type="text" class="form-control timepicker monday_input" <?php echo_days($monday,0,"monday") ?>>
                                                    </div>
                                                    <div class="totext justify-content-center d-flex align-items-end">
                                                        to
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">&nbsp; </label>
                                                        <input  type="text" class="form-control timepicker monday_input" <?php echo_days($monday,0,"monday") ?>>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                             <label style="opacity: 0">a</label>
                                             <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input monday_checkbox close_checkbox" value="Closed" id="day_01" data-for="monday" <?php echo_days($monday,2,"monday") ?>>
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
                                                    <input  type="text" class="form-control timepicker tuesday_input" <?php echo_days($tuesday,0,"tuesday") ?>>
                                                </div>
                                                <div class="totext justify-content-center d-flex align-items-end">
                                                    to
                                                </div>
                                                <div class="form-group">
                                                    <label for="">&nbsp; </label>
                                                    <input  type="text" class="form-control timepicker tuesday_input" <?php echo_days($tuesday,0,"tuesday") ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                         <label style="opacity: 0">a</label>
                                         <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input tuesday_checkbox close_checkbox" value="Closed" id="day_02" data-for="tuesday" <?php echo_days($tuesday,2,"tuesday") ?>>
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
                                                <input  type="text" class="form-control timepicker wednesday_input" <?php echo_days($wednesday,0,"wednesday") ?>>
                                            </div>
                                            <div class="totext justify-content-center d-flex align-items-end">
                                                to
                                            </div>
                                            <div class="form-group">
                                                <label for="">&nbsp; </label>
                                                <input  type="text" class="form-control timepicker wednesday_input" <?php echo_days($wednesday,0,"wednesday") ?>>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                     <label style="opacity: 0">a</label>
                                     <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input wednesday_checkbox close_checkbox" value="Closed" id="day_03" data-for="wednesday" <?php echo_days($wednesday,2,"wednesday") ?>>
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
                                            <input  type="text" class="form-control timepicker thursday_input" <?php echo_days($thursday,0,"thursday") ?>>
                                        </div>
                                        <div class="totext justify-content-center d-flex align-items-end">
                                            to
                                        </div>
                                        <div class="form-group">
                                            <label for="">&nbsp; </label>
                                            <input  type="text" class="form-control timepicker thursday_input" <?php echo_days($thursday,0,"thursday") ?>>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                 <label style="opacity: 0">a</label>
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input thursday_checkbox close_checkbox" value="Closed" id="day_04" data-for="thursday" <?php echo_days($thursday,2,"thursday") ?>>
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
                                        <input  type="text" class="form-control timepicker friday_input" <?php echo_days($friday,0,"friday") ?>>
                                    </div>
                                    <div class="totext justify-content-center d-flex align-items-end">
                                        to
                                    </div>
                                    <div class="form-group">
                                        <label for="">&nbsp; </label>
                                        <input  type="text" class="form-control timepicker friday_input" <?php echo_days($friday,0,"friday") ?>>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                             <label style="opacity: 0">a</label>
                             <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input friday_checkbox close_checkbox" value="Closed" id="day_05" data-for="friday" <?php echo_days($friday,2,"friday") ?>>
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
                                    <input  type="text" class="form-control timepicker saturday_input" <?php echo_days($saturday,0,"saturday") ?>>
                                </div>
                                <div class="totext justify-content-center d-flex align-items-end">
                                    to
                                </div>
                                <div class="form-group">
                                    <label for="">&nbsp; </label>
                                    <input  type="text" class="form-control timepicker saturday_input" <?php echo_days($saturday,0,"saturday") ?>>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                         <label style="opacity: 0">a</label>
                         <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input saturday_checkbox close_checkbox" value="Closed" id="day_06" data-for="saturday" <?php echo_days($saturday,2,"saturday") ?>>
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
                                <input  type="text" class="form-control timepicker sunday_input" <?php echo_days($sunday,0,"sunday") ?>>
                            </div>
                            <div class="totext justify-content-center d-flex align-items-end">
                                to
                            </div>
                            <div class="form-group">
                                <label for="">&nbsp; </label>
                                <input  type="text" class="form-control timepicker sunday_input" <?php echo_days($sunday,0,"sunday") ?>>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                     <label style="opacity: 0">a</label>
                     <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input sunday_checkbox close_checkbox" value="Closed" id="day_07" data-for="sunday" <?php echo_days($sunday,2,"sunday") ?>>
                        <label class="custom-control-label" for="day_07"> <span><small>Closed</small></span></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
                    </div>

                    <div class="row no-gutters mt-5">

                        <div class="col-md-7">
                            <div class="formBox pt-3 pb-3 pl-5 pl-0">
                                <h2 class="formTile">Business Details</h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Business Owner Legal Name</label>
                                            <input name="business_owner_name" type="text" class="form-control" value="<?php echo $business_owner_name;?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Business Owner Phone</label>
                                            <input name="business_owner_phone" type="text" class="form-control" value="<?php echo $business_owner_phone;?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Year Founded</label>
                                            <input name="year_founded" type="text" class="form-control" value="<?php echo $year_founded;?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Tax ID Number</label>
                                            <input name="tax_id_number" type="text" class="form-control" value="<?php echo $tax_id_number;?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Employer Identification Number (EIN)</label>
                                            <input name="ein_number" type="text" class="form-control" value="<?php echo $ein_number;?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Business License Number</label>
                                            <input name="business_license_number" type="text" class="form-control" value="<?php echo $business_license_number;?>">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-5 d-flex align-items-center">
                            <div class="graph17 pl-5 pr-5 pt-1">
                                <img class="img-fluid" src="../images/graphics/graphic-18.png" alt="">
                            </div>

                        </div>
                    </div>

                </div>

                <!--  -->
                <img class="waveImage" src="../images/graphics/wave-11.png" alt="">

                <div class="row no-gutters formtS">

                    <div class="col-md-7">
                        <div class="formBox pt-3 pb-3 pl-5 pr-0">
                            <h2 class="formTile">provide legal documents</h2>

                            <div class="uploadBtn mt-5" id="upload_7_main">
                                <div class="uploadContent">
                                    <h3>Business Owner State Identification or
                                    Driver’s License or U.S Passport</h3>
                                    <div class="row">
                                        <?php echo genrate_download_resource_btn($identity_document); ?>
                                    </div>
                                    <p id="upload_7_msg">Upload proof of identity document</p>
                                </div>
                                <div class="uploadContentBox">
                                    <div class="upload-btn-wrapper">
                                        <button class="btn upload_button upload_button_7"> <img src="../images/icons/uploadIcon.png" alt=""> </button>
                                        <input type="file" id="identity_document_edc" multiple />
                                        <input type="hidden" name="identity_document" id="identity_document_edc_val" value="<?php echo $identity_document?>">
                                    </div>
                                </div>
                            </div>

                            <div class="uploadBtn mt-2"  id="upload_8_main">
                                <div class="uploadContent">
                                    <h3>ARTCILES OF ORGANIZATION</h3>
                                    <div class="row">
                                        <?php echo genrate_download_resource_btn($articles_of_organization); ?>
                                    </div>
                                    <p id="upload_8_msg">Upload your document</p>
                                </div>
                                <div class="uploadContentBox">
                                    <div class="upload-btn-wrapper">
                                        <button class="btn upload_button upload_button_8"> <img src="../images/icons/uploadIcon.png" alt=""> </button>
                                        <input type="file" id="articles_of_organization_edc" multiple />
                                        <input type="hidden" name="articles_of_organization" id="articles_of_organization_edc_val" value="<?php echo $articles_of_organization?>">
                                    </div>
                                </div>
                            </div>

                            <div class="uploadBtn mt-2" id="upload_9_main">
                                <div class="uploadContent">
                                    <h3>OFFICIAL STATE OR CITY BUSINESS LICENSE DOCUMENT</h3>
                                    <div class="row">
                                        <?php echo genrate_download_resource_btn($official_state); ?>
                                    </div>
                                    <p id="upload_9_msg">Upload your document</p>
                                </div>
                                <div class="uploadContentBox">
                                    <div class="upload-btn-wrapper">
                                        <button class="btn  upload_button upload_button_9"> <img src="../images/icons/uploadIcon.png" alt=""> </button>
                                        <input type="file" id="official_state_edc" multiple />
                                        <input type="hidden" name="official_state" id="official_state_edc_val" value="<?php echo $official_state?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5 d-flex align-items-center justify-content-end position-relative">
                        <div class="graph15">
                            <img class="img-fluid" src="../images/graphics/graphic-15.png" alt="">
                        </div>

                        <div class="formSubmitBtn">
                            <button type="submit" name="update_edc" id="register_button">SUBMIT</button>
                        </div>

                    </div>

                </div>

            </div>
        </section>
    </form>
    <!--  -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/ajax_calls.js"></script>
    <script src="../js/inputmask.js"></script>
    <script src="../js/form_validation.js"></script>
    <script src="../js/alerts.js"></script>
</body>

</html>
 