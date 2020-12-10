<?php
    require_once('../footer.php');
    require_once('../header.php');
?>
<!DOCTYPE html>
<html lang="nl-nl">
    <head>
        <meta charset="UTF-8" /> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>FletNix | Aanbod</title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="../css/normalize.css" />
        <link rel="stylesheet" href="../css/styles.css" />
        <link rel="icon" href="../img/favicon.ico" type="image/x-icon" />
    </head>
    <body>
        <?=PAGE_HEADER?>

        <main class="overview-grid">
            <section class="navbar2">
                <h3><a href="../html/search.html">Zoeken</a></h3>
                <h3><a href="#Movies">Films</a></h3>
                <h3><a href="#Series">Series</a></h3>
                <h3><a href="#Action">Actie</a></h3>
                <h3><a href="#Comedy">Comedy</a></h3>
            </section>
            <div class="film-overview">
                <section class="film-list">
                    <h2>Films</h2><a name="Movies"></a>
                    <div class="horizontal-scroll">
                        <div class="foto-lijst"><a href="shows/shooter.html"><img src="../img/poster/action/films/american-sniper.jpg" alt="Filmposter American Sniper"/></a></div>
                        <div class="foto-lijst"><a href="shows/shooter.html"><img src="../img/poster/comedy/films/newkidsturbo.jpg" alt="Filmposter New Kids Turbo"/></a></div>
                        <div class="foto-lijst"><a href="shows/shooter.html"><img src="../img/poster/action/films/dark-knight.jpg" alt="Filmposter The Dark Knight"/></a></div>
                        <div class="foto-lijst"><a href="shows/shooter.html"><img src="../img/poster/comedy/films/scoobydoo.jpg" alt="Filmposter Scooby-Doo"/></a></div>
                        <div class="foto-lijst"><a href="shows/shooter.html"><img src="../img/poster/comedy/films/scottpilgrim.jpeg" alt="Filmposter Scott Pillgrim vs the World"/></a></div>
                    </div>
                    <h2>Series</h2><a name="Series"></a>
                    <div class="horizontal-scroll">
                        <div class="foto-lijst"><a href="shows/shooter.html"><img src="../img/poster/action/series/daredevil.jpg" alt="Filmposter Daredevil"/></a></div>
                        <div class="foto-lijst"><a href="shows/shooter.html"><img src="../img/poster/action/series/punisher.jpg" alt="Filmposter The Punisher"/></a></div>
                        <div class="foto-lijst"><a href="shows/shooter.html"><img src="../img/poster/comedy/series/familyguy.jpg" alt="Filmposter Family Guy"/></a></div>
                        <div class="foto-lijst"><a href="shows/shooter.html"><img src="../img/poster/comedy/series/southpark.jpg" alt="Filmposter South Park"/></a></div>
                        <div class="foto-lijst"><a href="shows/shooter.html"><img src="../img/poster/action/series/shooter.jpg" alt="Filmposter Shooter"/></a></div>
                    </div>
                    <h2>Actie</h2><a name="Action"></a>
                    <div class="horizontal-scroll">
                        <div class="foto-lijst"><a href="shows/shooter.html"><img src="../img/poster/action/films/american-sniper.jpg" alt="Filmposter American Sniper"/></a></div>
                        <div class="foto-lijst"><a href="shows/shooter.html"><img src="../img/poster/action/films/dark-knight.jpg" alt="Filmposter The Dark Knight"/></a></div>
                        <div class="foto-lijst"><a href="shows/shooter.html"><img src="../img/poster/action/series/daredevil.jpg" alt="Filmposter Daredevil"/></a></div>
                        <div class="foto-lijst"><a href="shows/shooter.html"><img src="../img/poster/action/series/shooter.jpg" alt="Filmposter Shooter"/></a></div>
                        <div class="foto-lijst"><a href="shows/shooter.html"><img src="../img/poster/action/series/punisher.jpg" alt="Filmposter The Punisher"/></a></div>
                    </div>
                    <h2>Comedy</h2><a name="Comedy"></a>
                    <div class="horizontal-scroll">
                        <div class="foto-lijst"><a href="shows/shooter.html"><img src="../img/poster/comedy/films/newkidsturbo.jpg" alt="Filmposter New Kids Turbo"/></a></div>
                        <div class="foto-lijst"><a href="shows/shooter.html"><img src="../img/poster/comedy/films/scoobydoo.jpg" alt="Filmposter Scooby-Doo"/></a></div>
                        <div class="foto-lijst"><a href="shows/shooter.html"><img src="../img/poster/comedy/films/scottpilgrim.jpeg" alt="Filmposter Scott Pillgrim vs the World"/></a></div>
                        <div class="foto-lijst"><a href="shows/shooter.html"><img src="../img/poster/comedy/series/familyguy.jpg" alt="Filmposter Family Guy"/></a></div>
                        <div class="foto-lijst"><a href="shows/shooter.html"><img src="../img/poster/comedy/series/southpark.jpg" alt="Filmposter South Park"/></a></div>
                    </div>
                </section>
            </div>
        </main>

        <?=PAGE_FOOTER?>
    </body>
</html>