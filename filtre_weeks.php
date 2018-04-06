<?php
require_once('database.php');
$bd = new PDO('mysql:host=127.0.0.1;dbname=miniprojet', 'root', '');
$nom = $_POST["nom"];
$output =$bd->query("SELECT * FROM semaines where nom = '".$nom."'");
  $output->execute();
  $outputs =$output->fetchAll();
//on encode en JSON
 print(json_encode($outputs)); 
?> 
