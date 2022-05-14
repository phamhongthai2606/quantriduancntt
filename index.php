<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<!-- CSS is here -->
	<title>phuongnguyen</title>
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

<body>
<div class="">
			<?php
				include("admincp/config/config.php");
				include("pager/header.php");
				include("pager/container.php");
				include("pager/menu.php");
				include("pager/main.php");
				include("pager/footer.php");
			?>	
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" charset="utf-8"></script>
		<script type="text/javascript">
		// Show the first tab and hide the rest
		$('#tabs-nav li:first-child').addClass('active');
		$('.tab-content').hide();
		$('.tab-content:first').show();

		// Click function
		$('#tabs-nav li').click(function(){
		$('#tabs-nav li').removeClass('active');
		$(this).addClass('active');
		$('.tab-content').hide();
		
		var activeTab = $(this).find('a').attr('href');
		$(activeTab).fadeIn();
		return false;
		});
		</script>

		
</div>
</body>
</html>
