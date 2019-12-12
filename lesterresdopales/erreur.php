<html>

<head>
    <title>Page d'erreur HTTP <?=$_SERVER["REDIRECT_STATUS"]?></title>
    <!-- Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Css perso-->
    <link rel="stylesheet" href="lib/css/style.css">
</head>

<body>
    <div>
        <div class="container d-flex justify-content-center mt-2">
            <img class="col-6" src="lib/img/404.jpg" alt="Erreur 404">

        </div>
        <div class="container text-center">
            Vous venez de rencontrer une erreur HTTP <?=$_SERVER["REDIRECT_STATUS"]?> pour la page
            <?=$REQUEST_URI?>.
        </div>
        <div class="container text-center mt-2">
            <a class="btn btn-primary" href="index.php" role="button">retour au site web</a>


        </div>
    </div>
</body>

</html>