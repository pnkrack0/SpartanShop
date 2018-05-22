<?php

session_start();

if(isset($_GET['id_prod']) and isset($_SESSION['u_id'])){
    
    include 'dbh.inc.php';
    
    $prod_id = $_GET['id_prod'];
    $user_id = $_SESSION['u_id'];
    
    $sql = "DELETE FROM wishlist WHERE wishlist.user_id=$user_id AND wishlist.produs_id=$prod_id;";
    $result = mysqli_query($conn, $sql);
    
    header("Location: ../wishlist.php");
    exit();
}
else{
    header("Location: ../index.php");
    exit();
}

?>