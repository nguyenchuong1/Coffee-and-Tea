<link rel="stylesheet" href="./resources/css/product.css">
<?php include "./admin/Mysql/database.php"; ?>
<section class="menu_sanpham">
        <div class="container">

            <div class="head_dau">
                <h2>Chi tiết</h2>
                <h1>Coffee-Tea</h1>
            </div>
        </div>
</section>
    <div class="cont">
        <?php

        $id = $_GET['id'];
        $sql_chitiet = "SELECT * FROM danhmuc,sanpham where sanpham.id_danhmuc=danhmuc.id_danhmuc 
                and sanpham.id_sanpham='$id' AND sanpham.tinhtrang=1 limit 1";
        $query_chitiet = mysqli_query($conn, $sql_chitiet);
        while ($row_chitiet = mysqli_fetch_array($query_chitiet)) {
        ?>
            <form class="product" action="./themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>" method="post">


                <div class="gallery">
                    <img src="./resources/css/img/<?php echo $row_chitiet['hinhanh'] ?>">
                </div>
                <!--nd chi tiet-->
                <div class="dropdown">

                    <h2><?php echo $row_chitiet['tensp'] ?></h2>
                    <p>Mã sp:<?php echo $row_chitiet['id_sanpham'] ?></p>
                    <div class="divbox">
                        <!--the select-->

                        <div class="select-menu">
                            <h6>Size</h6>
                            <input type="radio" name="options" id="Size S" value="S" checked>
                            <label for="SizeM">Size M</label><br>
 
                            <input type="radio" name="options" id="Size M" value="M">
                            <label for="SizeS">Size S</label><br>

                            <input type="radio" name="options" id="Size L" value="L">
                            <label for="SizeL">Size L</label><br>
                        </div>

                        <!--the checkbox-->

                        <div class="checkbox-item">


                            <?php
                            if ($row_chitiet['id_danhmuc'] == 1) {
                            ?>
                                <h6>Topping</h6>
                                <input type="checkbox" name="item[]" id="tranchau" value="trân châu">
                                <label for="tranchau">Trân châu</label><br>

                                <input type="checkbox" name="item[]" id="banhflan" value="bánh flan">
                                <label for="banhflan">Bánh flan</label><br>

                                <input type="checkbox" name="item[]" id="raucau" value = "thạch rau câu">
                                <label for="raucau">Thạch rau câu</label>
                            <?php
                            } elseif ($row_chitiet['id_danhmuc'] == 2) {
                            ?>
                                <h6>Tự chọn</h6>
                                <input type="radio" name="tuychon" id="coda" value="Có đá" checked>
                                <label for="coda">Có đá</label><br>

                                <input type="radio" name="tuychon" id="khongda" value="Không đá">
                                <label for="khongda">Không đá</label><br>
                            <?php
                            }
                            ?>
                        </div>
                    </div>

                    <div class="count">
                        <h6>Số lượng</h6>
                        <input id="soluongdat" name="soluongdat" type="number" min="1" value="1" required>
                    </div>
                    <p>Số lượng sản phẩm:<?php echo $row_chitiet['soluong'] ?></p>
                    <p class="price">Giá :<?php echo $row_chitiet['price'] ?> <sup>đ</sup></p>
                    <input class="button" name="addcard" type="submit" value="Thêm vào giỏ hàng">
                </div>


            </form>
        <?php
        }
        ?>
    </div>
<script>
    function validateQuantity() {
        var quantity = document.getElementById("soluongdat").value;
        if (quantity < 1) {
            alert("Số lượng tối thiểu phải là 1.");
            return false; // Ngăn không cho gửi biểu mẫu
        }
        return true; // Cho phép gửi biểu mẫu
    }
</script>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/Doan/resources/css/img/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="/Doan/resources/css/header-footer-web.css">
    <link rel="stylesheet" href="/Doan/resources/css/trangchu-sanpham.css">
    <script src="https://kit.fontawesome.com/143ba82e75.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Coffee-Tea</title>

</head>

<body>
    <section class="top">
        <header>

            <div class="container">

                <div class="row justifile-content">
                    <div class="log">
                        <a href="cafe_and_milktea.php"><img src="resources/css/img/logo.jpg" alt=""></a>
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
                            <li class="menu-item"><a href="cafe_and_milk_tea.php">Trang Chủ</a></li>
                            <li class="menu-item"><a href="Trasua.php?id=1">MENU</a></li>
                            <li class="menu-item"><a href="#footer">Liên Hệ</a></li>
                            <li class="menu-item"><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
                            <li class="menu-item"><a href="cafe_and_milktea.php">Logout</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </header>

    </section>
    








    <div id="back-top">
        <i class="fa-solid fa-chevron-up"></i>
    </div>
    
    <section class="footer-web" >
        <div class="phancuoi">

            <div class="khung">

                <h1 class="tieude">GET IN TOUCH</h1>

                <p>
                    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20,200,0,0" />
                    <span class="material-symbols-outlined">
                        location_on
                    </span>
                    An Dương Vương, phường 3, Quận 5
                </p>

                <p>
                    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20,200,0,0" />
                    <span class="material-symbols-outlined">
                        call
                    </span>
                    +012 345 67890
                </p>

                <p>
                    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20,200,0,0" />
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
    
</body>

</html> -->