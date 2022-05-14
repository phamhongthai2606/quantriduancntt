<?php
     session_start();
     include '../admincp/config/config.php';
     if( isset($_POST["submit"]) && $_POST["username"] != '' && $_POST["password"] != '' ) {
        $username = $_POST["username"];
        $password = md5($_POST["password"]);
       
        $sql = "SELECT * FROM user WHERE username='$username' AND password='$password' ";
        $user = mysqli_query($conn,$sql);
    
            if( mysqli_num_rows($user) > 0 ) {
                    $user_data = mysqli_fetch_array($user);
                    $_SESSION["gmail"] = $user_data['email'];;                   
                    $_SESSION['id_khachhang'] = $user_data['id_khachhang'];
                    $_SESSION["user"] = $username;              
                    header("Location:../index.php"); 
            }else{
                    $_SESSION["thongbao"] = "bạn đã nhập sai tài khoản hoặc password";
                    header("Location:dang-nhap.php");   
          }        
     }else {
         $_SESSION["thongbao"] = "vui lòng nhập đầy đủ thông tin";
         header("Location: dang-nhap.php");
     }

?>