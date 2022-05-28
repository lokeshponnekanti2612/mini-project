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
        document.location = "signup1.php"
    </script>
<?php
}
if ($password == $confirm_password) {
?>
    <script>
        document.location = "security_signup.php"
    </script>
<?php
}

if ($user == "admin") {
?>
    <script>
        document.location = "null.php"
    </script>
    <?php
}
if ($user == "employee") {
    $password = password_hash($password, PASSWORD_DEFAULT);

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
                alert("Passwords doesn't match..");
                document.location = "signup1.php"
            </script>
<?php
        }
    } else {
        echo "ERROR: Sorry $sql." . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>