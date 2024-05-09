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
            <nav class="navbar bg-primary" data-bs-theme="dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Boolean Production</a>
                </div>
            </nav>
        </header>

        <main>
            <div class="container">
                <div class="row">
                    <?php foreach ($movies as $movie) { ?>
                    <div class="col">
                        <div class="card text-center mt-5">
                            <div class="card-body">
                                <h5 class="card-title"><?= $movie->title ?></h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary"><?= $movie->language ?></h6>
                                <h6 class="card-subtitle mb-2 text-body-secondary"><?= $movie->vote ?> / 10</h6>
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