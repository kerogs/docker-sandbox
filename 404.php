<?php

function formatSize($bytes)
{
    $units = array('B', 'KB', 'MB', 'GB', 'TB');
    $bytes = max($bytes, 0);
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
    $pow = min($pow, count($units) - 1);
    $bytes /= (1 << (10 * $pow));
    return round($bytes, 2) . ' ' . $units[$pow];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kerogs | Docker Sandbox</title>
    <link rel="stylesheet" href="./src/css/style.css">
    <link rel="shortcut icon" href="./src/img/ksm-icon.png" type="image/x-icon">
</head>

<body class="background">

    <main>
        <h2>Oups, ERREUR 404</h2>
        <p>URL invalide ou page inexistante</p>

        <div class="image">
            <img src="./src/img/logo_white.png" alt="">
        </div>
    </main>

</body>

</html>