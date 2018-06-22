<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <script type="text/javascript" src="afficheQuestion.js"></script>
    <title>Questionnaire Cinéma</title>
</head>
<body>
    <div class="container">
        <h1 id="session" class="col-lg-10">
            <?php
            include ('../session.php');
            ?>
        </h1>

            <div id="question">

            </div>
        <form id="reponse" method="post" action="GetListReponse.php">
        </form>
        <input class="btn btn-primary" type="submit" value="Valider" id="valider" >
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript">
        var compteur = 0;

        $(document).ready(function() {

            var reponse = <?php echo json_encode($_SESSION['questions'], JSON_UNESCAPED_UNICODE);?>;

            console.log(reponse);
                    document.getElementById("question").innerHTML = (reponse[0]['questions'].libelleQuestion);

                    for(var i = 0; i < reponse[0]['reponses'].length; i++){
                        document.getElementById("reponse").innerHTML += ("<input type='radio' id='radioButton' name = 'numReponse' value= "+compteur+">" + " " + reponse[0]['reponses'][i].valeur + "<br>");

                    }
                    //document.getElementById("reponse").innerHTML = (reponse[0]['reponses'][i].valeur);
                    $("#valider").click(function () {
                        compteur++;
                        document.getElementById("question").innerHTML = (reponse[compteur]['questions'].libelleQuestion);
                        document.getElementById("reponse").innerHTML = " ";
                        //vide la div reponse
                        if (reponse[compteur]['questions'].idQuestion == 4 || reponse[compteur]['questions'].idQuestion == 6)
                        {
                            for (var i = 0; i < reponse[compteur]['reponses'].length; i++){

                                document.getElementById("reponse").innerHTML += ("<input type= 'checkbox' name='numReponse' value="+compteur+">" + " " + reponse[compteur]['reponses'][i].valeur + "<br>");
                            }
                        }else{
                            for(var i = 0; i < reponse[compteur]['reponses'].length; i++){
                                document.getElementById("reponse").innerHTML += ("<input type='radio' id='radioButton' name = 'numReponse' value= "+compteur+" >" + " " + reponse[compteur]['reponses'][i].valeur + "<br>");
                            }
                        }


            });
        });

    </script>
</body>
</html>