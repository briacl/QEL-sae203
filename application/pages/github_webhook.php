<?php
$secret = "";

$path = "/srv/www/sae203";
$gitreturn = shell_exec("cd {$path} && /usr/bin/git pull 2>&1");

// Headers deliveried from GitHub
$signature = $_SERVER['HTTP_X_HUB_SIGNATURE'];

if ($signature) {
  $hash = "sha1=".hash_hmac('sha1', file_get_contents("php://input"), $secret);
  if (strcmp($signature, $hash) == 0) {
    echo shell_exec("cd {$path} && /usr/bin/git pull 2>&1");
    exit();
  }
}

echo $blade->run('github_webhook',['gitreturn'=>$gitreturn]);

?>