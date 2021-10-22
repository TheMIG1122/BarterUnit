<?php require_once '../resources/config.php'; validate_ubi_login(); update_ubi();  ?>
<?php $ubi = get_ubi_info($_SESSION['ubi_id']); extract($ubi); ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="shortcut icon" href="../images/banners/ubi-home-banner.png">

    <!-- Bootstrap / Style CSS -->
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <title>UBI Edit Form</title>
</head>
<body>
    <input type="hidden" id="email_availabilty">
    <form action="" method="POST">
        <section class="registerFoms">
            <div class="container p-0">
                <div class="row no-gutters formFS">
                    <div class="col-md-5">
                        <div class="graph13">
                            <img class="img-fluid" src="../images/graphics/graphic-13.png" alt="">
                        </div>

                    </div>

                    <div class="col-md-7">
                        <div class="p-3 text-right pr-5 formActionBtns">
                           <a href="#">Edit Application</a>
                        </div>
                        <div class="formBox pt-3 pb-3 pr-5 pl-0">

                            <h2 class="formTile">Personal Information</h2>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">First Name </label>
                                        <input name="first_name" type="text" class="form-control" value="<?php echo $first_name; ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Middle Name </label>
                                        <input name="middle_name" type="text" class="form-control" value="<?php echo $middle_name; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Last Name </label>
                                        <input name="last_name" type="text" class="form-control" value="<?php echo $last_name; ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Date of Birth </label>
                                        <input name="date_of_birth" type="text" class="form-control" id="dob_mask" value="<?php echo $date_of_birth; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Social Security Number </label>
                                        <input name="social_security_number" type="text" class="form-control" value="<?php echo $social_security_number; ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">State Identification Number </label>
                                        <input name="stat_identification_number" type="text" class="form-control" value="<?php echo $stat_identification_number; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">State Driver’s License Number </label>
                                        <input name="driving_license_number" type="text" class="form-control" value="<?php echo $driving_license_number; ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Sex </label>
                                        <input name="sex" type="text" class="form-control" value="<?php echo $sex; ?>">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--  -->

                <img class="waveImage" src="../images/graphics/wave-10.png" alt="">
                <div class="row no-gutters formSS">
                    <div class="col-md-5 d-flex align-items-center">
                        <div class="graph14">
                            <img class="img-fluid" src="../images/graphics/graphic-14.png" alt="">
                        </div>

                    </div>

                    <div class="col-md-7">
                        <div class="formBox pt-3 pb-3 pr-5 pl-0">
                            <h2 class="formTile">current address</h2>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Address Number </label>
                                        <input name="address_number" type="text" class="form-control" value="<?php echo $address_number; ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">City </label>
                                        <input name="city" type="text" class="form-control" value="<?php echo $city; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">State </label>
                                        <input name="state" type="text" class="form-control" value="<?php echo $state; ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Postal Code </label>
                                        <input name="postal_code" type="text" class="form-control" value="<?php echo $postal_code; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Country </label>
                                        <input name="country" type="text" class="form-control" value="<?php echo $country; ?>">
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

                                            <input name="have_you_ever_convicted" type="radio" id="yes03" value="YES" name="customRadio" class="custom-control-input" <?php get_checked("YES",$have_you_ever_convicted); ?>>
                                            <label class="custom-control-label" for="yes03">YES</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">

                                            <input name="have_you_ever_convicted" type="radio" id="yes04" value="NO" name="customRadio" class="custom-control-input" <?php get_checked("YES",$have_you_ever_convicted); ?>>
                                            <label class="custom-control-label" for="yes04">NO</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="labelBols mb-2" for="">If, so what were the charges? </label>
                                            <input name="have_you_ever_convicted_if" type="text" class="form-control maxInput" value="<?php echo $have_you_ever_convicted_if; ?>">
                                        </div>
                                    </div>

                                </div>

                                <div class="row mt-3 customRadtioBtn">
                                    <div class="col-md-6 d-flex align-items-center">
                                        <label class="labelBols">Are you currently incarcerated? </label>
                                    </div>
                                    <div class="col-md-6 text-right d-flex align-items-center justify-content-end">
                                        <div class="custom-control custom-radio custom-control-inline">

                                            <input name="currently_incarcerated" type="radio" value="YES" id="yes05" name="currently" class="custom-control-input" <?php get_checked("YES",$currently_incarcerated); ?>>
                                            <label class="custom-control-label" for="yes05">YES</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">

                                            <input name="currently_incarcerated" type="radio" value="NO" id="yes06 	" name="currently" class="custom-control-input" <?php get_checked("YES",$currently_incarcerated); ?>>
                                            <label class="custom-control-label" for="yes06 	">NO</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="labelBols mb-2" for="">If so, what is your expected release date? </label>
                                            <input name="currently_incarcerated_if" type="text" class="form-control maxInput" value="<?php echo $currently_incarcerated_if; ?>">
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                    <!--  -->
                    <img class="waveImage" src="../images/graphics/wave-11.png" alt="">

                    <div class="row no-gutters formtS">

                        <div class="col-md-7">
                            <div class="formBox pt-3 pb-3 pl-5 pr-0">
                                <h2 class="formTile">provide proof of identity</h2>

                                <div class="uploadBtn mt-5" id="upload_1_main">
                                    <div class="uploadContent">
                                        <h3>Certified Copy of a U.S. Birth Certificate</h3>
                                        <div class="row">
                                        	<?php echo genrate_download_resource_btn($birth_certificate); ?>
                                        </div>
                                        <p id="upload_1_msg">Upload proof of identity document</p>
                                    </div>
                                    <div class="uploadContentBox">
                                        <div class="upload-btn-wrapper">
                                            <button class="btn upload_button upload_button_1"> <img src="../images/icons/uploadIcon.png" alt=""> </button>
                                            <input type="file" id="birth_certificate" multiple />
                                            <input type="hidden" name="birth_certificate" id="birth_certificate_val" value="<?php echo $birth_certificate; ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="uploadBtn mt-2" id="upload_2_main">
                                    <div class="uploadContent">
                                        <h3>U.S. Passport</h3>
                                        <div class="row">
                                        	<?php echo genrate_download_resource_btn($us_passport); ?>
                                        </div>
                                        <p id="upload_2_msg">Upload proof of identity document</p>
                                    </div>
                                    <div class="uploadContentBox">
                                        <div class="upload-btn-wrapper">
                                            <button class="btn upload_button upload_button_2"> <img src="../images/icons/uploadIcon.png" alt=""> </button>
                                            <input type="file" id="us_passport" multiple />
                                            <input type="hidden" name="us_passport" id="us_passport_val" value="<?php echo $us_passport; ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="uploadBtn mt-2" id="upload_3_main">
                                    <div class="uploadContent">
                                        <h3>STATE IDENTIFICAION CARD / STATE DRIVERS LICENSE CARD</h3>
                                        <div class="row">
                                        	<?php echo genrate_download_resource_btn($identity_document); ?>
                                        </div>
                                        <p id="upload_3_msg">Upload your card</p>
                                    </div>
                                    <div class="uploadContentBox">
                                        <div class="upload-btn-wrapper">
                                            <button class="btn upload_button upload_button_3"> <img src="../images/icons/uploadIcon.png" alt=""> </button>
                                            <input type="file" id="identity_document" multiple />
                                            <input type="hidden" name="identity_document" id="identity_document_val" value="<?php echo $identity_document; ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="uploadBtn mt-2" id="upload_4_main">
                                    <div class="uploadContent">
                                        <h3>Permanent Resident Card or Foreign Passport with an approved form I-94</h3>
                                        <div class="row">
                                        	<?php echo genrate_download_resource_btn($resident_card); ?>
                                        </div>
                                        <p id="upload_4_msg">Upload you card</p>
                                    </div>
                                    <div class="uploadContentBox">
                                        <div class="upload-btn-wrapper">
                                            <button class="btn upload_button upload_button_4"> <img src="../images/icons/uploadIcon.png" alt=""> </button>
                                            <input type="file" id="resident_card" multiple />
                                            <input type="hidden" name="resident_card" id="resident_card_val" value="<?php echo $resident_card; ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="uploadBtn mt-2" id="upload_5_main">
                                    <div class="uploadContent">
                                        <h3>AND Social Security Number Card (SSN). You must
                                            show proof of your Social Security Card with
                                        one of the above FOUR identification documents</h3>
                                        <div class="row">
                                        	<?php echo genrate_download_resource_btn($ssn_card); ?>
                                        </div>
                                        <p id="upload_5_msg">Upload proof of identity document</p>
                                    </div>
                                    <div class="uploadContentBox">
                                        <div class="upload-btn-wrapper">
                                            <button class="btn upload_button upload_button_5"> <img src="../images/icons/uploadIcon.png" alt=""> </button>
                                            <input type="file" id="ssn_card" multiple />
                                            <input type="hidden" name="ssn_card" id="ssn_card_val" value="<?php echo $ssn_card; ?>">
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
                                <button type="submit" name="update_ubi" id="register_button">UPDATE</button>
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
        <script src="../js/wow.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/ajax_calls.js"></script>
        <script src="../js/form_validation.js"></script>
        <script src="../js/alerts.js"></script>
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
