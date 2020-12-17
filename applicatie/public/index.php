<?php
    session_start();
    
	require_once("globalInfo/global.php");
    require_once("functions/components.php");
    require_once('footer.php');
    require_once('header.php');
?>

<!DOCTYPE html>
<html lang="nl-nl">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>FletNix | Home</title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
    </head>
    <body>
	    <?=PAGE_HEADER?>

        <main>
            <section class="main-view">
                <div>
                    <div class="main-info-panel">
                        <?=mainLogo($globalInfo['siteName']);?>
                        <p>Info tekstje over het streaming platform</p>
                    </div>
                </div>
            </section>
            <section class="flex">
                <div class="offers">
                    <div class="offers-header">
                        <h1>Ons Aanbod</h1>
                    </div>
                    <div class="offers-item"><img src="img/poster/action/series/shooter.jpg" alt="Filmposter Shooter"/></div>
                    <div class="offers-item"><img src="img/poster/comedy/films/scottpilgrim.jpeg" alt="Filmposter Scott Pilgrim versus The World"/></div>
                    <div class="offers-item"><img src="img/poster/action/films/dark-knight.jpg" alt="Filmposter The Dark Knight"/></div>
                    <div class="offers-item"><img src="img/poster/comedy/series/southpark.jpg" alt="Filmposter South Park"/></div>
                </div>
            </section>
            <section class="call-to-action">
                <div class="cta-message">
                    <h2>Wacht niet langer en abonneer jezelf nu voor de beste trailer streaming website!</h2>
                </div>
                <div class="cta-button">
                    <form action="html/register.html"><button class="sub-button">Abonneer Hier</button></form>
                </div>
            </section>
        </main>

        <?=PAGE_FOOTER?>
    </body>
</html>