<?php
    class Account {
        public $firstName;
        public $lastName;
        public $phone;
        public $gender;
        public $address;
        public $famous;
    }
    class Address {
        public $street;
        public $city;
        public $state;
        public $zip;
    }
    $address1 = new Address();
    $address1->street = "123 fakey st";
    $address1->city = "Somewhere";
    $address1->state = "CA";
    $address1->zip = "96027";
    
    $address2 = new Address();
    $address2->street = "456 fakey st";
    $address2->city = "Some place";
    $address2->state = "CA";
    $address2->zip = "96345";

    $account1 = new Account();
    $account1->firstName = "Bob";
    $account1->lastName = "Barker";
    $account1->phone = "555-555-5555";
    $account1->gender = "male";
    $account1->famous = true;
    $account1->address = array($address1, $address2);

    $json = json_encode($account1);
    echo $json;

    // $url = "..................................";
    // $json = file_get_contents($url);

    // $deserializedAccount = new Account();
    // $deserializedAccount->loadFromJSON($json);

    // echo $deserializedAccount->firstName ." ". $deserializedAccount->lastName;
?>
