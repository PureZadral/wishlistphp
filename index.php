<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
	<div class="col-12" style="background-color: #171A21;">
		<div class="col-8 mx-auto">
			<div class="row py-2">
				<div class="col-3">
					<img src="logo.png">
				</div>
				<div class="my-auto col-9">
					<a href="#" class="text-uppercase text-light">магазин</a>
					<a href="#" class="text-uppercase text-light ms-3">сообщество</a>
					<a href="#" class="text-uppercase text-light ms-3">о steam</a>
					<a href="#" class="text-uppercase text-light ms-3">поддержка</a>
					<a href="admin.php" class="text-uppercase text-success ms-3">админ-панель</a>
				</div>
			</div>
		</div>
	</div>
	<?php
		$connect = mysqli_connect("MySQL-8.2", "root", "", "wishlist");
											
		$newgame = mysqli_query($connect, 'SELECT * FROM newgame');
	?>
	<div class="col-12 pt-5" style="background-color: #1d253b">
		<div class="col-8 mx-auto">
			<div class="col-12 d-flex">
				<img src="profile.jfif" style="width: 100px">
				<h1 class="text-light text-uppercase m-3 my-auto">список желаемого имя пользователя</h1>
			</div>
			<div class="col-12 py-3 d-flex" style="height: 80px">
				<input type="" name="" placeholder="По названию или метке" class="form-control border-dark text-light" style="background-color: #101521;"> 
				<button class="btn text-light mx-3" style="background-color: #363940;">Настройки</button>
				<button class="btn text-light" style="width: 500px; background-color: #363940;">Сортировать по: вашему предпочтению</button>
			</div>
			<div class="border-top py-3" style="border-color: #363940;">
				<div class="col-12 d-flex p-3" style="background-color: #4a5166;">
					<img src="handle.png" class="my-auto pe-3 ">
					<img src="header1.jpg" style="width: 460px" class="px-3 border-start" style="border-color: #363940;">
					<h1 class="text-light" class="">Cruelty Squad</h1>
					<div class="bg-dark p-1 d-flex my-auto ms-auto" style="height: 40px;">
						<p class="text-light my-auto px-2">435 руб</p>
						<button class="text-light btn" style="background-color: #02cc06;">В корзину</button>
					</div>
				</div>
			</div>
			<div class="pb-3">
				<div class="col-12 d-flex p-3" style="background-color: #4a5166;">
					<img src="handle.png" class="my-auto pe-3 ">
					<img src="header2.jpg" style="width: 460px" class="px-3 border-start" style="border-color: #363940;">
					<h1 class="text-light" class="">Gunner, HEAT, PC!</h1>
					<div class="bg-dark p-1 d-flex my-auto ms-auto" style="height: 40px;">
						<p class="text-light my-auto px-2">515 руб</p>
						<button class="text-light btn" style="background-color: #02cc06;">В корзину</button>
					</div>
				</div>
			</div>
			<div class="pb-3">
				<div class="col-12 d-flex p-3"  style="background-color: #4a5166;">
					<img src="handle.png" class="my-auto pe-3 ">
					<img src="header3.jpg" style="width: 460px" class="px-3 border-start" style="border-color: #363940;">
					<h1 class="text-light" class="">RimWorld</h1>
					<div class="bg-dark p-1 d-flex my-auto ms-auto" style="height: 40px;">
						<p class="text-light my-auto px-2">1099 руб</p>
						<button class="text-light btn" style="background-color: #02cc06;">В корзину</button>
					</div>
				</div>
			</div>
				<?php
					while($new = $newgame -> fetch_assoc()) {
					?>
					<div class="pb-3">
						<div class="col-12 d-flex p-3"  style="background-color: #4a5166;">
							<img src="handle.png" class="my-auto pe-3 ">
							<img src="<?php echo $new["img"]; ?>" style="width: 460px" class="px-3 border-start" style="border-color: #363940;">
							<h1 class="text-light" class=""><?php echo $new["title"]; ?></h1>
							<div class="bg-dark p-1 d-flex my-auto ms-auto" style="height: 40px;">
								<p class="text-light my-auto px-2"><?php echo $new["price"]; ?></p>
								<button class="text-light btn" style="background-color: #02cc06;">В корзину</button>
							</div>
						</div>
					</div>
				<?php } ?>
		</div>
	</div>
</body>
</html>