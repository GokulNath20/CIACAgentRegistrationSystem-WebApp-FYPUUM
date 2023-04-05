<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "agentsystem";
$conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    $query = "SELECT * FROM `Student Details`;";

    // FETCHING DATA FROM DATABASE
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // OUTPUT DATA OF EACH ROW
        while ($row = $result->fetch_assoc()) {
            echo "Roll No: " .
                $row["Roll_No"] . " - Name: " .
                $row["Name"] . " | City: " .
                $row["City"] . " | Age: " .
                $row["Age"] . "<br>";
        }
    } else {
        echo "0 results";
    }

    $conn->close();
}
