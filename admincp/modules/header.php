<?php
  if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
    unset($_SESSION['dangnhap']);
    header('Location:login.php');
  }
?>
<!--header menu start-->
<div class="header">
				<div class="header-menu">
					<div class="title">Phương <span>PC</span></div>
					<div class="sidebar-btn">
						<i class="fas fa-bars"></i>
					</div>
					<ul>
						<li><a href="#"><i class="fas fa-search"></i></a></li>
						<li><a href="#"><i class="fas fa-bell"></i></a></li>
						<li><a href="index.php?dangxuat=1"><i class="fas fa-power-off"></i></a></li>
					</ul>
				</div>
			</div>
			<!--header menu end-->