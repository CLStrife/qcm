<?php

header('content-type: text/html; charset=utf-8');
include('Connect.php');
session_start();

$reponse = array(
    ':idQuestion'   => $_SESSION['id'],
    ':ordre'        => $_POST['numReponse'],

);
$id = array(
    ':idEtudiant'   =>$_SESSION['idEtudiant']
);

$requete = "SELECT bonne FROM questionreponse WHERE idQuestion = :idQuestion AND ordre = :ordre";
$req = $db->prepare($requete);
$req->execute($reponse);
$result = $req->fetch();
if ($result = 1)
{
    $requete2 = "UPDATE qcmfait SET point = point + 1 WHERE idEtudiant = :idEtudiant";
}
?>