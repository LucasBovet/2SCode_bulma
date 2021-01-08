<div class="container_body">
    <h1>Forum - HTML</h1>    
</div>
<div class="img_forum">
    <img src="images/html_bleu.png" alt="">

</div>
<br>

<?php


$req = $sql_connection->prepare('SELECT * FROM forum '); //préparation de la requète SQL
$req->execute(); //execution de la requète

$res = $req->fetchAll(PDO::FETCH_ASSOC); //récuperation des informations dans la base de donné


foreach ($res as $val) {

    $reqUser = $sql_connection->prepare('SELECT firstname, lastname from users WHERE id = :id'); //préparation de la requète SQL
    $reqUser->bindValue(':id', $val['user']);  //association des valeurs
    $reqUser->execute(); //execution de la requète

    $user = $reqUser->fetch(PDO::FETCH_ASSOC); //récuperation des informations dans la base de donné

    echo '<div class="container_explore">'; //affichage des messages depuis la base de donnée
    echo '<article class="message is-info">';
    echo '<div class="message-header">';
    echo $val['title']; //affichage du titre
    echo ' | ';
    echo $user['firstname'].' '.$user['lastname']; //affichage du nom de l'utilisateur
    echo '</div>';
    echo '<div class="message-body">';
    echo $val['message']; //affichage du message
    echo '</div>';
    echo '</article>';
    echo '</div>';
}




?>