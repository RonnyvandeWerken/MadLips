<!DOCTYPE html>
<html>
<head>
	<title>ErHeerstPaniek</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<img src="images/madlipslogo.png" class="logo">

<div class="container2"> 

<ul class="nav">
	<li class="ErheerstPaniek"><a href="formuliermadlips.php">Er Heerst Paniek</a></li>
	<li><a href="#onkunde">onkunde</a></li>
</ul>
	
	<h1>Er Heerst Paniek</h1>

	er heerst paniek in het koningkrijk <?php echo $_POST["land"]; ?>. koning <?php echo $_POST["spijbel"]; ?> is ten einde raad en als koning <?php echo $_POST["spijbel"]; ?>. ten einde raad is,
	roept hij zijn ten-einde-raadsheer <?php echo $_POST["persoon"]; ?>. 
	<br>
	<br>
	"<?php echo $_POST["persoon"]; ?> het is een ramp! het is schande!"
	<br>
	<br>
	"sir, majesteit, Uwe luidruchtigheid, wat is er aan de hand?"
	<br>
	<br>
	"Mijn <?php echo $_POST["huisdier"]; ?> is verdwenen! Zo maar, zonder waarschuwing. en ik net  <?php echo $_POST["speelgoed"]; ?> voor hem gekocht!""
	<br>
	<br>
	"majesteit, Uw <?php echo $_POST["huisdier"]; ?> hij komt vast vanzelf weer terug?"
	<br>
	<br>
	"ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $_POST["bezigheid"]; ?> leren?"
	<br>
	<br>
	"maar sire, daar kunt u toch uw <?php echo $_POST["geld"]; ?> voor gebruiken"
	<br>
	<br>
	"<?php echo $_POST["persoon"]; ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had"
	<br>
	<br>
	"<?php echo $_POST["verveling"]; ?>, sire "
	<br>
	<br>
</div>
<footer>Ronny van de Werken 19-04-2020  </footer>

</body>
</html>