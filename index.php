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
    <meta property="og:title" content="Home">
    <meta property="og:description" content="My Big Site.">
    <meta property="og:url" content="https://...">
    <meta property="og:image" content="https://.../images/preview.jpg">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@johndoeprogrammer">
    <meta name="twitter:title" content="Home">
    <meta name="twitter:description" content="My Big Site.">
    <meta name="twitter:image" content="https://.../images/preview.jpg">
    <!-- Remember to validate for twitter eventually: https://threadcreator.com/tools/twitter-card-validator -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="dark ligth">

    <!-- Remember Open Graph Meta Tags -->
    <title>Home</title>

    <!-- Internal file links -->
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/dark-mode.css" id="style-link"> -->

    <?php
    include_once $_SERVER['DOCUMENT_ROOT'] . "/php/config.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/php/sqlquerys.php";
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <aside class="body-aside-left">
        <nav>
            <ul>
                <li><a class="current" href="index.php">Home</a></li>
                <li id="login"><a href="login.php">Login</a></li>
                <!-- Instead, check for a click on an anchor element with the id "logout" with javascript, then send ajax to logout and unset session -->
                <li id="logout"><a href="#" target="_self">Logout</a></li>
                <li id="settings"><a href="settings.php">Settings</a></li>
                <li><a href="database.php">Database</a></li>
                <li><a href="format.php">Pass formatter</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="test_page.php">Test</a></li>
            </ul>
        </nav>
    </aside>
    <main class="body-content border">
        <header>
            <h1>The Home Page</h1>
        </header>
        <main id="home">
            <h2 id="content-1-title">My section</h2>
            <section id="content-1" class="border">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda ducimus unde esse exercitationem, sunt ex ratione cum rerum odio. Repudiandae exercitationem obcaecati nostrum possimus quo numquam non in maiores ut.</p><br>
                <p>
                    The following is the jquery behind a logout link click event:
                </p><br>
                <pre>
<code><output>$("#logout a").click(function(event) {
event.preventDefault();
sendRequest("Requesting logout...", null, null, "logout");
});</output></code>
                </pre>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda ducimus unde esse exercitationem, sunt ex ratione cum rerum odio. Repudiandae exercitationem obcaecati nostrum possimus quo numquam non in maiores ut.</p><br>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda ducimus unde esse exercitationem, sunt ex ratione cum rerum odio. Repudiandae exercitationem obcaecati nostrum possimus quo numquam non in maiores ut.</p><br>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda ducimus unde esse exercitationem, sunt ex ratione cum rerum odio. Repudiandae exercitationem obcaecati nostrum possimus quo numquam non in maiores ut.</p><br>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda ducimus unde esse exercitationem, sunt ex ratione cum rerum odio. Repudiandae exercitationem obcaecati nostrum possimus quo numquam non in maiores ut.</p><br>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda ducimus unde esse exercitationem, sunt ex ratione cum rerum odio. Repudiandae exercitationem obcaecati nostrum possimus quo numquam non in maiores ut.</p><br>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda ducimus unde esse exercitationem, sunt ex ratione cum rerum odio. Repudiandae exercitationem obcaecati nostrum possimus quo numquam non in maiores ut.</p><br>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda ducimus unde esse exercitationem, sunt ex ratione cum rerum odio. Repudiandae exercitationem obcaecati nostrum possimus quo numquam non in maiores ut.</p><br>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda ducimus unde esse exercitationem, sunt ex ratione cum rerum odio. Repudiandae exercitationem obcaecati nostrum possimus quo numquam non in maiores ut.</p><br>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda ducimus unde esse exercitationem, sunt ex ratione cum rerum odio. Repudiandae exercitationem obcaecati nostrum possimus quo numquam non in maiores ut.</p><br>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda ducimus unde esse exercitationem, sunt ex ratione cum rerum odio. Repudiandae exercitationem obcaecati nostrum possimus quo numquam non in maiores ut.</p><br>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda ducimus unde esse exercitationem, sunt ex ratione cum rerum odio. Repudiandae exercitationem obcaecati nostrum possimus quo numquam non in maiores ut.</p><br>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda ducimus unde esse exercitationem, sunt ex ratione cum rerum odio. Repudiandae exercitationem obcaecati nostrum possimus quo numquam non in maiores ut.</p><br>
            </section>

            <h2 id="content-2-title">My section</h2>
            <section id="content-2" class="border">
                <p>"Slide them digits" - Wout's Snapchat 12/12/2023</p><br>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda ducimus unde esse exercitationem, sunt ex ratione cum rerum odio. Repudiandae exercitationem obcaecati nostrum possimus quo numquam non in maiores ut.</p><br>
                <p>
                    The pass formatter page is...
                    <br>
                    <a href="format.php">Check it here</a>
                </p>

                <br>
                <hr>
                <br>

                <p>
                    The database page is...
                    <br>
                    <a href="database.php">Check it here</a>
                </p>

                <br>
                <hr>
                <br>

                <p class="border">
                    The login page is...
                    <br>
                    <a href="login.php">Check it here</a>
                </p>

                <br>
                <hr>
                <br>

                <p>
                    The user settings page is...
                    <br>
                    <a href="settings.php">Check it here</a>
                </p>

                <br>
                <hr>
                <br>

                <p>
                    This website is... the creative project/outlet of a novice programmer?
                    <br><br>
                    I'll be adding anything and everything I can think of here.<br>
                    <a href="about.php">Check it here</a>
                </p>
            </section>

            <h2 id="credits-title">Credits</h2>
            <section id="credits" class="border">
                <a href="https://www.google.com">Google.com</a>
                <a href="https://css-tricks.com/how-to-make-a-css-only-carousel/">CSS carousel help</a>
                <a href="https://www.tutorialspoint.com/get-all-the-images-from-a-folder-in-php">Get images help</a>
                <a href="https://codepen.io/vincentorback/pen/zxRyzj">Infinite scrolling help</a>
                <a href="https://devhints.io/html-meta">Meta tag cheat sheet</a>
                <a href="https://www.youtube.com/watch?v=-B58GgsehKQ&pp=ygUkcG9ydGZvbGlvIHNlYXJjaCBlbmdpbmUgb3B0aW1pemF0aW9u">Meta tag help</a>
                <a href="https://www.javatpoint.com/jquery-validation">Help validation</a>
            </section>

            <h2 id="results-title">Results</h2>
            <section id="results" class="border">
                <p id="response-request"></p>
            </section>
        </main>
        <footer>
            <h2>&copy; 2023 Bruno Hamzic. All Rights Reserved.</h2>
        </footer>
    </main>
    <aside class="body-aside-right">
        <div class="img-slider">
            <div class="slider-loop js-loop">
                <?php
                $directory = "images/";
                $images = glob($directory . "*");
                for ($i = 0; $i < 2; $i++) {
                    $slide_counter = 1;
                    foreach ($images as $image) {
                        echo "<div class='slide-{$slide_counter}" . ($i > 0 ? " is-clone" : "") . "'><img src='" . $image . "' alt='#' /></div>";
                        $slide_counter++;
                    }
                }
                ?>
            </div>
        </div>
    </aside>
