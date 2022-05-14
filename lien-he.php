<?php
		include("admincp/config/config.php");
		session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<!-- CSS is here -->
<title>Web bán hàng</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
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
<link href="css/form.css" rel="stylesheet" type="text/css">
<link href="css/list.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>

	<div class="">

	  <!-- Thanh công cụ -->
		<div class="nav fixed-top">
			<ul class="list-left">
				<li><a href="index.php" class="a-light logo-home">HOME</a></li>
				<li><a href="tintuc.php">Tin tức</a></li>
				<li><a href="lien-he.html">Liên hệ</a></li>
				<div class="social-buttons">
					<a href="https://www.facebook.com/profile.php?id=100034595911907"><i class="fab fa-facebook"></i></a>
				</div>
			</ul>
			<ul class="list-right">
				<li class="dang-nhap"><a href="loginkhachhang/dang-nhap.php">Đăng nhập</a></li>
				<span>|</span>				
				<li><a href="pager/main/giohang.php" class="left a-light">GIỎ HÀNG</a></li>
			</ul>
		</div>
		<!-- end Thanh công cụ -->


		<!-- Phần header -->
		<div class="header"> <a href="index.php"><img src="image/logo-web1.png" alt="" width="120" height="90" class="logo"/></a>
			<span class="ten-cua-hang">Nguyễn Phương PC</span>
			<div class="search">
					<form action="index.php?quanly=timkiem" method="POST">
							<input type="search" class="search-box" name="tukhoa" placeholder="Bạn cần tìm gì ?">
							<input type="submit" class="search-button" name="timkiem" value="Search">
					</form>
			</div>
		</div>
		<!-- end Phần header -->

		<!--Đường dẫn (breadcrumb)-->
	  <div class="breadcrumb">
			<a class="truoc-do">Home</a> <span class="hien-tai" >&raquo;</span><span class="hien-tai">Liên hệ</span>
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
					
					<li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc'] ?>">
						<button>
							<?php echo $row['tendanhmuc'] ?>
						</button>
					</a></li>
					<?php

					   }	
					?>
					
				</ul>
			
		</div>
			<!--End Thanh menu bên trái -->
			<!--Phần section 1-->
			<div class="khung-chua-san-pham">
			  <div class="section">
			    <!--Thanh tiêu đề-->
			    <p class="section-head">Liên hệ với chúng tôi</p>
			    <!--End Thanh tiêu đề-->
			    <!--Liên hệ-->
			    <form class="contact-form" action="pager/main/lienhe.php" method="POST">
			      <p class="title">Vui lòng nhập thông tin</p>
				  <p class="tb">
					   <?php
							if( isset($_SESSION["thongbao"]) ) {
								echo $_SESSION["thongbao"];
								unset($_SESSION["thongbao"]);
							}
					   ?>
				   </p>
			      <input id="ten" type="text" placeholder="Tên" name="ten" class="lienhe"/>
			      <input id="email" type="email" name="email" placeholder="Email" class="lienhe"/>
			      <input id="sdt" type="tel" name="sdt" placeholder="Số điện thoại" class="lienhe"/>
			      <textarea id="noi-dung" name="noidung" autofocus placeholder="Nội dung"></textarea>
			      <button type="submit" name="submit" class="contact-sent">ấn để gửi</button>

			      </form>
			    <!--End liên hệ-->
			    </div>
		  </div>
			<!--end section 2-->
			</div>
		
		<div class="clear"></div>
		<!--Phần chân trang-->
		<?php
			include('pager/footer.php');
		?>
		<!--end Phần chân trang-->
	</div>
	<!--end class=""-->


</body>
</html>
