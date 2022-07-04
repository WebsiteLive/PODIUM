<?php
    include 'dbcon.php';
    include 'id_generator.php';
    $user_id=id_generator('id');
    
    $email=$_POST['email'];
    $uname=$_POST['uname'];
    $pass=$_POST['password'];
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $lname=$_POST['lname'];
    $address=$_POST['address'];
    $ext_name=$_POST['extname'];
    $birth=$_POST['bday'];
    
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    echo $user_id,$email,$fname, $mname, $lname, $address,$birth;

    if(!$con){
        header("Location: Ghost.html");
    }
    else{
        $query = "INSERT INTO UserLogin_Credentials(User_Id,user_email,user_name,user_password)
        VALUES('$user_id','$email','$uname','$pass')";
        $result = odbc_exec($con,$query);

        $query2 = "INSERT INTO user_basicinfo(User_Id
        ,first_name
        ,middle_name
        ,last_name
        ,ext_name
        ,user_address
        ,user_birthdate)
        VALUES('$user_id','$fname','$mname','$lname','$ext_name','$address','$birth')";
        $result2 = odbc_exec($con,$query2);

        echo $result,$result2;

        if(!$result || !$result2){
            header("Location: Ghost.html");
        }
        else{
            $resultmess="Sign Up Succes";
            header("Location: signup_page.php?success=$resultmess");
        }
    }

   
?>