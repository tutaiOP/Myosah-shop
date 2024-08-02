<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="public/css/login.css">
    <link rel="stylesheet" href="public/css/reset.css">
    <title>Login</title>
</head>
<body>
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
                        
    <div id="wrapper">
        <form action="index.php?c=login&a=form" id="form-login" method="POST">
            <h1 class="form-heading">Sign In</h1>
            <div class="form-group">
                    <i class="fa-regular fa-user"></i>
                    <input type="text" class="form-input" name="email" placeholder="Email"/>

            </div>
            <div class="form-group">
                <i class="fa-solid fa-key"></i>
                <input type="password" class="form-input" name="password" placeholder="Password"/>
                <!-- <div id="eye">
                    <i class="fa-regular fa-eye"></i>
                </div> -->
            </div>
            <div class="form-check-and-forgot">
                <div class="form-check">
                    <input type="checkbox" name="remember_me" value="1"/>
                    <label >Remember me</label>
                </div>
                <a href="#">Forgot password</a>
            </div>
            <input type="submit" value="Đăng nhập" class="form-submit"/>
            <div class="form-bottom">
                <h4>Don't have an account?</h4><a href="index.php?c=register">Register</a>
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