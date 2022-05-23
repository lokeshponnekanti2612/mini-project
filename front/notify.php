<?php  ?>
<!DOCTYPE html>
<html>

<head>

	<title>Password Reset</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			/* font-family: montserrat; */
			background: rgb(177, 177, 255);
			/* background: linear-gradient(120deg, #2980b9, #8e44ad); */
			width: 100%;
			/* min-height: 100vh; */
			font-family: Verdana, Geneva, Tahoma, sans-serif;
			display: flex;
			/* align-items: center;
			justify-content: center; */
		}
	</style>

</head>

<body>

	<form action="pass_conn.php" method="post">
		<p>
			We sent an email to <b><?php echo $_GET['email'] ?></b> to help you recover your account.
		</p>
		<p>Please login into your email account and click on the link we sent to reset your password</p></br>
		<p>If not found in your in Inbox check out in Spam</p>
	</form>

</body>

</html>