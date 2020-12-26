<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
require 'connect.php';
$sql = "select * from prizes";
$result = mysqli_query($connect,$sql);
?>
<a href="insert.php">
	Insert new
</a>
<form action="process_invitees.php" method="post">
	Number invitees
	<input type="number" name="invitees">
	<button>Insert</button>
</form>
<form action="process_update.php" method="post">
	<table width="100%" border="1">
		<caption>
			<h1>Prizes</h1>
		</caption>
		<tr>
			<th>Name</th>
			<th>Image</th>
			<th>Amount</th>
		</tr>
		<?php foreach ($result as $each): ?>
			<tr>
				<td>
					<?php echo $each['name'] ?>
				</td>
				<td>
					<img src="../images/<?php echo $each['image'] ?>" height='100'>
				</td>
				<td>
					<input type="number" name="amounts[<?php echo $each['id'] ?>]" value='<?php echo $each['amount'] ?>'>
				</td>
			</tr>
		<?php endforeach ?>
	</table>
	<button>Update</button>
</form>
</body>
</html>