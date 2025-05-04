<?php
require "../Mysql/database.php";
$id = $_GET['id'];

$sql = "SELECT * FROM sanpham where sanpham.id_sanpham='$id' LIMIT 1";
$query = mysqli_query($conn,$sql); 
while($row = mysqli_fetch_array($query))
{
    unlink ('../../resources/css/img/'.$row['hinhanh']);
}
$sql_xoa= "DELETE FROM sanpham WHERE id_sanpham = '$id'";
$qr = mysqli_query($conn, $sql_xoa);
header('location:../product.php');
?>