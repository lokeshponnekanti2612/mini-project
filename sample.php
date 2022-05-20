<?php
session_start();
if($_SERVER["REQUEST_METHOD"] === "POST") {
    $username=$_SESSION['name'];
    $question=$_POST['question'];
    $password=$_POST['password'];
    $c=$_SESSION['type'];

    $conn=new mysqli("localhost","root","","signup_db")or die("mysqli_error()");
    
    $sql="SELECT * FROM `security` where username='$username'";
    $query=mysqli_query($conn,$sql);
        $numrows=mysqli_num_rows($query);  
        if($numrows>0)  
        {  
            $row=mysqli_fetch_array($query,MYSQLI_ASSOC);
            if($row['question']!=$question){
                ?>
                <script>
                    alert("Incorrect Question1");
                    document.location="security.php"
                </script>
                <?php
            }
            if($row['user']==$c){
                if($row['username']==$username && $row['password']==$password)
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
                        alert("invalid password2");
                        document.location="security.php"
                    </script>
                    <?php
                }
            }
    
            if($row['user']==$c){
                if($row['username']==$username && $row['password']==$password )  
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
                        alert("invalid password1 employee");
                        document.location="security.php"
                    </script>
                    <?php
                }
            }
                 
            
        }
        else{
            ?>
            <script>
                alert("invalid password13");
                //document.location="security.php"
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