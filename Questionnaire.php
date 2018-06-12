
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Questionnaire</title>
</head>
<body>

<div class="container">
    <h1 id="session" class="col-lg-10">
        <?php
        include ('session.php');
        ?>
    </h1>

    <h1>Choisissez votre questionnaire</h1>
    <div class="col-lg-10" id="tableau">
        <table class="table table-bordered" id="table">
    <tr>
        <th scope="col">Numéro</th>
        <th scope="col">Libellé</th>
        <th scope="col">Fait le</th>
        <th scope="col"></th>
    </tr>
            <?php include('GetListQuestionnaire.php'); ?>
        </table>
    </div>
</div>

</body>
</html>