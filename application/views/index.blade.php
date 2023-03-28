@extends('templates.main')
@section('content')
    <h2>Le site pour créer et partager rapidement vos questionnaires !</h2>
    <ul>
      <li>Pas d'incription nécessaire, la question et la liste des choix suffisent</li>
      <li>En option, possiblité de rendre les résultats visibles seulement à la fin</li>
      <li>Ce service est entièrement gratuit !</li>
    </ul>
@endsection

@section('cta')
<h3><a href="{{URL_INDEX}}?page=create">{!!make_icon('calendar-plus',' Créez votre questionnaire maintenant !','icon-neutral')!!}</a></h3>
@endsection
