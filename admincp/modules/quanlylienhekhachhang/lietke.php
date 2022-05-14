<?php
	$sql_lietke_kh = "SELECT * FROM tbl_lienhe ORDER BY id_lienhe DESC";
	$query_lietke_kh = mysqli_query($conn,$sql_lietke_kh);
?>
<table  class="lietke" border="1">
  <tr>
  	<th>Id</th>
    <th>tên khách hàng</th>
    <th>Email</th>
    <th>số điện thoại</th>
    <th>nội dung</th>

  </tr>
    <?php
    $i = 0;
    while($row = mysqli_fetch_array($query_lietke_kh)){
        $i++;
    ?>

  <tr>
  	<td><?php echo $i ?></td>
    <td><?php echo $row['ten'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['sdt'] ?></td>
    <td><?php echo $row['noidung'] ?></td>
    <td>
   		<a href="modules/quanlylienhekhachhang/xuly.php?idlienhe=<?php echo $row['id_lienhe'] ?>">Xoá</a> 
   	</td>
    
  </tr>
 <?php
    }
 ?>
</table>