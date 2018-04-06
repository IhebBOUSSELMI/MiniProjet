<?php require_once ('database.php');
 
//$json =  trim(file_get_contents("php://input")); 
//$obj = json_decode($json);
//$tablename=$obj->tablename;
$bd = new PDO('mysql:host=127.0.0.1;dbname=miniprojet', 'root', '');

 $output =$bd->query("SELECT * FROM etudiant");
  $output->execute();
  $outputs =$output->fetchAll();
 
 //on encode en JSON
 print(json_encode($outputs)); 
?> 