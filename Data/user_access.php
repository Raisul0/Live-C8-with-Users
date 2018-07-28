<?php  

    if(require_once("../Data/db.php")){

        function addUser($uname,$firstName,$lastName,$email,$password,$gender){
            
            global $conn;
            $query ="INSERT INTO user (userName, firstName, lastName, email, password, gender) VALUES('$uname','$firstName','$lastName','$email','$password','$gender')";
            $result=mysqli_query($conn,$query);
			
			return $result;
        }

        function searchUser($uname){

            global $conn;
            $query ="SELECT * from user where userName= '$uname'";
            $result=mysqli_query($conn,$query);
			
			return mysqli_fetch_assoc($result);
        }


        function searchEmail($email){

            global $conn;
            $query ="SELECT * from user where email= '$email'";
            $result=mysqli_query($conn,$query);
			
			return mysqli_fetch_assoc($result);
        }


    }else{
        echo "Database not found";
    }


?>