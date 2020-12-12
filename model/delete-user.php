<?php
  include("../controller/db.php");  
  	$id =$_REQUEST['id'];

	// sending query
	$sql = "DELETE FROM users WHERE id = '$id'";
	$result = $conn->query($sql); 	
    header("Location: ../view/user-settings.php");
?>