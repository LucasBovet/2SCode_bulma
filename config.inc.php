<?php
    $host = 'localhost';
    $username = 'root';
    $port = 3306;
    $password = '';
    $dbname = '2scode';

    try{
        $sql_connection = new PDO(
            'mysql: host='.$host.';port=' .$port. ';dbname='.$dbname,
            $username,
            $password,
            array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                )
        );
    }
    catch(PDOException $e){
        echo 'Erreur lors de la connection MySQL :' .$e->getMessage();
    };