<h1>Đơn hàng</h1>
<h2>Sắp xếp theo:</h2>
<a href="admin2.php?action=quanlydonhang&query=donhang&loc=day">Ngày</a>
<a href="admin2.php?action=quanlydonhang&query=donhang&loc=month">Tháng </a>
<a href="admin2.php?action=quanlydonhang&query=donhang&loc=year">Năm</a>
<a href="admin2.php?action=quanlydonhang&query=donhang&loc=p">Phường</a>
<a href="admin2.php?action=quanlydonhang&query=donhang&loc=q">Quận</a>
<a href="admin2.php?action=quanlydonhang&query=donhang&loc=c">Thành phố</a>

<!-- <a class="add-product" href="/Doan/admin/Mysql/them.php">Thêm</a> -->
<br><br>
<table class="table t_product">
    <tr>
        <th>ID_HOADON</th>
        <th>Tên người mua</th>
        <th>Email</th>
        <th>Phường/Xã</th>
        <th>Quận/Huyện</th>
        <th>Thành Phố/Tỉnh</th>
        <th>SĐT</th>
        <th>Tổng giá</th>
        <th>Ngày mua hàng</th>
        <th>Thanh toán</th>
        <th>Tình trạng</th>
        <th>Quản lý</th>
        <!-- <th>Xóa</th> -->
    </tr>
    <?php
    // echo phpversion();
    if(isset($_GET['loc']))
    {
    if($_GET['loc']=='day')
    {
        
        $sql_dh = " SELECT * FROM donhang,tbl_user where donhang.id_user=tbl_user.id_user   ORDER BY DAY(donhang.thedate)  desc";
        $qr_dh = mysqli_query($conn, $sql_dh);
    }else if($_GET['loc']=='month'){
        
        $sql_dh = " SELECT * FROM donhang,tbl_user where donhang.id_user=tbl_user.id_user and MONTH(donhang.thedate) ORDER BY donhang.thedate desc";
        $qr_dh = mysqli_query($conn, $sql_dh);
    }else if($_GET['loc']=='year'){
        
        $sql_dh = " SELECT * FROM donhang,tbl_user where donhang.id_user=tbl_user.id_user   ORDER BY YEAR(donhang.thedate) desc";
        $qr_dh = mysqli_query($conn, $sql_dh);
    }else if($_GET['loc']=='p'){
        
        $sql_dh = " SELECT * FROM donhang  ORDER BY donhang.diachi ASC  ";
        $qr_dh = mysqli_query($conn, $sql_dh);
    }else if($_GET['loc']=='q'){
        
        $sql_dh = " SELECT * FROM donhang  ORDER BY donhang.quan ASC";
        $qr_dh = mysqli_query($conn, $sql_dh);
    }else if($_GET['loc']=='c'){
        
        $sql_dh = " SELECT * FROM donhang  ORDER BY donhang.city ASC";
        $qr_dh = mysqli_query($conn, $sql_dh);
    }
    
    }else{
        $sql_dh = " SELECT * FROM donhang";
         $qr_dh = mysqli_query($conn, $sql_dh);
    }
    while ($rows = mysqli_fetch_array($qr_dh)) {
    ?>
        <tr>
            <td><?php echo $rows["id_hoadon"]; ?></td>
            <td><?php echo $rows["hoten"]; ?></td>
            <td><?php echo $rows["email"]; ?></td>
            <td><?php echo $rows["diachi"]; ?></td>
            <td><?php echo $rows["quan"]; ?></td>
            <td><?php echo $rows["city"]; ?></td>
            <td><?php echo $rows["number_phone"]; ?></td>
            <td><?php echo $rows["price_total"]; ?></td>
            <td><?php echo $rows["thanhtoan"]; ?></td>
            <td><?php echo $rows["thedate"]; ?></td>

            <td>
                <?php if ($rows["cart_status"] == 0) {
                ?>
                    <a href="modules/quanlydonhang/xuly.php?code=<?php echo $rows["id_hoadon"]; ?>&status=<?php echo $rows["cart_status"]; ?>">Chưa xử lý</a>
                <?php
                } elseif ($rows["cart_status"] == 1) {

                ?>
                    <a href="modules/quanlydonhang/xuly.php?code=<?php echo $rows["id_hoadon"]; ?>&status=<?php echo $rows["cart_status"]; ?>">Đã xử lý</a>
                <?php
                } else {
                ?>
                    <p>Đã hủy</p>
                <?php
                } ?>
            </td>
            <td>
                <a href="admin2.php?action=donhang&query=xemdonhang&code=<?php echo $rows["id_hoadon"]; ?> ">Xem chi tiết</a>
            </td>

            <?php
            if ($rows["cart_status"] == 0) {
            ?> <td>
                    <a onclick="return confirm('Bạn có muốn xóa đơn hàng này không?');" href="modules/quanlydonhang/xuly.php?id=<?php echo $rows["id_hoadon"]; ?> ">Hủy đơn hàng</a>
                </td>
            <?php } ?>
        </tr>
    <?php } ?>
</table>