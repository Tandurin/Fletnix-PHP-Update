<?php
    require_once("globalInfo/global.php");

    define('PAGE_HEADER',   "<header class=\"navbar\">
                                <nav>
                                    <a href=\"../index.php\"><p class=\"logo-inline\">{$globalInfo["siteName"]}</p></a>
                                    <a href=\"../pages/filmOverview.php\">Kijken</a>
                                    <a href=\"../pages/subscription.php\">Abonnementen</a>
                                    <a href=\"../pages/aboutus.php\">Over Ons</a>
                                    <a class=\"final-item\" href=\"../pages/login.php\">Log In</a>
                                </nav>
                            </header>"
    );
?>