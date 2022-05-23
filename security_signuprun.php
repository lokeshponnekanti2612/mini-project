<?php
if (!isset($_SERVER['HTTP_REFERER'])) {
?>
	<script>
		alert('nothing');
		document.location = "signup1.php"
	</script>
	<?php
}
session_start();
$password = $_POST['password'];
$user = $_SESSION['name'];
$question = $_POST['question'];



$conn = new mysqli("localhost", "root", "", "signup_db") or die("mysqli_error()");

$sqlcreate = "CREATE TABLE IF NOT EXISTS `security` (`id` INT(100) NOT NULL AUTO_INCREMENT , `username` VARCHAR(100) NOT NULL , `question` VARCHAR(250) NOT NULL ,`user` CHAR(25) NOT NULL,`password` VARCHAR(100) NOT NULL, PRIMARY KEY (`id`, `username`)) ENGINE = InnoDB;";
if (mysqli_query($conn, $sqlcreate)) {


	$sql = "INSERT INTO `security`(`username`,`question`,`password`) VALUES('$user','$question','$password')";
	if (mysqli_query($conn, $sql)) {
		header("location:pattern_add.php");
	} else {
	?>
		<script>
			alert('something is wrong');
			document.location = "security_signup.php"
		</script>
<?php
	}
}
?>