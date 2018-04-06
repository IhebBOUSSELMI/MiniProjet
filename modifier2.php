<?php
require_once('database.php');
$bd = new PDO('mysql:host=127.0.0.1;dbname=miniprojet', 'root', '');
 
$id = isset($_POST['id']) ? $_POST['id'] : '';
$nbr_abs = isset($_POST['nbr_abs']) ? $_POST['nbr_abs'] : '';
$tablename = isset($_POST['tablename']) ? $_POST['tablename'] : '';
//$sql = "UPDATE francais SET nbr_abs = '$note' WHERE id = '$id'";
$obj=$bd->query("UPDATE `$tablename` SET `nbr_abs` = '$nbr_abs' WHERE `id` = '$id'");

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
echo json_encode($nbr_abs);
echo json_encode($tablename);



?>

   