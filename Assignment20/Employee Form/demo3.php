<?php

// Create a multidimensional array to store information about students
$students = array(
    array("John", 21, "Male"),
    array("Alice", 19, "Female"),
    array("Bob", 20, "Male"),
    array("Emily", 22, "Female"),
);

// Access and print elements from the multidimensional array
echo "Information about students:\n";
echo "----------------------------\n";
echo "Name\t\tAge\tGender\n";
echo "----------------------------\n";

foreach ($students as $student) {
    echo $student[0] . "\t\t" . $student[1] . "\t" . $student[2] . "\n";
}

?>
