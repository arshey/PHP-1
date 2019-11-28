<?php

function checkbox(string $name, string $value, array $data): string
{
    $attributes = '';
    if (isset($data[$name]) && in_array($value, $data[$name])) {
        $attributes .= 'checked';
    }
    return <<<HTML
        <input type="checkbox" class="form-check-input" name="{$name}[]" id="" value="$value" $attributes>   
HTML;
}

function radio(string $name, string $value, array $data): string
{
    $attributes = '';
    if (isset($data[$name]) && $value === $data[$name]) {
        $attributes .= 'checked';
    }
    return <<<HTML
        <input type="radio" name="{$name}[]" value="$value" $attributes>   
HTML;
}

function select(string $name, $value, array $options): string
{
    $html_options = [];
    foreach ($options as $k => $option) {
        $attributes = $k == $value ? ' selected ' : '';
        $html_options[] = "<option value='$k' $attributes>$option</option>";
    }
    return "<select class='form-control' name='{$name}'>" . implode($html_options) . '</select>';
}

function dump($variable)
{
    echo '<pre>';
    var_dump($variable);
    echo '</pre>';
}

function creneaux_html(array $creneaux)
{
    if (empty($creneaux)) {
        return 'Fermé';
    }
    $phrases = [];
    foreach ($creneaux as $creneau) {

        $phrases[] = " <strong>{$creneau[0]}</strong> h / <strong>{$creneau[1]}</strong> h ";
    }
    return 'Ouvert de ' . implode(' et ', $phrases);
    //dump($phrases);
}

// function jours_html(array $jours)
// {
//     $phrases = [];
//     foreach ($jours as $key => $value) {

//         if (count($value) === 0) {
//             $phrases[] = "<li> <strong>{$key}</strong> : Fermé </li><br>";
//         } elseif (count($value) === 1) {
//             $phrases[] = "<li> <strong>{$key}</strong> : ouvert de <strong>{$value[0][0]}h</strong> / <strong>{$value[0][1]}h</strong></li> <br>";
//         } elseif (count($value) === 2) {
//             $phrases[] = "<li> <strong>{$key}</strong> : ouvert de <strong>{$value[0][0]}h</strong> / <strong>{$value[0][1]}h</strong> & de <strong>{$value[1][0]}h</strong> à <strong>{$value[1][1]}h</strong></li><br>";
//         } else {
//             $phrases[] = "on ne doit disposer que de 2 plages horaires ";
//         }
//     }
//     return implode($phrases);
// }

function in_creneaux(int $heure, array $creneaux): bool
{
    foreach ($creneaux as $creneau) {
        $debut = $creneau[0];
        $fin = $creneau[1];
        if ($heure >= $debut && $heure < $fin) {
            return true;
        }
    }
    return false;
}
