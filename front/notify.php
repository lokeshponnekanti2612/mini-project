<?php  ?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Password Reset</title>
	
</head>
<body>

	<form action="pass_conn.php" method="post">
		<p>
			We sent an email to  <b><?php echo $_GET['email'] ?></b> to help you recover your account. 
		</p>
	    <p>Please login into your email account and click on the link we sent to reset your password</p></br>
		<p>If not found in your in Inbox check out in Spam</p>
	</form>
		
</body>
</html>