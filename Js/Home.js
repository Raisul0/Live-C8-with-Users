$(function(){


    $("#chatIcon").click(function(){
        $("#chatPanel").css("visibility","visible");
        $("#chatIcon").css("visibility","hidden");
    });


    $("#chatNav").click(function(){
        $("#chatPanel").css("visibility","hidden");
        $("#chatIcon").css("visibility","visible");
    });

    $("#comments").focus(function(){
        
        $('#comments').css("background-color", "#cdddf7");

    });

    $("#comments").blur(function(){

        $('#comments').css("background-color", "white");

    });

    $("#logoutIcon").hover(function(){

        $("#logoutText").css("opacity","1");

    });

    $("#logoutIcon").mouseleave(function(){

        $("#logoutText").css("opacity","0");

    });

    $("#logoutIcon").click(function(){

        window.location.href="../App/Logout.php"
    });

});