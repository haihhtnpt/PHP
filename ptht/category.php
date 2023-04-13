<?php
		include "config.php";
	 	$sql = "select * from qlsach ";
	 	$result = mysqli_query($con,$sql);

?>

<div class="infor">

				<table  width="900" border="1px solid #f3f3f3;" align="center" style="margin-top: 10px; text-align: center;" >
					<tr>
						<th width="50px;">STT</th>
						<th width="50px;">Mã sách</th>
						<th width="300px;">Ảnh</th>
						<th width="200px;">Tên sách</th>
						<th width="200px;">Giá</th>
						<th width="100px;">Mã NXB</th>
						<th width="200px;">Mã tác giả</th>
						<th width="100px;">Số lượng </th>
						<th width="100px;">Mã thể loại </th>
						<th width="100px;"><a href="index.php?qlsach=add">Thêm</a></th>
					</tr>
			<?php while ($row = mysqli_fetch_array($result)) {
				# code...
			 ?>
					<tr>
						<td><?php echo $row['id']; ?> </td>
						<td><?php echo $row['bookid']; ?></td>
						<td><img src="upload/<?php echo $row['img']; ?>" style="max-width: 300px;"></td>
						<td><?php echo $row['bookname']; ?></td>
						<td><?php echo $row['price']; ?></td>
						<td><?php echo $row['manxb']; ?></td>
						<td><?php echo $row['matg']; ?></td>
						<td><?php echo $row['sl']; ?></td>
						<td><?php echo $row['matheloai']; ?></td>
						<td><a href="index.php?qlsach=edit&id=<?php echo $row['id']; ?>">Sửa</a>
							<a onclick="return window.confirm('Bạn muốn xóa không');" href="index.php?qlsach=delete&id=<?php echo $row['id']; ?>">Xóa</a>
						</td>
					</tr>
			 <?php } ?>
					
				</table>
			</div>