@extends('templates.main')
@section('content')

  <h2>Message de Github</h2>
    <p>
      Hello, les devs ! Github vous répond: {!!$gitreturn!!}
    </p>

@endsection

@section('cta')
<h3><a href="{{URL_INDEX}}?page=create">{!!make_icon('calendar-plus',' Créez votre questionnaire maintenant !','icon-neutral')!!}</a></h3>
@endsection
