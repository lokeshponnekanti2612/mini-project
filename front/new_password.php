<?php include "pass_conn.php";?>
<!DOCTYPE html>
<html>
<head>
	<title>Password Reenter</title>
</head>
<body>
	<form action="" method="post">
        <center>
			<h2 >Enter new password</h2>
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
									<button type="submit" name="reset-password" >Submit</button>
								</center>
							</td>					
				</tr>
			</table>
        </center>
	</form>
</body>
</html>