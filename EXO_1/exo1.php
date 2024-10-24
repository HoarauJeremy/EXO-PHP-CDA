<!doctype html>
<html lang="en">
    <head>
        <title>Exo 1</title>
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
        <main class="container w-25">

            <div class="my-2 border rounded p-5">
                
                <form action="" method="post">
                    <input type="password" name="password" id="password">
                    <input type="submit" value="OK">
                </form>
                
            </div>         
            
            <?php
                $pwd = isset($_POST['password']) ? $_POST['password'] : '';
                $hash = '$2y$10$hs4XL9Qee5vHnmAbQeXRgORwGoWl5zgWTMebGFRBkN1EHjKu.wZGe';
          
                if (password_verify($pwd, $hash)) {
                    header('Location: secret.php');
                } else {
                    echo "
                       <div class='my-2 p-3 text-danger-emphasis bg-danger-subtle border border-danger-subtle rounded-3'>Mot de passe incorrecte</div>";
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
