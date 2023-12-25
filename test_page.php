<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <?php
    include_once $_SERVER['DOCUMENT_ROOT'] . "/php/config.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/php/sqlquerys.php";
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/javascript/utils.js"></script>
    <script>
        window.onload = function() {
            draw_banner();
        };
    </script>
    <style>
        script {
            display: none;
        }

        canvas#layer_1 {
            position: absolute;
            top: left;
            z-index: -1;
        }

        header {
            position: relative;
            left: 27vw;
            top: 1.3vw;
        }
    </style>
</head>

<body>
    <?php /** remember it was: navbarBannerV2(); **/ ?>
    <canvas id='layer_1'></canvas>
    <header>
        <ul class='navbar_banner'>
            <li><a href='home.php'>Home</a></li>
            <li><a href='login.php'>Login</a></li>

            <li>
                <form method='post'>
                    <button type='submit' name='logout_request' value='1' formtarget='_self'>Logout</button>
                </form>
            </li>

            <li><a href='user_settings.php'>Settings</a></li>

            <li><a href='database.php'>Database</a></li>
            <li><a href='password_formatter.php'>Pass formatter</a></li>
            <li><a href='about.php'>About</a></li>
            <li><a href='test_page.php'>Test</a></li>
        </ul>
    </header>

    <hr>
    <main>
        <div class="main_field">
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_POST['data'])) {
                    $data = $_POST['data'];

                    // Process the data as needed
                    echo "Received data: " . $data;
                } else {
                    echo "No data received.";
                }
            }
            ?>

            <button onclick="myFunction()">My button</button>
            <br>
            <span>My text</span><br>

            <form>
                <label for="data">Enter Data:</label>
                <input type="text" id="data" name="data" required>
                <button type="button" id="submit">Submit</button>
            </form>
            <div id="result"></div>


            <script>
                $(document).ready(function() {
                    $("#submit").click(function() {
                        var data = $("#data").val();

                        $.ajax({
                            type: "POST",
                            url: "process.php",
                            data: {
                                data: data
                            },
                            success: function(response) {
                                $("#result").html(response);
                            }
                        });
                    });
                });
            </script>
        </div>
    </main>
</body>

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
</script>

</html>