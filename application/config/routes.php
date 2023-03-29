<?php
require_once 'application/core/routing.php';

// Configuration des routes, c'est à dire l'association entre les pages demandées
// et le code php à exécuter

// Le premier paramètre indique le fichier php à exécuter. Par exemple,
// index correspond à pages/index.php


// Les paramètres suivants indiquent les éventuels valeurs attendues et si il s'agit de GET ou POST
// Le fichier php correspondant n'est lancé que si tous les paramètres
// existent. Les paramètres validés sont automatiquement convertis
// en variables php de même nom

add_route('index'); // route par défaut

add_route('create'); // Création d'un nouvel évènement : formulaire
add_route('create',['titre','fin','question','reponses'],'POST'); // creation proprement dite

add_route('admin',['token'],'GET'); // Affichage du questionnaire, coté administrateur

add_route('questionnaire',['token'],'GET'); // Création d'une participation

add_route('participation',['token'],'GET'); // Affichage de la participation

add_route('choix',['token', 'idReponse'],'GET'); // choix d'une réponse

add_route('briac'); // tentative réussie de création d'une nouvelle page (devenant l'exemple de création d'une page)

add_route('mentions'); // création page des mentions légales

add_route('articles'); // création page des articles

add_route('github_webhook',[],'GET'); //appel manuel
add_route('github_webhook',[],'POST'); //pour github
?>
