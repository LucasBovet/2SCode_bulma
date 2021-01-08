<?php

if (isset($_GET['warning'])) {
  echo '<div class="notification is-warning">';
  echo 'Veuillez vous connecter pour poster un message sur le forum';

  echo '</div>';
}

include 'connexion_validation.php'

?>
<form method='POST' action="connexion">
  <div class="form_container">
    <div class="field">
      <label class="label">E-Mail</label>
      <div class="control">
        <input name='mail_connexion' class="input" type="email" placeholder="ex john.doe@gmail.com">
      </div>
    </div>

    <div class="field">
      <label class="label">Mot de passe</label>
      <div class="control">
        <input name='password_connexion' class="input" type="password" placeholder="*********">
      </div>
    </div>
    <div class="field is-grouped">
      <div class="control">
        <button type='submit' name='login_form' class="button is-link">Se connecter</button>
      </div>

    </div>
  </div>
</form>