<?php 


$amounts = $_POST['amounts'];

require 'connect.php';

foreach ($amounts as $id => $amount) {
	$sql = "update prizes set amount = '$amount' where id = '$id'";
	mysqli_query($connect,$sql);
}

mysqli_close($connect);

header('location:index.php');
