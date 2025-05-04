<?php
require "./Mysql/database.php";
?>
<h1>Coffee-Tea</h1>

<!-- <input class="add-product"type="button" onclick="alert('Bạn đã vô bảng thêm sản phẩm')" value="CREATE"> -->
<!-- <a href="./quanlysp/themsp.php" class="add-product">Thêm</a> -->
<br><br>
<table class="table t_product">
    <form action="modules/quanlysp/xuly.php" method="post" enctype="multipart/form-data">
        <!-- 1 -->
        <tr>
            <td>Mã sản phẩm</td>
            <td><input type="text" name="masp"></td>
        </tr>
        <!--3-->
        <tr>
            <td>Tên sản phẩm:</td>
            <td><input type="text" name="tensp"></td>
        </tr>
        <!--4-->
        <tr>
            <td>Hình ảnh</td>
            <td><input type="file" name="hinhanh"></td>
        </tr>
        <!--5-->
        <tr>
            <td>Giá</td>
            <td><input type="text" name="giasp"></td>
        </tr>
        <!--6-->
        <tr>
            <td>Số lượng</td>
            <td><input type="text" name="soluong"></td>
        </tr>

        <!--10-->
        <tr>
            <td>Danh mục sản phẩm</td>
            <td>
                <select name="danhmuc">
                    <?php
                    $sql_danhmuc = "SELECT * FROM danhmuc order by id_danhmuc desc";
                    $query_danhmuc = mysqli_query($conn, $sql_danhmuc);
                    while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {

                    ?>
                        <option value="<?php echo $row_danhmuc["id_danhmuc"] ?>"><?php echo $row_danhmuc["ten_danhmuc"] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        <!--1111-->
        <tr>
            <td>Tình trạng</td>
            <td>
                <select name="tinhtrang">
                    <option value="1">Kích hoạt</option>
                    <option value="0">Ẩn</option>
                </select>
            </td>
        </tr>

        <tr>
            <td colspan="2"><input type="submit" name="themsanpham" value="Thêm"></td>
        </tr>
    </form>
</table>

<table class="table t_product">
    <tr>
        
        <th>id_sanpham</th>
        <th>Tên sản phẩm</th>
        <th>Danh mục</th>
        <th>Hình ảnh</th>
        <th>Giá</th>
        <th>Số lượng</th>
        <th>Tình Trạng</th>

        <th>Edit</th>
        <th>Xóa</th>
    </tr>
    <?php
    // echo phpversion();
    $sql = " SELECT * FROM sanpham,danhmuc where sanpham.id_danhmuc = danhmuc.id_danhmuc order by sanpham.id_sanpham asc";
    $qr = mysqli_query($conn, $sql);
    while ($rows = mysqli_fetch_array($qr)) {
    ?>
        <tr>
            
            <td><?php echo $rows["id_sanpham"]; ?></td>
            <td><?php echo $rows["tensp"]; ?></td>

            <td><?php echo $rows["ten_danhmuc"]; ?></td>

            <td><img style="margin:5px;" src="../resources/css/img/<?php echo $rows["hinhanh"]; ?>"></td>
            <td><?php echo $rows["price"]; ?></td>
            <td><?php echo $rows["soluong"]; ?></td>

            <td><?php if ($rows["tinhtrang"]) echo "Kích hoạt";
                else echo "Ẩn"; ?></td>
            <td><a href="?action=quanlysanpham&query=sua&id=<?php echo $rows["id_sanpham"]; ?>">Sửa</a> </td>
            <td><a onclick="return confirm('Bạn có muốn xóa sản phẩm  này không?');" href="modules/quanlysp/xuly.php?id=<?php echo $rows["id_sanpham"]; ?>">Xóa</a></td>
        </tr>
    <?php } 
    ?>
</table>