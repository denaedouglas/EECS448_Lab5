<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "ddouglas", "Password123!", "ddouglas");
echo $mysqli->connect_errno;

$user = $_POST['userid'];

$query = "SELECT `user_id` FROM `Users` WHERE user_id = '$user' LIMIT 0 , 30";

if($result = $mysqli->query($query)){
	while ($row = $result->fetch_assoc()) {
		echo ("This user already exists");
	}

	$result->free();
}

if($insert = $mysqli->query("INSERT INTO Users (user_id) VALUES ('$user')")){
	echo ("Username successfully added");
}

/* close connection */
$mysqli->close();

?>
 
