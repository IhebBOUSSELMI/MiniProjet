<?php
require_once('database.php');
$bd = new PDO('mysql:host=127.0.0.1;dbname=miniprojet', 'root', '');
$output =$bd->query("SELECT * FROM matieres");
  $output->execute();
  $outputs =$output->fetchAll();

 //on encode en JSON
 print(json_encode($outputs)); 
?> 
