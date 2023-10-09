<?php

include "config.php";

session_start();

if(isset($_SESSION['login_user']))
{
	header("location:index.php");
}
else{
	$email=$_GET['email'];
	$token=$_GET['token'];

	if(isset($email)&&isset($token))
	{
		if(isset($_POST['reset']))
		{
			$check="SELECT * FROM `users` WHERE email='$email' AND reset_token='$token'";

			$result=mysqli_query($db,$check);

			if($result)
			{
				if(mysqli_num_rows($result)==1)
				{
					//$password=password_hash($_POST['password'],md5());//pass to password PASSWORD_BCRYPT
					$password=md5($_POST['password']);
					$fetch=mysqli_fetch_assoc($result);

					if($fetch['reset_token']==$token)
					{
						$update="UPDATE `users` SET `password`='$password',`reset_token`=NULL WHERE email='$email'" ;

						if(mysqli_query($db,$update))
						{
							echo "<script>alert('your password has been changed')</script>";
							header("refresh:0;url=login.php");
						}
						else
						{
							echo "<script>alert('server down')</script>";
						}
					}
				}
				else
				{
					echo "<script>alert('link expire')</script>";
					header("refresh:0;url=login.php");
				}
			}
			else
			{
				echo "<script>alert('server down')</script>";
			}
		}
	}
}

?> 
<!DOCTYPE html>
<html>
<head>
  <title>reset password</title>
  <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body> 
	<div class="container">
		<div class="header">
			<h2>Reset Password</h2>
		</div>
			
		<form method="post" action=" ">
			 
			<div class="input-group">   <!--  form-group -->
				<label>Set New password</label>
				<input type="password" name="password" >
			</div>
			<div class="input-group">
				<button type="submit" class="btn"  name="reset" value="Reset" >Reset</button>
			</div>
		</form>
	
  </div>
</body>
</html>
