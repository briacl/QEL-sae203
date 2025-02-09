<?php //Connexion à la base (création de $pdo)
require_once 'application/config/config.php';

try {
	// On essaie de créer une instance de PDO.
	$pdo = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_LOGIN, $DB_PASSWORD,
     array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

  // Connexion à la seconde base de données
  $pdo2 = new PDO("mysql:host=$DB_SECOND_HOST;dbname=$DB_SECOND_DATABASE", $DB_SECOND_USERNAME, $DB_SECOND_PASSWORD,
     array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
  $pdo2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo2->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
}
catch(Exception $e) {
  echo "Echec de la connexion à la base de données<br>";
	echo "Paramètres de la connexion définis dans le fichier config/config.php :";
  print_r(compact(['DB_HOST','DB_NAME', 'DB_LOGIN', 'DB_PASSWORD']));
	echo "Message d'erreur reçu : <br>\n ".$e->getMessage()."<br>";
}


 ?>
