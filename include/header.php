<!DOCTYPE html>
<html lang="en">
<!--Head Code-->
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
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
                                    <li><a href="./produse.php">Echipament</a></li>
                                    <li><a href="./produse.php">Arme</a></li>
                                    <li><a href="./produse.php">Lupte</a></li>
                                    <li><a href="./produse.php">MMA</a></li>
                                    <li><a href="./produse.php">Saltele</a></li>
                                    <li><a href="./produse.php">Promotii</a></li>
                                </ul>
                            </li>
                            <li id="navbar_li_sfaturi"><a href="./sfaturi.php">Sfaturi</a></li>
                            <li id="navbar_li_contact"><a href="./contact.php">Contact</a></li>
                            <li id="navbar_li_ajutor"><a href="./politica_firmei.php">Ajutor</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="./register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                            <li><a href="./index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!--main header-->
            <div id="main-header">
                <div id="logo">
                    <a href="./index.php"><img class="logoImageCls" src="images/logo_final.png" alt="Logo image"></a>
                </div>

                <div id="user-menu">
                    <li id="user-menu-wish"><a href="./wishlist.php">Wishlist (0)</a></li>
                    <li id="user-menu-cart"><a href="./cos_cumparaturi.php">Cart - 0 produs(e)</a></li>
                    <li id="user-menu-user"><a href="./contul_meu.php">Username</a></li>
                </div>
            </div>
            <div id="post-header">
                <div id="search">
                   <div id="spacer_1">.</div>
                   <form action="">
                       <input class="search-area" type="text" name="textSearch" placeholder="Search here...">
                       <input class="search-btn" type="submit" name="submitBtn" value="Search">
                   </form>                   
                </div>
            </div>
        </div>