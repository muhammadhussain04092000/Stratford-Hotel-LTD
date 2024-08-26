<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="x-icon" href="Images/Logo.png">
    <meta name="viewport" content="width=device-width">
    <title>Stratford Hotel LTD</title>
    <link href="View_Employee.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="navbar">
        <a href="./manager.php">Home</a>
        <a href="./View_Employee.php" class="active">Employees</a>
        <a href="./View_Contact.php">Contact Responses</a>
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
        $sql = "select * from Employees";
        $result = $conn->query($sql);
        echo "<table border = 1 style='font-size: 1.2em;' width='100%' id='customers'><tr><th>Name</th><th><a style='font-size: 20px; background-color: #8a8a8a; padding: 1px 5px; text-decoration: none; color: white; border-radius: 5px;' href='Add_Employee.html'>+</a></th></tr>";
        while ($row = $result->fetch_assoc()){
            echo "<tr><td><form action='Delete_Employee.php' method='POST'>".$row["Name"]."<input type='hidden' value='".$row["Name"]."' name='username'><td><input type='submit' style='background-color: red; color: white; border: none' value='⌫'></form></td></tr>";
        }

        echo "</table>";
    ?>
    <script src="script.js"></script>
</body>
</html>