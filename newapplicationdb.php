<?php
header('Content-Type: application/json');
$response = array();
if (isset($_GET['AgentID'])){

	$AgentID = $_REQUEST['AgentID'];

	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "agentsystem";

	$conn = new mysqli($servername, $username, $password, $db);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM agent WHERE AgentID='$AgentID'";

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while ($row = mysqli_fetch_array($result)) {
			array_push($response, $row);
		}

		echo json_encode($response);
	} else {
		echo "No record found";
	}

	$conn->close();
}
