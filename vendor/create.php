<?php

require_once '../config/connect.php';

$event_date = $_POST['event_date'];
$event_id = substr(hexdec(uniqid('')), -6);
$ticket_adult_quantity = $_POST['ticket_adult_quantity'];
$ticket_adult_price = $_POST['ticket_adult_price'];
$ticket_kid_quantity = $_POST['ticket_kid_quantity'];
$ticket_kid_price = $_POST['ticket_kid_price'];
$ticket_preferetial_quantity = $_POST['ticket_preferetial_quantity'];
$ticket_preferetial_price = $_POST['ticket_preferetial_price'];
$ticket_group_quantity = $_POST['ticket_group_quantity'];
$ticket_group_price = $_POST['ticket_group_price'];
$equal_price = $_POST['equal_price'];
$created = $_POST['created'];

$arrTickets = array($ticket_adult_quantity, $ticket_kid_quantity, $ticket_preferetial_quantity, $ticket_group_quantity);
$quantityTickets = array_sum($arrTickets);
$barcodes = array();

for ($i = 1; $i <= $quantityTickets; $i++) {
  $barcode = array_push($barcodes, substr(hexdec(uniqid($i)), -6));
}

$barcodeStr = implode(', ', $barcodes);

//Проверка значения на пустое значение
$ticket_adult_quantity = !empty($ticket_adult_quantity) ? "'$ticket_adult_quantity'" : "NULL";
$ticket_adult_price = !empty($ticket_adult_price) ? "'$ticket_adult_price'" : "NULL";
$ticket_kid_quantity = !empty($ticket_kid_quantity) ? "'$ticket_kid_quantity'" : "NULL";
$ticket_kid_price = !empty($ticket_kid_price) ? "'$ticket_kid_price'" : "NULL";
$ticket_preferetial_quantity = !empty($ticket_preferetial_quantity) ? "'$ticket_preferetial_quantity'" : "NULL";
$ticket_preferetial_price = !empty($ticket_preferetial_price) ? "'$ticket_preferetial_price'" : "NULL";
$ticket_group_quantity = !empty($ticket_group_quantity) ? "'$ticket_group_quantity'" : "NULL";
$ticket_group_price = !empty($ticket_group_price) ? "'$ticket_group_price'" : "NULL";


$query = mysqli_query($connect, "INSERT INTO ticket (`id`, `event_id`, `event_date`, `ticket_adult_price`, `ticket_adult_quantity`,
  `ticket_kid_price`, `ticket_kid_quantity`, `ticket_group_price`, `ticket_group_quantity`, `ticket_preferetial_price`,
  `ticket_preferetial_quantity`, `barcode`, `equal_price`, `created`) VALUES (NULL, '$event_id', '$event_date', $ticket_adult_price, $ticket_adult_quantity, $ticket_kid_price,
  $ticket_kid_quantity, $ticket_group_price, $ticket_group_quantity, $ticket_preferetial_price, $ticket_preferetial_quantity, '$barcodeStr', '$equal_price', '$created')");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/normalize.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">
  <title>Table</title>
</head>

<body>
  <section class="section-table">
    <div class="container section-table__container">
      <table class="section-table__main-table table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">event_id</th>
            <th scope="col">event_date</th>
            <th scope="col">ticket_adult_price</th>
            <th scope="col">ticket_adult_quantity</th>
            <th scope="col">ticket_kid_price</th>
            <th scope="col">ticket_kid_quantity</th>
            <th scope="col">ticket_group_price</th>
            <th scope="col">ticket_group_quantity</th>
            <th scope="col">ticket_preferetial_price</th>
            <th scope="col">ticket_preferetial_quantity</th>
            <th scope="col">barcode</th>
            <th scope="col">equal_price</th>
            <th scope="col">created</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $result = mysqli_query($connect, "SELECT * FROM ticket");
          $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
          foreach ($result as $item) {
            foreach ($item as $key => $value) {
              if ($value === NULL) {
                $item[$key] = 0;
              }
            }
          ?>
            <tr>
              <td><?= $item['id'] ?></td>
              <td><?= $item['event_id'] ?></td>
              <td><?= $item['event_date'] ?></td>
              <td> <?= $item['ticket_adult_price'] ?></td>
              <td> <?= $item['ticket_adult_quantity'] ?></td>
              <td><?= $item['ticket_kid_price'] ?></td>
              <td><?= $item['ticket_kid_quantity'] ?></td>
              <td><?= $item['ticket_group_price'] ?></td>
              <td><?= $item['ticket_group_quantity'] ?></td>
              <td><?= $item['ticket_preferetial_price'] ?></td>
              <td><?= $item['ticket_preferetial_quantity'] ?></td>
              <td><?= $item['barcode'] ?></td>
              <td><?= $item['equal_price'] ?></td>
              <td><?= $item['created'] ?></td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </section>
</body>

</html>
