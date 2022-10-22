<?php

$connect = mysqli_connect('localhost', 'root', '', 'tickets');


if (mysqli_connect_errno()) {
  echo 'Ошибка в подключении базы данных ('.mysqli_connect_errno().'): '.mysqli_connect_errno();
  exit();
}
?>
