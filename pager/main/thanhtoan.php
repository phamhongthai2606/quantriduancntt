<?php
    session_start();
    include '../../admincp/config/config.php';
    require('../../carbon/autoload.php');
	use Carbon\Carbon;
    use Carbon\CarbonInterval;

    if(isset($_POST["submit"]) && $_SESSION['user']  != '' && $_POST["name"]  != ''  && $_POST["phone"]  != ''  && $_POST["diachi"] != ''){
        //xử lý khi người dùng nhập đầy đủ thông tin
        $id_khachhang = $_SESSION['id_khachhang'];
        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $gmail = $_SESSION["gmail"];
        $diachi = $_POST["diachi"];
        $note = $_POST["note"];
            
         $sql_khachhang ="INSERT INTO tbl_khachhang (id_khachhang,name,phone,gmail,diachi,note) VALUES ('$id_khachhang','$name','$phone','$gmail','$diachi','$note')";
         mysqli_query($conn,$sql_khachhang);
        //upload dữ liệu bảng cart,cart_details
            $now = Carbon::now('Asia/Ho_Chi_Minh');
            $id_khachhang = $_SESSION['id_khachhang'];
            $code_order = rand(0,9999);
            $insert_cart = "INSERT INTO tbl_cart(id_khachhang,code_cart,cart_status,cart_date) VALUE('".$id_khachhang."','".$code_order."',1,'".$now."')";           
            $cart_query = mysqli_query($conn,$insert_cart);
            if($cart_query){
                //them gio hang chi tiet
                foreach($_SESSION['cart'] as $key => $value){
                    $id_sanpham = $value['id'];
                    $soluong = $value['soluong'];
                    $insert_order_details = "INSERT INTO tbl_cart_details(id_sanpham,code_cart,soluongmua) VALUE('".$id_sanpham."','".$code_order."','".$soluong."')";
                    mysqli_query($conn,$insert_order_details);
                }
            }
         header("location:camon.php"); 
         unset($_SESSION['cart']);        
    }else{
        header("location:../../loginkhachhang/dang-nhap.php ");
        $_SESSION["thongbao"] = "vui lòng nhập đầy đủ thông tin";
    }

    //người dùng bắt buộc phải đăng nhập mới đặt được hàng  
    if(isset($_SESSION['user'])){
       
    }else{
        header("location:../../loginkhachhang/dang-nhap.php ");
        $_SESSION["thongbao"] = "vui lòng đăng nhập để đặt hàng";
    }
   
?>