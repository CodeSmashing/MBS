<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Password Formatter</title>
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
        <li><a href="password_formatter.php">Pass formatter</a></li>
    </ul>

    <hr>
    <span name="center">The standard format = [string]#[month int representation]-[string and int combination + timestamp]</span><br><br>
    
    <div class="main-page">
        <div class="left-column">
            <table class="table-container left-table">
                <caption>Alphabet numerical respresentation</caption>
                <tbody>
                    <tr>
                        <td>a</td>
                        <td>-------------------</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>b</td>
                        <td>-------------------</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>c</td>
                        <td>-------------------</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>d</td>
                        <td>-------------------</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>e</td>
                        <td>-------------------</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>f</td>
                        <td>-------------------</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>g</td>
                        <td>-------------------</td>
                        <td>6</td>
                    </tr>
                    <tr>
                        <td>h</td>
                        <td>-------------------</td>
                        <td>7</td>
                    </tr>
                    <tr>
                        <td>i</td>
                        <td>-------------------</td>
                        <td>8</td>
                    </tr>
                    <tr>
                        <td>j</td>
                        <td>-------------------</td>
                        <td>9</td>
                    </tr>
                    <tr>
                        <td>k</td>
                        <td>-------------------</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>l</td>
                        <td>-------------------</td>
                        <td>11</td>
                    </tr>
                    <tr>
                        <td>m</td>
                        <td>-------------------</td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <td>n</td>
                        <td>-------------------</td>
                        <td>13</td>
                    </tr>
                    <tr>
                        <td>o</td>
                        <td>-------------------</td>
                        <td>14</td>
                    </tr>
                    <tr>
                        <td>p</td>
                        <td>-------------------</td>
                        <td>15</td>
                    </tr>
                    <tr>
                        <td>q</td>
                        <td>-------------------</td>
                        <td>16</td>
                    </tr>
                    <tr>
                        <td>r</td>
                        <td>-------------------</td>
                        <td>17</td>
                    </tr>
                    <tr>
                        <td>s</td>
                        <td>-------------------</td>
                        <td>18</td>
                    </tr>
                    <tr>
                        <td>t</td>
                        <td>-------------------</td>
                        <td>19</td>
                    </tr>
                    <tr>
                        <td>u</td>
                        <td>-------------------</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>v</td>
                        <td>-------------------</td>
                        <td>21</td>
                    </tr>
                    <tr>
                        <td>w</td>
                        <td>-------------------</td>
                        <td>22</td>
                    </tr>
                    <tr>
                        <td>x</td>
                        <td>-------------------</td>
                        <td>23</td>
                    </tr>
                    <tr>
                        <td>y</td>
                        <td>-------------------</td>
                        <td>24</td>
                    </tr>
                    <tr>
                        <td>z</td>
                        <td>-------------------</td>
                        <td>25</td>
                    </tr>
                </tbody>
            </table>

            <table class="table-container right-table">
                <caption>Month numerical respresentation</caption>
                <tbody>
                    <tr>
                        <td>JAN:</td>
                        <td>-------------------</td>
                        <td>022</td>
                    </tr>
                    <tr>
                        <td>FEB:</td>
                        <td>-------------------</td>
                        <td>010</td>
                    </tr>
                    <tr>
                        <td>MAA:</td>
                        <td>-------------------</td>
                        <td>012</td>
                    </tr>
                    <tr>
                        <td>APR:</td>
                        <td>-------------------</td>
                        <td>032</td>
                    </tr>
                    <tr>
                        <td>MEI:</td>
                        <td>-------------------</td>
                        <td>024</td>
                    </tr>
                    <tr>
                        <td>JUN:</td>
                        <td>-------------------</td>
                        <td>042</td>
                    </tr>
                    <tr>
                        <td>JUL:</td>
                        <td>-------------------</td>
                        <td>040</td>
                    </tr>
                    <tr>
                        <td>AUG:</td>
                        <td>-------------------</td>
                        <td>029</td>
                    </tr>
                    <tr>
                        <td>SEP:</td>
                        <td>-------------------</td>
                        <td>037</td>
                    </tr>
                    <tr>
                        <td>OKT:</td>
                        <td>-------------------</td>
                        <td>043</td>
                    </tr>
                    <tr>
                        <td>NOV:</td>
                        <td>-------------------</td>
                        <td>048</td>
                    </tr>
                    <tr>
                        <td>DEC:</td>
                        <td>-------------------</td>
                        <td>009</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="right-column">
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
        <div class="center-text">
            <hr>
            <span>test</span>
            <span>
                string for:
                <hr>
                boot = BTX;<br>
                user logon = UTX;<br>
                apps = ATX;<br>
            </span>
        </div>
    </div>
    <div class="bottom-section">
        <p>© 2023 All Rights Reserved. Design by me</p>
    </div>
</body>

</html>
<?php ob_end_flush(); ?>