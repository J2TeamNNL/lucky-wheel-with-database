<?php 
require 'connect.php';

$sql = "SELECT * FROM prizes where amount > 0 order by rand() limit 1";
$result = mysqli_query($connect,$sql);
$each = mysqli_fetch_array($result);
mysqli_close($connect);

echo $each['id'];