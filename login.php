<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <?php
    require_once('config.php');
    require_once('sqlquerys.php');
    ?>
</head>

<body>
    <?php
    $_SESSION["message"]["username"] = "";
    $_SESSION["message"]["password"] = "";
    $_SESSION["message"]["attempt"] = "";
    $input_username = "";
    $input_password = "";
    $attempt = 0;

    // We initialise the username for later use
    if (isset($_REQUEST["username"]) && $_REQUEST["username"] != "") {
        $username = $_REQUEST['username'];
        $options = array(
            'options' => array(
                'regexp' => '/^[a-zA-Z0-9_]+$/'
            )
        );
        $input_username = trim(filter_var($username, FILTER_VALIDATE_REGEXP, $options));
    } else {
        $_SESSION["message"]["username"] = '<span>Volgens ons is er geen gebruikersnaam ingegeven.</span>';
    }

    // We initialise the password for later use
    if (isset($_REQUEST["pass"]) && $_REQUEST["pass"] != "") {
        $password = $_REQUEST['pass'];
        $options = array(
            'options' => array(
                'regexp' => '/^[a-zA-Z0-9_]+$/'
            )
        );
        $input_password = trim(filter_var($password, FILTER_VALIDATE_REGEXP, $options));
    } else {
        $_SESSION["message"]["password"] = '<span>Volgens ons is er geen paswoord ingegeven.</span>';
    }


    // If the user attempts to register
    if (isset($_POST["register_attempt"])) {
        if ((isset($input_username) && $input_username != "") && (isset($input_password) && $input_password != "")) {
            $list_users = sql_select_users($pdo);
            foreach ($list_users as $key => $value) {
                if (strtolower($list_users[$key]["username"]) === strtolower($input_username)) {
                    $_SESSION["message"]["attempt"] = "<span>Deze gebruikersnaam is al in gebruik.</span>";
                    $attempt = 1;
                    break;
                }
            }
            if ($attempt == 0) {
                $hash = password_hash($input_password, PASSWORD_DEFAULT);
                sql_insert_user($pdo, $input_username, $hash);
            }
        } else {
            $_SESSION["message"]["attempt"] = "<span>U moet een naam en passwoord invullen om te registreren.</span>";
        }
    }
    if (isset($_POST["login_attempt"])) {
        if ((isset($input_username) && $input_username != "") && (isset($input_password) && $input_password != "")) {
            $list_users = sql_select_users($pdo);
            foreach ($list_users as $key => $value) {
                if ((strtolower($list_users[$key]["username"]) === strtolower($input_username)) && (password_verify($input_password, $list_users[$key]["user_password"]) === true)) {
                    $_SESSION["logged_in"] = array(
                        "level" => 0,
                        "logged_in" => true,
                        "user" => $input_username,
                    );
                    break;
                }
            }
        } else {
            $_SESSION["message"]["attempt"] = "<span>U moet een naam en passwoord invullen om in te loggen.</span>";
        }
    }
    if (isset($_POST["logout_request"])) {
        unset($_SESSION["logged_in"]);
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
    </ul>
    
    <hr>
    <fieldset name="login_field">
        <?php
        echo (isset($_SESSION["message"]["username"]) && ($_SESSION["message"]["username"] != "")) ? $_SESSION["message"]["username"] . "<br>" : null;
        echo (isset($_SESSION["message"]["password"]) && ($_SESSION["message"]["password"] != "")) ? $_SESSION["message"]["password"] . "<br>" : null;
        echo (isset($_SESSION["message"]["attempt"]) && ($_SESSION["message"]["password"] != "")) ? $_SESSION["message"]["attempt"] . "<br>" : null;

        if (!isset($_SESSION["logged_in"])) { ?>
            <?php
            // If there isn't a login request, the standard will be to show the option to register
            if (!isset($_POST["login_request"])) { ?>
                <legend>U kunt nu registreren</legend>
                <form method="post">
                    <input type="text" name="username" placeholder="Uw gebruikersnaam"></input><br>
                    <input type="password" name="pass" placeholder="Uw wachtwoord"></input><br>
                    <button type="submit" name="register_attempt" value="1">Registreer</button>
                    <button type="submit" name="login_request" value="1">Al een gebruiker?</button>
                </form>
            <?php } else { ?>
                <legend>U kunt nu inloggen</legend>
                <form method="post">
                    <input type="text" name="username" placeholder="Uw gebruikersnaam"></input><br>
                    <input type="password" name="pass" placeholder="Uw wachtwoord"></input><br>
                    <button type="submit" name="login_attempt" value="1">Login</button>
                    <button type="submit" name="register_request" value="1">Nog geen gebruiker?</button>
                </form>
            <?php }
        } else { ?>
            <legend>U bent er!</legend>
            <span>Test</span>
            <form method="post">
                <button type="submit" name="logout_request" value="1">Uitloggen</button>
            </form>
        <?php } ?>
    </fieldset>
    <fieldset name="info_field">
        <legend>Gebruiksgegevens</legend>
        <?php
        echo "<span>De \$_REQUEST dump:<br>";
        var_dump($_REQUEST);
        echo "</span><br>";
        echo "<span>De \$_list_users dump:<br>";
        var_dump($list_users);
        echo "</span><hr>";

        echo "<span>De \$input_username: $input_username</span><br>";
        echo "<span>De \$input_password: $input_password</span><br>";
        echo "<span>De \$hash: $hash</span><br><hr>";
        ?>
    </fieldset>
</body>

</html>
<?php ob_end_flush(); ?>