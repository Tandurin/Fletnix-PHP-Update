<?php
    session_start();
    // Importeer validatie functie voor inputvelden
    require_once '../functions/testInput.php';

    // Defineer foutmeldingen
    $error_email = $error_pass = "";

    // Begin formulier validatieprocess
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (empty($_POST['email'])) {
            $error_email = "U heeft geen emailadres ingevuld.";
        } else {
            $_SESSION['email'] = testInput($_POST['email']);
            // Valideer e-mail adres
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error_email = "Ingevuld emailadres heeft een ongeldig formaat.";
            }
        }

        if (empty($_POST['pass'])) {
            $error_pass = "U heeft geen wachtwoord ingevuld.";
        } else {
            $password = testInput($_POST['pass']);
            // Controleer Regex van invuldveld
            $passwordPattern = "/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z]{8,}$/";
            if (!preg_match($passwordPattern, $password)) {
                $error_pass = "U heeft geen geldig wachtwoord ingevoerd.";
            }
        }
    }

    $_SESSION['firstname'] = "David";
    $_SESSION['lastname'] = "Testgebruiker";
    $_SESSION['subscription'] = "Basis";


    require_once('../footer.php');
    require_once('../header.php');
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
        <?=PAGE_HEADER?>

        <main class="flexcontainer">
            <section class="form">
                <h2>Log In</h2>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                    <div class="inputfield">
                        <label for="email">E-mailadres</label>
                        <i class="fa fa-user fa-lg form-icon"></i>
                        <input required autofocus type="email" id="email" name="email" 
                        placeholder="E-mailadres" title="E-mail moet juist geformuleerd zijn. Bijvoorbeeld: voorbeeld@host.nl" />
                        <span class="error"><?=$error_email?></span>
                    </div>
                    <div class="inputfield">
                        <label for="pass">Wachtwoord</label>
                        <i class="fa fa-key fa-lg form-icon"></i>
                        <input required type="password" id="pass" name="pass" 
                        placeholder="Wachtwoord" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                        title="Wachtwoord moet minimaal 1 cijfer, 1 letter en 1 hoofdletter bevatten en minimaal 8 karakter lang zijn." /> <!-- Pattern gevonden op htpp://html5pattern.com -->
                        <span class="error"><?=$error_pass?></span>
                    </div>
                    <hr>
                    <input type="submit" value="Log In">
                </form>
            </section>
        </main>
        <?=PAGE_FOOTER?>
    </body>
</html>