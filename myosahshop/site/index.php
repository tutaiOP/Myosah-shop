<?php 
session_start();
// load models
require "../config.php";
require "../connect.php";

require_once "../model/base/BaseRepository.php";

require_once "../model/product/Product.php";
require_once "../model/product/ProductRepository.php";

require_once "../model/category/Category.php";
require_once "../model/category/CategoryRepository.php";

require_once "../model/imageItem/ImageItem.php";
require_once "../model/imageItem/ImageItemRepository.php";

require_once "../model/brand/Brand.php";
require_once "../model/brand/BrandRepository.php";

require_once "../model/customer/Customer.php";
require_once "../model/customer/CustomerRepository.php";

require_once "../model/cart/Cart.php";
require_once "../model/cart/CartStorage.php";


//router
$c = $_GET["c"] ?? "home";
$a = $_GET["a"] ?? "index";
$controllerName =  ucfirst($c). "Controller";
require "controller/" . $controllerName . ".php";
$controller = new $controllerName();
$controller->$a();
?>