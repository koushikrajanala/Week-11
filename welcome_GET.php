<?php

// Receiving data from the GET method
$name = $_GET["name"];
$city = $_GET["city"];

// Displaying the received data
echo "<h2>Welcome (received via GET)</h2>";

echo "Name: " . htmlspecialchars($name) . "<br>";
echo "City: " . htmlspecialchars($city);

?>
