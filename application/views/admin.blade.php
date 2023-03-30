@extends('templates.main')

@section('content')
<h2>Administration du questionnaire</h2>
<h3>{!!make_icon('pencil')!!}{{$questionnaire['titre']}}</h3>
<h3>{!!make_icon('calendar')!!} Clôture à {{format_date($questionnaire['fin'])}}</h3>
<h3>{!!make_icon('task')!!}Statut:  {{ $questionnaire['statut'] == 'creation' ? 'Création' :  ($questionnaire['statut']=='publie'?'Publié': ($questionnaire['statut']=='termine' ? 'Terminé' : 'ERREUR')) }}</h3>
<h3>{!!make_icon('cog')!!}Condition d'affichage: {{ $questionnaire['visibilite'] == 'toujours' ? 'Toujours visible' :  ($questionnaire['visibilite']=='apresreponse'?'Après avoir répondu': ($questionnaire['visibilite']=='apresfin' ? 'Après la fin du formulaire' : 'ERREUR')) }}</h">
<h2>Questions : </h2>
<ul>
@foreach($questions as $question)
  <li>{{$question['question']}}</li>
@endforeach
</ul>



<h3><a href="{!!$questionnaire['adminUrl']!!}">{!!make_icon('info-square')!!} Lien vers cette page (pour vous)</a> <br>
      <code>{!!$questionnaire['adminUrl']!!}</code>
</h3>

@endsection

@section('cta')
<input name='tokenAdmin' type='hidden' value="{!!$questionnaire['tokenAdmin']!!}"/>
<a href="{{URL_INDEX}}?page=create&token={!!$questionnaire['tokenAdmin']!!}&ajout=1&questionnaireId={!!$questionnaire['id']!!}">{!!make_icon('link','Ajouter une question')!!}</a>
<a href="{{URL_INDEX}}?page=admin&token={!!$questionnaire['tokenAdmin']!!}&publie=1">{!!make_icon('link','Publier le questionnaire')!!}</a>
<h3><a href="{!!$questionnaire['userUrl']!!}">{!!make_icon('link','Lien à partager')!!}</a><br>
   <code>{!!$questionnaire['userUrl']!!}</code></h3>

@endsection
