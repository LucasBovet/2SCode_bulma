<?php

$success = false; //variable pour l'affichage du message de succès
$error = null; //variable pour l'affichage du message d'erreur


if (isset($_POST['post_forum'])) {
    $title = trim($_POST['title']); //variables de récuperation des informations du formulaire
    $message = trim($_POST['message']);
    if (!empty($title) && !empty($message)) { //verification que tout les champs ont bien été remplis


        $req = $sql_connection->prepare('INSERT INTO forum (title, message, date, user) VALUES ( :title, :message, NOW(), :user)'); //préparation de la requète SQL 

        $req->bindValue(':title', $title); //association des valeurs
        $req->bindValue(':message', $message);
        $req->bindValue(':user', $_SESSION['id']);
        $req->execute(); //execution de la requète

        $success = true; //changement de valeur de la variable de succès
    } else {
        $error = 'Verifiez que tout les champs soyent remplis.'; //messages d'erreurs
    }
    if ($success) { //affichage du message de succès
        echo '<div class="notification is-primary">';
        echo 'Votre message à bien été envoyé!';
        echo '</div>';
    } else {
        if ($error !== null) { //affichage des messages d'erreurs
            echo '<div class="notification is-danger">';
            echo $error;
            echo '</div>';
        }
    }
}
