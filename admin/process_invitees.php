<?php 

$invitees = $_POST['invitees'];

require 'connect.php';

$sql = "delete from invitees";
mysqli_query($connect,$sql);
for ($i=1; $i <= $invitees; $i++) { 
	$sql = "insert into invitess(id) values('$i')";
	mysqli_query($connect,$sql);
}

mysqli_close($connect);
header('location:index.php');