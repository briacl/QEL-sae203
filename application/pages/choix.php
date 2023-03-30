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

$reponseouverte = isset($_GET['reponseouverte']) ? $_GET['reponseouverte'] : null;

if ($reponseouverte)
{
  //TODO Mission 6
  $idQuestion = isset($_GET['idquestion']) ? $_GET['idquestion'] : null;
  creer_reponse($idQuestion,0,$reponseouverte); //position = 0 pour réponse libre
}
else
{ 
  // pas de réponse ouverte
  set_choix($idParticipation,$idReponse);
}

header('Location: '.get_url_participation($token)."&aparticipe=1");
?>
