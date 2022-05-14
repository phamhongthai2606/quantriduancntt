<?php 
      session_start();
        if( !isset($_SESSION["dangnhap"])) {
            header("Location:login.php");
        }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Sidebar Dashboard Template With Sub Menu</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/quanly.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
	</head>
	<body>

		<!--wrapper start-->
		<div class="wrapper">
			<?php
					include('config/config.php');
					include('modules/header.php');
					include('modules/sidebar.php');
					include('modules/main.php');
			?>
		</div>
		<!--wrapper end-->
		<!-- xử lý đóng mở sidebar -->
		<script type="text/javascript">
		$(document).ready(function(){
			$(".sidebar-btn").click(function(){
				$(".wrapper").toggleClass("collapse");
			});		
		});
		</script>
		
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
		<!-- công cụ ckeditor -->
		<script>
				CKEDITOR.replace('tomtat');
				CKEDITOR.replace('noidung');
    	</script>
		<!-- biểu đồ thống kê doanh thu -->
		<script type="text/javascript">
		$(document).ready(function(){
			thongke();
			var char = new Morris.Area({
			
			element: 'chart',
			
			xkey: 'date',
			
			ykeys: ['date','order','sales','quantity'],
			
			labels: ['Đơn hàng','Doanh thu','Số lượng bán ra','Số lượng']
			});

			$('.select-date').change(function(){
				var thoigian = $(this).val();
				if(thoigian=='7ngay'){
					var text = '7 ngày qua';
				}else if(thoigian=='28ngay'){
					var text = '28 ngày qua';
				}else if(thoigian=='90ngay'){
					var text = '90 ngày qua';
				}else{
					var text = '365 ngày qua';
				}

				$.ajax({
						url:"modules/thongke.php",
						method:"POST",
						dataType:"JSON",
						data:{thoigian:thoigian},
						success:function(data)
						{
							char.setData(data);
							$('#text-date').text(text);
						}   
					});
			})
			function thongke(){
					var text = '365 ngày qua';
					$('#text-date').text(text);
					$.ajax({
						url:"modules/thongke.php",
						method:"POST",
						dataType:"JSON",
						success:function(data)
						{
							char.setData(data);
							$('#text-date').text(text);
						}   
					});
				}
		});
		</script>
	</body>
</html>
