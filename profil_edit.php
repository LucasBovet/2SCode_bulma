<div class="container_body">
    <h1>Votre profil :</h1>
</div>
<div class="img_forum">
    <img src="images/profil_icon.png" alt=""> 
</div><br>

<?php


$req = $sql_connection->prepare('SELECT * FROM users WHERE id = :id'); //préparation de la requète SQL 
$req->bindValue(':id', $_SESSION['id']);
$req->execute(); //execution de la requète

$res = $req->fetch(PDO::FETCH_ASSOC); //récuperation des informations dans la base de donnée


echo '<div class="container_edit">'; //affichage des informations depuis la base de donnée
echo '<article class="message is-info">';
echo '<div class="message-body">';
echo $res['lastname'];
echo '<br>';
echo $res['firstname'];
echo '<br>';
echo $res['date_of_birth'];
echo '<br>';
echo $res['mail'];
echo '<br>';
echo $res['city'];
echo '<br>';
echo '</div>';
echo '</article>';
echo '</div>';

?>