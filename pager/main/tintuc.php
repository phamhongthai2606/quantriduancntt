<p class="section-head">tổng hợp tin tức</p>
<?php
	$sql_bv = "SELECT * FROM tbl_baiviet WHERE tinhtrang=1 ORDER BY id DESC";
	$query_bv = mysqli_query($conn,$sql_bv);
	
?>
			
					<?php
					while($row_bv = mysqli_fetch_array($query_bv)){ 
					?>
					<div class="tintuc">                                                      
                                 <a href="tintuc.php?tintuc=baiviet&id=<?php echo $row_bv['id'] ?>">
                                         <img src="admincp/modules/quanlybaiviet/uploads/<?php echo $row_bv['hinhanh'] ?>" height="150px" width="150px">
                                        <p>Tên bài viết : <?php echo $row_bv['tenbaiviet'] ?></p>                                           
                                </a>               
                        </div>
					<?php
					} 
					?>
					
			