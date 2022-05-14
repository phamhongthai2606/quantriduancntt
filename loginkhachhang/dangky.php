<!--signup form start-->
					<form class="signup-form" action="register_submit.php" method="POST">
						<i class="fas fa-user-plus"></i>
						<p class="tb">
								<?php
									  if( isset($_SESSION["thongbao"]) ) {
										  echo $_SESSION["thongbao"];
										  unset($_SESSION["thongbao"]);
									  }
								?>
						 </P>
						<input class="user-input" type="text" name="username" placeholder="Tên đăng nhập" required>
						<input class="user-input" type="email" name="email" placeholder="Email Address" required>
						<input class="user-input" type="password" name="password" placeholder="Mật khẩu" required>
						<input class="user-input" type="password" name="repassword" placeholder="Xác nhận mật khẩu" >
						<input class="btn" type="submit" name="submit" value="ĐĂNG KÝ">
						<div class="options-02">
							<p>Bạn đã có tài khoản? <a href="#">Đăng nhập</a></p>
						</div>
					</form>
<!--signup form end-->