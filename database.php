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
        <span name="center">| De user database |</span><br><br>
    <div class="main-page">
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
    </div>
    <div class="bottom-section">
        <p>© 2023 All Rights Reserved. Design by me</p>
    </div>
</body>

</html>
<?php ob_end_flush(); ?>