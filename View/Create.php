<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        h1,h2{
            text-align: center;
        }
        input[type=text], select {
            width: 100%;
            padding: 2% 3%;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 2% 3%;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        div {
            border-radius: 5px;
            padding: 3%;
            margin-left: 28%;
            margin-right: 28%;
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
            $("#submit").click(function(){
                $.post("../Controller/createDB.php",{
                    title: $("#fname").val(),
                    subject: $("#lname").val(),
                    req: $("#req").val(),
                    status: $("#status").val(),
                    time: $("#time").val(),
                    desc: $("#desc").val(),
                    idcreate: $("#userid").html()                    },
                    function(){
                        $("#verf").show();

                    });
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
<h1> What do you want to teach?</h1>
<br>
<h2 id="verf" style="color:green"> It was successfully Created!!!</h2>


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