<?php
echo $blade->run('connexion');
?>

<?php
global $pdo;
require_once 'application/models/user.php';
if(isset($_POST['mail']) && isset($_POST['mdp'])){
    log_in($mail, $password);
}
?> // peut-être pas forcément utile