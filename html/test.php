<?php

require_once 'config.php';
$jours = jours_html(JOURS);



function jours_html(array $jours)
{
    $phrases = [];

    foreach ($jours as $key => $value) {
        if (!empty($value)) {
            $phrases[] = "<li> {$key} => ouvert le matin de <strong>{$value[0][0]}h</strong> à <strong>{$value[0][1]}h</strong> et l'après midi de <strong>{$value[1][0]}h</strong> à <strong>{$value[1][1]}h</strong></li><br>";
        } else {
            $phrases[] = "<li> {$key} => Désolé mais nous sommes fermé </li><br>";
        }
    }
    return implode($phrases);
}

echo jours_html(CRENEAUX);
