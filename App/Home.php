<!DOCTYPE html>
<?php
	session_start();
	if(isset($_SESSION['user'])==false){
		header("location: Login.php");
    }
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>For Live c8</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../Css/Home.css" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <script type="text/javascript" src="../Js/jquery-3.3.1.js"></script>
    <script>
        function sendChat(){
            if($("#comments").val()==""){
                alert("Enter What you want to say");
            }else
            { 

                var msg=$("#comments").val();
                var user=$("#username").val();

                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                }else {
                    // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("showChat").innerHTML = "<table><tbody>"+ this.responseText+ "</tbody></table>";
                    }else{
                    }
                };
                xmlhttp.open('GET','Insertmsg.php?user='+user+'&msg='+msg,true);
                xmlhttp.send();
            }
        }


        $(document).ready(function(e){
            $.ajaxSetup({cache:false});
            setInterval(function(){$("#showChat").load("logs.php");},2000);
        });
</script>

</head>
<body>
    <div id="chatPanel">
        <div id="chatNav">
            Live Chat
        </div>
        <div id="showChat">
            Loading Chat....
        </div>
        <div id="sendChat">
            <form>
                <input id="comments" placeholder="What's in your mind?" type="text" autocomplete="off" />
                <input id="username" type="hidden" value="<?=$_SESSION['user']['userName'];?>" />
                <button class="btn btn-primary btn-sm" onclick="sendChat()">Send</button><br>
            </form>        
        </div>
    </div>
    <div id="chatIcon">
            <img id="c8logo" src="../Image/chat-circle-blue-512.png" height="80px" width="80px">
    </div>
    <div id="logoutIcon">
        <img id="logoutlogo" src="../Image/Logout.png" height="50px" width="50px">
        <lable id="logoutText">Logout</lable>
    </div>
    <script src="../Js/Home.js"></script>
</body>
</html>