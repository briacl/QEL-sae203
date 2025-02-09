<?php
// Configuration de la base de données
$DB_HOST = '127.0.0.1';
$DB_NAME = 'qel';
$DB_LOGIN = 'root';
$DB_PASSWORD = '*T@PH2tRa8l';

$DB_SECOND_HOST = 'localhost';
$DB_SECOND_DATABASE = 'crashtestTardisMusicApp';
$DB_SECOND_USERNAME = 'root';
$DB_SECOND_PASSWORD = '*T@PH2tRa8l';

// Chemin vers index.php (dans le navigateur)
// exemples :
// - avec php -S lancé dans le répertoire du projet
//       URL dans le navigateur : http://127.0.0.1:8000/
//       PATH_INDEX : /
// - hébergement dans htdocs/qel
//       URL dans le navigateur : http://localhost/qel/
//       PATH_INDEX : /qel/

$PATH_INDEX = '/';

// Définition des conventions pour l'heure sur le serveur
$locale = 'fr_FR.UTF-8';

//define('DEBUG_PASSED',true); //décommentez pour mettre toutes les tests de date passées à vrai

// Calcul de l'url de index.php dans BASE_URL. Utilisez BASE_URL comme base pour
// vos liens (ex : $PATH_INDEX . '?page=profile' pour la page de profil)
// NB : ne pas modifier au dessous de cette ligne, ajustez juste PATH_INDEX si besoin

if(isset($_SERVER['HTTPS'])){
      $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
  }
else{
      $protocol = 'http';
}

define('BASE_URL',$protocol . "://" . $_SERVER['HTTP_HOST'].$PATH_INDEX);
define('URL_INDEX',BASE_URL.'index.php');
define('URL_PUBLIC',BASE_URL.'public/');
define('URL_CSS',URL_PUBLIC.'css/');
define('URL_IMG',URL_PUBLIC.'img/');
define('URL_ICON',URL_PUBLIC.'icon/');


setlocale(LC_ALL, $locale);
setlocale(LC_TIME, $locale);
date_default_timezone_set("Europe/Paris");

define('DEBUG_PASSED',true);
?>
