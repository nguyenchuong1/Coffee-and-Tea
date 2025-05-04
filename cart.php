<link rel="stylesheet" href="./resources/css/cart.css">

<section class="menu_sanpham">
    <div class="container">

        <div class="head_dau">
            <h2>Giỏ Hàng</h2>
            <h1>Coffee-Tea</h1>
        </div>
    </div>
</section>
<section class="part_of_cart">

    <div class="container">

        <?php
        if (isset($_SESSION['dangky'])) {
            echo '<h4>Giỏ hàng của:' . $_SESSION['dangky'] . '</h4>';
            // echo $_SESSION['id_khachhang'];
        }
        ?>
        <table class="table_cart">
            <tr style="background: #f5f3f3;">
                <th>TT</th>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Topping</th>
                <th>Tùy chọn</th>
                <th>Size</th>
                <th>Số lượng</th>
                <th>Giá sản phẩm</th>
                <th>Quản lí</th>
            </tr>

            <tbody id="giohang"><?php
                                if (isset($_SESSION['cart'])) {
                                    $i = 0;
                                    $tongtien = 0;

                                    foreach ($_SESSION['cart'] as $cart_item) {
                                        if ($cart_item['size'] == 'M') {
                                            $cart_item['giasanpham'] += 5000;
                                        } elseif ($cart_item['size'] == 'L') {
                                            $cart_item['giasanpham'] += 10000;
                                        }
                                        $dem = 0;
                                        if ($cart_item['topping'] === "Không") {
                                            $dem = 0;
                                        } else {
                                            foreach ($cart_item['topping'] as $topping) {
                                                $dem += 5000;
                                            }
                                            $cart_item['giasanpham'] += $dem;
                                        }
                                        $thanhtien = $cart_item['giasanpham'] * $cart_item['soluong'];
                                        $tongtien += $thanhtien;

                                ?>
                        <tr>
                            <td><?php echo ($i + 1); ?></td>
                            <td><?php echo $cart_item['id'] ?></td>

                            <td><?php echo $cart_item['tensanpham'] ?></td>
                            <td><img style="margin:5px;" src="./resources/css/img/<?php echo $cart_item['hinhanh'] ?>"></td>
                            <td><?php
                                        if ($cart_item['topping'] === "Không") {
                                            echo $cart_item['topping'];
                                        } else {
                                            foreach ($cart_item['topping'] as $topping) {
                                                echo $topping . ",";
                                            }
                                        }
                                ?></td>
                            <td><?php echo $cart_item['tuychon'] ?></td>
                            <td><?php echo $cart_item['size']; ?></td>

                            <td><input type="number" value="<?php echo $cart_item['soluong'] ?>"min =1 ></td>
                            <td><?php echo $cart_item['giasanpham'] ?></td>
                            <td><a href="./themgiohang.php?i=<?php echo $i ?>"><i class='bx bxs-trash'></i></a></td>
                        </tr>
                    <?php
                                        $i++;
                                    }

                    ?>
            </tbody>

            <tr style="background: #f5f3f3;">
                <th colspan="5">Tổng đơn hàng: <span><?php echo number_format($tongtien, 0, ',', '.') ?> <sup>đ</sup></span> </th>
            <?php

                                } else {
            ?>
                <th colspan="5">Hiện tại giỏ hàng đang trống</th>
            <?php
                                }
            ?>
            <th colspan="3">
                <?php
                if (isset($_SESSION['dangky'])) {
                ?>
                    <p><a href="index.php?quanly=menu&id=1">Mua tiếp</a></p>
                <?php
                } else {
                ?>
                    <p><a href="./login.php">Đăng ký đặt hàng</a></p>
                <?php
                }
                ?>
            </th>
            <th colspan="2">
                <p><a href="./themgiohang.php?xoatatca=1">Xoá tất cả</a></p>
            </th>
            </tr>

        </table>
        <br>
        <br>
        <?php
        // hiện thông tin  khách hàng nhận được đơn hàng

        if (isset($_SESSION['dangky'])) {
            $id = $_SESSION['id_khachhang'];
            $sql_user = "SELECT * FROM tbl_user where tbl_user.id_user = '$id'";
            $sql_query_user = mysqli_query($conn, $sql_user);
            $row = mysqli_fetch_array($sql_query_user);
        ?>

            <form action="./thanhtoan.php" method="post">

                <table class="table_cart">
                    <tr>
                        <th style="background: #f5f3f3;">Tên người nhận</th>
                        <td>
                            <input type="text" name="hoten" value="<?php echo $row['name_user'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <th style="background: #f5f3f3;">Phường</th>
                        <td>
                            <input type="text" style="border:1px black;" name="adress" value="<?php echo $row['adress_user'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <th style="background: #f5f3f3;">Quận/Huyện</th>
                        <td>
                            <input type="text" style="border:1px black;" name="quan" value="<?php echo $row['quan'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <th style="background: #f5f3f3;">Thành Phố/Tỉnh</th>
                        <td>
                            <input type="text" style="border:1px black;" name="city" value="<?php echo $row['thanhpho'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <th style="background: #f5f3f3;">Email:</th>
                        <td style="width: 20px;">
                            <input type="text" name="email" value="<?php echo $row['email_user'] ?>">
                        </td>
                    </tr>

                    <tr>
                        <th style="background: #f5f3f3;">Số điện thoại</th>
                        <td>
                            <input type="text" name="number" value="0<?php echo $row['number_user'] ?>">
                        </td>
                    </tr>
                    <input type="hidden" name="total" value="<?php echo $tongtien ?>">
                    <tr>
                        <td style="text-align: left;" colspan="2">
                            <h4>Hình thức thanh toán</h4>
                            <input type="radio" name="card" id="card" value="tiền mặt" checked>
                            <label for="">Thanh toán bằng tiền mặt</label><br>

                            <input type="radio" name="card" id="card" value="Chuyển Khoản" checked>
                            <label for="">Thanh toán bằng chuyển Khoản</label><br>

                            <h4>Thanh toán online:</h4>
                            <input type="radio" name="card" id="card" value="Momo">
                            <img src="./resources/css/img/momo.png" style="height: 5%; width: 50px;">
                            <label for="">MOMO</label><br>

                            <input type="radio" name="card" id="card" value="Paypal">
                            <img src="./resources/css/img/PayPal.png" style="height: 5%; width: 50px;">
                            <label for="">Paypal</label><br>

                            <input type="radio" name="card" id="card" value="VNPAY">
                            <img src="./resources/css/img/vnpay.png" style="height: 5%; width: 50px;">
                            <label for="">VNPAY</label><br>

                            <input type="radio" name="card" id="card" value="VISA">
                             <img src="./resources/css/img/visa.jpg" style="height: 5%; width: 50px;">
                            <label for="">VISA</label><br>
                        </td>
                        
                    </tr>
                    <th colspan="2">
                        <?php
                        if (isset($_SESSION['dangky'])) {
                        ?>
                            <input style="width: 150px;height: 25px;background-color: rgba(255, 180, 94, 0.557);" type="submit" name="thanhtoan" value="Đặt hàng">
                        <?php
                        } else {
                        ?>
                            <p><a href="./login.php">Đăng ký đặt hàng</a></p>
                        <?php
                        }
                        ?>
                    </th>

                    </tr>

                </table>
            </form>

            <?php
            $sql_lsdh = "SELECT * FROM donhang WHERE donhang.id_user = '$id' ORDER BY donhang.thedate DESC";
            $query_donhang = mysqli_query($conn, $sql_lsdh);
            $count = mysqli_num_rows($query_donhang);
            
            ?>
            <h1>Lịch sử đơn hàng</h1>
            <table class="table_cart">
                <tr style="background: #f5f3f3;">
                    <th>TT</th>
                    <th>Mã đơn hàng</th>
                    <th>Người mua</th>
                    <th>Email</th>
                    <th>Phường/Xã</th>
                    <th>Quận/Huyện</th>
                    <th>Thành Phố/Tỉnh</th>
                    <th>Số điện thoại</th>
                    <th>Tổng giá tiền cho đơn hàng</th>
                    <th>Thanh toán</th>
                    <th>Ngày mua</th>
                    <th>Tình trạng</th>
                </tr>
                <?php
                if ($count > 0) {
                    $i = 0;
                    while ($row_lsdh = mysqli_fetch_array($query_donhang)) {

                ?>
                        <tr>
                            <td><?php echo ($i + 1) ?></td>
                            <td><?php echo $row_lsdh['id_hoadon'] ?></td>
                            <td><?php echo $row_lsdh['hoten'] ?></td>
                            <td><?php echo $row_lsdh['email'] ?></td>
                            <td><?php echo $row_lsdh['diachi'] ?></td>
                            <td><?php echo $row_lsdh['quan'] ?></td>
                            <td><?php echo $row_lsdh['city'] ?></td>
                            <td><?php echo $row_lsdh['number_phone'] ?></td>
                            <td><?php echo $row_lsdh['price_total'] ?></td>
                            <td><?php echo $row_lsdh['thanhtoan'] ?></td>
                            <td><?php echo $row_lsdh['thedate'] ?></td>
                            <td>
                                <?php if( $row_lsdh['cart_status']==1)
                                {
                                    echo "Đã giao hàng";
                                }elseif($row_lsdh['cart_status']==2){
                                    echo "Đơn hàng đã bị hủy";
                                }
                                else{
                                    echo "Chưa giao hàng";
                                }
                                 ?>

                            </td>
                            
                              <?php
                                
                                if( $row_lsdh['cart_status']==0){
                                    ?>
                                   <td><a onclick="return confirm('Bạn có chắc muốn xóa đơn hàng này không?');" href="./huydonhang.php?id=<?php echo $row_lsdh['id_hoadon'] ?>">Hủy đơn hàng</a></td>
                                    <?php }
                                 ?>
                            
                        </tr>
                <?php
                        $i++;
                    }
                }
                ?>
            </table>
        <?php
        } ?>
    </div>

