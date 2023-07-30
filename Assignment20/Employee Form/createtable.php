<?php

$user = "root";
$password = "";
$db = "localhost";
$database = "mydb3";
$conn = mysqli_connect($db,$user,$password,$database);
if(!$conn)
{
    echo"Error";
}
else
{
    $sql = "CREATE table  employee_info(id INT(3) PRIMARY KEY AUTO_INCREMENT, first_name VARCHAR(10), 
    last_name VARCHAR(10), contact_no INT(10), designation VARCHAR(10), department VARCHAR(10), salary INT(10))
    ";
    $result = mysqli_query($conn,$sql);
    if(!$result)
    {
        echo"ERROR";
    }
    else
    {
        echo"Employee Information Table Created Successfully!!!";
    }
}
?>