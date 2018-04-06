<?php
require_once('database.php');
$bd = new PDO('mysql:host=127.0.0.1;dbname=miniprojet', 'root', '');
$id = isset($_POST['id']) ? $_POST['id'] : '';
$tablename = isset($_POST['tablename']) ? $_POST['tablename'] : '';
$output =$bd->query("SELECT * FROM `$tablename` where `id` = '$id'");
$output->execute();
$outputs =$output->fetchAll();

 //on encode en JSON
 print(json_encode($outputs)); 
?> 
