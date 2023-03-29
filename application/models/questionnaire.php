<?php
require_once 'application/core/database.php';


/*
  Crée un questionnaire
  paramètre :
    $donnees : les informations sous forme de tableau associatif
  retour :
    L'id du questionnaire créé
*/
 function creer_questionnaire($donnees){ //
   global $pdo;
   $sql = 'INSERT INTO questionnaire(tokenAdmin,tokenUser,titre,fin,debut)
           VALUES(?,?,?,?,NOW())';
   $query = $pdo->prepare($sql);
   extract($donnees);
   $query->execute([$tokenAdmin,$tokenUser,$titre,$fin]);
   $id = $pdo->lastInsertId();
   return $id;
 }


/*
  Obtient les informations de base d'un questionnaire
  paramètre :
    $token : token admin
  retour :
    Le questionnaire, sous forme d'un tableau associatif
    On fournit en plus :
      adminUrl : lien vers la page d'Administration
      userUrl : lien vers la page destinée à inviter les participants
*/
 function get_questionnaire_by_token_admin($token){ //
   global $pdo;
   $sql = 'SELECT * FROM questionnaire WHERE tokenAdmin = ?';
   $query = $pdo->prepare($sql);
   $query->execute([$token]);
   $result = $query->fetch();
   if ($result===FALSE) return NULL;
   $result['adminUrl']= get_admin_url($result['tokenAdmin']);
   $result['userUrl']= get_user_url($result['tokenUser']);
   update_statut($result);
   return $result;
}

/*
  Obtient les informations de base d'un questionnaire
  paramètre :
    $token : token d'invitation
  retour :
    Le questionnaire, sous forme d'un tableau associatif
*/
function get_questionnaire_by_token_user($token){ //
  global $pdo;
  $sql = 'SELECT * FROM questionnaire WHERE tokenUser = ?';
  $query = $pdo->prepare($sql);
  $query->execute([$token]);
  $result = $query->fetch();
  if ($result=== FALSE) return NULL;
  update_statut($result);
  return $result;
}

/*
  Obtient les informations de base d'un questionnaire
  paramètre :
    $id : son identifiant
  retour :
    Le questionnaire, sous forme d'un tableau associatif
    On fournit en plus :
      adminUrl : lien vers la page d'Administration
      userUrl : lien vers la page destinée à inviter les participants
*/
function get_questionnaire_by_id($id){ //
  global $pdo;
  $sql = 'SELECT * FROM questionnaire WHERE id = ?';
  $query = $pdo->prepare($sql);
  $query->execute([$id]);
  $result = $query->fetch();
  if ($result=== FALSE) return NULL;
  $result['adminUrl']= get_admin_url($result['tokenAdmin']);
  $result['userUrl']= get_user_url($result['tokenUser']);
  update_statut($result);
  return $result;
}

/*
Modifie le statut d'un questionnaire
paramètres :
  $id : identifiant du questionnaire
  $statut : nouveau statut
*/
function set_statut($id,$statut){
  global $pdo;
  $sql = 'UPDATE questionnaire SET statut = ? WHERE id = ?';
  $query = $pdo->prepare($sql);
  $query->execute([$statut,$id]);
  $result = $query->fetch();
  if ($result=== FALSE) return NULL;
  update_statut($result);
}

/*
Vérifie si un questionnaire est terminé, et met à jour son statut si nécessaire
paramètre :
  &$questionnaire : le questionnaire (sous forme de tableau associatif) à vérifier
    et modifier si nécessaire
*/
function update_statut(&$questionnaire){
  //TODO
}

/*
Relie un questionnaire au compte de son créateur
paramètres :
  $idUtilisateur
  $idQuestionnaire
*/
function set_owner($idUtilisateur,$idQuestionnaire){
  global $pdo;
//TODO
}


/*
retourne le lien vers la page d'administration
paramètre :
  $token : le token d'administration
retour :
  le lien
*/
function get_admin_url($token){ //
  return URL_INDEX.'?page=admin&token='.$token;
}

/*
retourne le lien vers la page d'invitation
paramètre :
  $token : le token d'invitation
retour :
  le lien
*/
function get_user_url($token){ //
  return URL_INDEX.'?page=questionnaire&token='.$token;
}









?>
