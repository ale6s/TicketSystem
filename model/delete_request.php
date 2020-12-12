<?php
  include("../controller/db.php");  
  	$id =$_REQUEST['id'];

	// sending query
	//deleting record by id
	$sql = "DELETE FROM request_ticket WHERE id = '$id'";
	$result = $conn->query($sql); 	
	header("Location: ../view/user_history.php");
?>