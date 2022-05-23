<?php
$conn = mysqli_connect("localhost", "root", "", "signup_db");
session_start();
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


if ($conn === false) {
    die("ERROR: Could not connect." . mysqli_connect_error());
}
if ($user == "admin") {
?>
    <script>
        document.location = "null.php"
    </script>
<?php
}
$email = $_POST['email'];
$sqluser1 = "SELECT email FROM signup1 WHERE email='$email' ";
$qresult1 = mysqli_query($conn, $sqluser1);
$count1 = mysqli_num_rows($qresult1);
if ($count1 > 0) {
?>
    <script>
        alert("The email id is already registered.......");
        document.location = "signup1.php"
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
        document.location = "addcustomer.php"
    </script>
    <?php
} else {

    if ($user == "admin") {
    ?>
        <script>
            document.location = "null.php"
        </script>
        <?php
    }
    if ($user == "employee") {
        $sqlcreate = "CREATE TABLE IF NOT EXISTS signup1 ( `id` INT(100) NOT NULL AUTO_INCREMENT , `firstname` VARCHAR(100) NOT NULL ,`lastname` VARCHAR(25) NOT NULL,`address` VARCHAR(50) NOT NULL ,`city` CHAR(50) NOT NULL ,`phonenumber` INT(50) NOT NULL ,`email` VARCHAR(50) NOT NULL ,`user` CHAR(50) NOT NULL ,`username` VARCHAR(50) NOT NULL ,`password` VARCHAR(50) NOT NULL , PRIMARY KEY (`id`, `username`)) ENGINE = InnoDB;";
        if (mysqli_query($conn, $sqlcreate)) {

            $sql = "INSERT INTO signup1 VALUES(NULL,'$firstname','$lastname','$address','$city','$phonenumber','$email','$gender','$user','$username','$password') ";
            if (mysqli_query($conn, $sql)) {
                if ($password == $confirm_password) {
        ?>
                    <script>
                        document.location = "security_signup.php"
                    </script>
                <?php
                } else {
                ?>
                    <script>
                        alert("Check Your Details Correctly");
                        document.location = "addcustomer.php"
                    </script>
<?php
                }
            }
        } else {
            echo "ERROR: Sorry $sql." . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
}
?>