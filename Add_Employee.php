<?php
    $servername = "localhost";
$username = "root";
$password = "root";
$dbname = "SHLTD";
    // $servername = "localhost";
    // $username = "root";
    // $password = "root";
    // $dbname = "SHLTD";
    $employee_name = $_POST["employee_name"];

    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query = "INSERT INTO Employees VALUES ('$employee_name')";

    $conn->query($query);

    header("Location: ./View_Employee.php");
?>