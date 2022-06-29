<?php
session_start();

// This page can be accessed only after login
// Redirect user to login page, if user email is not available in session
if (!isset($_SESSION["username"])) {
    header("location: login.php");
}
?>

<?php

  require_once('config/db.php');
  require_once('lib/pdo_db.php');
  require_once('models/Transaction.php');

  // Instantiate Transaction
  $transaction = new Transaction();

  // Get Transaction
  $transactions = $transaction->getTransactions();
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="datatable" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="datatable" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <title>VOCAL RESULTS</title>
  </head>
  <body>
    <div class="container mt-4">
      <div class="btn-group" role="group">
        <a href="viewCustomers.php" class="btn btn-secondary">Customers</a>
        <a href="viewTrans.php" class="btn btn-primary">Transactions</a>
      </div>
      <div class="btn justify-content-end">
        <a href="logout.php" class="btn btn-danger">Sign Out</a>
      </div>
      <hr>
      <h1 class="text-center">View Transections</h1>
      <table class="table">
      <thead>

              <tr>

                  <th scope="col">Id</th>

                  <th scope="col">Customer Id</th>

                  <th scope="col">Package</th>

                  <th scope="col">Amount</th>

                  <th scope="col">Currency</th>

                  <th scope="col">Status</th>

              </tr>
              
          </thead>
          <tbody>
          <?php foreach($transactions as $t): ?>
          <tr>
          
          <td> <?php echo $t->tid; ?></th>
          
          <td> <?php echo $t->cid; ?></td>
          
          <td> <?php echo $t->package; ?></td>
          
          <td> <?php echo sprintf('%.2f', $t->amount / 100); ?></td>

          <td> <?php echo $t->currency; ?></td>
          
          <td> <?php echo $t->status; ?></td>
          
          </tr>
          <?php endforeach; ?>
          </tbody>
      </table>
      <br>
      <p><a href="index.php">Home</a></p>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>