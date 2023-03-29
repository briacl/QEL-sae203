<?php
require_once 'application/models/question.php';
require_once 'application/models/questionnaire.php';

if (isset($_GET['ajout']) && ($_GET['ajout'] == '1' ) && (isset($_GET['questionnaireId']) ))
{
   $id=$_GET['questionnaireId'];
   $token = $_GET['token'];
   $questionnaire = get_questionnaire_by_token_admin($token);
   echo $blade->run('create',['ajout'=>true,'questionnaire'=>$questionnaire,'id'=>$id]);
    exit();
}

if (!isset($titre) && !isset($autre))
{ // Si les paramètres ne sont pas présents ->  formulaire
  echo $blade->run('create');
  exit();
}

if (!isset($autre) || ($autre!='autre'))
{///////////// Construction du questionnaire
$tokenAdmin = generate_token(20);
$tokenUser = generate_token(20);
$idQuestionnaire = creer_questionnaire(compact('tokenAdmin','tokenUser','titre','fin'));
}else{
  //on ajoute à un questionnaire existant
  $question = $_POST['question'];
  $reponses = $_POST['reponses'];
  $idQuestionnaire = $_POST['id'];
  $tokenAdmin = $_POST['token'];
}
//////////// Construction de la question
creer_question_reponse($idQuestionnaire,$question,$reponses);

// redirection sur la page admin du questionnaire
header('Location: '.get_admin_url($tokenAdmin));
?>
