<?php
session_start();
require('../../carbon/autoload.php');
include('../../admincp/config/config.php');
use Carbon\Carbon;
use Carbon\CarbonInterval;
$now = Carbon::now('Asia/Ho_Chi_Minh');
if(isset($_POST['coment']) && $_SESSION["user"] != '' && $_POST["binhluan"]  != ''){
    $id_sanpham=$_GET['idsanpham'];
    $binhluan = $_POST['binhluan'];
    $sql_coment="INSERT INTO tbl_binhluan (id_sanpham,binhluan,binhluan_date) VALUES ('$id_sanpham','$binhluan','$now')";
    $sql_coment=mysqli_query($conn,$sql_coment);
    $_SESSION["binhluan"] = $sql_coment;
    header('location:../../index.php?quanly=sanpham&id='.$id_sanpham.'');

}else{
    $id_sanpham=$_GET['idsanpham'];
    header('location:../../index.php?quanly=sanpham&id='.$id_sanpham.'');
}
// người dùng bắt buộc phải đăng nhập mới đc bình luận
if(isset($_SESSION['user'])){
   
}else{
    $_SESSION['thongbao'] = "vui lòng đăng nhập để bình luận";
    header('location:../../loginkhachhang/dang-nhap.php');
}

?>  