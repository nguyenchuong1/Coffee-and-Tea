<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UFT-8">
    <meta name="viewport" content="width=device-width,intial-scale=1,maxium-scale=1">
    <link rel="icon" href="../resources/css/img/logo.jpg" type="image/x-icon">
    <title>Accusoft admin</title>
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="../resources/css/acount.css">
</head>

<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="las la-coffee"></span>Coffe store</h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="../admin/admin2.php" ><span class="las la-igloo"></span>
                        <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="../admin/category.php"><span class="las la-clipboard-list"></span>
                        <span>Category </span></a>
                </li>

                <li>
                    <a href="../admin/product.php"><span class="las la-clipboard-list"></span>
                        <span>Products</span></a>
                </li>

                <li>
                    <a href="../admin/order.php"><span class="las la-shopping-bag"></span>
                        <span>Orders</span></a>
                </li>

                <li>

                    <a href="../admin/acount.php" class="active"><span class="las la-user-circle"></span>
                        <span>Accounts</span></a>
                </li>
                <li>
                    <a href="../admin/tasks.php"><span class="las la-clipboard-list"></span>
                        <span>Tasks</span></a>
                </li>
                <li>
                    <a href="../login-admin.php"><span class="las la-sign-in-alt"></span>
                        <span>Sign out</span></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-content">
        <header>
            <h2>

                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>

                Dashboard

            </h2>
            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search here" />
            </div>
            <div class="user-wrapper">
                <div>
                    <img src="https://t4.ftcdn.net/jpg/04/75/00/99/360_F_475009987_zwsk4c77x3cTpcI3W1C1LU4pOSyPKaqi.jpg"
                        width="40px" height="40px" alt="">
                    <div>
                        <h4>Chuong</h4>
                        <small>Admin</small>
                    </div>
                </div>
        </header>
        <div class="main-profile">
           
            <table class="bang-acount" >
                
            </table>
            <input class="SUA" onclick="confirm('Có chắc bạn muốn chỉnh sửa')" type="button"  value="Chỉnh Sửa">
        </div>
    </div>
    
       
</body>

</html>