<?php
require_once('dbijazah.php');

$get_id=$_GET['tbijazah'];

// sql to delete a record
$sql = "Delete from tbijazah where id = '$get_id'";

// use exec() because no results are returned
$conn->exec($sql);
header('location:ijazah.php');
?>