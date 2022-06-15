<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/styles.css">
  <title>Document</title>
</head>
<body>
<div class="base">
  <?php
  include_once 'header.html';
  ?>
  <div class="LogI_content">
    <div class="LogI_text">Авторизация</div>
    <form method="POST" class="LogI_form" action="auth.php">
        <input type="email" class="email" placeholder="Email"><br>
        <input type="password" class="password" placeholder="Password"><br>
        <button class="log">Log In</button>
    </form>
    <div id="result"></div>
    <div class="back1"><a href="../index.php">Назад</a></div>
  </div>
</div>
</body>
<script src="../jquery-3.6.0.min.js"></script>
<script src="log_in.js"></script>
</html>