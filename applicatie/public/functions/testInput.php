<?php    
    // Stript alle foutief ingevulde informatie uit input strings.
    // Verwijderd eerst spaties/tabs, vervolgens backslashes 
    // en als laatste conversie van html-karakters.
    function testInput($info) {
        $info = trim($info);
        $info = stripslashes($info);
        $info = htmlspecialchars($info);
        return $info;
    }
?>