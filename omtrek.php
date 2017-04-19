
<!DOCTYPE html>
<html>
<head>
<?php
function reken(){
	if ($_POST) {
		$g1 = $_POST['kubus'];
    	$som = $g1 * 4;
   		return  $som;
	}
}

$uitkomst = reken();
?>
	<title>hoi</title>
</head>
<body>
	<form method="post">
		<input type="text" name="kubus">
		<input type="submit" onclick="function reken();" name="submit">
	</form>
	<?php
	if ($_POST) {
		echo "uw antwoord is: $uitkomst";
	}
	?>
</body>
</html>