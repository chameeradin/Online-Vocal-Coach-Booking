<?php
session_start();

// This page can be accessed only after login
// Redirect user to login page, if user email is not available in session
if (!isset($_SESSION["username"])) {
    header("location: login.php");
}
?>

<?php

require_once('vendor/autoload.php');
  require_once('config/db.php');
  require_once('lib/pdo_db.php');
  require_once('models/Customer.php');


  // Instantiate Customer
  $customer = new Customer();

  // Get Customer
  $customers = $customer->getCustomers();

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
        <a href="viewCustomers.php" class="btn btn-primary">Customers</a>
        <a href="viewTrans.php" class="btn btn-secondary">Transactions</a>
      </div>
      <div class="btn justify-content-end">
        <a href="logout.php" class="btn btn-danger">Sign Out</a>
      </div>
      <hr>
      <h1 class="text-center">View Customers</h1>

    
      <table class="table">
      <thead>

              <tr>

                  <th scope="col">Id</th>

                  <th scope="col">Name</th>

                  <th scope="col">Address</th>

                  <th scope="col">City</th>

                  <th scope="col">State</th>

                  <th scope="col">Zip</th>

                  <th scope="col">Country</th>

                  <th scope="col">Phone</th>

                  <th scope="col">email</th>

                  <th scope="col">Discount</th>

                  <th scope="col">Language</th>

              </tr>
              
          </thead>
          <tbody>
          <?php foreach($customers as $c): ?>    
          <tr>
          
          <td> <?php echo $c->cid; ?></th>
          
          <td> <?php echo $c->name; ?></td>
          
          <td> <?php echo $c->address; ?></td>
          
          <td> <?php echo $c->city; ?></td>

          <td> <?php echo $c->state; ?></td>
          
          <td> <?php echo $c->zip; ?></td>
          
          <td> <?php echo $c->country; ?></td>
          
          <td> <?php echo $c->phone; ?></td>

          <td> <?php echo $c->email; ?></td>
          
          <td> <?php echo $c->discount; ?></td>
          
          <td><?php echo $c->language; ?></td>
          
          </tr>
          <?php endforeach; ?>  
          </tbody>
      </table>
      <br>
      <p><a href="index.php">Home</a></p>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>