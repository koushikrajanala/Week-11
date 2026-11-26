<!DOCTYPE html>
<html>
<head>
    <title>PHP Request Example</title>
</head>
<body>

    <h2>PHP Request Method</h2>

    <form method="POST" action="">
        Enter Your Name:
        <input type="text" name="username" required>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST["username"]);
        echo "<h3>Welcome, " . $name . "!</h3>";
    }
    ?>

</body>
</html>