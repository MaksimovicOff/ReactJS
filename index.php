<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Charis+SIL:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<title>ReactJS</title>
</head>
<body>
<div class="base">
	<?php
	session_start();
	error_reporting(0);
	include_once 'pages/header.html';
	include_once 'pages/db.php';
	if ($_SESSION['user']) {
		header("Location:pages/lk.php");
	}
	else {?>
		<div class="content_out">
			<div class="c_o_text">
				Зарегистрируйтесь<br>или<br>Авторизируйтесь
			</div>
			<div class="c_o_buttons">
				<div class="logI"><a href="pages/Log_I.php">Log In</a></div>
				<div class="SignU"><a href="pages/Sign_U.php">Sign Up</a></div>
		</div><?
		session_unset();
	}
	?>
</div>
</div>
</body>
</html>

