<?php
ob_start();
ini_set('session.cookie_samesite', 'Lax');
session_start();
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
    <meta property="og:title" content="Password Formatter">
    <meta property="og:description" content="My Big Site.">
    <meta property="og:url" content="https://...">
    <meta property="og:image" content="https://.../images/preview.jpg">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@johndoeprogrammer">
    <meta name="twitter:title" content="Password Formatter">
    <meta name="twitter:description" content="My Big Site.">
    <meta name="twitter:image" content="https://.../images/preview.jpg">
    <!-- Remember to validate for twitter eventually: https://threadcreator.com/tools/twitter-card-validator -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Remember Open Graph Meta Tags -->
    <title>Password Formatter</title>

    <!-- Internal file links -->
    <link rel="stylesheet" href="/css/style.css">

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
                <li id="login"><a href="login.php">Login</a></li>
                <li id="logout"><a href="#" target="_self">Logout</a></li>
                <li id="settings"><a href="settings.php">Settings</a></li>
                <li><a href="database.php">Database</a></li>
                <li><a class="current" href="format.php">Pass formatter</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="test_page.php">Test</a></li>
            </ul>
        </nav>
    </aside>
    <div class="flex-box">
        <header>
            <h1>| The Format Page |</h1>
            <hr>
        </header>
        <main>
            <section class="flex-row">
                <p> <!-- something --> </p>
            </section>
            <div class="flex-row">
                <div class="flex-column-small">
                    <section>
                        <p>
                            <span>Alphabet numerical respresentation:</span>
                        </p>
                        <p class="format-grid">
                            <?php
                            $alphabet = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
                            foreach ($alphabet as $index => $letter) {
                                echo "<span>$letter: ------------------- " . $index . "</span>";
                            }
                            ?>
                        </p>
                    </section>
                    <section>
                        <p>
                            <span>Month numerical respresentation:</span>
                        </p>
                        <p class="format-grid">
                            <?php
                            $months = array("JAN", "FEB", "MAA", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OKT", "NOV", "DEC");
                            foreach ($months as $index => $month) {
                                echo "<span>$month: ------------------- " . $index . "</span>";
                            }
                            ?>
                        </p>
                    </section>
                    <section>
                        <p>
                            <span>Test string for:</span>
                        </p>
                        <p class="format-grid">
                            <span>BTX;</span>
                            <span>UTX;</span>
                            <span>ATX;</span>
                        </p>
                    </section>
                </div>
                <div class="flex-column-rest format">
                    <section>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum minima totam ratione facere praesentium asperiores quae quidem omnis blanditiis adipisci reprehenderit labore ullam aspernatur consequatur est vitae voluptatibus, sunt quibusdam.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum minima totam ratione facere praesentium asperiores quae quidem omnis blanditiis adipisci reprehenderit labore ullam aspernatur consequatur est vitae voluptatibus, sunt quibusdam.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum minima totam ratione facere praesentium asperiores quae quidem omnis blanditiis adipisci reprehenderit labore ullam aspernatur consequatur est vitae voluptatibus, sunt quibusdam.
                        </p>
                        <p id="results">
                            <span id="response-request"></span><br>
                        </p>
                    </section>
                    <hr>
                    <section>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum minima totam ratione facere praesentium asperiores quae quidem omnis blanditiis adipisci reprehenderit labore ullam aspernatur consequatur est vitae voluptatibus, sunt quibusdam.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum minima totam ratione facere praesentium asperiores quae quidem omnis blanditiis adipisci reprehenderit labore ullam aspernatur consequatur est vitae voluptatibus, sunt quibusdam.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum minima totam ratione facere praesentium asperiores quae quidem omnis blanditiis adipisci reprehenderit labore ullam aspernatur consequatur est vitae voluptatibus, sunt quibusdam.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum minima totam ratione facere praesentium asperiores quae quidem omnis blanditiis adipisci reprehenderit labore ullam aspernatur consequatur est vitae voluptatibus, sunt quibusdam.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum minima totam ratione facere praesentium asperiores quae quidem omnis blanditiis adipisci reprehenderit labore ullam aspernatur consequatur est vitae voluptatibus, sunt quibusdam.
                        </p>
                    </section>
                </div>
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