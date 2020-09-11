<?php
include("../controller/includes/connection.php");
include("../controller/includes/classes/Album.php");
include("../controller/includes/classes/Author.php");
include("../controller/includes/classes/Audibook.php");

//session_destroy();
// TODO : logout


if(isset($_SESSION['userLoggedIn'])){
	$userLoggedIn =  $_SESSION['userLoggedIn'];
}
else {
	header("Location: register.php");
}

?>

<html>
<head>
	<title>Welcome to Fable!</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="assets/js/script.js"></script>
</head>

<body>
	<div id = "mainContainer">
		<div id = "topContainer">
			<?php include("../controller/includes/navBarContainer.php"); ?>
			<div id = "mainViewContainer">

				<div id = "mainContent">
