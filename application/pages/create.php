<?php

require_once 'application/models/question.php';
require_once 'application/models/questionnaire.php';

if (!isset($titre)){ // Si les paramètres ne sont pas présents ->  formulaire
  echo $blade->run('create');
  exit();
}

///////////// Construction du questionnaire
$tokenAdmin = generate_token(20);
$tokenUser = generate_token(20);
$idQuestionnaire = creer_questionnaire(compact('tokenAdmin','tokenUser','titre','fin'));

//////////// Construction de la question
creer_question_reponse($idQuestionnaire,$question,$reponses);

//var_dump($_POST);
// redirection sur la page admin du questionnaire
header('Location: '.get_admin_url($tokenAdmin));
?>
