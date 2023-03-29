@extends('templates.main')

@section('content')

<div class="form-box_inscription">
    <form class="form_inscription_compte">
        <span class="title_inscription_compte">Inscription</span>
        <span class="subtitle_inscription_compte">Ce n'est pas obligatoire et ne le sera jamais</span>
        <div class="form-container_inscription_compte">
            <input type="email" class="input" placeholder="Email">
            <input type="password" class="input" placeholder="Définir un mot de passe">
        </div>
        <button>S'inscrire</button>
    </form>
</div>

<div class="form-box_connexion">
    <form class="form_connexion_compte">
        <span class="title_connexion_compte">Connexion</span>
        <span class="subtitle_connexion_compte">Pour celles et ceux qui se sont tout de même inscrit(e)s</span>
        <div class="form-container_connexion_compte">
            <input type="email" class="input" placeholder="Identifiant">
            <input type="password" class="input" placeholder="Mot de passe">
        </div>
        <button>Se connecter</button>
    </form>
</div>


@endsection