<?php
// Customer class
require_once('../classes/customer_class.php');

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
?>
