<?php
require_once("conn.php");
$invoices = mysqli_query($conn, "SELECT * FROM invoice") or die(mysqli_error());
$invoiceCount = mysqli_num_rows($invoices);
$items = mysqli_query($conn, "SELECT * FROM item_detail") or die(mysqli_error());
$itemCount = mysqli_num_rows($items);
$customers = mysqli_query($conn, "SELECT * FROM customer") or die(mysqli_error());
$customerCount = mysqli_num_rows($customers);
$consignees = mysqli_query($conn, "SELECT * FROM consignee") or die(mysqli_error());
$consigneeCount = mysqli_num_rows($consignees);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DASHBOARD</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
    .backup-btn {
      position: absolute;
      top: 10px;
      left: 93%;
    }

    .count-box {
      margin: 20px;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      text-align: center;
      color: black;
    }

    .count-box a {
      text-decoration: none;
    }
  </style>
</head>

<body>
  <?php require_once("menu.php"); ?>

  <!-- Backup Button -->
  <a href="backupdb.php" class="btn btn-danger backup-btn" target="_blank"><i class="fa fa-print"></i> Backup</a>

  <!-- Count Boxes -->
  <div class="container">
    <div class="row">
      <a href="quot_list.php">
        <div class="col-md-3">
          <div class="count-box">
            <h3>Invoice</h3>
            <p><?= $invoiceCount ?></p>
          </div>
        </div>
      </a>
      <a href="item-list.php">
        <div class="col-md-3">
          <div class="count-box">
            <h3>Item</h3>
            <p><?= $itemCount ?></p>
          </div>
        </div>
      </a>
      <a href="customer-list.php">
        <div class="col-md-3">
          <div class="count-box">
            <h3>Customer</h3>
            <p><?= $customerCount ?></p>
          </div>
        </div>
      </a>
      <a href="consignee-list.php">
        <div class="col-md-3">
          <div class="count-box">
            <h3>Consignee</h3>
            <p><?= $consigneeCount ?></p>
          </div>
        </div>
      </a>
    </div>
  </div>
</body>

</html>