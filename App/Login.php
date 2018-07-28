<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>For Live c8</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../Css/Login.css" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <script type="text/javascript" src="../Js/jquery-3.3.1.js"></script>
</head>
<body>
        <div id="loginpanel">
            <div id="pageLogo">
                <img id="loginlogo" src="../Image/logo.png" height="250px" width="250px">
            </div>
            <div id="loginInfo">
                <form method="POST">
                    <center>
                        <input id="username" name="uname" type="text" placeholder="Enter Username" required/><br>
                        <input id="password" name="pass" type="password" placeholder="Enter Password" required/><br>
                        <input id="loginbutton" class="btn btn-primary btn-sm" type="submit" value="Login"/><br>
                    </center>
                </form>
            </div>
            <div id="extra">
                Don't Have an account ?
                <a href="register.php">click here</a> to get Registerd.<br>
            </div>
        </div>
        <script src="../Js/Login.js"></script>
</body>
</html>


<?php

    if($_SERVER['REQUEST_METHOD']=="POST"){

        $uname=$_REQUEST['uname'];
        include_once("../Data/user_access.php");

        $result=searchUser($uname);

        if($result==null){
            alert("Username Doesn't Exist");
        }else{
            alert($_REQUEST['pass']);
            if($_REQUEST['pass']==base64_decode($result['password'])){
				session_start();
                $_SESSION['user']=$result;
                
                header("location: Home.php");	
			}
			else{
				echo "Password Doesn't Match";
			}
        }

    }


?>