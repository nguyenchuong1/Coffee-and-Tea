<?php
session_start(); 

include "./admin/Mysql/database.php";
if(isset($_POST['dangnhap'])){
    $taikhoan=$_POST['username'];
    $password = md5($_POST['password']);
    $sql = "SELECT * FROM tbl_user where tk_user ='".$taikhoan."' AND password_user = '".$password."' LIMIT 1";
    $row = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($row);
    if($count>0)
    {
        $row_data=mysqli_fetch_array($row);
        if($row_data['tinhtrang']==1 && $row_data['role_user']!=1)
        {
            $_SESSION['dangky']=$row_data['name_user'];
        $_SESSION['id_khachhang']=$row_data['id_user'];
        header("location: ./index.php") ;
        }
        else{
            echo '<p style="color:red">Tài khoản hoặc mật khẩu không đúng, vui lòng nhập lại!</p>';
        }
    }else{
        echo '<p style="color:red">Tài khoản hoặc mật khẩu không đúng, vui lòng nhập lại!</p>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./resources/css/img/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./resources/css/style_login.css">
    <title>Coffee-Tea</title>
</head>
<body>
<div class="login">
        <h1>Đăng nhập</h1>

        <form method="post" autocomplete="off" action="">
            <div class="fillin">
                <input type="text" name="username" required>
                <span></span>
                <label>Tên đăng nhập</label>
            </div>

            <div class="fillin">
                <input type="password" name="password"required>
                <span></span>
                <label>Mật khẩu</label>
            </div>

            <div class="pass" >
                <a href="./Trasua.php">Quên mật khẩu?</a>
            </div>

            <!-- <input type="submit" value="Đăng nhập" > -->
            <!-- <div >
                <a  href="./admin2.php">Đăng Nhập</a>
            </div>   -->
            <div id="khungnut">
                <input  id="khungnut" class="button" type="submit" name="dangnhap" value="Đăng nhập">
            </div> 
            
            <div class="signin_link">
                <a href="./index.php">Quay lại trang chủ</a><b>|</b><a href="./login_dangki.php">Đăng ký</a>
            </div>
            <div class="signin_link">
                <a href="./admin/login-admin.php">Đăng nhập tư cách là quản trị viên</a>
            </div>  
                     
        </form>
    </div>
    
</body>
</html>