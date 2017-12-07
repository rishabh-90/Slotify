<?php
	ob_start();
	session_start();

	$timezone = date_default_timezone_set("Europe/London");

	$con = mysqli_connect("rishabhaggarwal.000webhostapp.com", "id3911463_rishabh", "Balvikas123@", "id3911463_slotify");

	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}
?>