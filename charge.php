<?php
session_start();


$address = "";
$city = "";
$state = "";
$zip = "";
$country = "";
$phone = "";
$discount = "";
$language = "";



  require_once('vendor/autoload.php');
  require_once('config/db.php');
  require_once ('lib/pdo_db.php');
  require_once('models/Customer.php');
  require_once('models/Transaction.php');



  if(isset($_SESSION['email'])){
      $address =  $_SESSION['address'];
      $city =  $_SESSION['city'];
      $state =  $_SESSION['state'];
      $zip =  (int)$_SESSION['zip'];
      $country =  $_SESSION['country'];
      $phone = (int) $_SESSION['phone'];
      $discount =  $_SESSION['discount'];
      $language =  $_SESSION['language'];
    }

  \Stripe\Stripe::setApiKey('Your stripe live key');//enter your stripe account supported live key

 // Sanitize POST Array
 $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

 $name = $POST['name'];
 $email = $POST['email'];
 $package = $POST['package'];
 $amount =(int)$POST['amount'];
 $token = $POST['stripeToken'];

// Create Customer In Stripe
$customer = \Stripe\Customer::create(array(
  "email" => $email,
  "source" => $token
));

// Charge Customer
$charge = \Stripe\Charge::create(array(
  "amount" => $amount,
  "description" => $package,
  "currency" => "usd",
  "customer" => $customer->id
));
// Customer Data
$customerData = [
  'cid' => $charge->customer,
  'name' => $name,
  'address' => $address,
  'city' => $city,
  'state' => $state,
  'zip' => $zip,
  'country' => $country,
  'phone' => $phone,
  'email' => $email,
  'discount' => $discount,
  'language' => $language
];

// Instantiate Customer
$customer = new Customer();

// Add Customer To DB
$customer->addCustomer($customerData);

// Transaction Data
$transactionData = [
  'tid' => $charge->id,
  'cid' => $charge->customer,
  'package' => $charge->description,
  'amount' => $charge->amount,
  'currency' => $charge->currency,
  'status' => $charge->status,
];

// Instantiate Transaction
$transaction = new Transaction();

// Add Transaction To DB
$transaction->addTransaction($transactionData);

// Redirect to success
header('Location: success.php');

  
  $_SESSION["id"] = $charge->id;
   $_SESSION["package"] = $package;
    $_SESSION["name"] = $name;
     $_SESSION["amount"] = $amount;
      $_SESSION["email"] = $email;
       $_SESSION["status"] = $charge->status;


