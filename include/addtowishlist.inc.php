<?php

session_start();

if (isset($_POST['submit']) and isset($_SESSION['u_id']) and isset($_SESSION['prod_id'])){
    
    include_once 'dbh.inc.php';
    
    $user_id = $_SESSION['u_id'];
    $prod_id =  $_SESSION['prod_id'];
    
    $sql = "INSERT INTO wishlist (user_id, produs_id) VALUE ($user_id, $prod_id)";
    
    mysqli_query($conn, $sql);
    header("Location: ../produse.php");
    exit();
    
}else{
    header("Location: ../login.php");
    exit();
}


?>