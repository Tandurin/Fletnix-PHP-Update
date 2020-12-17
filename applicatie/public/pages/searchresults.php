<?php
    session_start();

    require_once('../footer.php');
    require_once('../header.php');
?>
<!DOCTYPE html>
<html lang="nl-nl">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>FletNix | Zoekresultaten</title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="../css/normalize.css" />
        <link rel="stylesheet" href="../css/styles.css" />
        <link rel="icon" href="../img/favicon.ico" type="image/x-icon" />
    </head>
    <body>
        <?=PAGE_HEADER?>

        <main>
            <section class="searchresults flexcontainer">
                <h2>Zoekresultaten</h2>
                <div class="resultsflex">
                    <a href="shows/shooter.html"><img src="../img/poster/comedy/films/newkidsturbo.jpg" alt="Filmposter New Kids Turbo"/></a>
                    <a href="shows/shooter.html"><img src="../img/poster/action/series/shooter.jpg" alt="Filmposter Shooter"/></a>
                    <a href="shows/shooter.html"><img src="../img/poster/action/films/dark-knight.jpg" alt="Filmposter The Dark Knight"/></a>
                    <a href="shows/shooter.html"><img src="../img/poster/action/series/daredevil.jpg" alt="Filmposter Daredevil"/></a>
                </div>
            </section>
        </main>

        <?=PAGE_FOOTER?>
    </body>
</html>