<?php
	$request = $_GET['q'];
	if ($request == "buy") {
		$name = $_POST["button-buy"];
		echo "You're going to buy " . $name . " hoverboard.";
	}
?>