<?php
    session_start();
    $username =$_POST['username'];
    $password =$_POST['password'];
    /*$current= $_SESSION['uri'];*/

    echo $username;
    echo $password;
    include "dbcon.php";
    
    
    if($con->connect_error){
        die("Failed To Connect: ".$con->connect_error);
    }
    else{
        $query = "select * from users_info where user_name= ?";
        $stmt = $con->prepare($query);
        $stmt ->bind_param("s", $username);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0){
            $data = $stmt_result->fetch_assoc();
            if($data['user_password'] === $password){

                $_SESSION['user_id'] = $data['User_id'];
               echo "LOGIN SUCCESS";
                /*header("Location: $current");*/
                die;
				
            }
            else {
            echo "<script>
            window.alert('Wrong Username/Password');
            window.location.href='$current';
            </script>";
                die;
            }
        }
        else{
            
            echo "<script>
            window.alert('Account does not Exist');
            </script>";
            die;
        }
    }
    
?>