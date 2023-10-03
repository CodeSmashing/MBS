<?php
function navbar() {
    echo "<div id='style0'></div>";
    echo "<div id='style1'></div>";
    echo "<div id='style2'></div>";
    echo "<header>";
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
    echo "<li><a href='test_page.php'>Test</a></li>";
    echo "</ul>";
    echo "</header>";
}

function footer() {
    echo "<footer>";
    echo "<div class='style_selector'>";
    echo "<a href='#style0'>Style 0</a><br>";
    echo "<a href='#style1'>Style 1</a><br>";
    echo "<a href='#style2'>Style 2</a><br>";
    echo "</div><br>";
    echo "<p>© 2023 All Rights Reserved. Design by me</p>";
    echo "</footer>";
}
