<!--sidebar start-->
<div class="sidebar">
				<div class="sidebar-menu">
					<center class="profile">
						<img src="1.jpg" alt="">
						<p><?php if(isset($_SESSION['dangnhap'])){
		                    echo $_SESSION['dangnhap'];
	                    } ?></p>
					</center>
					<li class="item">
						<a href="index.php" class="menu-btn">
							<i class="fas fa-desktop"></i><span>Dashboard</span>
						</a>
					</li>
					<li class="item" id="profile">
						<a href="#profile" class="menu-btn">
                            <i class="fas fa-table"></i><span>Quản Lý <i class="fas fa-chevron-down drop-down"></i></span>
						</a>
						<div class="sub-menu">
							<a href="index.php?action=quanlydanhmucsanpham&query=them"><i class="fas fa-image"></i><span>danh mục sp</span></a>
                            <a href="index.php?action=quanlysp&query=them"><i class="fab fa-product-hunt"></i>sản phẩm</a>
                            <a href="index.php?action=quanlybaiviet&query=them">bài viết</a>
                            <a href="index.php?action=quanlydanhmucbaiviet&query=them"> danh mục bài viết</a>
                            <a href="index.php?action=quanlydonhang&query=lietke">đơn hàng</a>
                            <a href="index.php?action=quanlylienhe&query=lietke">liên hệ của khách hàng</a>
                            <a href="index.php?action=quanlylienhe&query=them">baner trang chủ</a>
                          
						</div>
					</li>
					<li class="item" id="messages">
						<a href="#messages" class="menu-btn">
							<i class="fas fa-envelope"></i><span>Messages <i class="fas fa-chevron-down drop-down"></i></span>
						</a>
						<div class="sub-menu">
							<a href="#"><i class="fas fa-envelope"></i><span>New</span></a>
							<a href="#"><i class="fas fa-envelope-square"></i><span>Sent</span></a>
							<a href="#"><i class="fas fa-exclamation-circle"></i><span>Spam</span></a>
						</div>
					</li>
					<li class="item" id="settings">
						<a href="#settings" class="menu-btn">
							<i class="fas fa-cog"></i><span>Settings <i class="fas fa-chevron-down drop-down"></i></span>
						</a>
						<div class="sub-menu">
							<a href="#"><i class="fas fa-lock"></i><span>Password</span></a>
							<a href="#"><i class="fas fa-language"></i><span>Language</span></a>
						</div>
					</li>
					<li class="item">
						<a href="#" class="menu-btn">
							<i class="fas fa-info-circle"></i><span>About</span>
						</a>
					</li>
				</div>
			</div>
			<!--sidebar end-->