<?php
function minutenNaarUur($tijd){
    $uren = floor($tijd / 60);
    $minuten = $tijd % 60;

    if($minuten == 0) {
        return $uren . 'h';
    } else {
        return $uren . 'h:' . sprintf('%02d', $minuten) . 'm';
    }
}
?>