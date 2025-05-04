
<h1>Sửa sản phẩm</h1>

<!-- <input class="add-product"type="button" onclick="alert('Bạn đã vô bảng thêm sản phẩm')" value="CREATE"> -->
<!-- <a href="./quanlysp/themsp.php" class="add-product">Thêm</a> -->
<br><br>

<table class="table t_product">
    <?php
    $id = $_GET['id'];
    $sql_sua_sp = "SELECT * FROM sanpham WHERE id_sanpham='$id' LIMIT 1";
    // echo $id;
    $query_sua_sp = mysqli_query($conn, $sql_sua_sp);
    ?>
    
    <?php
    while ($rows = mysqli_fetch_array($query_sua_sp)) {
    ?>

        <form action="modules/quanlysp/xuly.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data">
            <!-- 1 -->
            <tr>
                <td>Mã sản phẩm</td>
                <td><input type="text" value="<?php echo $rows["id_sanpham"]; ?>" name="masp"></td>
            </tr>
            <!--3-->
            <tr>
                <td>Tên sản phẩm:</td>
                <td><input type="text" value="<?php echo $rows["tensp"]; ?>" name="tensp"></td>
            </tr>
            <!--4-->
            <tr>
                <td>Hình ảnh</td>
                <td>
                    <input type="file" name="hinhanh">
                    <img style="margin:5px;" src="../resources/css/img/<?php echo $rows["hinhanh"]; ?>">
                </td>
            </tr>
            <!--5-->
            <tr>
                <td>Giá</td>
                <td><input type="text" value="<?php echo $rows["price"]; ?>" name="giasp"></td>
            </tr>
            <!--6-->
            <tr>
                <td>Số lượng</td>
                <td><input type="text" value="<?php echo $rows["soluong"]; ?>" name="soluong"></td>
            </tr>
            <!--7-->

            <!--10-->
            <tr>
                <td>Danh mục sản phẩm</td>
                <td>
                    <select name="danhmuc">
                        <?php
                        $sql_danhmuc = "SELECT * FROM danhmuc order by id_danhmuc desc";
                        $query_danhmuc = mysqli_query($conn, $sql_danhmuc);
                        while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                            if ($row_danhmuc['id_danhmuc'] == $rows['id_danhmuc']) {
                        ?>
                                <option selected value="<?php echo $row_danhmuc["id_danhmuc"] ?>"><?php echo $row_danhmuc["ten_danhmuc"] ?></option>
                            <?php
                            } else {
                            ?>
                                <option value="<?php echo $row_danhmuc["id_danhmuc"] ?>"><?php echo $row_danhmuc["ten_danhmuc"] ?></option>
                        <?php

                            }
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Tình trạng</td>
                <td>
                    <select name="tinhtrang">
                        <?php
                        if ($rows['tinhtrang'] == 1) {
                        ?>
                            <option value="1" selected>Kích hoạt</option>
                            <option value="0">Ẩn</option>
                        <?php
                        } else {
                        ?>
                            <option value="1">Kích hoạt</option>
                            <option value="0" selected>Ẩn</option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>

            <tr>
                <td colspan="2"><input type="submit" name="suasanpham" value="Sửa sản phẩm"></td>
            </tr>
        </form>
    <?php
    }
    ?>

</table>