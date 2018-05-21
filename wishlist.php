<?php include "include/header.php";?>     

    
<?php

    if(isset($_SESSION['u_id'])){
        echo "<div><p style='color: red'><br><br>you are logged in!</p></div>";
    }

?>
   
<script>
    document.title = "Wishlist";
</script>
    

<?php include "include/footer.php";?>