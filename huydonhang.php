<?php 
include "./admin/Mysql/database.php";
$id= $_GET['id'];
$sql = "UPDATE donhang SET cart_status=2 where donhang.id_hoadon='$id' ";
$query = mysqli_query($conn, $sql);
header ('location: index.php?quanly=giohang ');  
?>