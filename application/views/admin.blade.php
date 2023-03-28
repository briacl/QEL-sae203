@extends('templates.main')

@section('content')
<h2>Administration du questionnaire</h2>
<h3>{!!make_icon('pencil')!!}{{$questionnaire['titre']}}</h3>
<h3>{!!make_icon('calendar')!!} Clôture à {{format_date($questionnaire['fin'])}}</h3>

<h2>Questions : </h2>
<ul>
@foreach($questions as $question)
  <li>{{$question['question']}}</li>
@endforeach
</ul>



<h3>{!!make_icon('info-square')!!} Lien vers cette page (pour vous) <br>
      <code>{!!$questionnaire['adminUrl']!!}</code>
</h3>

@endsection

@section('cta')


<h3>{!!make_icon('link','Lien à partager')!!}  <br>
   <code>{!!$questionnaire['userUrl']!!}</code></h3>

@endsection
