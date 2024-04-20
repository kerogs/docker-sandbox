<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kerogs | Docker Sandbox</title>
    <link rel="stylesheet" href="./src/css/style.css">
    <link rel="shortcut icon" href="./src/img/ksm-icon.png" type="image/x-icon">
</head>

<body>

    <div class="ccenter intro">
        KEROGS INFINITE
        <br>
        Bienvenue <?= getenv("HOSTNAME") ?>
        <br><br>
        <img src="./src/img/logo_white.png" alt="">
        <br><br>
        Docker réalisé avec succès.

        <br><br>

        <a href="./info">
            <button class="button">
                Continuer
                <svg fill="currentColor" viewBox="0 0 24 24" class="icon">
                    <path clip-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z" fill-rule="evenodd"></path>
                </svg>
            </button>
        </a>

    </div>

</body>

</html>