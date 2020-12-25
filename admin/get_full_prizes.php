<?php 

require 'connect.php';
$sql = "SELECT * FROM prizes where amount > 0";
$result = mysqli_query($connect,$sql);

mysqli_close($connect);

$array = [];
foreach ($result as $each) {
	array_push($array,$each);
}
echo json_encode($array);