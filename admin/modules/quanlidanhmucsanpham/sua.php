
<h1>Sửa danh mục</h1>
                <br>
                
                
                <?php
                
                $id = $_GET['id'];
                $sql = "SELECT * FROM danhmuc where id_danhmuc=$id";
                $qr= mysqli_query($conn,$sql);
                $rows = mysqli_fetch_array($qr);
                ?>
                <form method="POST" action="modules/quanlidanhmucsanpham/xuly.php?iddanhmuc=<?php echo $id;?>">
                    <label>Tên danh mục:</label>
                    <input type="text" name="tendanhmuc" value="<?php echo $rows["ten_danhmuc"];?>"><br>
                    <input type="submit" name="sua" value="sua">
                </form>