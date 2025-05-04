
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UFT-8">
    <meta name="viewport" content="width=device-width,intial-scale=1,maxium-scale=1">
    <link rel="icon" href="../resources/css/img/logo.jpg" type="image/x-icon">
    <title>Accusoft admin</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="../resources/css/admin.css">
    <link rel="stylesheet" href="../resources/css/Quanly.css">
    <?php
    session_start();
    // session_destroy();
    if (!isset($_SESSION['dangnhap'])) {
        header("location:login-admin.php");
    } 
    ?>
</head>

<body>
    <input type="checkbox" id="nav-toggle">

    <?php
    
    require "./Mysql/database.php";
    include "modules/sidebar.php";
    include "modules/main_content.php";
    ?>
   
</body>

</html>