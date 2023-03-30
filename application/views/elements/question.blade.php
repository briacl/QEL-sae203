<div class="question">
  <h3>{{$question['question']}}</h3>
  <ul>
    @foreach($question['reponses'] as $reponse)
    <li>
      <a href="{!!get_url_choix($reponse,$participation)!!}">
      @if($reponse['choix'])
      <div class="ok">{!!make_icon('check','','icon-ok')!!}</div>
      @endif
      @if ($questionnaire['visibilite']=="toujours" | true)
        @php($pourcent = $question['total']==0 ? 0 : ((int)((100*$reponse['count'])/ $question['total'])))
          <div class="pourcent" style="width:{{$pourcent}}%"></div> {{$reponse['reponse']}}</a>
          @if (   ($questionnaire['visibilite']=='toujours') ||                                           
                  ($questionnaire['visibilite']=='apresfin') && has_passed($questionnaire['fin']) ||
                  (($questionnaire['visibilite']=='apresreponse') && $reponse['choix'] ) )
            <p>{{$pourcent}}%</p> ont choisi cette réponse</a>
          @endif
      @endif
    </li>
    @endforeach
  </ul>

</div>
