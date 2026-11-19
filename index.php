<?php
require __DIR__ . '/app/bootstrap.php';

?>

<!doctype html>
<html lang="<?=sanitationChars($languaje)?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index</title>
    <link rel="stylesheet" href="public/assets/style.css">
</head>
<body class="bg-<?=sanitationChars($theme)?>">
    <dic>
        <p>1. ¿Por qué no deberías confiar en un valor de cookie aunque lo haya creado originalmente tu aplicación?
        <p>Porque puede ser editado</p>
        </p>
        <p>2. ¿Por qué setcookie() debe ejecutarse antes de enviar contenido?</p>
        <p>Porque se envian dentro de las cabeceras http</p>
        <p>3. ¿Qué diferencia práctica existe entre una cookie de preferencia y una cookie que identifica una sesión
            autenticada?
        <p>La diferencia entre una de prefencia y una de sesion es la informacion sensible del usuario.
            La de sesion te permite entrar en usuarios privados mientras que otras tienen informacion acerca de la
            web  pero no informacion sensible</p>
        </p>
    </dic>
    <div>
        <p> <?=sanitationChars($languaje)?>, <?=sanitationChars($theme)?>, <?= sanitationChars($elements) ?></p>

    </div>
    <div>
        <a href="public/preferences.php"><button>Preferencias</button></a>
    </div>
</body>
</html>
