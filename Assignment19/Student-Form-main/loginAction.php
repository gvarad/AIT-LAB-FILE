<?php
    session_start();
    $uName = $_POST['username'];
    $password = $_POST['pass'];

    $hostname = 'localhost'; 
    $username = 'root'; 
    $userpass = ''; 
    $dbname = 'test'; 
    
    $conn = mysqli_connect($hostname,$username,$userpass,$dbname);
    if (!$conn) {
        die ("Connection Failed: ". mysqli_connect_error());
    }
    $sql = "select userName, pass FROM student";
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 0) 
    {
        while ($row = mysqli_fetch_assoc($result)) 
        {
            if ($row['userName'] == $uName && $row['pass'] == $password) 
            {
                if (isset($_POST['login']) && !empty($_POST['username']) 
                && !empty($_POST['pass'])) 
                {
                   echo"Session created successfully!!";
                    header("location: home.html"); 
                    exit(); 
                }
            }     
        }
    } 
    else {
        echo "Username & password are wrong";
    }
?>

