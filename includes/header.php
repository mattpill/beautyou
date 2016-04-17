<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $pageTitle; ?></title>
	<link rel="stylesheet" href="css/normalize.css" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Qwigley|Raleway:400,700' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="favicon.ico">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="js/responsiveslides.min.js"></script>
	<link rel="stylesheet" href="css/responsive-nav.css">
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<script src="js/responsive-nav.js"></script>
	  <script>
	// You can also use "$(window).load(function() {"
	$(function () {

	  // Slideshow 1
	  $("#slider1").responsiveSlides({
	    maxwidth: 800,
	    speed: 800
	  });
	  </script>
</head>
<body>

	<div class="header">

		<div class="wrapper">

			<a href="index.php"><img class="logo" src="img/beautyoulogo.png"></a>

			<hr style="background:#8C3449; border:0; height:2px; width:80%"/>

			<ul class="nav-collapse">
				<li><a href="index.php">Home</a></li>
				<li><a href="bookings.php">Bookings</a></li>
  				<li><a href="pricelist.php">Pricelist</a></li>
  				<li><a href="offers.php">Offers</a></li>
  				<li><a href="parties.php">Parties</a></li>
  				<li><a href="contact.php">Contact</a></li>
			</ul>

		</div>

	</div>

	<div id="content">