<?php
	
   $sql_bv = "SELECT * FROM tbl_baiviet WHERE tbl_baiviet.id_danhmuc='$_GET[id]'  ORDER BY id DESC ";
   $query_bv = mysqli_query($conn,$sql_bv); 
   //get ten danh muc
   $sql_cate = "SELECT * FROM tbl_danhmucbaiviet WHERE tbl_danhmucbaiviet.id_baiviet='$_GET[id]' LIMIT 1";
   $query_cate = mysqli_query($conn,$sql_cate);
   $row_title = mysqli_fetch_array($query_cate);
?>
<!--Phần section 1-->
<div class="section">
				<p class="section-head">Danh Mục tin tức: <?php echo $row_title['tendanhmuc_baiviet'] ?></p>
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
					
                                
</div>
      