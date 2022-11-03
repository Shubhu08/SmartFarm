S<?php
	$sm = $_REQUEST['tid'];
	$t = $_REQUEST['tid'];
	$h = $_REQUEST['Lat'];
	$l = $_REQUEST['Lng'];
	require("cc.php");
	$pdo=connect();

		$sql = "INSERT INTO `sensor`(`soilmoist`, `temperature`, `humidity`, `sunlight`) VALUES ("+$sm+","+$t+","+$h+","+$l+")";
		$res = runupdate($pdo,$sql);
	}
?>