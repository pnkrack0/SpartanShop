<?php include "include/header.php";?>     

    
<!--products presentation-->
<style>
    .container-prodshow{
        color: #ccc;
        margin-bottom: 
    }
</style>


<div class="container-prodshow">
    <div id="content" class="col-md-12">
        <p class="clear"></p>
        <h1 style="margin-top: 50px;">Wishlist</h1>
            <div class="cart-info">
                <table class="table">
                    <thead>
                        <tr>
                            <td class="image hidden-xs">Imagine</td>
                            <td class="name">Numele produsului</td>
                            <td class="price">Pret unitar</td>
                            <td class="total">Remove</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if(isset($_SESSION['u_id'])){
                                
                                include 'include/dbh.inc.php';
                                
                                $user_id = $_SESSION['u_id'];
                                $sql = "SELECT wishlist.produs_id, produse.nume_produs, produse.pret, produse.poza_nume 
                                        FROM wishlist
                                        INNER JOIN produse ON wishlist.produs_id=produse.id
                                        WHERE wishlist.user_id = $user_id";
                                $result = mysqli_query($conn, $sql);
                                
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    $db_photo = $row['poza_nume'];
                                    $db_prodid = $row['produs_id'];
                                    $db_numeprod = $row['nume_produs'];
                                    $db_pret = $row['pret'];
                                    
                                    echo '<tr>
                                            <td class="image hidden-xs">
                                                <a href="#"><img src="'.$db_photo.'" alt="'.$db_numeprod.'" title="'.$db_numeprod.'" style="width:47px; height: 47px"></a>
                                            </td>
                                            <td class="name">
                                                <a href="./produs_pres.php?id_prod='.$db_prodid.'">'.$db_numeprod.'</a>
                                            </td>
                                            <td class="price">'.$db_pret.' $</td>
                                            <td>
                                                <div class="btn-group">
                                                    <form action="include/deleteitemwish.inc.php?id_prod='.$db_prodid.'" method="post"><button type="submit" class="btn btn-danger" alt="Delete" title="Delete"><span class="glyphicon glyphicon-remove"></span></button></form>
                                                </div>
                                            </td>
                                        </tr>';
                                }
                            }
                        ?>
                        
                    </tbody>
                </table>
            </div>
        <h4 style="margin:25px 0px">Cauta mai multe produse:</h4>
        <div class="pull-center"><a href="./index.php" class="btn btn-info">Home page</a></div>

    </div>
</div>


   
<script>
    document.title = "Wishlist";
</script>
    

<?php include "include/footer.php";?>