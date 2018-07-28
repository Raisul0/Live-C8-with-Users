<?php 
    include_once("../Data/db.php");
    $username =$_REQUEST['user'];
    $msg =$_REQUEST['msg'];

    $query = "INSERT comments SET userName='$username', comment='$msg'";
    $result=mysqli_query($conn,$query);

?>