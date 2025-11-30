<?php //Création de la variable $blade
// Charger l'autoload de Composer (chemin relatif au répertoire racine du projet)
$vendorAutoload = __DIR__ . '/../../vendor/autoload.php';
if (!file_exists($vendorAutoload)) {
	http_response_code(500);
	echo "Dépendances manquantes. Exécutez `composer install` dans le répertoire du projet pour créer `vendor/autoload.php`.\n";
	echo "Fichier attendu : {$vendorAutoload}\n";
	exit;
}
require_once $vendorAutoload;
use eftec\bladeone\BladeOne;

$views = 'application/views';
$cache = 'cache';
$blade = new BladeOne($views,$cache,BladeOne::MODE_DEBUG);
?>
