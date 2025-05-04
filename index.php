<?php 
include "./admin/Mysql/database.php" ;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./resources/css/img/logo.jpg" type="image/x-icon">
    <title>Coffee-Tea</title>
    <link rel="stylesheet" href="./resources/css/header-footer-web.css">
    <link rel="stylesheet" href="./resources/css/trangchu-sanpham.css">
    <script src="https://kit.fontawesome.com/143ba82e75.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <?php 
    session_start();
    include "./sidebar.php";
    ?>
    
    <?php 
    include "./main.php";
    ?>
   
    <!--menu coffee -->
    <!-- <section class="mid section-pading" >
        <div class="container1">
            <div class="row">
                <div class="section-title">
                    <h2>Coffee</h2>
                    <img src="../Doan/resources/css/img/coffee-icon2.png" alt="">
                </div>
            </div>
            <div class="row">
                <div class="list">
                    <div class="item">
                        <div class="img_item">
                            <img style="width: 200px;" src="../Doan/resources/css/img/cafe_Mocha.png" alt="">
                        </div>
                        <div class="content">
                            <div class="title-item">Coffee Mocha</div>

                            <div class="price">35.000 <sup>đ</sup></div>
                            <a href="product1-cf.php"><input type="button" value="Add to cart"></a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="img_item">
                            <img style="width: 200px;" src="../Doan/resources/css/img/caffe latte.png" alt="">
                        </div>
                        <div class="content">
                            <div class="title-item">Coffee latte đen </div>
                            
                            <div class="price">22.000 <sup>đ</sup></div>
                            <a href="product2-cf.php"><input type="button" value="Add to cart"></a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="img_item">
                            <img style="width: 200px;" src="../Doan/resources/css/img/caffe_latte.png" alt="">
                        </div>
                        <div class="content">
                            <div class="title-item">Coffee latte</div>

                            <div class="price">30.000 <sup>đ</sup></div>
                            <a href="product3-cf.php"><input type="button" value="Add to cart"></a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="img_item">
                            <img style="width: 200px;" src="../Doan/resources/css/img/capuchino-coffee.png" alt="">
                        </div>
                        <div class="content">
                            <div class="title-item">Coffee Capuchino</div>

                            <div class="price">30.000 <sup>đ</sup></div>
                            <a href="product4-cf.php"><input type="button" value="Add to cart"></a>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </section> -->




    <div id="back-top">
        <i class="fa-solid fa-chevron-up"></i>
    </div>
<!--Footer-->
    <?php
      include "./footer.php"; 
    ?>
    <script src="./resources/js/script_menu.js"></script>
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

</html>