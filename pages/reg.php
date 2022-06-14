<?php
require 'db.php';
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$c_password = $_POST['c_password'];
$str_sign_up = "INSERT INTO `users` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";
if ($name && $email && $password && $c_password) {
  $str_email = "SELECT `email` FROM `users` WHERE `email` = '$email'";
  $str_run_email = mysqli_query($connect,$str_email);
  while ($a=mysqli_fetch_array($str_run_email)) {
    $count = mysqli_num_rows($str_run_email);
    if ($count > 0) {
      echo '<div class="r_error">Этот e-mail уже использован!</div>';
    }
  }
  if ($password == $c_password) {
    $run_sign_up = mysqli_query($connect,$str_sign_up);
    if ($run_sign_up) {
      echo '<div class="r_complete">Вы успешно зарегистрировались</div>';
    }
  }
  else
  {
    echo '<div class="r_error">Пароли не одинаковы!</div>';
  }
}
else
{
  echo '<div class="r_error">Ошибка</div>';
}
?>