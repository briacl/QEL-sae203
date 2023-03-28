<?php

require_once 'application/models/participation.php';
require_once 'application/models/question.php';
require_once 'application/models/questionnaire.php';


$participation = get_participation_by_token($token);
if ($participation != NULL){
  $questionnaire = get_questionnaire_by_id($participation['idQuestionnaire']);
}

if ($participation === NULL || $questionnaire === NULL){
  echo $blade->run('errors.404',['log'=>'Ce questionnaire n\'existe pas']);
  exit();
}

$questions = get_reponses_by_token($participation['token']);

echo $blade->run('participation',compact('questionnaire','questions','participation'));

?>
