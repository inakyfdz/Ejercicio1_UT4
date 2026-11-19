<?php
$stylesOptions = ["light", "dark"];

$theme = $_COOKIE["theme"] ?? "light";

function verificarStyles(&$theme, $stylesOptions) :bool {
    if (!is_string($theme) || !in_array($theme, $stylesOptions)) {
        return false;
    }
    return true;
}



function stylesOpction($stylesOptions){
    foreach ($stylesOptions as $style) {
        echo '<option value="'.$style.'">'.$style.'</option>';
    }
}
