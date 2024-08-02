<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="public/css/reset.css">
     <link rel="stylesheet" href="public/css/app.css">   
   <title>Trang chủ</title>
</head>
<body>
    <div class="app">
        
        <header class="header">
                <div class="header-top">
                    
                    <div class="header-top-left">
                        <h4>Myosah - Thanh xuân còn mãi</h4>
                    </div>
                    <div class="header-top-right">
                        <ul class="header_navlist">
                            <li class="header_navlist_item header_navlist_item--separate ">
                                <i class="fa-solid fa-circle-info"></i>
                                <a href="">Liên hệ</a></li>
                           
                            <li class="header_navlist_item header_navlist_item--separate">
                            <?php if(!empty($_SESSION["email"])): ?>
                               <a href="don-hang-cua-toi.html">Đơn hàng của tôi</a>
                            <?php else: ?>
                            <a href="index.php?c=register">Đăng ký</a></li>
                            <?php endif ?>

                            <li class="header_navlist_item header_navlist_item_has_notifi">
                            <?php if(!empty($_SESSION["email"])): ?>
                                <a href="#"><?=$_SESSION["name"]?></a>
                                <ul class="header_dropmenu">
                                    <li><a href="thong-tin-tai-khoan.html">Thông tin tài khoản</a></li>
                                    <li><a href="">Địa chỉ giao hàng</a></li>
                                    <li><a href="">Đơn hàng của tôi</a></li>
                                    <li><a href="index.php?c=login&a=logout">Thoát</a></li>
                                </ul>
                                <?php else: ?>
                            <a href="index.php?c=login">Đăng nhập</a>
                            <?php endif ?>
                        </li>
                        </ul>
                    </div>
                </div>
                <div class="header-inner">
                    <div class="header-inner-logo">
                        <img src="../upload/logo.png" alt="">
                    </div>
                    <div class="header-inner-search">
                        <form class="search" action="index.php">
                        <input type="search" name="search" placeholder="Tìm kiếm" id="search-text"
                            value="<?=$search ?? ""?>"
                        />
                        <button class="search-btn" type="submit">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                        <input type="hidden" name="c" value="product">
                        <div class="search-result"></div>
                         </form>
                    </div>
                    <div class="header-inner-cart">
                        <i class="fa-solid fa-cart-shopping cart-icon"></i>
                        <span class="number-total-product"></span>
                    </div>
                </div>
                <?php global $c ?>
                <div class="header-navbar">
                    <div class="grid">
                        <ul class="header-navbar-list">
                            <li class="<?=$c == "home" ? "active" : ""?> header-navbar-item"><a href="/">Trang chủ</a></li>
                            <li class="<?=$c == "product" ? "active" : ""?> header-navbar-item"><a href="index.php?c=product">Sản phẩm</a></li>
                            <li class="header-navbar-item"><a href="chinh-sach-doi-tra.php">Chính sách đối trả</a></li>
                            <li class="header-navbar-item"><a href="chinh-sach-thanh-toan.php">Chính sách thanh toán</a></li>
                            <li class="header-navbar-item"><a href="chinh-sach-giao-hang.php">Chính sách giao hàng</a></li>
                            <li class="header-navbar-item"><a href="lien-he.php">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="notifications">
        <?php 
                            
                            if(!empty($_SESSION["success"])) {
                                echo "<div class='toast success'>" . $_SESSION["success"] . "</div>";
                                unset($_SESSION["success"]);
                            }elseif (!empty($_SESSION["error"])) {
                                echo "<div class='toast error'>" . $_SESSION["error"] . "</div>";
                                unset($_SESSION["error"]);
                            }
                        ?>
        </div>
           
        </header>