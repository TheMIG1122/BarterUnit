

//////////////////////////////
/////		Admin		/////
//////////////////////////////


//////////////////////////////
///				Registrations


function registration_accepted_ubi() {
	swal({
		title: "Accepted",
		text: "",
		icon: "success",
		buttons: {
			cancel: false,
			confirm: true,
		},
		dangerMode: true,
	}).then((willDelete) => {
		if (willDelete) {
			window.location.href = "index.php?page=ubi";
		} else {
			window.location.href = "index.php?page=ubi";
		}
	});
}

function registration_decline_ubi() {
	swal({
		title: "Declined",
		text: "",
		icon: "warning",
		buttons: {
			cancel: false,
			confirm: true,
		},
		dangerMode: true,
	}).then((willDelete) => {
		if (willDelete) {
			window.location.href = "index.php?page=ubi";
		} else {
			window.location.href = "index.php?page=ubi";
		}
	});
}


function registration_accepted_edc() {
	swal({
		title: "Accepted",
		text: "",
		icon: "success",
		buttons: {
			cancel: false,
			confirm: true,
		},
		dangerMode: true,
	}).then((willDelete) => {
		if (willDelete) {
			window.location.href = "index.php?page=edc";
		} else {
			window.location.href = "index.php?page=edc";
		}
	});
}

function registration_decline_edc() {
	swal({
		title: "Declined",
		text: "",
		icon: "warning",
		buttons: {
			cancel: false,
			confirm: true,
		},
		dangerMode: true,
	}).then((willDelete) => {
		if (willDelete) {
			window.location.href = "index.php?page=edc";
		} else {
			window.location.href = "index.php?page=edc";
		}
	});
}


//////////////////////////////
///				Password

function password_changed() {
	swal({
		title: "Password Changed!",
		text: "",
		icon: "success",
		buttons: {
			cancel: false,
			confirm: true,
		},
		dangerMode: true,
	}).then((willDelete) => {
		if (willDelete) {
			window.location.href = "index.php?page=password";
		} else {
			window.location.href = "index.php?page=password";
		}
	});
}

function wrong_password_entered() {
	swal({
		title: "Enter Correct Password!",
		text: "",
		icon: "warning",
		buttons: {
			cancel: false,
			confirm: true,
		},
		dangerMode: true,
	}).then((willDelete) => {
		if (willDelete) {
			window.location.href = "index.php?page=password";
		} else {
			window.location.href = "index.php?page=password";
		}
	});
}

function same_password_entered() {
	swal({
		title: "Enter Same Password!",
		text: "",
		icon: "warning",
		buttons: {
			cancel: false,
			confirm: true,
		},
		dangerMode: true,
	}).then((willDelete) => {
		if (willDelete) {
			window.location.href = "index.php?page=password";
		} else {
			window.location.href = "index.php?page=password";
		}
	});
}