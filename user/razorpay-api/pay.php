<?php

require('config.php');
require('razorpay-php/Razorpay.php');
session_start();


// Create the Razorpay Order

use Razorpay\Api\Api;

$api = new Api($keyId, $keySecret);

//
// We create an razorpay order using orders api
// Docs: https://docs.razorpay.com/docs/orders
//
$user_id = $_POST['regid'];
$_SESSION['user_id'] = $user_id;

$advance_Payment =  $_POST['advance_Payment'];
$_SESSION['advance_Payment'] = $advance_Payment;

$customer_name = $_POST['name'];
$_SESSION['name'] = $customer_name;

$organization = $_POST['organization'];
$_SESSION['organization'] = $organization;

$Publish_Date = $_POST['Publish_Date'];
$_SESSION['Publish_Date'] = $Publish_Date;

$Ad_Content = $_POST['Ad_Content'];
$_SESSION['Ad_Content'] = $Ad_Content;

$email = $_POST['email'];
$_SESSION['email'] = $email;

$Contact_No = $_POST['contact'];

$page_id = $_POST['page_id'];
$_SESSION['page_id'] = $page_id;

$address = $_POST['address'];
$_SESSION['address']= $address;

$pincode = $_POST['pincode'];
$_SESSION['pincode']= $pincode;

$area = $_POST['area'];
$_SESSION['area']= $area;

$city = $_POST['city'];
$_SESSION['city']= $city;

$Product_price = $_POST['Product_price'];
$_SESSION['Product_price']= $Product_price;




$orderData = [
  'receipt'         => 3456,
  'amount'          => $advance_Payment * 100, // Advance payment rupees in paise
  'currency'        => 'INR',
  'payment_capture' => 1 // auto capture
];

$razorpayOrder = $api->order->create($orderData);

$razorpayOrderId = $razorpayOrder['id'];

$_SESSION['razorpay_order_id'] = $razorpayOrderId;

$displayAmount = $amount = $orderData['amount'];

if ($displayCurrency !== 'INR') {
  $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
  $exchange = json_decode(file_get_contents($url), true);

  $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}


$data = [
  "key"               => $keyId,
  "amount"            => $amount,
  "name"              => "Hitesh Patel",
  "description"       => "Bazar Group",
  "image"             => "https://s29.postimg.org/r6dj1g85z/daft_punk.jpg",
  "prefill"           => [
    "name"              => $customer_name,
    "email"             => $email,
    "contact"           => $Contact_No,
  ],
  "notes"             => [
    "address"           => "Hello World",
    "merchant_order_id" => "12312321",
  ],
  "theme"             => [
    "color"             => "#F37254"
  ],
  "order_id"          => $razorpayOrderId,
];

if ($displayCurrency !== 'INR') {
  $data['display_currency']  = $displayCurrency;
  $data['display_amount']    = $displayAmount;
}

$json = json_encode($data);
?>

<form action="verify.php" method="POST">
  <script src="https://checkout.razorpay.com/v1/checkout.js" data-key="<?php echo $data['key'] ?>" data-amount="<?php echo $data['amount'] ?>" data-currency="INR" data-name="<?php echo $data['name'] ?>" data-image="<?php echo $data['image'] ?>" data-description="<?php echo $data['description'] ?>" data-prefill.name="<?php echo $data['prefill']['name'] ?>" data-prefill.email="<?php echo $data['prefill']['email'] ?>" data-prefill.contact="<?php echo $data['prefill']['contact'] ?>" data-notes.shopping_order_id="3456" data-order_id="<?php echo $data['order_id'] ?>" <?php if ($displayCurrency !== 'INR') { ?> data-display_amount="<?php echo $data['display_amount'] ?>" <?php } ?> <?php if ($displayCurrency !== 'INR') { ?> data-display_currency="<?php echo $data['display_currency'] ?>" <?php } ?>>
  </script>
  <!-- Any extra fields to be submitted with the form but not sent to Razorpay -->
  <input type="hidden" name="shopping_order_id" value="3456">
</form>