
<?php
	
   $sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc='$_GET[id]' ORDER BY id_sanpham DESC ";
   $query_pro = mysqli_query($conn,$sql_pro); 
   //get ten danh muc
   $sql_cate = "SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc='$_GET[id]' LIMIT 1";
   $query_cate = mysqli_query($conn,$sql_cate);
   $row_title = mysqli_fetch_array($query_cate);
?>
<!--Phần section 1-->
<div class="section">
				<p class="section-head">Danh Mục Sản Phẩm: <?php echo $row_title['tendanhmuc'] ?></p>
				<?php	
						
						while($row_pro = mysqli_fetch_array($query_pro)){ 
				?>
				
				<div class="product-box">
					<a class="box" href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham'] ?>">
						<div class="hinh-sp">
							<div style="background-image: url(admincp/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh'] ?>)" class="hinh"></div>
						</div>
						<p class="ten-sp"><?php echo $row_pro['tensanpham']?></p>
						<p class="gia-tien"><?php echo number_format($row_pro['giasp'],0,',','.').'vnđ' ?><span class="gia-cu"><?php echo number_format($row_pro['giagoc'],0,',','.').'vnđ' ?></span></p>
						<div class="them-vao-gio-hang"><a class="them" href="#">Add <img class="icon-cart" src="image/icon-cart.png"></a></div>
					</a>
				</div>
                <?php
					} 
				?>
					
                                
</div>
      