<?php

include('connection.php');

session_start();

if(isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $result = $conn ->query("DELETE FROM registration WHERE id=$id") or die($mysqli->error);
    $_SESSION['message'] = "Email deleted";
    header("Location: database.php");
}


?>