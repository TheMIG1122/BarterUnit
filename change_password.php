<?php require_once 'resources/config.php'; validate_ubi_login_page();
if (isset($_POST['password'])) {
	$password = $_POST['password'];
	$confirm_password = $_POST['confirmpassword'];
} else {
	$password = "";
	$confirm_password = "";
}
?>
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
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<title>Change Password</title>
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
							<h2 class="formTile">Change Password</h2>



							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<div class="password-div">
											<div class="input-div">
												<label for="" id="password_error_div">Password </label>
												<input name="password" type="password" class="form-control password_input" id="password_val" autocomplete="off">
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
							</div>

							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="" id="confirm_password_error_div">Confirm Password </label>
										<input name="confirmpassword" type="password" class="form-control password_input" id="confirm_password_val"  autocomplete="off">
									</div>
									<!-- <p class="alert alert-danger text-center">Please enter same password</p> -->
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<input name="change_password" type="submit" class="btn btn-primary w-100" value="CHANGE PASSWORD">
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
	<script src="js/form_validation.js"></script>
	<script src="js/inputmask.js"></script>


	<script type="text/javascript"> 
		function password_changed(type) { swal({ title: "Password Changed!", text: "You have successfuly changed your password. Please login with new password.", icon: "success", 				buttons: {
			cancel: false,
			confirm: true,
		}, dangerMode: true, }).then((willDelete) => {
			if (willDelete) {
				window.location.href = ""+type+"-login.php";
			}
		}); }
		function not_valid_password_page() { swal({ title: "Invalid Link", text: "Reset Password Link is not valid", icon: "warning", 				buttons: {
			cancel: true,
			confirm: true,
		}, dangerMode: true, }).then((willDelete) => {
			if (willDelete) {
				window.location.href = "index.php";
			} else {
				window.location.href = "index.php";
			}
		}); }
		function enter_same_passwords() { swal({ title: "Enter Same Paseword!", text: "", icon: "warning", 				buttons: {
			cancel: false,
			confirm: true,
		}, dangerMode: true, }); }
	</script>
	<?php validate_password_page(); ?>
</body>

</html>
