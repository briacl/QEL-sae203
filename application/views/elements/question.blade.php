<div class="question">
  <h3>{{$question['question']}}</h3>
  <ul>
    @foreach($question['reponses'] as $reponse)
    <li>
      <a href="{!!get_url_choix($reponse,$participation)!!}">
      @if($reponse['choix'])
      <div class="ok">{!!make_icon('check','','icon-ok')!!}</div>
      @endif
      @php($pourcent = $question['total']==0 ? 0 : ((int)((100*$reponse['count'])/ $question['total'])))
      <div class="pourcent" style="width:{{$pourcent}}%"></div> {{$reponse['reponse']}}</a>
      <p>{{$pourcent}}%</p> Au lieu de juste: {{$reponse['reponse']}}</a>
    </li>
    @endforeach
  </ul>

</div>
