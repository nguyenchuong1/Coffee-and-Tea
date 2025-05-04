<?php 
include "./admin/Mysql/database.php";
session_start();
if(isset($_POST['dangky']))
{
    

    $user_dn=$_POST['name_tk'];
    $hoten=$_POST['hoten'];
    $pw=md5($_POST['pass']);

    $phuong=$_POST['phuong'];
    $quan=$_POST['phuong'];
    $city=$_POST['city'];

    $email=$_POST['email'];
    $number=$_POST['number_phone'];
    $status=$_POST['status'];
    
    $sql = " SELECT tk_user FROM tbl_user WHERE tk_user = '$user_dn'";
    $qr = mysqli_query($conn, $sql);
    $row_count = mysqli_num_rows($qr);
    if($row_count >=1){
        
        echo '<script>
            alert("Tài khoản đã tồn tại, vui lòng chọn tên đăng nhập khác.");
                    
        </script>';
    }
    else{
        // echo $row_count;
        $sql_dangky = mysqli_query($conn,"INSERT INTO tbl_user(tk_user,password_user,name_user,adress_user,quan,thanhpho,email_user,number_user,role_user,tinhtrang) 
    VALUE('$user_dn','$pw','$hoten','$phuong','$quan','$city','$email','$number','$status',1)");
    if($sql_dangky)
        {
            $_SESSION['dangky']=$hoten;
            $_SESSION['id_khachhang']=mysqli_insert_id($conn);
            
            echo '<p style="color:green">Bạn đã đăng ký thành công. Đang chuyển hướng...</p>';

             // JavaScript để chuyển hướng sau vài giây
                echo '<script>
                    setTimeout(function() {
                     window.location.href = "./login.php";
                    }, 3000); // 3 giây
                    </script>';
        }

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
    <link rel="stylesheet" href="./resources/css/dangki.css">
    <title>Coffee-Tea</title>
</head>

<body>
    <div class="login">
        <h1 style="font-size: 25px;">Đăng ký</h1>
        <form method="post" action="" name="mainform"  onsubmit="return MainForm();">
            <div class="fillin">
                <input id="name_tk" name="name_tk" type="text">
                <span></span>
                <label>Tên đăng nhập</label>
                
            </div>

            <div class="fillin">
                <input id="hoten" name="hoten" type="text">
                <span></span>
                <label>Họ và tên</label>
            </div>

            <div class="fillin">
                <input id="mk" name="pass" type="text">
                <span></span>
                <label>Mật khẩu</label>
            </div>

            <div class="fillin">
                <input id="mk_2" name="mk_2" type="text">
                <span></span>
                <label>Nhập lại mật khẩu</label>
            </div>

            <div class="fillin">
                <input id="phuong" name="phuong" type="text">
                <span></span>
                <label>Phường/Xã</label>
            </div>
            <div class="fillin">
                <input id="quan" name="quan" type="text">
                <span></span>
                <label>Quận/Huyện</label>
            </div>
            <div class="fillin">
                <input id="city" name="city" type="text">
                <span></span>
                <label>Thành phố/Tỉnh</label>
            </div>
            <div class="fillin">
                <input id="email" name="email" type="text">
                <span></span>
                <label>Email</label>
            </div>
            <div class="fillin">
                <input id="number" name="number_phone" type="text">
                <span></span>
                <label>Số điện thoại</label>
            </div>
            <input type="hidden" name="status" value="0">
            <input type="submit" name="dangky" value="Đăng ký">
            <p><a href="./login.php">Trở về đăng nhập</a></p>
        </form>
        
    </div> 

    <!-- <div class="login">
        <h1 style="font-size: 25px;">Đăng ký</h1>
        <form method="post" action="" name="mainform" onsubmit="return MainForm();">
            <div class="fillin">
                <input id="name_tk" name="name_tk" type="text" value="<?php echo htmlspecialchars($user_dn); ?>">
                <span></span>
                <label>Tên đăng nhập</label>
            </div>

            <div class="fillin">
                <input id="hoten" name="hoten" type="text" value="<?php echo htmlspecialchars($hoten); ?>">
                <span></span>
                <label>Họ và tên</label>
            </div>

            <div class="fillin">
                <input id="mk" name="pass" type="text" >
                <span></span>
                <label>Mật khẩu</label>
            </div>

            <div class="fillin">
                <input id="mk_2" name="mk_2" type="text">
                <span></span>
                <label>Nhập lại mật khẩu</label>
            </div>

            <div class="fillin">
                <input id="phuong" name="phuong" type="text" value="<?php echo htmlspecialchars($phuong); ?>">
                <span></span>
                <label>Phường/Xã</label>
            </div>
            <div class="fillin">
                <input id="quan" name="quan" type="text" value="<?php echo htmlspecialchars($quan); ?>">
                <span></span>
                <label>Quận/Huyện</label>
            </div>
            <div class="fillin">
                <input id="city" name="city" type="text" value="<?php echo htmlspecialchars($city); ?>">
                <span></span>
                <label>Thành phố/Tỉnh</label>
            </div>
            <div class="fillin">
                <input id="email" name="email" type="text" value="<?php echo htmlspecialchars($email); ?>">
                <span></span>
                <label>Email</label>
            </div>
            <div class="fillin">
                <input id="number" name="number_phone" type="text" value="<?php echo htmlspecialchars($number); ?>">
                <span></span>
                <label>Số điện thoại</label>
            </div>
            <input type="hidden" name="status" value="0">
            <input type="submit" name="dangky" value="Đăng ký">
            <p><a href="./login.php">Trở về đăng nhập</a></p>
        </form>
    </div> -->
    <script>
            function  MainForm(){
                var PassWord = document.getElementById('mk');
                var pass_2 = document.getElementById('mk_2');
                //ten dang nhap
                var tendn = document.getElementById("name_tk").value;
                if (tendn == "" || tendn == null) {
                    alert("vui lòng nhập tên đăng nhập !");
                    return false;
                }
                if (tendn.length > 15) {
                    alert("Tên đăng nhập không được vượt quá 15 ký tự!");
                    return false;
                 }

                //ho ten
                var hoten = document.getElementById("hoten").value;
                if (hoten == "" || tendn == null) {
                    alert("vui lòng nhập họ và tên đăng nhập !");
                    return false;
                }
                
                var kitu = /([.*+'?^=!#@~%&:${}()|\[\]\/\\])/g;
                var so = /[0-9]/g;
                if (kitu.test(hoten)) {
                    alert("Vui Lòng không nhập họ và tên bằng kí tự đặc biệt!")
                    return false;
                } else if (so.test(hoten)) {
                    alert("Vui lòng không nhập số!");
                    return false;
                }

                //password
                
                if(PassWord.value==""|| PassWord.value == null){
                    alert("Vui lòng nhập mật khẩu !");
                    return false;
                }
                if (PassWord.value.length < 8 || PassWord.value.length > 15) {
                    alert("Mật khẩu phải có độ dài từ 8 đến 15 ký tự!");
                    return false;
                }

                // nhập lại mk
                if(PassWord.value==""|| PassWord.value == null){
                    alert("Vui lòng nhập lại mật khẩu !");
                    return false;
                }

                if( PassWord.value != pass_2.value){
                    alert("Mật khẩu nhập lại sai ! Vui lòng nhập lại!");
                    return false;
                }

                //diachi
                // var address = document.getElementById("phuong").value;
                // if(address == "" || address == null) {
                //     alert("vui lòng nhập Phường/Xã  !");
                //     return false;
                // }

                // var address = document.getElementById("quan").value;
                // if(address == "" || address == null) {
                //     alert("vui lòng nhập Quận  !");
                //     return false;
                // } 

                // var address = document.getElementById("city").value;
                // if(address == "" || address == null) {
                //     alert("vui lòng nhập Thành Phố  !");
                //     return false;
                // }
                //email
                var Email = document.getElementById("email").value;
                var email_regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
                if (Email == "" || Email == null) {
                    alert("Vui lòng nhập email!");
                    return false;
                }
                if (!email_regex.test(Email)) {
                    alert("Định dạng email không hợp lệ! Vui lòng nhập lại.");
                    return false;
                 }
                //so dien thoai
                var Number = document.getElementById("number").value;
                if (Number == "" || Number == null) {
                    alert("vui lòng nhập số điện thoại  !");
                    return false;   
                }
                var phone_regex = /^[0-9]+$/;
                if (!phone_regex.test(Number)) {
                    alert("Số điện thoại chỉ được chứa các chữ số!");
                    return false;
                }

                // Kiểm tra độ dài của số điện thoại
                if (Number.length !== 10) {
                    alert("Số điện thoại phải có đúng 10 chữ số!");
                    return false;
                }
                // var vnf_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
                // if (vnf_regex.test(Number)) {
                //     alert('Số điện thoại của bạn không đúng định dạng!');
                //     return false;
                // }
                
            }
        </script>
</body>

</html>