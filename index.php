<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cups & Pups....</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!-- <meta http-equiv="refresh" content="1"> -->
	<link rel="icon" type="image/x-icon" href="favicon.png">

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	<link rel="stylesheet" href="css/style.css">

	<script
	  src="https://code.jquery.com/jquery-3.4.1.min.js"
	  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
	  crossorigin="anonymous"></script>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script src="js/loaders.js"></script>
    <script src="js/ajax.js"></script>
</head>
<body>

	<?php require('chunks/login-modal.php'); ?>


	<?php require('chunks/register-modal.php'); ?>
	<?php require('chunks/viewCart.php'); ?>

	<?php require('chunks/viewOrders.php'); ?>


	<?php require('chunks/info-modal.php'); ?>


	<?php require('chunks/navbar.php'); ?>


	<?php require('chunks/banner-slider.php'); ?>


	<?php require('chunks/description.php'); ?>


	<?php require('chunks/cards.php'); ?>


	<?php require('chunks/carousel.php'); ?>


	<?php require('chunks/about.php'); ?>


	<?php require('chunks/services.php'); ?>


	<?php require('chunks/reviews.php'); ?>


	<?php require('chunks/footer.php'); ?>




	
</body>
</html>