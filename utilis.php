<?php

function check_logged(){
    return isset($_SESSION['logged']) && $_SESSION['logged'] === true;
}

