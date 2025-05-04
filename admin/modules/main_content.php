
<div class="main-content">
    <?php 
       include "header.php";
    ?>
    <div>
        <?php  
          if(isset($_GET['action'])&& $_GET['query'])
          {
            $tam = $_GET['action'];
            $query =$_GET['query'];
          }else{
            $tam = '';
            $query='';
          }
          if($tam == 'dashboard'  && $query= "dashboard"){
            include "modules/dashboard.php";
          }
          //danh muc
          elseif($tam == 'quanlidanhmucsanpham' && $query == 'category')
          {
            include "modules/quanlidanhmucsanpham/category.php";    
          }
          elseif($tam == 'quanlidanhmucsanpham' && $query == 'sua')
          {
            include "modules/quanlidanhmucsanpham/sua.php";
          }
          //sanpham
          elseif($tam == 'quanlysanpham' && $query == 'product')
          {
            include "modules/quanlysp/product.php";    
          }elseif($tam == 'quanlysanpham' && $query == 'sua')
          {
            include "modules/quanlysp/suasp.php";    
          }
          elseif($tam == 'quanlydonhang' && $query == 'donhang')
          {
            include "modules/quanlydonhang/donhang.php";    
          }
          elseif($tam == 'donhang' && $query == 'xemdonhang')
          {
            include "modules/quanlydonhang/xemdonhang.php";    
          }
          elseif($tam == 'quanlyaccounts' && $query == 'accounts')
          {
            include "modules/quanlyaccounts/accounts.php";    
          }
          elseif($tam == 'quanlyaccounts' && $query == 'sua')
          {
            include "modules/quanlyaccounts/sua.php";    
          }else{
            include "modules/dashboard.php";
          }

          

          
          
          
         ?>
    </div>
</div>