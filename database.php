<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Database</title>
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
    <span class="center holder">| De user database |</span><br><br>

    <main>
        <?php
        $list_users = sql_select_users($pdo);
        $list_items = array();
        foreach ($list_users[1] as $key => $value) {
            $list_items[] = $key;
        }
        ?>
        <table class="table-container">
            <tr>
                <?php
                foreach ($list_items as $item) {
                    echo "<th>" . $item . "</th>";
                }
                ?>
            </tr>
            <tbody>
                <?php
                for ($i = 0; $i < count($list_users); $i++) {
                    echo "<tr>";
                    foreach ($list_users[$i] as $key => $value) {
                        echo "<td>$value</td>";
                    }
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </main>

    <?php footer(); ?>
</body>

</html>
<?php ob_end_flush(); ?>