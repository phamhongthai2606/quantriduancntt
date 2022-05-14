<?php
        session_start();
        include '../../admincp/config/config.php';
        if( isset($_POST['submit']) && $_POST["ten"] != '' && $_POST["email"] != '' && $_POST["sdt"] != '' && $_POST["noidung"] != '') {
            //thực hiện sử lý khi người dùng ấn nút submit và điền đầy đủ thông tin
            $ten = $_POST["ten"];
            $email = $_POST["email"];
            $sdt = $_POST["sdt"];
            $noidung = $_POST["noidung"];
           
            $sql ="INSERT INTO tbl_lienhe (ten,email,sdt,noidung) VALUES ('$ten' ,'$email','$sdt','$noidung')";
            mysqli_query($conn,$sql);
            $_SESSION["thongbao"] = "phản hồi thông tin thành công";
            header("Location:../../lien-he.php");
        }else{
            $_SESSION["thongbao"] = "vui lòng nhập đầy đủ thông tin";
            header("Location:../../lien-he.php");
        }

?>