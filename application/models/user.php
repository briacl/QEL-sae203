<?php
require_once 'application/core/database.php';

/*
Esssaie de connecter l'utilisateur
- Si email/password correspondent, la connexion est ok
- Sinon, si le compte existe c'est une erreur
- Sinon, on créé le compte
Paramètres :
  $nom
  $email
  $password
Retour :
  en cas d'échec : NULL (+ info dans la session)
  en cas de réussite : un tableau associatif avec les clefs id, email et nom
*/
function log_in($nom, $email, $password){
  global $pdo;

  // Vérification du login/mot de passe
  //TODO

  // Test si le login est déjà utilisé

}

/*
Cherche les questionnaires créés par un utilisateur
Paramètre :
  $idUtilisateur
Retour :
  Un tableau contenant les questionnaires (sous forme de tableaux assoicatifs)
  On fournit pour chaque questionnaire :
    - ses informations de base
    - url : le lien vers la page d'administration correspondante
*/
function get_all_questionnaire_admin($idUtilisateur){
  global $pdo;
//TODO
  return NULL;
}

/*
Cherche les questionnaires auxquel un utilisateur a répondu
Paramètre :
  $idUtilisateur
Retour :
  Un tableau contenant les questionnaires (sous forme de tableaux assoicatifs)
  On fournit pour chaque questionnaire :
    - ses informations de base
    - url : le lien vers la participation correspondante
*/
function get_all_questionnaire_user($idUtilisateur){
  global $pdo;
  //TODO
  return NULL;
}



?>
