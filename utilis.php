<?php

function check_logged(){ //fonction de verification si l'utilisateur es connecté
    return isset($_SESSION['logged']) && $_SESSION['logged'] === true;
}

