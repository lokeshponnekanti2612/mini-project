<?php

session_start();
include '_inc/dbconn.php';
//$conn = mysqli_connect("localhost", "root", "", "signup_db");

if (isset($_POST['button'])) {
    //$email = $_SESSION['email'];
    $email = $_SESSION['login_id'];
    $query1 = "SELECT username FROM signup1 WHERE email='$email'";

    $result = mysqli_query($conn, $query1);

    $row = mysqli_fetch_assoc($result);

    $a = $row['username'];

    $b = $_REQUEST['input1'];

    if (empty($b)) {
?>
        <script>
            alert("Please enter password !");
            document.location = "staff_pattern_reset.php"
        </script>
    <?php
    }
    $res = mysqli_query($conn, "UPDATE `pattern1` SET pattern='$b' WHERE username='$a';");


    ?>
    <script>
        alert("password updated successfully...");
        document.location = "staff_homepage.php";
    </script>
<?php
} else {
    echo ("fail");
}
?>