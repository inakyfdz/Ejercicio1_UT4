<?php
function requestHTTPS(): bool{
    return isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off';
}

function sanitationChars(string $str) : string {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
