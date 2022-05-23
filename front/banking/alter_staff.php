<?php
session_start();
include '_inc/dbconn.php';
if (!isset($_SESSION['admin_login']))
    //header('location:adminlogin.php');   
?>
<?php
if (isset($_POST['alter'])) {
    // $name =  mysql_real_escape_string($_REQUEST['edit_name']);
    // $gender =  mysql_real_escape_string($_REQUEST['edit_gender']);
    // $dob =  mysql_real_escape_string($_REQUEST['edit_dob']);
    // $id =  mysql_real_escape_string($_REQUEST['current_id']);
    // $status =  mysql_real_escape_string($_REQUEST['edit_status']);
    // $dept =  mysql_real_escape_string($_REQUEST['edit_dept']);
    // $doj =  mysql_real_escape_string($_REQUEST['edit_doj']);
    // $address =  mysql_real_escape_string($_REQUEST['edit_address']);
    // $mobile =  mysql_real_escape_string($_REQUEST['edit_mobile']);
    $fname = isset($_REQUEST['firstname']);
    $address = isset($_REQUEST['address']);
    $city = isset($_REQUEST['city']);
    $phonenumber = isset($_REQUEST['phonenumber']);
    $email = isset($_REQUEST['email']);
    $username = isset($_REQUEST['username']);
    $id = $_REQUEST['staff_id'];
    $sql = "UPDATE `signup1` SET firstname='$fname',address='$address',city='$city',phonenumber='$phonenumber',email='$email',username='$username' WHERE id='$id'";
    // $sql = "UPDATE staff SET  name='$name', dob='$dob', relationship='$status', 
    //     department='$dept', doj='$doj', address='$address', 
    //         mobile='$mobile', gender='$gender' WHERE id='$id'";

    mysqli_query($conn, $sql);
    header('location:admin_hompage.php');
}
?>