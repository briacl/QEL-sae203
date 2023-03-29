@extends('templates.main')
@section('content')


<div class="articles">
        <h2>Liste des Articles<h2>
</div>


<div class="articles_columns-wrapper">
                <div class="articles_column">
                  <div class="articles_row">
                    <span class="articles_row-title">Responsabilité de l’Éditeur</span>
                    <div class="articles_content-wrapper" data-dropdown="content">
                      <ul class="articles_liens-list">
                        <li class="articles_liens-list-item">Tout dysfonctionnement du serveur ou du réseau ne peut engager la responsabilité de l’Éditeur.
                            De même, la responsabilité du site ne peut être engagée en cas de force majeure ou du fait imprévisible et insurmontable d'un tiers.
                            Le site [votre site] s'engage à mettre en œuvre tous les moyens nécessaires pour garantir la sécurité et la confidentialité des données.
                            Toutefois, il n’apporte pas une garantie de sécurité totale.
                            L’Éditeur se réserve la faculté d’une non-garantie de la fiabilité des sources, bien que les informations diffusées su le site soient réputées fiables.
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="articles_column">
                  <div class="articles_row">
                    <span class="articles_row-title">Évolution des conditions générales d’utilisation</span>
                    <div class="articles_content-wrapper" data-dropdown="content">
                      <ul class="articles_liens-list">
                        <li class="articles_liens-list-item">Le site [votre site] se réserve le droit de modifier les clauses de ces conditions générales
                            d’utilisation à tout moment et sans justification.
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="articles_column">
                  <div class="articles_row">
                    <span class="articles_row-title">Durée du contrat</span>
                    <div class="articles_content-wrapper" data-dropdown="content">
                      <ul class="articles_liens-list">
                        <li class="articles_liens-list-item">La durée du présent contrat est indéterminée. Le contrat produit ses effets à l'égard de l'Utilisateur
                            à compter du début de l’utilisation du service.
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="articles_column">
                  <div class="articles_row">
                    <span class="articles_row-title">Droit applicable et juridiction compétente</span>
                    <div class="articles_content-wrapper" data-dropdown="content">
                      <ul class="articles_liens-list">
                        <li class="articles_liens-list-item">Le présent contrat dépend de la législation française. </br>
                            En cas de litige non résolu à l’amiable entre l’Utilisateur et l’Éditeur, les tribunaux de [nom de ville] sont compétents pour régler le contentieux.
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
</div>

@endsection

@section('cta')
<h3><a href="{{URL_INDEX}}?page=create">{!!make_icon('calendar-plus',' Créez votre questionnaire maintenant !','icon-neutral')!!}</a></h3>
@endsection