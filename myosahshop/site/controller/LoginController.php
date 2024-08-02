<?php 
class LoginController {
    function index() {
        require "view/login/index.php";
    }

    function form() {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $customerRepository = new CustomerRepository();
        $customer = $customerRepository->findEmail($email);
        if($customer) {
            if($password == $customer->getPassword()){
                $_SESSION["success"] = "Đăng nhập thành công";
                $_SESSION["email"] = $email;
                $_SESSION["name"] = $customer->getName();
                header("location:index.php");
                exit;
            }
        }
        $_SESSION["error"] = "Vui lòng nhập lại email và password";
        header("location:index.php?c=login");
    }

    function logout() {
        session_destroy();
        header("location:index.php");
    }
}
?>