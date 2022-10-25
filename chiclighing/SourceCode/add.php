<?php

session_start();

require_once('utyls/utility.php');
require_once('db/dbhelper.php');


$name_products = $price = $intro = $id_type	= $id_brand = $made_in = $material  = $wattage = $Power_Input = "";
if (!empty($_POST)) {
	$img1 = getPost('img_1');
	$img2 = getPost('img_2');
	$img3 = getPost('img_3');
	$img4 = getPost('img_4');

	// save img 
	$sqlImg = "insert into img(img_1, img_2, img_3, img_4) values ('$img1', '$img2', '$img3', '$img4')";
	$image = insert($sqlImg, true);

	$name_products = getPost('name_products');
	$price = getPost('price');
	$id_type = getPost('id_type');
	$id_brand = getPost('id_brand');
	$made_in = getPost('made_in');
	$material  = getPost('material');
	$wattage = getPost('wattage');
	$Power_Input = getPost('Power_Input');
	$intro = getPost('intro');
	$sql = "insert into products(name_products, price,id_type,id_brand ,made_in,material ,wattage,Power_Input,intro,id_img) values ('$name_products', '$price', '$id_type','$id_brand','$made_in','$material ','$wattage','$Power_Input','$intro','$image')";
	// var_dump($sql);
	execute($sql);
	header('Location: admin_list.php');
	die();
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Hind&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style_admin/admin.css">
	<link rel="stylesheet" type="text/css" href="style_admin/admin_list.css">
	<link rel="stylesheet" type="text/css" href="style_admin/add.css">


</head>

<body>
	<form method="post">
		<div class="list">
			<div class="s-list-1"><?php require "admin_menu.php"; ?></div>
			<div class="s-2">
				<div class="a-1">
					<div class="b-1">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
							<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
						</svg>
					</div>
					<div class="b-1">
						<a href="admin_contact.php">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chat-left" viewBox="0 0 16 16">
								<path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
							</svg></a>
					</div>
				</div>
				<div class="a-2 pont-ad">
					<center>
						<h2>Base Information</h2>
						<h5>Id Product:<?= $std['max'] + 1 ?></h5>
						<div class="hr-2"></div>
					</center>
				</div>
				<div class="input-ss">
					<div class="input-s1">
						<div class="input-a1 pont-ad">
							<h5>Information Form</h5>
						</div>
						<div class="input-a2 pont-ad">

							<div class="input-a3">
								<div class="input-b2">
									<label>Name product</label><br>
									<input type="text" name="name_products">
								</div>
								<div class="input-b2">
									<label>Price</label><br>
									<input type="number" name="price">
								</div>
							</div>
							<div class="input-a4">
								<div class="input-b1">
									<select class="form-select" aria-label="Default select example" name="id_brand">
										<option value="1">Material</option>
										<option value="2">John Lewis</option>
										<option value="3">OSRAM</option>
										<option value="4">Laura Ashley</option>
										<option value="5">Philips Hue</option>

									</select>
								</div>
								<div class="input-b1">
									<select class="form-select" aria-label="Default select example" name="id_type">
										<option value="1">Ceiling Lights</option>
										<option value="2">Wall Lights</option>
										<option value="3">Desk & Table Lamps</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="input-s2">
						<div class="input-a1 pont-ad">
							<h5>Data Form</h5>
						</div>
						<div class=" pont-ad">
							<div class="input-a3">
								<div class="input-b2">
									<label>Wattage</label><br>
									<input type="text" name="wattage">
								</div>
								<div class="input-b2">
									<label>material</label><br>
									<input type="text" name="material">
								</div>
								<div class="input-b2">
									<label>Power Input</label><br>
									<input type="text" name="Power_Input">
								</div>
								<div class="input-b2">
									<label>Intro</label><br>
									<input type="text" name="intro">
								</div>
								<div class="input-b2">
									<label>Made In</label><br>
									<input type="text" name="made_in">
								</div>
							</div>
						</div>
					</div>
					<div class="input-s3">
						<div class="input-a1 pont-ad">
							<h5>Data Form</h5>
						</div>
						<div class=" pont-ad">
							<div class="input-a3">
								<div class="input-b2">
									<label>Image 1</label><br>
									<input type="text" name="img_1">
								</div>
								<div class="input-b2">
									<label>Image 2</label><br>
									<input type="text" name="img_2">
								</div>
								<div class="input-b2">
									<label>Image 3</label><br>
									<input type="text" name="img_3">
								</div>
								<div class="input-b2">
									<label>Image 4</label><br>
									<input type="text" name="img_4">
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="inputBox w100">
					<input class="input-add" type="submit" value="To send">

				</div>
			</div>
		</div>
	</form>
</body>

</html>