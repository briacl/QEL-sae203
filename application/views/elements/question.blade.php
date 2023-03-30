@php ($position=1)
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
    @if ($reponse['ouverte'])
          @if((strlen($reponse['reponse'])<1) || true)
                  <li>
                    <input id="reponseouverte" position="{{$position}}" name="reponseouverte">&nbsp;<label for="reponseouverte">Votre propre réponse</label>
                  </li>
                  <li>
                    <a class="nosboutons nosboutons-1" href="javascript:get_url_choix_plus()">Valider</a>  
                  </li>
            @else
                  <li>Une réponse personnalisée était permise</li>
            @endif
    @endif
    @php ($position++)
    @endforeach
  </ul>

</div>
<script language="javascript">
  function get_url_choix_plus(){
    const token = '{!!$participation['token']!!}';
    const baseUrlProtocol = document.location.protocol;
    const baseUrlHostname = document.location.hostname;
    const baseUrl = new URL(`${baseUrlProtocol}//${baseUrlHostname}?page=choix`);
    const idQuestion = "{!!$question['idQuestion']!!}";
    const reponseOuverte = document.getElementById('reponseouverte').value;
    const position = document.getElementById('reponseouverte').getAttribute('position');
    baseUrl.searchParams.append('reponseouverte',reponseOuverte)
    baseUrl.searchParams.append('token',token);
    baseUrl.searchParams.append('idquestion',idQuestion);
    baseUrl.searchParams.append('position', position);
    document.location.href = baseUrl.href;
  }
</script>