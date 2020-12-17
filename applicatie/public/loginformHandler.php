<?php
    // Importeer inputvalidatie
    require_once 'functions/testInput.php';

    // Variabelen voor weegeven van foutmeldingen.


    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (empty($_POST['email'])) {

        else {
            $_SESSION['email'] = testInput($_POST['email']);
        }
        $_SESSION['firstname'] = "David";
        $_SESSION['lastname'] = "Testgebruiker";
    }


?>
<!DOCTYPE html>
<html lang="nl-nl">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>FletNix | Login</title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="../css/normalize.css" />
        <link rel="stylesheet" href="../css/styles.css" />
        <link rel="icon" href="../img/favicon.ico" type="image/x-icon" />
    </head>
    <body>
        <?=PAGE_HEADER?>
        <main class="flexcontainer">
            <section >
                <h1>Welkom</h1>
                <p>U bent ingelogd als <?php echo "{$_SESSION['firstname']} {$_SESSION['lastname']}";?>.</p>
            </section>
        </main>
        <?=PAGE_FOOTER?>
    </body>
</html>