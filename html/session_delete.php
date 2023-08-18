<?php

session_start();
require_once 'restaurant_database.php';

// get id from url to delete that user
$id = $_GET['u_id'];

// delete user record from table based on given id

$sql = "DELETE FROM sign_up WHERE Id=$id";
$result = $conn->query($sql);

header("location:admin_page.php")
?>