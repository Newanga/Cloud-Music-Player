<?php
include("includes/config.php");
include("includes/classes/artist.php");
include("includes/classes/album.php");
include("includes/classes/song.php");

//session_destroy(); LOGOUT
?>

<html>
<head>
<title>Welcome to Spotify</title>

<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>

    <div id="mainContainer">

    <div id="topContainer">

        <?php include("includes/navBarContainer.php"); ?>

        <div id="mainViewContainer">

            <div id="mainContent">