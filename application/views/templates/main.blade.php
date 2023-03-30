<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Qel : Questionnaires en ligne</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bellota&family=Monoton&family=Titillium+Web:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{URL_CSS}}style.css">
  </head>
  <body>
    @isset($_SESSION['info'])
      <p id="info">{{$_SESSION['info']}}</p>@php unset($_SESSION['info']); @endphp
    @endisset
    <a href="{{URL_INDEX}}" class = "hh">
       <img src="{{URL_IMG}}Qelh.png"/>
    </a>

          <!-- Menu sur le côté -->
    <div class="menu">
        <!-- Utilisation d'une checkbox -->
      <input type="checkbox" id="hamburger">
        <!-- Label de la checkbox -->
      <label id="hamburger-logo" for="hamburger">
        ☰
      </label>
        <!-- Le reste du menu -->
      <nav>
        <a href="{{URL_INDEX}}">{!!make_icon('home','Accueil')!!}</a>
        <a href="{{URL_INDEX}}?page=create">{!!make_icon('calendar-plus','Créer un questionnaire')!!}</a>

        @if(isset($_SESSION['idUtilisateur']))
        <a href="{{URL_INDEX}}?page=profile">{!!make_icon('calendar','Mes questionnaires')!!}</a>
        <a href="{{URL_INDEX}}?page=index&logout">{!!make_icon('log-out','Déconnexion')!!}</a>
        @else
        <a href="{{URL_INDEX}}?page=profile">{!!make_icon('log-in','Connexion')!!}</a>
        @endif
      </nav>
    </div>

    <main>
        @isset($titre)<h2>{{$titre}}</h2>@endisset
        @yield("content")
    </main>

    <div class="cta">
        @yield("cta")
    </div>

    <footer>
      <div class="footer_main">
        <div>
          &copy; MMI Création 2022-2023 -- tous droits réservés
        </div>
        <div>
          <a href="{{URL_INDEX}}?page=legal" class="mentions_link"> Mentions légales</a>
        </div>
      <div>
    </footer>
  </body>
</html>
