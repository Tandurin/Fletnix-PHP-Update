<?php
require_once('../functions/minutenNaarUur.php');

$itemArray =    array(  "Titel" => "Shooter",
                        "Genre" => "Actie", 
                        "Cast" => "Ryan Phillippe, Shantel VanSanten, Omar Epps", 
                        "Regisseur" => "John Hlavin", 
                        "Speelduur" => 62, 
                        "Jaar" => 2016,
                        "Omschrijving" => "Een hoog onderscheiden ex-marinier keert als sluipschutter terug om een moordaanslag op de president te voorkomen, maar wordt al gauw zelf van moord beschuldigd."
                    );
?>
<!DOCTYPE html>
<html lang="nl-nl">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>FletNix | <?=$itemArray["Titel"]?></title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="../../../css/normalize.css" />
        <link rel="stylesheet" href="../../../css/styles.css" />
        <link rel="icon" href="../../../img/favicon.ico" type="image/x-icon" />
    </head>
    <body class="detailspage">
        <?php require_once('../header.php')?>

        <main>
            <div class="show-details">
                <section class="show-data">
                    <h1><?=$itemArray["Titel"]?></h1>
                    <ul>
                        <li><em>Genre :</em> <?=$itemArray["Genre"]?></li>
                        <li><em>Cast :</em> <?=$itemArray["Cast"]?> </li>
                        <li><em>Regisseur :</em> <?=$itemArray["Regisseur"]?></li>
                        <li><em>Jaar :</em> <?=$itemArray["Jaar"]?></li>
                        <li><em>Speelduur :</em> <?=minutenNaarUur($itemArray["Speelduur"])?></li>
                    </ul>
                </section>
                <section class="show-description">
                    <p><?=$itemArray["Omschrijving"]?></p>
                </section>
                <section class="still-image">
                    <img src="../../../img/stills/series/actie/shooter.jpg" alt="Still frame Shooter" />
                </section>
                <section class="play-button">
                    <form action="../../../html/loggedin/player.html"><button>Play</button></form>
                </section>
            </div>
        </main>

        <?php require_once('../footer.php')?>
    </body>
</html>