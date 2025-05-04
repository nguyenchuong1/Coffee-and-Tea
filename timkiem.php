<section class="big-image">
    <div class="big-image-content">
        <h2>Coffee and Tea</h2>
        <p>Người yêu có thể bỏ, nhưng trà sữa thì không bỏ một ly</p>
        <button class="big-image-content-btn btn"><a href="index.php?quanly=menu&id=1">MENU</a></button>

</section>
<section class="mid section-pading">
    <div class="container1">
        
        
        
        <div class="row">
           
         <?php
if ($_POST['timkiem']) {
    $tukhoa = $_POST['tukhoa'];
}

$sql_product = "SELECT * FROM sanpham, danhmuc WHERE sanpham.id_danhmuc = danhmuc.id_danhmuc AND (sanpham.tensp LIKE '%" . $tukhoa . "%' OR sanpham.price = '" . $tukhoa . "')";
$query_product = mysqli_query($conn, $sql_product);
$row_count = mysqli_num_rows($query_product);
?>

<h3> Từ khóa tìm kiếm: <?php echo $tukhoa; ?></h3>
<div class="list">
    <?php
    if ($row_count > 0) {
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
                    <p style="color:#d1d1d1"><?php echo $row_danhmuc['ten_danhmuc'] ?></p>
                </div>
            </div>
    <?php
        }
    } else {
        echo "<p>Không tìm thấy kết quả</p>";
    }
    ?>
</div>

        </div>
    </div>
</section>