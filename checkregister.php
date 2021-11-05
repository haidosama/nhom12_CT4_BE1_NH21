<?php

$conn = mysqli_connect("localhost","root","","backend") or die("không thể kết nối tới mySQL !");


$check = 0;
    if(isset($_POST["btn_submit"])){
            $username = $_POST["username"];
            $password = $_POST["password"];

            //loại bỏ các kí tự và tag người dùng cố tình thêm vào
            //để tấn công database
            $username = strip_tags($username);
            $username = addslashes($username);
            $password = strip_tags($password); 
            $password = addslashes($password);

            $sql = "SELECT * FROM `user` WHERE username = `$username`";
            $query = mysqli_query($conn,$sql);
            $num_row = mysqli_num_rows($query);//dòng này đang có lỗi
            if($num_row == 0){
                $check = 1;
            }elseif($_POST["password"] != $_POST["re_password"]){
                 $check = 1;   
            }

            // if($check = 0){
            //     $sql1 = "INSERT INTO `user`(`username`,`password`) VALUES(`$username`,`$password`)";
            //     $query = mysqli_query($conn,$sql1);
            //     echo "Đã tạo tài khoản thành công ";
            //     // sleep(15);
            //     // header("location: index.php");
            // }
            echo $check;
        // header("location: register.php");
    }
