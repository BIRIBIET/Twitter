
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<form action="red.php" method="POST">
	<?php echo '<input name="text" "type="text" style="height: 20px; width: 100px" value="' . $_POST['text'] . '">' ?>
	<?php echo '<input name="id" "type="text" style="height: 20px; width: 100px" value="' . $_POST['id'] . '">' ?>
	<?php echo '<button style="height: 30px;">Сохранить</button>' ?>
	</form>
</body>
</html>
<?php 
$connect = mysqli_connect('127.0.0.1', 'root', '', 'sasha_ch_15');
$query = mysqli_query($connect, "UPDATE tweet SET  text='". $_POST['text'] ."'  WHERE id = '" . $_POST['id'] ."'");	
 ?>
 <?php 
header('Location: http://index.php') ?>
 