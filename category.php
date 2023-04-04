<?php
		include "config.php";
	 	$sql = "select * from quanli ";
	 	$result = mysqli_query($con,$sql);

?>

<div class="infor">

				<table  width="900" border="1px solid #f3f3f3;" align="center" style="margin-top: 10px; text-align: center;" >
					<tr>
						<th width="50px;">STT</th>
						<th width="50px;">Post ID</th>
						<th width="300px;">Image</th>
						<th width="200px;">Content</th>
						<th width="100px;">Date</th>
						<th width="200px;">Author</th>
						<th width="100px;"><a href="index.php?quanli=add">Thêm</a></th>
					</tr>
			<?php while ($row = mysqli_fetch_array($result)) {
				# code...
			 ?>
					<tr>
						<td><?php echo $row['id']; ?> </td>
						<td><?php echo $row['postid']; ?></td>
						<td><img src="upload/<?php echo $row['img']; ?>" style="max-width: 300px;"></td>
						<td><?php echo $row['content']; ?></td>
						<td><?php echo $row['date']; ?></td>
						<td><?php echo $row['author']; ?></td>
						<td><a href="index.php?quanli=edit&id=<?php echo $row['id']; ?>">Sửa</a>
							<a onclick="return window.confirm('Bạn muốn xóa không');" href="index.php?quanli=delete&id=<?php echo $row['id']; ?>">Xóa</a>
						</td>
					</tr>
			 <?php } ?>
					
				</table>
			</div>