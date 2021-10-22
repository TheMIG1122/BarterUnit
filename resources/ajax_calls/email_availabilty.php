<?php require_once '../config.php';
$table = $_POST['table'];
$email = $_POST['email'];
if (check_email_availbilty($table,$email)) {
	echo 1;
} else {
	echo 0;
}
?>