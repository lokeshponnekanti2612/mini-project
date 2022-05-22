<?php
session_start();

if (!isset($_SESSION['admin_login']))
    //header('location:adminlogin.php');   
?>
<!DOCTYPE html>
<?php
include '_inc/dbconn.php';
if (isset($_GET['id'])) {
    $id =  mysqli_real_escape_string($conn, $_REQUEST['staff_id']);
    $sql = "SELECT * FROM `signup1` WHERE id=$id";
    $result =  mysqli_query($conn, $sql);
    $rws =  mysqli_fetch_array($result);
?>
<?php
    $delete_id =  mysqli_real_escape_string($conn, $_REQUEST['staff_id']);
    if (isset($_REQUEST['submit2_id'])) {
        $sql_delete = "DELETE FROM `staff` WHERE `id` = '$delete_id'";
        mysqli_query($conn, $sql_delete);
        header('location:delete_staff.php');
    }
}
?>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="newcss.css" />
    <title>staff editing</title>
</head>
<?php include 'header.php'; ?>
<div class='content_addstaff'>
    <?php include 'admin_navbar.php' ?>
    <div class='addstaff'>
        <form action="alter_staff.php" method="POST">
            <table align="center">
                <input type="hidden" name="id" value="<?php echo $id; ?>" />
                <tr>
                    <td colspan='2' align='center' style='color:#2E4372;'>
                        <h3><u>Edit Staff Details</u></h3>
                    </td>
                </tr>
                <tr>
                    <td>First name:</td>
                    <td><input type="text" name="firstname" value="<?php if (isset($rws[1])) {
                                                                        echo $rws[1];
                                                                    } ?>" required="" /></td>
                </tr>

                <tr>
                    <td>Adress:</td>
                    <td><input type="text" name="address" value="<?php echo isset($rws[3]); ?>" required="" /></td>
                </tr>
                <tr>
                    <td>City:</td>
                    <td><input type="text" name="city" value="<?php echo isset($rws[4]); ?>" required="" /></td>
                </tr>
                <tr>
                    <td>Phone Number:</td>
                    <td><input type="text" name="phonenumber" value="<?php echo isset($rws[5]); ?>" required="" /></td>
                </tr>
                <tr>
                    <td>Email id:</td>
                    <td><input type="text" name="email" value="<?php echo isset($rws[6]); ?>" required="" /></td>
                </tr>
                <tr>
                    <td>User name:</td>
                    <td><input type="text" name="username" value="<?php echo isset($rws[9]); ?>" required="" /></td>
                </tr>



                <tr>
                    <td colspan="2" align='center' style='padding-top:20px'><input type="submit" name="alter" value="UPDATE DATA" class='addstaff_button' /></td>
                </tr>
            </table>
        </form>


    </div>
</div>
</body>

</html>