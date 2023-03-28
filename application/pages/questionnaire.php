<?php

require_once 'application/models/participation.php';
require_once 'application/models/questionnaire.php';

$questionnaire = get_questionnaire_by_token_user($token);

if ($questionnaire === NULL){
  echo $blade->run('errors.404',['log'=>'Ce questionnaire n\'existe pas']);
  exit();
}

$idQuestionnaire = $questionnaire['id'];

$token = generate_token(20);
creer_participation($idQuestionnaire,$token);

header('Location: '.get_url_participation($token));
?>
