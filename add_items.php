<?php
    include 'dbcon.php';
    include 'getimgurl.php';
    include 'id_generator.php';
    $creator="104935060149";
    $thread_id=id_generator('$id');
    $item_type="test";
    $post_type="test";
    $post_caption="test";
    $post_description="test";
    $prize="test";
    $date=date('d/m/y');
       
    
    if(!$con){
        header("Location: Ghost.html");
    }
    else{
        $query = "INSERT INTO art_submission(Creator_Id
        ,thread_Id
        ,item_imgurl
        ,item_type
        ,post_type
        ,post_caption
        ,post_description
        ,prize
        ,date_published)VALUES('$creator','$thread_id','$img_upload_path','$item_type','$post_type','$post_caption','$post_description','$prize','$date')";
        $result = odbc_exec($con,$query);
    }

?>

