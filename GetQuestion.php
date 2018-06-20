<?php
/**
 * Created by PhpStorm.
 * User: wendong
 * Date: 29/05/2018
 * Time: 13:48
 */
header("content-type: text/html; charset=utf-8");
require ('Connect.php');
session_start();

$id = array(
    ':choisir'      => $_POST['choisir']
);
$_SESSION['id'] = $_POST['choisir'];
//$reponse = $db->query("SELECT libelleQuestion FROM question JOIN questionquestionnaire ON questionquestionnaire.idQuestion = question.idQuestion WHERE idQuestionnaire = :choisir");
$requete = "SELECT * FROM question JOIN questionquestionnaire ON questionquestionnaire.idQuestion = question.idQuestion WHERE idQuestionnaire = :choisir";
$requete2 = "SELECT * FROM reponse JOIN questionreponse ON reponse.idReponse = questionreponse.idReponse
WHERE questionreponse.idQuestion = ?";
$req = $db->prepare($requete);
$compteur = 0;
$req->execute($id);

$tab = array();

while($lignes = $req->fetch(PDO::FETCH_ASSOC))
{
   $tab[$compteur]['questions'] = array_map(null, $lignes);

   $req2 = $db->prepare($requete2);
   $req2->execute(array($tab[$compteur]['questions']['idQuestion']));
   // paramètre du WHERE à remplacer
   while ($lignes2 = $req2->fetch(PDO::FETCH_ASSOC))
   {
        $tab2 [] = array_map(null,$lignes2);
   }
    $tab[$compteur]['reponses'] = $tab2;
    //var_dump( $tab[$compteur]);
    $compteur++;
    $tab2 = null;
   //vide le tableau pour ne pas avoir de redondance des reponses dedans
}
//print_r($tab);
$_SESSION['questions'] = $tab ;
//echo json_encode($tab, JSON_UNESCAPED_UNICODE);
header("Location: Questionnaires/qcm1.php");
?>