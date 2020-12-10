<?php
    require_once('../footer.php');
    require_once('../header.php');
?>
<!DOCTYPE html>
<html lang="nl-nl">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>FletNix | Registreren</title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="../css/all.css" />
        <link rel="stylesheet" href="../css/normalize.css" />
        <link rel="stylesheet" href="../css/styles.css" />
        <link rel="icon" href="../img/favicon.ico" type="image/x-icon" />
    </head>
    <body>
        <?=PAGE_HEADER?>
        <main class="flexcontainer">
            <section class="form">
                <h2>FLETNIX</h2>
                <form action="../html/loggedin/profile.html">
                    <p>Voornaam</p>
                    <div class="inputfield"><!--E-mailadres-->
                        <label for="name">Voornaam</label>
                        <i class="fa fa-user fa-lg form-icon"></i>
                        <input required type="text" id="name" name="name" 
                        placeholder="Voornaam" />
                    </div>
                    <p>Achternaam</p>
                    <div class="inputfield"><!--E-mailadres-->
                        <label for="surname">Achternaam</label>
                        <i class="fa fa-user fa-lg form-icon"></i>
                        <input required type="text" id="surname" name="surname" 
                        placeholder="Achternaam" />
                    </div>
                    <p>Land</p>
                    <div class="inputfield flex-center"><!--Geboortedatum-->
                        <label for="country">Land</label>
                        <select required id="country">
                            <option label="Kies land"></option>
                            <option value="nl">Nederland</option>
                            <option value="be">Beglië</option>
                            <option value="lu">Luxemburg</option>
                        </select>
                    </div>
                    <p>Geboortedatum</p>
                    <div class="inputfield flex-center"><!--Geboortedatum-->
                        <label for="birthdate">Geboortedatum</label>
                        <i class="fa fa-calendar fa-lg form-icon"></i>
                        <input required type="date" id="birthdate" name="birthdate" />
                    </div>
                    <hr>
                    <p>E-mailadres</p>
                    <div class="inputfield"><!--E-mailadres-->
                        <label for="email">E-mailadres</label>
                        <i class="fa fa-envelope fa-lg form-icon"></i>
                        <input required type="email" id="email" name="email" 
                        placeholder="voorbeeld@123.nl" />
                    </div>
                    <p>Rekeningnummer</p>
                    <div class="inputfield"><!--E-mailadres-->
                        <label for="bankacc">Rekeningnummer</label>
                        <i class="fa fa-user fa-lg form-icon"></i>
                        <input required type="text" id="bankacc" name="bankacc" 
                        placeholder="Rekeningnummer" />
                    </div>
                    <p>Abonnementstype</p>
                    <div class="inputfield flex-center">
                        <label for="sub-type">Abonnementstype</label>
                        <select required id="sub-type" name="Abonnementstype">
                            <option label="Kies abonnement"></option>
                            <option value="een">Een</option>
                            <option value="twee">Twee</option>
                            <option value="drie">Drie</option>
                        </select>
                    </div>
                    <hr>
                    <p>Wachtwoord</p>
                    <div class="inputfield"><!--Pass-->
                        <label for="password">Wachtwoord</label>
                        <i class="fa fa-key fa-lg form-icon"></i>
                        <input required type="password" id="password" name="password" 
                        placeholder="Wachtwoord" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                        title="Wachtwoord moet minimaal 1 cijfer, 1 letter en 1 hoofdletter bevatten en minimaal 8 karakter lang zijn."/> <!-- Pattern gevonden op htpp://html5pattern.com -->
                    </div>
                    <p>Herhaal Wachtwoord</p>
                    <div class="inputfield"><!--Repeat Pass-->
                        <label for="password-check">Herhaal Wachtwoord</label>
                        <i class="fa fa-key fa-lg form-icon"></i>
                        <input required type="password" id="password-check" name="password-check" 
                        placeholder="Herhaal wachtwoord" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                        title="Wachtwoord moet minimaal 1 cijfer, 1 letter en 1 hoofdletter bevatten en minimaal 8 karakter lang zijn."/> <!-- Pattern gevonden op htpp://html5pattern.com -->
                    </div>
                    <hr>
                    <input type="submit" value="Registeren">
                </form>
            </section>
        </main>
        <?=PAGE_FOOTER?>
    </body>
</html>