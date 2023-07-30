<?php
    session_start();
    $fName = $_REQUEST['firstname'];
    $lName = $_REQUEST['lastname'];
    $studId = $_REQUEST['studid'];
    $mobNo = $_REQUEST['mobno'];
    $uName = $_REQUEST['username'];
    $password = $_REQUEST['pass'];

    $hostname = 'localhost'; 
    $username = 'root'; 
    $userpass = ''; 
    $dbname = 'test'; 

    $conn = mysqli_connect($hostname,$username,$userpass,$dbname);
    $sql = "insert into student(fName,lName,studentId,mobNo,userName,pass) 
            VALUES ('$fName','$lName','$studId','$mobNo','$uName','$password')";
    mysqli_query($conn,$sql);
    echo "Registration Successfully completed";
    header('Refresh: 1; URL = login.html');
?>