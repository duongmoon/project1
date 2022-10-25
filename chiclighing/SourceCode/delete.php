<?php
require_once('utyls/utility.php');   
require_once('db/dbhelper.php');

if(!empty($_POST)) {
	$id = getPost('id');

	$sql = "delete from products where id_products = '$id'";
	execute($sql);

	$sql2 = "delete from img where id_img = '$id'";
	execute($sql2);

	header('Location: admin_list.php');
	die();
}

$id = getGet('id');
$sql1 = "select * from vw_show_product where id_products = '$id'";
$std = executeResult($sql1, true);
if($std == null) {
	header('Location: admin_list.php');
	die();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Product Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<style type="text/css">
		.form-group {
			margin-bottom: 20px;
		}

		.card {
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
<div class="container">
	<form method="post" onsubmit="return validateData();">
		<h3>Are you sure to delete this product?</h3>
		<div class="form-group">
			<label>Name:<?=$std['name_products']?></label>
			<br>
			<img src="<?=$std['img_1']?>" style="width: 400px; height: 200px;">
			<input required type="text" name="id" class="form-control" value="<?=$std['id_products']?>" style="display: none;">
		</div>
		<div class="form-group">
			<button class="btn btn-danger">Confirm Delete</button>
			<a href="admin_list.php"><button type="button" class="btn btn-secondary">Back</button></a>
		</div>
	</form>
</div>
<script type="text/javascript">
	function validateData() {
		if($('[name=pwd]').val() != $('[name=confirmPwd]').val()) {
			alert('Password does not match')
			return false
		}
		return true
	}
</script>
</body>
</html>