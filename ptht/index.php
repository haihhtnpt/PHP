<!DOCTYPE html>
<html>
<head>
	<title>Trang chủ</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="wrapper">
		<div class="header">QUẢN LÝ SÁCH </div>
		<div class="main">
			<div class="menu">
				<ul>
					<li><a href="index.php">Trang chủ</a></li>
					<li><a href="index.php?qlsach=category">Danh sách</a></li>
					<li><a href="index.php?qlsach=search">Tìm kiếm</a></li>
				</ul>
			</div>
			
			<div class="content"><?php require("content.php"); ?></div>
		</div>
	</div>

</body>
</html>