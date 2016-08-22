<?php
header("Access-Control-Allow-Origin: *");
ini_set('display_errors', 1);

$username="root";$password="";$database="scq";
mysql_connect("localhost:3306",$username,$password);
$conn = mysql_select_db($database);

if($conn){
	$q = $_REQUEST["year"];

	$query = "SELECT * FROM matches WHERE year = ". $q;
	$res = mysql_query($query);
	$matches = array();

	while($r = mysql_fetch_assoc($res)){
		$matches[] = $r;
	}
	print json_encode($matches);
}
else{
	die( "Unable to select database");
}

mysql_close();
?>