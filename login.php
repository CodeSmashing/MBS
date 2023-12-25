<?php
ob_start();
ini_set('session.cookie_samesite', 'Lax');
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Bruno Hamzic">
    <meta name="description" content="My Big Site.">
    <link rel="icon" type="image/png" href="/images/favicon.png" />

    <link rel="canonical" href="https://...">
    <meta property="og:title" content="Login">
    <meta property="og:description" content="My Big Site.">
    <meta property="og:url" content="https://...">
    <meta property="og:image" content="https://.../images/preview.jpg">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@johndoeprogrammer">
    <meta name="twitter:title" content="Login">
    <meta name="twitter:description" content="My Big Site.">
    <meta name="twitter:image" content="https://.../images/preview.jpg">
    <!-- Remember to validate for twitter eventually: https://threadcreator.com/tools/twitter-card-validator -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Remember Open Graph Meta Tags -->
    <title>Login</title>

    <!-- Internal file links -->
    <link rel="stylesheet" href="http://mbs.local/css/style.css">

    <?php
    include_once $_SERVER['DOCUMENT_ROOT'] . "/php/config.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/php/sqlquerys.php";
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <aside>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li id="login"><a class="current" href="login.php">Login</a></li>
                <li id="logout"><a href="#" target="_self">Logout</a></li>
                <li id="settings"><a href="settings.php">Settings</a></li>
                <li><a href="database.php">Database</a></li>
                <li><a href="format.php">Pass formatter</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="test_page.php">Test</a></li>
            </ul>
        </nav>
    </aside>
    <div class="flex-box">
        <header>
            <h1>| The Login Page |</h1>
            <hr>
        </header>
        <main>
            <!-- Depending on whether or not the user wishes to:
            login, register, or has already logged in;
            we'll show the corresponding fields and hide the rest -->
            <div class="flex-column">
                <section>
                    <div class="border">
                        <fieldset class="login_field">
                            <input type="checkbox" id="switch-input" hidden>

                            <legend id="login-legend">
                                <h2>You can now log in</h2>
                            </legend>
                            <legend id="register-legend">
                                <h2>You can now register</h2>
                            </legend>
                            <legend id="logged-in-legend">
                                <h2>You made it!</h2>
                            </legend>

                            <br>
                            <hr>
                            <br>

                            <form id="login-form">
                                <input class="grid-item-1" type="text" id="login-form-username" placeholder="Your username">
                                <input class="grid-item-2" type="password" id="login-form-password" placeholder="Your password">
                                <button class="grid-item-3" type="submit" id="login-form-button">Login</button>
                                <button class="grid-item-4" type="reset">Reset</button>
                            </form>

                            <form id="register-form">
                                <input class="grid-item-1" type="text" id="register-form-username" placeholder="Your username">
                                <input class="grid-item-2" type="password" id="register-form-password" placeholder="Your password">
                                <button class="grid-item-3" type="submit" id="register-form-button">Register</button>
                                <button class="grid-item-4" type="reset">Reset</button>
                            </form>

                            <section id="logged-in-message">
                                <p>You have succesfully logged in.<br>Pressing the button below wil log you out.</p>
                                <button class="logout-button" type="button">Logout</button>
                            </section>

                            <label id="switch-label-1" for="switch-input">Not yet a user?</label>
                            <label id="switch-label-2" for="switch-input">Already a user?</label>
                        </fieldset>
                    </div>
                </section>
            </div>
            <div class="flex-column">
                <section>
                    <div class="border">
                        <fieldset class="info_field">
                            <legend>
                                <h2>Data</h2>
                            </legend>
                            <br>
                            <hr>
                            <br>

                            <p id="results">
                                <span id="result-username"></span><br>
                                <span id="result-password"></span><br>
                                <span id="response-request"></span><br>
                            </p>

                            <br>
                            <hr>
                            <br>

                            <p>
                            <h3>| Known logins |</h3>
                            <span>Name : IAMTEST1</span><br>
                            <span>Pass : IAMTEST1</span><br>
                            <br><span>(I've unironically managed to forget all of my previous logins their passwords, and since they're hashed, I literally need to truncate my database.
                                Do note, this does include the admin user I made ;-;7)</span>
                            </p>

                            <br>
                            <hr>
                            <br>
                            <?php
                            /* Old leftover code, no idea if I'll use it:
                                //Once we send the info back from the process.php page we could actually use this.
                                echo "<span>De \$_SESSION['logged_in'] dump:<br>";
                                //var_dump($_SESSION["logged_in"]);
                                echo "</span><br>";
                                echo "<div>De \$_POST dump:<br>";
                                var_dump($_POST);
                                echo "</div><br>";
                                echo "<div>De \$_list_users dump:<br>";
                                //var_dump($list_users);
                                echo "</div><hr>";

                                echo "<div>De gegeven username:</div><br>";
                                echo "<div>De gegeven password:</div><br><hr>";
                            */
                            ?>
                        </fieldset>
                    </div>
                </section>
            </div>
        </main>
        <footer>
            <hr>
            <h2>&copy; 2023 Bruno Hamzic. All Rights Reserved.</h2>
            <details open>
                <summary>Credits</summary>
                <a href="https://www.google.com">Google.com</a>
                <a href="https://css-tricks.com/how-to-make-a-css-only-carousel/">CSS carousel help</a>
                <a href="https://www.tutorialspoint.com/get-all-the-images-from-a-folder-in-php">Get images help</a>
                <a href="https://codepen.io/vincentorback/pen/zxRyzj">Infinite scrolling help</a>
                <a href="https://devhints.io/html-meta">Meta tag cheat sheet</a>
                <a href="https://www.youtube.com/watch?v=-B58GgsehKQ&pp=ygUkcG9ydGZvbGlvIHNlYXJjaCBlbmdpbmUgb3B0aW1pemF0aW9u">Meta tag help</a>
            </details>
        </footer>
    </div>
    <aside></aside>
