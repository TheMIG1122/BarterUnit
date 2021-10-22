<?php



//   $smtp_email = "onlytesting090@gmail.com";

//   $smtp_password = "acYYbhqs";

    $smtp_email = "support@barterunit.com";

  $smtp_password = "#sfpc)pEM4n4";

//   require 'mail/PHPMailerAutoload.php';

//   send_email_message("themig1122@gmail.com","Test","Test Message");



///////////////////////   Setup PHP Mailer \\\\\\\\\\\\\\\\\

$uploads_directory = "uploads";//variable use in display_image() function

//...........................................................................

//.HHHH...HHHH..EEEEEEEEEEE.ELLL.......PPPPPPPPP...PEEEEEEEEEE.ERRRRRRRRR....

//.HHHH...HHHH..EEEEEEEEEEE.ELLL.......PPPPPPPPPP..PEEEEEEEEEE.ERRRRRRRRRR...

//.HHHH...HHHH..EEEEEEEEEEE.ELLL.......PPPPPPPPPPP.PEEEEEEEEEE.ERRRRRRRRRR...

//.HHHH...HHHH..EEEE........ELLL.......PPPP...PPPP.PEEE........ERRR...RRRRR..

//.HHHH...HHHH..EEEE........ELLL.......PPPP...PPPP.PEEE........ERRR...RRRRR..

//.HHHHHHHHHHH..EEEEEEEEEE..ELLL.......PPPPPPPPPPP.PEEEEEEEEE..ERRRRRRRRRR...

//.HHHHHHHHHHH..EEEEEEEEEE..ELLL.......PPPPPPPPPP..PEEEEEEEEE..ERRRRRRRRRR...

//.HHHHHHHHHHH..EEEEEEEEEE..ELLL.......PPPPPPPPP...PEEEEEEEEE..ERRRRRRR......

//.HHHH...HHHH..EEEE........ELLL.......PPPP........PEEE........ERRR.RRRR.....

//.HHHH...HHHH..EEEE........ELLL.......PPPP........PEEE........ERRR..RRRR....

//.HHHH...HHHH..EEEEEEEEEEE.ELLLLLLLLL.PPPP........PEEEEEEEEEE.ERRR..RRRRR...

//.HHHH...HHHH..EEEEEEEEEEE.ELLLLLLLLL.PPPP........PEEEEEEEEEE.ERRR...RRRRR..

//.HHHH...HHHH..EEEEEEEEEEE.ELLLLLLLLL.PPPP........PEEEEEEEEEE.ERRR....RRRR..

//...........................................................................



function last_id()

{

	global $connection;

	return mysqli_insert_id($connection);//this is use to check last insert id

}



function set_message($msg)

{

	if(!empty($msg))

	{

		$_SESSION['message'] = $msg;

	}

	else

	{

		$msg = "";

	}

}



function set_error_message($msg)

{

	if(!empty($msg))

	{

		$_SESSION['error_message'] = $msg;

	}

	else

	{

		$msg = "";

	}

}



function display_message()

{

	if(isset($_SESSION['message']))

	{

$message = <<<DELIMETER

<div class="alert alert-success text-center" id="SuccessAlert">

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">

    <i class="icofont icofont-close-line-circled"></i>

    </button>

    <span id="Success">{$_SESSION['message']}</span>

</div>

DELIMETER;

echo $message;

unset($_SESSION['message']);

	}

}



function display_error_message()

{

	if(isset($_SESSION['error_message']))

	{

$message = <<<DELIMETER

<div class="alert alert-danger text-center" id="SuccessAlert">

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">

    <i class="icofont icofont-close-line-circled"></i>

    </button>

    <span id="Success">{$_SESSION['error_message']}</span>

</div>

DELIMETER;

echo $message;

unset($_SESSION['error_message']);

	}

}



function redirect($location)

{

	header("Location: $location");

}



function query($sql)

{

	global $connection;

	return mysqli_query($connection, $sql);// use to send query to database

}



function confirm($result)

{

	global $connection;

	if(!$result)

	{

		die("QUERY FAILED". mysqli_error($connection));//mysqli_error — Returns a string description of the last error

	}

}



function escape_string($string)

{

	global $connection;

	return mysqli_real_escape_string($connection, $string);//Escapes special characters in a string for use in an SQL statement

}



function fetch_array($result)

{

	return mysqli_fetch_array($result); //use for fetch from database

}



function alert($data)

{

	echo "<script> alert('{$data}'); </script>";

}



function num_rows($result)

{

	return mysqli_num_rows($result);

}



function send_email_message($to,$subject,$message)

{

//   global $smtp_email;

//   global $smtp_password;

//   $mail = new PHPMailer;

//   $mail->SMTPDebug = 0;

//   $mail->isSMTP();

//   $mail->Host = 'barterunit.com';

//   $mail->SMTPAuth = true;

//   $mail->Username = $smtp_email;

//   $mail->Password = $smtp_password;

//   $mail->SMTPSecure = 'tls';

//   $mail->Port = 465;

//   $mail->setFrom($smtp_email, 'support@barterunit.com');

//   $mail->isHTML(true); 

//   $mail->addAddress($to);

//   $mail->Subject = $subject;

//   $mail->Body    = $message;

//   $mail->AltBody = $message;

//   $mail->send();

    $headers = "";

    $headers .= "Organization: Sender Organization\r\n";

    $headers .= "MIME-Version: 1.0" . "\r\n";

    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    $headers .= "X-Priority: 3\r\n";

    $headers .= "X-Mailer: PHP". phpversion() ."\r\n";

    $sender_email = "support@barterunit.com";

    $headers .= 'From:<support@barterunit.com>' . "\r\n";

    mail($to,$subject,$message,$headers);

}



function genrate_email_message($link,$title,$text,$name)

