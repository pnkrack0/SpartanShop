<?php

session_start();

if (isset($_POST['submit']) and isset($_SESSION['u_id']) and isset($_SESSION['prod_id'])){
    
    include_once 'dbh.inc.php';
    
    $quant = mysqli_real_escape_string($conn, $_POST['quantity']);
    $user_id = $_SESSION['u_id'];
    $prod_id =  $_SESSION['prod_id'];
    
    $sql = "INSERT INTO cos (user_id, produs_id, cantitate) VALUE ($user_id, $prod_id, $quant)";
    
    mysqli_query($conn, $sql);
    header("Location: ../produse.php");
    exit();
    
}else{
    header("Location: ../login.php");
    exit();
}


?>