<?php
		$hostname = "localhost";
		$user = "root";
		$pass = "";
		$db = "de1";

		$con = mysqli_connect("localhost:3307",$user,$pass,$db);
		mysqli_query($con,$db);
		mysqli_set_charset($con,"utf8");

?>