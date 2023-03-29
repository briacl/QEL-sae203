<?php
require_once 'application/models/question.php';
require_once 'application/models/questionnaire.php';


$questionnaire = get_questionnaire_by_token_admin($token);

if (isset($_GET['publie']) && $_GET['publie']=='1' && isset($questionnaire['id'])){
  set_statut($questionnaire['id'],'publie');
  $questionnaire = get_questionnaire_by_token_admin($token);
}

if ($questionnaire == null){
  echo $blade->run('errors.404',['log'=>'Ce questionnaire n\'existe pas']);
  exit();
}

$questions = get_questions_by_questionnaire_id($questionnaire['id']);
echo $blade->run('admin',compact('questionnaire','questions'));

?>
