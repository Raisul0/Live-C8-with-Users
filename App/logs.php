<?php
    session_start();
	if(isset($_SESSION['user'])==false){
		header("location: Login.php");
    }

    $items;
    include_once("../Data/db.php");

    $query_delete = "DELETE FROM comments WHERE time_created < DATE_ADD(NOW(),INTERVAL -2 HOUR)";
    $result=mysqli_query($conn,$query_delete);


    $query_select = "SELECT * from comments order by commentid";
    $result=mysqli_query($conn,$query_select);


    $num_rows = mysqli_num_rows($result);
    if($num_rows!=0){
        for($i=0;$row=mysqli_fetch_assoc($result);$i++){
            $items[$i]=$row;
        }

        $total=count($items);
        if($total>0){
			for($i=0;$i<$total;$i++){

                if($items[$i]["userName"]==$_SESSION['user']['userName']){
                    echo "
                    <tr>
                        <td><label class='badge badge-success'>".$items[$i]["userName"]."</label></td>
                        <td>&emsp;</td>
                        <td><label class='badge badge-primary'>".$items[$i]["comment"]."</label></td>
                    </tr>
                    ";
                }else{
                    echo "
                    <tr>
                        <td><label class='badge badge-dark'>".$items[$i]["userName"]."</label></td>
                        <td>&emsp;</td>
                        <td><label class='badge badge-primary'>".$items[$i]["comment"]."</label></td>
                    </tr>
                    ";
                }



                
            }
        }

    }

    

    

    


        

?>