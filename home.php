<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
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
        <li><a href="login.php">Inloggen</a></li>
        <li>
            <form method="post">
                <button type="submit" name="logout_request" value="1" formtarget="_self">Uitloggen</a>
            </form>
        </li>
    </ul>

    <hr>
    <div class="main_field">
        <span>
            <p>
                Nullam blandit cras a in sociosqu imperdiet, consequat netus netus. Ridiculus tempus sem habitasse ut et interdum. Arcu nec elementum leo scelerisque dictum eros nibh. Amet ridiculus massa erat ut. Malesuada phasellus ultrices, varius dictumst inceptos risus habitasse. Fames commodo elit magna! Metus tincidunt dignissim dui sit per ipsum aliquet curae;, netus integer integer leo. Fames sit cum facilisi sed donec magna quisque cubilia. Lectus turpis vel ultricies cras lacus mollis lorem hac neque! Consequat inceptos auctor ipsum convallis laoreet, penatibus eu semper iaculis habitasse. Tristique nisi rhoncus eu. Congue integer mus ullamcorper cras eros a.
            </p>

            <p>
                Odio vulputate nisi parturient dui sapien. Per porttitor erat maecenas. Aenean nunc sociis non quam. Facilisis primis malesuada eget nostra consequat fermentum a ligula condimentum lacus orci. In egestas mollis blandit, ultrices taciti torquent varius. Metus phasellus phasellus conubia egestas eget. Aenean dictum adipiscing cras nisi erat odio nullam. Curae; condimentum tempus sem magna massa euismod faucibus justo imperdiet. Magnis interdum proin quam fames. Convallis habitasse nostra metus magnis posuere tincidunt tempus. Bibendum tristique aliquam aenean. Etiam convallis platea montes aliquam a?
            </p>

            <p>
                Nulla fusce nec semper ipsum malesuada? Senectus facilisi sociis integer. Placerat condimentum vel laoreet libero enim rhoncus ac quisque! Quis inceptos leo quisque volutpat risus pellentesque in volutpat. Vulputate aliquet amet cras? Metus dapibus nunc lorem magna nullam potenti? Ultrices dapibus arcu lacinia ipsum, montes interdum phasellus erat aptent dictum accumsan. Vestibulum aenean facilisi cubilia hac amet lacinia pretium. Tortor erat dolor nulla vitae euismod commodo tortor enim arcu. Eleifend parturient sodales, curabitur vivamus! Nibh erat scelerisque a habitant volutpat.
            </p>

            <p>
                Ante pretium nisi amet netus fames mi vehicula, adipiscing fames. Nulla pulvinar, imperdiet torquent natoque ac congue netus vitae orci ridiculus himenaeos turpis. Curabitur class eu vivamus molestie parturient. Arcu metus id elementum nostra magna. Inceptos habitant rutrum condimentum porta sed conubia torquent, scelerisque curabitur porta neque. Dictumst mi donec id odio porttitor volutpat nisl pellentesque montes inceptos potenti curae;. Ut vulputate facilisi eget dictum aptent cubilia volutpat ac. Interdum eget dictumst vel dapibus potenti ultricies, pulvinar?
            </p>

            <p>
                Orci, ridiculus posuere conubia quisque bibendum inceptos ac massa cubilia euismod. Venenatis scelerisque tempus mattis tristique nullam dolor arcu proin per nostra? Euismod litora magnis congue aenean pharetra nulla. Odio curae; luctus vehicula donec phasellus viverra tempor fusce id natoque nunc pulvinar. Vulputate imperdiet egestas consequat metus interdum at tincidunt sed tempor. Accumsan eget nullam vestibulum scelerisque volutpat non morbi phasellus. Ultrices ante massa ante a nam facilisis, taciti orci. Diam.
            </p>
        </span>
        <hr>
        <span>
            <p>
                Nullam blandit cras a in sociosqu imperdiet, consequat netus netus. Ridiculus tempus sem habitasse ut et interdum. Arcu nec elementum leo scelerisque dictum eros nibh. Amet ridiculus massa erat ut. Malesuada phasellus ultrices, varius dictumst inceptos risus habitasse. Fames commodo elit magna! Metus tincidunt dignissim dui sit per ipsum aliquet curae;, netus integer integer leo. Fames sit cum facilisi sed donec magna quisque cubilia. Lectus turpis vel ultricies cras lacus mollis lorem hac neque! Consequat inceptos auctor ipsum convallis laoreet, penatibus eu semper iaculis habitasse. Tristique nisi rhoncus eu. Congue integer mus ullamcorper cras eros a.
            </p>

            <p>
                Odio vulputate nisi parturient dui sapien. Per porttitor erat maecenas. Aenean nunc sociis non quam. Facilisis primis malesuada eget nostra consequat fermentum a ligula condimentum lacus orci. In egestas mollis blandit, ultrices taciti torquent varius. Metus phasellus phasellus conubia egestas eget. Aenean dictum adipiscing cras nisi erat odio nullam. Curae; condimentum tempus sem magna massa euismod faucibus justo imperdiet. Magnis interdum proin quam fames. Convallis habitasse nostra metus magnis posuere tincidunt tempus. Bibendum tristique aliquam aenean. Etiam convallis platea montes aliquam a?
            </p>

            <p>
                Nulla fusce nec semper ipsum malesuada? Senectus facilisi sociis integer. Placerat condimentum vel laoreet libero enim rhoncus ac quisque! Quis inceptos leo quisque volutpat risus pellentesque in volutpat. Vulputate aliquet amet cras? Metus dapibus nunc lorem magna nullam potenti? Ultrices dapibus arcu lacinia ipsum, montes interdum phasellus erat aptent dictum accumsan. Vestibulum aenean facilisi cubilia hac amet lacinia pretium. Tortor erat dolor nulla vitae euismod commodo tortor enim arcu. Eleifend parturient sodales, curabitur vivamus! Nibh erat scelerisque a habitant volutpat.
            </p>

            <p>
                Ante pretium nisi amet netus fames mi vehicula, adipiscing fames. Nulla pulvinar, imperdiet torquent natoque ac congue netus vitae orci ridiculus himenaeos turpis. Curabitur class eu vivamus molestie parturient. Arcu metus id elementum nostra magna. Inceptos habitant rutrum condimentum porta sed conubia torquent, scelerisque curabitur porta neque. Dictumst mi donec id odio porttitor volutpat nisl pellentesque montes inceptos potenti curae;. Ut vulputate facilisi eget dictum aptent cubilia volutpat ac. Interdum eget dictumst vel dapibus potenti ultricies, pulvinar?
            </p>

            <p>
                Orci, ridiculus posuere conubia quisque bibendum inceptos ac massa cubilia euismod. Venenatis scelerisque tempus mattis tristique nullam dolor arcu proin per nostra? Euismod litora magnis congue aenean pharetra nulla. Odio curae; luctus vehicula donec phasellus viverra tempor fusce id natoque nunc pulvinar. Vulputate imperdiet egestas consequat metus interdum at tincidunt sed tempor. Accumsan eget nullam vestibulum scelerisque volutpat non morbi phasellus. Ultrices ante massa ante a nam facilisis, taciti orci. Diam.
            </p>
        </span>
    </div>
    <div class="sidebar">
        <img src="images/silly_dwarf.png" alt="#">
    </div>
</body>

</html>
<?php ob_end_flush(); ?>