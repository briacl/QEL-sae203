<?php
require_once 'application/core/database.php';
require_once 'application/models/question.php';



/*
Créé une nouvelle participation pour un questionnaire
paramètres :
  $idQuestionnaire : l'id du questionnaire
  $token : le token permettant d'accéder à cette participation
retour
  l'id de la participation créée
*/
function creer_participation($idQuestionnaire,$token){ //
 global $pdo;
 $sql = 'INSERT INTO participation(idQuestionnaire,token)
         VALUES(?,?)';
 $query = $pdo->prepare($sql);
 $query->execute([$idQuestionnaire,$token]);
 $id = $pdo->lastInsertId();
 return $id;
}

/*
Retourne les informations de base d'une participation
paramètre :
  $id ; identifiant de la idParticipation
retour :
  un tableau associatif avec les informations de base si trouvées, NULL sinon
*/
function get_participation_by_id($id){
  global $pdo;
  //TODO
  return NULL;
}

/*
Retourne les informations de base d'une participation
paramètre :
  $token ; token de la participation
retour :
  un tableau associatif avec les informations de base si trouvées, NULL sinon
*/
function get_participation_by_token($token){ //
  global $pdo;
  $sql = 'SELECT * FROM participation WHERE token = ?';
  $query = $pdo->prepare($sql);
  $query->execute([$token]);
  $result = $query->fetch();
  return $result === FALSE ? NULL : $result;
}

/*
Obtient toutes les questions et les réponses correspondant à une participation
paramètre :
  $token ; token de la participation
retour :
  Un tableau de questions. Chaque question est un tableau associatif contenant :
    -l es informations de base d'une question
    - un tableau de réponses (chacune un tableau associatif avec :
      -s es informations de base
      - choix : indique si c'est cette réponse qui a été choisie
*/
function get_reponses_by_token($token){ //
  global $pdo;
  $sql = 'SELECT * , choix.idParticipation IS NOT NULL AS choix FROM participation
        JOIN question ON question.idQuestionnaire = participation.idQuestionnaire
        JOIN reponse ON reponse.idQuestion = question.id
        LEFT JOIN choix ON choix.idParticipation = participation.id AND
          choix.idReponse = reponse.id
        WHERE participation.token = ?
        ORDER BY idQuestion,reponse.position';
  $query = $pdo->prepare($sql);
  $query->execute([$token]);
  $all = $query->fetchall();
  $questions = [];
  foreach($all as $question){
   $idQuestion = $question['idQuestion'];
   if(!array_key_exists($idQuestion,$questions)){
     $questions[$idQuestion] = $question;
   }
   $questions[$idQuestion]['reponses'][] = $question;
  }
  return $questions;
}

/*
Trouve les questions correspondant à une participation, avec les réponses (comme get_reponses_by_token() )
Si les résultats sont supposés être visible, on ajoute les informations de get_freq_by_questionnaire_id()
paramètres :
  $participation (sous forme d'un tableau associatif)
  $questionnaire (sous forme d'un tableau associatif)
retour : un tableau de questions avec les informations souhaitées
  On ajoute en plus la clef 'montrer' qui est vraie si le résultat peut-être montré
  (utile dans le cas où cela dépend de la présence d'une réponse)
*/
function get_responses_with_freq($participation,$questionnaire){
  $questions = get_reponses_by_token($participation['token']);
  $freq = get_freq_by_questionnaire_id($questionnaire['id']);
  foreach($questions as &$question){
    $freq_question = $freq[$question['idQuestion']];
    $question['total'] = $freq_question['total'];
    $question['montrer'] = $montrer != 'reponse';
    for($i=0; $i< count($question['reponses']); $i++){
       $question['reponses'][$i]['count'] = $freq_question['reponses'][$i]['count'];
    }
  }
  return $questions;

}

/*
Marque une réponse comme choisie
paramètres :
  $idParticipation
  $idReponse
*/
function set_choix($idParticipation,$idReponse){ //
  global $pdo;
  $sql = 'DELETE choix FROM choix
         JOIN reponse AS rep_del ON choix.idReponse = rep_del.id
        JOIN reponse AS rep_choix ON rep_choix.idQuestion = rep_del.idQuestion
        WHERE choix.idParticipation = ?
          AND rep_choix.id = ?';
  $query = $pdo->prepare($sql);
  $query->execute([$idParticipation,$idReponse]);
  $sql = 'INSERT INTO choix(idParticipation,idReponse)
         VALUES(?,?)';
  $query = $pdo->prepare($sql);
  $query->execute([$idParticipation,$idReponse]);
  remove_empty($idReponse);
}

/*
Ajoute une réponse à une question, et la choisie
paramètres :
  $idParticipation
  $idQuestion
  $reponse : texte de la nouvelle réponse
*/
function add_choix($idParticipation,$idQuestion,$reponse){
  global $pdo;
  //TODO

  set_choix($idParticipation,$idReponse);
}


/*
Retire les réponses ajoutées qui ne sont plus utilisées (dans le cas des questions ouvertes)
paramètre :
  $idReponse : id d'une reponse. On va vérifier les autres réponses à la même question
*/
function remove_empty($idReponse){
  global $pdo;
//TODO
}

/*
Relie une participation à l'utilisateur correspondant
paramètres :
  $idUtilisateur
  $idPArticipation
*/
function set_utilisateur($idUtilisateur,$idParticipation){
  global $pdo;
//TODO
}

/*
retourne le lien vers une participation
paramètre :
  $token
retour :
  le lien
*/
function get_url_participation($token){ //
  return URL_INDEX.'?page=participation&token='.$token;
}











?>
