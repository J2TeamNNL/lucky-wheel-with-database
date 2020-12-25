<?php 

$nullable = $_GET['nullable'];

require 'connect.php';
$sql = "SELECT * FROM prizes";
if(!$nullable){
	$sql = "$sql where amount > 0";
}
$result = mysqli_query($connect,$sql);

mysqli_close($connect);

$array = [];
foreach ($result as $each) {
	array_push($array,$each);
}
echo json_encode($array);