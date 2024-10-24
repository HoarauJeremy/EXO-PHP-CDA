<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
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

        <style>
            .lightmode { background-color: white; }
            .darkmode { background-color: black; color: white; }
            .randomMode {
                animation: 1.2s bgrandom infinite;
            }

            @keyframes bgrandom {
                0% { background-color: red; }
                50% { background-color: blue; }

                55% { background-color: yellow; }
                80% { background-color: green; }

                85% { background-color: purple; }
                100% { background-color: red; }
            }
        </style>
        
    </head>

    <?php
        $randomNumber = rand(1,3);
        // $randColor = $randomNumber == 1 ? "darkmode" : "lightmode";

        if ($randomNumber != 3) {
            if ($randomNumber == 1) {
                $randColor = "darkmode";
            } else {
                $randColor = "lightmode";
            }
        } else {
            $randColor = "randomMode";   
        }

        $tabEtu = ["Lou", "Toma", "Ludovic", "Clarel"];
    ?>

    <!-- <body class="//rand(1,2) == 1 ? "darkmode" : "lightmode""> -->
    <body class="<?= $randColor; ?>">
        <header>
            <!-- place navbar here -->
        </header>

        <main>

            <div class="container">
                <h1><?= "Bonjour" ?></h1>
                
                <div class="col">
                    
                    <div class="row">
                        <?php
                        foreach ($tabEtu as $nom) {
                            echo $nom ."<br>";
                        }
                        ?>
                    </div>
                    
                    <!-- <div class="row">
                        <form action="" method="get">
                            <input type="text" name="nom" id="nom">
                            <input type="password" name="motDePasse" id="motDePasse">
                            <input type="submit" name="sub" value="OK">
                        </form>
                    </div> -->
                    
                    <div class="row" style="color: red; font-size: 3em">Bonjour</div>

                </div>


            </div>

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
