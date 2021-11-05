<?php
include "header.php";

if (isset($_GET["btn_submit"])) {
    $username = $_GET["username"];
    $password = $_GET["password"];

    //loại bỏ các kí tự và tag người dùng cố tình thêm vào
    //để tấn công database
    $username = strip_tags($username);
    $username = addslashes($username);
    $password = strip_tags($password); 
    $password = addslashes($password);

    $login = $product->login($username,$password);
    
    foreach($login as $value){
        if($value["username"] == $username || $value["password"] == $password){
            echo "Đăng nhập thành công ";
            $_SESSION["username"] = $username;
            $check = 1;
            header("location: index.php");
        }
    } 

    header("location: index.php"); 
}
