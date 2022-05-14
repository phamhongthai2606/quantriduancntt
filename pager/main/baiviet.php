<?php
	$sql_bv = "SELECT * FROM tbl_baiviet WHERE tbl_baiviet.id='$_GET[id]' LIMIT 1";
	$query_bv = mysqli_query($conn,$sql_bv);
	$query_bv_all = mysqli_query($conn,$sql_bv);
	
	$row_bv_title = mysqli_fetch_array($query_bv);
?>
<p class="section-head">Bài viết: <?php echo $row_bv_title['tenbaiviet'] ?></p>
				<div class="baiviet">
					<?php
					while($row_bv = mysqli_fetch_array($query_bv_all)){ 
					?>					
						<h2><?php echo $row_bv['tenbaiviet'] ?></h2>				
						<p ><?php echo $row_bv['tomtat'] ?></p>
						<p style="margin:10px" class="title_product"><?php echo $row_bv['noidung'] ?></p>
					<?php
					} 
					?>
					
				</div>