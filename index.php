<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta charset="utf-8">
</head>
<body class="p-3 mb-2 bg-light">

	<div class="container-fluid text-primary bg-white mt-0" style="height: 50px; margin-bottom: 20px">
	<div class="box"><img src="images/icons8-home-50.png" alt=""></div>
	</div>
	<div class="container">
		<div class="row">



			<div class="col-3 p-3 mb-1 bg-white" >
				<div class="bg-white">
					<div>
					<img src="images/background.jpg" class="w-100" >
					</div>
					<div class="row">
						<div class="col-3">
							<img src="images/avatar.jpg" class="rounded-circle">
						</div>
						<div class="col-9">
							<div>
							<h4><a href="">sansao</a></h4>
							</div>
							<div>
							<a href="">@sansao</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-3 pl-4">
							<h6><a href="">Твиты</a></h6>
							<p><a href="">111</a></p>
						</div>
						<div class="col-9">
							<h6><a href="">Читаемое</a></h6>
							<p><a href="">99</a></p>
						</div>
					</div>
				</div>
				<h5>Актуальные темы для вас</h5>
					<a href="">Изменить</a>
					<h6><a href="">Армении</a></h6>
				<?php 
				$connect = mysqli_connect('127.0.0.1', 'root', '', 'sasha_ch_15');
				$query = mysqli_query($connect, 'SELECT * FROM tweets');
				for ($i=0; $i < 5 ; $i++) { 
				$resone = $query ->fetch_assoc();
				 ?>
				<div class="bg-white mt-2">
					<div class="col-3">
						<a href=""><?php  echo $resone['blue']; ?></a>
						<p><?php  echo $resone['dark']; ?></p>
					</div>
				</div>
			<?php } ?>
			</div>



		<div class="col-6 p-3 mb-2 bg-white text-white" style="margin-left: 20px">
			<div class="row">
				<div class="col-2">
					<img src="images/avatar.jpg" class="rounded-circle">
				</div>		
				<div class="col-10">

					<form action="dfg.php" method="POST">
						<input name="text">
						<a href=""><img src="images/plus.png"></a>
						<button type="submit" class="btn btn-primary">Твитнуть</button>
					</form>

					<div class="d-flex">
						<div class="col-6 pl-0">
							<a href="" class=""><img src="images/picture.png"></a>
							<a href="" class="ml-2"><img src="images/gif.png"></a>
							<a href="" class="ml-2"><img src="images/graph.png"></a>
							<a href="" class="ml-2"><img src="images/placeholder.png"></a>	
						</div>
						<div class="col-xl-6">
					 </div>
					</div>
				</div>								
			</div>
						<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'sasha_ch_15');
						$query = mysqli_query($connect, 'SELECT * FROM tweet ORDER BY id DESC');
 						echo $query->num_rows;
						for ($i=0; $i < $query->num_rows; $i++) { 
						$res = $query ->fetch_assoc();
						 ?>

			<div class="row mt-4">
				<div class="col-2">
						<a href="#"><?php  echo '<img src="' . $res['logo'] .  '">'; ?></a>
				</div>
				<div class="col-10 " >
					<div class="row">
						<h5><a href="#"><?php echo  $res['title']; ?></a></h5>
					</div>
					<div>
						<p></p>
					</div>
					<div>
						<a href=""><p><a href="http://amp.gs/vMPM"><?php  echo  $res['text']; ?></a></p></a>
					</div>
					<div>
						<a href="#"><?php echo '<img src="' . $res['img'] .  '" class="w-100">'; ?></a>
					</div>
					<div class="row">
								<div class="col-3">
									<img src="images/comment.png">
								</div>
								<div class="col-3">
									<img src="images/envelope.png">
								</div>
								<div class="col-3">
									<img src="images/like.png">
								</div>
								<div class="col-3">
									<img src="images/retweet.png">
								</div>
								
					<form action="Del.php" method="POST">
						<?php 	
		 echo '<input type="" name="id" value="' . $res['id'] .'" style="display:none">'
						 ?>
						<button type="submit" class="btn btn-primary">Удалить</button>
					</form>

					<form action="red.php" method="POST">
							<?php echo '<input name="text" value="'. $res['text'] .   '">'?>
							<?php echo '<input name="id" value="'. $res['id'] .   '">'?>
						<button type="submit" class="btn btn-primary">Редактировать</button>
					</form>

					</div>
				</div>
					<?php } ?>
			</div>
		</div>




<div class="col-3 p-3 bg-white">
			<div>
				<div class="row">
					<h6>Кого читать</h6>
					<h6 style="color: blue; ">Обновить все</h6>
				</div>
			</div>
				<div class="row">
					<div class="col-4">
						<img src="images/1.jpg" alt="" class="border">
						<a href="">sansao</a>
					</div>
					<div class="col-8 mt-5">
						<a href="" style=";"></a>
						<a href=""></a>			
						<button style="">
							Читать
						</button>
					 </div>					
					 <div class="col-4">
						<img src="images/2.jpg" alt="" class="border">
						<a href="">sansao</a>
					</div>
					<div class="col-8 mt-5" >
						<a href="" style=""></a>
						<a href=""></a>			
						<button style="">
							Читать
						</button>
		 			</div>										
				</div>
	</div>
</div>
</body>
</html>