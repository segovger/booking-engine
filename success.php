<?php 
    if(!empty($_GET['tid'] && !empty($_GET['product']))){
        $GET = filter_var_array($_GET, FILTER_SANITIZE_STRING);

        $tid = $GET['tid'];
        $product = $GET['product'];
    }else {
        header('Location: index.php');
    }


    include 'header.php'; 
?>



<!DOCTYPE html>
<html lang="en">

<body>

    <div class="container">
        <h1 class="title is-1">Thank your for purchasing <?php echo $product; ?></h1>
        <hr>
        <p>Transaction ID: <?php echo $tid; ?></p>
        <p>Chech your email for more information</p>
        <a href="index.php" class="button">Regresar</a>
    </div>

    <?php include 'footer.php'; ?>

</body>
</html>