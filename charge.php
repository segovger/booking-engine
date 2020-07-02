<?php 

$POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

    require_once('vendor/autoload.php');
    require_once('transactions/transactionsDb/db.php');
    require_once('lib/pdo_db.php');
    require_once('transactions/transaction_models/Customer.php');

//INGRESAR API
    \Stripe\Stripe::setApiKey('Secret Key');


$first_name = $POST['first_name'];
$last_name = $POST['last_name'];
$email = $POST['client_email'];
$token = $POST['stripeToken'];



//Generar un cliente en Stripe

$customer = \Stripe\Customer::create([
    "email" => $email,
    "source" => $token
]);

//Debugging
//echo $token;


$charge = \Stripe\Charge::create([
    "amount" => 500,
    "currency" => "usd",
    "description" => "Booking Reservation",
    "customer" => $customer->id
]);



//Customer Data
$customerData = [
    'id' => $charge->customer,
    'first_name' => $first_name,
    'last_name' => $last_name,
    'email' => $email,
    'amount' => $charge->amount
];


//Instancias Customer
$customer = new Customer();

//Agregar Customer a DB //***** */
$customer->addCustomer($customerData); 


//Redirigir a los clientes a Success Page cuando pase su pago
header('Location: success.php?tid='.$charge->id.'&product='.$charge->description);