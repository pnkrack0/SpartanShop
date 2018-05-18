<?php include "include/header.php";?>     

    

<script>
    var li_page = document.getElementById('navbar_li_produse');
    console.log(li_page);
    
    if(li_page) {
        li_page.className += " active";
    }
</script>



<?php include "include/footer.php";?>