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
				</div>
			</div>
		</div>
	</div>
	<div class="col-12 pt-5" style="background-color: #1d253b; height: 860px;" >
		<div class="col-8 mx-auto">
			<form action="insert.php" method="GET">

				<div class="my-3 col-6">
					<h3 class=" text-light">Название</h3>
					<input type="" name="title" class="form-control border-dark text-light" style="background-color: #101521;">
				</div>

				<div class="my-3 col-6">
					<h3 class=" text-light">Цена</h3>
					<input type="" name="price" class="form-control border-dark text-light" style="background-color: #101521;">
				</div>

				<div class="my-3 col-6">
					<h3 class=" text-light">Картинка</h3>
					<input type="" name="img" class="form-control border-dark text-light" style="background-color: #101521;">
				</div>
				<div class="col-2 d-flex pb-5 mt-5">
					<button href="index.php" class="btn btn-danger ">Отмена</button>
					<button class="btn btn-success mx-3 col-8">Добавить игру</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>
	