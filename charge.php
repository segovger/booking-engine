<?php 

$POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

    require_once('vendor/autoload.php');

//INGRESAR API
    \Stripe\Stripe::setApiKey('INGRESAMOS LA API QUE APARECE EN EL DASHBOARD');


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
    "amount" => 1000,
    "currency" => "usd",
    "description" => "Booking Reservation",
    "customer" => $customer->id
]);

//Debugging
//print_r($charge);

//Redirigir a los clientes a Success Page cuando pase su pago
header('Location: success.php?tid='.$charge->id.'&product='.$charge->description);