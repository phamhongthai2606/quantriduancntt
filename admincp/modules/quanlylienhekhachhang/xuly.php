<?php
	include('../../config/config.php');
	if(isset($_GET['code'])){
		$code_cart = $_GET['code'];
		$sql_update ="UPDATE tbl_lienhe  WHERE code_cart='".$code_cart."'";
		$query = mysqli_query($conn,$sql_update);
		header('Location:../../index.php?action=quanlylienhekhachhang&query=lietke');
	} else{

		$id=$_GET['idlienhe'];
		$sql_xoa = "DELETE FROM tbl_lienhe WHERE id_lienhe='".$id."'";
		mysqli_query($conn,$sql_xoa);
		header('Location:../../index.php?action=quanlylienhekhachhang&query=lietke');
	}
?>