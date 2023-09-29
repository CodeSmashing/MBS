<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>User settings</title>
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
    <table>
        <tr>
            <td>
                <div>
                    <span>Uw username: <?php echo $_SESSION["logged_in"]["user"] ?></span>
                    <input type="text" name="" id="" placeholder="test"></input><br>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <span>Uw level: <?php echo $_SESSION["logged_in"]["level"] ?></span><br>
                <input type="text" name="" id=""></input>
            </td>
        </tr>
    </table>

    <?php bottom_section(); ?>
</body>

</html>
<?php ob_end_flush(); ?>