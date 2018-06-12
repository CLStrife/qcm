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
            <p id="question">

            </p>
        <div id="reponse">

        </div>
        <input class="btn btn-primary" type="submit" value="Valider" id="valider" >
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(
            function(){
                AfficheQuestion();
            }
        );
    </script>
</body>
</html>