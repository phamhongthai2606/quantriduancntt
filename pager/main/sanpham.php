<?php
		session_start();
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<!-- CSS is here -->
	<title>Web bán hàng</title>
	<link href="../../css/style.css" rel="stylesheet" type="text/css">
	<link href="css/nav-header.css" rel="stylesheet" type="text/css">
	<link href="css/banner-top.css" rel="stylesheet" type="text/css">
	<link href="css/left-content.css" rel="stylesheet" type="text/css">
	<link href="css/section.css" rel="stylesheet" type="text/css">
	<link href="css/footer.css" rel="stylesheet" type="text/css">
	<link href="css/product-box.css" rel="stylesheet" type="text/css">
	<link href="css/responsive.css" rel="stylesheet" type="text/css">
	<link href="css/sapxepsp.css" rel="stylesheet" type="text/css">
	<link href="css/right-content.css" rel="stylesheet" type="text/css">
	<link href="css/breadcrumb.css" rel="stylesheet" type="text/css">
	<link href="css/thong-tin-sp.css" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

			<?php
				$sql_chitiet = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham='$_GET[id]' LIMIT 1";
				$query_chitiet = mysqli_query($conn,$sql_chitiet);
				while($row_chitiet = mysqli_fetch_array($query_chitiet)){
				
			?>

			<div class="khung-chua-san-pham">
				<div class="section">
					<!--Thanh tiêu đề-->
					<p class="section-head"><?php echo $row_chitiet['tensanpham'] ?></p>
					<!--End Thanh tiêu đề-->

					<div class="clear"></div>
				    	 
								<div class="hinh-san-pham">
									<div class="hinh-to"><img src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>" alt=""></div>
									<!--div class="hinh-nho"><img src="image/iphone-7-plus-128gb-hh-400x400.jpg" alt=""></div>
									<div class="hinh-nho"><img src="image/iphone-7-plus-128gb-hh-400x400.jpg" alt=""></div>
									<div class="hinh-nho"><img src="image/iphone-7-plus-128gb-hh-400x400.jpg" alt=""></div-->
								</div>
									<form method="POST" action="pager/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">	
										<div class="thong-tin-san-pham">
											<p class="gia-tien"><?php echo number_format($row_chitiet['giasp'],0,',','.').'vnđ' ?><span class="gia-cu"><?php echo number_format($row_chitiet['giagoc'],0,',','.').'vnđ' ?></span></p>
											<br>
											Mã sp: <?php echo $row_chitiet['masp'] ?><br>
											<br>
											Số lượng sp: <?php echo $row_chitiet['soluong'] ?><br>
											<br>
											<input type="checkbox"><b>Yêu cầu nhân viên kỹ thuật giao hàng:</b> hỗ trợ copy danh bạ, <br>hướng dẫn sử dụng sản phẩm, giải đáp thắc mắc sản phẩm. <br>
											<br>
											Gọi đặt mua: 1800.1060 (miễn phí - 7:30-22:00)<br>											
											<br>
											<input type="submit" class="them" name="themgiohang" value="Thêm Giỏ Hàng" >
											<input type="submit" class="them" value="Mua Ngay" name="muangay">
										</div>
						 			</form>
						
												
					<div class="clear"></div>
							<!--tabs-->
						<div class="tabs">
							<ul id="tabs-nav">
								<li><a href="#tab1">Thông số kỹ thuật</a></li>
								<li><a href="#tab2">Nội dung chi tiết</a></li>
								<li><a href="#tab3">Đánh giá</a></li>							
							</ul> <!-- END tabs-nav -->
							<div id="tabs-content">
								<div id="tab1" class="tab-content">
									<?php echo $row_chitiet['tomtat'] ?>
								</div>
								<div id="tab2" class="tab-content">
									<?php echo $row_chitiet['noidung'] ?>
								</div>
									 <?php
									 		
											$sql_binhluan = "SELECT * FROM tbl_binhluan  ORDER BY id_binhluan DESC";
											$query_binhluan = mysqli_query($conn,$sql_binhluan);
									?> 
									<div id="tab3" class="tab-content">
											<div class="binhluan">											
													<div class="infor-user">
															<img src="image/user.png" width="30px">
															<h4><?=$query_binhluan['tenkhachhang']?></h4>																							
															<p><?=$query_binhluan['binhluan_date']?></p>	
													</div>												
													 <div class="coment-user">
														<p>sản phẩm tốt</p>
													 </div>																							
											</div>
											<?php
										}
											?>			
										<hr>
										<br>
										<form action="pager/main/coment.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>" method="POST">
										<input type="text" name="binhluan" placeholder="nhận xét sản phẩm">
										<input type="submit" name="coment" value="Đánh giá" >
										<form>

									</div>
																		
							</div> <!-- END tabs-content -->
						</div> <!-- END tabs -->
					<?php
					?>				
			
					<?php
						include("sanphamnoibat.php");
					?>
				</div>
			</div>
					
</html>
	
