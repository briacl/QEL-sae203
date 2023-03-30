<h3>{!!make_icon('pencil')!!} <label for="question">Question </label>
    <input type="text" name="question" id="question" placeholder="Quel est votre personnage de fiction préféré ?" required/></h3>
    <h3>{!!make_icon('check')!!} <label for="ouverte">Question ouverte <small>le parictipant peut ajouter sa propre réponse</small></label> <input type="checkbox" value="on" id="ouverte" name="ouverte"></h3>
<h3>{!!make_icon('group')!!} <label for="reponses">Réponses proposées <small>(Une par ligne)</small></label>   <br>
   <textarea id="reponses" name="reponses" required rows="5" cols="25"></textarea>
</h3>
