<!DOCTYPE html>
<html>
<head>
	<?php
		function calcu(){
			if ($_POST) {
				$g1 = $_POST['length'];
				$keuze = $_POST['keuze'];
				if ($keuze=='cube'){
    				$som = $g1 * 4;
   					return  $som;
   				}
   				if ($keuze=='cirkel') {
   					$uit = $g1 * pi();
   					return $uit;
   				}
			}
		}
		$uitkomst = calcu();
	?>
</head>
<body>
	<form method="post">
		lengte/diameter:<input type="text" name="length">
		<br/>
		kubus:<input type="radio" name="keuze" value="cube" checked>
		cirkel:<input type="radio" name="keuze" value="cirkel">
		<input type="submit" onclick="function calcu()" name="submit">
	</form>
	<?php 
	if ($_POST) {
		echo "uw antwoord is: $uitkomst";
	}
	?>
</body>
</html>