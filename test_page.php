<?php
ob_start();
ini_set('session.cookie_samesite', 'Lax');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<style>
    @import url("https://fonts.googleapis.com/css2?family=Inconsolata:wght@300;400;500;700&display=swap");

    :root {
        /* Background */
        --primary-background: rgba(27, 39, 26, 0.93);
        --secondary-background: color-mix(in srgb,
                color-mix(in srgb, var(--primary-background) 90%, #9c6d33 10%) 59%,
                #9c6d33 1%);
        /* Text */
        --primary-text: #c6c6c6;
        --secondary-text: #;
        /* Accent */
        --primary-accent: #4caf50;
        --secondary-accent: #ffc107;
        /* Highlight */
        --primary-highlight: rgba(255, 215, 0, 0.09);
        --secondary-highlight: ;
        /* Border */
        --primary-border: linear-gradient(var(--primary-highlight) 100%, black);
        --secondary-border: ;
        /* Section */
        --primary-section: color-mix(in srgb, var(--primary-background), black);
        /* Button */
        --primary-button: #4caf50;
        --secondary-button: ;
        /* Hover */
        --primary-hover: #666666;
        --secondary-hover: ;
        /* Warning */
        --warning-alert: #ff5722;
        --warning-error: #f44336;
        /* Success */
        --success-alert: ;
        --success-error: ;
    }

    *,
    *::before,
    *::after {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* html style */
    html {
        box-shadow: 0 0 80px 80px black inset;
        background-color: var(--primary-background);
    }

    /* body style */
    body {
        display: grid;
        grid-template-areas:
            'left content right'
            'left content right'
            'left content right';
        grid-auto-columns: 0.09fr 1fr 0.09fr;
        min-height: 100vh;
        max-height: max-content;

        color: var(--primary-text);
        text-shadow: rgba(255, 255, 255, 0.7) 1px 1px;
        font-family: "Inconsolata", system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", monospace;

        background: repeating-linear-gradient(0deg,
                rgba(0, 0, 0, 0.15),
                rgba(0, 0, 0, 0.15) 1px,
                black 5px,
                black 3px);
        opacity: 0.83;
    }

    aside {
        /* background-color: var(--secondary-background); */
        background-color: color-mix(in srgb, var(--secondary-background) 90%, rgb(99, 58, 17) 10%);

        nav {
            width: 50%;
            height: 100vh;
            margin-left: auto;
            margin-right: auto;

            ul {
                height: 100%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                list-style: none;

                >* {
                    margin: 2px 0;

                    &:is(li#logout),
                    &:is(li#settings) {
                        display: none;
                    }
                }
            }
        }

        &:is(.body-aside-left) {
            grid-area: left;
        }

        &:is(.body-aside-right) {
            grid-area: right;
        }
    }

    main {
        display: grid;
        padding: 0 50px;

        &:is(.body-content) {
            grid-area: content;
            padding: 0 100px;
            grid-template-areas:
                'header'
                'main'
                'footer';

            grid-auto-rows: 150px 1fr 150px;
        }

        &:is(#home) {
            grid-area: main;
            justify-self: center;
            grid-template-columns: 1fr 100px 1fr;
            grid-template-rows: calc(100px / 3) 1fr 75px auto;

            >:is(#content-1-title) {
                grid-row: 1;
                grid-column: 1;
            }

            >:is(#content-1) {
                grid-row: 2;
                grid-column: 1;
            }

            >:is(#content-2-title) {
                grid-row: 1;
                grid-column: 3;
            }

            >:is(#content-2) {
                grid-row: 2;
                grid-column: 3;
            }

            >:is(#credits-title) {
                grid-row: 3;
                grid-column: 1;
            }

            >:is(#credits) {
                grid-row: 4;
                grid-column: 1;
            }

            >:is(#results-title) {
                grid-row: 3;
                grid-column: 3;
            }

            >:is(#results) {
                grid-row: 4;
                grid-column: 3;
            }
        }
    }

    header {
        grid-area: header;
        margin-top: auto;
        margin-bottom: auto;
    }

    footer {
        grid-area: footer;
        margin-top: auto;
        margin-bottom: auto;
    }

    /* section style and child elements */
    section {
        background-color: var(--primary-section);
        padding: 25px;

        >* {
            &:is(.border) {
                border: none;
                box-shadow: none;

                &::before {
                    box-shadow: none;
                }
            }
        }

        &:is(#credits),
        &:is(#results) {
            padding: 25px;
            display: flex;
            flex-direction: column;
            /* justify-content: space-between; */

            * {
                margin: 0;
            }
        }
    }

    /* commonly used border and shadow styling */
    .border {
        position: relative;
        border-radius: 10px;
        border: 1px solid;
        border-image-slice: 100%;
        border-image-source: none;
        border-image-slice: 1;
        border-image-source: linear-gradient(var(--primary-highlight) 100%, black);
        box-shadow: 0 0 15px 10px var(--primary-highlight) inset;

        &::before {
            content: "";
            left: 0;
            top: 0;
            width: calc(100% - 10px);
            position: absolute;
            right: 0;
            margin: auto;
            bottom: 0;
            height: calc(100% - 10px);
            box-shadow: 0 0 1px 5px var(--primary-highlight) inset;
        }
    }

    /* headings style */
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        z-index: 1;
        position: relative;
        margin-top: auto;
        text-align: center;
        border-left: 3.5px solid var(--primary-text);
        border-right: 3.5px solid var(--primary-text);
        background-color: rgba(195, 195, 195, 0.1);

        &:hover {
            background-color: rgba(195, 195, 195, 0.259);
        }
    }

    /* anchor style */
    a {
        z-index: 1;
        position: relative;
        color: var(--primary-text);
        text-decoration: none;
        width: fit-content;
        text-decoration: underline 1px solid #fff;
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
        transition: all 0.5s;

        &.current,
        &:hover {
            text-decoration: underline 3px solid #fff;
            background-color: rgb(113, 67, 20);
        }
    }

    /* common inputs style */
    input,
    button,
    label {
        z-index: 1;
        position: relative;
        background-color: transparent;
        color: var(--primary-text);
        border: 1px solid rgba(195, 195, 195, 0.2);
        padding: 5px 15px;
        margin: 15px 5px;
        box-shadow: 0 0 5px 2px black;

        &:is(button),
        &:is(label) {
            cursor: pointer;
            border: 1px solid rgba(20, 20, 20, 1);
            background-color: rgba(0, 0, 0, 0.6);

            &:hover {
                background-color: rgba(0, 0, 0, 1);
                box-shadow: 0 0 5px 2px var(--primary-highlight);
            }
        }
    }

    /* paragraph style */
    p {
        z-index: 1;
        position: relative;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Bruno Hamzic">
    <meta name="description" content="My Big Site.">
    <link rel="icon" type="image/png" href="/images/favicon.png" />

    <link rel="canonical" href="https://...">
    <meta property="og:title" content="About">
    <meta property="og:description" content="My Big Site.">
    <meta property="og:url" content="https://...">
    <meta property="og:image" content="https://.../images/preview.jpg">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@johndoeprogrammer">
    <meta name="twitter:title" content="About">
    <meta name="twitter:description" content="My Big Site.">
    <meta name="twitter:image" content="https://.../images/preview.jpg">
    <!-- Remember to validate for twitter eventually: https://threadcreator.com/tools/twitter-card-validator -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Remember Open Graph Meta Tags -->
    <title>About</title>

    <!-- Internal file links -->

    <?php
    include_once $_SERVER['DOCUMENT_ROOT'] . "/php/config.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/php/sqlquerys.php";
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <aside class="body-aside-left">
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li id="login"><a href="login.php">Login</a></li>
                <li id="logout"><a href="#" target="_self">Logout</a></li>
                <li id="settings"><a href="settings.php">Settings</a></li>
                <li><a href="database.php">Database</a></li>
                <li><a href="format.php">Pass formatter</a></li>
                <li><a class="current" href="about.php">About</a></li>
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

            <h2 id="credits-title" class="">Credits</h2>
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
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur fugiat cumque obcaecati unde velit vitae, quos alias sunt earum incidunt omnis vero voluptate amet error ex tenetur eius inventore pariatur.
        </p>
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

</html>
<?php ob_end_flush(); ?>