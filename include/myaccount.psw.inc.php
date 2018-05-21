<?php

session_start();

if(isset($_POST['submit']) and isset($_SESSION['u_id'])){
    
    include_once 'dbh.inc.php';
    
    $pwd = mysqli_real_escape_string($conn, $_POST['psw']);
    
    $db_hash = $_SESSION['u_pwd'];
    $hashedPwd = hash('sha256', $pwd);

    if($hashedPwd != $db_hash){
        header("Location: ../contul_meu.php?account=invalid_password");
        exit();
    }
    
    $pswn = mysqli_real_escape_string($conn, $_POST['pswn']);
    $pswrepeatn = mysqli_real_escape_string($conn, $_POST['psw-repeatn']);
    //check if password is longer than 8 characters
    if(strlen($pswn) < 8){
        header("Location: ../contul_meu.php?account=pwd_short");
        exit(); 
    }
    //check to be the same password
    if($pswn !== $pswrepeatn){
        header("Location: ../contul_meu.php?account=pwd_notmatch");
        exit();
    }
    
    $hashedPwdn = hash('sha256', $pswn);
    $session_id = $_SESSION['u_id'];
    
    $sql = "UPDATE useri SET password='$hashedPwdn' WHERE id='$session_id'";
    $result = mysqli_query($conn, $sql);
    
    if($result){
        $_SESSION['u_pwd'] = $hashedPwdn;
        
        header("Location: ../contul_meu.php?account=update_info_success");
        exit();
    }
    
}
else{
    header("Location: ../contul_meu.php");
    exit();
}

?>