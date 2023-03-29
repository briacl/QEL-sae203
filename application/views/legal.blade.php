@extends('templates.main')

@section('content')

<footer class="footer">
          <div class="footer_background">
            <section class="section">
              <div class="footer_columns-wrapper">
                <div class="footer_column">
                  <div class="footer_row">
                    <span class="footer_row-title">Mentions légales</span>
                    <div class="footer_content-wrapper" data-dropdown="content">
                      <ul class="footer_liens-list">
                        <li class="footer_liens-list-item"><a href=""></a>Editeur : qel</li>
                        <li class="footer_liens-list-item"><a href=""></a>Hébergeur : l'IUT de Lens</li>
                        <li class="footer_liens-list-item">Développeurs : MMI Création Team 13, <a class="foooter_liens" href="https://sae203.briac.cf/index.php?page=briac">Loic Courbet et Briac Le Meillat</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="footer_column">
                  <div class="footer_row">
                    <span class="footer_row-title">Conditions d'utilisation</span>
                    <div class="footer_content-wrapper" data-dropdown="content">
                      <ul class="footer_liens-list">
                        <li class="footer_liens-list-item"><a href=""></a>Qel : Questionnaire en Ligne est un site internet offrant la possibilité
                            à ses utilisateurs de créer des questionnaires sur le thème de leur choix
                            avec diverses options de réponses nommées par le créateur luiu-même
                        </li>
                        <li class="footer_liens-list-item"><a href=""></a>Le créateur du questionnaire également ajouter une date limite
                            de réponse afin de bloquer l'accès au questionnaire une fois le délai dépassé.
                            Qel offre également la possibilité de créer un compte afin d'accéder à diverses informations.
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="footer_column">
                  <div class="footer_row">
                    <span class="footer_row-title">Ce que vous acceptez</span>
                    <div class="footer_content-wrapper" data-dropdown="content">
                      <ul class="footer_liens-list">
                        <li class="footer_liens-list-item"><a href=""></a>Les Conditions Générales d'Utilisation ou "CGU" s'appliquent à
                            toute les pages accessibles sur le site, ainsi que leur contenu, où les services qui vous sont proposés par
                            le site Qel : Questionnaire En Ligne
                        </li>
                        <li class="footer_liens-list-item"><a href=""></a>L'utilisation du site signifie votre acceptation des "CGU".
                            Si vous ne les acceptez pas, veuillez arrêter le site. En créant des questionnaires sur le site, vous vous engagez à
                            respecter les Conditions Générales d'Utilisation
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="footer_column">
                  <div class="footer_row">
                    <span class="footer_row-title">société</span>
                    <div class="footer_content-wrapper" data-dropdown="content">
                      <ul class="footer_liens-list">
                        <li class="footer_liens-list-item"><a class="foooter_liens" href="https://sae203.briac.cf/index.php?page=articles">Page des articles</a></li>
                        <li class="footer_liens-list-item"><a href=""></a>Article 1</li>
                        <li class="footer_liens-list-item"><a href=""></a>Article 2</li>
                        <li class="footer_liens-list-item"><a href=""></a>Article 3</li>
                        <li class="footer_liens-list-item"><a href=""></a>Article 4</li>
                        <li class="footer_liens-list-item"><a href=""></a>Article 5</li>
                      </ul>
                      
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </footer>
@endsection

@section('cta')
<h3><a href="{{URL_INDEX}}?page=create">{!!make_icon('calendar-plus',' Créez votre questionnaire maintenant !','icon-neutral')!!}</a></h3>
@endsection
