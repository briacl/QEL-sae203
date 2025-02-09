<?php

class Controller
{
    // Vous pouvez ajouter des méthodes communes ici
    protected function view($view, $data = [])
    {
        extract($data);
        require "application/pages/{$view}.php";
    }

    protected function json($data)
    {
        header('Content-Type: application/json');
        echo json_encode($data);
    }
}