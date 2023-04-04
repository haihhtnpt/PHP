<?php
		
		if(isset($_GET["quanli"]))
		{
			$row = $_GET["quanli"];
		}
		else
			$row = "";
		if ($row == "category") {
			include("category.php");
		}elseif ($row == "add") {
			include("add.php");
		}elseif ($row == "edit") {
			include("edit.php");
		}elseif($row == "delete"){
			include("delete.php");
		}elseif ($row == "search") {
			include("search.php");
		}
		


?>