<?php
    $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "SHLTD";
    // $servername = "localhost";
    // $username = "root";
    // $password = "root";
    // $dbname = "SHLTD";
    $employee_name = $_POST["username"];

    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "DELETE FROM Employees WHERE Name = '$employee_name'";
    $result = $conn->query($sql);
    header("Location: View_Employee.php");
?>