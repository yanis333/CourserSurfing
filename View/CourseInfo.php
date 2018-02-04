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
    </style>
    <script>
        $(document).ready(function(){
            var ID;
            $("#verf").hide();
            $.post("../Controller/authentification.php",
                function(data){

                    var arr = new Array();
                    arr = JSON.parse(data);
                    $("#username1").html(arr["username"]);
                    $("#userid").html(arr["ID"]);
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

<div>
    <form action="/action_page.php">
        <label for="fname">Title</label>
        <input type="text" id="fname" name="firstname" placeholder="Title...">

        <label for="lname">Subject</label>
        <input type="text" id="lname" name="lastname" placeholder="Subject..">


        <label>Knowledge Required</label>
        <input type="text" id="req" name="Req" placeholder="Java,Biology1,Psychology2...">

        <label >Status</label>
        <select id="status" name="status">
            <option value="Beginner">Beginner</option>
            <option value="Advanced">Advanced</option>
        </select>


        <label>Time</label>
        <input type="text" id="time" name="time" placeholder="How much time it will take...">


        <label>Description</label>
        <br>
        <textarea id="desc" placeholder=" What you are going to teach..." style="width: 100%; "></textarea>


        <input id="userId" hidden>
        <input type="button" id="submit" value="Submit">
    </form>
</div>
</body>
</html>