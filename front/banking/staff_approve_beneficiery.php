<?php
session_start();

if (!isset($_SESSION['staff_login']))
    //header('location:staff_login.php');   
?>
<?php
if (isset($_REQUEST['submit_id'])) {
    include '_inc/dbconn.php';
    $id = $_REQUEST['customer_id'];
    $sql = "SELECT * FROM beneficiary1 WHERE id='$id'";
    $result =  mysqli_query($conn, $sql);
    $rws =  mysqli_fetch_array($result);

    if ($rws[5] == "PENDING")
        $sql = "UPDATE beneficiary1 SET status='ACTIVE' WHERE id='$id'";

    // include '_inc/dbconn.php';
    // $sql = "UPDATE beneficiary1 SET status='ACTIVE' WHERE id='$id'";
    mysqli_query($conn, $sql);

    echo '<script>alert("Beneficiary status ACTIVE ");';
    echo 'window.location= "staff_beneficiary.php";</script>';
}
