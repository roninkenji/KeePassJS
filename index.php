<!DOCTYPE html>
<html>
<head>
    <title>KeePassJS</title>
    <link rel="SHORTCUT ICON" href="file_locked.ico" />

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="jquery/ui/smoothness/jquery-ui-1.10.3-min.css"/>
    <link rel="stylesheet" href="jquery/ui/jquery-ui-tabs-vertical.css"/>
    <script src="jquery/jquery-2.0.3-min.js" type="text/javascript"></script>
    <script src="jquery/ui/jquery-ui-1.10.3-min.js" type="text/javascript"></script>
    <script src="cryptojs/components/core-min.js" type="text/javascript"></script>
    <script src="cryptojs/components/cipher-core-min.js" type="text/javascript"></script>
    <script src="cryptojs/components/mode-ecb-min.js" type="text/javascript"></script>
    <script src="cryptojs/components/aes-min.js" type="text/javascript"></script>
    <script src="cryptojs/components/pad-nopadding-min.js" type="text/javascript"></script>
    <script src="cryptojs/components/sha256-min.js" type="text/javascript"></script>
    <script src="inflate.js" type="text/javascript"></script>
    <script src="jdataview.js" type="text/javascript"></script>
    <script src="salsa20.js" type="text/javascript"></script>
    <script src="kdbx.js" type="text/javascript"></script>
    <script type="text/javascript" src="dropins.js" id="dropboxjs" data-app-key="g6g08ofil9lkg8z"></script>
    <script type="text/javascript" src="keepassjs.js"></script>
</head>
<body style="margin-top:70px;">
    <div id="header" style="position:fixed; height:60px; top:0px; left:0px; right:0px; z-index:10000;" class="ui-state-default">
        <h1 style="position:relative; left:10px; margin-top:5px; font-family:'DejaVu Sans'; font-size:40px;">KeePassJS</h1>
        <button id="lock_file" style="float:right; position:absolute; top:10px; right:10px; display:none;">Lock File</button>
    </div>
    <div id="load_file" style="text-align: center; display:block;">
        <div id="url_option" style="display: inline-block; width: 398px; padding-top: 20px; padding-bottom: 20px; border: 1px dotted grey;">
            <input type="text" id="url" name="url" style="width: 360px;" value="" />
        </div>
        <div id="dropbox_option" style="height: 4em; width: 398px; border: 1px dotted grey; line-height: 4em; margin: 0 auto;">
            <button id="db-chooser" onclick="Dropbox.choose(chooser_options);">Select from Dropbox</button>
        </div>
        <div id="file_option" style="height: 4em; width: 398px; border: 1px dotted grey; line-height: 4em; margin: 0 auto;">Or drag &amp; drop your KDBX file here...</div>
        <div style="margin-top: 2em;">
            <div>
                Then enter your password and click Unlock.
            </div>
            <input type="password" id="password" name="password" style="width: 360px;"/>
            <div id="keyfile" style="height: 4em; width: 398px; border: 1px dotted grey; line-height: 4em; margin: 0 auto;">And/Or drag in a key file...</div>
        </div>

        <div>
            <button id="load_go">Load</button>
        </div>
    </div>
    <div id="tabs" style="z-index:1">

    </div>
</body>
</html>

