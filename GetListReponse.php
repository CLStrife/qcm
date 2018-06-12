<?php

header('content-type: text/html; charset=utf-8');
include('Connect.php');

$reponse = $db->query("SELECT valeur FROM reponse JOIN questionreponse ON reponse.idReponse = questionreponse.idReponse
WHERE questionreponse.idQuestion = 1");

while($donnees = $reponse->fetch())
{
echo

"
<form id='listReponse' method='post' action='qcm1.php'>
<input type='radio' name='reponse' value='".$donnees['valeur']."'>".$donnees['valeur']."
</form>
";
}
$reponse->closeCursor();
?>