</body>

<!-- For debugging with PHP, mostly doesn't really function, will probably need to use json_encode or something.
Don't have the source with me anymore, but it's gonna change quite a bit to the point it's not even correct to source them anymore -->
<?php
function debug_to_console($data) {
    echo "<script>console.log('Debug Object(s):');";
    echo "console.log(" . $data . ");</script>";
}
?>

<!-- For allowing the infinite scrolling on the aside element -->
<script>
    // Thank you Vincent for the infinite scroll behaviour: https://codepen.io/vincentorback/pen/zxRyzj
    // Thank you Perplexity Ai for your magic in making it automatic and continuous
    let context = document.querySelector('.js-loop'),
        clones = context.querySelectorAll('.is-clone'),
        disableScroll = false,
        scrollHeight = 0,
        scrollPos = 0,
        clonesHeight = 0,
        i = 0,
        scrollSpeed = 1; // set the scroll speed here

    function getScrollPos() {
        return (context.pageYOffset || context.scrollTop) - (context.clientTop || 0);
    }

    function setScrollPos(pos) {
        context.scrollTop = pos;
    }

    function getClonesHeight() {
        clonesHeight = 0;

        for (i = 0; i < clones.length; i += 1) {
            clonesHeight = clonesHeight + clones[i].offsetHeight;
        }

        return clonesHeight;
    }

    function reCalc() {
        scrollPos = getScrollPos();
        scrollHeight = context.scrollHeight;
        clonesHeight = getClonesHeight();

        if (scrollPos <= 0) {
            setScrollPos(1); // Scroll 1 pixel to allow upwards scrolling
        }
    }

    function scrollUpdate() {
        if (!disableScroll) {
            scrollPos = getScrollPos();

            if (clonesHeight + scrollPos >= scrollHeight) {
                // Scroll to the top when you’ve reached the bottom
                setScrollPos(1); // Scroll down 1 pixel to allow upwards scrolling
            } else {
                // Scroll down continuously
                setScrollPos(scrollPos + scrollSpeed);
            }
        }
    }

    function init() {
        reCalc();

        // Remove the scroll event listener
        context.removeEventListener('scroll', scrollUpdate);

        // Call scrollUpdate() continuously
        setInterval(scrollUpdate, 10);

        window.addEventListener('resize', function() {
            window.requestAnimationFrame(reCalc);
        }, false);
    }

    if (document.readyState !== 'loading') {
        init()
    } else {
        document.addEventListener('DOMContentLoaded', init, false)
    }

    /* I guess this is what I tried before, don't really remember:
    document.getElementById('scroll-content').addEventListener("scroll", function(event) {
        let myDiv = this;
        if (myDiv.scrollTop = 600)
            console.log(myDiv.scrollTop);
    });


    document.getElementById("scroll-content").addEventListener("scroll", function(event) {
        var newDiv = document.createElement("div");
        newDiv.innerHTML = "my awesome new div";
        document.getElementById("scroll-content").appendChild(newDiv);
    });

    var checkForNewDiv = function() {
        var lastDiv = document.querySelector("#scroll-content > div:last-child");
        var maindiv = document.querySelector("#scroll-content");
        var lastDivOffset = lastDiv.offsetTop + lastDiv.clientHeight;
        var pageOffset = maindiv.offsetTop + maindiv.clientHeight;
        if (pageOffset > lastDivOffset - 10) {
            var newDiv = document.createElement("div");
            newDiv.innerHTML = "my awesome new div";
            document.getElementById("scroll-content").appendChild(newDiv);
            checkForNewDiv();
        }
    };

    checkForNewDiv();
    */
</script>

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

        let halfHeight = Math.floor(window.innerHeight / 2);

        // On scroll:
        window.onscroll = function() {
            let navigation = document.querySelector("nav");
            let currentScrollPos = window.scrollY;

            // Adjust the top position based on the scroll position + half the viewport's height
            navigation.style.top = window.scrollY + halfHeight + "px";
        };
    });
</script>


</html>
<?php ob_end_flush(); ?>