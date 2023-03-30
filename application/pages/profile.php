<?php
require_once 'application/models/user.php';

if(isset($_POST['submit'])){
  $email = $_POST['login'];
  $mdp = $_POST['mdp'];
  log_in($email, $mdp);
}

echo $blade->run('profile');
?>