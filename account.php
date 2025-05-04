
<section class="menu_sanpham">
    <div class="container">

        <div class="head_dau">
            <h2>Tài Khoản</h2>
            <h1>Coffee-Tea</h1>
        </div>
    </div>
</section>
<?php
include "./admin/Mysql/database.php";
if(isset($_POST['doimatkhau'])){
    $id= $_SESSION['id_khachhang'];

    $taikhoan=$_POST['tk_dn'];

    $password_old = md5($_POST['password_old']);

    $password_new = md5($_POST['password_new']);
    
    $hoten =$_POST['hoten'];

    $adress =$_POST['adress'];

    $email= $_POST['email'];

    $phone = $_POST['phone'];

    $quan = $_POST['quan'];

    $thanhpho = $_POST['thanhpho'];

    $sql = "SELECT * FROM tbl_user where password_user = '$password_old' AND tbl_user.id_user=$id";
    $row = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($row);
   
    if($count>0)
    { 
        
        $sql_update_user = "UPDATE tbl_user SET tk_user='$taikhoan', password_user='$password_new',
        name_user='$hoten', adress_user='$adress',quan = '$quan',thanhpho='$thanhpho', email_user='$email', number_user='$phone' 
        WHERE tbl_user.id_user='$id'";
        $sql_update = mysqli_query($conn, $sql_update_user);
        
        unset($_SESSION['dangky']);
        $_SESSION['dangky']=$hoten;
        echo '<p style="color:green">Tài khoản đã cập nhật!</p>';
    }else{
       echo '<p style="color:red">Tài khoản hoặc mật khẩu không đúng, vui lòng nhập lại!</p>';
    }
}
?>
<section class="mid section-pading">
    <div class="container1">

        <div class="row">
            <form action="" method="POST" autocomplete="off" >
                <?php 
                 $id= $_SESSION['id_khachhang'];
                 $sql = "SELECT * FROM tbl_user where tbl_user.id_user='$id'";
                 $row = mysqli_query($conn,$sql);
                 $row_user=mysqli_fetch_array($row);
                ?>
                <table border="1" style="text-align: center; border-collapse: collapse;">
                
                    <tr>
                        <td colspan="2">Thay đổi tài khoản </td>
                    </tr>
                    <tr>
                        <td><label>Tên đăng nhập</label></td>
                        <td><input type="text" name="tk_dn" value="<?php echo $row_user['tk_user'];?>"></td>
                    </tr>
                    <tr>
                        <td><label>Họ tên</label></td>
                        <td><input type="text" name="hoten" value="<?php echo $row_user['name_user'];?>"></td>
                    </tr>
                    <tr>
                        <td><label>Phường xã</label></td>
                        <td><input type="text" name="adress" value="<?php echo $row_user['adress_user'];?>"></td>
                    </tr>

                    <tr>
                        <td><label>Quận Huyện</label></td>
                        <td><input type="text" name="quan" value="<?php echo $row_user['quan'];?>"></td>
                    </tr>

                    <tr>
                        <td><label>Tỉnh Thành</label></td>
                        <td><input type="text" name="thanhpho" value="<?php echo $row_user['thanhpho'];?>"></td>
                    </tr>

                    <tr>
                        <td><label>Email</label></td>
                        <td><input type="text" name="email" value="<?php echo $row_user['email_user'];?>"></td>
                    </tr>
                    <tr>
                        <td><label>Số điện thoại</label></td>
                        <td><input type="text" name="phone" value="0<?php echo $row_user['number_user'];?>"></td>
                    </tr>
                    <tr>
                        <td><label>Mật khẩu cũ</label></td>
                        <td><input type="text" name="password_old" ></td>

                    </tr>
                    <tr>
                        <td><label>Mật khẩu mới</label></td>
                        <td><input type="text" name="password_new" ></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input  type="submit" name="doimatkhau" value="Thay đổi"></td>
                    </tr>
                    <tr></tr>
                </table>

            </form>
        </div>
    </div>
</section>