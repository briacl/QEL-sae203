<?php
require_once 'application/core/database.php';


/*
Crée une nouvelle question dans un questionnaire
paramètres :
  $idQuestionnaire : l'id du questionnaire
  $question : le texte de la question
  $ouverte : indique si on pourra ajouter de nouvelles réponses (optionnel)
retour :
  l'id de la question crée
*/
 function creer_question($idQuestionnaire,$question,$ouverte=false){ //
   global $pdo;
   $sql = 'INSERT INTO question(idQuestionnaire,question)
           VALUES(?,?)';
   $query = $pdo->prepare($sql);
   $query->execute([$idQuestionnaire,$question]);
   $id = $pdo->lastInsertId();
   return $id;
 }

 /*
 Crée une nouvelle reponse à une question
 paramètres :
   $idQuestion : id de la question
   $position : ordre de la réponse (à partir de un)
   $reponse : le texte de la réponse
 retour :
   l'id de la réponse crée
 */
 function creer_reponse($idQuestion,$position,$reponse){ //
   global $pdo;
   $sql = 'INSERT INTO reponse(idQuestion,position,reponse)
           VALUES(?,?,?)';
   $query = $pdo->prepare($sql);
   $query->execute([$idQuestion,$position,$reponse]);
   $id = $pdo->lastInsertId();
   return $id;
 }

/*
Crée une question avec ses réponses
paramètres :
    $id : id du questionnaires
    $question : texte de la question
    $reponses : texte des réponses, une par ligne
    $ouverte : indique si on pourra ajouter de nouvelles réponses (optionnel)
*/
 function creer_question_reponse($id,$question,$reponses,$ouverte=false){ //
   $idQuestion = creer_question($id,$question);

   //////////// Construction des Réponses

   // découpage en lignes et nettoyage
   $reponses = explode("\n",$reponses);
   foreach($reponses as &$value) {
     $value = htmlspecialchars(trim($value));
   }
   $reponses = array_filter($reponses);

   // création des réponses
   $position = 1;
   foreach($reponses as $reponse){
     creer_reponse($idQuestion,$position,$reponse);
     $position++;
   }
 }

/*
Obtient toutes les questions d'un questionnaire, avec les réponses
paramètre :
  $id : l'id du questionnaire
retour :
  Un tableau de questions. Chaque question est un tableau associatif contenant :
    -les informations de base d'une question
    -un tableau de réponses (chacune un tableau associatif avec ses informations de base)
*/
 function get_questions_by_questionnaire_id($id){//
   global $pdo;
   $sql = 'SELECT *, FALSE AS choix FROM question
          JOIN reponse ON reponse.idQuestion = question.id
          WHERE question.idQuestionnaire = ?
          ORDER BY reponse.position';
   $query = $pdo->prepare($sql);
   $query->execute([$id]);
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
 Obtient toutes les questions d'un questionnaire, avec les réponses et le
 nombre de fois où elles ont été choisire
 paramètre :
   $id : l'id du questionnaire
 retour :
   Un tableau de questions. Chaque question est un tableau associatif contenant :
     -les informations de base d'une question
     -total : le nombre total de réponses apportées à cette question (somme des count)
     -un tableau de réponses, chacune un tableau associatif avec :
          -ses informations de base
          -count : le nombre de fois où cette réponse a été choisie
 */
 function get_freq_by_questionnaire_id($id){
   global $pdo;
      $sql = 'SELECT idQuestion,reponse,reponse.id AS idReponse,COUNT(idParticipation) AS count FROM question
             JOIN reponse ON reponse.idQuestion = question.id
             LEFT JOIN choix ON choix.idReponse = reponse.id
             WHERE question.idQuestionnaire = ?
             GROUP BY reponse.id
             ORDER BY idQuestion,reponse.position';
      $query = $pdo->prepare($sql);
      $query->execute([$id]);

      $all = $query->fetchall();

      $questions = [];
      foreach($all as $question){
        $idQuestion = $question['idQuestion'];
        if(!array_key_exists($idQuestion,$questions)){
          $question['total'] = 0;
          $questions[$idQuestion] = $question;
        }
        $questions[$idQuestion]['reponses'][] = $question;
        $questions[$idQuestion]['total'] += $question['count'];
      }

      return $questions;

 }

/*
Retourne un lien permettant de compter un choix
paramètres :
  $reponse  : la réponse choisie, sous forme de tableau associatif (id doit être défini)
  $participation : la participation correponsdante (token doit être défini)
retour :
  Le lien
*/
 function get_url_choix($reponse, $participation){
   return URL_INDEX.'?page=choix&token='.$participation['token'].'&idReponse='.$reponse['id'];
 }















?>
