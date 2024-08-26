<?php
    $servername = "localhost";
$username = "root";
$password = "root";
$dbname = "SHLTD";
    // $servername = "localhost";
    // $username = "root";
    // $password = "root";
    // $dbname = "SHLTD";
    $room_type = $_POST["room_type"];
    $frequency = $_POST["frequency"];
    $price = $_POST["price"];

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO Room_Info VALUES ('$room_type','$frequency','$price')";
    if ($conn->query($sql) === TRUE) {
        header("Location: ./View_Room.php");
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>