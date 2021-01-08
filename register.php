 <?php



    $success = false;
    $error = null;



    if (isset($_POST['register_form'])) {
        $firstname = trim($_POST['firstname']);
        $lastname = trim($_POST['lastname']);
        $email = trim($_POST['mail']);
        $date = $_POST['date_of_birth'];
        $date = date_create_from_format('d/m/Y', $_POST['date_of_birth']);
        $password = $_POST['password'];
        $passwordRe = $_POST['re_password'];
        $city = $_POST['city'];

       

            if (!empty($firstname) && !empty($lastname)) {
                if (checkdate($date->format('m'), $date->format('d'), $date->format('Y'))) {

                    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $req = $sql_connection->prepare('SELECT COUNT(*) AS nbrUsers FROM users WHERE mail = :mail');
                        $req->bindValue(':mail', $email);
                        $req->execute();

                        $res = $req->fetch(PDO::FETCH_ASSOC);

                        if ($res['nbrUsers'] == 0) {
                            if ($password === $passwordRe) {
                                $req = $sql_connection->prepare('INSERT INTO users (greetings, firstname, lastname, date_of_birth, mail, password, commune, city, news ) VALUES (:greetings, :firstname, :lastname, :date_of_birth, :mail, :password, :commune,:city, :news)');
                                $req->bindValue(':greetings', $greetings);
                                $req->bindValue(':firstname', $firstname);
                                $req->bindValue(':lastname', $lastname);
                                $req->bindValue(':mail', $email);
                                $req->bindValue(':date_of_birth', date_format($date, 'Y-m-d'));
                                $req->bindValue(':password', password_hash($password, PASSWORD_DEFAULT));
                                $req->bindValue(':commune', $commune);
                                $req->bindValue(':city', $city);
                                $req->bindValue(':news', $news);
                                $req->execute();

                                //Envoi du mail d'activation





                                //ID du compte créé : $sql_connection->lastInsertId();
                                //Récuperer l'UUID du compte créé
                                //envoyer un mail avec une adresse contenant l'UUID

                                $success = true;
                            } else {
                                $error = 'Les mots de passes ne correspondent pas';
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
            }else{
                $error = 'Verifiez que tout les champs soyent remplis.';
            }
        } 
    

    if ($success) {
        echo '<div class="notification is-primary">';
        echo 'Votre inscription est réussie!';
        echo '</div>';
    } else {
        if ($error !== null) {
            echo '<div class="notification is-danger">';
            echo $error;
            echo '</div>';
        }
        include 'inscription.php';
    }


    ?>


