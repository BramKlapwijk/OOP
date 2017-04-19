<!DOCTYPE html>
<html>
<head>
	<?php
	if ($_FILES['file']["error"]>0) {
		echo "Error:"$_FILES['file']["error"]."<br/>";
	}
	else{
		$filename = basename($_FILES['file']['name']);
		
	}
	?>
</head>
<body>
	<form action="" method="post" enctype="multipart/formdata">
		<input type="file" name="file">
		<input type="submit" name="submit" value="upload file">
	</form>
</body>
</html>