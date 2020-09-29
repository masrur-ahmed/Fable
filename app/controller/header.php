<?php
include("../model/config.php");
include("classes/User.php");
include("classes/Author.php");
include("classes/Album.php");
include("classes/Audiobooks.php");
include("classes/Playlist.php");

//session_destroy(); LOGOUT

if(isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = new User($con, $_SESSION['userLoggedIn']);
	$username = $userLoggedIn->getUsername();
	echo "<script>userLoggedIn = '$username';</script>";
}
else {
	header("Location: controller/register.php");
}

?>

<html>
<head>
	<title>Welcome to Fable!</title>

	<link rel="stylesheet" type="text/css" href="../view/css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="../view/js/script.js"></script>
</head>

<body>

	<div id="mainContainer">

		<div id="topContainer">

			<?php include("../model/navBarContainer.php"); ?>

			<div id="mainViewContainer">

				<div id="mainContent">
