<?php include "include/header.php";?>     

          
<style>
    .container-contact label {
        font-weight: bold;
    }

    .container-contact input[type=email],.container-contact input[type=password]{
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
    }

    .container-contact input[type=email]:focus,.container-contact input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    .container-contact button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    .container-contact button:hover {
        opacity: 0.8;
    }


    .imgcontainer {
        text-align: center;
        margin: 24px 0px 12px 0px;
        margin-bottom: 35px;
    }

    img.avatar {
        width: 97%;
        max-width: 670px;
        border-radius: 50%;
    }

    
    .container-contact span.psw {
        padding-top: 12px;
        display: block;
        float: none;
    }
    
    .container-contact {
        background-color: #333333;
        padding: 15px 12px;
        float: left;
        width: 100%;
        margin-top: 10px;
        margin-bottom: 25px;
    }

    .container-contact form{
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;  
        margin: 0px 10%;
        margin: 0 auto;
        max-width: 1000px;
    }
    
</style>
   

<!--Login form-->
<div class="container-contact">
    <form action="include/login.inc.php" method="post">

        <?php
            $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            if(strpos($fullUrl, "login=empty_field") == true){
                echo "<p style='color:red; font-weight:bold; font-size: 14px;'>You did not fill in all the fields!</p>";
                echo "<a href='./login.php'>Try again?</a>";
                echo "</form></div>";
                echo '  <div class="imgcontainer">
                            <img src="images/login.jpg" alt="Avatar" class="avatar">
                        </div>';
                include "include/footer.php";
                exit();
            }
            elseif(strpos($fullUrl, "login=invalid_user") == true){
                echo "<p style='color:red; font-weight:bold; font-size: 14px;'>This username does not exist!</p>";
                echo "<a href='./login.php'>Try again?</a>";
                echo "</form></div>";
                echo '  <div class="imgcontainer">
                            <img src="images/login.jpg" alt="Avatar" class="avatar">
                        </div>';
                include "include/footer.php";
                exit();
            }
            elseif(strpos($fullUrl, "login=invalid_password") == true){
                echo "<p style='color:red; font-weight:bold; font-size: 14px;'>Invalid password!</p>";
                echo "<a href='./login.php'>Try again?</a>";
                echo "</form></div>";
                echo '  <div class="imgcontainer">
                            <img src="images/login.jpg" alt="Avatar" class="avatar">
                        </div>';
                include "include/footer.php";
                exit();
            }
            elseif(strpos($fullUrl, "login=succes") == true){
                echo "<p style='color:green; font-weight:bold; font-size: 14px;'>You are logged in! Try these:</p>";
                echo "<a href='./contul_meu.php'>My account</a><br>";
                echo "<a href='./include/logout.inc.php'>Logout</a>";
                echo "</form></div>";
                echo '  <div class="imgcontainer">
                            <img src="images/login.jpg" alt="Avatar" class="avatar">
                        </div>';
                include "include/footer.php";
                exit();
            }
        
        ?>
       
        <label for="uname"><b>Username</b></label>
        <input type="email" placeholder="Enter Username" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <button type="submit" name="submit">Login</button>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
        <br>
        <span class="psw">Forgot <a href="#">password?</a></span>
        
    </form>

</div>
    
<!--Image profile-->
<div class="imgcontainer">
    <img src="images/login.jpg" alt="Avatar" class="avatar">
</div>

<script>
    document.title = "Login";
</script>

<?php include "include/footer.php";?>