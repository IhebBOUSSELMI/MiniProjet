<?php
require_once('database.php');
$bd = new PDO('mysql:host=127.0.0.1;dbname=miniprojet', 'root', '');
 
$id = isset($_POST['id']) ? $_POST['id'] : '';
$champ = isset($_POST['note']) ? $_POST['note'] : '';
$note = isset($_POST['note_']) ? $_POST['note_'] : '';
$tablename = isset($_POST['tablename']) ? $_POST['tablename'] : '';

$obj=$bd->query("UPDATE `$tablename` SET `$champ` = '$note' WHERE `id` = '$id'");

//$strSQL = " UPDATE francais SET 
//note_dc = '".$note_dc."',
//note_ds = '".$note_ds."',
//note_tp = '".$note_tp."' 
//WHERE id = '".$id."' ";

if(!$obj)
{
     $arr['StatusID'] = "0";
       
}
else
{
     $arr['StatusID'] = "1";

     
}
echo json_encode($arr);
echo json_encode($id);
echo json_encode($champ);
echo json_encode($note);
echo json_encode($tablename);

?>

   