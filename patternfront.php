<?php


//include("login_conn.php"); 
$conn=mysqli_connect("localhost","root","","signup_db");
        if($conn === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
}
if(isset($_REQUEST['button'])){
	$a = $_SESSION['name'];
	$b =$_POST['input1'];
	$c=$_SESSION['type'];		
		
				$sql="SELECT * FROM `pattern1` WHERE `username`='$a' AND `pattern`='$b' AND $c=='employee'";
		        $res = mysqli_query($conn,$sql);
		        $result=mysqli_fetch_array($res);
				if($result){
					//$_SESSION["submit"]="1";
					header("location:index1.php");
				}
				else/*{
					?>
					<script>
						alert("Invalid Pattern!1");
						document.location="pattern_login.php";
					</script>
					<?php
				}*/
				{
					$sql="SELECT * FROM `pattern1` WHERE `username`='$a' AND `pattern`='$b' AND `user`='admin'";
		        	$res = mysqli_query($conn,$sql);
		        	$result=mysqli_fetch_array($res);		
					if($result){
						$_SESSION["submit"]="1";
						header("location:manager.php");
					}
					else{
					?>
					<script>
						alert("Invalid Pattern!2");
						document.location="pattern_login.php";
					</script>
					<?php
					}	
				}			
			
		
		}
session_destroy();
?>
