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
<script>
  $('button').on('click', function(){
    const email = $('input.email').val();
    const password = $('input.password').val();
    localStorage.setItem('email', email);
    localStorage.setItem('password', password);
  })
function Auto() {
  const fromStorage = localStorage.getItem('email');
  const fromStorage1 = localStorage.getItem('password');
  if (fromStorage || fromStorage1) {
    $('input.email').val(fromStorage);
    $('input.password').val(fromStorage1);
  }
}
Auto();
</script>
</html>