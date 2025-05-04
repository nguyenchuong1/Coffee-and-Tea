<?php 
include "../../Mysql/database.php";
if($_GET['code']){
    $code=$_GET['code'];
    if($_GET['status']==1)
    {
        $sql = "UPDATE donhang SET cart_status=0 WHERE id_hoadon='$code'";
        $query = mysqli_query($conn, $sql);
    }
    else{
        $sql = "UPDATE donhang SET cart_status=1 WHERE id_hoadon='$code'";
        $query = mysqli_query($conn, $sql);
    }
    
    header('location: ../../admin2.php?action=quanlydonhang&query=donhang');
}
else
{
    $id = $_GET['id'];
    $sql = "UPDATE donhang SET cart_status=2 WHERE id_hoadon='$id'";
    $qr = mysqli_query($conn, $sql);
    header('location: ../../admin2.php?action=quanlydonhang&query=donhang');
}
?>