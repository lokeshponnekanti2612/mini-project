<!DOCTYPE html>
<html>
    <head>
        <title>Security Question</title>
    </head>
    <body>
        <center>
            <br>
            <h2>Security Question Password Reset</h2>
        <form action="secure.php" method="post">
            <table>
                <tr>
                    <td>
                        <label for="question">Questions: </label>                    
                        <select id="question" name="question" required>
                        <option value="1">What is the name of a college you applied to but didn't attend?</option></br>
                        <option value="2">What was the destination of your most memorable college trip?</option></br>
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
                    <input type="submit" value="Submit" name="reset">
                    </center>
                </td>
            </tr>
            </table>
        </center>
    </body>
</html>