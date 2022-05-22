<!DOCTYPE html>
<html>

<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="signup.css">
</head>

<body>
    <div class="center">
        <form action="connection.php" method="post">
            <h2>Registration Form</h2>

            <div style="display:flex; align-items: center; justify-content: space-between">
                <div class="form__left" style="margin: 0 0.5rem; display: flex; align-items: flex-start; justify-content: flex-start; flex-direction: column ">
                    <div class="text_field">
                        <span></span>
                        <input type="text" id="firstname" name="firstname" required>
                        <label for="firstname">First Name</label>
                    </div>
                    <div class="text_field">
                        <input type="email" id="email" name="email" required>
                        <label for="email">Email </label>
                        <span></span>
                    </div>
                </div>
                <div class="form__right" style="margin: 0 0.5rem; display: flex; align-items: flex-start; justify-content: flex-start; flex-direction: column ">
                    <div class="text_field">
                        <input type="text" id="lastname" name="lastname" required>
                        <label for="lastname">Last Name </label>
                    </div>
                    <div class="text_field">
                        <input type="tel" id="phonenumber" name="phonenumber" pattern=[0-9]{10} required>
                        <label for="phonenumber">Phone Number </label>
                    </div>
                </div>
            </div>

            <div class="text_field">
                <textarea style="width: 100%; height: 6rem;" rows="3" cols="21" id="adress" name="adress" required></textarea>
                <label for="adress">Address </label>
            </div>
            <div class="text_field">
                <input type="text" id="city" name="city" required>
                <label for="city">City </label>
            </div>


            <div class="text1_field" style="margin-bottom: 1.5rem;">
                <label for="gender">Gender </label>
                <div>
                    <input type="radio" name="gender" value="male" required>
                    <label for="gender">Male</label>
                    </br>
                    <input type="radio" name="gender" value="female" required>
                    <label for="gender">Female</label>
                </div>
            </div>
            <div class="text2_field">
                <label for="type">User Type</label>
                <div>
                    <select name="type" id="user type" required>
                        <option name="type" value="employee">Employee</option></br>
                        <option name="type" value="admin">Admin</option></br>
                    </select>
                </div>
            </div>
            <div class="text_field">
                <input type="text" id="username" name="username" required></br>
                <label for="username">UserName </label>
            </div>





            <div style="display:flex; align-items: center; justify-content: space-between">
                <div class="form__left" style="margin: 0 0.5rem; display: flex; align-items: flex-start; justify-content: flex-start; flex-direction: column ">
                    <div class="text_field">
                        <input type="password" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain atleast 1 uppercase letter,atleast 1 lower case letter 1 special character and minimum of 8 characters" required></br>
                        <label for="password">Password </label>


                    </div>

                </div>
                <div class="form__right" style="margin: 0 0.5rem; display: flex; align-items: flex-start; justify-content: flex-start; flex-direction: column ">

                    <div class="text_field">
                        <input type="password" name="confirm_password" id="confirm_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain atleast 1 uppercase letter,atleast 1 lower case letter 1 special character and minimum of 8 characters" required></br>
                        <label for="confirm_password">Confirm_Password </label>
                    </div>
                </div>
            </div>






            <button class="buton" type="submit" value="submit" name="submit">Sign Up </button>




        </form>
    </div>
</body>

</html>