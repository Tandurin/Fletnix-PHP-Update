<?php
    require_once('../footer.php');
    require_once('../header.php');
?>
<!DOCTYPE html>
<html lang="nl-nl">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>FletNix | Zoeken</title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="../css/all.min.css" />
        <link rel="stylesheet" href="../css/normalize.css" />
        <link rel="stylesheet" href="../css/styles.css" />
        <link rel="icon" href="../img/favicon.ico" type="image/x-icon" />
    </head>
    <body>
        <?=PAGE_HEADER?>

        <main class="flexcontainer">
            <section class="searchform">
                <form action="../html/searchresults.html">
                    <div class="inputfield">
                        <label for="search">E-mailadres</label>
                        <i class="fa fa-search fa-lg form-icon"></i>
                        <input required type="search" id="search" name="search" 
                        placeholder="Zoeken..." />
                    </div>
                    <div class="inputfield">
                        <label for="checkbox1" class="show-label">Films</label>
                        <input type="checkbox" id="checkbox1" name="films" value="Films" class="hide" />
                        <p>Films</p>
                    </div>
                    <div class="inputfield">
                        <label for="checkbox2" class="show-label">Series</label>
                        <input type="checkbox" id="checkbox2" name="series" value="Series" class="hide" />
                        <p>Series</p>
                    </div>
                    <div class="inputfield">
                        <label for="checkbox3" class="show-label">Genre</label>
                        <input type="checkbox" id="checkbox3" name="genre" value="Genre" class="hide" />
                        <p>Genre</p>
                    </div>
                    <div class="inputfield">
                        <label for="checkbox4" class="show-label">Acteurs</label>
                        <input type="checkbox" id="checkbox4" name="acteurs" value="Acteurs" class="hide" />
                        <p>Acteurs</p>
                    </div>
                    <div class="inputfield">
                        <label for="checkbox5" class="show-label">Regisseurs</label>
                        <input type="checkbox" id="checkbox5" name="regisseurs" value="Regisseurs" class="hide" />
                        <p>Regisseurs</p>
                    </div>
                    <input type="submit" value="Zoeken">
                </form>
            </section>
        </main>

        <?=PAGE_FOOTER?>
    </body>
</html>