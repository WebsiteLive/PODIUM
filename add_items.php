<?php
    include 'dbcon.php';
    $img=$_FILES['imgfile'];

    $img_name=$img['name'];
    $img_size=$img['size'];
    $img_tmp=$img['tmp_name'];
    $error=$img['error'];


    if($error===0){
        $img_ex=pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc=strtolower($img_ex);
        $allowed_exs=ARRAY("jpeg","jpg","png");

        if(in_array($img_ex_lc,$allowed_exs)){
            
            $new_img_name=uniqid("img", true).'.'.$img_ex_lc;
            $img_upload_path='uploads/'.$new_img_name;
            move_uploaded_file($img_tmp,$img_upload_path);
            echo $new_img_name;
        }
        else{
            
            /*code here*/
        }

      
    }
    else{
        header("Location: Ghost.html");
    }
   
    
    /*
    if(!$con){
        header("Location: Ghost.html");
    }
    else{
        if(empty($_POST['imgfile'])){
            echo"1";
        }else{ 
            echo"2";
            /*header("Location: Ghost.html");
        }

    */
?>