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
        <title>FletNix | Abonnementen</title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="../css/normalize.css" />
        <link rel="stylesheet" href="../css/styles.css" />
        <link rel="icon" href="../img/favicon.ico" type="image/x-icon" />
    </head>
    <body>
        <?=PAGE_HEADER?>
        <main>
            <div class="flexcontainer subscription-fill">
                <section class="subscription-options">
                    <div class="sub-1 sub-item">
                        <div class="subimg">
                            <img src="../img/icon/icon-sub-1.png" alt="Afbeelding Abonnementoptie 1" />
                        </div>
                        <h3>Abbo 1</h3>
                        <ul>
                            <li>punt 1</li>
                            <li>punt 2</li>
                            <li>punt 3</li>
                            <li>punt 4</li>
                        </ul>
                    </div>
                    <div class="sub-2 sub-item">
                        <div class="subimg">
                            <img src="../img/icon/icon-sub-2.png" alt="Afbeelding Abonnementoptie 1" />
                        </div>
                        <h3>Abbo 2</h3>
                        <ul>
                            <li>punt 1</li>
                            <li>punt 2</li>
                            <li>punt 3</li>
                            <li>punt 4</li>
                        </ul>
                    </div>
                    <div class="sub-3 sub-item">
                        <div class="subimg">
                            <img src="../img/icon/icon-sub-3.png" alt="Afbeelding Abonnementoptie 1" />
                        </div>
                        <h3>Abbo 3</h3>
                        <ul>
                            <li>punt 1</li>
                            <li>punt 2</li>
                            <li>punt 3</li>
                            <li>punt 4</li>
                        </ul>
                    </div>
                </section>
                <section class="flexcontainer">
                    <form action="../html/register.html" class="regbutton"><button>Abonneer nu</button></form>
                </section>
            </div>
        </main>

        <?=PAGE_FOOTER?>
    </body>
</html>