<?php
header("Access-Control-Allow-Origin: *");
ini_set('display_errors', 1);

$username="root";$password="";$database="scq";
mysql_connect("localhost:3306",$username,$password);
$conn = mysql_select_db($database);

if($conn){
	$query = "SELECT * FROM teams";
	$res = mysql_query($query);
	$teams = array();

	while($r = mysql_fetch_assoc($res)){
		$teams[] = $r;
	}
	print json_encode($teams)
}
else{
	die( "Unable to select database");
}

mysql_close();
?>