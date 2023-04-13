<?php

		include "config.php";
		$sql = "delete from qlsach where id = '$_GET[id]'";
		mysqli_query($con,$sql);
		header('location:index.php?qlsach=category');

?>