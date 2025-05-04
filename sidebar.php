<?php
// session_start();
if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
    unset($_SESSION['cart']);
    unset($_SESSION['dangky']);
    // unset($_SESSION['id_khachhang']);
}
?>
<section class="top">

    <header>

        <div class="container">

            <div class="row justifile-content">
                <div class="log">
                    <a href="index.php?quanly=main"><img src="./resources/css/img/logo.jpg" alt=""></a>
                </div>
                <!-- <div class="phan-search">
                    <form action="" class="search-box">
                        <input type="text" id="search-text" placeholder="Tìm kiếm sản phẩm ?" required>
                       <button id="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button> 
                        <input type="submit">
                    </form>
                </div> -->
                <div class="menu-bar">
                    <span></span>
                </div>
                <div class="menu-items">
                    <ul>
                        <li class="phan-search">
                            <form class="phan-search" method="post" action="index.php?quanly=timkiem">
                            <input name="tukhoa" id="search-text" type="text" placeholder="Tìm kiếm sản phẩm?" required 
                            oninvalid="this.setCustomValidity('Vui lòng người dùng nhập từ khóa tìm kiếm!')" 
                                oninput="this.setCustomValidity('')">
                                <input id="search-btn" type="submit" name="timkiem" value="Tìm kiếm">
                            </form>
                        </li>
                        <li class="menu-item"><a href="index.php?quanly=main">Trang Chủ</a></li>
                        <li class="menu-item"><a href="index.php?quanly=menu&id=1">Thực đơn</a></li>
                        <li class="menu-item"><a href="lienhe">Liên Hệ</a></li>
                        <li class="menu-item"><a href="index.php?quanly=giohang"><i class="fa-solid fa-cart-shopping"></i></a></li>
                        <?php
                        if (isset($_SESSION['dangky'])) {
                        ?>
                            <li class="menu-item"><a href="index.php?quanly=thaydoimatkhau">Tài khoản</a></li>
                            <li class="menu-item"><a href="index.php?dangxuat=1">Đăng xuất</a></li>
                        <?php
                        } else {
                        ?>
                            <li class="menu-item"><a href="./login.php">Đăng nhập</a></li>
                        <?php
                        }
                        ?>
                       
                    </ul>

                </div>
            </div>
        </div>
    </header>
</section>