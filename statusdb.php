<?php
       
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

	   if (!$result) {
		   echo "Error: Data not found..";
	   } else
		   $test = mysqli_fetch_array($result);
	   $name = $test['name'];
	   $ICnumber = $test['ICnumber'];
	   $matric = $test['matric'];
	   $address = $test['address'];
	   $contact = $test['contact'];
   
   ?>