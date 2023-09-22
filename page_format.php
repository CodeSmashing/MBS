<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Some Title</title>
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <?php
    require_once('config.php');
    require_once('sqlquerys.php');
    ?>
</head>

<body>
    <?php
    if (isset($_POST["logout_request"])) {
        unset($_SESSION["logged_in"]);
        unset($_POST["logout_request"]);
    }
    ?>
    <ul name="navbar">
        <li><a href="home.php">Home</a></li>
        <?php
        if (!isset($_SESSION["logged_in"])) { ?>
            <li><a href="login.php">Inloggen</a></li>
        <?php } else { ?>
            <li>
                <form method="post">
                    <button type="submit" name="logout_request" value="1" formtarget="_self">Uitloggen</a>
                </form>
            </li>
        <?php }

        if (isset($_SESSION["logged_in"])) { ?>
            <li><a href="user_settings.php">Settings</a></li>
        <?php }
        ?>
        <li><a href="database.php">Database</a></li>
        <li><a href="password_formatter.php">Pass formatter</a></li>
    </ul>

    <hr>
    <div class="main-page">
        
    </div>
    <div class="bottom-section">
        <p>© 2023 All Rights Reserved. Design by me</p>
    </div>
</body>

</html>
<?php ob_end_flush(); ?>