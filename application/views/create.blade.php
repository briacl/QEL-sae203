@extends('templates.main')
@section('content')

    <form action="{{URL_INDEX}}?page=create" method="post">
        <fieldset>
          @if ($ajout)
          <legend>Questionnaire en cours</legend>
          @else
          <legend>Nouveau questionnaire</legend>
          @endif

      <h3>{!!make_icon('notepad')!!} <label for="titre">Titre </label>
      @if ($ajout)
      {!!$questionnaire['titre']!!}
      @else
          <input type="text" name="titre" id="titre" placeholder="Films, livres et animés" required/>
      @endif
        </h3>

      <h3>{!!make_icon('calendar')!!} <label for="fin">Réponses possibles jusqu'au</label>
      @if ($ajout)
      {!!$questionnaire['fin']!!}
      @else
          <input type="datetime-local" name="fin" id="fin" value="{{substr((new DateTime())->add(DateInterval::createFromDateString('1 hour'))->format(DateTimeInterface::ISO8601),0,-8)}}"/>
       @endif 
        </h3>
      </fieldset>

      <fieldset>
      @if ($ajout)
        <legend>Autre question</legend >
      @else
        <legend>Première question</legend >
       @endif 
       
      @include("elements.question_form")
    </fieldset>
    @if ($ajout)
        <input name="id" type="hidden" value="{!!$id!!}"/>
        <input name="token" type="hidden" value="{!!$questionnaire['tokenAdmin']!!}"/>
        <input name="autre" type="hidden" value="autre"/>
      @endif
      <h2><input type="submit" value="{!!$ajout ? 'Ajouter une question' : 'Créer ce questionnaire'!!}"></h2>
    </form>
@endsection
