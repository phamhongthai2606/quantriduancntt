                <?php
                    $sql_Featured = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham ASC LIMIT 4";
                    $query_Featured = mysqli_query($conn,$sql_Featured);
                ?>

		<div class="clear"></div>
        <div>
				<!--Thanh tiêu đề-->
				<p class="section-head">SẢN PHẨM NỔI BẬT KHÁC</p>
				<!--End Thanh tiêu đề-->

                    <?php
                            while($row_Featured = mysqli_fetch_array($query_Featured)){ 
                    ?>

				<div class="product-box">
					<a class="box" href="index.php?quanly=sanpham&id=<?php echo  $row_Featured['id_sanpham'] ?>">
						<div class="hinh-sp">
							<div style="background-image: url(admincp/modules/quanlysp/uploads/<?php echo $row_Featured['hinhanh'] ?>)" class="hinh"></div>
						</div>
						<p class="ten-sp"><?php echo   $row_Featured['tensanpham']?></p>
						<p class="gia-tien"><?php echo number_format( $row_Featured['giasp'],0,',','.').'vnđ' ?><span class="gia-cu"><?php echo number_format(  $row_Featured['giagoc'],0,',','.').'vnđ' ?></span></p>
						<div class="them-vao-gio-hang"><a class="them" href="#">Add <img class="icon-cart" src="image/icon-cart.png"></a></div>
					</a>
				</div>
				<!--end Hộp 1-->
			
                        <?php
                                    } 
                        ?>		
		 </div>
		 
							

				