<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_SESSION["username"];
    $question = $_POST['question'];
    $password = $_POST['password'];

    $conn = new mysqli("localhost", "root", "", "signup_db") or die("mysqli_error()");

    $sql = "SELECT * FROM `security` where username='$username'";
    $query = mysqli_query($conn, $sql);
    $numrows = mysqli_num_rows($query);
    if ($numrows > 0) {
        $row = mysqli_fetch_array($query, MYSQLI_ASSOC);
        if ($row['question'] != $question) {
?>
            <script>
                alert("Incorrect Question");
                document.location = "security.php"
            </script>
        <?php
        }
        if (
            $row['username'] == $username and $row['password'] == $password and
            $_SESSION["type"] == 'admin'
        ) {

            $_SESSION['submit'] = "1";

        ?>
            <script>
                document.location = "pattern_login.php"
            </script>
            <?php
        }
        if (password_verify($password, $row['password'])) {

            if ($row['username'] == $username) {

                $_SESSION['submit'] = "1";

            ?>
                <script>
                    document.location = "pattern_login.php"
                </script>
            <?php
            }
        } else {
            ?>
            <script>
                alert("invalid password1234");
                document.location = "security.php"
            </script>
        <?php
        }
    } else {
        ?>
        <script>
            alert("invalid password1 out");
            document.location = "security.php"
        </script>
    <?php
    }
} else {
    ?>
    <script>
        alert("error");
        document.location = "security.php"
    </script>
<?php
}
?>