<?php
if (isset($_GET['dangxuat'] )==1) {
    unset($_SESSION['dangnhap']);
    header("location: login-admin.php");
}
?>
<div class="sidebar">
    <div class="sidebar-brand">
        <h2><span class="las la-coffee"></span>Coffe store</h2>
    </div>
    <div class="sidebar-menu">
        <ul>
            <li>
                <a href="admin2.php?action=dashboard&query=dashboard" ><span class="las la-igloo"></span>
                    <span style="font-size: 25px;">Trang chủ</span></a>
            </li>
            <li>
                <a href="admin2.php?action=quanlidanhmucsanpham&query=category"><span class="las la-clipboard-list"></span>
                    <span style="font-size: 25px;">Danh mục </span></a>
            </li>

            <li>
                <a href="admin2.php?action=quanlysanpham&query=product"><span class="las la-clipboard-list"></span>
                    <span style="font-size: 25px;">Sản phẩm</span></a>
            </li>
            <li>
                <a href="admin2.php?action=quanlydonhang&query=donhang"><span class="las la-shopping-bag"></span>
                    <span style="font-size: 25px;">Đơn hàng</span></a>
            </li>

            <li>

                <a href="admin2.php?action=quanlyaccounts&query=accounts"><span class="las la-user-circle"></span>
                    <span style="font-size: 25px;">Người dùng</span></a>
            </li>
            <!-- <li>
                <a href="admin2.php?action=tasks"><span class="las la-clipboard-list"></span>
                    <span style="font-size: 25px;">Tasks</span></a>
            </li> -->
            <li>
                <a href="admin2.php?dangxuat=1"><span class="las la-sign-in-alt"></span>
                    <span style="font-size: 25px;">Đăng xuất: <?php if(isset($_SESSION['dangnhap']))
                    { 
                        echo $_SESSION['dangnhap'];
                    }
                    ?> </span></a>
            </li>
        </ul>
    </div>
</div>