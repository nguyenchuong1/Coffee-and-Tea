<section class="big-image">
    <div class="big-image-content">
        <h2>Coffee and Tea</h2>
        <p>Người yêu có thể bỏ, nhưng trà sữa thì không bỏ một ly</p>
        <button class="big-image-content-btn btn"><a href="index.php?quanly=menu&id=1">MENU</a></button>

</section>
<section class="mid section-pading">
    <div class="container1">
        
        <div class="row">
            <div class="section-title">
                <h2>Sản phẩm</h2>
                <img src="./resources/css/img/anhtrasua.png" alt="">
            </div>
        </div>
        <?php 
          $sql_danhmuc = "SELECT * FROM danhmuc ";
          $query_danhmuc = mysqli_query($conn, $sql_danhmuc);
          while ($row = mysqli_fetch_array($query_danhmuc)) {
            $id =$row['id_danhmuc'];
        ?>
        <div class="row">
            <b><h2><?php echo $row['ten_danhmuc']?></h2> </b>
         <?php

        $sql_product = "SELECT * FROM sanpham,danhmuc where sanpham.id_danhmuc=$id AND sanpham.tinhtrang=1 order by sanpham.id_danhmuc desc limit 4";
        $query_product = mysqli_query($conn, $sql_product);

        ?>
            <div class="list">
                <?php
                while ($row_danhmuc = mysqli_fetch_array($query_product)) {
                ?>
                    <div class="item">
                        <div class="img_item">
                            <img src="./resources/css/img/<?php echo $row_danhmuc['hinhanh'] ?>">
                        </div>
                        <div class="content">
                            <div class="title-item"><?php echo $row_danhmuc['tensp'] ?></div>

                            <div class="price"><?php echo number_format($row_danhmuc['price']) ?> <sup>đ</sup></div>
                            <a href="index.php?quanly=dt&id=<?php echo $row_danhmuc['id_sanpham'] ?>"><input type="button" value="Xem chi tiết sản phẩm"></a>
                            <p style="color:#d1d1d1"><?php echo $row['ten_danhmuc'] ?></p>
                        </div>
                    </div>
                <?php
                }
            }
                ?>
            </div>

        </div>
    </div>
</section>