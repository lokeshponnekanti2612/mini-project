<?php
if (!isset($_SERVER['HTTP_REFERER'])) {
?>
	<script>
		alert('no cheating dude');
		document.location = "signup1.php"
	</script>
	<?php
}
session_start();
$pattern = $_POST['input1'];
$user = $_SESSION['name'];


$conn = new mysqli("localhost", "root", "", "signup_db") or die("mysqli_error()");
$sqlcreate = "CREATE TABLE IF NOT EXISTS pattern1 ( `id` INT(100) NOT NULL AUTO_INCREMENT , `username` VARCHAR(100) NOT NULL ,`user` CHAR(25) NOT NULL,`pattern` VARCHAR(50) NOT NULL , PRIMARY KEY (`id`, `username`)) ENGINE = InnoDB;";
if (mysqli_query($conn, $sqlcreate)) {

	$sql = "INSERT into `pattern1`(`username`, `pattern`) values('$user','$pattern')";
	if (mysqli_query($conn, $sql)) {
		header("location:index1.php");
	} else {
	?>
		<script>
			alert('something is wrong');
			document.location = "pattern1.php"
		</script>
<?php
	}
}
session_destroy();
?>