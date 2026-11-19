<?php
require_once __DIR__ . "/../app/bootstrap.php";


if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(!verificarStyles($theme, $stylesOptions)){
        $error = "tema no permitido";
    }else{

        setcookie("theme", $theme,[
            "expires" => time() + (86400 * 30),
            "path" => "/",
            "secure" => requestHTTPS(),
            "httponly" => false,
            "samesite" => "Lax",

        ]);
        $_COOKIE["theme"] = $theme;
    }
}
?>
<!doctype html>
<html lang="<?= htmlspecialchars($languaje) ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Preferencias</title>
    <link rel="stylesSheet" href="assets/style.css"
</head>
<body class="bg-<?=sanitationChars($theme)?>">
<form action="" method="post">
    <label for = "theme"> Tema</label>
    <select name="theme" id="theme">
        <?php stylesOpction($stylesOptions) ?>
    </select>
    <button type="submit">Enviar</button>
</form>
</body>
</html>