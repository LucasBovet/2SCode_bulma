<?php
if (check_logged()) {


?>

  <div class="container_body">
    <p>Bienvenu sur la section profil de Swiss Student Code,<br>
      Vous pourrez ici vous connecter à vous inscrire à la plateforme, vous connecter, éditer votre profil, etc...
      Veuillez sélectionner une catégorie ci-dessous:</p>
  </div>
  <div class="buttons_container">
    <a href="profil_edit"><button class="button is-link is-outlined">Editer votre profil</button></a><br>
  </div>

<?php
} else {


?>

  <div class="container_body">
    <p>Bienvenu sur la section profil de Swiss Student Code,<br>
      Vous pourrez ici vous connecter à vous inscrire à la plateforme, vous connecter, éditer votre profil, etc...
      Veuillez sélectionner une catégorie ci-dessous:</p>
  </div>
  <div class="buttons_container">
    <a href="connexion"><button class="button is-link is-outlined">Connexion</button></a><br>
    <a href="inscription"><button class="button is-link is-outlined">Inscription</button></a>
  </div>

<?php
}
?>