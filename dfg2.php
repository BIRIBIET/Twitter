	<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'sasha_ch_15');
	$query = mysqli_query($connect, "INSERT INTO  reges(email,password) VALUES('" . $_POST['text'] ."', '". $_POST['password'] ."')")?>
	

	   