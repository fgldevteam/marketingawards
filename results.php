<?php

//connect to DB
$host = "calmys1db01.fglsports.dmz";
$user = "marketingawards";
$pass = "marketingawards";
$db = "marketingawards";


$connection = mysqli_connect($host, $user, $pass, $db);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

for ($i = 1; $i <= 10; $i++) {
	$q = "select votes.people_id, count(votes.people_id) as 'votes', people.`name`, awards.`name` as 'award name' from votes 
		JOIN people on people.id = votes.people_id
		JOIN awards on awards.id = votes.award_id
		where votes.award_id = ". $i . " 
		GROUP BY people_id 
		order by votes DESC
		";
	
		$awards_result = mysqli_query($connection, $q);

		echo "<h2>" . $awards_result['award name']  ."</h2>";

		// while($row = $awards_result->fetch_assoc()){

		// }


}