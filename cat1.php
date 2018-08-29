<?php 
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
?>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cat 1 | CatTrack Tracking Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="lib/css/cat.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="lib/css/switch.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="lib/js/cats.js"></script>
</head>
<body onload="getData('wxOMf0ORojPklj04diYXNayMAK42')">
    <div id="header">
            <a href="index.html"><i class="material-icons">arrow_back</i></a>
        <img class="cat" src="lib/res/dynamic/cat1.jpg">
    </div>
    <table align="center">
        <tr>
            <td>
                Cat Name:
            </td>
            <td id="catName">
                catName
            </td>
        </tr>
        <tr>
            <td>
                General Location: 
            </td>
            <td id="genLoc">
                genLoc
            </td>
        </tr>
        <tr>
            <td>
                Specific Location:
            </td>
            <td id="specLoc">
                specLoc
            </td>
        </tr>
        <tr>
            <td>
                Allowed Inside: 
            </td>
            <td id="allowInside">
                <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                </label>
            </td>
        </tr>
        <tr>
            <td>
                Allowed Outside: 
            </td>
            <td id="allowOutside">
                <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                </label>
            </td>
        </tr>
    </table>
    <!-- <div id="container">
        <div id="Info">
            <p>Cat Name: </p>
            <p>General Location: </p>
            <p>Specific Location: </p>
            <p>Allowed Inside: </p>
            <p>Allowed Outside: </p>
        </div>
        <div id="Break"></div>
        <div id="Data">
            <p id="catName">Steve</p>
            <p id="location">Outside</p>
            <p id="specLoc">Cat Bowl</p>
            <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
            </label>
            <p>Allowed Outside Placeholder</p>
        </div>
    </div>-->
</body>
</html>