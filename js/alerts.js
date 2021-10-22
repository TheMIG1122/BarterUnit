

//////////////////////////////
/////	Front End		//////
//////////////////////////////


//////////////////////////////
///				Lgoin


function login_error() {
	swal({
		title: "Sign In Error",
		text: "Please enter correct sign in details.",
		icon: "warning",
		buttons: {
			cancel: false,
			confirm: true,
		},
		dangerMode: true,
	}).then((willDelete) => {
		if (willDelete) {
			window.location.href = window.location.href;
		} else {
			window.location.href = window.location.href;
		}
	});
}

//////////////////////////////
///				Registeration

function email_taken() {
	swal({
		title: "Email already in use!",
		text: "Please enter different email!",
		icon: "warning",
		buttons: {
			cancel: false,
			confirm: true,
		},
		dangerMode: true,
	}).then((willDelete) => {
		if (willDelete) {
			window.location.href = window.location.href;
		} else {
			window.location.href = window.location.href;
		}
	});
}

function same_email() {
	swal({
		title: "Please Enter Same Email",
		text: "",
		icon: "warning",
		buttons: {
			cancel: false,
			confirm: true,
		},
		dangerMode: true,
	}).then((willDelete) => {
		if (willDelete) {
			window.location.href = window.location.href;
		} else {
			window.location.href = window.location.href;
		}
	});
}

function same_password() {
	swal({
		title: "Please Enter Same Password",
		text: "",
		icon: "warning",
		buttons: {
			cancel: false,
			confirm: true,
		},
		dangerMode: true,
	}).then((willDelete) => {
		if (willDelete) {
			window.location.href = window.location.href;
		} else {
			window.location.href = window.location.href;
		}
	});
}

function registeration_success_ubi() {
	swal({
		title: "Registered",
		text: "Thank you for your registration. Your application is under review. We have sent you a confirmation email to the email address provided. Thank you.",
		icon: "success",
		buttons: {
			cancel: false,
			confirm: true,
		},
		dangerMode: true,
	}).then((willDelete) => {
		if (willDelete) {
			window.location.href = "ubi-login.php";
		} else {
			window.location.href = "ubi-login.php";
		}
	});
}

function registeration_success_edc() {
	swal({
		title: "Registered",
		text: "Thank you for your registration. Your application is under review. We have sent you a confirmation email to the email address provided. Thank you.",
		icon: "success",
		buttons: {
			cancel: false,
			confirm: true,
		},
		dangerMode: true,
	}).then((willDelete) => {
		if (willDelete) {
			window.location.href = "edc-login.php";
		} else {
			window.location.href = "edc-login.php";
		}
	});
}