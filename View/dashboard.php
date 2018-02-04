<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    h1,h3{
        text-align: center;
    }
    h3{

    }
    .block{
        width: 25%;
        height: 30%;
        float: left;
        border-radius: 8px;
        cursor: pointer;
    }
    .block1{
        margin-left:25%;
    }
    .block2{
        margin-left: 3%;
    }
    #left_block:hover{
        background-color:#90ee90;
        border: solid 2px #add8e6;
    }#right_block:hover{
             background-color:#90ee90;
             border: solid 2px #add8e6;
    }

</style>
    <script>
        $(document).ready(function(){
            $.post("../Controller/authentification.php",
                function(data){

                var arr = new Array();
                arr = JSON.parse(data);
                $("#username1").html(arr["username"]);
                });

        });
    </script>

</head>
<body style="background-color:#add8e6">
<nav>

    <label id="username1" style="float:right;margin-top:1%;margin-right:3%"></label>
    <label style="float:right;margin-top:1%;">Welcome : </label>
</nav>
<br>
<br>
<br>
<br>
<br>
<h1>Let's get Started</h1>
<br>
<br>
<br>
<div class="block block1" id="left_block" onclick=" window.location.href = 'create.php'">
    <p  style="margin-left: 35%;"><img src="../Img/create.png" align="middle" alt="create" height="50%" width="55%" /></p>

    <h3>CREATE</h3>
    <br>
    <h4 style="text-align:center">Share your passion!</h4>
</div>
<div class="block block2" id="right_block" onclick=" window.location.href = 'List.php'">
    <p style="margin-left: 35%;"><img src="../Img/learn.png" align="middle" alt="create" height="50%" width="55%" /></p>

    <h3>LEARN</h3>
    <br>
    <h4 style="text-align:center"> Learn something new!</h4>

    <p style="color:green;text-align:center;font-size: 200%;">For Free</p>
</div>

</body>
</html>