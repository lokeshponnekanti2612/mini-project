<?php

session_start ();
$conn=mysqli_connect("localhost","root","","signup_db");
       
if(isset($_POST['reset'])){
	$email=$_SESSION['email'];

    $query1= "SELECT username FROM signup1 WHERE email='$email'";
    $result=mysqli_query($conn,$query1);
    
    $row = mysqli_fetch_assoc($result);
    $a=$row['username']; 
  
	$b = $_REQUEST['password'];
  
    if (empty($b)) {
        ?>
        <script>
            alert("Please enter password !");
            document.location="ps.php"
        </script>
        <?php
    }
        $res=mysqli_query($conn,"UPDATE `security` SET password='$b' WHERE username='$a';");
 
   ?>
   <script>
       alert("password updated successfully...");
       document.location="patternreset.php";
    </script>
    <?php
}
else{
    echo("fail");
}
?>
