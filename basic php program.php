<?php
// Variables and Data Types
$name = "Arjun";
$age = 22;
$cgpa = 8.5;
$isStudent = true;

// Displaying the values
echo "<h2>PHP Basics</h2>";

echo "Name : " . $name . "<br>";
echo "Age : " . $age . "<br>";
echo "CGPA : " . $cgpa . "<br>";

// Conditional Statement
if ($cgpa >= 7.5) {
    echo "Status: Distinction<br>";
} else {
    echo "Status: Pass<br>";
}

// For Loop
echo "Numbers 1 to 5: ";

for ($i = 1; $i <= 5; $i++) {
    echo $i . " ";
}
?>
