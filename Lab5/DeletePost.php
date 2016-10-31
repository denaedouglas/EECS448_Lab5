<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "ddouglas", "Password123!", "ddouglas");

if(!empty($_POST['check_list'])){
	foreach($_POST['check_list'] as $check){
		$query = "DELETE FROM Posts WHERE post_id = '$check'";
		if($result = $mysqli->query($query)){
		}
	}
	echo ("Post(s) deleted successfully");
}
else{
	echo ("No posts deleted");
}

?>