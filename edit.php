<?php
			include "config.php";
				$sql = "select * from quanli where id = '$_GET[id]' ";
					$result = mysqli_query($con,$sql);
					$row = mysqli_fetch_array($result);


			if(isset($_POST["process"]))
			{
				$postid = mysqli_escape_string($con,$_POST["postid"]);
				$content = mysqli_escape_string($con,$_POST["content"]);
				$date = mysqli_escape_string($con,$_POST["date"]);
				$add = mysqli_escape_string($con,$_POST["add"]);
				$anh = $_FILES['c_img']['content'];

				if($anh != null)
				{


				$path = "upload/";
				$tmp_content = $_FILES['c_img']['tmp_content'];
				$anh = $_FILES['c_img']['content'];

				move_uploaded_file($tmp_content,$path.$anh);
					$sql = "update quanli set img = '$anh' where id ='$_GET[id]'";
					mysqli_query($con,$sql);
					header('location:index.php');
				}

					$sql = "update quanli  set postid = '$postid'  , content = '$content', author = '$add' , date = '$date' where id = '$_GET[id]' ";
					mysqli_query($con,$sql);
					header('location:index.php?quanli=category');
			}

?>

<div>
	<div><h2 style="color: red; padding-top: 20px; text-align: center;">Thêm nội dung</h2></div>
	<form action="" method="post"  enctype="multipart/form-data">
		<table width="500"  border="1" style="margin: auto;">
			
			<tr>
				<td>Mã sinh viên</td>
				<td><input type="text" name="postid" value="<?php echo $row['postid']; ?>" ></td>
			</tr>
			<tr>
				<td>ảnh</td>
				<td><input type="file" name="c_img"></td>
				<td><img src="upload/<?php echo $row['img']; ?>" style="max-width: 100px;"></td>
				
			</tr>
			
			<tr>
				<td>Họ tên</td>
				<td><input type="text" name="content" value="<?php echo $row['content']; ?>" ></td>
			</tr>
			<tr>
				<td>Ngày sinh</td>
				<td><input type="date" name="date"  value="<?php echo $row['date']; ?>"></td>
			</tr>
			<tr>
				<td>Địa chỉ</td>
				<td><input type="text" name="add" value="<?php echo $row['author']; ?>" ></td>
			</tr>

				<tr>
				<td></td>
				<td><input type="submit" name="process" value="Update" ></td>
			</tr>
		</table>
	</form> 
</div>