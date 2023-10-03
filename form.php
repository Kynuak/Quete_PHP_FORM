<form  action="thanks.php"  method="post">
<div>
    <label  for="lastname">Nom :</label>
    <input  type="text"  id="lastname"  name="user_lastname">
</div>
<div>
    <label  for="firstname">Prénom :</label>
    <input  type="text"  id="firstname"  name="user_firstname">
</div>
<div>
    <label  for="courriel">Email :</label>
    <input  type="email"  id="courriel"  name="user_email">
</div>
<div>
    <label for="telephone">Téléphone :</label>
    <input type="text" id="telephone" name="user_telephone">
</div>
<div>
    <label  for="theme_message">Sujet :</label>
    <select id="theme_message"  name="user_sujet">
        <option value="Informations">Demande d'informations</option>
        <option value="Recrutement">Recrutement</option>
        <option value="Réclamations">Réclamations</option>
    </select>
</div>
<div>
    <label  for="message">Message :</label>
    <textarea  id="message"  name="user_message"></textarea>
</div>
<div  class="button">
    <button  type="submit">Envoyer votre message</button>
</div>
</form>