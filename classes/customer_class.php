<?php

require_once(__DIR__ . "/../settings/db_class.php");

class Customer extends DbConnection {
    // new customer
    public function addCustomer($name, $email, $password, $country, $city, $contact, $role = 2) {
        $hashedPass = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO customer 
                    (customer_name, customer_email, customer_pass, customer_country, customer_city, customer_contact, user_role) 
                  VALUES (?, ?, ?, ?, ?, ?, ?)";

        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([$name, $email, $hashedPass, $country, $city, $contact, $role]);
    }

    // checking email
    public function emailExists($email) {
        $query = "SELECT customer_id FROM customer WHERE customer_email = ?";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute([$email]);
        return $stmt->rowCount() > 0;
    }
}
?>
