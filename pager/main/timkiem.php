<?php
	if(isset($_POST['timkiem'])){
		$tukhoa = $_POST['tukhoa'];
	}
	$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.tensanpham LIKE '%".$tukhoa."%'";
	$query_pro = mysqli_query($conn,$sql_pro);
	
?>
<div class="section">
				<p class="section-head">Từ khoá tìm kiếm : <?php echo $_POST['tukhoa']; ?></p>
				<?php	
						
						while($row = mysqli_fetch_array($query_pro)){ 
				?>
				
				<div class="product-box">
					<a class="box" href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
						<div class="hinh-sp">
							<div style="background-image: url(admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>)" class="hinh"></div>
						</div>
						<p class="ten-sp"><?php echo $row['tensanpham']?></p>
						<p class="gia-tien"><?php echo number_format($row['giasp'],0,',','.').'vnđ' ?><span class="gia-cu"><?php echo number_format($row['giagoc'],0,',','.').'vnđ' ?></span></p>
						<div class="them-vao-gio-hang"><a class="them" href="#">Add <img class="icon-cart" src="image/icon-cart.png"></a></div>
					</a>
				</div>
                <?php
					} 
				?>
					
                                
</div>