<html lang="zh-cn">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF8">
    <title>Gamom Wiki - Welcome</title>
    <link rel="stylesheet" id="darkcss" href="../system/res/css/markdown-all.css">
    <link rel="stylesheet" href="../system/res/js/highlight/vs.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="../system/res/js/gquery.js"></script>
    <script src="../system/res/js/showdown.js"></script>
    <script src="../system/res/js/highlight/highlight.min.js"></script>
    <style>
        html,
        body {
            padding: none;
            overflow: hidden;

        }

        * {
            transition: 200ms;
        }

        .center-title {
            /* color: white; */
            font-family: "console";
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translateY(-50%) translateX(-50%);
        }

        .top-center {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }

        .alc {
            text-align: center;
        }

        #error {
            text-align: left;
        }

        #erbg {
            width: 100%;
            height: 35%;
            max-height: 330px;
            min-height: 150px;
            background-color: rgba(63, 218, 132, 0.8);
            z-index: 500;
            word-wrap: break-word;
            word-break: break-all;
        }

        input {

            outline: none;
            background: none;
            font-size: 18px;
        }

        #backg {
            position: absolute;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            background-color: azure;
            background-repeat: no-repeat;
            background-size: 100% 100%;
            word-wrap: break-word;
            word-break: break-all;
        }

        .iline {
            display: inline-block;
        }

        .button-start {
            outline: none;
            border: none;
            background: none;
            height: 40px;
            width: 100px;
            cursor: pointer;
            font-size: 18px;
            border-radius: 4px;
            font-weight: bold;
        }

        .button-start:hover,
        .button-start:active {
            outline: none;
            border: none;
            background: none;
            height: 40px;
            width: 100px;
            cursor: pointer;
            font-size: 18px;

            transform: scale(1.1);
        }
        #bigcontent{
            width: calc(100%);
            height: calc(100% - 60px);
            position: absolute;
            left: 0;
            top: 60px;
            overflow: auto;
            word-wrap: break-word;
            word-break: break-all;
        }
        #textarea {
            width: calc(100% - 4em);
            height: calc(100% - 0px - 4em);
            position: absolute;
            left: 0;
            top: 0px;
            padding: 2em 2em 2em 2em;
            overflow: auto;
            word-wrap: break-word;
            word-break: break-all;
        }

        .closemsg {
            position: absolute;
            right: 10%;
            bottom: 10px;
            outline: none;
            border: 4px solid #333;
            background-color: azure;
            font-size: 14px;
            width: 80px;
            height: 34px;
            cursor: pointer;
        }

        .closemsg:hover,
        .closemsg:active {
            transform: scale(1.05);
        }

        #headtitle {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 80px;
            background-image: linear-gradient(120deg, #333, rgb(92, 92, 92));
            z-index: 100;

        }

        #title2 {
            position: absolute;
            left: 80px;
            color: aliceblue;
            -webkit-user-select: none;
            user-select: none;
        }

        #icon {
            position: absolute;
            left: 10px;
            top: 10px;
            width: 60px;
            height: 60px;
            background-image: url("../favicon.ico");
            background-size: 100% 100%;
            cursor: pointer;
            outline: none;
            border: none;
            border-radius: 0%;
        }

        #icon:hover,
        #icon:active {
            transform: scale(1.1);
        }

        #menu {
            position: absolute;
            top: 80px;
            padding: 10px 10px 10px 10px;
            width: calc(100% - 20px);
            height: calc(100% - 20px - 80px);
            left: 0;
            background-color: #333;
            z-index: 300;

        }

        #ulfa {
            list-style: none;
            position: absolute;
            top: 48px;
            width: calc(100% - 60px);
        }

        #ulfa li {
            font-size: 18px;
            width: calc(100% - 40px);
            color: white;
            height: 60px;
            line-height: 60px;

            -webkit-user-select: none;
            user-select: none;
            border-radius: 8px;
        }

        #ulfa li:hover {

            color: white;
            background-color: rgb(33, 33, 33);
        }

        #ulfa a {
            text-indent: 20px;
            border: none;
            color: white;
            height: 100%;
            width: 100%;
            display: inline-block;
        }

        #ulfa a:hover,
        #ulfa a:active {
            border: none;
            color: white;
        }

        #searchInput {
            position: absolute;
            left: 60px;
            height: 34px;
            top: 20px;
            width: calc(100% - 120px);
            color: white;
            font-size: 22px;
        }

        select {
            height: 40px;
            outline: none;
            border: 1px solid black;
            font-size: 22px;
        }

        option {
            height: 30px;
        }

        #loadingPage {
            position: absolute;
            top: 20px;
            left: 0;
            z-index: 400;
            background-color: royalblue;
            color: white;
            width: 100%;
            height: 100%;
        }

        #loadinglogo {
            width: 48px;
            border-radius: 50%;
            height: 48px;
            background-image: linear-gradient(120deg, rgb(154, 191, 196), rgb(233, 126, 236));
            animation-name: circle;
            animation-duration: 4s;
            animation-iteration-count: infinite;
        }

        @keyframes circle {
            0% {
                transform: translate(-600%, -600%);
            }

            25% {
                transform: translate(600%, -600%);
            }

            50% {
                transform: translate(600%, 600%);
            }

            75% {
                transform: translate(-600%, 600%);
            }

            100% {
                transform: translate(-600%, -600%);
            }

        }
    </style>
