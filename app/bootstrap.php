<?php
declare(strict_types=1);
require_once __DIR__ . "/confOption.php";
require_once __DIR__ . "/../tools/security.php";

$stylesOptions = ["light", "dark"];
$languageOptions = ["es", "en"];
$elementsOptions = ["10", "20", "50"];


$theme = $_COOKIE['theme'] ?? 'light';
$languaje = $_COOKIE['languaje'] ?? 'es';
$elements = $_COOKIE['elements'] ?? 10;


$cookieOptions = [
    'expires' => time() + (30 * 24 * 60 * 60),
    'path' => '/',
    'secure' => requestHTTPS(),
    'httponly' => true,
    'samesite' => 'Lax',
];
