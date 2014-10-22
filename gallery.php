<!doctype html>
<?php $thisPage="gallery"; ?>
<html lang="en">
<head>
<meta name="description" content="Parties On Pennies photos">
<meta name="keywords" content="photos, gallery, event planning, parties on a budget, 
boston, massachusetts, events">
<meta name="author" content="MacKenzie Kimball">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Slideshow</title>
    <link rel="stylesheet" type="text/css" href="js/fotorama/fotorama.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/fotorama/fotorama.js"></script>
</head>
<body>
<header>Parties On Pennies</header>
<div id="top">
    <?php include("php/includes/top.php"); ?>
  </div>
<hr style="height:2px;border-width:0px;color:#545454;background-color:#545454">
<h1>Photo Gallery</h1>
<p>Browse through the photos below to get a feel for the types of events we plan and the
custom decor we offer. Keep in mind that this is just a small visual sample of the services
we provide. Enjoy!</p>
<div class="fotorama" data-width="600" data-ratio="700/467" data-max-width="100%">
  <img src="images/gallery/tables.JPG" alt="Tables" >
  <img src="images/gallery/cake.JPG" alt="Cake" >
  <img src="images/gallery/cake-toppers.JPG" alt="Cake toppers" >
  <img src="images/gallery/aisle.JPG" alt="Aisle" >
  <img src="images/gallery/candle.jpg" alt="Candle" >
  <img src="images/gallery/bottles.JPG" alt="Bottles" >
  <img src="images/gallery/heart.JPG" alt="Heart" >
</div>
 <div id="footer" class="span-24 last">
   <?php include("php/includes/footer.php"); ?>
   </div>
</body>
</html>