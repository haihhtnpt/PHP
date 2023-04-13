<?php
			include "config.php";
			
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
				$anh = $_FILES['c_img']['name'];

				if($anh != null)
				{


				$path = "upload/";
				$tmp_name = $_FILES['c_img']['tmp_name'];
				$anh = $_FILES['c_img']['name'];

				move_uploaded_file($tmp_name,$path.$anh);
					$sql = "insert into qlsach(bookid,img,bookname,price,manxb,matg,sl,matheloai) values('$bookid','$anh','$bookname','$price','$nxb','$author','$sl','$type')";
					mysqli_query($con,$sql);
					header('location:index.php?qlsach=category');
				}
			}

?>

<div>
	<div><h2 style="color: red; padding-top: 20px; text-align: center;">Thêm nội dung</h2></div>
	<form action="" method="post"  enctype="multipart/form-data">
		<table width="500"  border="1" style="margin: auto;">
			
			<tr>
				<td>Book ID</td>
				<td><input type="text" name="bookid" ></td>
			</tr>
			<tr>
				<td>Image</td>
				<td><input type="file" name="c_img" ></td>
			</tr>
			<tr>
				<td>Tên sách</td>
				<td><input type="text" name="bookname" ></td>
			</tr>
			<tr>
				<td>Giá</td>
				<td><input type="number" name="price" ></td>
			</tr>
			<tr>
				<td>Nhà xuất bản</td>
				<td><input type="text" name="nxb" ></td>
			</tr>
			<tr>
				<td>Tác giả</td>
				<td><input type="text" name="author" ></td>
			</tr>
			<tr>
				<td>Số lượng</td>
				<td><input type="number" name="sl" ></td>
			</tr>
			<tr>
				<td>Thể loại</td>
				<td><input type="text" name="type" ></td>
			</tr>

				<tr>
				<td></td>
				<td><input type="submit" name="process" value="Update" ></td>
			</tr>
		</table>
	</form> 
</div>