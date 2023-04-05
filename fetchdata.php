<?php
include("db.php");
?>

<?php

// SQL query to select data from database
$sql = " SELECT * FROM submissions ORDER BY 'No.' DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>