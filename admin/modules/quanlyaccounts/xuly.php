<?php
include "../../Mysql/database.php";


if (isset($_POST["them"])) {
    $tendn = $_POST["tendn"];

$pw = md5($_POST['pw']);

$hoten =$_POST['name'];

$adress = $_POST['diachi'];

$email= $_POST['email'];

$number = $_POST['number'];

$role= $_POST['chucnang'];

$tinhtrang = $_POST['tinhtrang'];
    if ($tendn != "") {
        $sql = "INSERT INTO tbl_user(tk_user,password_user, name_user,adress_user,	email_user,number_user,	role_user,	tinhtrang)
         VALUE ('$tendn','$pw','$hoten','$adress','$email','$number','$role','$tinhtrang')";
        $qr = mysqli_query($conn, $sql);
        header('location:../../admin2.php?action=quanlyaccounts&query=accounts');
    }
} elseif (isset($_POST['sua'])) {
    $tendn = $_POST["tendn"];

$pw = md5($_POST['pw']);

$hoten =$_POST['name'];

$adress = $_POST['diachi'];

$email= $_POST['email'];

$number = $_POST['number'];

$role= $_POST['chucnang'];

$tinhtrang = $_POST['tinhtrang'];
    $id_sua= $_GET['iduser'];
    
    if ($tendn != "") {
        $sql = "UPDATE tbl_user SET tk_user='$tendn' ,
        password_user='$pw',name_user='$hoten',
        adress_user='$adress',email_user='$email',
        number_user='$number',role_user='$role',tinhtrang='$tinhtrang' where id_user=$id_sua";
        $qr = mysqli_query($conn, $sql);
        header('location:../../admin2.php?action=quanlyaccounts&query=accounts');
        
    }
}
else {
    $id = $_GET['id'];
    $xoa = "DELETE FROM tbl_user WHERE tbl_user.id_user = $id";
    $qr = mysqli_query($conn, $xoa);
    header('location:../../admin2.php?action=quanlyaccounts&query=accounts');
 }
 ?>