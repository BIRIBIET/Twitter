<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta charset="utf-8">
</head>
<body>
	<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'sasha_ch_15');
	$query = mysqli_query($connect, 'SELECT * FROM reges ORDER BY id DESC');
	$res = $query ->fetch_assoc();
	?>
	<form action="dfg2.php" method="POST">	
	<h3>Зарегестрироваться:</h3>
<div>
	<?php 
echo	'<input type="text" placeholder="Email.." value="'. $res['email'] .'">'
	 ?>
</div>
<div>
	<?php  
echo	'<input type="Password" placeholder="Password.."  value="'. $res['password'] .'">'
	?>
</div>
<button type="submit">ЗАРЕГЕСТРИРОВАТЬСЯ</button>
	</form>
</body>
</html>
