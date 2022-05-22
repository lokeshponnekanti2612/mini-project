
<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
</head>
<body>
     <form action="login_db.php" method="post">
        <center>
        <h2>LOGIN</h2>
        <table>
            <tr>
                <td>
                    <label for="username">User Name :</label>
                </td>
                <td>
                    <input type="text" name="username" required>
                </td>
            </tr>
            <tr>                        
                        <td>
                            <label for="type" >User Type:</label>
                        </td>
                        <td>
                            <select name="type" id="user type">
                                <option name="type" value="employee">Employee</option></br>
                                <option name="type" value="admin">Admin</option></br>
                            
                            </select>
                        </td>
                    </tr>
            <tr>
                <td>
                    <label for="password">Password : </label>
                </td>
                <td>
                    <input type="password" name="password" required >
                </td>
            </tr>
            <tr>
                <td>
                    <center>
                        <button type="submit" name="submit" value="submit">Login</button>
                    </center>
                </td>
            </tr>
        </table>
        <?php
        if(array_key_exists('submit', $_POST)) {
            button1();
        }        
        function button1() {
            ?>
            <script>
                document.location="login_db.php"
            </script>
            <?php
        }        
    ?>
        </center>
     </form>
</body>
</html>

