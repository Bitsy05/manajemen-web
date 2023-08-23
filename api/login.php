<?php
include 'config.php';
$email = $_POST['email'];
$password = $_POST['password'];
$queryResult=$connection->query("SELECT * FROM user WHERE email='".$email."' and password='".$password."' ");

$result=array();
while($fetchData=$queryResult->fetch_assoc()){
	$result[]=$fetchData;
}
echo json_encode($result);
 ?>