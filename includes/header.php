<?php
include("includes/config.php");
include("includes/classes/User.php");
include("includes/classes/Artist.php");
include("includes/classes/Album.php");
include("includes/classes/Song.php");
include("includes/classes/Playlist.php");


if(isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = new User($con, $_SESSION['userLoggedIn']);
	$username = $userLoggedIn->getUsername();
	echo "<script>userLoggedIn = '$username';</script>";
}
else {
	header("Location: register.php");
}

?>

<html>
<head>
	<title>Welcome to your cloud music player!</title>

	<link rel="stylesheet" type="text/css" href="assets/css/commonStyles.css">
	<link rel="stylesheet" type="text/css" href="assets/css/playingbar.css">
	<link rel="stylesheet" type="text/css" href="assets/css/navigationbar.css">
	<link rel="stylesheet" type="text/css" href="assets/css/songOptionsMenu.css">


	<link rel="stylesheet" type="text/css" href="assets/css/albumViewPage.css">
	<link rel="stylesheet" type="text/css" href="assets/css/settingsPage.css">
	<link rel="stylesheet" type="text/css" href="assets/css/updateUserDetailsPage.css">
	<link rel="stylesheet" type="text/css" href="assets/css/searchPage.css">
	<link rel="stylesheet" type="text/css" href="assets/css/artistPage.css">
	<link rel="stylesheet" type="text/css" href="assets/css/yourmusicPage.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
	
	<script src="assets/js/updateUserDetails.js"></script>
	<script src="assets/js/optionsMenu.js"></script>
	<script src="assets/js/playlist.js"></script>
	<script src="assets/js/playingBar.js"></script>
	<script src="assets/js/commonScript.js"></script>

</head>

<body>

	<div id="mainContainer">

		<div id="topContainer">

			<?php include("includes/navBarContainer.php"); ?>

			<div id="mainViewContainer">

				<div id="mainContent">