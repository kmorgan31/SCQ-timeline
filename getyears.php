<?php
header("Access-Control-Allow-Origin: *");
ini_set('display_errors', 1);

$username="root";$password="";$database="scq";
mysql_connect("localhost:3306",$username,$password);
$conn = mysql_select_db($database);

if($conn){
	$query = "SELECT distinct(year) FROM matches";
	$res = mysql_query($query);
	$years = array();

	while($r = mysql_fetch_assoc($res)){
		$years[] = $r;
	}
	print json_encode($years);
}
else{
	die( "Unable to select database");
}

mysql_close();
?>