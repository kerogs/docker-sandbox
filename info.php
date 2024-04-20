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
        <?php
        // Informations générales sur le serveur
        echo "<h2>Informations générales sur le serveur :</h2>";
        echo "Nom du serveur : " . $_SERVER['SERVER_NAME'] . "<br>";
        echo "Adresse IP du serveur : " . $_SERVER['SERVER_ADDR'] . "<br>";
        echo "Logiciel du serveur : " . $_SERVER['SERVER_SOFTWARE'] . "<br>";
        echo "Port utilisé : " . $_SERVER['SERVER_PORT'] . "<br>";

        // Informations sur PHP
        echo "<h2>Informations sur PHP :</h2>";
        echo "Version de PHP : " . phpversion() . "<br>";

        // Informations sur le système
        echo "<h2>Informations sur le système :</h2>";
        echo "Nom de l'hôte : " . php_uname('n') . "<br>";
        echo "Système d'exploitation : " . php_uname('s') . "<br>";
        echo "Version du noyau : " . php_uname('r') . "<br>";

        echo "<h2>Utilisation du disque :</h2>";
        $disk_total_space = disk_total_space("/");
        $disk_free_space = disk_free_space("/");
        echo "Espace total : " . formatSize($disk_total_space) . "<br>";
        echo "Espace libre : " . formatSize($disk_free_space) . "<br>";

        // Utilisation de la mémoire
        echo "<h2>Utilisation de la mémoire :</h2>";
        echo "Mémoire totale : " . formatSize(memory_get_usage(true)) . "<br>";
        echo "Mémoire utilisée : " . formatSize(memory_get_peak_usage(true)) . "<br>";
        ?>

        <div class="image">
            <img src="./src/img/logo_white.png" alt="">
        </div>
    </main>

</body>

</html>