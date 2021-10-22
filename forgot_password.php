<?php require_once 'resources/config.php'; validate_ubi_login_page(); ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/banners/ubi-home-banner.png">

    <!-- Bootstrap / Style CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style-01.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>Forgot Password</title>
</head>

<body>
    <form action="" method="POST">
        <section class="registerFoms">
            <div class="container p-0">
                <div class="row no-gutters formFS align-content-center">
                    <div class="col-md-5">
                        <div class="graph13">
                            <img class="img-fluid" src="images/graphics/graphic-13.png" alt="">
                        </div>

                    </div>

                    <div class="col-md-7">
                        <div class="p-3 text-right pr-5 formActionBtns">
                            <a href="<?php echo $_GET['type']."-login.php" ?>" >Sign in</a> <a href="<?php echo $_GET['type']."-register.form.php" ?>.php" class="active">Sign up</a>
                        </div>
                        <div class="formBox pt-3 pb-3 pr-5 pl-0">
                            <h2 class="formTile">Forgot Password</h2>



                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Email Address </label>
                                        <input name="email" type="text" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input name="forgot_password" type="submit" class="btn btn-primary w-100" value="RESET PASSWORD">
                                    </div>
                                </div>
                            </div>
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
        <script src="js/ajax_calls.js"></script>
        <script src="js/alerts.js"></script>


		<script type="text/javascript"> 
			function enter_correct_email() { swal({ title: "Error", text: "Email not found.", icon: "warning", 				buttons: {
				cancel: false,
				confirm: true,
			}, dangerMode: true, }).then((willDelete) => {
				if (willDelete) {
					window.location.href = window.location.href;
				} else {
					window.location.href = window.location.href;
				}
			}); } 

			function password_email_send() { swal({ title: "Success", text: "Check your email box. We have sent you an email with a reset password link. Thank you.", icon: "success", 				buttons: {
				cancel: false,
				confirm: true,
			}, dangerMode: true, }).then((willDelete) => {
				if (willDelete) {
					window.location.href = "index.php";
				} else {
					window.location.href = "index.php";
				}
			}); }

			function resend_forgot_email() { swal({ title: "Error", text: "We have already sent you a password reset link. Please see your junk, spam, social or other folders. If you have not received it, please press 'OK' to resend email reset link. Thank you.", icon: "warning", 				buttons: {
				cancel: true,
				confirm: true,
			}, dangerMode: true, }).then((willDelete) => {
				if (willDelete) {
					window.location.href = window.location.href+"&email_resend=true";
				} else {
					window.location.href = "index.php";
				}
			}); }
			</script>
        <?php check_forgot_email(); ?>
    </body>

    </html>
