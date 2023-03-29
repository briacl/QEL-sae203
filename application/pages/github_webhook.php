<?php
$secret = "";

$path = "/srv/www/sae203";

// Headers qui est envoyé par GitHub
$signature = isset($_SERVER['HTTP_X_HUB_SIGNATURE']) ? $_SERVER['HTTP_X_HUB_SIGNATURE'] : false;


//Work in progress !!! pour le momnent si la signature n'est pas présente on fait le else
if ($signature) {
    $hash = "sha1=" . hash_hmac('sha1', file_get_contents("php://input"), $secret);
    if (strcmp($signature, $hash) == 0) {
        $gitreturn = shell_exec("cd {$path} && /usr/bin/git pull 2>&1");
    }
}else { //TODO: à supprimer quand le webhook sera opérationnel
    $gitreturn = shell_exec("cd {$path} && /usr/bin/git pull 2>&1");
}

echo $blade->run('github_webhook', ['gitreturn' => $gitreturn]);    //On appelle le template blade (github_webhoo.blade.php) en lui passant la variable $gitreturn en tant que 'gitreturn'

?>