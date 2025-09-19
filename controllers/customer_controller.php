<?php
// Customer class
require_once(__DIR__."../classes/customer_class.php");

function register_customer_ctr($name, $email, $password, $country, $city, $contact, $role = 2) {
    $customer = new Customer();

    // checking email
    if ($customer->emailExists($email)) {
        return "Email already in use!";
    }

    //adding the customer
    $success = $customer->addCustomer($name, $email, $password, $country, $city, $contact, $role);

    return $success ? "success" : "Failed to register!";
}

function login_customer_ctr($email, $password) {
    $customer = new Customer();
    $user = $customer->getCustomerByEmail($email);

    if ($user && password_verify($password, $user['customer_pass'])) {
        // start session
        session_start();
        $_SESSION['customer_id'] = $user['customer_id'];
        $_SESSION['customer_name'] = $user['customer_name'];
        $_SESSION['customer_email'] = $user['customer_email'];
        $_SESSION['user_role'] = $user['user_role'];

        return "success";
    }
    return "Invalid email or password!";
}
?>