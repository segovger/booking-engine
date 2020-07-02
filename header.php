<?php

session_start();

require 'transactions/transactionsDb/db.php';

if( isset($_SESSION['user_id']) ){

	$records = $conn->prepare('SELECT id,username,password FROM admins WHERE id = :id');
	$records->bindParam(':id', $_SESSION['user_id']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);

	$user = NULL;

	if( count($results) > 0){
		$user = $results;
	}

}

?>

<head>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Booking Engine</title>
        <link rel="shortcut icon" href="../images/fav_icon.png" type="image/x-icon">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <!-- Bulma Version 0.7.1-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css" />
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/slider.css">
        <link rel="stylesheet" href="css/datepicker.css">
        <link rel="stylesheet" href="css/booking.css">

   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/datepicker.js"></script>
    <script src="js/slider.js" type="text/javascript"></script>
    <script src="js/bulma.js"></script>
</head>

<div class="hero-head">


<!--MENÚ-->

<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="index.php">
        <h1 class="title is-5 uppercase">logo</h1>
      </a>
  
      <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>
  
    <div id="navbarBasicExample" class="navbar-menu">
      <div class="navbar-start">
      </div>
  
      <div class="navbar-end uppercase">
        <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link">
              Language
            </a>
    
            <div class="navbar-dropdown">
              <a class="navbar-item">
                Español
              </a>
              <a class="navbar-item">
                English
              </a>
              <a class="navbar-item">
                Deutsch
              </a>
              <a class="navbar-item">
                Français
              </a>
            </div>
        </div>
        <a class="navbar-item" href="nosotros.php">
           Nosotros
        </a>
        <a class="navbar-item" href="contacto.php">
            Contacto
        </a>
        <a class="navbar-item" href="faq.php">
            FAQs
        </a>
        <a class="navbar-item" href="booking.php">
            Booking
        </a>
        <?php if( !empty($user) ): ?>
          <a class="navbar-item" href="logout.php">&nbsp;Cerrar sesión</a>
          <?php else: ?>
        <?php endif; ?>
        <!--<a class="navbar-item">
            Log in
        </a>-->
        <!--<div class="navbar-item">
          <div class="buttons">
            <a class="button is-black registro-btn">
              Registro
            </a>
          </div>
        </div>-->
      </div>
    </div>
  </nav>


  
</div>