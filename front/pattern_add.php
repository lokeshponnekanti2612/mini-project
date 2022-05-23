<?php session_start();

//if (!isset($_SERVER['HTTP_REFERER'])){ 
?>
<script>
    //document.location = "signup1.php"
</script>
<?php
//}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Third Step To Login</title>
    <link rel="icon" href="images/fav1.jpg" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="pattern.css">
</head>

<body>
    <div class="center">
        <br><br>
        <?php
        $value1 = 'green';
        $value2 = 'orange';
        $value3 = 'pink';
        $value4 = 'red';
        $value5 = 'purple';
        ?>

        <form action="pattern_add_run.php" method="POST">
            <h1>THRID LEVEL OF PASSWORD AUTHENTICATION SYSTEM</h1>

            <h1>Pattern</h1>
            <br><br><br>
            <div class="txt1_field">
                <input type="hidden" id="value1" value="<?php echo $value1; ?>" name="value1">
                <input type="hidden" id="value2" value="<?php echo $value2; ?>" name="value2">
                <input type="hidden" id="value3" value="<?php echo $value3; ?>" name="value3">
                <input type="hidden" id="value4" value="<?php echo $value4; ?>" name="value4">
                <input type="hidden" id="value5" value="<?php echo $value5; ?>" name="value5">
            </div>
            <div class="txt1_field">
                Enter your pattern: <input readonly type="password" id="input1" name="input1" value="" required placeholder="Choose your Combination"><br><br><br>
                <input class="btn Green" type="button" value="green" name="button" onclick="populateTextareaone()">
                <input class="btn Orange" type="button" value="Orange" name="button" onclick="populateTextareatwo()">
                <input class="btn Pink" type="button" value="Pink" name="button" onclick="populateTextareathree()">
                <input class="btn Red" type="button" value="Red" name="button" onclick="populateTextareafour()">
                <input class="btn Purple" type="button" value="Purple" name="button" onclick="populateTextareafive()">
                <br>
                <br>
            </div>

            <div style="display: flex; align-self: center; justify-content: center">
                <button style="margin: 0 0.5rem" class="btn Purple" type="button" value="clear" name="button" onclick="clearit()">Clear</button>
                <button style="margin: 0 0.5rem" class="btn Purple" type="submit" value="submit" name="button" required>Submit</button>
            </div>


        </form>

        <script type="text/javascript">
            function clearit() {

                document.getElementById("input1").value = '';
                txt = '';

            }
            txt = ''

            function populateTextareaone() {
                txt = txt.concat(document.getElementById('value1').value);
                document.getElementById('input1').value = txt;

            }

            function populateTextareatwo() {
                txt = txt.concat(document.getElementById('value2').value);
                document.getElementById('input1').value = txt;

            }

            function populateTextareathree() {
                txt = txt.concat(document.getElementById('value3').value);
                document.getElementById('input1').value = txt;

            }

            function populateTextareafour() {
                txt = txt.concat(document.getElementById('value4').value);
                document.getElementById('input1').value = txt;

            }

            function populateTextareafive() {
                txt = txt.concat(document.getElementById('value5').value);
                document.getElementById('input1').value = txt;

            }
        </script>

    </div>

</body>

</html>