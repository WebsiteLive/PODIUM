<?php
    session_start();
    session_destroy();
    unset($_SESSION['User_Id']);
    header("Location: index.php");
?>