</section>



<!-- 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/Doan/resources/css/img/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./resources/css/header-footer-web.css">
    <script src="https://kit.fontawesome.com/143ba82e75.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="/Doan/resources/css/trangchu-sanpham.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Coffee-Tea</title>

</head>

<body>
    <section class="top">
        <header>

            <div class="container">

                <div class="row justifile-content">
                    <div class="log">
                        <a href="index.php"><img src="resources/css/img/logo.jpg" alt=""></a>
                    </div>
                    <div class="phan-search">
                        <form action="" class="search-box">
                            <input type="text" id="search-text" placeholder="Tìm kiếm sản phẩm ?" required>
                            <button id="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                    </div>              
                    <div class="menu-bar">
                        <span></span>
                    </div>
                    <div class="menu-items">
                        <ul>
                            <li class="menu-item"><a href="index.php">Trang Chủ</a></li>
                            <li class="menu-item"><a href="Trasua.php?id=1">MENU</a></li>
                            <li class="menu-item"><a href="#footer">Liên Hệ</a></li>
                            <li class="menu-item"><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
                            <li class="menu-item"><a href="login.php">Logout</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </header>

    </section>
    

    <div id="back-top">
        <i class="fa-solid fa-chevron-up"></i>
    </div>

    <section class="footer-web">
        <div class="phancuoi">

            <div class="khung">

                <h1 class="tieude">GET IN TOUCH</h1>

                <p>
                    <link rel="stylesheet"
                        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20,200,0,0" />
                    <span class="material-symbols-outlined">
                        location_on
                    </span>
                    An Dương Vương, phường 3, Quận 5
                </p>

                <p>
                    <link rel="stylesheet"
                        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20,200,0,0" />
                    <span class="material-symbols-outlined">
                        call
                    </span>
                    +012 345 67890
                </p>

                <p>
                    <link rel="stylesheet"
                        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20,200,0,0" />
                    <span class="material-symbols-outlined">
                        mail
                    </span>
                    mail@domain.com
                </p>

            </div>

            <div class="khung">

                <h1 class="tieude">FOLLOW US</h1>

                <br>
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-instagram"></a>
            </div>

            <div class="khung">

                <h1 class="tieude">OPEN HOURS</h1>

                <div class="khunggio">
                    <h3>THỨ 2 - THỨ 6</h3>
                    <p>8.00 AM - 8.00 P.M</p>
                    <h3>THỨ 7 - CHỦ NHẬT</h3>
                    <p>8.00 AM - 2.00 P.M </p>
                </div>

            </div>

            <div class="khung">

                <h1 class="tieude">NEWSLETTER</h1>

                <div class="email">
                    <div>
                        <input type="text" class="input" placeholder="Email">
                    </div>

                    <div>
                        <button class="buttons">Sign up</button>
                    </div>
                </div>
            </div>
        </div>
    </section>










    <script src="resources/js/script .js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <script>
        $(document).ready(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop()) {
                    $('header').addClass('sticky')
                } else {
                    $('header').removeClass('sticky')
                }
            })
        })
        $(document).ready(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop()) {
                    $('#back-top').fadeIn()
                } else {
                    $('#back-top').fadeOut()
                }
            })
        })
        $("#back-top").click(function () {
            $('html,body').animate({
                scrollTop: 0
            }, 1000)
        })
    </script>
</body>

</html> -->