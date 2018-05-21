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
        float: right;
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
        margin-bottom: 35px;

    }

    .container-contact form{
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;  
        margin: 0px 10%;
        margin: 0 auto;
        max-width: 1000px;
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
</style>

<!--Register form-->
<div class="container-contact">
   <!--Change basid user data-->
    <form action="include/myaccount.inc.php" style="border:1px solid #ccc border-radius: 5px" method="post">
        
        <?php
            $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            if(strpos($fullUrl, "account=invalid_password") == true){
                echo "<p style='color:red; font-weight:bold; font-size: 14px;'>Invalid password!</p>";
                echo "<a href='./contul_meu.php'>Try again?</a>";
                echo "</form></div>";
                echo '  <div class="imgcontainer">
                            <img src="images/account.jpg" alt="Avatar" class="avatar">
                        </div>';
                include "include/footer.php";
                exit();
            }elseif(strpos($fullUrl, "account=pwd_short") == true){
                echo "<p style='color:red; font-weight:bold; font-size: 14px;'>New password too short!</p>";
                echo "<a href='./contul_meu.php'>Try again?</a>";
                echo "</form></div>";
                echo '  <div class="imgcontainer">
                            <img src="images/account.jpg" alt="Avatar" class="avatar">
                        </div>';
                include "include/footer.php";
                exit();
            }elseif(strpos($fullUrl, "account=pwd_notmatch") == true){
                echo "<p style='color:red; font-weight:bold; font-size: 14px;'>Passwords did not match!</p>";
                echo "<a href='./contul_meu.php'>Try again?</a>";
                echo "</form></div>";
                echo '  <div class="imgcontainer">
                            <img src="images/account.jpg" alt="Avatar" class="avatar">
                        </div>';
                include "include/footer.php";
                exit();
            }elseif(strpos($fullUrl, "account=update_info_success") == true){
                echo "<p style='color:green; font-weight:bold; font-size: 14px;'>You succesfull changed your data!</p>";
                echo "<a href='./contul_meu.php'>Another change?</a>";
                echo "</form></div>";
                echo '  <div class="imgcontainer">
                            <img src="images/account.jpg" alt="Avatar" class="avatar">
                        </div>';
                include "include/footer.php";
                exit();
            }
        ?>
        
        <p style='color:#333; font-weight:bold; font-size: 16px;'>Change user data:</p>
        <br>
        
        <!--put data into text area-->
        <?php
        $user_name = "";
        $user_adress = "";
        $user_phone = "";
        
        if(isset($_SESSION['u_id'])){
            $user_name = $_SESSION['u_name'];
            $user_adress = $_SESSION['u_adr'];
            $user_phone = $_SESSION['u_phone'];
        }
        ?>
        
        <label for="fullname">Name:</label>
        <input type="text" id="fname" name="fullname" value="<?php echo htmlentities($user_name); ?>" required>

        <label for="adress">Adress:</label>
        <textarea id="subject" name="adress" style="height:100px" required><?php echo $user_adress; ?></textarea>

        <label for="phone">Phone:</label>
        <input type="number" id="phone" name="phone" value="<?php echo $user_phone; ?>" required>
        
        <br><br>
        <div class="clearfix">
          <button type="submit" name="submit" class="signupbtn">Update</button>
        </div>
        
    </form>
    
    <br><br>
    
    <!--change password-->
    <form action="include/myaccount.psw.inc.php" style="border:1px solid #ccc border-radius: 5px" method="post">
        
        <p style='color:#333; font-weight:bold; font-size: 16px;'>Change password:</p>
        <br>

        <label for="psw"><b>Old Password:</b></label>
        <input type="password" placeholder="Enter Old Password" name="psw" required>

        <label for="pswn"><b>New Password:</b></label>
        <input type="password" placeholder="Enter Password" name="pswn" required>

        <label for="psw-repeatn"><b>Repeat New Password:</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeatn" required>

        <br><br>
        <div class="clearfix">
          <button type="submit" name="submit" class="signupbtn">Update</button>
        </div>
        
    </form>
</div>
      
<!--Image profile-->
<div class="imgcontainer">
    <img src="images/account.jpg" alt="Avatar" class="avatar">
</div>
       
<script>
    document.title = "My account";
</script>

<?php include "include/footer.php";?>