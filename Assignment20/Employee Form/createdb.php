<?php

$user = "root";
$password = "";
$db = "localhost";

$conn = mysqli_connect($db,$user,$password);
if(!$conn)
{
    echo"Error";
}
else
{
    $sql = "CREATE database mydb3";
    $result = mysqli_query($conn,$sql);
    if(!$result)
    {
        echo"ERROR";
    }
    else
    {
        echo"mydb Database Created Successfully!!!";
    }
}
?>