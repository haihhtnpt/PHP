<?php
			include "config.php";
				$sql = "select * from qlsach where id = '$_GET[id]' ";
					$result = mysqli_query($con,$sql);
					$row = mysqli_fetch_array($result);


			if(isset($_POST["process"]))
			{
				$bookid = mysqli_escape_string($con,$_POST["bookid"]);
				$bookname = mysqli_escape_string($con,$_POST["bookname"]);
				$add = mysqli_escape_string($con,$_POST["add"]);
				$price = mysqli_escape_string($con,$_POST["price"]);
				$nxb = mysqli_escape_string($con,$_POST["nxb"]);
				$author = mysqli_escape_string($con,$_POST["author"]);
				$sl = mysqli_escape_string($con,$_POST["sl"]);
				$type = mysqli_escape_string($con,$_POST["type"]);
				$anh = $_FILES['c_img']['content'];

				if($anh != null)
				{


				$path = "upload/";
				$tmp_content = $_FILES['c_img']['tmp_content'];
				$anh = $_FILES['c_img']['content'];

				move_uploaded_file($tmp_content,$path.$anh);
					$sql = "update qlsach set img = '$anh' where id ='$_GET[id]'";
					mysqli_query($con,$sql);
					header('location:index.php');
				}

					$sql = "update qlsach set bookid='$bookid',bookname='$bookname',price='$price',manxb='$nxb',matg='$author',sl='$sl',matheloai='$type' where id = '$_GET[id]' ";
					mysqli_query($con,$sql);
					header('location:index.php?qlsach=category');
			}

?>

<div>
	<div><h2 style="color: red; padding-top: 20px; text-align: center;">Sửa nội dung</h2></div>
	<form action="" method="post"  enctype="multipart/form-data">
		<table width="500"  border="1" style="margin: auto;">
			
			<tr>
				<td>Mã sách</td>
				<td><input type="text" name="bookid" value="<?php echo $row['bookid']; ?>" ></td>
			</tr>
			<tr>
				<td>ảnh</td>
				<td><input type="file" name="c_img"></td>
				<td><img src="upload/<?php echo $row['img']; ?>" style="max-width: 100px;"></td>
				
			</tr>
			
			<tr>
				<td>Tên sách</td>
				<td><input type="text" name="bookname" value="<?php echo $row['bookname']; ?>" ></td>
			</tr>
			<tr>
				<td>Giá sách</td>
				<td><input type="number" name="price"  value="<?php echo $row['price']; ?>"></td>
			</tr>
			<tr>
				<td>Mã NXB</td>
				<td><input type="text" name="nxb" value="<?php echo $row['manxb']; ?>" ></td>
			</tr>
			<tr>
				<td>Mã tác giả</td>
				<td><input type="text" name="author" value="<?php echo $row['matg']; ?>" ></td>
			</tr>
			<tr>
				<td>Số lượng</td>
				<td><input type="number" name="sl" value="<?php echo $row['sl']; ?>" ></td>
			</tr>
			<tr>
				<td>Mã thể loại</td>
				<td><input type="text" name="type" value="<?php echo $row['matheloai']; ?>" ></td>
			</tr>

				<tr>
				<td></td>
				<td><input type="submit" name="process" value="Update" ></td>
			</tr>
		</table>
	</form> 
</div>