<?php

session_start();

if(isset($_POST['submit'])){
    
    include 'dbh.inc.php';
    
    $uname = mysqli_real_escape_string($conn, $_POST['uname']);
    $pwd = mysqli_real_escape_string($conn, $_POST['psw']);
    
    //Error handles
    //Check if input are empty
    if(empty($uname) || empty($pwd)){
        header("Location: ../register.php?login=empty_field");
        exit();
    }
    
    $sql = "SELECT * FROM useri WHERE email='$uname'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck < 1){
        header("Location: ../login.php?login=invalid_user");
        exit();
    }
    
    if($row = mysqli_fetch_assoc($result)){
        
        $db_hash = $row['password'];
        $hashedPwd = hash('sha256', $pwd);
        
        if($hashedPwd != $db_hash){
            header("Location: ../login.php?login=invalid_password");
            exit();
        }elseif($hashedPwd == $db_hash){
            //Log in the user here
            $_SESSION['u_id'] = $row['id'];
            $_SESSION['u_email'] = $row['email'];
            $_SESSION['u_pwd'] = $row['password'];
            $_SESSION['u_name'] = $row['full_name'];
            $_SESSION['u_adr'] = $row['adress'];
            $_SESSION['u_phone'] = $row['phone'];
            $_SESSION['u_country'] = $row['country'];
            $_SESSION['admin'] = $row['admin'];
            
            header("Location: ../login.php?login=succes");
            
            exit();
        }
    }
    
}else{
    header("Location: ../login.php");
    exit();
}


?>