<?php
function requestHTTPS(): bool{
    return isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off';
}
