<?php
    session_start();
    $username =$_POST['username'];
    $password =$_POST['password'];
    /*$current= $_SESSION['uri'];*/

    echo $username;
    echo $password;
    include "dbcon.php";
    
    
    $query = "select*from UserLogIn_Credentials WHERE user_name = '$username' ";
    $result = odbc_exec($con,$query);
    
    if (empty($result)) {
        echo "BOBO MALI<script>
            window.alert('Does not Exist');
           
            </script>";
    }
    else {
        while ($row = odbc_fetch_array($result) ) {
            $user_password=$row["user_password"];
            if($user_password==$password){
                echo "Success";
            }
            else{
                echo"BOBO MALI";
            }
        }
        
    }
    
?>