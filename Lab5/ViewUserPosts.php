<?php
$user = $_POST['select'];

$mysqli = new mysqli("mysql.eecs.ku.edu", "ddouglas", "Password123!", "ddouglas");

$query = "SELECT * FROM Posts WHERE author_id = '$user'";
if($result = $mysqli->query($query)){
	if($count = $result->num_rows){
		$table = "<center><table border='1'><th>Posts from $user</th>";
		while($rows = $result->fetch_assoc()){
			$table.='<tr><td>' . $rows['content'] . '</td></tr>';
		}
	}
	else{
		echo("No posts for this user");
	}
}

$table.='</table></center>';
echo $table;

/* close connection */
$mysqli->close();
?>