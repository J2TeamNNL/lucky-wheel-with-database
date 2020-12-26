<?php 

$id = $_GET['id'];
$number = $_GET['number'];

require 'connect.php';

$sql = "update prizes set amount = amount - 1 where id = '$id'";
mysqli_query($connect,$sql);

$sql = "update invitess set check_give = 1 where id = '$number'";
mysqli_query($connect,$sql);

mysqli_close($connect);

