@extends('templates.main')
@section('content')
    <h2>Test d'ajout d'une nouvelle page!</h2>
    <ul>
      <li>regardé ce soir</li>
    </ul>
@endsection

@section('cta')
<h3><a href="{{URL_INDEX}}?page=create">{!!make_icon('calendar-plus',' Créez votre questionnaire maintenant !','icon-neutral')!!}</a></h3>
@endsection
