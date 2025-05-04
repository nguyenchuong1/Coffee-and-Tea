<?php
session_start();

include "./admin/Mysql/database.php";

// thêm số lượng    
// trừ số lượng 
// xóa sản phẩm 
if($_SESSION['dangky'])
{
if(isset($_GET['i'])&& isset($_GET['i'])>0)
{   
    array_splice($_SESSION['cart'],$_GET['i'],1);
    
    header ('location: index.php?quanly=giohang ');   
}
//xóa tất cả
if(isset($_GET['xoatatca'])&& $_GET['xoatatca']==1 )
{
    unset($_SESSION['cart']);
    header ('location: index.php?quanly=giohang ');
}
// thêm sản phẩm vào giỏ hàng 
if (isset($_POST['addcard'])) {
    // session_destroy();
    $id = $_GET['idsanpham'];
    $size= $_POST['options'];
     $topping=$_POST['item'];
    $tuychon=$_POST['tuychon'];
    if(isset($_POST['soluongdat'])&& $_POST['soluongdat']>0)
    {
        $soluong = $_POST['soluongdat'];
    }
    else{
       $soluong = 1;
    }
    $fg=0;

    $sql = "SELECT * FROM sanpham where id_sanpham='".$id."' limit 1";
    $query = mysqli_query($conn,$sql); 
    $row = mysqli_fetch_array($query);
    $i=0;
    if ($row) {
        $new_product = array(
            'tensanpham' => $row['tensp'],
            'id' => $id,
            'soluong' => $soluong,
            'giasanpham' => $row['price'],
            'hinhanh' => $row['hinhanh'],
            // 'masp' => $row['id_sanpham'],
            'size' => $size ,
             'topping' => $topping,
            'tuychon'=> $tuychon
        );
        $i=0;
        foreach($_SESSION['cart'] as $cart_item) {
            if(($cart_item['id']==="$id")&&($cart_item['size']===$size)&&($cart_item['topping']===$topping)){
                $slnew= $soluong+$cart_item['soluong'];
                $_SESSION['cart'][$i]['soluong']= $slnew;
                $fg=1;
                break;
            }
            if(($cart_item['id']==="$id")&&($cart_item['size']===$size)&&($cart_item['tuychon']===$tuychon)){
                $slnew= $soluong+$cart_item['soluong'];
                $_SESSION['cart'][$i]['soluong']= $slnew;
                $fg=1;
                break;
            }
            $i++;
        }
        if($fg== 0)
        {
            if($topping=="" && $tuychon==""){

               $_SESSION['cart'][]= array(
                'tensanpham' => $row['tensp'],
                'id' => $id,
                'soluong' => $soluong,
                'giasanpham' => $row['price'],
                'hinhanh' => $row['hinhanh'],
                // 'masp' => $row['id_sanpham'],
                'size' => $size ,
                 'topping' => "Không",
                'tuychon'=> "Không"
            );
            }
            elseif($topping=="" && $tuychon!=""){
                
                $_SESSION['cart'][]= array(
                    'tensanpham' => $row['tensp'],
                    'id' => $id,
                    'soluong' => $soluong,
                    'giasanpham' => $row['price'],
                    'hinhanh' => $row['hinhanh'],
                    // 'masp' => $row['id_sanpham'],
                    'size' => $size ,
                     'topping' => "Không",
                    'tuychon'=> $tuychon
                );
             }elseif($tuychon=="" && $topping!=""){
                
                $_SESSION['cart'][]= array(
                    'tensanpham' => $row['tensp'],
                    'id' => $id,
                    'soluong' => $soluong,
                    'giasanpham' => $row['price'],
                    'hinhanh' => $row['hinhanh'],
                    // 'masp' => $row['id_sanpham'],
                    'size' => $size ,
                     'topping' => $topping,
                    'tuychon'=> "Không"
                );
             }
        }
      
    }
    
    header ('location: index.php?quanly=giohang');
    // print_r($_SESSION['cart']);
    
}
}else{
    header("location:./login.php");
}          
 ?>