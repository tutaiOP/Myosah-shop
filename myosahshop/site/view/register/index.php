<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="public/css/register.css">
    <link rel="stylesheet" href="public/css/reset.css">
    <title>Register</title>
</head>
<body>
<div class="notifications"></div>
                <?php 
                    $message = "";
                    if(!empty($_SESSION["success"])) {
                        echo "<div class='alert alert-success'>" . $_SESSION["success"] . "</div>";
                        unset($_SESSION["success"]);
                    }elseif (!empty($_SESSION["error"])) {
                        echo "<div class='alert alert-danger'>" . $_SESSION["error"] . "</div>";
                        unset($_SESSION["error"]);
                    }
                ?>
    <div id="wrapper">
        <form action="index.php?c=register&a=create" id="form-register" method="POST">
            <h1 class="form-heading">Register</h1>
            <div class="form-group">
                <input type="text" class="form-input" name="name" placeholder="Họ và tên"/>
            </div>
            <div class="form-group">
                <input type="tel" class="form-input" name="mobile" placeholder="Số điện thoại"/>
            </div>
            <div class="form-group">
                <input type="email" class="form-input" name="email" placeholder="Email"/>
            </div>
            <div class="form-group">
                <input type="password" class="form-input" name="password" placeholder="Password"/>
            </div>
            <div class="form-group">
                <input type="password" class="form-input" name="repassword" placeholder="Repassword"/>
            </div>
            <h4 class="form-text">Giới tính</h4>
            <input type="radio" id="Male" name="gender" value="0">
            <label class="form-text-label">Male</label>
            <input type="radio" id="Female" name="gender" value="1" class="form-input-radio">
            <label class="form-text-label">Female</label>

            <div class="form-group">
                <input type="text" class="form-input" name="address" placeholder="Nhập địa chỉ"/>
            </div>
            <button type="submit" class="form-submit">Đăng ký</button>
            <div class="form-bottom">
                <h4>Don't have an account?</h4><a href="index.php?c=login">Login</a>
            </div>
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js" integrity="sha512-eP8DK17a+MOcKHXC5Yrqzd8WI5WKh6F1TIk5QZ/8Lbv+8ssblcz7oGC8ZmQ/ZSAPa7ZmsCU4e/hcovqR8jfJqA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="public/vendor/jquery-validation-1.19.5//dist/jquery.validate.min.js"></script>
<script src="public/js/app.js"></script>
</html>