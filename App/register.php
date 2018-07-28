<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>For Live c8</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../Css/register.css" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <script type="text/javascript" src="../Js/jquery-3.3.1.js"></script>
</head>
<body>

    <div id="registrationpanel">
        <div id="pageLogo">
            <img id="registationlogo" src="../Image/logo.png" height="250px" width="250px">
        </div>
        <div id="registrationInfo">
                <form method="POST">   <center>
                <table id="regTable" cellpadding='15' >
                    <tbody>
                        <tr>
                            <td>Username</td>
                            <td>:</td>
                            <td><input id="username" name="uname"  type="text" placeholder="Enter Username" required/></td>
                        </tr>
                        <tr>
                            <td>Firstname</td>
                            <td>:</td>
                            <td><input id="firstname" name="fname"  type="text" placeholder="Enter Firstname" required/></td>
                        </tr>
                        <tr>
                            <td>Lastname</td>
                            <td>:</td>
                            <td><input id="lastname" name="lname"  type="text" placeholder="Enter Lastname" required/></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><input id="email" name="email"  type="email" placeholder="Enter Email Address" required/></td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td>:</td>
                            <td><div id="entergender"><input name="gender" type="radio" value="Male" required/> Male &emsp;&emsp;<input name="gender" type="radio" value="Female"/> Female</div></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>:</td>
                            <td><input id="password" name="pass" type="password" placeholder="8 Characters or more" required/></td>
                        </tr>
                        <tr>
                            <td>Confirm Password</td>
                            <td>:</td>
                            <td><input id="confirmpassword" name="cpass" type="password" placeholder="Confirm Password" required/></td>
                        </tr>

                    </tbody>
                </table>

                    <a href="Login.php"><button  id="canclebutton" class="btn btn-primary btn-sm">Cancle</button></a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="submit" id="registerbutton" class="btn btn-primary btn-sm" value="Register"><br>
                </center> 
            </form> 
        </div>
    </div>
    <div id="extraSpace">
        
    </div>
    <script src="../Js/register.js"></script>
</body>
</html>


<?php 

    if($_SERVER["REQUEST_METHOD"]=='POST'){

        include_once("../Data/user_access.php");

        $flag=0;
        $uname=$_REQUEST['uname'];

        if(!preg_match('/[^0-9a-zA-z_]/',$uname)){
			
			$result=searchUser($uname);
			
			if($result==null){
			}else{
				alert("Username already in use");
				$flag=1;
			}
			
		}else{
			alert("Invalid Characters in UserName");
			$flag=1;
        }

        $email=$_REQUEST['email'];

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
           
            $result=searchEmail($email);
            if($result==null){
			}else{
				alert("Email already in use");
				$flag=1;
			}

        }else
		{
			 alert("Invalid email format Ex : ABC@email.com");
			 $flag=1;
		}
        
        $fname=$_REQUEST['fname'];

        if(!preg_match('/[^0-9a-zA-z_]/',$fname)){
			
		}else{
			alert("Invalid Characters in Firstname");
			$flag=1;
        }
        
        $lname=$_REQUEST['lname'];

        if(!preg_match('/[^0-9a-zA-z_]/',$lname)){
			
		}else{
			alert("Invalid Characters in Lastname");
			$flag=1;
		}

        if(strlen($_REQUEST['pass'])>=8){
			
			if($_REQUEST['pass']!=$_REQUEST['cpass'] ){
                alert("Passwords Didn't Match");
                $flag=1;
			}
		}else{
			alert("Password Needs to be 8 Character long");
			$flag=1;
        }
        

        if($flag!=1){
			$uname=$_REQUEST['uname'];
            $fname=$_REQUEST['fname'];
            $lname=$_REQUEST['lname'];
			$pass=base64_encode($_REQUEST['pass']);
            $email=$_REQUEST['email'];
            $gender=$_REQUEST['gender'];
			
			
			if(addUser($uname,$fname,$lname,$email,$pass,$gender)){
                alert("Insertion Successfull");
                header('Location: Home.php');
			}else{
                alert("Server issue's try again later");
			}
		}else{
            
		}

    }
?>