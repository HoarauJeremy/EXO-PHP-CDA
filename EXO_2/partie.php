<?php session_start(); ?>

<!doctype html>
<html lang="en">
    <head>
        <title>EXO 2</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>

        <main class="container">

            <!-- 
                Bonus : Avant de lancer le jeu, le joueur rentre son speudo.
                un tableau de score référence les 5 meilleurs joueurs.
             -->

            <div class="w-25 my-2 border rounded p-5">
            
                <form action="" method="post">
                    <input type="number" name="nombre" id="nombre" class="my-1">
                    <input type="submit" name="submit" class="btn btn-primary my-1" value="Validez">
                </form>

            </div>

            <?php

                // $score=0;
                $nombreRandom = isset($_SESSION['nombreRandom']) ? $_SESSION['nombreRandom'] : 0;
                $nombreSaisie = isset($_POST["nombre"]) ? $_POST["nombre"] : null;
                
                if ($nombreSaisie != null) {
                    if($nombreRandom > $nombreSaisie) {
                        // $score++;
                        echo "plus grand";
                    } elseif ($nombreRandom < $nombreSaisie) {
                        // $score++;
                        echo "plus petis";
                    } else {
                        // $score++;
                        echo "Vous avez Gagner!";
                    }
                } else {
                    echo "Veuiller saisir un nombre pour commencer une partie";
                }

            ?>

        </main>

        <footer>
            <!-- place footer here -->
        </footer>
        
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
