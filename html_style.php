<?php
function navbar() {
    echo "<ul class='navbar'>";
    echo "<li><a href='home.php'>Home</a></li>";
    if (!isset($_SESSION["logged_in"])) {
        echo "<li><a href='login.php'>Inloggen</a></li>";
    } else {
        echo "<li>";
        echo "<form method='post'>";
        echo "<button type='submit' name='logout_request' value='1' formtarget='_self'>Uitloggen</button>";
        echo "</form>";
        echo "</li>";
    }

    if (isset($_SESSION['logged_in'])) {
        echo "<li><a href='user_settings.php'>Settings</a></li>";
    }

    echo "<li><a href='database.php'>Database</a></li>";
    echo "<li><a href='password_formatter.php'>Pass formatter</a></li>";
    echo "<li><a href='about.php'>About</a></li>";
    echo "</ul>";
}

function bottom_section() {
    echo "<div class='bottom-section'>";
    echo "<p>© 2023 All Rights Reserved. Design by me</p>";
    echo "</div>";
}
