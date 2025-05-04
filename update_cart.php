<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['quantity']) && isset($_POST['productId'])) {
    $quantity = $_POST['quantity'];
    $productId = $_POST['productId'];

    // Cập nhật lại số lượng cho sản phẩm trong giỏ hàng
    foreach ($_SESSION['cart'] as &$cart_item) {
        if ($cart_item['id'] == $productId) {
            $cart_item['soluong'] = $quantity;
            break;
        }
    }

    // Tính lại tổng tiền sau khi cập nhật
    $tongtien = 0;
    foreach ($_SESSION['cart'] as $cart_item) {
        // Tính toán lại giá sản phẩm dựa trên size và topping
        $giasanpham = $cart_item['giasanpham'];
        if ($cart_item['size'] == 'M') {
            $giasanpham += 5000;
        } elseif ($cart_item['size'] == 'L') {
            $giasanpham += 10000;
        }
        
        $dem = 0;
        if ($cart_item['topping'] !== "Không") {
            foreach ($cart_item['topping'] as $topping) {
                $dem += 5000;
            }
            $giasanpham += $dem;
        }

        // Tính thành tiền cho từng sản phẩm
        $thanhtien = $giasanpham * $cart_item['soluong'];
        $tongtien += $thanhtien;
    }

    // Trả về tổng tiền mới để hiển thị trên trang
    echo number_format($tongtien, 0, ',', '.') . " <sup>đ</sup>";
}
?>
