<div class="question">
  <h3>{{$question['question']}}</h3>
  <ul>
    @foreach($question['reponses'] as $reponse)
    <li>
      <a href="{!!get_url_choix($reponse,$participation)!!}">
      @if($reponse['choix'])
      <div class="ok">{!!make_icon('check','','icon-ok')!!}</div>
      @endif
      {{$reponse['reponse']}}</a>
    </li>
    @endforeach
  </ul>

</div>
