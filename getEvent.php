<?php 
require 'sqlinfo.php';
$Eid = $_POST["Eid"];
if(!is_numeric($Eid)){
	throw new Exception("Value must be a number");
}

$Eid = intval($Eid);

$conn = new mysqli($servername, $username, $password,$dbname);

$sql = mysqli_query($conn,"SELECT title,description,edate,creationedate,location FROM EVENTS WHERE Eid = $Eid");
$rows = array();

while($r = mysqli_fetch_assoc($sql)){
	$rows[] = $r;
}

echo json_encode($rows)











?>