<?php
declare(strict_types=1);
require_once __DIR__ . "/stylesConf.php";
require_once __DIR__ . "/../tools/security.php";

$theme = $_COOKIE["theme"] ?? "light";
$error = null;
$stylesOptions = ["light", "dark", "arasaka"];

session_set_cookie_params(
    [
        "httponly" => true,
        "secure" =>requestHTTPS(),
        "path" => "/",
        "lifetime" => 0,
        "samesite" => "Lax",
    ]
);
