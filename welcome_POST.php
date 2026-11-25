<?php

// Receiving data from the POST method
$name = $_POST["name"];
$email = $_POST["email"];

// Displaying the received data
echo "<h2>Welcome (received via POST)</h2>";

echo "Name: " . htmlspecialchars($name) . "<br>";
echo "Email: " . htmlspecialchars($email);

?>
