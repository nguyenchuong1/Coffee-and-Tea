<?php 
session_start();
include "./admin/Mysql/database.php";
if (isset($_POST['thanhtoan']) && $_POST['thanhtoan'] && 
    !empty($_POST['hoten']) && 
    !empty($_POST['email']) && 
    !empty($_POST['adress']) && 
    !empty($_POST['quan']) && 
    !empty($_POST['city']) && 
    !empty($_POST['card']) && 
    !empty($_POST['number']) && 
    !empty($_POST['total']) && 
    !empty($_SESSION['cart']))  // Kiểm tra giỏ hàng không rỗng
{
    $id_khachhang = $_SESSION['id_khachhang'];
    $hoten = $_POST['hoten'];
    $email = $_POST['email'];
    $adress = $_POST['adress'];
    $quan = $_POST['quan'];
    $city = $_POST['city'];
    $card = $_POST['card'];
    $number = $_POST['number'];
    $total = $_POST['total'];
    $code_order = "DHCFM" . rand(0, 999999);

    $insert_cart = "INSERT INTO donhang(id_hoadon, id_user, hoten, email, diachi, quan, city, number_phone, price_total, thanhtoan, cart_status)
                    VALUE ('$code_order', '$id_khachhang', '$hoten', '$email', '$adress', '$quan', '$city', '$number', '$total', '$card', 0)";
    $cart_query = mysqli_query($conn, $insert_cart);

    if ($cart_query) {
        foreach ($_SESSION['cart'] as $key => $value) {
            $id_hoadon = $code_order;
            $masp = $value['id'];
            $topping = '';

            if ($value['topping'] === "Không") {
                $topping = "Không";
            } else {
                foreach ($value['topping'] as $t) {
                    $topping .= "$t ";
                }
            }

            $tuychon = $value['tuychon'];
            $size = $value['size'];
            $soluong = $value['soluong'];
            $gia = $value['giasanpham'];
            $insert_order_details = "INSERT INTO chitiethoadon(id_hoadon, sanpham_id, topping_sanpham, tuychon_sp, size_sp, soluong_chitiet, total_sp)
                                     VALUE ('$id_hoadon', '$masp', '$topping', '$tuychon', '$size', '$soluong', '$gia')";
            mysqli_query($conn, $insert_order_details);
        }
    }
    unset($_SESSION['cart']);
    header('location:index.php?quanly=camon');
} 
else 
{
    echo "<script>
            alert('Vui lòng điền đầy đủ thông tin và thêm sản phẩm vào giỏ hàng trước khi thanh toán.');
            window.location.href = 'index.php?quanly=giohang';
          </script>";
}
?>
