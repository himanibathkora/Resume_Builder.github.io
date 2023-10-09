<?php
include 'config.php';

session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require ('PHPmailer/Exception.php');
require ('PHPmailer/SMTP.php');
require ('PHPmailer/PHPmailer.php');

function sendemail($email,$reset_token){
	//Create an instance; passing `true` enables exceptions
	$mail = new PHPMailer(true);

	try {
		//Server settings
		// $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
		$mail->isSMTP();                                            //Send using SMTP
		$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
		$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
		$mail->Username   = 'project.procv@gmail.com';                     //SMTP username
		$mail->Password   = 'ssbhmvxfvyrighbb';                               //SMTP password
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
		$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

		//Recipients
		$mail->setFrom('project.procv@gmail.com', 'proCV+');
		$mail->addAddress($email);     //Add a recipient
		

		

		//Content
		$mail->isHTML(true);                                  //Set email format to HTML
		$mail->Subject = 'Reset password link from proCV+';
		$mail->Body    = "click the link to  <b>reset your password!</b> <a href='http://localhost/proCV+/reset-password.php?email=$email&token=$reset_token'>click here</a>";
   

		$mail->send();
		return true;// echo 'Message has been sent';
	} catch (Exception $e) {
		return false;//echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
}

if(isset($_SESSION['login_user']))
{
	header("location:index.php");

}
else{
	if(isset($_POST['reset']))
	{
		$email=$_POST['email'];

		$check="SELECT * FROM `users` WHERE email='$email'";
		$result=mysqli_query($db,$check);

		if($result){
			$reset_token= bin2hex(random_bytes(10));

			if(mysqli_num_rows($result)==1)
			{
				$update="UPDATE `users` SET `reset_token`='$reset_token' WHERE email='$email'";

				if(mysqli_query($db,$update)&&sendemail($email,$reset_token))
				{
					echo "<script>alert('reset password link is sent to your email')</script>";
				}
				else
				{
					echo "<script>alert('server down 002')</script>";
				}
			}
			else
			{
				echo "<script>alert('user not found')</script>";
			}
		}
		else
		{
			echo "<script>alert('server down')</script>";
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Forget Password</title>
  <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body> 
	<div class="container">
		<div class="header">
			<h2>Forget Password</h2>
		</div>
			
		<form method="post" action=" ">
			 
			<div class="input-group">   <!--  form-group -->
				<label>Email</label>
				<input type="email" name="email" >
			</div>
			<div class="input-group">
				<button type="submit" class="btn"  name="reset" value="Reset" >Reset</button>
			</div>
		</form>
	
  </div>
</body>
</html>