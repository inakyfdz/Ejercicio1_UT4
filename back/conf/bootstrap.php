<?php
declare(strict_types=1);
require_once __DIR__ . "/stylesConf.php";
require_once __DIR__ . "/../securityTools/HttpsToolsSec.php";
require_once __DIR__ . "/../securityTools/verificarionsChars.php";

session_set_cookie_params(
    [
        "httponly" => true,
        "secure" =>requestHTTPS(),
        "path" => "/",
        "lifetime" => 0,
        "samesite" => "Lax",
    ]
);

