<?php
    $servername = "db5014964101.hosting-data.io";
    $username = "dbu1108802";
    $password = "J@ww@d1304.09.2010";
    $dbname = "dbs12436869";
    // $servername = "localhost";
    // $username = "root";
    // $password = "root";
    // $dbname = "SHLTD";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO Contact_Form_Responses(Timestamp, Name, Email, Message) VALUES (current_timestamp(),'$name','$email','$message')";
    if ($conn->query($sql) === TRUE) {
        header("Location: ./Contact.html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>