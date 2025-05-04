

<?php
include "../../Mysql/database.php";
$themvaodanhsach = $_POST["tendanhmuc"];
if (isset($_POST["them"])) {
    if ($themvaodanhsach != "") {
        $sql = "INSERT INTO danhmuc(ten_danhmuc) VALUE ('$themvaodanhsach')";
        $qr = mysqli_query($conn, $sql);
        header('location:../../admin2.php?action=quanlidanhmucsanpham&query=category');
    }
} elseif (isset($_POST['sua'])) {
    $id_sua= $_GET['iddanhmuc'];
    $suavaodanhsach = $_POST['tendanhmuc'];
    if ($suavaodanhsach != "") {
        $sql = "UPDATE danhmuc set ten_danhmuc='$suavaodanhsach' where id_danhmuc=$id_sua";
        $qr = mysqli_query($conn, $sql);
        header('location:../../admin2.php?action=quanlidanhmucsanpham&query=category');
        
    }
}
else {
    $id = $_GET['id'];
    $xoa = "DELETE FROM danhmuc WHERE id_danhmuc = $id";
    $qr = mysqli_query($conn, $xoa);
    header('location:../../admin2.php?action=quanlidanhmucsanpham&query=category');
 }
 ?>