<?php
ini_set('session.cookie_samesite', 'Lax');
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once $_SERVER['DOCUMENT_ROOT'] . "/php/sqlquerys.php";
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (!empty($_POST["action"] && $_POST["action"] === "logout")) {
        unset($_SESSION["logged_in"]);
        unset($_POST["action"]);

        // Exit and send a JSON response giving |success|login|exit-reason|server-message| info
        echo json_encode(array("success" => true, "logged_in" => !empty($_SESSION["logged_in"]), "exit-reason" => "logout succesfull", "server-message" => "According to us, the logout was a success."));
        exit;
    }

    if (
        !empty($_POST["action"]) && ($_POST["action"] === "register-form" || $_POST["action"] === "login-form" || $_POST["action"] === "check_session")
    ) {
        $users_database = sqlSelectUsers($pdo);

        // Create two associative arrays, one with usernames as keys for faster lookups, the other with passwords
        $usernames = array_flip(array_map("strtolower", array_column($users_database, "name_user")));

        // If a username and password are given, and we're not checking the session
        if (!empty($_POST["username"]) && !empty($_POST["password"]) && $_POST["action"] != "check_session") {
            // We initialise the username and password for further use
            $given_username = $_POST["username"];
            $given_password = $_POST["password"];
            $options = array(
                "options" => array(
                    "regexp" => "/^[a-zA-Z0-9_]+$/"
                )
            );

            $input_username = trim(filter_var($given_username, FILTER_VALIDATE_REGEXP, $options));
            // $_SESSION["message"]["username"] = "According to us, the given username was $input_username.";

            $input_password = trim(filter_var($given_password, FILTER_VALIDATE_REGEXP, $options));
            $hash = password_hash($input_password, PASSWORD_DEFAULT);

            // $_SESSION["message"]["username"] = "According to us, the given password was $input_password.";
        }

        // If the user attempts to register
        if ($_POST["action"] === "register-form") {
            // If username is already in use
            if (isset($usernames[strtolower($input_username)])) {
                // Exit and send a JSON response giving |success|login|exit-reason|server-message| info
                echo json_encode(array("success" => true, "logged_in" => !empty($_SESSION["logged_in"]), "exit-reason" => "name unavailable", "server-message" => "According to us, this username is already in use."));
                exit;
            }

            // Create next user, welcome!
            sqlInsertUser($pdo, $input_username, $hash);

            $_SESSION["logged_in"] = array(
                "level" => 0,
                "logged_in" => true,
                "user" => $input_username,
            );

            // Exit and send a JSON response giving |success|login|exit-reason|server-message| info
            echo json_encode(array("success" => true, "logged_in" => !empty($_SESSION["logged_in"]), "exit-reason" => "succesfully created user", "server-message" => "According to us, this username isn't in use."));
            exit;
            // If the user attempts to login
        } elseif ($_POST["action"] === "login-form") {
            foreach ($users_database as $user_array) {
                if (strtolower($user_array["name_user"]) === strtolower($input_username)) {
                    if (password_verify($input_password, $user_array["password_user"])) {
                        // Handle the case where the password is found in the array
                        $_SESSION["logged_in"] = array(
                            "level" => 0,
                            "logged_in" => true,
                            "user" => $input_username,
                        );

                        // Exit and send a JSON responhashse giving |success|login|exit-reason|server-message| info
                        echo json_encode(array("success" => true, "logged_in" => !empty($_SESSION["logged_in"]), "exit-reason" => "credentials correct", "server-message" => "According to us, the given username and password match that of someone in our database."));
                        exit;
                        break;
                    }
                }
            }
            // Exit and send a JSON response giving |success|login|exit-reason|server-message| info
            echo json_encode(array("success" => true, "logged_in" => !empty($_SESSION["logged_in"]), "exit-reason" => "credentials incorrect", "server-message" => "According to us, the given username and password don't match that of someone in our database."));
            exit;
        } elseif ($_POST["action"] == "check_session") {
            // Exit and send a JSON response giving |success|login|exit-reason|server-message| info
            echo json_encode(array("success" => true, "logged_in" => !empty($_SESSION["logged_in"]), "exit-reason" => "session check complete", "server-message" => "According to us, the session was checked succesfully."));
            exit;
        }
    }
}
