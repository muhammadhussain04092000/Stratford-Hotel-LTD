<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="x-icon" href="Images/Logo.png">
    <meta name="viewport" content="width=device-width">
    <title>Stratford Hotel LTD</title>
    <link href="View_Contact.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="navbar">
        <a href="./manager.php">Home</a>
        <!-- <a href="./View_Occupants.php">Occupants</a> -->
        <a href="./View_Room.php">Room Info</a>
        <a href="./View_Employee.php">Employees</a>
        <a href="./View_Contact.php" class="active">Contact Responses</a>
        <a href="./index.html" class="right">Log Out</a>
    </div>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "SHLTD";
        // $servername = "localhost";
        // $username = "root";
        // $password = "root";
        // $dbname = "SHLTD";

        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "select * from Contact_Form_Responses";
        $result = $conn->query($sql);
        echo "<table border = 1 style='font-size: 1.2em;' width=100% id='customers'><tr><th>Timestamp</th><th>Name</th><th>Email</th><th>Message</th></tr>";
        while ($row = $result->fetch_assoc()){
            echo "<form action='CFDelete.php' method='POST'>";
            echo "<tr><td>".$row["Timestamp"]."</td><td>".$row["Name"]."</td><td>".$row["Email"]."</td><td>".$row["Message"]."</td><td style='width: 50px'><input type='hidden' name='email' value='".$row["Email"]."'><input type='submit' value='Delete' style='background-color: #f54242; color: white; border: none; width: 100%'></td></tr>";
        }

        echo "</table>";
    ?>
    <script src="script.js"></script>
</body>
</html>