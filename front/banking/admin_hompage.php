<?php
session_start();

if (!isset($_SESSION["type"]))
    //header('location:adminlogin.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Admin Homepage</title>

    <link rel="stylesheet" href="newcss.css">
</head>
<?php include 'header.php' ?>
<div class='content'>

    <?php include 'admin_navbar.php' ?>
    <?php
    include '_inc/dbconn.php';
    $staff_id = $_SESSION['username'];

    $sql = "SELECT * FROM signup1 WHERE username='$staff_id'";
    $result =  mysqli_query($conn, $sql);
    $rws =  mysqli_fetch_array($result);
    $name = $rws[2];
    $_SESSION['name1'] = $name;
    ?>
    <div class="customer_top_nav">
        <div class="text">Welcome <?php echo $_SESSION['name1'] ?></div>
    </div>

    <div class='admin_staff'>

        <ul>
            <li><b><u>Staff</u></b></li>
            <li> <a href="addstaff.php">Add staff member</a></li>
            <li><a href="display_staff.php">Edit staff member</a></li>
            <li> <a href="delete_staff.php">Delete staff</a></li>
        </ul>
    </div>
    <div class='admin_customer'>
        <ul>
            <li><b><u> Customer</u></b></li>
            <li><a href="addcustomer.php">Add Customer</a></li>
            <li> <a href="display_customer.php">Edit customer</a></li>
            <li> <a href="delete_customer.php">Delete customer</a></li>
    </div>
</div>
<?php include 'footer.php'; ?>
</body>

</html>