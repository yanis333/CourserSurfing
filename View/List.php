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
    ul{
        margin-left: 28%;
        margin-right: 28%;
        list-style-type: none;
    }
    .titles:hover{
        color: blue;
        text-decoration: underline;
        cursor: pointer;
    }
</style>
    <script>
        $(document).ready(function(){
            $.post("../Controller/authentification.php",
                function(data){

                    var arr = new Array();
                    arr = JSON.parse(data);
                    $("#username1").html(arr["username"]);
                    $("#userid").html(arr["ID"]);
                });
            $.post("../Controller/ListDB.php",
                function(data){
                   var data2 = JSON.parse(data);
                    var str='';
                   for(var x=0;x<data2.length;x++){

                      str += "<li><div style='border: solid blue;border-radius: 5px;'><label style=\"margin-left: 5%;margin-top: 2%\">Title : </label>\n" +
                          "   <label id=\""+data2[x]["IDC"]+"\" class='titles' onclick=\"saveIdHoster(this.id)\"> </label>\n" +
                          "   <label style=\"margin-left: 25%;margin-top: 2%\">Status : </label>\n" +
                          "            <label id=\"status"+x+"\"> </label>\n" +
                          "            <br>\n" +
                          "            <label style=\"margin-left: 5%\">Time : </label>\n" +
                          "            <label id=\"time"+x+"\"> </label>\n" +
                          "            <label style=\"margin-left: 25%\">Hoster : </label>\n" +
                          "            <label id=\"by"+x+"\"  > </label>\n" +
                          "        </div>\n" +
                          "    </li>\n" +
                          "    <br>";
                   }
                   $("#text").append(str);
                    for(var x=0;x<data2.length;x++){
                        var str1 = "#"+data2[x]["IDC"];
                        var str2 = "#status"+x;
                        var str3 = "#time"+x;
                        var str4 = "#by"+x;
                        $(str1).html(data2[x]["title"]);
                        $(str2).html(data2[x]["status"]);
                        $(str3).html(data2[x]["time"]);
                        $(str4).html(data2[x]["username"]);
                    }
                });



        });function saveIdHoster(MVI){
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById(MVI).innerHTML =
                        this.responseText;
                }
            };
            xhttp.open("POST", "../controller/Listhoster.php", true);

            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("value="+MVI);
            window.location.href="courseinfo.php";
        }
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
<h1> What do you want to learn this week? </h1>
<br>
<ul id="text">

</ul>

</body>
</html>