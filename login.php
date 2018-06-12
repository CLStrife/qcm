<?php
/**
 * Created by PhpStorm.
 * User: wendong
 * Date: 29/05/2018
 * Time: 10:37
 */
require "Connect.php";
$tab = array(
    ':login'    => $_POST['login'],
    ':mdp'      => $_POST['mdp']
);

$requete = "SELECT login, motDePasse FROM etudiants WHERE login = :login AND motDePasse = :mdp";
$req = $db->prepare($requete);
$result = $req->execute($tab);
if($req->rowCount() >=1)
{
    session_start();
    $_SESSION['login'] = $_POST['login'];
    header('Location: Questionnaire.php');

    exit();
}else{
    echo "Identifiants incorrects";
}

if($db){
    $db = null;
}