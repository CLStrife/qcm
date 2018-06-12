<?php
/**
 * Created by PhpStorm.
 * User: wendong
 * Date: 29/05/2018
 * Time: 13:48
 */
header("content-type: text/html; charset=utf-8");
require ('Connect.php');

$id = array(
    ':choisir'      => $_POST['choisir']
);
//$reponse = $db->query("SELECT libelleQuestion FROM question JOIN questionquestionnaire ON questionquestionnaire.idQuestion = question.idQuestion WHERE idQuestionnaire = :choisir");
$requete = "SELECT libelleQuestion FROM question JOIN questionquestionnaire ON questionquestionnaire.idQuestion = question.idQuestion WHERE idQuestionnaire = :choisir";
$req = $db->prepare($requete);
$req->execute($id);
$tab = array();

while($lignes = $req->fetch(PDO::FETCH_ASSOC))
{
    $tab[] = array_map(null, $lignes);
}
echo json_encode($tab, JSON_UNESCAPED_UNICODE);
//header("Location: Questionnaires/qcm1.php");
?>