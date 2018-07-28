    $(function(){

    var flag=0;

    $("#username").focus(function(){

        $('#username').css("background-color", "#cdddf7");

    });

    $("#username").blur(function(){
        
        $('#username').css("background-color", "white");
        
    });

    $("#firstname").focus(function(){

        $('#firstname').css("background-color", "#cdddf7");

    });

    $("#firstname").blur(function(){

        $('#firstname').css("background-color", "white");

    });

    $("#lastname").focus(function(){
        
        $('#lastname').css("background-color", "#cdddf7");
    });

    $("#lastname").blur(function(){
        
        $('#lastname').css("background-color", "white");

    });

    $("#email").focus(function(){

        $('#email').css("background-color", "#cdddf7");

    });

    $("#email").blur(function(){

        $('#email').css("background-color", "white");

    });

    $("#password").focus(function(){

        $('#password').css("background-color", "#cdddf7");

    });

    $("#password").blur(function(){

            $('#password').css("background-color", "white");
    
    });

    $("#confirmpassword").focus(function(){

        $('#confirmpassword').css("background-color", "#cdddf7");
        
    });

    $("#confirmpassword").blur(function(){

        if($("#password").val()!=$("#confirmpassword").val()){
            $('#confirmpassword').css("background-color", "#f25959");
            flag=1;
        }else{
            $('#confirmpassword').css("background-color", "white");
            flag=0;
        }

        

    });

    $("#registerbutton").click(function(e){
        if(flag==1){
            e.preventDefault();
        }
    });

    $("#canclebutton").click(function(){
		
		window.location.href="../App/Login.php"
	});
    
    $("#extraSpace").css("top",$("#registrationpanel").css("height"));

});
