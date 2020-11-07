<?php

include_once './PHPMailer/PHPMailer.php';
include_once './PHPMailer/SMTP.php';
include_once './PHPMailer/Exception.php';

class mail
{
	public static function mailOTP($to,$msg)
	{
		$mail = new PHPMailer();
		$mail->SMTPDebug = 0;  
		$mail->isSMTP();
		$mail->Host = "mail.trivenisanstha.com";
		$mail->SMTPAuth = true;
		$mail->Username="noreply@trivenisanstha.com";
		$mail->Password="Qwerty78@";
		$mail->Port=465;
		$mail->SMTPSecure="ssl";

		//Email Settings
		$mail->isHTML();
		$mail->setFrom("noreply@trivenisanstha.com", "Triveni Sanstha OTP");
		$mail->addAddress($to);
		$mail->Subject = "Auto reply from Triveni Sanstha";
		$mail->Body ="OTP for Password Reset is : $msg";
		$mail->send();
	}
}

?>