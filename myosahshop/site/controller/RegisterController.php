<?php 
class RegisterController {
    function index() {
        require "view/register/index.php";
    }

    function create() {
        
        $customerRepository = new CustomerRepository();
        $data = [
           
            "name" => $_POST["name"],
            "password" => $_POST["password"],
            "mobile" => $_POST["mobile"],
            "email" =>  $_POST["email"],
            "login_by" => "form",
            "is_active" => 1,
            "shipping_name" => "",
            "shipping_mobile" => "",
            "ward_id" => null,
            "housenumber_street" => $_POST["address"],
        ];

        if($customerRepository->save($data)){
            $_SESSION["success"] = "Đã tạo tài khoản thành công";
            header("location:index.php?c=login");
    exit; // Kết thúc script để không thực hiện các lệnh tiếp theo
        }else {
            $_SESSION["error"] = $customerRepository->getError();
            header("location:index.php?c=login");
            exit;
        }
       
    }

    function notExstingEmail() {
        $email = $_GET["email"];
        $customerRepository = new CustomerRepository();
        $customer = $customerRepository->findEmail($email);
        if(!$customer) {
            echo "true";
            return;
        } 
        echo "false";
        return;
    }

}
?>