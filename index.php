<!DOCTYPE html>
    <header>
        <title>Dumpling Web Launcher</title>
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
        <script>var exploit_page = "<?=(isset($_SERVER["SERVER_SOFTWARE"]) ? "exploit.php" : "exploit.html")?>";</script>
        <script src="index.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,400;0,700;1,100;1,400;1,700&display=swap" rel="stylesheet">
    </header>
    <style>
        body {
            margin: auto 0;
            text-align: center;
            font-family: 'Roboto', sans-serif;
        }

        .headerContainer {
            text-align:center;
            margin: 1em;
        }
        .headerContainer img {
            width: 40px;
            vertical-align: middle;
            margin-right: .3em;
        }
        .headerContainer h2 {
            display: inline;
            vertical-align: middle;
        }

        .launchButton {
            border: none;
            border-radius: .5em;
            background-color: #04AA6D;
            color: white;
            font-size: 1em;
            padding: 1em 2em;
            cursor: pointer;
        }

        .compatWarning {
            background-color: orange;
            margin: 1em auto;
            padding: .625em 0px;
        }

        table {
            margin-left: auto;
            margin-right: auto;
        }

        td {
            width: 33%;
            padding: .2em 2em;
        }
    </style>
    <body>
        <div id="name-header" class="headerContainer">
            <img src="dumpling-logo.png">
            <h2>Dumpling Web Launcher</h2>
        </div>

        <button class="launchButton" type="button" onclick="checkCompatibility()">Launch Dumpling</button>

        <div id="compatibility-warning" class="compatWarning" hidden>
            <p id="compatibility-text"></p>
            <p>You can ignore the warning by checking the checkbox and clicking the launch button again.</p>
            <input type="checkbox" id="ignore-compatibility" name="compatibility-checkbox"> <label for="compatibility-checkbox">Ignore warning</label>
        </div>

        <div id="information" style="margin: 30px 0;">
            <b>The web exploits used CAN in rare cases lock-up your Wii U while attempting to launch Dumpling. If that happens, hold the power button for a few seconds and try it again.</b><br>
            <br>
            <b>All modifications done are fully temporary and after you exit Dumpling no traces are left.</b>
        </div>
        
        <h3 style="margin-bottom: 1em;">Made possible by:</h3>

        <table>
            <tr>
                <th>JsTypeHax</th>
                <th>JsTypeHax_payload</th>
                <th>CustomRPXLoader</th>
            </tr>
            <tr>
                <td>JumpCallPop</td>
                <td>orboditilt</td>
                <td>Maschell</td>
            </tr>
            <tr>
                <td>jam1garner</td>
                <td>Marionumber1</td>
                <td>orboditilt</td>
            </tr>
            <tr>
                <td>hedgeberg</td>
                <td>dimok789</td>
                <td></td>
            </tr>
            <tr>
                <td>yellows8</td>
                <td>Kinnay</td>
                <td></td>
            </tr>
            <tr>
                <td>orboditilt</td>
                <td></td>
                <td></td>
            </tr>
        </table>

        <div>
            <h3>Source code:</h3>
            <b><a href="https://github.com/Crementif/dumpling-web-launcher" target="_blank">https://github.com/Crementif/dumpling-web-launcher</a></b>
        </div>
    </body>
</html>
