<?php
	$connect = mysqli_connect("MySQL-8.2", "root", "", "wishlist");
	$newgame = mysqli_query($connect, 'SELECT * FROM newgame');
	$newgame = mysqli_query($connect, "INSERT INTO newgame(title, price, img) 
			VALUES('{$_GET["title"]}', '{$_GET["price"]}', '{$_GET["img"]}')");
	header("location: https://wishlist.local/");
?>