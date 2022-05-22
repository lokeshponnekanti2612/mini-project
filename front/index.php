<!DOCTYPE html>
<html>

<head>
    <title> index</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <div class="center">
        <form action="login_db.php" method="post">

            <h2>LOGIN</h2>
            <div class="txt1_field">
                <label for="type" style="font-size: 18px">User Type :</label>

                <div>
                    <input type="radio" name="type" value="admin">
                    <label for="type">Admin</label></br>
                    <input type="radio" name="type" value="employee" checked="checked">
                    <label for="type">Employee</label>
                    <br />

                </div>

                <!-- <select name="type" id="user type">
                <option name="type" value="employee">Employee</option></br>
                <option name="type" value="admin">Admin</option></br>
            
            </select> -->
            </div>
            <div class="txt_field">
                <span></span>

                <input type="text" name="username" required>
                <label>User Name </label>
            </div>


            <div class="txt_field">
                <span></span>

                <input type="password" name="password" required>
                <label for="password">Password : </label>

            </div>

            <button class="btn" type="submit" name="submit" value="submit">Login</button>

            <p>Don't have an account? <a href="signup1.php" class="signup_link"><b>Sign Up</b> </a>
            </p>

            <a href="reset.php" class="pass">Forgot password?</a>




            <?php
            if (array_key_exists('submit', $_POST)) {
                button1();
            }
            function button1()
            {
            ?>
                <script>
                    document.location = "login_db.php"
                </script>
            <?php
            }

            ?>

        </form>
    </div>
</body>

</html>