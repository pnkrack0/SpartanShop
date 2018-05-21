<?php include "include/header.php";?>



<style>
    .imgcontainer {
        text-align: center;
        margin: 24px 0px 12px 0px;
        margin-bottom: 35px;
    }

    img.avatar {
        width: 97%;
        max-width: 470px;
        border-radius: 50%;
    }
</style>

<!--afisam produsele din baza de date-->
<div class="container-cat_prod">
    <div id="heading-block">
        <h2>Produse</h2>        
    </div>
    <!--get all product from database and show them-->
    
    <!--product items-->
    <?php
        include 'include/dbh.inc.php';
        $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    
        $sql_cat = "SELECT * FROM categori";
        
        if(strpos($fullUrl, "produse=echipament") == true){
            $sql_cat = "SELECT * FROM categori WHERE id=1";
        }elseif(strpos($fullUrl, "produse=arme") == true){
            $sql_cat = "SELECT * FROM categori WHERE id=2";
        }elseif(strpos($fullUrl, "produse=lupte") == true){
            $sql_cat = "SELECT * FROM categori WHERE id=3";
        }elseif(strpos($fullUrl, "produse=mma") == true){
            $sql_cat = "SELECT * FROM categori WHERE id=4";
        }elseif(strpos($fullUrl, "produse=saltele") == true){
            $sql_cat = "SELECT * FROM categori WHERE id=5";
        }elseif(strpos($fullUrl, "produse=promitii") == true){
            $sql_cat = "SELECT * FROM categori WHERE id=6";
        }
    
        $result_cat = mysqli_query($conn, $sql_cat);
            
        /*filter all data by categories*/
        while($row_cat = mysqli_fetch_assoc($result_cat)){
            $categorie = $row_cat['nume'];
            
            $sql = "SELECT produse.id, produse.nume_produs, produse.pret, produse.poza_nume, categori.nume
                FROM produse
                INNER JOIN categori ON produse.categorie_id=categori.id;";
            $result = mysqli_query($conn, $sql);

            echo '<p style="color:#ccc; font-size:16px; font-weight:bold; letter-spacing:1.08px">'.$categorie.'</p><br>';
            echo '<div class="prod-container">';
            while($row = mysqli_fetch_assoc($result)){
                
                 $db_id = $row['id'];
                 $db_prodname = $row['nume_produs'];
                 $db_price = $row['pret'];
                 $db_imgpath = $row['poza_nume'];
                 $db_cat = $row['nume'];
                 
                 if($categorie === $db_cat){
                     echo '<div class="prod-box">
                                <a href="./produs_pres.php?id_prod='.$db_id.'"><img style="width:100%; height:100%;" src="'.$db_imgpath.'" alt="Product photo">
                                <div class="prod-trans">
                                    <div class="prod-feature">
                                        <p class="first_p">'.$db_prodname.'</p>
                                        <p style="font-weight: bold; color: #fff;">Price: '.$db_price.'$</p>
                                        <input type="button" value="Add to cart">
                                    </div>
                                </div></a>
                            </div>';
                 }
            }
            echo '</div>';
        }
    ?>
    
</div>

<!--Image-->
<div class="imgcontainer">
    <img src="images/products.jpg" alt="Avatar" class="avatar">
</div>

<script>
    var li_page = document.getElementById('navbar_li_produse');
    console.log(li_page);
    
    if(li_page) {
        li_page.className += " active";
    }
    
    document.title = "Produse";
</script>



<?php include "include/footer.php";?>