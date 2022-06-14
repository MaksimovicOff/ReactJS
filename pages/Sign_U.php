<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Charis+SIL:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
	<title>ReactJS</title>
</head>
<body>
<div class="base">
	<?php
	include_once 'header.html';
	?>
	<div class="SignU_content">
		<div class="SignU_text">Регистрация</div>
		<form class="sign_form">
     		<input type="text" class="name" placeholder="Name"><br>
     		<input type="email" class="email" placeholder="Email"><br>
     		<input type="password" class="password" placeholder="Password"><br>
     		<input type="password" class="c_password" placeholder="Confirm Password"><br>
     		<button class="reg">Sign Up</button>
		</form>
		<div id="result"></div>
    <div class="back"><a href="../index.php">Назад</a></div>
	</div>
</div>
</body>
</html>
<script src="../jquery-3.6.0.min.js"></script>
<script src="sign_up.js"></script>