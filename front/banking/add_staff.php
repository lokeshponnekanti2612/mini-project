<?php
session_start();

if (!isset($_SESSION['admin_login']))
    //header('location:adminlogin.php');
?>
<?php
include '_inc/dbconn.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$address = $_POST['adress'];
$city = $_POST['city'];
$phonenumber = $_POST['phonenumber'];
$email = $_POST['email'];
$_SESSION['email'] = $email;
$gender = $_POST['gender'];
$username = $_POST['username'];
$_SESSION['name'] = $username;
$user = $_POST['type'];
$_SESSION['type'] = $user;
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$email = $_POST['email'];
$sqluser1 = "SELECT email FROM signup1 WHERE email='$email' ";
$qresult1 = mysqli_query($conn, $sqluser1);
$count1 = mysqli_num_rows($qresult1);
if ($count1 > 0) {
?>
    <script>
        alert("The email id is already registered.......");
        document.location = "addstaff.php"
    </script>
<?php
}
$username = $_POST['username'];
$sqluser = "SELECT username FROM signup1 WHERE username='$username' ";
$qresult = mysqli_query($conn, $sqluser);
$count = mysqli_num_rows($qresult);
if ($count > 0) {
?>
    <script>
        alert("Username is already taken");
        document.location = "addstaff.php"
    </script>
    <?php
}
$sql = "INSERT INTO signup1 VALUES(NULL,'$firstname','$lastname','$address','$city','$phonenumber','$email','$gender','$user','$username','$password') ";
if (mysqli_query($conn, $sql)) {
    if ($password == $confirm_password) {
    ?>
        <script>
            document.location = "security_add.php"
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Check Your Details Correctly");
            document.location = "addstaff.php"
        </script>
<?php
    }
}

?>