<?php
header('content-type: text/html; charset=utf-8');
include('Connect.php');

$reponse = $db->query("SELECT questionnaire.idQuestionnaire, libelleQuestionnaire, dateFait FROM Questionnaire, qcmfait
group by questionnaire.idQuestionnaire");

while($donnees = $reponse->fetch())
{
 echo
 "
<form method='POST' id='ListQuestionnaire' action='GetQuestion.php'>
<tr>
<td>".$donnees['idQuestionnaire']."</td>
<td>".$donnees['libelleQuestionnaire']."</td>
<td>".$donnees['dateFait']."</td>
<td>
<button class='btn btn-primary' name='choisir' value='".$donnees['idQuestionnaire']."' type='submit'>Choisir</button>
</td>
</tr>
</form>
";
}
// value du bouton est l'id du questionnaire
$reponse->closeCursor();

?>