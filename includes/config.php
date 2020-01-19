<?php
	ob_start();
	session_start();

	$timezone = date_default_timezone_set("Asia/Colombo");

	//$con = mysqli_connect("musicdata.mysql.database.azure.com", "AdminMusicData@musicdata", "mysql@@Demo321DEmo", "your cloud music player");
	  $con = mysqli_connect("localhost", "root", "", "your cloud music player");

	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}
?>