<?php

session_start();

if(isset($_GET['id_prod']) and isset($_SESSION['u_id'])){
    
    include 'dbh.inc.php';
    
    $prod_id = $_GET['id_prod'];
    $user_id = $_SESSION['u_id'];
    
    $sql = "DELETE FROM cos WHERE cos.user_id=$user_id AND cos.produs_id=$prod_id;";
    $result = mysqli_query($conn, $sql);
    
    header("Location: ../cos_cumparaturi.php");
    exit();
}
else{
    header("Location: ../index.php");
    exit();
}

?>