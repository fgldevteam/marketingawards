<?php

//connect to DB
$host = "calmys1db01.fglsports.dmz";
$user = "marketingawards";
$pass = "marketingawards";
$db = "marketingawards";
// 
// $host = "127.0.0.1";
// $user = "root";
// $pass = "";
// $db = "marketingawards"; 

$connection = mysqli_connect($host, $user, $pass, $db);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


foreach($_POST as $key => $value){
	$q = "INSERT INTO votes (award_id, people_id) VALUES('".$key."', '".$value."')";
	mysqli_query($connection, $q) or die ("Error in query: $q. ".mysqli_error($connection));
}





	



