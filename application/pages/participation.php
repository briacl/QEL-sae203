<?php

require_once 'application/models/participation.php';
require_once 'application/models/question.php';
require_once 'application/models/questionnaire.php';

$reponseouverte = isset($_GET['reponseouverte']) ? $_GET['reponseouverte'] : null;

$participation = get_participation_by_token($token);
if ($participation != NULL){
  $questionnaire = get_questionnaire_by_id($participation['idQuestionnaire']);
}

if ($participation === NULL || $questionnaire === NULL){
  echo $blade->run('errors.404',['log'=>'Ce questionnaire n\'existe pas']);
  exit();
}


$questions = get_responses_with_freq($participation,$questionnaire);
echo $blade->run('participation',compact('questionnaire','questions','participation'));

?>
