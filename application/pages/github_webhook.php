<?php
/*
* Petite méthode d'intégration continue du repos github.com/briacl/sae203
*   remarque, le repos étant privé la clef ssh locale est autorisée chez github
*/
$secret = "ElleEstFunCetteSAE!";

$path = "/srv/www/sae203";

// Headers qui est envoyé par GitHub
$signature = isset($_SERVER['HTTP_X_HUB_SIGNATURE']) ? $_SERVER['HTTP_X_HUB_SIGNATURE'] : false;

//Work in progress !!! pour le momnent si la signature n'est pas présente on fait le else
if ($signature) {
    // info: file_get_contents("php://input") est un raccourci pour récupérer tout le formulaire post envoyé par github
    // hash_hmac('sha1', file_get_contents("php://input"), $secret) calcule donc une signature sur l'ensemble des éléments
    // du formulaire en provenance de github
    // cette signature est comparée à celle envoyée en entête dans HTTP_X_HUB_SIGNATURE, si OK on fait un git pull
    $hash = "sha1=" . hash_hmac('sha1', file_get_contents("php://input"), $secret);
    if (strcmp($signature, $hash) == 0) {
        $gitreturn = shell_exec("cd {$path} && /usr/bin/git pull 2>&1");
    }
}else { //TODO: à supprimer quand le webhook sera opérationnel
    $gitreturn = shell_exec("cd {$path} && /usr/bin/git pull 2>&1");
}

echo $blade->run('github_webhook', ['gitreturn' => $gitreturn]);    //On appelle le template blade (github_webhoo.blade.php) en lui passant la variable $gitreturn en tant que 'gitreturn'

?>