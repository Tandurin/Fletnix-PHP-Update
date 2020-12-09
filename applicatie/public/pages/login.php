<?php
?>
<!DOCTYPE html>
<html lang="nl-nl">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>FletNix | Login</title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="../css/all.css" />
        <link rel="stylesheet" href="../css/normalize.css" />
        <link rel="stylesheet" href="../css/styles.css" />
        <link rel="icon" href="../img/favicon.ico" type="image/x-icon" />
    </head>
    <body>
        <header class="navbar">
            <nav>
                <a href="../index.html"><p class="logo-inline">FLETNIX</p></a>
                <a href="../html/filmOverview.html">Kijken</a>
                <a href="../html/subscription.html">Abonnementen</a>
                <a href="../html/aboutus.html">Over Ons</a>
                <a class="final-item" href="../html/login.html">Log In</a>
            </nav>
        </header>

        <main class="flexcontainer">
            <section class="form">
                <h2>Log In</h2>
                <form action="../html/loggedin/index.html">
                    <div class="inputfield">
                        <label for="email">E-mailadres</label>
                        <i class="fa fa-user fa-lg form-icon"></i>
                        <input required type="email" id="email" name="email" 
                        placeholder="E-mailadres" title="E-mail moet juist geformuleerd zijn. Bijvoorbeeld: voorbeeld@host.nl" />
                    </div>
                    <div class="inputfield">
                        <label for="pass">Wachtwoord</label>
                        <i class="fa fa-key fa-lg form-icon"></i>
                        <input required type="password" id="pass" name="pass" 
                        placeholder="Wachtwoord" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                        title="Wachtwoord moet minimaal 1 cijfer, 1 letter en 1 hoofdletter bevatten en minimaal 8 karakter lang zijn." /> <!-- Pattern gevonden op htpp://html5pattern.com -->
                    </div>
                    <hr>
                    <input type="submit" value="Log In">
                </form>
            </section>
        </main>
    </body>
</html>