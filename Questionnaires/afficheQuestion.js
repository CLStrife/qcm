function AfficheQuestion()
{
    var compteur = 0;

    $(document).ready(function() {

        $.ajax({
            url: '../GetQuestion.php',
            type: 'get',
            success: function (reponse) {
                var question = '{"question":' + reponse + '}';
                var libelle = JSON.parse(question);
                $("#question").html(libelle.question[0].libelleQuestion)
                $("#valider").click(function () {
                    compteur ++;
                    $("#question").html(libelle.question[compteur].libelleQuestion);
                });
            }
        });
    });
}