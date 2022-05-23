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
			align-items: center;
			justify-content: center;
		}
	</style>
</head>

<body>
	<form action="pass_conn.php" method="post">
		<center>
			<h2>Reset password</h2>
			<div><label>Email : </label><input type="email" id="email" name="email" required></div></br>
			<div><button type="submit" name="reset-password">Submit</button></div>
		</center>
	</form>
</body>

</html>