<?php
	ob_start();
	session_start();

	$timezone = date_default_timezone_set("Asia/Colombo");

	//$con = mysqli_connect("musicdata.mysql.database.azure.com", "AdminMusicData@musicdata", "mysql@@Demo321DEmo", "music data");
	 $con = mysqli_connect("localhost", "root", "", "music data");

	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}
?>