<!DOCTYPE html>
<html lang="en">
    <header>
        <title>Dumpling Web Launcher</title>
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script>var exploit_page = "<?=(isset($_SERVER["SERVER_SOFTWARE"]) ? "exploit.php" : "exploit.html")?>";</script>
        <script src="index.js"></script>
        <link href="index.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,400;0,700;1,100;1,400;1,700&display=swap" rel="stylesheet">
    </header>
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

        <div id="credits">
            <div>
                <b>JsTypeHax:</b>
                <p> - JumpCallPop</p>
                <p> - jam1garner</p>
                <p> - hedgeberg</p>
                <p> - yellows8</p>
                <p> - orboditilt</p>
            </div>
            <div>
                <b>JsTypeHax_payload:</b>
                <p> - orboditilt</p>
                <p> - Marionumber1</p>
                <p> - dimok789</p>
                <p> - Kinnay</p>
            </div>
            <div>
                <b>CustomRPXLoader:</b>
                <p> - Maschell</p>
                <p> - orboditilt</p>
            </div>
        </div>

        <div>
            <h3>Source code:</h3>
            <b><a href="https://github.com/emiyl/dumpling-launcher" target="_blank">https://github.com/emiyl/dumpling-launcher</a></b>
            <p>Thank you to <a href="https://github.com/Crementif" target="_blank">@Crementif</a> for putting this together</p>
        </div>
    </body>
</html>
