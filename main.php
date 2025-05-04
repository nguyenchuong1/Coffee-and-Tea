<?php  

          if(isset($_GET['quanly']))
          {
            $tam = $_GET['quanly'];
            
          }else{
            $tam = '';
          }
          if($tam == 'main' ){
            include "./trangchu.php";
          }elseif($tam == 'menu'){
            include "./Trasua.php";
          }elseif($tam== 'giohang'){
            include "./cart.php"; 
          }elseif($tam == 'dt'){
            include "dt_product.php";
          }elseif($tam=='timkiem'){
            include "./timkiem.php";
          }elseif($tam=='camon'){
          include "./camon.php";
          }elseif($tam=='trang'){
          include "Trasua.php";
          }
          elseif($tam=='thaydoimatkhau'){
            include "./account.php";
          }else{
            include "./trangchu.php";
          }
          //qua menu
          
          
?>