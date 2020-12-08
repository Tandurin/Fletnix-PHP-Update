<?php
    function returnOutStringAndLength($input){
        print("<h1>$input" . ' <em>' . strlen($input) . "</em></h1>");
    }

    $testString = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

    $school = "Hogeschool van Arnhem en Nijmegen";
    
    function last3Characters($string) {
        return substr($string, -3);
    }

    //Testprint
    print(last3Characters($school));
?>
<!DOCTYPE html>
<html>
    <body>
        <?php returnOutStringAndLength($testString); ?>
    </body>
</html>
