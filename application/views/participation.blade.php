@extends('templates.main')

@section('content')
<h2>{{$questionnaire['titre']}}</h2>

<div class="questions">
  @foreach($questions as $question)
    @include('elements.question', compact("question","participation","questionnaire"))
  @endforeach
</div>
@endsection
