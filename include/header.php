<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<!--Head Code-->
<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <!--navbar bootstrap-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <!--slider-->
    <link rel="stylesheet" href="css/jquery.bxslider.css" type="text/css">
</head>
<!--Body Code-->
<body>
    <!--Pagina-->
    <div id="wrapper">
        <!--header continue-->
        <div id="header">
            <!--Bara de navigare in bootstrap-->
            <nav class="navbar navbar-inverse navbar-static-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                        
                        </button>
                        <a class="navbar-brand" href="./index.php">Spartan Shop</a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li id="navbar_li_acasa"><a href="./index.php">Acasa</a></li>
                            <li id="navbar_li_produse" class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Produse <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="./produse.php?produse=echipament">Echipament</a></li>
                                    <li><a href="./produse.php?produse=arme">Arme</a></li>
                                    <li><a href="./produse.php?produse=lupte">Lupte</a></li>
                                    <li><a href="./produse.php?produse=mma">MMA</a></li>
                                    <li><a href="./produse.php?produse=saltele">Saltele</a></li>
                                    <li><a href="./produse.php?produse=promitii">Promotii</a></li>
                                </ul>
                            </li>
                            <li id="navbar_li_sfaturi"><a href="./sfaturi.php">Sfaturi</a></li>
                            <li id="navbar_li_contact"><a href="./contact.php">Contact</a></li>
                            <li id="navbar_li_ajutor"><a href="./politica_firmei.php">Ajutor</a></li>
                        </ul>
                        
                        <?php
                            if(isset($_SESSION['u_id'])){
                                echo '<ul class="nav navbar-nav navbar-right">
                                        <li><a href="include/logout.inc.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                                    </ul>';
                            }else{
                                echo '<ul class="nav navbar-nav navbar-right">
                                        <li><a href="./register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                                        <li><a href="./login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                                    </ul>';
                            }
                        ?>
                        
                    </div>
                </div>
            </nav>
            <!--main header-->
            <div id="main-header">
                <div id="logo">
                    <a href="./index.php"><img class="logoImageCls" src="images/logo_final.png" alt="Logo image"></a>
                </div>

                <div id="user-menu">
                   <?php
                        if(isset($_SESSION['u_id'])){
                            include 'include/dbh.inc.php';
                            
                            $u_idd = $_SESSION['u_id'];
                            
                            $u_name = $_SESSION['u_email'];
                            $u_nameCut = strtok($u_name, '@');
                            
                            //Count items from cart
                            $sql = "SELECT COUNT(*) FROM cos WHERE user_id = $u_idd";
                            $result = mysqli_query($conn, $sql);
                            $items_cart = 0;
                            if($row = mysqli_fetch_assoc($result))
                            {
                                $items_cart = $row['COUNT(*)'];
                            }
                            
                            //Count items from wishlist
                            $sql = "SELECT COUNT(*) FROM wishlist WHERE user_id = $u_idd";
                            $result = mysqli_query($conn, $sql);
                            $items_wishlist = 0;
                            if($row = mysqli_fetch_assoc($result))
                            {
                                $items_wishlist = $row['COUNT(*)'];
                            }
                            
                            echo '  <li id="user-menu-wish"><a href="./wishlist.php">Wishlist ('.$items_wishlist.')</a></li>
                                    <li id="user-menu-cart"><a href="./cos_cumparaturi.php">Cart - '.$items_cart.' produs(e)</a></li>
                                    <li id="user-menu-user"><a href="./contul_meu.php">'.$u_nameCut.'</a></li>';
                        }else{
                            echo '  <li id="user-menu-wish"><a href="./wishlist.php">Wishlist (0)</a></li>
                                    <li id="user-menu-cart"><a href="./cos_cumparaturi.php">Cart - 0 produs(e)</a></li>
                                    <li id="user-menu-user"><a href="./register.php">Username</a></li>';
                        }
                    ?>
                </div>
            </div>
            <div id="post-header">
                <div id="search-container">
                   <form action="">
                       <input class="search-area" type="text" name="textSearch" placeholder="Search here...">
                       <input class="search-btn" type="submit" name="submitBtn" value="Search">
                   </form>                   
                </div>
            </div>
        </div>