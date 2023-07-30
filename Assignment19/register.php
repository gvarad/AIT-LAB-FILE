<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "students";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve form data
$student_id = $_POST['student_id'];
$first_name = $_POST['first_name'];
$surname = $_POST['surname'];
$mobile_no = $_POST['mobile_no'];
$address = $_POST['address'];

// Insert data into the database
$sql = "INSERT INTO students (student_id, first_name, surname, mobile_no, address)
        VALUES ('$student_id', '$first_name', '$surname', '$mobile_no', '$address')";

if (mysqli_query($conn, $sql)) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
