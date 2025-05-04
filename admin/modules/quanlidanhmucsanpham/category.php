
<h1>Danh Mục Sản Phẩm</h1>
                <!-- <a class="add-product" href="../admin/Mysql/them.php">Thêm</a> -->
                <form method="POST" action="modules/quanlidanhmucsanpham/xuly.php">
                    <label>Tên danh mục:</label>
                    <input type="text" name="tendanhmuc"><br>
                    <input type="submit" name="them" value="Thêm">
                </form>
                <br><br>

                <table class="table t_product">
                    <tr>
                        <th>ID</th>
                        <th>Tên danh mục sản phẩm</th>
                        <th>Tùy chọn</th>
                    </tr>
                    <?php
                    // echo phpversion();
                    $sql = " SELECT * FROM danhmuc";
                    $qr = mysqli_query($conn, $sql);
                    while ($rows = mysqli_fetch_array($qr)) {
                    ?>
                        <tr>
                            <td><?php echo $rows["id_danhmuc"]; ?></td>
                            <td><?php echo $rows["ten_danhmuc"]; ?></td>
                            <td><a href="?action=quanlidanhmucsanpham&query=sua&id=<?php echo $rows["id_danhmuc"]; ?> ">Sửa</a>
                                | <a onclick="return confirm('Bạn có muốn xóa danh mục này không?');" href="modules/quanlidanhmucsanpham/xuly.php?id=<?php echo $rows["id_danhmuc"]; ?> ">Xóa</a></td>
                        </tr>
                    <?php } ?>
                </table>
