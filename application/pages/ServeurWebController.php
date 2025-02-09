<?php

require_once 'application/core/Controller.php';
use Illuminate\Support\Facades\DB;  // Pour utiliser DB et effectuer des requêtes SQL brutes

class ServeurWebController extends Controller
{
    public function index()
    {
        error_log('ServeurWebController index method called');
        // Exécuter une requête SQL pour récupérer les données de la table 'Tracks' dans la base secondaire
        $data = DB::connection('second_db')->select('SELECT * FROM Tracks');  // 'second_db' est la connexion à la base secondaire

        // Retourner la vue Blade avec les données récupérées
        return view('pages.serveurweb', ['data' => $data]);
    }

    public function apiServeurweb()
    {
        error_log('ServeurWebController apiServeurweb method called');
        // Exécuter la même requête pour récupérer les données en format JSON
        $data = DB::connection('second_db')->select('SELECT * FROM Tracks');

        // Retourner les données en JSON
        return view('pages.apiServeurweb');
    }
}