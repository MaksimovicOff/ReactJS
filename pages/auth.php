<?php
session_start();
require 'db.php';
$email = $_POST['email'];
$password = $_POST['password'];
$str_out_users = "SELECT * FROM users WHERE `email` = '$email' && `password` = '$password';";
$run_out_users = mysqli_query($connect,$str_out_users);
$count = mysqli_num_rows($run_out_users);
$pswd_auth=md5(md5($pswd_auth)).md5($email);
$user = mysqli_fetch_array($run_out_users);
$_SESSION['user'] = [
  "id"=>$user['id'],
  "name"=>$user['name'],
  "email"=>$user['email']
];
if ($email && $password) {
  if ($count == 1) {
    header("Location:../");
  }
  else
  {
    echo '<div class="r_error">Неправильный e-mail или пароль!</div>';
  }
}
?>