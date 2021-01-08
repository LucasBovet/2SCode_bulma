<?php

if (!check_logged()) { //variable de verification de connexion
    header('location: connexion?warning=true');
}

include 'forum_post_validation.php'; //inclusion du code de configuration

?>

<div class="container_body">
    <h1>Forum - HTML</h1>
</div>
<div class="img_forum">
    <img src="images/html_bleu.png" alt="">
</div>
<div class="form_container">

    <form method='POST' action="forum_post">
        <div class="form_container">
            <div class="field">
                <label class="label">Sujet de discution : </label>
                <div class="control">
                    <input name='title' class="input" type="text" placeholder="Titre du sujet de discution">
                </div>
            </div>

            <div class="field">
                <label class="label">Message : </label>
                <div class="control">
                    <textarea name='message' class='textarea' placeholder="Entrez votre message ici :"></textarea>
                </div>
            </div>
            <div class="field is-grouped">
                <div class="control">
                    <button type='submit' name='post_forum' class="button is-link">Envoyer</button>
                </div>

            </div>
        </div>
</div>