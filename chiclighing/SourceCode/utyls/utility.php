<?php
function getPost($key) {
	$value = '';

	if(isset($_POST[$key])) {
		$value = $_POST[$key];
		$value = str_replace("'", "\\'", $value);
	}

	return $value;
}

function getGet($key) {
	$value = '';

	if(isset($_GET[$key])) {
		$value = $_GET[$key];
		$value = str_replace("'", "\\'", $value);
	}

	return $value;
}

function checkLogin() {
	if(isset($_SESSION['cUser'])) {
		return true;
	}
	if(isset($_COOKIE['token'])) {
		$token = $_COOKIE['token'];

		$sql = "select * from users where token = '$token'";
		$data = executeResult($sql, true);

		if($data != null) {
			$_SESSION['cUser'] = $data;
			return true;
		}
	}

	return false;
}
