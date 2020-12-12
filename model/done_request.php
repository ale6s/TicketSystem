<?php
require("../controller/db.php");
include('../model/session.php'); 
$id = $_REQUEST['id'];
$curent_user = $_SESSION['id'];

$sqls = "SELECT * FROM users WHERE id = '$curent_user'";
$results = $conn->query($sqls);
$rows = $results->fetch_assoc();
$names = $rows['fname']. " ".$rows['lname'];

$sql = "SELECT * FROM request_ticket";
$result = $conn->query($sql);
$row_edit = $result->fetch_assoc();

    try {
        //if done then status will change to doner and finish date and what admin finished the ticket
        $stmt = $conn->prepare("UPDATE request_ticket SET status='done', finished_date = now(), completed_by='$names' WHERE id= '$id'");
        $stmt->execute();

        header("Location: ../view/proccess-tickets.php");
    } catch (PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
?>