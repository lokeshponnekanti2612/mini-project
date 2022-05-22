<?php
session_start();
include '_inc/dbconn.php';


if (isset($_REQUEST['change_password'])) {

    $email = $_SESSION['login_id'];
    $pass1 = $_SESSION['pass'];


    $sql = "SELECT * FROM signup1 WHERE email='$email'";
    $result = mysqli_query($conn, $sql);


    $rws = $result->fetch_array(MYSQLI_ASSOC);


    $old =  $_REQUEST['old_password'];
    $new =  $_REQUEST['new_password'];
    $again =  $_REQUEST['again_password'];

    if ($pass1 == $old && $new == $again) {

        $sql1 = "UPDATE signup1 SET password='$new' WHERE email='$email'";
        mysqli_query($conn, $sql1);
?>
        <script>
            alert("password updated successfully...");
        </script>
<?php
        header('location:staff_security_reset.php');
    } else {

        header('location:change_password_staff.php');
    }
}

?>

</div>
<?php include 'footer.php'; ?>