<?php
/**
 * Created by PhpStorm.
 * User: wendong
 * Date: 28/05/2018
 * Time: 13:21
 */
require "Connect.php";
//cr�er une arraylist � envoyer � la requ�te
$tab = array(
':login'    => $_POST['login'],
':mdp'      => md5($_POST['mdp']),
':nom'      => $_POST['nom'],
':prenom'   => $_POST['prenom'],
':email'    => $_POST['email']
);

    $requete = "INSERT INTO etudiants(login, motDePasse, nom, prenom, email) VALUES (:login, :mdp, :nom, :prenom, :email)";
    $req = $db->prepare($requete);
    $result = $req->execute($tab);
    echo "Inscription termin�";

if(!$result){
    echo "Une erreur est survenue ". $req->errorCode();
    print_r($req->errorInfo());
}

if($db){
    $db = null;
}

