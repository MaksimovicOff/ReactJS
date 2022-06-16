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
	session_start();
	include_once 'header.html';
    require 'db.php';
    $str_out = "SELECT * FROM `users` WHERE `id` = '".$_SESSION['user']['id']."';";
    $run_out = mysqli_query($connect,$str_out);
    $user = mysqli_fetch_array($run_out);
	?>
	<div class="content_lk">
		<div class="header_lk">
			<div class="header_lk_t">Ваше имя - <?php echo $user['name']?></div>
     		<div class="header_lk_t">Ваш Email - <?php echo $user['email']?></div>
			<div class="header_lk_t"><a href="exit.php">Выйти</a></div>
		</div>
		<form action="game.php" class="game">
        	<button class="start">Start</button>
    </form>
    <div class="stat">
    	<div class="stat_text">Статистика</div>
    	<div class="last">
    		<div class="last_text">Последний резуьтат</div>
    		<div class="result"></div>
    	</div>
    </div>
	</div>
</div>
<script src="lk.js"></script>
</body>
</html>