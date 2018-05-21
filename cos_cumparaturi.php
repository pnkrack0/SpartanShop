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
        <h1 style="margin-top: 50px;">Cos de cumparaturi</h1>
        <form role="form" action="http://masibosport.ro/index.php?route=checkout/cart" method="post" enctype="multipart/form-data">
            <div class="cart-info">
                <table class="table">
                    <thead>
                        <tr>
                            <td class="image hidden-xs">Imagine</td>
                            <td class="name">Numele produsului</td>
                            <td class="quantity">Cantitate</td>
                            <td class="price">Pret unitar</td>
                            <td class="total">Pret Total</td>
                            <td class="total">Remove</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if(isset($_SESSION['u_id'])){
                                
                                include 'include/dbh.inc.php';
                                
                                $user_id = $_SESSION['u_id'];
                                $sql = "SELECT cos.produs_id, cos.cantitate, produse.nume_produs, produse.pret, produse.poza_nume 
                                        FROM cos
                                        INNER JOIN produse ON cos.produs_id=produse.id
                                        WHERE cos.user_id = $user_id";
                                $result = mysqli_query($conn, $sql);
                                
                                $total_sum = 0;
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    $db_photo = $row['poza_nume'];
                                    $db_prodid = $row['produs_id'];
                                    $db_cant = $row['cantitate'];
                                    $db_numeprod = $row['nume_produs'];
                                    $db_pret = $row['pret'];
                                    $db_total = $db_cant*$db_pret;
                                    $total_sum = $total_sum + $db_total;
                                    
                                    echo '<tr>
                                            <td class="image hidden-xs">
                                                <a href="#"><img src="'.$db_photo.'" alt="'.$db_numeprod.'" title="'.$db_numeprod.'" style="width:47px; height: 47px"></a>
                                            </td>
                                            <td class="name">
                                                <a href="./produs_pres.php?id_prod='.$db_prodid.'">'.$db_numeprod.'</a>
                                            </td>
                                            <td class="quantity">&emsp;'.$db_cant.'</td>
                                            <td class="price">'.$db_pret.' $</td>
                                            <td class="total">'.$db_total.' $</td>
                                            <td>
                                                <div class="btn-group">
                                                    <form action="deleteitem.inc.php" method="post"><button type="submit" class="btn btn-danger" alt="Delete" title="Delete"><span class="glyphicon glyphicon-remove"></span></button></form>
                                                </div>
                                            </td>
                                        </tr>';
                                }
                            }
                        ?>
                        
                    </tbody>
                </table>
            </div>
        </form>
        <h3 style="margin:25px 0px">Ce ati dori sa faceti în continuare?</h3>

        <div class="cart-total">
            <table id="total" style="margin-bottom: 20px">
                <tbody>
                    <tr>
                        <td class="right"><strong>Total:&emsp;&emsp;</strong></td>
                        <td class="right"><?php echo $total_sum ?> $</td>
                    </tr>
                </tbody></table>
        </div>
        <div class="pull-right">
            <form action="finishcart.inc.php" method="post">
                <button type="submit" class="btn btn-info" alt="Comanda" title="Comanda"><span class="glyphicon glyphicon-lock"></span>&emsp;Comanda</button>
            </form>
        </div>
        <div class="pull-center"><a href="./produse.php" class="btn btn-info">Continua cumparaturile</a></div>
    </div>
</div>



<script>
    document.title = "Cart";
</script>



<?php include "include/footer.php";?>