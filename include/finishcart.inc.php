<?php

session_start();

if(isset($_SESSION['u_id'])){
    
    include 'dbh.inc.php';
    
    $user_id = $_SESSION['u_id'];
    
    $sql = "DELETE FROM cos WHERE cos.user_id=$user_id";
    $result = mysqli_query($conn, $sql);

    
    if(mysqli_affected_rows($conn) > 0){
        header("Location: ../cos_cumparaturi.php?status=ok"); 
        exit();
    }
    
    header("Location: ../cos_cumparaturi.php?nimicdecomandat=ok"); 
    exit();
}
else{
    header("Location: ../index.php");
    exit();
}

?>