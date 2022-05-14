<?php
	session_start();
	include('config/config.php');
	if(isset($_POST['dangnhap'])){
		$taikhoan = $_POST['username'];
		$matkhau = md5($_POST['password']);
		$sql = "SELECT * FROM tbl_admin WHERE username='".$taikhoan."' AND password='".$matkhau."' LIMIT 1";
		$row = mysqli_query($conn,$sql);
		$count = mysqli_num_rows($row);
		if($count>0){
			$_SESSION['dangnhap'] = $taikhoan;
			header("Location:index.php");
		}else{
			echo "<script>alert('Tài khoản hoặc Mật khẩu không đúng,vui lòng nhập lại.');</script>";
			header("Location:login.php");
		}
	} 
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<title>Responsive Login Page</title>
		<link rel="stylesheet" href="css/login.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</head>
	<body class="login">

		<!--form area start-->
		<div class="form">
			<!--login form start-->
			<form class="login-form"  action="" autocomplete="off" method="POST">
				<i class="fas fa-user-circle"></i>
				<input class="user-input" type="text" name="username" placeholder="Username" required>
				<input class="user-input" type="password" name="password" placeholder="Password" required>
				<div class="options-01">
					<label class="remember-me"><input type="checkbox" name="">Remember me</label>
				</div>
				<input class="btn" type="submit" name="dangnhap" value="LOGIN">
			</form>
			<!--login form end-->
		</div>
		<!--form area end-->

		<script type="text/javascript">
		$('.options-02 a').click(function(){
			$('form').animate({
				height: "toggle", opacity: "toggle"
			}, "slow");
		});
		</script>
		
	</body>
</html>