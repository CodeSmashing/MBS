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
        <li><a href="password_formatter.php">Home</a></li>
    </ul>

    <hr>
    <?php $list_users = sql_select_users($pdo); ?>
    <span name="center">| De user database |</span><br>
    <table class="database-container">
        <tr>
            <th><!-- Deliberately empty --></th>
            <?php
            for ($i = 0; $i < count($list_users); $i++) {
                echo "<th>" . $list_users[$i] . "</th>";
            }
            ?>
        </tr>
        <tbody>
            <tr>
                <td>Test Row</td>
                <td>Test Row</td>
            </tr>
            <tr>
                <td>Test Row 2</td>
                <td>Test Row 2</td>
            </tr>
        </tbody>
    </table>
    <?php
    var_dump($list_users);
    for ($i = 0; $i < count($list_users); $i++) {
        echo "User #" . ($i + 1) . " Information:<br>";
        echo "ID: " . $list_users[$i]["id_user"] . "<br>";
        echo "Username: " . $list_users[$i]["username"] . "<br>";
        echo "Password: " . $list_users[$i]["user_password"] . "<br>";
        echo "Created At: " . $list_users[$i]["created_at"] . "<br>";
        echo "<br>";
    }

    foreach ($list_users as $key => $value) {
        echo "<span>";
        var_dump($key);
        echo "</span><br>";
        echo "<span>";
        var_dump($value);
        echo "</span><br>";
    }
    echo "<span></span>";
    ?>
</body>

</html>
<?php ob_end_flush(); ?>