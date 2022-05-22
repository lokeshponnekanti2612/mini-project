<!DOCTYPE html>
<html>

<head>
    <title>Security Question</title>
    <link rel="stylesheet" href="newcss.css">
</head>

<body>
    <?php include 'header.php'; ?>
    <div class='content_addstaff'>
        <?php include 'admin_navbar.php' ?>
        <div class='addstaff'>


            <div class="center">
                <form action="security_add_run.php" method="post">
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

                    </div></br>
                    <div class="text_field">
                        <label for="password">Answer:</label>
                        <input type="password" id="password" name="password" required>

                    </div>
                    <button class="button" type="submit" value="Submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>