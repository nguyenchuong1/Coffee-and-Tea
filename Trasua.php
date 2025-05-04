<section class="menu_sanpham">
    <div class="container">
        <div class="head_dau">
            <h2>MENU</h2>
            <h1>Coffee-Tea</h1>
        </div>
    </div>
</section>
<section> <!-- khu vực danh-->
    <div class="container">
        <nav class="khung_chua">
            <?php
            include "./admin/Mysql/database.php";
            $sql_danhmuc = "SELECT * FROM danhmuc order by id_danhmuc desc";
            $query_danhmuc = mysqli_query($conn, $sql_danhmuc);

            ?>
            <ul class="muc_san_pham">
                <?php
                while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                ?>
                    <li><a href="index.php?quanly=menu&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['ten_danhmuc'] ?></a></li>
                <?php
                }
                ?>
            </ul>
        </nav>
    </div>
</section>
<section class="mid section-pading">
    <div class="container1">

        <?php
        if (isset($_GET['trang'])) {
            $page = $_GET['trang'];
        } else {
            $page = 1;
        }
        if ($page == '' || $page == 1) {
            $begin = 0;
        } else {
            $begin = ($page * 4) - 4;
        }
        $id = $_GET['id'];
        $sql_product = "SELECT * FROM sanpham where  sanpham.id_danhmuc=$id AND sanpham.tinhtrang=1 order by sanpham.id_sanpham AND sanpham.tinhtrang DESC LIMIT $begin,4";
        $query_product = mysqli_query($conn, $sql_product);


        $sql_cate = "SELECT * FROM danhmuc,sanpham where danhmuc.id_danhmuc=$id  LIMIT 1";
        $query_cate = mysqli_query($conn, $sql_cate);
        $row_title = mysqli_fetch_array($query_cate);
        ?>

        <div class="row">
            <div class="section-title">
                <h2><?php echo $row_title['ten_danhmuc'] ?></h2>
            </div>
            <div class="list">
                <?php
                while ($row_product = mysqli_fetch_array($query_product)) {
                ?>
                    <div class="item">
                        <div class="img_item">
                            <img src="./resources/css/img/<?php echo $row_product['hinhanh'] ?>">
                        </div>
                        <div class="content">
                            <div class="title-item"><?php echo $row_product['tensp'] ?></div>

                            <div class="price"><?php echo number_format($row_product['price']) ?> <sup>đ</sup></div>
                            <a href="index.php?quanly=dt&id=<?php echo $row_product['id_sanpham'] ?>"><input type="button" value="Add to cart"></a>
                        </div>
                    </div>
                <?php
                }
                ?>

            </div>

            <div class="listpage">
                
                <?php
                $id = $_GET['id'];
                $sql_trang = mysqli_query($conn, "SELECT * FROM sanpham where  sanpham.id_danhmuc=$id  ");
                $row_count = mysqli_num_rows($sql_trang);
                $trang = ceil($row_count / 4);
                ?>
                <p>Trang hiện tại: <?php echo $page?>/<?php echo $trang;?></p>
                <ul class="listPage">
                    <?php

                    for ($i = 1; $i <= $trang; $i++) {

                    ?>
                        <li <?php if($i==$page) {echo ' style="background-color:red;"';}else{echo ''; }?>  class="active">
                            <a   href="index.php?quanly=trang&trang=<?php echo $i ?> & id=<?php echo $_GET['id'] ?>">
                                <?php echo $i ?>
                            </a>
                        </li>
                    <?php } ?>
                    <!-- <li>2</li>
                        <li>3</li> -->
                </ul>
            </div>


        </div>
    </div>
</section>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/Doan/resources/css/img/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="resources/css/header-footer-web.css">
    <link rel="stylesheet" href="resources/css/trangchu-sanpham.css">
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
                            <li class="menu-item"><a href="Trasua.php">MENU</a></li>
                            <li class="menu-item    "><a href="#footer">Liên Hệ</a></li>
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

    <section class="footer-web " id="footer">
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


    

    
      



    <script src="resources/js/script_menu.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <script>
        $(document).ready(function()
        {
          $(window).scroll(function(){
            if ($(this).scrollTop()){
                $('header').addClass('sticky')
            }else{
                $('header').removeClass('sticky')
            }
          })  
        })
        $(document).ready(function()
        {
          $(window).scroll(function(){
            if ($(this).scrollTop()){
                $('#back-top').fadeIn()
            }else{
                $('#back-top').fadeOut()
            }
          })  
        })
        $("#back-top").click(function(){
            $('html,body').animate({
                scrollTop:0
            },1000)
        })
    </script>
</body>
</html>

 -->