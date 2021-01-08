 <?php



    $success = false; //variable pour l'affichage du message de succès
    $error = null; //variable pour l'affichage du message d'erreur



    if (isset($_POST['register_form'])) {
        $firstname = trim($_POST['firstname']); //variables de récuperation des informations du formulaire
        $lastname = trim($_POST['lastname']);
        $email = trim($_POST['mail']);
        $date = $_POST['date_of_birth'];
        $date = date_create_from_format('d/m/Y', $_POST['date_of_birth']);
        $password = $_POST['password'];
        $passwordRe = $_POST['re_password'];
        $city = $_POST['city'];



        if (!empty($firstname) && !empty($lastname)) { //verification que les champs nom et prénom ont bien été remplis
            if (checkdate($date->format('m'), $date->format('d'), $date->format('Y'))) { //formatage de la date

                if (filter_var($email, FILTER_VALIDATE_EMAIL)) { //fonction php pour la validation d'un email
                    $req = $sql_connection->prepare('SELECT COUNT(*) AS nbrUsers FROM users WHERE mail = :mail'); //préparation de la requète SQL 
                    $req->bindValue(':mail', $email); //association des valeurs
                    $req->execute(); //execution de la requète

                    $res = $req->fetch(PDO::FETCH_ASSOC); //verifie dans la base de donnée que l'email n'est pas déja utilisé

                    if ($res['nbrUsers'] == 0) { //verification que l'email n'est pas déja utilisé
                        if ($password === $passwordRe) { //verification que les mots de passes soyent identiques
                            $req = $sql_connection->prepare('INSERT INTO users ( firstname, lastname, date_of_birth, mail, password, city) VALUES ( :firstname, :lastname, :date_of_birth, :mail, :password,:city)'); //préparation de la requète SQL 
                            $req->bindValue(':firstname', $firstname); //association des valeurs
                            $req->bindValue(':lastname', $lastname); //association des valeurs
                            $req->bindValue(':mail', $email); //association des valeurs
                            $req->bindValue(':date_of_birth', date_format($date, 'Y-m-d'));
                            $req->bindValue(':password', password_hash($password, PASSWORD_DEFAULT)); //association des valeurs et hachage du mot de passe
                            $req->bindValue(':city', $city); //association des valeurs
                            $req->execute(); //execution de la requète


                            $success = true; //changement de valeur de la variable de succès
                        } else {
                            $error = 'Les mots de passes ne correspondent pas'; //messages d'erreurs
                        }
                    } else {
                        $error = 'Mail deja utilisé';
                    }
                } else {
                    $error = 'Mail invalide';
                }
            } else {
                $error = 'Date invalide';
            }
        } else {
            $error = 'Verifiez que tout les champs soyent remplis.';
        }
    }


    if ($success) { //affichage du message de succès
        echo '<div class="notification is-primary">';
        echo 'Votre inscription est réussie!';
        echo '</div>';
    } else {
        if ($error !== null) { //affichage des messages d'erreurs
            echo '<div class="notification is-danger">';
            echo $error;
            echo '</div>';
        }
    }


    ?>


