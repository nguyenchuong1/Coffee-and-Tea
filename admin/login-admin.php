<?php
session_start(); 
include "./Mysql/database.php";
if(isset($_POST['dangnhap'])){
    $taikhoan=$_POST['username'];
    $password = md5($_POST['password']);
    $role =1;
    $sql = "SELECT * FROM tbl_user where tk_user ='".$taikhoan."' AND password_user = '".$password."' AND role_user = '".$role."' ";
    $row = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($row);
    if($count>0)
    {
        $_SESSION['dangnhap']=$taikhoan;
        header("location: ./admin2.php") ;

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
    <link rel="icon" href="../resources/css/img/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="../resources/css/style_login.css">
    <title>Coffee-Tea</title>
</head>
<body>
    <div class="login">
        <h1>Admin</h1>

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

            <div class="pass">Quên mật khẩu?</div>

            <!-- <input type="submit" value="Đăng nhập" > -->
            <!-- <div >
                <a  href="./admin2.php">Đăng Nhập</a>
            </div>   -->
            <input  id="khungnut" class="button" type="submit" name="dangnhap" value="Đăng ký">
            <div class="signin_link">
                <a href="../login.php">Trở về trang đăng nhập user</a>
            </div>   
            <?php
            if(isset($txt_error) && ($txt_error!=""))
            {
                    echo "<font color='red'".$txt_error."</font>";
            }
             ?>           
        </form>
    </div>
</body>
</html>