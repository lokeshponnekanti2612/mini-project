<?php include "pass_conn.php"; ?>
<!DOCTYPE html>
<html>

<head>
	<title>Password Reenter</title>
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
	<form action="" method="post">
		<center>
			<h2>Enter new password</h2>
			<table>
				<tr>
					<td>
						<label for="password">Password : </label>
					</td>
					<td>
						<input type="passwd" id="password" name="password" required>
					</td></br>
				</tr>
				</br>
				<tr>
					<td>
						<label for="Repeat password">Repeat password : </label>
					</td>
					<td>
						<input type="passwd" id="Repeat password" name="repeat_password" required>
					</td>
				</tr>
				</br>
				<tr>
					<td>
						<center>
							<button type="submit" name="reset-password">Submit</button>
						</center>
					</td>
				</tr>
			</table>
		</center>
	</form>
</body>

</html>