<?php
include "../../Mysql/database.php";
?>

<?php




if (isset($_POST["themsanpham"])) {
        $masp = $_POST["masp"];
        $tensp = $_POST["tensp"];
        $danhmuc = $_POST["danhmuc"];
        //xử lý hình ảnh
        $hinhanh = $_FILES['hinhanh']['name'];
        $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];

        $price = $_POST["giasp"];
        $soluong = $_POST['soluong'];
        $tinhtrang = $_POST["tinhtrang"];
        $sql = "INSERT INTO sanpham(id_sanpham,tensp,hinhanh,price,soluong,tinhtrang,id_danhmuc) 
                         VALUE ('$masp','$tensp','$hinhanh','$price','$soluong','$tinhtrang','$danhmuc')";
        $qr = mysqli_query($conn, $sql);
        move_uploaded_file($hinhanh_tmp, '../../../resources/css/img/' . $hinhanh);
        header('location:../../admin2.php?action=quanlysanpham&query=product');
}
if (isset($_POST['suasanpham'])) {
        $id = $_GET['id'];
        $masp = $_POST["masp"];
        $tensp = $_POST["tensp"];
        $danhmuc = $_POST["danhmuc"];
        //xử lý hình ảnh
        $hinhanh = $_FILES['hinhanh']['name'];
        $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];

        $price = $_POST["giasp"];
        $soluong = $_POST['soluong'];
        $tinhtrang = $_POST['tinhtrang'];

        if ($hinhanh != '') {

            move_uploaded_file($hinhanh_tmp, '../../../resources/css/img/' . $hinhanh);

            $sql_update = "UPDATE sanpham set id_sanpham='$masp' ,tensp='$tensp' ,hinhanh='$hinhanh',price='$price' ,soluong='$soluong' ,tinhtrang='$tinhtrang',id_danhmuc='$danhmuc' where id_sanpham='$id'";
            $sql = "SELECT * FROM sanpham where id_sanpham=$id LIMIT 1";
            $query = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($query)) {
                unlink('../../../resources/css/img/' . $row['hinhanh']);
            }
        } else {
            $sql_update = "UPDATE sanpham set id_sanpham='$masp' ,tensp='$tensp' ,price='$price',soluong='$soluong' ,tinhtrang='$tinhtrang',id_danhmuc='$danhmuc' where id_sanpham='$id'";
        }
        $sql_query = mysqli_query($conn, $sql_update);
        header('location:../../admin2.php?action=quanlysanpham&query=product');
    

} else {
        $id = $_GET['id'];
        $sql = "SELECT * FROM sanpham where id_sanpham='$id' LIMIT 1";
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($query)) {
                unlink('../../../resources/css/img/' . $row['hinhanh']);
        }
        $sql_xoa = "DELETE FROM sanpham WHERE id_sanpham = '$id'";
        $qr = mysqli_query($conn, $sql_xoa);
        header('location:../../admin2.php?action=quanlysanpham&query=product');
}

?>