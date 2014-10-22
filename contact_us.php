<!doctype html>
<?php $thisPage="contact"; ?>
<html lang="en">
<head>
<meta name="description" content="Parties On Pennies contact">
<meta name="keywords" content="event planning, parties on a budget, boston, massachusetts, 
events, contact">
<meta name="author" content="MacKenzie Kimball">
  <meta charset="utf-8">
  <title>Schedule your event</title>
    <link rel="stylesheet" href="css/purple-rain/jquery-ui-1.10.4.custom.min.css">
  <link rel="stylesheet" href="css/jquery.ui.datepicker.css">
   <link rel="stylesheet" href="css/style.css">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.10.4.custom/js/jquery-ui-1.10.4.custom.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
 <script>
  $(function() {

    $("#datepicker").datepicker({
      numberOfMonths: 3,
      showButtonPanel: true,
      duration: "slow"
    });
    
  });
</script>
</head>
<body>
<header>Parties On Pennies</header>
<div id="top">
    <?php include("php/includes/top.php"); ?>
  </div>
<hr style="height:2px;border-width:0px;color:#545454;background-color:#545454">
<h1>Tell us about your event</h1>
<form method="get" name="event" id="event" action="http://morpheus.dce.harvard.edu/cgi-bin/echo.cgi">
<fieldset>
	<p><strong>Type of Event:</strong>
		<select name="eventtype" id="eventtype">
  			<option value="wedding">Engagement Party/Wedding</option>
  			<option value="anniversary">Anniversary</option>
  			<option value="birthday">Birthday</option>
  			<option value="bar and bat mitzvah">Bar and Bat Mitzvah</option>
  			<option value="anniversary">Bar Crawl</option>
  			<option value="fundraiser">Non-Profit/Fundraiser</option>
  			<option value="anniversary">Corporate</option>
		</select>
	</p>
	<p><strong>Event Date: </strong><input type="text" name="eventdate" id="datepicker"></p>
	<p><strong>Number of Guests:</strong><br />
		<input type="radio" name="guests" value="0-25">0-25<br />
		<input type="radio" name="guests" value="26-50">26-50<br />
		<input type="radio" name="guests" value="51-100">51-100<br />
		<input type="radio" name="guests" value="100-200">100-200<br />
		 <input type="radio" name="guests" value="100-200">200+<br /></p>
 </fieldset>
 <fieldset>
 	<p><strong>Contact Name: </strong><br /><input type="text" name="name" size="50"></p>
 	<p><strong>Email:</strong> <br /><input type="email" name="email" size="50"></p>
 	<p><strong>Telephone: </strong><input type="tel" name="ustel"></p>
 </fieldset>
 <fieldset>
  	<p><strong>Additional Information: </strong><br /><textarea name="info" rows="10" cols="35"></textarea></p>
 </fieldset>
 <input type="submit" class="submit" value="Submit"/>
</form>
<div id="footer" class="span-24 last">
   <?php include("php/includes/footer.php"); ?>
   </div>
</body>
</html>