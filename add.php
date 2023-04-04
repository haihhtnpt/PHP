<?php
			include "config.php";
			
			if(isset($_POST["process"]))
			{
				$postid = mysqli_escape_string($con,$_POST["postid"]);
				$content = mysqli_escape_string($con,$_POST["content"]);
				$date = mysqli_escape_string($con,$_POST["date"]);
				$add = mysqli_escape_string($con,$_POST["add"]);
				$anh = $_FILES['c_img']['name'];

				if($anh != null)
				{


				$path = "upload/";
				$tmp_name = $_FILES['c_img']['tmp_name'];
				$anh = $_FILES['c_img']['name'];

				move_uploaded_file($tmp_name,$path.$anh);
					$sql = "insert into quanli(postid,img,content,author,date) values('$postid','$anh','$content','$add','$date')";
					mysqli_query($con,$sql);
					header('location:index.php?quanli=category');
				}
			}

?>

<div>
	<div><h2 style="color: red; padding-top: 20px; text-align: center;">Thêm nội dung</h2></div>
	<form action="" method="post"  enctype="multipart/form-data">
		<table width="500"  border="1" style="margin: auto;">
			
			<tr>
				<td>Post ID</td>
				<td><input type="text" name="postid" ></td>
			</tr>
			<tr>
				<td>Image</td>
				<td><input type="file" name="c_img" ></td>
			</tr>
			<tr>
				<td>Content</td>
				<td><input type="text" name="content" ></td>
			</tr>
			<tr>
				<td>Date</td>
				<td><input type="date" name="date" ></td>
			</tr>
			<tr>
				<td>Tác giả</td>
				<td><input type="text" name="add" ></td>
			</tr>

				<tr>
				<td></td>
				<td><input type="submit" name="process" value="Update" ></td>
			</tr>
		</table>
	</form> 
</div>