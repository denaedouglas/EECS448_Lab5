<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "ddouglas", "Password123!", "ddouglas");
echo $mysqli->connect_errno;

$user = $_POST['userid'];

$query = "SELECT * FROM Users";

echo("<center><table border='1'><th>Users</th></center>");
if($result = $mysqli->query($query)){
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			echo '<tr><td>', $row['user_id'], '</tr></td>', '<br>';
		}
		echo('</table>');
		$result->free();
	}
}


/* close connection */
$mysqli->close();

?>
 
