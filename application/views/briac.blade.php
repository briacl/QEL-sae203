@extends('templates.main')
@section('content')

  <h2>et oui, c'est un easteregg, lol</h2>
    <p>
      au cas où,
      Un easter egg (terme anglais pour "oeuf de Pâques") est,
      en informatique ou dans les jeux vidéos une fonction cachée
      au sein d'un programme (image animée, jeu, message électronique,
      etc) accessible grâce à un mot-clé ou à une combinaison de touches
      ou de clics.
    </p>
    <p>
      source : <a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjN-r68rP_9AhXGCuwKHV3BArIQFnoECBkQAQ&url=https%3A%2F%2Ffr.wikipedia.org%2Fwiki%2FEaster_egg&usg=AOvVaw2YOc84NQhbdJJeaICsBJGr">wikipédia</a>
    </p>

@endsection

@section('cta')
<h3><a href="{{URL_INDEX}}?page=create">{!!make_icon('calendar-plus',' Créez votre questionnaire maintenant !','icon-neutral')!!}</a></h3>
@endsection
