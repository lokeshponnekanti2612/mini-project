<?php

session_start();

//include("login_conn.php"); 
$conn = mysqli_connect("localhost", "root", "", "signup_db");
if ($conn === false) {
	die("ERROR: Could not connect. " . mysqli_connect_error());
}
if (isset($_REQUEST['submit'])) {
	$_SESSION["username"] = $_REQUEST['username'];
	$b = $_REQUEST['password'];
	$_SESSION["type"] = $_REQUEST['type'];

	if (empty($_SESSION["username"]) && empty($b)) {
?>
		<script>
			alert("Enter Username and Password");
			document.location = "login1.php"
		</script>
	<?php
	} elseif (empty($_SESSION["username"])) {
	?>
		<script>
			alert("Enter Username");
			document.location = "login1.php"
		</script>
	<?php
	} elseif (empty($b)) {
	?>
		<script>
			alert("Enter Password");
			document.location = "login1.php"
		</script>
<?php
	} else {



		$res = mysqli_query($conn, "SELECT * FROM signup1 WHERE `username`='{$_SESSION['username']}'  AND `user`='{$_SESSION['type']}'");
		$result = mysqli_fetch_array($res);
		if ($result['user'] == "admin") {
			$_SESSION["submit"] = "1";
			header("location:security.php");
		}
		if ($_SESSION['username'] != isset($result['username'])) {
			header("location:loginre.php");
		} else if (password_verify($b, $result['password'])) {

			if ($result['user'] == "employee") {
				$_SESSION["submit"] = "1";
				header("location:security.php");
			} else {
				header("location:loginre.php");
			}
		} else {
			echo "h";
		}
	}
}
?>