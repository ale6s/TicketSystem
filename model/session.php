<?php

session_start();
//Check whether the session variable ID is present or not
if (!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) {
    header("location: ../index.php");
    exit();
}

?>