<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "SHLTD";
    // $servername = "localhost";
    // $username = "root";
    // $password = "root";
    // $dbname = "SHLTD";
    $u_name = $_POST["u_name"];
    $pwd_name = $_POST["pwd_name"];

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "select * from Public_Credentials";
    $result = $conn->query($sql);
    $flag = 0;

    while ($row = $result->fetch_assoc()){
        if ($row["Username"] == $u_name && $row["Password"] == $pwd_name){
            $flag = 1;
            header("Location: index.html");
        }
    }
    $sql = "select * from Employee_Credentials";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()){
        if ($row["Username"] == $u_name && $row["Password"] == $pwd_name){
            $flag = 1;
            header("Location: employee.html");
        }
    }

    $sql = "select * from Manager_Credentials";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()){
        if ($row["Username"] == $u_name && $row["Password"] == $pwd_name){
            header("Location: manager.php");
        }
    }

    if($flag == 0){
        echo("Login Failed. Please try again later.");
    }
?>