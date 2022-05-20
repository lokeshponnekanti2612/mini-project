<?php
session_start();
$question=$_REQUEST['question'];
$_SESSION['ques'] = $question;
$conn=mysqli_connect("localhost","root","","signup_db");
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else{
    ?>
    <script>
        document.location="security_signuprun.php"
    </script>
    <?php
}
?>