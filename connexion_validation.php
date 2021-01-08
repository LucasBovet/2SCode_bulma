<?php
    $succes = false; //variable pour l'affichage du message de succès
    $error = null; //variable pour l'affichage du message d'erreur

    include 'config.inc.php'; //inclusion du code de configuration
 
    if(isset($_POST['login_form'])){ //boucle de requète SQL, vérification que la variable existe
            $email = trim($_POST['mail_connexion']); //variable pour l'email, supression des espaces

            $req = $sql_connection->prepare('SELECT COUNT(*) AS nbrUsers FROM users WHERE mail = :email'); //préparation de la requète SQL 
            $req->bindValue(':email', $email); //association des valeurs
            $req->execute(); //execution de la requète

            $res = $req->fetch(PDO::FETCH_ASSOC); //récuperation des informations dans la base de donée

            if($res['nbrUsers'] == 1){
                $req = $sql_connection->prepare('SELECT id, password FROM users WHERE mail = :email'); //préparation de la requète SQL 
                $req->bindValue(':email', $email); //association des valeurs
                $req->execute(); //execution de la requète

                $res = $req->fetch(PDO::FETCH_ASSOC); //récuperation des informations dans la base de donnée


                if(password_verify($_POST['password_connexion'], $res['password'])){ //verification du hachage des mots de passe

                    $_SESSION['logged'] = true; //création de session
                    $_SESSION['id'] = $res['id']; //stockage de l'id dans une variable

                    
                    $succes = true; //changement de valeur de la variable de succès

                    

                }
                else{
                    $error = 'Identifiant invalides';//messages d'erreurs
                    
                  
                }
            }
                else{
                    $error = 'Identifiant invalides';
                    
                }
    
                if($succes === true){
                echo '<div class="notification is-success">';
                echo 'Vous êtes bien connecté.';
                echo '</div>';
                echo '<script>setTimeout(() =>{window.location.href = "/";},2000)</script>';
                }

                if($error !== null){
                echo '<div class="notification is-danger">';
                echo $error;
                echo '</div>';
                }
        
    }
