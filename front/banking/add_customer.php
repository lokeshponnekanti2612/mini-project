<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "signup_db");

if (!isset($_SESSION['admin_login']))
    //header('location:adminlogin.php');   
?>
<?php
include '_inc/dbconn.php';
$name =  $_REQUEST['customer_name'];
$dob =  $_REQUEST['customer_dob'];
$nominee =  $_REQUEST['customer_nominee'];
$type =  $_REQUEST['customer_account'];
$credit =  $_REQUEST['initial'];
$gender =  $_REQUEST['customer_gender'];
$address =  $_REQUEST['customer_address'];
$mobile =  $_REQUEST['customer_mobile'];
$email = $_REQUEST['customer_email'];

//salting of password
//$salt="@g26jQsG&nh*&#8v";
$password =  $_REQUEST['customer_pwd'];

$branch = $_REQUEST['branch'];
$date = date("Y-m-d");
switch ($branch) {
    case 'KOLKATA':
        $ifsc = "K421A";
        break;
    case 'DELHI':
        $ifsc = "D30AC";
        break;
    case 'BANGALORE':
        $ifsc = "B6A9E";
        break;
}

$sql3 = "SELECT MAX(id) from customer";
$result = mysqli_query($conn, $sql3);
$rws =  mysqli_fetch_array($result);
$id = $rws[0] + 1;
$sql1 = "CREATE TABLE passbook" . $id . " 
    (transactionid int(5) AUTO_INCREMENT, transactiondate date, name VARCHAR(255), branch VARCHAR(255), ifsc VARCHAR(255), credit int(10), debit int(10), 
    amount float(10,2), narration VARCHAR(255), PRIMARY KEY (transactionid))";

$sql = "insert into `customer` values(NULL,'$name','$gender','$dob','$nominee','$type','$user','$address','$mobile',
    '$email','$password','$branch','$ifsc')";
mysqli_query($conn, $sql);
mysqli_query($conn, $sql1);
$sql4 = "insert into passbook" . $id . " values('','$date','$name','$branch','$ifsc','$credit','0','$credit','Account Open')";
mysqli_query($conn, $sql4);
?>
<script>
    alert("customer added successfully");
</script>
<?php
header('location:admin_hompage.php');
