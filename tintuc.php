<?php
		include('admincp/config/config.php')
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<!-- CSS is here -->
<title>Web bán hàng</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/nav-header.css" rel="stylesheet" type="text/css">
	<link href="css/left-content.css" rel="stylesheet" type="text/css">
	<link href="css/section.css" rel="stylesheet" type="text/css">
	<link href="css/footer.css" rel="stylesheet" type="text/css">
	<link href="css/product-box.css" rel="stylesheet" type="text/css">
	<link href="css/responsive.css" rel="stylesheet" type="text/css">
	<link href="css/sapxepsp.css" rel="stylesheet" type="text/css">
	<link href="css/right-content.css" rel="stylesheet" type="text/css">
	<link href="css/breadcrumb.css" rel="stylesheet" type="text/css">
	<link rel="shortcut icon" type="image/png" href="logo-web1-1.png" />
	<link href="css/list.css" rel="stylesheet" type="text/css">
	<link href="css/baner/baner.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

dy>					
	<div class="">

		<!-- Thanh công cụ -->
		<div class="nav fixed-top">
			<ul class="list-left">
				<li><a href="index.php" class="a-light logo-home">HOME</a></li>
				<li><a href="tintuc.php">Tin tức</a></li>
				<li><a href="/lien-he.php">Liên hệ</a></li>
				<div class="social-buttons">
					<a href="https://www.facebook.com/profile.php?id=100034595911907"><i class="fab fa-facebook"></i></a>
				</div>
			</ul>
			<ul class="list-right">
				<li><a href="loginkhachhang/logout.php"><i class="fas fa-user"></i></a></li>
				<span>|</span>
				<li class="dang-nhap"><a href="loginkhachhang/dang-nhap.php">Đăng nhập</a></li>
				<span>|</span>
				<li><a href="giohang.php" class="left a-light">GIỎ HÀNG</a></li>
			</ul>
		</div>
		<!-- end Thanh công cụ -->


		<!-- Phần header -->
		<div class="header">
			<a href="index.php"><img src="image/logo-web1.png" alt="" width="120" height="90" class="logo" />
			</a>
			<span class="ten-cua-hang">Nguyễn Phương PC</span>
			<div class="search">
				<form action=" index.php?quanly=timkiem" method="POST">
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
					<li class="title">Danh Mục tin tức</li>
					<?php
							$sql_danhmuc_bv = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_baiviet DESC";
							$query_danhmuc_bv = mysqli_query($conn,$sql_danhmuc_bv);
							while($row = mysqli_fetch_array($query_danhmuc_bv)){
					?>
					
					<li><a href="tintuc.php?tintuc=danhmuctintuc&id=<?php echo $row['id_baiviet'] ?>">
						<button>
							<?php echo $row['tendanhmuc_baiviet'] ?>
						</button>
					</a></li>
					<?php

					   }	
					?>
					
				</ul>
			
		   </div>
				
			<div class="khung-frame">				
				<div class="section">
					<?php
							if(isset($_GET['tintuc'])){
								$tam = $_GET['tintuc'];
							}else{
								$tam ='';
							}
							if($tam=='danhmuctintuc'){
							include("pager/main/danhmuctintuc.php");

							}elseif($tam=='baiviet'){
								include("pager/main/baiviet.php");
		 
							}else{
								include("pager/main/tintuc.php");
							}
					?>
								
				</div>
		</div>
		
	</div>
	 <!--phần chân trang-->
	 <div class="footer">
					<!--P>sinh viên: nguyễn hoàng phương </p>
					<P>msv:19810310115</P-->
					<p>copyright:Nguyễn Phương PC</p>
					<p>khoa CNTT trường đại học Điện Lực</P>
				</div>
		 <!--end phần chân trang-->

	<!--end class=""-->
	<script src="js/script.js" charset="utf-8"></script>
</body>

