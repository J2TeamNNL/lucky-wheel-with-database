<?php 

$name = $_POST['name'];
$image = $_FILES['image'];
$amount = $_POST['amount'];

require 'connect.php';

$path_file = explode('.', $image['name'])[1];
$name_file = time() . '.' . $path_file;

$images_folder = '../images/';
move_uploaded_file($image['tmp_name'], $images_folder . $name_file);
$sql = "insert into prizes(name,image,amount)
values ('$name','$name_file','$amount')";
mysqli_query($connect,$sql);
mysqli_close($connect);


header('location:index.php');