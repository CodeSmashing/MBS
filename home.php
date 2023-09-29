<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <?php
    require_once('config.php');
    require_once('sqlquerys.php');
    require_once('html_style.php');
    ?>
</head>

<body>
    <?php
    if (isset($_POST["logout_request"])) {
        unset($_SESSION["logged_in"]);
        unset($_POST["logout_request"]);
    }
    ?>
    <?php navbar(); ?>
    <hr>
    <div class="main-page">
        <div class="main-field">
            <span class="holder">
                <p>
                    De pass formatter is...
                </p>
                <a href="password_formatter.php">Bekijk het hier</a>
            </span>
            <hr>
            <span class="holder">
                <p>
                    De database is...
                </p>
                <a href="database.php">Bekijk het hier</a>
            </span>
            <hr>
            <span class="holder">
                <p>
                    De login pagina is...
                </p>
                <a href="login.php">Bekijk het hier</a>
            </span>
            <hr>
            <span class="holder">
                <p>
                    De user settings zijn...
                </p>
                <a href="user_settings.php">Bekijk het hier</a>
            </span>
            <hr>
            <span class="holder">
                <p>
                    Deze website is de creatie van een beginner programmeur waarin hij alles dat hij leert in zal proppen.
                </p>

                <p>
                    Dit betekend elk uniek ideetje waarmee deze zal opkomen of waarvan hij leert, al wat deze leuk vindt als styling, en elke manier van dit toe te passen.
                </p>
                <a href="about.php">Bekijk het hier</a>
            </span>
        </div>
        <div class="sidebar">
            <img src="images/silly_dwarf.png" alt="#">
        </div>
    </div>
    <?php bottom_section(); ?>
</body>

</html>
<?php ob_end_flush(); ?>