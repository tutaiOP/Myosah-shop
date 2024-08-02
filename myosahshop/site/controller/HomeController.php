<?php 
class HomeController {
    function index() {
        $productRepository = new ProductRepository();
        $cond = [];
        $sorts = ["featured" => "DESC"];
        $page = 1;
        $item_per_page = 4;
        // Lay 4 san pham noi bat
        $featuredProducts = $productRepository->getBy($cond, $sorts, $page, $item_per_page);
        
        // Lay 4 san pham moi nhat
        $sorts = ["created_date" => "DESC"];
        $newProducts = $productRepository->getBy($cond, $sorts, $page, $item_per_page);
        
        // Lay tat ca san pham trong danh muc
        $categoryRepository = new CategoryRepository();
        $categories = $categoryRepository->getAll();
        $categoryProducts = [];
        foreach($categories as $category) {
            $cond = [
                "category_id" => [
                    "type" => "=",
                    "val" => $category->getId()
                ]
            ];// SELECT * FROM product WHERE category_id = 1
            $products = $productRepository->getBy($cond, $sorts, $page, $item_per_page);
            $categoryProducts[$category->getName()] = $products;
        }
        //$categoryProducts la array 2 chieu
        //Moi phan tu co key va value
        //key la ten danh muc, value la danh sach cac san pham thuoc danh muc
        require "view/home/index.php";
    }
}
?>