	<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'sasha_ch_15');
	$query = mysqli_query($connect, "INSERT INTO  tweet(title,text,logo,img) VALUES('Habr', '" . $_POST['text'] . "', 'images/post1.jpg', 'images/fort.jpg')");		
	  ?>
	

	   
