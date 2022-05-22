
<?php
session_start();
if($_SERVER["REQUEST_METHOD"] === "POST") {
    $username=$_SESSION['name'];
    $question=$_POST['question'];
    $password=$_POST['password'];

    $conn=new mysqli("sql105.epizy.com","epiz_30636670","ybxg0riBjy","epiz_30636670_signup_db")or die("mysqli_error()");
    
    $sql="SELECT * FROM `security` where username='$username'";
    $query=mysqli_query($conn,$sql);
        $numrows=mysqli_num_rows($query);  
        if($numrows>0)  
        {  
            $row=mysqli_fetch_array($query,MYSQLI_ASSOC);
            if($row['question']!=$question){
                ?>
                <script>
                    alert("Incorrect Question");
                    document.location="security.php"
                </script>
                <?php
            }
            else if($row['username']==$username && $row['password']==$password )  
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
                    alert("invalid password");
                    document.location="security.php"
                </script>
                <?php
            }
        }
        else{
            ?>
            <script>
                alert("invalid password");
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
<?php 
session_start();

$conn=new mysqli("localhost","root","","signup_db")or die("mysqli_error()");
if($_SERVER["REQUEST_METHOD"] === "POST") {
    $username=$_SESSION['name'];
    //$question=$_POST['question'];    
    if(isset($_POST['question'])) {
        $question = $_POST['question']; // or $_GET['category'] if your form method was GET
    }
    $password=$_POST['password'];   
    $sql="SELECT * FROM `security` where username='$username'";
    $query=mysqli_query($conn,$sql);
        $row=mysqli_num_rows($query);  
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
