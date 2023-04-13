<?php

		include "config.php";
		$sql = "delete from quanli where id = '$_GET[id]'";
		mysqli_query($con,$sql);
		header('location:index.php?quanli=category');

?>