</body>

<!-- For debugging with PHP, mostly doesn't really function, will probably need to use json_encode or something.
Don't have the source with me anymore, but it's gonna change quite a bit to the point it's not even correct to source them anymore -->
<?php
function debug_to_console($data) {
    echo "<script>console.log('Debug Object(s):');";
    echo "console.log(" . $data . ");</script>";
}
?>

<script>
    $(document).ready(function() {
        // On page load, check if the 'logged_in' session is set
        sendRequest("Checking if session is set correctly.", null, null, "check_session");

        // For if the user wants to log out, we send the appropriate request
        $("#logout a").click(function(event) {
            event.preventDefault();
            sendRequest("Requesting logout...", null, null, "logout");
        });

        // To handle form submission
        $("form").on("submit", function(event) {
            event.preventDefault();
            let id_form = $(this).attr("id");
            if (/login-form/.test(id_form)) {
                validateFormInput("Validating input login...", id_form);
            } else if (/register-form/.test(id_form)) {
                validateFormInput("Validating input register...", id_form);
            }
        });

        // To validate form input before sending it to process.php
        function validateFormInput(message, action) {
            console.log(message);
            let selector_username = $("#" + action + " input[id='" + action + "-username']");
            let selector_password = $("#" + action + " input[id='" + action + "-password']");
            // let selector_email = $("#" + action + " input[id='" + action + "-email']");
            // let selector_number = $("#" + action + " input[id='" + action + "-number']");

            let input_username = $.trim(selector_username.val());
            let input_password = $.trim(selector_password.val());
            // let input_email = $.trim(selector_email.val());
            // let input_number = $.trim(selector_number.val());

            if (input_username.length < 1) {
                selector_username.attr("placeholder", "This field is required");
                selector_username.addClass("error");
                $("#results #result-username").html("The given username isn't valid.");
            } else {
                selector_username.removeClass("error");
                $("#results #result-username").html("The given username is valid.");
            }

            if (input_password.length < 8) {
                selector_password.attr("placeholder", "This field is required");
                selector_password.addClass("error");
                $("#results #result-password").html("The given password isn't valid.");
            } else {
                selector_password.removeClass("error");
                $("#results #result-password").html("The given password is valid.");
            }

            /*
            if (input_email.length < 1) {
                selector_email.attr("placeholder", "This field is required");
                selector_email.addClass("error");
            } else {
                let regEx = /^[A-Z0-9][A-Z0-9._%+-]{0,63}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/;  
                let validEmail = regEx.test(email);  

                if (!validEmail) {
                    selector_email.attr("placeholder", "Enter a valid email");
                    selector_email.addClass("error");
                } else {
                    selector_username.removeClass("error");
                }
            }
            if (input_number.length < 1) {
                selector_number.attr("placeholder", "This field is required");
                selector_number.addClass("error");
            } else {
                selector_username.removeClass("error");
            }
            */

            if (!($("#" + action + " input[id='" + action + "-username']").hasClass("error") || $("#" + action + " input[id='" + action + "-password']").hasClass("error"))) {
                // Inputs are valid
                sendRequest("Requesting form submission...", input_username, input_password, action);
            }
        }

        // To send requests to process.php without forms
        function sendRequest(message, username, password, action) {
            console.log(message);
            if (action != undefined) {
                $.ajax({
                    type: "POST",
                    url: "/php/process.php",
                    data: {
                        username: username,
                        password: password,
                        action: action
                    },
                    success: function(response) {
                        // Server response
                        $("#results #response-request").html("The sendRequest() response: " + response + ".");
                        let data = JSON.parse(response);
                        console.log(data["exit-reason"]);

                        // If data[success] is true
                        if (data.success) {
                            // Adjust what will be visible accordingly
                            if (data.logged_in) {
                                $("#settings, #logout").show();
                                $("#login").hide();
                            } else {
                                $("#settings, #logout").hide();
                                $("#login").show();
                            }
                        }
                    }
                });
            }
        }
    });

    // On scroll:
    window.onscroll = function() {
        let navigation = document.querySelector("nav");
        let scrollPosition = window.scrollY;

        // Adjust the top position based on the scroll position
        navigation.style.marginTop = (scrollPosition) + "px";
    };
</script>

</html>
<?php ob_end_flush(); ?>