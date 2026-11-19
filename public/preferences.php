<?php
require_once __DIR__ . "/../app/bootstrap.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $theme = $_POST["theme"] ?? "";
    $languaje = $_POST["languaje"] ?? "";
    $elements = $_POST["elements"] ?? "";
    $error = [];

    if (!verifyOption($theme, $stylesOptions)) {
        $error[] = "Tema no permitido";


    }
    if (!verifyOption($languaje, $languageOptions)) {
        $error[] = "Idioma no permitido";


    }
    if (!verifyOption($elements, $elementsOptions)) {
        $error[] = "Elementos no permitidos";

    }
    if (!$error) {


        setcookie("theme", $theme, [
            "expires" => time() + (86400 * 30),
            "path" => "/",
            "secure" => requestHTTPS(),
            "httponly" => false,
            "samesite" => "Lax",
        ]);

        setcookie("languaje", $languaje, [
            "expires" => time() + (86400 * 30),
            "path" => "/",
            "secure" => requestHTTPS(),
            "httponly" => false,
            "samesite" => "Lax",
        ]);

        setcookie("elements", $elements, [
            "expires" => time() + (86400 * 30),
            "path" => "/",
            "secure" => requestHTTPS(),
            "httponly" => false,
            "samesite" => "Lax",
        ]);


        $_COOKIE["theme"] = $theme;
        $_COOKIE["languaje"] = $languaje;
        $_COOKIE["elements"] = $elements;
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
        <?php generateOptions($stylesOptions) ?>
    </select>
    <label for = "languaje"> Tema</label>
    <select name="languaje" id="languaje">
        <?php generateOptions($languageOptions) ?>
    </select>
    <label for = "elements"> Tema</label>
    <select name="elements" id="elements">
        <?php generateOptions($elementsOptions) ?>
    </select>
    <button type="submit">Enviar</button>
</form>
</body>
</html>