<?php 
class ProductController {
    function index() {
        $productRepository = new ProductRepository();
        $categoryRepository = new CategoryRepository();
        $conds = [];
        $sorts = [];
        $item_per_page = 9;
        $page = $_GET["page"] ?? 1;
        $categoryName = "Tất cả sản phẩm";
        //toan tu 3 ngoi rut gon
        $category_id = $_GET["category_id"] ?? null;
        if($category_id) {
            $conds = [
                "category_id" => [
                    "type" => "=",
                    "val" => $category_id
                ]
            ];
            $category = $categoryRepository->find($category_id);
            $categoryName = $category->getName();
        };

        $price_range = $_GET["price-range"] ?? null;
        if($price_range) {
            $tmp = explode("-", $price_range);
            $start = $tmp[0];
            $end = $tmp[1];
            $conds = [
                "sale_price" => [
                    "type" => "BETWEEN",
                    "val" => "$start AND $end"
                ]
            ];
            if($end == "greater") {
                $conds = [
                    "sale_price" => [
                        "type" => ">=",
                        "val" => "$start"
                    ]
                ];
                //SELECT * ... WHERE sale_price >= 1000000
            }
        }//SELECT * ... WHERE sale_price BETWEEN 10000 and 20000

        $sort = $_GET["sort"] ?? null;
        if($sort) {
            $tmp = explode("-",$sort);
            $first = $tmp[0];
            $second = $tmp[1];
            $mapCol = ["price" => "sale_price", "alpha" => "name", "created" => "created_date"];
            $column = $mapCol[$first];
            $order = $second;
            $sorts = [$column => $order];
        }

        $search = $_GET["search"] ?? null;
        if($search) {
            $conds = [
                "name" => [
                    "type" => "LIKE",
                    "val" => "'%$search%'"
                ]
            ]; // SELECT * .... WHERE name LIKE "'%$search%'"
        }

        $products = $productRepository->getBy($conds, $sorts, $page, $item_per_page);

        $totalProducts = $productRepository->getBy($conds, $sorts);

        $pageNumber = ceil(count($totalProducts) / $item_per_page);
        

        // Lay tat ca danh muc
        $categories = $categoryRepository->getAll();

       require "view/product/index.php";
    }

    function show() {
        $id = $_GET["id"];
        $productRepository = new ProductRepository();
        $product = $productRepository->find($id);
        $category_id = $product->getCategoryId();

        $categoryRepository = new CategoryRepository();
        $categories = $categoryRepository->getAll();

        $conds = [
            "category_id" => [
                "type" => "=",
                "val" => $product->getCategoryId()
            ],
            "id" => [
                "type" => "!=",
                "val" => $id
            ]
        ];
        $relatedProducts = $productRepository->getBy($conds);

        require "view/product/show.php";
    }


}
?>