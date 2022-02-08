<?php
$dsn = 'mysql:host=docker_lamp_mysql;dbname=test;port=3306;charset=utf8';
$user = 'nicolas';
$pass = 'nicolas';

try {
    $dbh = new PDO($dsn, $user, $pass);
    print "Connexion MySQL OK";
    $dbh = null;
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
