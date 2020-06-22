<?php 
    include 'header.php';
    require_once('transactions/transactionsDb/db.php');
    require_once('lib/pdo_db.php');
    require_once('transactions/transaction_models/Customer.php');

    //Instanciar Customer
    $customer = new Customer();

    //Obtener Customer
    $customers = $customer->getCustomers();

?>



<!DOCTYPE html>
<html lang="en">

<body>

    <div class="container" style="overflow-x:auto;">
        <h2 class="title is-2">Clientes</h2>
        <table class="table is-fullwidth">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo electrónico</th>
                    <th>Monto de transacción (USD)</th>
                    <th>Fecha de transacción</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($customers as $cust): ?>
                    <tr>
                        <td><?php echo $cust->id; ?></td>
                        <td><?php echo $cust->first_name; ?> <?php echo $cust->last_name; ?></td>
                        <td><?php echo $cust->email; ?></td>
                        <td><?php echo sprintf('%.2f', $cust->amount / 100) ?></td>
                        <td><?php echo $cust->transaction_time; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <?php include 'footer.php'; ?>

</body>
</html>