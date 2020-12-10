<?php
    require_once("globalInfo/global.php");

    $copyJaar = 2020;
    $huidigJaar = $globalInfo["serverDate"];
    $copyrightLabel = '';

    if($copyJaar == $huidigJaar) {
        $copyrightLabel = $copyJaar;
    } else {
        $copyrightLabel = "$copyJaar - $huidigJaar";
    }

    define('PAGE_FOOTER',   "<footer class=\"footer\">
                                <div class=\"item\">
                                    <p class=\"logo-inline\">{$globalInfo['siteName']}</p>
                                </div>
                                <p>
                                    ©$copyrightLabel
                                </p>
                            </footer>"
    );
?>