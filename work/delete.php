<?php 
$error='';
include 'movieclass.php'; 
$id = $_GET['id'];
$deleteObj = new movie();
$deleteObj->delete($id);
?>