<?php
require_once('database.php');
$response = array();
if (isset($_POST['email']) && isset($_POST['password'])) 
{
$mail= $_POST['email'];
$pass= $_POST['password'];
$result = mysqli_query($connection,"SELECT * FROM etudiant where email='$mail' and mot_de_passe='$pass'") or die(mysql_error());
// check for empty result
if (mysqli_num_rows($result)>0) {
// successfully inserted into database
$response["success"] = 1;
$response["message"] = "login successfully done.";
// echoing JSON response
echo json_encode($response);
} else {
// failed to insert row
$response["success"] = 0;
$response["message"] = "Oops! An error occurred.";
// echoing JSON response
echo json_encode($response);
}
} else {
// required field is missing
$response["success"] = 0;
$response["message"] = "Required field(s) is missing";
// echoing JSON response
echo json_encode($response);
}
?>