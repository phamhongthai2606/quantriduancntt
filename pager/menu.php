
<div class="menu-ben-trai">
				
					<ul  class="list">
						<li class="title">Danh Mục Sản Phẩm</li>
						<?php
								$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
								$query_danhmuc = mysqli_query($conn,$sql_danhmuc);
				                while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
			
						?>
						
						<li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>">
							<button>
								<?php echo $row_danhmuc['tendanhmuc'] ?>
							</button>
						</a></li>
						<?php

						   }	
						?>
						
					</ul>
				
</div>