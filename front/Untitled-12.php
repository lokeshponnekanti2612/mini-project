<?php

session_start();
//include("login_db.php"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {


	$user = $_SESSION["username"];
	$b = $_POST['input1'];
	$c = $_SESSION["type"];

	$conn = mysqli_connect("localhost", "root", "", "signup_db");
	if ($conn === false) {
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}


	$sql = "SELECT * FROM `pattern1` WHERE `username`='$user' AND `pattern`='$b' AND `user`='admin'";
	$res = mysqli_query($conn, $sql);
	if ($res) {

		$result = mysqli_fetch_array($res);
		if ($result) {


			echo "h";
?>
			<script>
				// document.location = "banking/admin_homepage.php";
				document.location = "./banking/admin_hompage.php";
			</script>
			<?php

		} else {
			echo "K";

			$sql1 = "SELECT * FROM `pattern1` WHERE `username`='$user'  AND `pattern`='$b' AND `user`='employee'";
			$res1 = mysqli_query($conn, $sql1);
			if ($res1) {
				$result = mysqli_fetch_array($res1);
				if ($result) {

					echo "a";



					echo "b";
					header("location:./banking/staff_homepage.php");
				}
			} else {
			?>
				<script>
					alert("Invalid username or password innerside")
					//document.location="pattern_login.php";
				</script>
	<?php
			}
		}
	} else {
		echo "f";
	}
} else {
	?>
	<script>
		alert("Invalid username or password outside")
		//document.location="pattern_login.php";
	</script>
<?php
}

//session_destroy();
?>