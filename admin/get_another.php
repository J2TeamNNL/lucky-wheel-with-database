<?php 
require 'connect.php';

$sql = "SELECT * FROM prizes where amount > 0";
$result = mysqli_query($connect,$sql);
$each_prize = mysqli_fetch_array($result);

$sql = "SELECT * FROM invitess where check_give = 0 order by rand() limit 1";
$result = mysqli_query($connect,$sql);
$each = mysqli_fetch_array($result);
mysqli_close($connect);

echo isset($each_prize['id']) ? $each['id'] : 0;