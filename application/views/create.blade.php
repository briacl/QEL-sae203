@extends('templates.main')
@section('content')

    <form action="{{URL_INDEX}}?page=create" method="post">


        <fieldset>
          <legend>Nouveau questionnaire</legend>

      <h3>{!!make_icon('notepad')!!} <label for="titre">Titre </label>
          <input type="text" name="titre" id="titre" placeholder="Films, livres et animés" required/></h3>
      <h3>{!!make_icon('calendar')!!} <label for="fin">Réponses possibles jusqu'au</label>
          <input type="datetime-local" name="fin" id="fin" value="{{substr((new DateTime())->add(DateInterval::createFromDateString('1 hour'))->format(DateTimeInterface::ISO8601),0,-8)}}"/></h3>
      </fieldset>

      <fieldset>
        <legend>Première question</legend >
      @include("elements.question_form")
    </fieldset>

      <h2><input type="submit" value="Créer ce questionnaire"></h2>
    </form>
@endsection
