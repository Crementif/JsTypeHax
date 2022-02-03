<!DOCTYPE html>
    <header>
        <title>Dumpling Web Launcher</title>
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
        <script src="index.js"></script>
    </header>
    <body style="width: 100vw; margin: auto 0; text-align: center;" onload="">
        <h2 id="name-header" style="text-align:center;">
            <img src="https://github.com/emiyl/dumpling/raw/master/assets/dumpling-banner.png">
            Web Launcher
        </h2>

        <button type="button" onclick="checkCompatibility()">Launch Dumpling</button>

        <div id="compatibility-warning" style="background-color: orange; margin: 0 auto; padding: 10px 0px;" hidden>
            <p id="compatibility-text"></p>
            <p>You can ignore the warning by checking the checkbox and clicking the launch button again.</p>
            <input type="checkbox" id="ignore-compatibility" name="compatibility-checkbox"> <label for="compatibility-checkbox">Ignore warning</label>
        </div>


        <!--<a id="launch-button" style="font-size: 40px;" href="exploit.php">Launch Dumpling</a><br>-->
        <!--Design of the website is just to give an idea for the rough layout-->

        <div id="information">
            <b>This web exploit can in rare cases lock-up while running it. Hold the power button until it shuts down and try it again.</b><br>
            <b>These modifications are all temporary and in memory. When you exit Dumpling no traces are left.</b>
        </div>
        
        <h3>Made possible by:</h3>
        <div id="credits" style="width: 100%; height: 30%">
            <div style="width: 33%; float: left;">
                <h4>JsTypeHax:</h4>
                <p> - JumpCallPop</p>
                <p> - jam1garner</p>
                <p> - hedgeberg</p>
                <p> - yellows8</p>
                <p> - orboditilt</p>
            </div>
            <div style="width: 33%; float: left;">
                <h4>JsTypeHax_payload:</h4>
                <p> - orboditilt</p>
                <p> - Marionumber1</p>
                <p> - dimok789</p>
                <p> - Kinnay</p>
            </div>
            <div style="width: 33%; float: left;">
                <h4>CustomRPXLoader:</h4>
                <p> - Maschell</p>
                <p> - orboditilt</p>
            </div>
        </div>
        <p style="clear: both;"><!--to reset table--></p>
        <div>
            <h3>Source code:</h3>
            <h4><a href="https://github.com/Crementif/dumpling-web-launcher">https://github.com/Crementif/dumpling-web-launcher</a></h4>
        </div>
    </body>
</html>