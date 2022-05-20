<?php 
session_start();
$conn=new mysqli("localhost","root","","signup_db")or die("mysqli_error()");
    
if($_SERVER["REQUEST_METHOD"] === "POST") {

    $username=$_SESSION['name'];
    $question=$_POST['question'];
    $password=$_POST['password'];
    

    
    $sql="SELECT * FROM `security` where username='$username'";
    $query=mysqli_query($conn,$sql);
        $numrows=mysqli_num_rows($query);  
        if($numrows>0)  
        {  
            $row=mysqli_fetch_array($query,MYSQLI_ASSOC);
            
            if($row['username']==$username && $row['password']==$password && $row['question']==$question)  
            
            {   
                
                $_SESSION['submit']="1";
                
                ?>
                <script>
                    document.location="pattern_login.php"
                </script>
                <?php
            }
            else{
                ?>
                <script>
                    alert("invalid question or password");
                    document.location="security.php"
                </script>
                <?php
            }
        }
        else{
            ?>
            <script>
                alert("No user found!");
                document.location="security.php"
            </script>
            <?php
        }
    }
    else{
        ?>
        <script>
            alert("error");
            document.location="security.php"
        </script>
        <?php
    }
?>
