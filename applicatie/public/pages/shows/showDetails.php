<?php
    $itemTitel = "Shooter";
    $itemGenre = "Actie";
    $itemCast = "Ryan Phillippe, Shantel VanSanten, Omar Epps";
    $itemDirector = "John Hlavin";
    $itemPlaytime = "60 minuten";
    $itemYear = "2016";
    $itemDescription = "Een hoog onderscheiden ex-marinier keert als sluipschutter terug om een moordaanslag op de president te voorkomen, maar wordt al gauw zelf van moord beschuldigd.";
?>
<!DOCTYPE html>
<html lang="nl-nl">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>FletNix | Shooter</title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="../../../css/normalize.css" />
        <link rel="stylesheet" href="../../../css/styles.css" />
        <link rel="icon" href="../../../img/favicon.ico" type="image/x-icon" />
    </head>
    <body class="detailspage">
        <header class="navbar">
            <nav>
                <a href="../../../html/loggedin/index.html"><p class="logo-inline">FLETNIX</p></a>
                <a href="../../../html/loggedin/filmOverview.html">Kijken</a>
                <a href="../../../html/loggedin/subscription.html">Abonnementen</a>
                <a href="../../../html/loggedin/aboutus.html">Over Ons</a>
                <div class="dropdown">
                    <button class="final-item">David Gebruiker</button>
                    <div class="dropdown-cnt">
                        <a href="../../../html/loggedin/profile.html">Profiel</a>
                        <a href="../../../index.html">Logout</a>
                    </div>
                </div>
            </nav>
        </header>

        <main>
            <div class="show-details">
                <section class="show-data">
                    <h1><?=$itemTitel?></h1>
                    <ul>
                        <li><em>Genre :</em> <?=$itemGenre?></li>
                        <li><em>Cast :</em> <?=$itemCast?> </li>
                        <li><em>Regisseur :</em> <?=$itemDirector?></li>
                        <li><em>Jaar :</em> <?=$itemYear?></li>
                        <li><em>Speelduur :</em> <?=$itemPlaytime?></li>
                    </ul>
                </section>
                <section class="show-description">
                    <p><?=$itemDescription?></p>
                </section>
                <section class="still-image">
                    <img src="../../../img/stills/series/actie/shooter.jpg" alt="Still frame Shooter" />
                </section>
                <section class="play-button">
                    <form action="../../../html/loggedin/player.html"><button>Play</button></form>
                </section>
            </div>
        </main>

        <footer class="footer">
            <div class="item">
                <p class="logo-inline">FLETNIX</p>
            </div>
            <p>
                ©2020
            </p>
        </footer>
    </body>
</html>