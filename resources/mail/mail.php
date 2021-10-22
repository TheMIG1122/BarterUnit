<?php

$smtp_email = "onlytesting090@gmail.com";
$smtp_password = "acYYbhqs";
extract($_POST);
$to_email = "ENTER EMAIL"; 						# Enter the Reciever's Email
$subject = 'ENTER SUBJECT';						# Enter the Subject
$htmlContent = " <h3>Hi...<br> You have received </h3>";
foreach ($_POST as $name => $value) {
    $htmlContent .= "<p><b>".ucwords($name)." : </b>: ".$value."</b></p> ";
}

require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->SMTPDebug = 4;                          	# Enable verbose debug output
$mail->isSMTP();                               	# Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  		       	# Specify main and backup SMTP servers
$mail->SMTPAuth = true;                        	# Enable SMTP authentication
$mail->Username = $smtp_email;                 	# SMTP username
$mail->Password = $smtp_password;         		# SMTP password
$mail->SMTPSecure = 'tls';               		# Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                      		# TCP port to connect to
# $mail->addAttachment('secure.php'); 			# Add attachments
$mail->setFrom($email, 'THE-IRF');    			# Add From Detail
$mail->addAddress($to_email);  					# Add a recipient
$mail->isHTML(true);                			# Set email format to HTML

$mail->Subject = $subject;
$mail->Body    = $htmlContent;
$mail->AltBody = $htmlContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

?>

<p class="alert alert-success text-center" id="success_message" style="display: none;">Thanks for Joining Us</p>

<script type="text/javascript">
    $(function(){
        $("#myForm").submit(function(event){ 			// Replace the myForm to Form Id
            event.preventDefault();
            $.ajax({
                method: 'POST',
                url: 'mail.php',
                dataType: "html",
                data : $('#myForm').serialize(),		// Replace the myForm to Form Id
                success: function(data){
                    $('#success_message').show();
                },
                error: function(xhr, desc, err){
                    console.log(err);
                }
            });
        });
    });
</script>
