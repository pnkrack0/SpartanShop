<?php include "include/header.php";?>     

 
       
<style>
    label {
        font-weight: bold;
    }

    .container-contact input[type=text],.container-contact input[type=email],.container-contact input[type=password],.container-contact input[type=number], .container-contact select,.container-contact textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
    }

    .container-contact input[type=text]:focus,.container-contact input[type=emial]:focus,.container-contact input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    .container-contact button[type=submit] {
        background-color: #333333;
        color: white;
        font-weight: bold;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .container-contact button[type=submit]:hover {
        opacity: 0.8;
        color: #cccccc;
    }

    .container-contact {
        background-color: #333333;
        padding: 15px 12px;
        float: left;
        width: 100%;
        margin-top: 10px;
        margin-bottom: 150px;

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

<!--Register form-->
<div class="container-contact">
    <form action="include/register.inc.php" style="border:1px solid #ccc border-radius: 5px" method="post">

       
        <?php
            $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            if(strpos($fullUrl, "register=empty_field") == true){
                echo "<p style='color:red; font-weight:bold; font-size: 14px;'>You did not fill in all the fields!</p>";
                echo "<a href='./register.php'>Try again?</a>";
                echo "</form></div>";
                include "include/footer.php";
                exit();
            }
            elseif(strpos($fullUrl, "register=invalid_name") == true){
                echo "<p style='color:red; font-weight:bold; font-size: 14px;'>You used invalide characthers for username!</p>";
                echo "<a href='./register.php'>Try again?</a>";
                echo "</form></div>";
                include "include/footer.php";
                exit();
            }
            elseif(strpos($fullUrl, "register=pwd_short") == true){
                echo "<p style='color:red; font-weight:bold; font-size: 14px;'>Password too short(min. 8 characthers)!</p>";
                echo "<a href='./register.php'>Try again?</a>";
                echo "</form></div>";
                include "include/footer.php";
                exit();
            }
            elseif(strpos($fullUrl, "register=pwd_notmatch") == true){
                echo "<p style='color:red; font-weight:bold; font-size: 14px;'>Passwords don't match!</p>";
                echo "<a href='./register.php'>Try again?</a>";
                echo "</form></div>";
                include "include/footer.php";
                exit();
            }
            elseif(strpos($fullUrl, "register=user_taken") == true){
                echo "<p style='color:red; font-weight:bold; font-size: 14px;'>This username(email) already exist!</p>";
                echo "<a href='./register.php'>Try again?</a>";
                echo "</form></div>";
                include "include/footer.php";
                exit();
            }
            elseif(strpos($fullUrl, "register=succes") == true){
                echo "<p style='color:green; font-weight:bold; font-size: 14px;'>You have been signed up!</p>";
                //echo "<a href='./register.php'>Try again?</a>";
                echo "</form></div>";
                include "include/footer.php";
                exit();
            }
        
        ?>
       
        <label for="email"><b>Email:</b></label>
        <input type="email" placeholder="Your Email..." name="email" required>
        <label for="fname">Name:</label>
        <input type="text" id="fname" name="fullname" placeholder="Your name..." required>

        <label for="adress">Adress:</label>
        <textarea id="subject" name="adress" placeholder="Your address..." style="height:100px" required></textarea>

        <label for="phone">Phone:</label>
        <input type="number" id="phone" name="phone" placeholder="Phone number..." required>

        <label for="country">Country:</label>
        <select id="country" name="country">
          <option value="romania">Romania</option>
          <option value="rep_moldova">Rep. Moldova</option>
          <option value="ungaria">Ungaria</option>
          <option value="bulgaria">Bulgaria</option>
          <option value="italia">Italia</option>
        </select>


        <label for="psw"><b>Password:</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <label for="psw-repeat"><b>Repeat Password:</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" required>


        <label>
          <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label>

        <p>By creating an account you agree to our <a href="politica_firmei.php" style="color:dodgerblue">Terms & Privacy</a>.</p>
        <br>
        <div class="clearfix">
          <button type="submit" name="submit" class="signupbtn">Sign Up</button>
        </div>
        
        
    </form>
</div>
       
<script>
    document.title = "Register";
</script>

<?php include "include/footer.php";?>