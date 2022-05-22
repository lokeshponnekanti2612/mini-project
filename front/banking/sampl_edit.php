<?php
include("_inc/dbconn.php");
if (isset($_GET['id'])) {
    $record_id = mysqli_real_escape_string($conn, $_GET['id']);

    $getinfo = mysqli_query($db_connect, "SELECT * FROM signup1 WHERE id = '$record_id' ");
    $getinfocount = mysqli_num_rows($getinfo);

    if ($getinfocount == 1) {
        if ($fetch = mysqli_fetch_assoc($getinfo)) {
            $fname = $fetch['firstname'];
            $address = $fetch['address'];
            $city = $fetch['city'];
            $phnumber = $fetch['phonenumber'];

            $email = $fetch['email'];
            $uname = $fetch['username'];
        }
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
        <form action="" method="">
            <table align="center">
                <input type="hidden" name="id" value="<?php echo $id; ?>" />
                <tr>
                    <td colspan='2' align='center' style='color:#2E4372;'>
                        <h3><u>Edit Staff Details</u></h3>
                    </td>
                </tr>
                <tr>
                    <td>First name:</td>
                    <td><input type="text" name="firstname" value="<?php
                                                                    echo $fname
                                                                    ?>" required="" /></td>
                </tr>

                <tr>
                    <td>Adress:</td>
                    <td><input type="text" name="address" value="<?php echo $address ?>" required="" /></td>
                </tr>
                <tr>
                    <td>City:</td>
                    <td><input type="text" name="city" value="<?php echo $city ?>" required="" /></td>
                </tr>
                <tr>
                    <td>Phone Number:</td>
                    <td><input type="text" name="phonenumber" value="<?php echo $phnumber ?>" required="" /></td>
                </tr>
                <tr>
                    <td>Email id:</td>
                    <td><input type="text" name="email" value="<?php echo $email ?>" required="" /></td>
                </tr>
                <tr>
                    <td>User name:</td>
                    <td><input type="text" name="username" value="<?php echo $uname ?>" required="" /></td>
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