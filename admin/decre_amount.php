<?php 

$id = $_GET['id'];

require 'connect.php';

$sql = "update prizes set amount = amount - 1 where id = '$id'";
mysqli_query($connect,$sql);

mysqli_close($connect);