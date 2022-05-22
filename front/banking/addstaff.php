<?php
session_start();

if (!isset($_SESSION['admin_login']))
    //header('location:adminlogin.php');   
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Add Staff</title>

    <link rel="stylesheet" href="newcss.css">
</head>

<?php include 'header.php'; ?>

<div class='content_addstaff'>
    <?php include 'admin_navbar.php' ?>
    <div class='addstaff'>
        <form action="add_staff.php" method="POST">
            <table>
                <tr>
                    <td>
                        <label for="firstname">First Name : </label>
                    </td>
                    <td>
                        <input type="text" id="firstname" name="firstname" required></br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="lastname">Last Name : </label>
                    </td>
                    <td>
                        <input type="text" id="lastname" name="lastname" required></br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email">Email : </label>
                    </td>
                    <td>
                        <input type="email" id="email" name="email" required>

                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="adress">Adress : </label>
                    </td>
                    <td>
                        <textarea rows="3" cols="21" id="adress" name="adress" required></textarea></br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="city">City : </label>
                    </td>
                    <td>
                        <input type="text" id="city" name="city" required></br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="phonenumber">Phone Number : </label>
                    </td>
                    <td>
                        <input type="tel" id="phonenumber" name="phonenumber" pattern=[0-9]{10} required></br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="gender">Gender : </label>
                    </td>
                    <td>
                        <input type="radio" name="gender" value="male" required>Male</br>
                        <input type="radio" name="gender" value="female" required>Female</br>
                    </td>
                </tr>
                <tr>

                    <td>
                        <label for="type">User Type:</label>
                    </td>
                    <td>
                        <!-- <select name="type" id="user type" required>
                            <option name="type" value="employee">Employee</option></br> -->
                        <input type="radio" name="type" value="employee" required>Employee</br>


                        <!-- </select> -->
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="username">UserName : </label>
                    </td>
                    <td>
                        <input type="text" id="username" name="username" required></br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password">Password : </label>
                    </td>
                    <td>
                        <input type="password" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain atleast 1 uppercase letter,atleast 1 lower case letter 1 special character and minimum of 8 characters" required></br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="confirm_password">Confirm_Password : </label>
                    </td>
                    <td>

                        <input type="password" name="confirm_password" id="confirm_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain atleast 1 uppercase letter,atleast 1 lower case letter 1 special character and minimum of 8 characters" required></br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center>
                            <input type="submit" value="submit">
                        </center>
                    </td>
                </tr>
            </table>
    </div>
</div>

</form>
</div>
</div>
<?php include 'footer.php'; ?>
</body>

</html>