<?php

	$conn = mysqli_connect('localhost','root','oviya0707','banksystem',3306);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>