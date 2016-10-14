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

for ($i = 1; $i <= 10; $i++) {

	if( $i == 6){
		echo "<br style='clear:both;' />";
		echo "<br /><br />";
	}
	$q_name = "select name from awards where id = ". $i;

	$q = "select votes.people_id, count(votes.people_id) as 'votes', people.`name`, awards.`name` as 'award name' from votes 
		JOIN people on people.id = votes.people_id
		JOIN awards on awards.id = votes.award_id
		where votes.award_id = ". $i . " 
		GROUP BY people_id 
		order by votes DESC
		";

		$awards_name = mysqli_query($connection, $q_name);	
		$awards_result = mysqli_query($connection, $q);


		echo "<table cellpadding='2' cellspacing='2' style='width: 200px; float: left; font-size: 11px; font-family: arial, sans-serif;'>";
		while($row = $awards_name->fetch_assoc()){
			echo "<tr><td colspan='2'><h2 style='font-size: 11px;'>'". $row['name'] . "' Award</h2></td></tr>";
		}
		echo "<tr><td><strong>Votes</strong></td><td><strong>Name</strong></td></tr>";
		while($row = $awards_result->fetch_assoc()){
			echo "<tr>";
			echo "<td>". $row['votes'] . "</td>";
			echo "<td>". $row['name'] . "</td>";

			echo "</tr>";
		}
		
		echo "</table>";
		//print_r($awards_name);

		// while($row = $awards_result->fetch_assoc()){

		// }


}