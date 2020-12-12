<?php
  include("../controller/db.php");  
  	$id =$_REQUEST['id'];

	// sending query
	$sql = "DELETE FROM request_ticket WHERE id = '$id'";
	$result = $conn->query($sql); 	
	header("Location: ../view/proccess-tickets.php");
?>