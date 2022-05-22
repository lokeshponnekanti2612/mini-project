<?php

session_start();
include '_inc/dbconn.php';




if (isset($_REQUEST['submit'])) {
    //$email=$_SESSION['email'];
    $email = $_SESSION['login_id'];

    $query1 = "SELECT username FROM signup1 WHERE email='$email'";
    $result = mysqli_query($conn, $query1);
    echo "a";
    $row = mysqli_fetch_assoc($result);
    $a = $row['username'];

    $c = $_REQUEST['question'];
    $b = $_REQUEST['password'];

    if (empty($b)) {
?>
        <script>
            alert("Please enter password !");
            document.location = "staff_security_reset.php"
        </script>
    <?php
    }
    $res = mysqli_query($conn, "UPDATE `security` SET password='$b', question='$c'  WHERE username='$a';");

    ?>
    <script>
        alert("password updated successfully...");
        document.location = "staff_pattern_reset.php";
    </script>
<?php
} else {
    echo ("fail");
}
?>