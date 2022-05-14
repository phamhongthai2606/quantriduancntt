<?php
		session_start();		
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<!-- CSS is here -->
<title>Web bán hàng</title>
	<link href="../css/style.css" rel="stylesheet" type="text/css">
	<link href="../css/nav-header.css" rel="stylesheet" type="text/css">
	<link href="../css/banner-top.css" rel="stylesheet" type="text/css">
	<link href="../css/left-content.css" rel="stylesheet" type="text/css">
	<link href="../css/csslogin/section.css" rel="stylesheet" type="text/css">
	<link href="../css/csslogin/footer.css" rel="stylesheet" type="text/css">
	<link href="../css/product-box.css" rel="stylesheet" type="text/css">
	<link href="../css/responsive.css" rel="stylesheet" type="text/css">
	<link href="../css/sapxepsp.css" rel="stylesheet" type="text/css">
	<link href="../css/right-content.css" rel="stylesheet" type="text/css">
	<link href="../css/breadcrumb.css" rel="stylesheet" type="text/css">
	<link href="../css/csslogin/list.css" rel="stylesheet" type="text/css">
	<link href="../css/csslogin/thongbao.css" rel="stylesheet" type="text/css">
	<link href="../css/csslogin/login.css" rel="stylesheet" >
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
	
	<div class="">

	  <!-- Thanh công cụ -->
		<div class="nav fixed-top">
			<ul class="list-left">
				<li><a href="../index.php" class="a-light logo-home">HOME</a></li>
				<li><a href="../tintuc.php">Tin tức</a></li>
				<li><a href="../lien-he.php">Liên hệ</a></li>
				<div class="social-buttons">
					<a href="https://www.facebook.com/profile.php?id=100034595911907"><i class="fab fa-facebook"></i></a>
					<a href="https://www.instagram.com/phuong2756nguyen/"><i class="fab fa-instagram"></i></a>
					<a href="https://www.youtube.com/c/MixiGamingofficial"><i class="fab fa-youtube"></i></a>
				</div>
			</ul>
			<ul class="list-right">
				<li class="dang-nhap"><a href="dang-nhap.php">Đăng nhập</a></li>
				<span>|</span>
				<li><a href="../pager/main/giohang.php" class="left a-light">GIỎ HÀNG</a></li>
			</ul>
		</div>
		<!-- end Thanh công cụ -->


		<!-- Phần header -->
		<div class="header"> <a href="../index.php"><img src="../image/logo-web1.png" alt="" width="120" height="90" class="logo"/></a>
			<span class="ten-cua-hang">Nguyễn Phương PC</span>
					<div class="search">
						<form action="../index.php?quanly=timkiem" method="POST">
							<input type="search" class="search-box" name="tukhoa" placeholder="Bạn cần tìm gì ?">
							<input type="submit" class="search-button" name="timkiem" value="Search">
						</form>
			        </div>
		</div>
		<!-- end Phần header -->

		<!--Đường dẫn (breadcrumb)-->
	  <div class="breadcrumb">
			<a class="truoc-do">Home</a> <span class="hien-tai" >&raquo;</span><span class="hien-tai">Đăng nhập</span>
		</div>
		<!--End đường đẫn - Breadcrumb-->

		<!-- Phần thân trang container -->
		<p class="section-head">Đăng Nhập Với Chúng Tôi</p>
		<div class="form">
			<!--login form start-->

					<form class="login-form" action="login_submit.php" method="POST">
						<i class="fas fa-user-circle"></i>
						 <p class="tb">
							  <?php
									if( isset($_SESSION["thongbao"]) ) {
										echo $_SESSION["thongbao"];
										unset($_SESSION["thongbao"]);
									}
							  ?>
				 		 </P>
						<input class="user-input" type="text" name="username" placeholder="Tên đăng nhập" required>
						<input class="user-input" type="password" name="password" placeholder="Mật khẩu" required>
						<div class="options-01">
							<label class="remember-me"><input type="checkbox" name="">Remember me</label>
							<a href="#">Quên Mật Khẩu?</a>
						</div>
						<input class="btn" type="submit" name="submit" value="ĐĂNG NHẬP">
						<div class="options-02">
							<p>Bạn chưa có tài khoản? <a href="#">Đăng ký tài khoản</a></p>
						</div>
					</form>
					<!--login form end-->
					<?php 
							include('dangky.php');
					?>
				</div>
		<!--form area end-->

		<script type="text/javascript">
		$('.options-02 a').click(function(){
			$('form').animate({
				height: "toggle", opacity: "toggle"
			}, "slow");
		});
		</script>
		<div class="clear"></div>
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
</body>
</html>