{

$message = <<<DELIMETER

<!DOCTYPE html>

<html lang="en" >

<head>

  <meta charset="UTF-8">

  <title>Barter Unit</title>

</head>

<body>

  <head>

  <!--[if gte mso 9]><xml>

  <o:OfficeDocumentSettings>

  <o:AllowPNG/>

  <o:PixelsPerInch>96</o:PixelsPerInch>

  </o:OfficeDocumentSettings>

  </xml><![endif]-->

  <title>Udacity_email</title>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!--[if !mso]><!-- --><meta content="IE=edge" http-equiv="X-UA-Compatible"><!--<![endif]-->

  <!--[if !mso]><!-- --><link href="https://fonts.googleapis.com/css?family=Open+Sans:600,400,300" rel="stylesheet" type="text/css"><!--<![endif]-->

  <style type="text/css">html, body { background-color:#fafbfc; }

    img { display:block; }

    .ReadMsgBody {width: 100%; }

    .ExternalClass {width: 100%; }

    * { -webkit-text-size-adjust: none; }

    .whiteLinks a:link, .whiteLinks a:visited { color:#ffffff!important;}

    .appleLinksGrey a { color:#b7bdc1!important; text-decoration:none!important; }

    table {border-collapse:collapse;}

    .preheader{ font-size: 1px; line-height:1px; display: none!important; mso-hide:all; }

    /* AOL Mail td overrides */

    #maincontent td{color:#525C65;}

  </style>

  <!--[if mso]>

  <style type="text/css">

  body, table, td, a {font-family: Arial, Helvetica, sans-serif !important;}

  </style>

  <![endif]-->

</head>

<body bgcolor="#fafbfc" style="Margin:0; padding:0;" yahoo="fix">

  <table border="0" cellpadding="0" cellspacing="0" width="100%">

    <tbody><tr>

      <td style="background-color:#fafbfc">

        <center bgcolor="#fafbfc" style="width:100%;background-color:#fafbfc;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;">

          <div id="maincontent" style="max-width:620px; font-size:0;margin:0 auto;">

            <div class="preheader" style="font-size: 1px; line-height:1px; display: none!important; mso-hide:all;">

              One more step to get started

            </div>

            <!--[if gte mso 9]>

              <table border="0" cellpadding="0" cellspacing="0" style="width:620px;">

                <tr>

                  <td valign="top">

            <![endif]-->

            <table border="0" cellpadding="0" cellspacing="0" style="width:100%;">

              <tbody><tr>

                <td>

                  <table border="0" cellpadding="0" cellspacing="0" style="width:100%;">

                    <tbody><tr>

                      <td align="center" style="padding-bottom:20px;">

                        <table border="0" cellpadding="0" cellspacing="0" style="font-family:'Open+Sans', 'Open Sans', Helvetica, Arial, sans-serif; font-size:13px; line-height:18px; color:#00C0EA; text-align:center; width:200px;">

                          <tbody><tr>

                            <td style="padding:20px 0 10px 0;">

                              <a style="text-decoration:none;"><img alt="Udacity" border="0" height="27" src="https://barterunit.com/images/EmailLOGO.jpg" style="display:block; width:200px !important; font-family:'Open+Sans', 'Open Sans', Helvetica, Arial, sans-serif; font-size:22px; line-height:26px; color:#000000; text-transform:uppercase; text-align:center; letter-spacing:1px;" width="152"></a>

                            </td>

                          </tr>

                        </tbody></table>

                      </td>

                    </tr>

                  </tbody></table>

                </td>

              </tr>

              <tr>

                <td>

                  <table border="0" cellpadding="0" cellspacing="0" style="width:100%;">

                    <tbody><tr>

                      <td bgcolor="#fafbfc" style="width:7px; font-size:1px;">&nbsp;</td>

                      <td bgcolor="#f5f6f7" style="width:1px; font-size:1px;">&nbsp;</td>

                      <td bgcolor="#f0f2f3" style="width:1px; font-size:1px;">&nbsp;</td>

                      <td bgcolor="#edeef1" style="width:1px; font-size:1px;">&nbsp;</td>

                      <td bgcolor="#ffffff">

                        <table border="0" cellpadding="0" cellspacing="0" style="width:100%;">

                          <tbody><tr>

                            <td style="text-align:center; padding:40px 40px 40px 40px; border-top:3px solid #02b3e4;">

                            <!--[if gte mso 9]>

                              <table border="0" cellpadding="0" cellspacing="0" style="width:520px;">

                                <tr>

                                  <td valign="top">

                            <![endif]-->

                              <div style="display:inline-block; width:100%; max-width:520px;">

                                <table border="0" cellpadding="0" cellspacing="0" style="font-family:'Open+Sans', 'Open Sans', Helvetica, Arial, sans-serif; font-size:14px; line-height:24px; color:#525C65; text-align:left; width:100%;">

                                  <tbody><tr>

                                    <td>

                                      <p style="Margin:0; font-size:18px; line-height:23px; color:#102231; font-weight:bold;">

                                        <strong>

                                          Hi

                                         {$name},</strong><br><br>

                                      </p>

                                    </td>

                                  </tr>

<tr>

    <td>

         {$text} <br><br>

    </td>

</tr>

<tr>

    <td align="center" style="padding:15px 0 40px 0; border-bottom:1px solid #f3f6f9; ">

        <table border="0" cellpadding="0" cellspacing="0" style="border-collapse:separate !important; border-radius:15px; width:210px;">

            <tbody><tr>

                <td align="center" valign="top">

                <!--[if gte mso 9]>

                    <table border="0" cellspacing="0" cellpadding="0" style="width:210px">

                        <tr>

                            <td bgcolor="#01b3e3" style="padding:0px 10px; text-align:center;" valign="top">

                <![endif]-->

                    <a href="{$link}" target="_blank" style="background-color:#01b3e3; border-collapse:separate !important; border-top:10px solid #01b3e3; border-bottom:10px solid #01b3e3; border-right:45px solid #01b3e3; border-left:45px solid #01b3e3; border-radius:4px; color:#ffffff; display:inline-block; font-family:'Open+Sans','Open Sans',Helvetica, Arial, sans-serif; font-size:13px; font-weight:bold; text-align:center; text-decoration:none; letter-spacing:2px;">{$title}</a>

                <!--[if gte mso 9]>

                            </td>

                        </tr>

                    </table>

                <![endif]-->

                </td>

            </tr>

        </tbody></table>

    </td>

</tr>

<tr>

    <td style="padding-top:30px;">

        <p style="Margin:20px 0 20px 0;">Or copy this link and paste in your web browser</p>

        <p style="Margin:20px 0; font-size:12px; line-height:17px; word-wrap:break-word; word-break:break-all;"><a href="{$link}" style="color:#5885ff; text-decoration:underline;" target="_blank">{$link}</a></p>

    </td>

</tr>

                                  <tr>

                                    <td style="font:14px/16px Arial, Helvetica, sans-serif; color:#363636; padding:0 0 14px;">

                                      Thank you,

                                    </td>

                                  </tr>

                                  <tr>

                                    <td style="font:bold 14px/16px Arial, Helvetica, sans-serif; color:#363636; padding:0 0 7px;">

                                      BarterUnit LLC Team

                                    </td>

                                  </tr>

                                </tbody></table>

                              </div>

                              <!--[if gte mso 9]>

                                    </td>

                                  </tr>

                                </table>

                              <![endif]-->

                            </td>

                          </tr>

                          <tr>

                            <td bgcolor="#e0e2e5" style="height:1px; width:100%; line-height:1px; font-size:0;">&nbsp;</td>

                          </tr>

                          <tr>

                            <td bgcolor="#e0e2e4" style="height:1px; width:100%; line-height:1px; font-size:0;">&nbsp;</td>

                          </tr>

                          <tr>

                            <td bgcolor="#e8ebed" style="height:1px; width:100%; line-height:1px; font-size:0;">&nbsp;</td>

                          </tr>

                          <tr>

                            <td bgcolor="#f1f3f6" style="height:1px; width:100%; line-height:1px; font-size:0;">&nbsp;</td>

                          </tr>

                        </tbody></table>

                      </td>

                      <td bgcolor="#edeef1" style="width:1px; font-size:1px;">&nbsp;</td>

                      <td bgcolor="#f0f2f3" style="width:1px; font-size:1px;">&nbsp;</td>

                      <td bgcolor="#f5f6f7" style="width:1px; font-size:1px;">&nbsp;</td>

                      <td bgcolor="#fafbfc" style="width:7px; font-size:1px;">&nbsp;</td>

                    </tr>

                  </tbody></table>

                </td>

              </tr>

              <tr>

                <td align="center" style="padding:30px 0 20px 0;">

                  <table border="0" cellpadding="0" cellspacing="0" style="width:220px;">

                    <tbody><tr>

                      <td align="center">

                        <a href="#" target="_blank"><img alt="Facebook" border="0" height="26" src="https://s3-us-west-2.amazonaws.com/udacity-email/Footer/facebook.jpg" style="display:block; width:26px!important; height:26px!important;" width="26"></a>

                      </td>

                      <td align="center">

                        <a href="#" target="_blank"><img alt="Twitter" border="0" height="26" src="https://s3-us-west-2.amazonaws.com/udacity-email/Footer/twitter.jpg" style="display:block; width:26px!important; height:26px!important;" width="26"></a>

                      </td>

                      <td align="center">

                        <a href="#" target="_blank"><img alt="Google" border="0" height="26" src="https://s3-us-west-2.amazonaws.com/udacity-email/Footer/google.jpg" style="display:block; width:28px!important; height:26px!important;" width="28"></a>

                      </td>

                      <td align="center">

                        <a href="#" target="_blank"><img alt="Linkedin" border="0" height="26" src="https://s3-us-west-2.amazonaws.com/udacity-email/Footer/linkedin.jpg" style="display:block; width:26px!important; height:26px!important;" width="26"></a>

                      </td>

                    </tr>

                  </tbody></table>

                </td>

              </tr>

              <tr>

                <td align="center" style="padding-bottom:40px;">

                  <table border="0" cellpadding="0" cellspacing="0" style="font-family:'Open+Sans', 'Open Sans', Helvetica, Arial, sans-serif; font-size:12px; line-height:18px;  text-align:center; width:auto;">

                    <tbody><tr>

                      <td style="color:#b7bdc1;">

                        <p style="margin:0;"><span class="appleLinksGrey">&copy; CopyRight</span> &nbsp;•&nbsp; <span class="appleLinksGrey">All Rights are Reserved.</span> <br> <a style="text-decoration: none;color:#b7bdc1;" href="http://www.barterunit.com/">www.barterunit.com</a></p>

                      </td>

                    </tr>

                  </tbody></table>

                </td>

              </tr>

            </tbody></table>

          <!--[if gte mso 9]>

                </td>

              </tr>

            </table>

          <![endif]-->

          </div>

        </center>

      </td>

    </tr>

  </tbody></table>

</body>

</body>

</html>

DELIMETER;



return $message;



}



function get_page()

{

	if (isset($_GET['page'])) { 

		$page = $_GET['page'];

		$filename = "resources/page/".$page.".php";

		if (file_exists($filename)) {

			include $filename;

		}

	} else {

		include("resources/page/dashboard.php");

	}

}



function check_email_availbilty($table,$email)

{

	$query = query("SELECT email FROM {$table} WHERE email='{$email}'");

	confirm($query);

	$count = num_rows($query);

	if ($count == 0) {

    return true;

  } else {

    return false;

  }

}



function check_email_availbilty_type_forgot($type,$email)

{

  $query = query("SELECT email FROM {$type}_registrations WHERE email='{$email}'");

  confirm($query);

  $count = num_rows($query);

  if ($count == 1) {

    return true;

  } else {

    return false;

  }

}





function validat_account_page()

{

	if (!isset($_GET['type']) && !isset($_GET['email']) && !isset($_GET['code'])) {

		echo "<script>page_not_valid();</script>";

	} else {

		extract($_GET);

		$query = query("SELECT * FROM {$type}s WHERE email='{$email}' AND account_hash='{$code}'");

		confirm($query);

		$count = num_rows($query);

		if ($count == 0) {

			echo "<script>page_not_valid();</script>";

		}

		if ($count == 1) {

			$query = query("UPDATE {$type}s SET account_hash='',account_status=1 WHERE email='{$email}'");

			confirm($query);

      echo "<script>account_verified();</script>";

		} else {

			echo "<script>page_not_valid();</script>";

			// header("Location: index.php?alert=verified");

		}

	}

}



function get_checked($answer,$value)

{

	if ($answer == $value) {

		echo "checked";

	}

}



function show_alert($alert)

{

  echo "<script>$(document).ready(function(){{$alert}();});</script>";

}



function count_as_total($table)

{

  $query = query("SELECT * FROM {$table}");

  confirm($query);

  $num_rows = num_rows($query);

  return $num_rows;

}



function genrate_download_resource_btn($files)

{

  $download_btns = "";

  if($files != ""){

    $files = explode(",",$files);

  for ($i=0; $i < count($files); $i++) { 

$download_btns .= <<<DELIMETER

  <div class="download_file">

    <a href="../resources/uploads/{$files[$i]}" class="btn-sm btn-success m-2" download><i class="fa fa-download"></i> Download</a>

  </div>

DELIMETER;

  }

return $download_btns;

  }

}



function genrate_keywords($keywords)

{

  $keywords = explode(",",$keywords);

  $words = "";

  for ($i=0; $i < count($keywords); $i++) { 

    $words .= "#".$keywords[$i].", ";

  }

  $words = substr($words, 0, -2);

  return $words;

}



function check_equals($first,$second)

{

  if ($first == $second) {

    return true;

  } else {

    return false;

  }

}



function get_info($id,$table,$type)

{

  $query = query("SELECT * FROM {$table} WHERE {$type}_id = {$id}");

  confirm($query);

  $data = fetch_array($query);

  return $data;

}



function check_forgot_email()

{

    if (isset($_POST['forgot_password'])) {

      if (check_email_availbilty_type_forgot($_GET['type'],$_POST['email'])) {

        $type = $_GET['type'];

        $email = $_POST['email'];

        $query = query("SELECT reset_status FROM {$type}_registrations WHERE email='{$email}'");

        confirm($query);

        $data = fetch_array($query);

        if ($data['reset_status'] == 0) {

          $hash = md5(time());

          $message = genrate_email_message("https://barterunit.com/change_password.php?type={$type}&email={$email}&hash={$hash}","Change Password","Please press button to change your password.","There");

          $query = query("UPDATE {$type}_registrations SET reset_status = 1, reset_hash = '{$hash}' WHERE email = '{$email}'");

          confirm($query);

          send_email_message($email,"Reset Password",$message);

          echo "<script>password_email_send();</script>";

        } elseif (isset($_GET['email_resend'])) {

          $hash = md5(time());

          $message = genrate_email_message("https://barterunit.com/change_password.php?type={$type}&email={$email}&hash={$hash}","Change Password","Please press button to change your password.","There");

          $query = query("UPDATE {$type}_registrations SET reset_status = 1, reset_hash = '{$hash}' WHERE email = '{$email}'");

          confirm($query);

          send_email_message($email,"Reset Password",$message);

          echo "<script>password_email_send();</script>";

        } else {

          echo "<script>resend_forgot_email();</script>";

        }

      } else {

        echo "<script>enter_correct_email();</script>";

      }

    }

}



function validate_password_page()

{

  if (isset($_GET['type']) && isset($_GET['email']) && isset($_GET['hash'])) {

    extract($_GET);

    $query = query("SELECT email FROM {$type}_registrations WHERE email='{$email}' AND reset_hash='{$hash}'");

    confirm($query);

    $count = num_rows($query);

    if ($count == 1) {

      if (isset($_POST['change_password'])) {

        extract($_POST);



        if ($password == $confirmpassword) {

          $new_password = md5($password);

          $query = query("UPDATE {$type}_registrations SET password='{$new_password}',reset_status=0,reset_hash=NULL WHERE email = '{$email}'");

          confirm($query);

          echo "<script>password_changed('{$type}');</script>"; 

        } else {

          echo "<script>enter_same_passwords();</script>"; 

        }

      }

    } else {

     echo "<script>not_valid_password_page();</script>"; 

    }

  } else {

    echo "<script>not_valid_password_page();</script>";

  }

}



function echo_days($value,$index,$name)

{

  if (strpos($value, "to") && $index != 2) {

    $value = explode(" to ", $value);

    echo "value='".$value[$index]."' name='".$name."'";

  } elseif ($index == 2 && !strpos($value, "to")) {

      echo "checked";

  } else {

    if ($index < 2) {

      echo "disabled";

      echo " ";

    }

  }

}



//....................................................................................................

//........AAAAAAAA........DDDDDDDDDDDDDDD......MMMMMMMMM......MMMMMMMM...IIIII...NNNNNN.......NNNNNN..

//........AAAAAAAA........DDDDDDDDDDDDDDDDD....MMMMMMMMM......MMMMMMMM...IIIII...NNNNNNN......NNNNNN..

//.......AAAAAAAAA........DDDDDDDDDDDDDDDDDD...MMMMMMMMM......MMMMMMMM...IIIII...NNNNNNNN.....NNNNNN..

//.......AAAAAAAAAA.......DDDDDDDDDDDDDDDDDD...MMMMMMMMMM....MMMMMMMMM...IIIII...NNNNNNNN.....NNNNNN..

//.......AAAAAAAAAA.......DDDDDD...DDDDDDDDDD..MMMMMMMMMM....MMMMMMMMM...IIIII...NNNNNNNNN....NNNNNN..

//......AAAAAAAAAAA.......DDDDDD......DDDDDDD..MMMMMMMMMM....MMMMMMMMM...IIIII...NNNNNNNNN....NNNNNN..

//......AAAAAAAAAAAA......DDDDDD.......DDDDDD..MMMMMMMMMM...MMMMMMMMMM...IIIII...NNNNNNNNNN...NNNNNN..

//.....AAAAAA.AAAAAA......DDDDDD.......DDDDDDD.MMMMMMMMMMM..MMMMMMMMMM...IIIII...NNNNNNNNNNN..NNNNNN..

//.....AAAAAA.AAAAAA......DDDDDD........DDDDDD.MMMMMMMMMMM..MMMMMMMMMM...IIIII...NNNNNNNNNNN..NNNNNN..

//.....AAAAAA..AAAAAA.....DDDDDD........DDDDDD.MMMMMMMMMMM..MMMMMMMMMM...IIIII...NNNNNNNNNNNN.NNNNNN..

//....AAAAAA...AAAAAA.....DDDDDD........DDDDDD.MMMMMMMMMMMMMMMMMMMMMMM...IIIII...NNNNNNNNNNNN.NNNNNN..

//....AAAAAA...AAAAAAA....DDDDDD........DDDDDD.MMMMMM.MMMMMMMMMMMMMMMM...IIIII...NNNNNNNNNNNNNNNNNNN..

//....AAAAAA....AAAAAA....DDDDDD........DDDDDD.MMMMMM.MMMMMMMMMMMMMMMM...IIIII...NNNNNN.NNNNNNNNNNNN..

//...AAAAAAAAAAAAAAAAA....DDDDDD........DDDDDD.MMMMMM.MMMMMMMMMMMMMMMM...IIIII...NNNNNN..NNNNNNNNNNN..

//...AAAAAAAAAAAAAAAAAA...DDDDDD.......DDDDDDD.MMMMMM.MMMMMMMMM.MMMMMM...IIIII...NNNNNN..NNNNNNNNNNN..

//...AAAAAAAAAAAAAAAAAA...DDDDDD.......DDDDDDD.MMMMMM..MMMMMMMM..MMMMM...IIIII...NNNNNN...NNNNNNNNNN..

//..AAAAAAAAAAAAAAAAAAA...DDDDDD......DDDDDDD..MMMMMM..MMMMMMMM..MMMMM...IIIII...NNNNNN...NNNNNNNNNN..

//..AAAAAA.......AAAAAAA..DDDDDD....DDDDDDDDD..MMMMMM..MMMMMMMM..MMMMM...IIIII...NNNNNN....NNNNNNNNN..

//.AAAAAA.........AAAAAA..DDDDDDDDDDDDDDDDDD...MMMMMM..MMMMMMMM..MMMMM...IIIII...NNNNNN.....NNNNNNNN..

//.AAAAAA.........AAAAAA..DDDDDDDDDDDDDDDDDD...MMMMMM...MMMMMM...MMMMM...IIIII...NNNNNN.....NNNNNNNN..

//.AAAAAA.........AAAAAAA.DDDDDDDDDDDDDDDDD....MMMMMM...MMMMMM...MMMMM...IIIII...NNNNNN......NNNNNNN..

//.AAAAA...........AAAAAA.DDDDDDDDDDDDDDD......MMMMMM...MMMMMM...MMMMM...IIIII...NNNNNN......NNNNNNN..

//....................................................................................................



function validate_admin_login_page()

{

  if (isset($_SESSION['admin_id'])) {

    redirect("admin");

  }

}





function validate_admin_login()

{

  if (!isset($_SESSION['admin_id'])) {

    redirect("login.php");

  }

}



function admin_login()

{

  if (isset($_POST['admin_login'])) {

    extract($_POST);

    $password = md5($password);

    $query=query("SELECT * FROM admin WHERE username='{$username}' AND password='{$password}'");

    confirm($query);

    $num = num_rows($query);

    if ($num == 1 ) {

      $data=fetch_array($query);

      $id = $data["admin_id"];

      extract($data);

      $_SESSION['admin_id'] = $id;

      $_SESSION['username'] = $username;

      redirect("index.php");

    } else {

      set_error_message("Please Enter Correct Information.");

    }

  }

}



function change_admin_password()

{

  if (isset($_POST['change_password'])) {

    extract($_POST);

    $admin_id = $_SESSION['admin_id'];

    $current_password = md5($current_password);

    $query = query("SELECT * FROM admin WHERE admin_id='{$admin_id}' AND password = '{$current_password}'");

    confirm($query);

    $count = num_rows($query);

    if ($count == 1) {

      if ($new_password == $confirm_password) {

        $new_password = md5($new_password);

        $query = query("UPDATE admin SET password='{$new_password}' WHERE admin_id='{$admin_id}'");

        confirm($query);

        show_alert("password_changed");

      } else {

        show_alert("same_password_entered");

      }

    } else {

      show_alert("wrong_password_entered");

    }

  }

}



function accept_registration($table)

{

  if ($table == "all") {

    if (isset($_GET['table'])) {

      $table = $_GET['table'];

    }

  }

  if (isset($_GET['accept'])) {

    $id = $_GET['accept'];

    $page = $_GET['page'];

    $one_time_code = str_shuffle(time()).str_shuffle(time());

    $one_time_code = str_split($one_time_code, "16");

    $one_time_code = str_split($one_time_code[0], "4");

    $one_time_code = implode("-", $one_time_code);

    $info = get_info($id,$table,$page);

    if ($page == "ubi") {

      $name = $info['first_name']." ".$info['last_name'];

$message_content = <<<DELIMETER

<p><b>Congratulations!</b> Your application was approved. You are now a Barter Unit Universal Basic Income (UBI) member.</p>

<p><b>Monthly Benefit Amount:</b><br>1000 Barter Units (per month).</p></p>

<p><b>Distribution Date:</b>

<br>Benefits are deposited automatically into your pocketbook every 1st of the month at 1:00 am PST.</p>

<p><bVerification Code:</b><br>Please keep this verification code confidential at all times. Your sixteen-digit verification code is <b>{$one_time_code}</b>.</p>

<p><b>Mobile Application ID:</b><br>I.D. Code: {$info['id_code']}<br>Pocketbook Code: {$info['pocketbook_code']}</p>

<p><b>How do I receive my benefits?</b><br>

Your UBI benefits will automatically and instantly be transferred to your account every 1st of the month.</p>

<p><i>“Remember, the more people who adopt and respect the Barter Unit, the more economically valuable the Barter Unit becomes.”- <b>Phillip H. Perez</b></i></p>

DELIMETER;

    }



    if ($page == "edc") {

      $name = $info['business_owner_name'];

$message_content = <<<DELIMETER

<p><b>Congratulations!</b> Your application was approved. You are now a Barter Economic Development Committed (EDC) member. </p>

<p><b>Monthly Benefit Amount:</b><br>1000 Barter Units (per month).</p></p>

<p><b>Distribution Date:</b>

<br>Benefits are deposited automatically into your pocketbook every 1st of the month at 1:00 am PST. </p>

<p><bVerification Code:</b><br>Please keep this verification code confidential at all times. 

Your sixteen-digit verification code is <b>{$one_time_code}</b>.</p>

<p><b>Mobile Application ID:</b><br>I.D. Code: {$info['id_code']}<br>Pocketbook Code: {$info['pocketbook_code']}</p>

<p><b>How do I receive my benefits?</b><br>

Your UBI benefits will automatically and instantly be transferred to your account every 1st of the month.</p>

<p><i>“Remember, the more people who adopt and respect the Barter Unit, the more economically valuable the Barter Unit becomes.”- <b>Phillip H. Perez</b></i></p>

DELIMETER;

    }

    $message = genrate_email_message("https://barterunit.com/".$page."-login.php","Sign In",$message_content,$name);

    send_email_message($info['email'],"Approved",$message);

    $query = query("UPDATE {$table} SET status=1,one_time_code='{$one_time_code}',update_status=0 WHERE {$page}_id = {$id}");

    confirm($query);

    show_alert("registration_accepted_{$page}");

  }

}



function decline_registration($table)

{

  if (isset($_GET['decline'])) {

    $id = $_GET['decline'];

    $page = $_GET['page'];

    $info = get_info($id,$table,$page);

    if ($page == "ubi") {

      $name = $info['first_name']." ".$info['last_name'];

    }

    if ($page == "edc") {

      $name = $info['business_owner_name'];

    }

$message_content = <<<DELIMETER

<p>Thank you for your application. We enjoyed getting to know more about you. We appreciate you sharing your information with us.</p>

<p>Unfortunately, based on the provided information we are unable to accept your application at this time. It may due to one or more of the following reasons listed below.</p>

<div>

<ul type="disc" style="padding-left:50px">

  <li>You are not a U.S. Citizen</li>

  <li>Information provided is suspicious.</li>

  <li>Information provided cannot be verified.</li>

  <li>Information provided is not legible or clearly visible.</li>

  <li>Missing required information.</li>

  <li>You have one or more accounts with us. </li>

  <li>Pocketbook and/or ID Code is incorrect and does not match our records</li>

</ul>

</div>

<p>Please sign into your account via our website and update all required information for a second review process. Please assure all information is correct, legible and required ID documents are uploaded properly.  </p>

DELIMETER;

    $message = genrate_email_message("https://barterunit.com/".$page."-login.php","Sign In",$message_content,$name);

    send_email_message($info['email'],"Barter Unit Application Denial",$message);

    $rejected = intval($info['rejected'])+1;

    $query = query("UPDATE {$table} SET status=2,rejected={$rejected},update_status=0 WHERE {$page}_id = {$id}");

    confirm($query);

    show_alert("registration_decline_{$page}");

  }

}



function update_content($id)

{

  if (isset($_POST['update_content'])) {

    extract($_POST);

    $content = escape_string($content);

    $query = query("UPDATE site_content SET content='{$content}',updated_at=CURRENT_TIMESTAMP WHERE content_id={$id}");

    confirm($query);

    $page = "index.php?page=".$_GET['page'];

    redirect($page);

  }

}



function get_content($id)

{

  $query = query("SELECT content FROM site_content WHERE content_id = {$id}");

  confirm($query);

  $data = fetch_array($query);

  return $data['content'];

}



function get_all_registrations()

{

  if (isset($_POST['search'])) {

    $keywords = $_POST['keywords'];

    // $sql = "SELECT ubi_registrations.id_code,edc_registrations.id_code,ubi_registrations.pocketbook_code,edc_registrations.pocketbook_code,edc_registrations.one_time_code,ubi_registrations.one_time_code FROM ubi_registrations,edc_registrations WHERE edc_registrations.id_code LIKE '%{$keywords}%' OR ubi_registrations.id_code LIKE '%{$keywords}%' OR edc_registrations.pocketbook_code LIKE '%{$keywords}%' OR ubi_registrations.pocketbook_code LIKE '%{$keywords}%' OR edc_registrations.email LIKE '%{$keywords}%' OR ubi_registrations.email LIKE '%{$keywords}%' OR edc_registrations.business_name LIKE '%{$keywords}%' OR edc_registrations.business_keywords LIKE '%{$keywords}%' OR edc_registrations.business_owner_name LIKE '%{$keywords}%' OR ubi_registrations.first_name LIKE '%{$keywords}%' OR ubi_registrations.last_name LIKE '%{$keywords}%'  OR ubi_registrations.one_time_code LIKE '%{$keywords}%' OR edc_registrations.one_time_code LIKE '%{$keywords}%'";



  }

  echo $sql;

  die();

  $query = query($sql);

  confirm($query);

  $sr = 1;

  while ( $data = fetch_array($query) ) {

    $status = "";

    if ($data['status'] == 0) {

      $status = '<a href="index.php?page=edc&accept='.$data["edc_id"].'" class="badge btn-sm btn-success m-1 d-block"><i class="fa fa-check"></i> Accept</a> <a href="index.php?page=edc&decline='.$data["edc_id"].'" class="badge btn-sm btn-danger m-1 d-block"><i class="fa fa-times"></i>  Decline</a>';

    } 



    if($data['status'] == 1) {

      $status = '';

    }



    if($data['status'] == 2) {

      $status = '<a href="index.php?page=edc&accept='.$data["edc_id"].'" class="badge btn-sm btn-success m-1 d-block"><i class="fa fa-check"></i> Accept</a> <a href="index.php?page=edc&decline='.$data["edc_id"].'" class="badge btn-sm btn-danger m-1 d-block"><i class="fa fa-times"></i> Decline</a>';

    }



    if ($data['update_status'] == 1) {

      $update ='<br><span class="text-warning" style="font-size:11px">UPDATED</span>';

    } else {

      $update = "";

    }



    $action = "";

$registration = <<<DELIMETER

<tr>

    <td>{$sr}.</td>

    <td>{$data['id_code']}</td>

    <td>{$data['pocketbook_code']}</td>

    <td>{$data['business_name']}</td>

    <td>{$data['business_owner_name']}</td>

    <td>{$data['year_founded']}</td>

    <td><span>{$data['rejected']} times {$update}</span></td>

    <td>

        {$status}

        <a href="index.php?page=single_edc&id={$data['edc_id']}" class="badge btn-sm btn-primary m-1 d-block" target="_blank"><i class="fa fa-info-circle"></i> Detail</a>

    </td>

</tr>

DELIMETER;

$sr++;

echo $registration;

  }

}



//................................

//.UUUU...UUUU..BBBBBBBBBB..BIII..

//.UUUU...UUUU..BBBBBBBBBBB.BIII..

//.UUUU...UUUU..BBBBBBBBBBB.BIII..

//.UUUU...UUUU..BBBB...BBBB.BIII..

//.UUUU...UUUU..BBBB...BBBB.BIII..

//.UUUU...UUUU..BBBBBBBBBBB.BIII..

//.UUUU...UUUU..BBBBBBBBBB..BIII..

//.UUUU...UUUU..BBBBBBBBBBB.BIII..

//.UUUU...UUUU..BBBB....BBBBBIII..

//.UUUU...UUUU..BBBB....BBBBBIII..

//.UUUUUUUUUUU..BBBBBBBBBBBBBIII..

//..UUUUUUUUU...BBBBBBBBBBB.BIII..

//...UUUUUUU....BBBBBBBBBB..BIII..

//................................



function ubi_login()

{

  if (isset($_POST['signin'])) {

    extract($_POST);

    $password = md5($password);

    $query = query("SELECT * FROM ubi_registrations WHERE email ='{$email}' AND password='{$password}'");

    confirm($query);

    $count = num_rows($query);

    if ($count == 1) {

      $data = fetch_array($query);

      $_SESSION['user_login'] = true;

      $_SESSION['ubi_id'] = $data['ubi_id'];

      $_SESSION['ubi_email'] = $data['email'];

      $_SESSION['user_name'] = $data['first_name']." ".$data['last_name'];

      redirect("ubi_panel");

    } else {

      show_alert("login_error");

    }

  }

}



function validate_ubi_login()

{

  if (!isset($_SESSION['ubi_id'])) {

    redirect("../ubi-login.php");

  }

}



function validate_ubi_login_page()

{

  if (isset($_SESSION['ubi_id'])) {

    redirect("ubi_panel");

  }

}



function ubi_registration()

{

  if (isset($_POST['register_ubi'])) {

    extract($_POST);

    if (check_email_availbilty("ubi_registrations",$email)) {

      if (check_equals($email,$confirm_email)) {

        if (check_equals($password,$confirm_password)) {

          $_POST['password'] = md5($password);

          unset($_POST['register_ubi']);

          unset($_POST['confirm_email']);

          unset($_POST['confirm_password']);

          $fields = "";

          $values = "";

          foreach ($_POST as $name => $value) {

            $fields .= $name.",";

            $values .= "'".escape_string($value)."',";

          }

          $fields = substr($fields, 0, -1);

          $values = substr($values, 0, -1);

          $sql = "INSERT INTO ubi_registrations({$fields}) VALUES ({$values})";

          $query = query($sql);

          confirm($query);

          $message = genrate_email_message("https://barterunit.com/ubi-login.php","SIGN IN","<p>Thank you for your participation in the BarterUnit UBI program.</p><br><p>We have received your BarterUnit Universal Basic Income (UBI) application. Please allow us 1 to 2 business days to review your application. We will make every effort to review and process your application as quickly as possible. </p>",$first_name." ".$last_name);

          send_email_message($email,"BarterUnit UBI Registration",$message);

          // show_alert("registeration_success_ubi");

          echo "1";

        } else {

          // show_alert("same_password");

          echo "4";

        }

      } else {

        // show_alert("same_email");

        echo "3";

      }

    } else {

      // show_alert("email_taken");

      echo "2";

    }

  }

}



function get_all_ubis()

{

  if (isset($_POST['search'])) {

    $keywords = $_POST['keywords'];

    $sql = "SELECT * FROM ubi_registrations WHERE id_code LIKE '%{$keywords}%' OR pocketbook_code LIKE '%{$keywords}%' OR email LIKE '%{$keywords}%' OR first_name LIKE '%{$keywords}%' OR middle_name LIKE '%{$keywords}%' OR last_name LIKE '%{$keywords}%' OR one_time_code LIKE '%{$keywords}%' ORDER BY ubi_id DESC";

  } else {

    $sql = "SELECT * FROM ubi_registrations ORDER BY ubi_id DESC";

  }

  $query = query($sql);

  confirm($query);

  $sr = 1;

  while ( $data = fetch_array($query) ) {

    $status = "";

    if ($data['status'] == 0) {

      $status = '<a href="index.php?page=ubi&table=ubi_registrations&accept='.$data["ubi_id"].'" class="badge btn-sm btn-success m-1 d-block"><i class="fa fa-check"></i> Accept</a> <a href="index.php?page=ubi&table=ubi_registrations&decline='.$data["ubi_id"].'" class="badge btn-sm btn-danger m-1 d-block"><i class="fa fa-times"></i> Decline</a>';

    } 



    if($data['status'] == 1) {

      $status = '';

    }



    if($data['status'] == 2) {

      $status = '<a href="index.php?page=ubi&table=ubi_registrations&accept='.$data["ubi_id"].'" class="badge btn-sm btn-success m-1 d-block"><i class="fa fa-check"></i> Accept</a> <a href="index.php?page=ubi&table=ubi_registrations&decline='.$data["ubi_id"].'" class="badge btn-sm btn-danger m-1 d-block"><i class="fa fa-times"></i> Decline</a>';

    }



    if ($data['update_status'] == 1) {

      $update ='<br><span class="text-warning" style="font-size:11px">UPDATED</span>';

    } else {

      $update = "";

    }





    $action = "";

    $full_name = $data['first_name']." ".$data['last_name'];

$registration = <<<DELIMETER

<tr>

    <td>{$sr}.</td>

    <td>{$data['id_code']}</td>

    <td>{$data['pocketbook_code']}</td>

    <td>{$full_name}</td>

    <td>{$data['sex']}</td>

    <td>{$data['email']}</td>

    <td class="text-center">

      {$data['rejected']} times {$update}

    </td>

    <td class="text-center">

        {$status}

        <a href="index.php?page=single_ubi&id={$data['ubi_id']}" class="badge btn-sm btn-primary m-1 d-block" target="_blank"><i class="fa fa-info-circle"></i> Detail</a>

    </td>

</tr>

DELIMETER;

$sr++;

echo $registration;

  }

}



function get_ubi_info($id)

{

  $query = query("SELECT * FROM ubi_registrations WHERE ubi_id = {$id}");

  confirm($query);

  $data = fetch_array($query);

  return $data;

}



function update_ubi()

{

  if (isset($_POST['update_ubi'])) {

    unset($_POST['update_ubi']);

    $_POST['update_status'] = 1;

    $id = $_SESSION['ubi_id'];

    $fields = "";

    foreach ($_POST as $name => $value) {

      $fields .= $name."='".escape_string($value)."',";

    }

    $fields = substr($fields, 0, -1);

    $sql = "UPDATE ubi_registrations SET {$fields} WHERE ubi_id = {$id}";

    $query = query($sql);

    confirm($query);

    redirect("index.php");

  }

}



function change_ubi_password()

{

  if (isset($_POST['change_password'])) {

    extract($_POST);

    $ubi_id = $_SESSION['ubi_id'];

    $current_password = md5($current_password);

    $query = query("SELECT * FROM ubi_registrations WHERE ubi_id='{$ubi_id}' AND password = '{$current_password}'");

    confirm($query);

    $count = num_rows($query);

    if ($count == 1) {

      if ($new_password == $confirm_password) {

        $new_password = md5($new_password);

        $query = query("UPDATE ubi_registrations SET password='{$new_password}' WHERE ubi_id='{$ubi_id}'");

        confirm($query);

        show_alert("password_changed");

      } else {

        show_alert("same_password_entered");

      }

    } else {

      show_alert("wrong_password_entered");

    }

  }

}



//........................................

//.EEEEEEEEEEE.EDDDDDDDD......CCCCCCC.....

//.EEEEEEEEEEE.EDDDDDDDDD....CCCCCCCCC....

//.EEEEEEEEEEE.EDDDDDDDDDD..DCCCCCCCCCC...

//.EEEE........EDDD...DDDD..DCCC...CCCCC..

//.EEEE........EDDD....DDDDDDCC.....CCC...

//.EEEEEEEEEE..EDDD....DDDDDDCC...........

//.EEEEEEEEEE..EDDD....DDDDDDCC...........

//.EEEEEEEEEE..EDDD....DDDDDDCC...........

//.EEEE........EDDD....DDDDDDCC.....CCC...

//.EEEE........EDDD...DDDDD.DCCC...CCCCC..

//.EEEEEEEEEEE.EDDDDDDDDDD..DCCCCCCCCCC...

//.EEEEEEEEEEE.EDDDDDDDDD....CCCCCCCCCC...

//.EEEEEEEEEEE.EDDDDDDDD......CCCCCCC.....

//........................................



function edc_login()

{

  if (isset($_POST['signin'])) {

    extract($_POST);

    $password = md5($password);

    $query = query("SELECT * FROM edc_registrations WHERE email ='{$email}' AND password='{$password}'");

    confirm($query);

    $count = num_rows($query);

    if ($count == 1) {

      $data = fetch_array($query);

      $_SESSION['user_login'] = true;

      $_SESSION['edc_id'] = $data['edc_id'];

      $_SESSION['edc_email'] = $data['email'];

      $_SESSION['user_name'] = $data['business_owner_name'];

      redirect("edc_panel");

    } else {

      show_alert("login_error");

    }

  }

}



function validate_edc_login()

{

  if (!isset($_SESSION['edc_id'])) {

    redirect("../edc-login.php");

  }

}



function edc_registration()

{

  if (isset($_POST['register_edc'])) {

      extract($_POST);

      if (check_email_availbilty("edc_registrations",$email)) {

        if (check_equals($email,$confirm_email)) {

          if (check_equals($password,$confirm_password)) {

            $_POST['password'] = md5($password);

            $_POST['monday'] = implode(" to ",$_POST['monday']);

            $_POST['tuesday'] = implode(" to ",$_POST['tuesday']);

            $_POST['wednesday'] = implode(" to ",$_POST['wednesday']);

            $_POST['thursday'] = implode(" to ",$_POST['thursday']);

            $_POST['friday'] = implode(" to ",$_POST['friday']);

            $_POST['saturday'] = implode(" to ",$_POST['saturday']);

            $_POST['sunday'] = implode(" to ",$_POST['sunday']);

            unset($_POST['register_edc']);

            unset($_POST['confirm_email']);

            unset($_POST['confirm_password']);

            $fields = "";

            $values = "";

            foreach ($_POST as $name => $value) {

              $fields .= $name.",";

              $values .= "'".escape_string($value)."',";

            }

            $fields = substr($fields, 0, -1);

            $values = substr($values, 0, -1);

            $sql = "INSERT INTO edc_registrations({$fields}) VALUES ({$values})";

            $query = query($sql);

            confirm($query);

            $message = genrate_email_message("https://barterunit.com/edc-login.php","SIGN IN","<p>Thank you for your participation in the BarterUnit Economic Development Committee (EDC) program.</p><br><p>We have received your BarterUnit Economic Development Committee (EDC) application. Please allow us 1 to 2 business days to review your application. We will make every effort to review and process your application as quickly as possible.</p>",$business_owner_name);

            send_email_message($email,"BarterUnit EDC Registration",$message);

            echo "1";

          } else {

            // show_alert("same_password");

            echo "4";

          }

        } else {

          // show_alert("same_email");

          echo "3";

        }

      } else {

        // show_alert("email_taken");

        echo "2";

      }

  }

}



function get_all_edcs()

{

  if (isset($_POST['search'])) {

    $keywords = $_POST['keywords'];

    $sql = "SELECT * FROM edc_registrations WHERE id_code LIKE '%{$keywords}%' OR pocketbook_code LIKE '%{$keywords}%' OR email LIKE '%{$keywords}%' OR business_name LIKE '%{$keywords}%' OR business_keywords LIKE '%{$keywords}%' OR business_owner_name LIKE '%{$keywords}%' OR one_time_code LIKE '%{$keywords}%' ORDER BY edc_id DESC";

  } else {

    $sql = "SELECT * FROM edc_registrations ORDER BY edc_id DESC";

  }

  $query = query($sql);

  confirm($query);

  $sr = 1;

  while ( $data = fetch_array($query) ) {

    $status = "";

    if ($data['status'] == 0) {

      $status = '<a href="index.php?page=edc&table=edc_registrations&accept='.$data["edc_id"].'" class="badge btn-sm btn-success m-1 d-block"><i class="fa fa-check"></i> Accept</a> <a href="index.php?page=edc&table=edc_registrations&decline='.$data["edc_id"].'" class="badge btn-sm btn-danger m-1 d-block"><i class="fa fa-times"></i>  Decline</a>';

    } 



    if($data['status'] == 1) {

      $status = '';

    }



    if($data['status'] == 2) {

      $status = '<a href="index.php?page=edc&table=edc_registrations&accept='.$data["edc_id"].'" class="badge btn-sm btn-success m-1 d-block"><i class="fa fa-check"></i> Accept</a> <a href="index.php?page=edc&table=edc_registrations&decline='.$data["edc_id"].'" class="badge btn-sm btn-danger m-1 d-block"><i class="fa fa-times"></i> Decline</a>';

    }



    if ($data['update_status'] == 1) {

      $update ='<br><span class="text-warning" style="font-size:11px">UPDATED</span>';

    } else {

      $update = "";

    }



    $action = "";

$registration = <<<DELIMETER

<tr>

    <td>{$sr}.</td>

    <td>{$data['id_code']}</td>

    <td>{$data['pocketbook_code']}</td>

    <td>{$data['business_name']}</td>

    <td>{$data['business_owner_name']}</td>

    <td>{$data['year_founded']}</td>

    <td><span>{$data['rejected']} times {$update}</span></td>

    <td>

        {$status}

        <a href="index.php?page=single_edc&id={$data['edc_id']}" class="badge btn-sm btn-primary m-1 d-block" target="_blank"><i class="fa fa-info-circle"></i> Detail</a>

    </td>

</tr>

DELIMETER;

$sr++;

echo $registration;

  }

}



function get_edc_info($id)

{

  $query = query("SELECT * FROM edc_registrations WHERE edc_id = {$id}");

  confirm($query);

  $data = fetch_array($query);

  return $data;

}



function update_edc()

{

  if (isset($_POST['update_edc'])) {

    unset($_POST['update_edc']);

    $_POST['update_status'] = 1;

    $id = $_SESSION['edc_id'];

    $_POST['password'] = md5($password);

    $_POST['monday'] = implode(" to ",$_POST['monday']);

    $_POST['tuesday'] = implode(" to ",$_POST['tuesday']);

    $_POST['wednesday'] = implode(" to ",$_POST['wednesday']);

    $_POST['thursday'] = implode(" to ",$_POST['thursday']);

    $_POST['friday'] = implode(" to ",$_POST['friday']);

    $_POST['saturday'] = implode(" to ",$_POST['saturday']);

    $_POST['sunday'] = implode(" to ",$_POST['sunday']);

    $fields = "";

    foreach ($_POST as $name => $value) {

      $fields .= $name."='".escape_string($value)."',";

    }

    $fields = substr($fields, 0, -1);

    $sql = "UPDATE edc_registrations SET {$fields} WHERE edc_id = {$id}";

    $query = query($sql);

    confirm($query);

    redirect("index.php");

  }

}



function change_edc_password()

{

  if (isset($_POST['change_password'])) {

    extract($_POST);

    $edc_id = $_SESSION['edc_id'];

    $current_password = md5($current_password);

    $query = query("SELECT * FROM edc_registrations WHERE edc_id='{$edc_id}' AND password = '{$current_password}'");

    confirm($query);

    $count = num_rows($query);

    if ($count == 1) {

      if ($new_password == $confirm_password) {

        $new_password = md5($new_password);

        $query = query("UPDATE edc_registrations SET password='{$new_password}' WHERE edc_id='{$edc_id}'");

        confirm($query);

        show_alert("password_changed");

      } else {

        show_alert("same_password_entered");

      }

    } else {

      show_alert("wrong_password_entered");

    }

  }

}





//.......................................................................

//.LLLL.......iiii............ttt..tiii..................................

//.LLLL.......iiii...........sttt..tiii..................................

//.LLLL......................sttt........................................

//.LLLL.......iiii.sssssss.sssttttttiii.innnnnnn....ggggggggg.sssssss....

//.LLLL.......iiiiisssssssssssttttttiii.innnnnnnn..gggggggggggssssssss...

//.LLLL.......iiiiisss.ssss..sttt..tiii.innn.nnnnnngggg.ggggggsss.ssss...

//.LLLL.......iiiiissss......sttt..tiii.innn..nnnnnggg...gggggssss.......

//.LLLL.......iiii.ssssss....sttt..tiii.innn..nnnnnggg...gggg.ssssss.....

//.LLLL.......iiii..sssssss..sttt..tiii.innn..nnnnnggg...gggg..sssssss...

//.LLLL.......iiii......ssss.sttt..tiii.innn..nnnnnggg...gggg......ssss..

//.LLLLLLLLLL.iiiiisss..ssss.sttt..tiii.innn..nnnnngggg.ggggggsss..ssss..

//.LLLLLLLLLL.iiiiissssssss..sttttttiii.innn..nnnn.gggggggggggssssssss...

//.LLLLLLLLLL.iiii..ssssss...sttttttiii.innn..nnnn..ggggggggg..ssssss....

//.......................................................gggg............

//................................................ngggg.gggg.............

//.................................................ggggggggg.............

//..................................................ggggggg..............

//.......................................................................



function get_all_listing()

{

  if (isset($_POST['search'])) {

    $keywords = $_POST['keywords'];

    $keywords = explode(" ", $keywords);

    // print_r($keywords);

    $name = "(";

    for ($i=0; $i < count($keywords); $i++) { 

      $name .= "business_name='".$keywords[$i]."' OR ";

    }

    $name = substr($name, 0, -3);

    $name .= ")";



    $state = "(";

    for ($i=0; $i < count($keywords); $i++) { 

      $state .= "business_state='".$keywords[$i]."' OR ";

    }

    $state = substr($state, 0, -3);

    $state .= ")";



    $country = "(";

    for ($i=0; $i < count($keywords); $i++) { 

      $country .= "business_country='".$keywords[$i]."' OR ";

    }

    $country = substr($country, 0, -3);

    $country .= ")";



    $tags = "(";

    for ($i=0; $i < count($keywords); $i++) { 

      $tags .= "business_keywords LIKE '%".$keywords[$i]."%' OR ";

    }

    $tags = substr($tags, 0, -3);

    $tags .= ")";



    $sql = "SELECT * FROM edc_registrations WHERE {$name} OR {$state} OR {$country} OR {$tags} ORDER BY edc_id DESC";

    $query = query($sql);

  } else {

    $query = query("SELECT * FROM edc_registrations WHERE status=1 ORDER BY edc_id DESC");

  }

  confirm($query);

  $sr = 1;
  $registration ="";
  $count = num_rows($query);
  while ( $data = fetch_array($query) ) {

    $action = "";

    $keywords = genrate_keywords($data['business_keywords']);

    $monday = str_replace("to","-",$data['monday']);

    $tuesday = str_replace("to","-",$data['tuesday']);

    $wednesday = str_replace("to","-",$data['wednesday']);

    $thursday = str_replace("to","-",$data['thursday']);

    $friday = str_replace("to","-",$data['friday']);

    $saturday = str_replace("to","-",$data['saturday']);

    $sunday = str_replace("to","-",$data['sunday']);

$registration .= <<<DELIMETER

<div class="col-md-12 col-lg-12 col-xl-6">

    <div class="blGrid wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">

        <div class="businessGName leftCard ">

            <h2>{$data['business_name']}</h2>

            <div class="row">

                <div class="col-6">

                    <p>Construction </p>

                </div>

                <div class="col-6">

                    <p>Accepts Barter Units: {$data['accepts_barter_units']} </p>

                </div>

            </div>

            <h2 class="mt-3">Business Physical Address</h2>

            <div class="row">

                <div class="col-6">

                    <p class="addressG"> <span>Address:</span> <small>{$data['business_address']}</small> </p>

                    <p class="addressG"> <span>State:</span> <small>{$data['business_state']} </small> </p>

                    <p class="addressG"> <span>Country:</span> <small>{$data['business_country']}</small> </p>

                </div>

                <div class="col-6">

                    <p class="addressG"> <span>City:</span> <small>{$data['business_city']}</small> </p>

                    <p class="addressG"> <span>Zip:</span> <small>{$data['business_zipcode']}</small> </p>

                </div>

            </div>

            <div class="row">

              <div class="col-11">

                <p> <span>Keywords:</span> <small>{$keywords}</small> </p>

              </div>

            </div>

            <div class="businessGFoot d-flex justify-content-between">

                <p class="addressG"> <span>Phone 1:</span> <small> &nbsp; {$data['business_phone_1']}</small> </p>

                <p class="addressG"> <span>Website:</span> <small> &nbsp; {$data['business_website']}</small> </p>

                <p class="addressG"> <span>Email:</span> <small> &nbsp; {$data['email']}</small> </p>

            </div>

            <div class="businessLogo">

                <img src="resources/uploads/{$data['business_logo']}" alt="">

            </div>

            <div class="opetHoursBox">

                <div class="opetHours">

                    <h2>Operation Hours</h2>

                    <table class="table table-borderless mb-0">

                        <tbody>

                            <tr>

                                <td>Monday:</td>

                                <td>{$monday}</td>

                            </tr>

                            <tr>

                                <td>Tuesday:</td>

                                <td>{$tuesday}</td>

                            </tr>

                            <tr>

                                <td style="width: 85px">Wednesday:</td>

                                <td>{$wednesday}</td>

                            </tr>

                            <tr>

                                <td>Thursday:</td>

                                <td>{$thursday}</td>

                            </tr>

                            <tr>

                                <td>Friday:</td>

                                <td>{$friday}</td>

                            </tr>

                            <tr>

                                <td>Saturday:</td>

                                <td>{$saturday}</td>

                            </tr>

                            <tr>

                                <td>Sunday:</td>

                                <td>{$sunday}</td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

</div>

DELIMETER;

$sr++;
  }
if ($count == 0) {
$registration = <<<DELIMETER
<div class="col-md-12 col-lg-12 col-xl-12 text-center">
<div class="blGrid wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
  <h3 class="text-center text-danger">No results found.</h3>
  </div>
</div>
DELIMETER;
}
echo $registration;

}