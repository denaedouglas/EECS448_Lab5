<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "ddouglas", "Password123!", "ddouglas");
echo $mysqli->connect_errno;

$author = $_POST['userid'];
$content = $_POST['text'];
$query = "SELECT `user_id` FROM `Users` WHERE user_id = '$author'";

if($result = $mysqli->query($query)){
	if($count = $result->num_rows){
		while ($row = $result->fetch_assoc()) {
			if($content != ''){
				if($insert = $mysqli->query("INSERT INTO Posts (post_id, content, author_id) VALUES (NULL, '$content', '$author')")){
					echo ("Post successfully added");
				}
			}
		}
		$result->free();
	}
	else{
		echo("You're not a current user");
	}
}

/* close connection */
$mysqli->close();

?>
 
