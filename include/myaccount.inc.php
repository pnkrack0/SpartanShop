<?php

session_start();

if(isset($_POST['submit']) and isset($_SESSION['u_id'])){
    
    include_once 'dbh.inc.php';
    
    $toins_name = mysqli_real_escape_string($conn, $_POST['fullname']);
    $toins_adress = mysqli_real_escape_string($conn, $_POST['adress']);
    $toins_phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $session_id = $_SESSION['u_id'];
    
    $sql = "UPDATE useri SET full_name='$toins_name', adress='$toins_adress', phone='$toins_phone' WHERE id='$session_id'";
    $result = mysqli_query($conn, $sql);
    
    if($result){
        $_SESSION['u_name'] = $toins_name;
        $_SESSION['u_adr'] = $toins_adress;
        $_SESSION['u_phone'] = $toins_phone;
        
        header("Location: ../contul_meu.php?account=update_info_success");
        exit();
    }
    
}
else{
    header("Location: ../contul_meu.php");
    exit();
}

?>