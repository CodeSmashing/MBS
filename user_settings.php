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
    <main>
        <span class="holder">
            <?php var_dump($_SESSION["logged_in"]); ?>
        </span>
        <table>
            <?php
            $j = count($_SESSION["logged_in"]);
            foreach ($_SESSION["logged_in"] as $key => $value) {
                echo "<tr>";
                echo "<td>";
                echo "<span>Uw " . $key . " : " . $value . "</span>";
                echo "</td>";
                echo "<td>";
                echo "<input type='text' name='' id='' placeholder'test'></input>";
                echo "</td>";
                echo "</tr>";
            }
            /**
            for ($i = 0; $i < $j; $i++) {
                echo "<tr>";
                echo "<td>";
                echo "<span>Uw " . $_SESSION["logged_in"][$i] . " : " . $_SESSION["logged_in"] . "</span>";
                echo "</td>";
                echo "<td>";
                echo "<input type='text' name='' id='' placeholder'test'></input>";
                echo "</td>";
                echo "</tr>";
            }
             **/
            ?>
        </table>
    </main>

    <?php footer(); ?>
</body>

</html>
<?php ob_end_flush(); ?>