<?php

require_once __DIR__ . '/db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://kit.fontawesome.com/43ebce74f3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>php OOP 1</title>
</head>

<body>
    <div id="app">

        <header>

        <?php include_once __DIR__ . '/components/header.php'; ?>
            
        </header>

        <main>
            <div class="container">
                <div class="row mt-5">
                    <h3>Tutti i Film</h3>
                    <?php foreach ($movies as $movie) { ?>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                        <div class="card text-center mt-5">
                            <div class="card-body">
                                <h5 class="card-title"><?= $movie->title ?></h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary"><?= $movie->language ?></h6>
                                <h6 class="card-subtitle mb-2 text-body-secondary"><?= $movie->vote ?> / 10</h6>
                                <h6 class="card-subtitle mb-2 text-body-secondary"><?= $movie->genre ?></h6>
                                <h6 class="card-subtitle mb-2 text-body-secondary"><?= $movie->relase_year ?></h6>
                                <h6 class="card-subtitle mb-2 text-body-secondary">Durata: <?= $movie->duration ?>'</h6>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="row mt-5">
                <h3>Tutte le serie TV</h3>
                    <?php foreach ($TVSeries as $TVSerie) { ?>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                        <div class="card text-center mt-5">
                            <div class="card-body">
                                <h5 class="card-title"><?= $TVSerie->title ?></h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary"><?= $TVSerie->language ?></h6>
                                <h6 class="card-subtitle mb-2 text-body-secondary"><?= $TVSerie->vote ?> / 10</h6>
                                <h6 class="card-subtitle mb-2 text-body-secondary"><?= $TVSerie->genre ?></h6>
                                <h6 class="card-subtitle mb-2 text-body-secondary"><?= $TVSerie->relase_year ?></h6>
                                <h6 class="card-subtitle mb-2 text-body-secondary">Numero di stagioni: <?= $TVSerie->seasons ?></h6>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </main>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>

    </div>

</body>

</html>