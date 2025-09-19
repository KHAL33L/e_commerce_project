<?php
require_once('../controllers/customer_controller.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = login_customer_ctr($email, $password);

    echo $result;
}
?>