</head>

<body id="body">

    <div id="menu" style="overflow-y:auto;">
        <input id="searchInput" type="text" oninput="search(this.value)" placeholder="????????????????????? GA Wiki" />
        <ul id="ulfa">
            <li>
                ?????????...
            </li>
        </ul>
    </div>
    <div id="backg">
        <div class="top-center" id="erbg" style="display:none;">
            
            <div class="center-title">
                <h1 id="error-msg">1</h1>
            </div>
            <button id="cw3jkwej" class="closemsg" onclick="hidemsg(this);">
                ??????
            </button>
        </div>
        <div id="headtitle">
            <button id="icon" onclick="showmenu()">

            </button>
            <h1 id="title2">GA Wiki</h1>
        </div>
        <div id="bigcontent">
        <div id="loadingPage">
                <div class="center-title">
                    <h1>Loading...</h1>
                    <span id="load-tips">
                        ???????????????????????????...
                    </span>
                </div>
                <div id="loadinglogo" class="center-title">

                </div>
            </div>
            <div id="textarea">

        </div>
        </div>
        
    </div>

</body>
<script>
    var menuJson = "";

    function search(key) {
        var tmp = "";
        var lists = menuJson.toString().split("\n");
        for (var i = 0; i < lists.length; i++) {

            var url = "";
            var b = lists[i].split("~|~");
            if (b.length >= 3) {
                var filename = b[0];
                var disname = b[1];
                var ishtml = b[2];
                if (filename.search(key) != -1 || b[1].search(key) != -1 || key.search(b[0]) != -1 || key.search(b[1]) != -1) {
                    url = "http://" + location.host + location.pathname + "?pg=" + filename + "&html=" + ishtml;
                    tmp = tmp + "<li><a href='" + url + "'>" + disname + "</a></li>";
                }
            }
        }
        if (tmp == "") {
            tmp = "<li>?????????????????????????????????</li>"
        }
        $("#ulfa").html(tmp);
    }

    function flushmenu() {
        try {
            fetch('list.menu').then(res => {
                if (res.ok) {
                    return res.text();
                }
                showError("Error: ???????????????<br/>" + 'Network response was not ok.');
            }).catch(err => {
                showError("Error: ???????????????<br/>" + err);
            }).then(data => {
                var tmp = "";
                menuJson = data.toString();
                var lists = data.toString().split("\n");
                for (var i = 0; i < lists.length; i++) {

                    var url = "";
                    var b = lists[i].split("~|~");
                    if (b.length >= 3) {
                        var filename = b[0];
                        var disname = b[1];
                        var ishtml = b[2];
                        url = "http://" + location.host + location.pathname + "?pg=" + filename + "&html=" + ishtml;
                        tmp = tmp + "<li><a href='" + url + "'>" + disname + "</a></li>";
                    }
                }
                $("#ulfa").html(tmp);
            });

        } catch (e) {
            showError("Error: ???????????????<br/>" + e);
            console.log("Error:" + e);
        }

    }
    $("#menu").hide();
    flushmenu();

    function showmenu() {
        $("#menu").fadeToggle(300);
        hidemsg(document.getElementById("cw3jkwej"));
    }
    var co_img = $.cookie.get("img");
    var co_color = $.cookie.get("color");
    var isdark = $.cookie.get("dark");

    function showloading() {
        $("#loadingPage").fadeIn(50);
        $("#loadinglogo").css("animation-iteration-count", "infinite");
    }

    function hideloading() {
        $("#loadingPage").fadeOut(300);
        setTimeout(() => {
            $("#loadinglogo").css("animation-iteration-count", "0");

        }, 300)


    }
    if (isdark == undefined) isdark = "default";

    function reloadBG() {
        if (co_img == undefined) co_img = "";
        co_img = co_img.toString().replaceAll("\n", "");
        document.getElementById("darkcss").href = "../system/res/css/markdown-" + (isdark) + ".css";
        document.getElementById("backg").style.backgroundImage = "url('./bgimg/" + co_img + "')";
        document.getElementById("textarea").style.backgroundColor = "" + co_color + "";

    }
    reloadBG();
    hljs.initHighlightingOnLoad();
    var converter = new showdown.Converter();
    var nowapage = "<?php if (empty($_GET["pg"])) echo "index";
                    else echo $_GET["pg"]; ?>";
    var ishtml = <?php if (empty($_GET["html"])) echo "false";
                    else echo $_GET["html"] == "yes" ? "true" : "false"; ?>;
    try {
        $.get.json('../system/gettext.php?pnm=' + nowapage + "&html=" + (ishtml ? "yes" : "no")).then(data => {

            if (!data["stat"]) {
                showError(data["msg"]);
                console.log("Error:" + data["msg"]);
                showCo("<h1>?????????????????????</h1><span>????????????????????????????????????</span>")
            } else {
                html = converter.makeHtml(data["content"]);
                showCo(html);

                reloadCodes();
            }

        });
    } catch (e) {
        showError("Error: ???????????????<br/>" + e);
        console.log("Error:" + e);
        showCo("<h1>?????????????????????</h1><span>?????????????????????</span>")
    }

    function reloadCodes() {
        hljs.highlightAll();
        var viswe = document.getElementsByTagName("code");
        for (var i = 0; i < viswe.length; i++) {
            if (viswe[i].className == "")
                viswe[i].innerHTML = "<span class='line-code'>" + viswe[i].innerHTML + "</span>";
        }
    }

    function hidemsg(a) {
        a.style.display = "none";
        $("#erbg").fadeOut(300);
    }

    function showError(msg) {
        $(".closemsg").show();
        $("#erbg").fadeIn();
        $("#error-msg").html(msg);
    }

    function showCo(html) {
        $("#textarea").html(html);
        var regDetectJs = /<script(.|\n)*?>(.|\n|\r\n)*?<\/script>/ig;
        var jsContained = html.match(regDetectJs);

        // ????????????????????????js???????????????????????????js???????????????
        if (jsContained) {
            // ????????????js??????
            var regGetJS = /<script(.|\n)*?>((.|\n|\r\n)*)?<\/script>/im;

            // ?????????????????????js
            var jsNums = jsContained.length;
            for (var i = 0; i < jsNums; i++) {
                var jsSection = jsContained[i].match(regGetJS);

                if (jsSection[2]) {
                    if (window.execScript) {
                        // ???IE???????????????
                        window.execScript(jsSection[2]);
                    } else {
                        // ?????????????????????????????????
                        window.eval(jsSection[2]);
                    }
                }
            }
        }

    }
    try {
        // document.addEventListener('gesturestart', function(event) {
        //     event.preventDefault()
        // })
    } catch (e) {
        console.log("error:" + e);
    }
    hideloading();
</script>
<script>

</script>

</html>