<!-- <!DOCTYPE html>
<html>
    <head>
        <title>Security Question</title>
    </head>
    <body>
        <center>
            <br>
            <h2>Second Level</h2>
        <form action="securityrun.php" method="post">
            <table>
                <tr>
                    <td>
                        <label for="question">Questions: </label>                    
                        <select id="question" name="question">
                        <option value="1">What is the name of a college you applied to but didn't attend?</option></br>
                        <option value="2">Where was the destination of your most memorable college trip?</option></br>
                        <option value="3">Who is your favourite crickter?</option></br>
                        <option value="4">What is your best friend name?</option></br>
                        <option value="5">If you have a magical power,what would it be?</option></br>                      
                        </select>
</br>
                    </td>
                </tr>           
            <tr>
                <td>
                    <center>
                    <label for="password">Answer:</label>
                    <input type="password" id="password" name="password" required>
                    </center>
</br>
                </td>
            </tr>            
            <tr>
                <td>
                    <center>
                    <input type="submit" value="submit" name="submit">
                    </center>
                </td>
            </tr>
            </table>
        </center>
    </body>
</html> -->
<!DOCTYPE html>
<html>

<head>
    <title>Security Question</title>
    <link rel="stylesheet" href="security.css">
</head>

<body>


    <div class="center">
        <form action="securityrun.php" method="post">
            <h2>Second Level</h2>
            <div class="text1_field" style="display: flex; align-items: center;">
                <label for="question">Questions: </label>
                <div>
                    <select id="question" name="question" required>
                        <option value="1">What is the name of a college you applied to but didn't attend?</option></br>
                        <option value="2">What was the destination of your most memorable college trip?</option></br>
                        <option value="3">Who is your favourite crickter?</option></br>
                        <option value="4">What is your best friend name?</option></br>
                        <option value="5">If you have a magical power,what would it be?</option></br>
                    </select>
                </div>
            </div>
            <div class="text_field">

                <input type="password" id="password" name="password" required>
                <label for="password">Answer</label>
            </div>
            <button class="button" type="submit" value="Submit">Submit</button>
        </form>
    </div>
</body>

</html>