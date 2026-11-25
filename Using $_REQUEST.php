
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["name"]) && !empty(trim($_POST["name"]))) {

        $name = $_REQUEST["name"];

        echo "<h2>Hello, " . htmlspecialchars($name) . "!</h2>";

        echo "Data received using the \$_REQUEST array.";

    } else {

        echo "Please enter your name.";

    }

} else {
?>

<!DOCTYPE html>
<html>
<head>
    <title>REQUEST Method</title>
</head>
<body>

    <h2>Personal Information</h2>

    <form action="request.php" method="post">

        Name:
        <input type="text" name="name" required>

        <input type="submit" value="Send">

    </form>

</body>
</html>

<?php
}
?>
