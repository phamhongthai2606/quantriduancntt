<?php
        session_start();
        include '../admincp/config/config.php';
        if( isset($_POST['submit']) && $_POST["username"] != '' && $_POST["email"] != '' && $_POST["password"] != '' && $_POST["repassword"] != '') {
            //thực hiện sử lý khi người dùng ấn nút submit và điền đầy đủ thông tin
            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = md5($_POST["password"]);
            $repassword = md5($_POST["repassword"]);
            $level = 0;
           
            if( $password != $repassword ) {
                $_SESSION["thongbao"] = "sai password nhập lại";
                header("Location:dang-nhap.php");
                die();
            }
            $sql = "SELECT * FROM user WHERE username='$username'";
            $old = mysqli_query($conn,$sql);
            if( mysqli_num_rows($old) > 0 ){              
                $_SESSION["thongbao"] = "username đã tồn tại";
               header("Location:dang-nhap.php");
               die();
            }
            $sql ="INSERT INTO user (username,email,password,level) VALUES ('$username' ,'$email','$password','$level')";
            mysqli_query($conn,$sql);
            
            $_SESSION["thongbao"] = "đã đăng ký thành công";
            header('Location:dang-nhap.php');
            if($sql){
                $_SESSION['id_khachhang'] = mysqli_insert_id($conn);               
            }
        }else{
            $_SESSION["thongbao"] = "vui lòng nhập đầy đủ thông tin";
            header("Location:dang-nhap.php");
        }

?>