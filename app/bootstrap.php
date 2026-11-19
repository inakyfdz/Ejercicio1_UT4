<?php
declare(strict_types=1);
require_once __DIR__ . "/stylesConf.php";
require_once __DIR__ . "/../tools/security.php";

$stylesOptions = ["light", "dark"];
$languageOptions = ["es", "en"];
$elementsOptions = ["10", "20", "50"];
session_set_cookie_params(
    [
        "httponly" => true,
        "secure" =>requestHTTPS(),
        "path" => "/",
        "lifetime" => 0,
        "samesite" => "Lax",
    ]
);
