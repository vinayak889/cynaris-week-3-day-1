<?php

echo "<h1>PHP Control Flow Examples</h1>";

// Variables
$number = 10;

// If-else
if ($number > 0) {
    echo "Positive Number<br>";
} else {
    echo "Negative Number<br>";
}

// For loop
echo "<h2>For Loop</h2>";

for ($i = 1; $i <= 5; $i++) {
    echo $i . "<br>";
}

// While loop
echo "<h2>While Loop</h2>";

$count = 1;

while ($count <= 5) {
    echo $count . "<br>";
    $count++;
}

// Array
echo "<h2>Array</h2>";

$fruits = ["Apple", "Banana", "Mango"];

foreach ($fruits as $fruit) {
    echo htmlspecialchars($fruit) . "<br>";
}

// Function
echo "<h2>Grade Calculation</h2>";

require_once 'functions.php';

echo calculateGrade(85);

?>