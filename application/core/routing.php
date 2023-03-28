<?php // Gestion des routes (liens entre urls et code à exécuter)

$routes = [];

/*****
 *

 * page : l'url attendue est index.php?page=xxx
 *        la valeur est le nom du fichier (sans .php) à inclure. c'est ce fichier
 *        qui s'occuppe de cette page. ex: index correspond à pages/index.php
 * params : tableau  donnant les noms des paramètres attendus
 *       exemple : [ 'login', email']
 * method : methode (par défaut get)
 */

function add_route($page, $params = NULL, $method = 'GET'){
  global $routes;
  $routes[$page][] = ['params' => $params, 'method' => $method];
}

/******
* Applique les règles de routages définies (dans config/routes.php)
*/

function route(){
  global $routes;
  $page = isset($_GET['page']) ? $_GET['page'] : 'index';
  $log = "Page $page demandée<br>\n";// routes :".print_r($routes,true)." <br>\n";
  if (isset($routes[$page])) {
    $log .= "La page est dans les routes<br>\n";
    $rules = $routes[$page];
    foreach ($rules as  $rule) {
      $log .= "Test des règles pour ". $page ."<br> \n";
      $log .= print_r($rule,true)." <br>\n";
      $method = $rule['method'];
      if ($_SERVER['REQUEST_METHOD'] != $method) continue;
      $SRC = ($method == 'GET') ? $_GET : $_POST;
      $log .= "Méthode $method, valeurs transmises : ".print_r($SRC,true)." <br>\n";
      $attr = ['page'=>$page];
      $valid = true;
      if ($rule['params'] != NULL){
        $log .= "Vérifications des paramètres :<br>\n";
        foreach ($rule['params'] as $pname) {
          $log .= "$pname ";
          $valid = $valid && isset($SRC[$pname]);
          $log .= ($valid ? 'present' : 'absent')."<br>\n";
          if (!$valid) break;
          $attr[$pname] = $SRC[$pname];
        }
      }
      if ($valid){
        return ['name' => $page, 'params' => $attr];
      }
    }
  }
  global $blade;
  echo $blade->run('errors.404', ['log'=>$log]);
  exit();
}

?>
