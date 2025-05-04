<?php
require "./Mysql/database.php";
?>
<h1>Quản Lý Accounts</h1>

<!-- <input class="add-product"type="button" onclick="alert('Bạn đã vô bảng thêm sản phẩm')" value="CREATE"> -->
<!-- <a href="./quanlysp/themsp.php" class="add-product">Thêm</a> -->
<br><br>
<table class="table t_product">
    <form action="modules/quanlyaccounts/xuly.php" method="post" >
        <!-- 1 -->
        <tr>
            <td>Tên tài khoản</td>
            <td><input type="text" name="tendn"></td>
        </tr>
        <!--3-->
        <tr>
            <td>Password:</td>
            <td><input type="text" name="pw"></td>
        </tr>
        <!--4-->
        <tr>
            <td>Tên người dùng</td>
            <td><input type="text" name="name"></td>
        </tr>
        <!--5-->
        <tr>
            <td>Địa chỉ</td>
            <td><input type="text" name="diachi"></td>
        </tr>
        <!--6-->
        <tr>
            <td>Email</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>Number Phone</td>
            <td><input type="text" name="number"></td>
        </tr>
        <!--10-->
        <tr>
            <td>Chức năng</td>
            <td>
                <select name="chucnang">
                    <option value="1">Admin</option>
                    <option value="0">Member</option>
                </select>
            </td>
        </tr>
        <!--1111-->
        <tr>
            <td>Tình trạng</td>
            <td>
                <select name="tinhtrang">
                    <option value="1">Mở</option>
                    <option value="0">Khóa</option>
                </select>
            </td>
        </tr>

        <tr>
            <td colspan="2"><input type="submit" name="them" value="Thêm"></td>
        </tr>
    </form>
</table>

<table class="table t_product">
    <tr>
        
        <th>Tên tài khoản</th>
        <th>Password</th>
        <th>Tên người dùng</th>
        <th>Phường/Xã</th>
        <th>Quận/Huyện</th>
        <th>Thành Phố/Tỉnh</th>
        <th>Email</th>
        <th> Number Phone</th>
        <th>Chức năng</th>
        <th>Tình trạng</th>
        <th>Edit</th>
        <th>Xóa</th>
    </tr>
    <?php
    // echo phpversion();
    $sql = " SELECT * FROM tbl_user  ";
    $qr = mysqli_query($conn, $sql);
    while ($rows = mysqli_fetch_array($qr)) {
    ?>
        <tr>
            
            <td><?php echo $rows["tk_user"]; ?></td>
            <td><?php echo $rows["password_user"]; ?></td>

            <td><?php echo $rows["name_user"]; ?></td>

            <td><?php echo $rows["adress_user"]; ?></td>
            <td><?php echo $rows["quan"]; ?></td>
            <td><?php echo $rows["thanhpho"]; ?></td>
            <td><?php echo $rows["email_user"]; ?></td>
            <td>0<?php echo $rows["number_user"]; ?></td>
            <td><?php if($rows["role_user"]==1){
                echo "Admin";
            }else{
                echo "Member";
            } ; ?></td>

            <td><?php if($rows["tinhtrang"]==1){
                    echo "Mở";
                }else{
                    echo "Khóa";
                } ; 
            ?></td>
            <td><a href="?action=quanlyaccounts&query=sua&id=<?php echo $rows["id_user"]; ?>">Sửa</a> </td>
            <td><a onclick="return confirm('Bạn có muốn xóa tài khoản này không?');" href="modules/quanlyaccounts/xuly.php?id=<?php echo $rows["id_user"]; ?>">Xóa</a></td>
        </tr>
    <?php } 
    ?>
</table>