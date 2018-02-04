<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        h1{
            text-align: center;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {

            padding: 20px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
        .button2 {border-radius: 4px;
        margin-left:20%}
        .button2 {border-radius: 4px;}

        tr:hover {background-color:#f5f5f5;}
    </style>
    <script>
        $(document).ready(function(){
            $("#showww").hide();
            var ID;
            $.post("../Controller/authentification.php",
                function(data){

                    var arr = new Array();
                    arr = JSON.parse(data);
                    $("#username1").html(arr["username"]);
                    $("#userid").html(arr["ID"]);
                });
            $.post("../Controller/question.php",
                function(data){

                    var arr = new Array();
                    arr = JSON.parse(data);

                    $("#title").html(arr['title']);
                    $("#desc").html(arr['Description']);
                });

            $("#butoonfg").click(function(){
                    $("#showww").show();
            });


        });
    </script>
</head>
<body style="background-color:darkgrey">
<nav>
    <label id="username1" style="float:right;margin-top:1%;margin-right:3%"></label>
    <label style="float:right;margin-top:1%;">Welcome : </label>
    <label id="userid" hidden></label>
</nav>
<br>
<br>
<br>
<br>
<h1 id="title"> THE TITLE</h1>
<br>

<br>

<div style="margin-left:20%;margin-right: 20%">
    <table>
        <tr>
            <th>When</th>
            <td>
                February 15th, from 8h00AM to 5H00PM
            </td>
        </tr>
        <tr>
            <th>Where</th>
            <td>In the conform of my home</td>
        </tr>
        <tr>
            <th>What can I learn</th>
            <td id="desc"></td>
        </tr>

    </table>
    <br>
    <button id="butoonfg" class="button button2">Register</button>
    <button class="button button2" onclick="window.location.href='profil.php'">Who is hosting?</button>
    <br>
    <h2 id="showww" style="color: green"> we send an email to the hoster or maybe your new friend Pennywise...</h2>
   </div>
</body>
</html>