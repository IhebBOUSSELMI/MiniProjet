<?php
require_once('database.php');
$bd = new PDO('mysql:host=127.0.0.1;dbname=miniprojet', 'root', 'root');
$id = $_POST["id"];
$output =$bd->query("SELECT * FROM matieres where id = '".$id."'");
  $output->execute();
  $outputs =$output->fetchAll();

 //on encode en JSON
 print(json_encode($outputs)); 
?> 