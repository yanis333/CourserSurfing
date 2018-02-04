<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#loginF").show();
            $("#registerC").hide();
            $("#registerD").hide();
            $("#registerF").hide();

            $("#loginB").click(function(){
                $("#loginF").show();
                $("#registerF").hide();

                    $.post("../controller/log.php",{
                        emailA: $("#emailA").val(),
                        pass: $("#passA").val()
                    },function(data){
                        if(data){
                            window.location.href="dashboard.php";
                        }
                        else{
                            alert("Wrong password");
                        }

                    });




            });

            $("#registerB").click(function(){
                $("#loginF").hide();
                $("#registerF").show();
                $("#registerC").show();
                $("#registerD").show();
                $("#registerB").hide();
                $("#loginB").hide();

            });

            $("#registerD").click(function(){
                $("#registerF").hide();
                $("#loginF").show();
                $("#loginB").show();
                $("#registerB").show();
                $("#registerC").hide();
                $("#registerD").hide();

            });
            $("#registerC").click(function(){
                var x =$("#password1").val();
                var y =$("#confirmpassword").val();
                if(x!=y){
                    alert("password not correct!");
                }
                else{
                    $.post("../controller/reg.php",{
                        username: $("#user2").val(),
                        password: $("#password1").val(),
                        email: $("#email2").val(),
                    },function(){
                            window.location.href="dashboard.php";


                    });
                }

            });


        });

    </script>
</head>
<body>


<img style="margin-left:35%" src="../img/logo.jpg" alt="logo" width="25%" height="25%">



<div class="w3-container">

    <div style="margin-left:35%; margin-right:35%; background-color:cornflowerblue;">


        <form class="w3-container" id="loginF">
            <p>
                <input id= "emailA"class="w3-input" type="text">
                <label>Email</label></p>

            <p>
                <input id="passA" class="w3-input" type="password">
                <label>Password</label></p>



        </form>
        <form class="w3-container" id="registerF">

            <p>
                <input id="user2" class="w3-input" type="text">
                <label>Username</label></p>

            <p>
                <input id="email2" class="w3-input" type="text">
                <label>Email</label></p>

            <p>
                <input  id="password1" class="w3-input" type="password">
                <label>Password</label></p>

            <p>
                <input id="confirmpassword" class="w3-input" type="password">
                <label>confirm password</label></p>
        </form>
        <p>


            <button id="loginB"   class="w3-button w3-white w3-border w3-border-blue w3-round-large" style="margin-left:25%;margin-bottom:5%;" >Login</button>
            <button id="registerB" class="w3-button w3-white w3-border w3-border-blue w3-round-large" style="margin-bottom:5%;">Register</button>
            <button id="registerC" class="w3-button w3-white w3-border w3-border-blue w3-round-large"style="margin-left:25%;margin-bottom:5%;" >Ok</button>
            <button id="registerD" class="w3-button w3-white w3-border w3-border-blue w3-round-large" style="margin-bottom:5%;">Cancel</button>

        </p>

    </div>
</div>
</body>
</html>