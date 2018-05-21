<?php

if(isset($_POST['submit'])){
    
    include_once 'dbh.inc.php';
    
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $adress = mysqli_real_escape_string($conn, $_POST['adress']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $psw = mysqli_real_escape_string($conn, $_POST['psw']);
    $pswrepeat = mysqli_real_escape_string($conn, $_POST['psw-repeat']);
    $remember = mysqli_real_escape_string($conn, $_POST['remember']);
    
    
    //Error handlers    
    //Check for empty fields
    if(empty($email) || empty($fullname) || empty($adress) || empty($phone) || empty($country) || empty($psw) || empty($pswrepeat) ){
        header("Location: ../register.php?register=empty_field");
        exit();
    }

    //check if input characters are valid
    if(!preg_match("/^[a-zA-Z _-]*$/", $fullname)){
        header("Location: ../register.php?register=invalid_name");
        exit();
    }
    
    //check if password is longer than 8 characters
    if(strlen($psw) < 8){
        header("Location: ../register.php?register=pwd_short");
        exit(); 
    }
    
    if($psw !== $pswrepeat){
        header("Location: ../register.php?register=pwd_notmatch");
        exit();
    }
    
    $sql = "SELECT * FROM useri WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0){
        header("Location: ../register.php?register=user_taken");
        exit();            
    }

    //hasing the password
    $hashedPwd = hash('sha256', $psw);
    
    //Get the max id to insert into the database
    $sql = "SELECT max(id) FROM useri";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    $idd = 1;
    if($resultCheck > 0){
        $row = $result->fetch_assoc();
        $idd = $row['max(id)'] + 1;
    }

    //INSERT the user into the database;
    $sql = "INSERT INTO useri (id, email, password, full_name, adress, phone, country, admin) VALUE ($idd, '$email', '$hashedPwd', '$fullname', '$adress', '$phone', '$country', 0);";

    mysqli_query($conn, $sql);
    header("Location: ../register.php?register=succes");
    exit();
    
    
}else{
    header("Location: ../register.php");
    exit();
}


?>