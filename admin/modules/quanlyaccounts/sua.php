<h1>Sửa Accounts</h1>
<br>

<table class="table t_product">
<?php

$id = $_GET['id'];
$sql = "SELECT * FROM tbl_user where id_user=$id";
$qr = mysqli_query($conn, $sql);
$rows = mysqli_fetch_array($qr);
?>
<form action="modules/quanlyaccounts/xuly.php?iduser=<?php echo $id; ?>" method="post" >
    
        <tr>
            <td>Tên tài khoản</td>
            <td><input type="text" name="tendn" value="<?php echo $rows["tk_user"]; ?>"></td>
        </tr>
        <!--3-->
        <tr>
            <td>Password:</td>
            <td><input type="text" name="pw" value="<?php echo $rows["password_user"]; ?>"></td>
        </tr>
        <!--4-->
        <tr>
            <td>Tên người dùng</td>
            <td><input type="text" name="name" value="<?php echo $rows["name_user"]; ?>"></td>
        </tr>
        <!--5-->
        <tr>
            <td>Địa chỉ</td>
            <td><input type="text" name="diachi" value="<?php echo $rows["adress_user"]; ?>"></td>
        </tr>
        <!--6-->
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" value="<?php echo $rows["email_user"]; ?>"></td>
        </tr>
        <tr>
            <td>Number Phone</td>
            <td><input type="text" name="number" value="0<?php echo $rows["number_user"];?>"></td>
        </tr>
        <!--10-->
        <tr>
            <td>Chức năng</td>
            <td>
            <select name="chucnang">
                        <?php
                        if ($rows['role_user'] == 1) {
                        ?>
                            <option value="1" selected>Admin</option>
                            <option value="0">Member</option>
                        <?php
                        } else {
                        ?>
                            <option value="1">Admin</option>
                            <option value="0" selected>Member</option>
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
                        <?php
                        if ($rows['tinhtrang'] == 1) {
                        ?>
                            <option value="1" selected>Mở</option>
                            <option value="0">Khóa</option>
                        <?php
                        } else {
                        ?>
                            <option value="1">Mở</option>
                            <option value="0" selected>Khóa</option>
                        <?php
                        }
                        ?>
                    </select>
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <input type="submit" name="sua" value="sua">
            </td>
        </tr>
    </form>
</table>