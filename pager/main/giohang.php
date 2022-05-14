<?php
		include("../../admincp/config/config.php");
		session_start();			
?>

<?php
		if(isset($_SESSION['cart'])){

		}
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<!-- CSS is here -->
	<title>Web bán hàng</title>
	<link href="../../css/style.css" rel="stylesheet" type="text/css">
	<link href="../../css/nav-header.css" rel="stylesheet" type="text/css">
	<link href="../../css/left-content.css" rel="stylesheet" type="text/css">
	<link href="../../css/section.css" rel="stylesheet" type="text/css">
	<link href="../../css/footer.css" rel="stylesheet" type="text/css">
	<link href="../../css/product-box.css" rel="stylesheet" type="text/css">
	<link href="../../css/responsive.css" rel="stylesheet" type="text/css">
	<link href="../../css/sapxepsp.css" rel="stylesheet" type="text/css">
	<link href="../../css/right-content.css" rel="stylesheet" type="text/css">
	<link href="../../css/breadcrumb.css" rel="stylesheet" type="text/css">
	<link href="../../css/gio-hang.css" rel="stylesheet" type="text/css">
	<link href="../../css/list.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>					
	<div class="">

		<!-- Thanh công cụ -->
		<div class="nav fixed-top">
			<ul class="list-left">
				<li><a href="../../index.php" class="a-light logo-home">HOME</a></li>
				<li><a href="../../tintuc.php">Tin tức</a></li>
				<li><a href="../../lien-he.php">Liên hệ</a></li>
				<div class="social-buttons">
					<a href="https://www.facebook.com/profile.php?id=100034595911907"><i class="fab fa-facebook"></i></a>
					<a href="https://www.instagram.com/phuong2756nguyen/"><i class="fab fa-instagram"></i></a>
					<a href="https://www.youtube.com/c/MixiGamingofficial"><i class="fab fa-youtube"></i></a>
				</div>
			</ul>
			<ul class="list-right">
				<li><a href="../../loginkhachhang/logout.php"><i class="fas fa-user"></i></a></li>
				<span>|</span>
				<li class="dang-nhap"><a href="../../loginkhachhang/dang-nhap.php">Đăng nhập</a></li>
				<span>|</span>
				<li><a href="giohang.php" class="left a-light">GIỎ HÀNG</a></li>
			</ul>
		</div>
		<!-- end Thanh công cụ -->


		<!-- Phần header -->
		<div class="header">
			<a href="../../index.php"><img src="../../image/logo-web1.png" alt="" width="120" height="90" class="logo" />
			</a>
			<span class="ten-cua-hang">Nguyễn Phương PC</span>
			<div class="search">
				<form action="../../index.php?quanly=timkiem" method="POST">
					<input type="search" class="search-box" name="tukhoa" placeholder="Bạn cần tìm gì ?">
					<input type="submit" class="search-button" name="timkiem" value="Search">
				</form>
			</div>
		</div>
		<!-- end Phần header -->

		<!--Đường dẫn (breadcrumb)-->
		<div class="breadcrumb">
			<a class="truoc-do">Home</a>
		
			<span class="hien-tai">&raquo;</span>
			<span class="hien-tai">Giỏ hàng</span>
		</div>
		<!--End đường đẫn - Breadcrumb-->

		<!-- Phần thân trang container -->
		<div class="container">
			
			<!-- Thanh menu bên trái -->
			<div class="menu-ben-trai">
				
				<ul  class="list">
					<li class="title">Danh Mục Sản Phẩm</li>
					<?php
							$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
							$query_danhmuc = mysqli_query($conn,$sql_danhmuc);
							while($row = mysqli_fetch_array($query_danhmuc)){
					?>
					
					<li><a href="../../index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc'] ?>">
						<button>
							<?php echo $row['tendanhmuc'] ?>
						</button>
					</a></li>
					<?php

					   }	
					?>
					
				</ul>
			
		   </div>
				
			<div class="khung-frame">				
				<div class="section">
					<!--Thanh tiêu đề-->
					<p class="section-head">GIỎ HÀNG</p>								
					<!--End Thanh tiêu đề-->
									<p>
										<?php if(isset($_SESSION['user'])){
												echo 'xin chào:'.$_SESSION['user'];
												
											}
										?> 
									</p>
									<div class="list_sp">
									<table height="100%" width="100%" class="table" border="1">
									<tr>
										<th>STT</th>
										<th>Tên sản phẩm</th>
										<th>Hình ảnh</th>
										<th>Đơn giá</th>
										<th>Số lượng</th>
										<th>Thành tiền</th>										
									</tr>

											<?php
												if(isset($_SESSION['cart'])){
													$i = 0;
													$tongtien = 0;
													foreach($_SESSION['cart'] as $cart_item){
														$thanhtien = $cart_item['soluong']*$cart_item['giasp'];
														$tongtien+=$thanhtien;
														$i++;							
											?>

									<tr class="bill">
										<td><?php echo $i; ?></td>
										<td><?php echo $cart_item['tensanpham']; ?></td>
										<td><img src="../../admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']; ?>" width="70px" heght="50px"></td>
										<td><?php echo number_format($cart_item['giasp'],0,',','.').'vnđ'; ?></td>

										<td>
										<a href="themgiohang.php?cong=<?php echo $cart_item['id'] ?>"><i class="fas fa-plus"></i></a>
										<?php echo $cart_item['soluong'];?>
										<a href="themgiohang.php?tru=<?php echo $cart_item['id'] ?>"><i class="fas fa-minus"></i></a>
										</td>

										<td><?php echo number_format($thanhtien,0,',','.').'vnđ' ?></td>
										<td class="xoagiohang"><a href="themgiohang.php?xoa=<?php echo $cart_item['id'] ?>">Xoá</a></td>
									</tr>
										<?php
												}
										?>
									<tr>
										<td></td>
										<td>Tổng tiền</td>
										<td></td>
										<td></td>
										<td></td>
										<td> <?php echo number_format($tongtien,0,',','.').'vnđ' ?></td>	
										<td class="xoagiohang"><a href="themgiohang.php?xoatatca=1" ><i class="fas fa-trash-alt"></i></a> </td>						 
									</tr>
										<?php
											}else{
										?>
										<tr>
											<td colspan="6"><p class="tbgiohang">Hiện tại giỏ hàng trống</p></td>										
										</tr>	
										<?php
											}
										?>										
									</table>		
								</div>

									<div class="ma-giam-gia rows">
												<input type="text" name="" id="" placeholder="Nhập mã giảm giá">
												<input type="submit" value="Cập nhật" name="update_click" class="capnhat">
									</div>	
									<hr>
									  	<form action="thanhtoan.php" method="POST">
											<div class="summary-section">
												<h4 class="summary-heading"> thông tin khách hàng</h4>										
												<div class="rows">
													<input type="text" name="name" placeholder="họ và tên" class="information"><br>
													<br>
													<input type="tel" name="phone" placeholder="số điện thoại" class="information"><br>
													<!--br>
													<input type="email" placeholder="gmail" name="gmail" class="information"><br-->
													<br>
													<input type="text" placeholder="địa chỉ" name="diachi" class="information"><br>
													<br>
													<textarea id="ghi-chu" name="note" autofocus placeholder="ghi chú" ></textarea>
													<br>
												</div>
												<input class="dathang rows" type="submit" name="submit" value="ĐẶT HÀNG">
											</div>
										</form>										
								</div>
										
			</div>
			<div class="clear"></div>
		</div>
		 <!--phần chân trang-->
		  <?php
		  			include("../../pager/footer.php")
		  ?>
		 <!--end phần chân trang-->
	</div>
	<!--end class=""-->
	<script src="js/script.js" charset="utf-8"></script>
</body>

</html>
