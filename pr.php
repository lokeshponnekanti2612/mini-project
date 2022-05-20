<?php

session_start (); 
$conn=mysqli_connect("localhost","root","","signup_db");
       
if(isset($_POST['button'])){
	$email=$_SESSION['email'];
   
    $query1= "SELECT username FROM signup1 WHERE email='$email'";
  
    $result=mysqli_query($conn,$query1);
  
    $row = mysqli_fetch_assoc($result);

    $a=$row['username']; 
  
	$b = $_REQUEST['input1'];
    
    if (empty($b)) {
        ?>
        <script>
            alert("Please enter password !");
            document.location="ps.php"
        </script>
        <?php
    }
        $res=mysqli_query($conn,"UPDATE `pattern1` SET pattern='$b' WHERE username='$a';");
        
        
   ?>
   <script>
       alert("password updated successfully...");
       document.location="index.php";
    </script>
    <?php
}
else{
    echo("fail");
}
?>
