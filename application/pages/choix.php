<?php

require_once 'application/models/participation.php';
require_once 'application/models/question.php';
require_once 'application/models/questionnaire.php';

$participation = get_participation_by_token($token);
if ($participation === NULL){
  echo $blade->run('errors.404',['log'=>'Ce questionnaire n\'existe pas']);
  exit();
}

$idParticipation = $participation['id'];
$idQuestionnaire = $participation['idQuestionnaire'];

$questionnaire = get_questionnaire_by_id($idQuestionnaire);

set_choix($idParticipation,$idReponse);

header('Location: '.get_url_participation($token));
?>
