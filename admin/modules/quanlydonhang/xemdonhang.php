<?php $id=$_GET['code'];

?>

<h1>Chi tiết đơn hàng </h1>
                <!-- <a class="add-product" href="/Doan/admin/Mysql/them.php">Thêm</a> -->
                <br><br>

                <table class="table t_product">
                    <tr>
                        <th>ID_HOADON</th>
                        <th>sanpham_id</th>
                        <th>Tên sản phẩm</th>
                        <th>Topping</th>
                        <th>Tùy chọn</th>
                        <th>Size</th>
                        <th>Soluong</th>
                        <th>Total</th>
                        <th>Thành tiền</th>
                    </tr>
                    <?php   
                    
                    // echo phpversion();
                    
                    $sql =" SELECT * FROM chitiethoadon,sanpham WHERE chitiethoadon.sanpham_id=sanpham.id_sanpham AND chitiethoadon.id_hoadon='$id' ORDER BY chitiethoadon.id_chitiethoadon desc";
                    $qr_chitietdonhang = mysqli_query($conn,$sql);
                    $i=0;
                    $tongtien =0;
                    while ($rows = mysqli_fetch_array($qr_chitietdonhang)) {
                        $i++;
                        $tongtien += ($rows["soluong_chitiet"]*$rows["total_sp"]);
                    ?>
                        <tr>
                            <td><?php echo $rows["id_hoadon"]; ?></td>
                            <td><?php echo $rows["sanpham_id"]; ?></td>
                            <td><?php echo $rows["tensp"]; ?></td>
                            <td><?php print_r($rows["topping_sanpham"]) ; ?></td>  
                            <td><?php echo $rows["tuychon_sp"]; ?></td>
                            <td><?php echo $rows['size_sp'];?></td>
                            <td><?php echo $rows["soluong_chitiet"];?></td>
                            <td><?php echo number_format($rows["total_sp"],0,',','.'); ?><sup>đ</sup></td>
                            <td><?php echo  number_format($rows["soluong_chitiet"]*$rows["total_sp"],0,',','.') ;?><sup>đ</sup></td>
                        </tr>    
                    <?php 
                    } 
                    ?> 
                    <tr >
                            <th colspan="9">
                               Tổng tiền: <?php echo number_format($tongtien,0,',','.'); ?><sup>đ</sup>
                            </th>
                    </tr>
                </table>
