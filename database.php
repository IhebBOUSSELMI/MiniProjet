<?php
class DB {
private $dbHost = 'localhost' ;
private $dbPort = 3306;
private $dbName = 'miniprojet' ;
private $dbUsername = 'root';
private $dbUserPassword = '';
private $db = null;
public function __construct() {
}
public function connect() {
if ($this->db == null) {
try {
$this->db = new PDO ("mysql:host=".$this->dbHost.
";port=".$this->dbPort.";".
"dbname=".$this->dbName,
$this->dbUsername,
$this->dbUserPassword);
$this->db->query('SET NAMES utf8');
 $this->db->setAttribute(PDO::ATTR_ERRMODE,
PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
die($e->getMessage());
 }
 }
 }
 public function select($sql, $data = array()) {
$req = $this->db->prepare($sql);
$req->execute($data);
return $req->fetchAll(PDO::FETCH_OBJ);
}
public function query($sql, $data = array()) {
$req = $this->db->prepare($sql);
$req->execute($data);
}

 public function disconnect() {
 $this->db = null;
 }
}
?>