<?php
session_start();
//include '_inc/dbconn.php';
if (!isset($_SESSION['staff_login']))
    // header('location:staff_login.php');  
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Staff Home</title>

    <link rel="stylesheet" href="newcss.css">

</head>
<?php include 'header.php' ?>
<div class="displaystaff_content">
    <?php include 'staff_navbar.php' ?>

    <?php
    include '_inc/dbconn.php';
    $staff_id = $_SESSION['username'];

    $sql = "SELECT * FROM signup1 WHERE username='$staff_id'";
    $result =  mysqli_query($conn, $sql);
    $rws =  mysqli_fetch_array($result);

    $id = $rws[0];
    $name = $rws[2];
    $dob = $rws[2];
    $department = $rws[3];
    $doj = $rws[5];
    $mobile = $rws[7];
    $email = $rws[6];
    $gender = $rws[10];
    $pass = $rws[10];
    //$last_login = $rws[11];

    $_SESSION['login_id'] = $email;
    $_SESSION['name1'] = $name;
    $_SESSION['id'] = $id;
    $_SESSION['pass'] = $pass;
    ?>

    <div class="customer_top_nav">
        <div class="text">Welcome <?php echo $_SESSION['name1'] ?></div>
    </div>

    <div class="customer_body">
        <div class="content1">
            <p><span class="heading">Name: </span><?php echo $name; ?></p>
            <p><span class="heading">City: </span><?php echo $department; ?></p>
            <p><span class="heading">Email:</span><?php echo $email; ?></p>
        </div>
        <div class="content2">
            <p><span class="heading">Phone number :</span><?php echo $doj; ?></p>
            <!-- <p><span class="heading">Last Login: </span><?php echo $last_login; ?></p> -->
        </div>
    </div>
</div>
?>

<?php include 'footer.php'; ?>
<?php

?>