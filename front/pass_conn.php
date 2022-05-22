<?php 
session_start();
$errors = [];
$token;
include("errors.php"); 

$db = mysqli_connect('localhost', 'root', '', 'signup_db');
if (isset($_POST['reset-password'])) {
 
  $email=$_REQUEST['email'];
  $_SESSION['email']=$email;
  $email = mysqli_real_escape_string($db, $_POST['email']);
	$sqlcreate = "CREATE TABLE IF NOT EXISTS `password_reset` (`id` INT(100) NOT NULL AUTO_INCREMENT , `email` VARCHAR(233) NOT NULL ,`token` VARCHAR(100) NOT NULL, PRIMARY KEY (`id`, `email`)) ENGINE = InnoDB;";
  if(mysqli_query($db,$sqlcreate)){  
  $query = "SELECT email FROM signup1 WHERE email='$email'";  
  $results = mysqli_query($db, $query);
  if (empty($email)) {
    ?>
    <script>
        alert("Email id is required!");
        document.location="reset.php";
    </script>
    <?php
  }else if(mysqli_num_rows($results) <= 0) {
    ?>
    <script>
      alert("Sorry, no user exists on our system with that email");
      document.location = "reset.php";
    </script>
    <?php
  }
  $token=$_REQUEST['token'];
  $_SESSION['token'] = $token;
  $token = bin2hex(random_bytes(50));
  $url="localhost/new_password.php?token=".$token;
  if (count($errors) == 0){
    $sql = "INSERT INTO password_reset(email, token) VALUES ('$email', '$token')";
    $results = mysqli_query($db, $sql);
    $to = $email;
    $subject = "Reset your password on ";
    $msg='<p> Here is link: </br>';
    $msg .='<a href="' .$url . '"></a></p>';
    $msg = wordwrap($msg,70);
    $headers = "From: ponnekantilokesh654@gmail.com";
    if(mail($to, $subject, $msg, $headers)){
      header('location: notify.php?email=' . $email); 
    }
    else{
      echo "failed to sent email";
    }
    
  }
}
}
$con = mysqli_connect('localhost','root', '', 'signup_db');
if($con === false){
    die("ERROR: Could not connect. ". mysqli_connect_error());
}
if (isset($_POST["new_password"])  ){
  $token = $_SESSION["token"];
  $query = mysqli_query($con,"SELECT * FROM `password_reset` WHERE `token`='".$token."' ;");
  $row = mysqli_num_rows($query);
  $row = mysqli_fetch_assoc($query);
if(isset($_POST["new_password"])){
$pass1 = mysqli_real_escape_string($con,$_POST["password"]);
$pass2 = mysqli_real_escape_string($con,$_POST["repeat_password"]);
$email = $_SESSION["email"];
if ($pass1!=$pass2){
  ?>
  <script>
    alert("Both passwords should match..");
    document.location="new_password.php";
  </script>
  <?php
$error.= "<p>Password do not match, both password should be same.<br /><br /></p>";
  }
  else{
mysqli_query($con,"UPDATE signup1 SET password='$pass1' WHERE email='$email';");
?>
<script>
  alert("Password updated succesfully..");
  document.location="ps.php";
</script>
<?php
	}		
}
else{
  echo "fail2";
}
}

?>
