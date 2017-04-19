<?php
	function bootstrap(){
		$array = glob('includes/*.(php)', GLOB_BRACE);

		foreach ($array as $link) {
			include($link);
		}
	}
?>