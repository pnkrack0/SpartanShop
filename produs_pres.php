<?php include "include/header.php";?>     


<style>
    .container-contact {
        background-color: #333333;
        padding: 15px 12px;
        float: left;
        width: 100%;
        margin-top: 10px;
        margin-bottom: 150px;

    }
    .container-contact .box-color-2{
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;  
        margin: 0px 10%;
        margin: 0 auto;
        max-width: 1000px;
    }
</style>


<?php
    
    include 'include/dbh.inc.php';
    if(isset($_GET['id_prod']))
    {
        $prod_id = $_GET['id_prod'];
        
        
        $sql = "SELECT * FROM produse WHERE id = $prod_id";
        $result = mysqli_query($conn, $sql);
        
        if($row=mysqli_fetch_assoc($result)){
            
            $db_nume = $row['nume_produs'];
            $db_prod = $row['producator'];
            $db_pret = $row['pret'];
            $db_carac = $row['caracteristici'];
            $db_tech = $row['detalii_tehnice'];
            $db_stoc = $row['stoc'];
            $db_poza = $row['poza_nume'];
            
            $_SESSION['prod_id'] = $prod_id;
            
            echo '<div class="container-contact">
                    <div class="box-color-2">

                        <!-- Title -->
                        <h3 class="box-color-2-title"><span>'.$db_nume.'</span></h3>

                        <div class="box-color-2-text">
                            <div class="product-info row">
                                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 left">
                                    <div class="image">
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" title="'.$db_nume.'"><img style="width:275px;" src="'.$db_poza.'" title="'.$db_nume.'" alt="'.$db_nume.'" id="image" /></a>
                                    </div>
                                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                </div>
                                                <div class="modal-body"><img src="'.$db_poza.'" title="'.$db_nume.'" alt="'.$db_nume.'" id="image" class="img-responsive"/></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 right">
                                    <div class="description">
                                        <br><br>
                                        <span>Producator: </span>'.$db_prod.'<br />
                                        <span>Disponibilitate: </span>'.$db_stoc.'</div>
                                    <!-- Info product -->
                                    <div class="info-product">
                                        <div class="price">Pret: <span class="updated-price">'.$db_pret.'$</span>
                                            <br><br>
                                        </div>
                                        <br><br>
                                        <div class="cart">
                                           <form action="./include/addtocart.inc.php" method="post">
                                            <div class="cart-button-product">Cant: <input type="number" name="quantity" class="input" value="1" min="1" max="'.$db_stoc.'" style="width: 45px" required/>
                                            <button type="submit" name="submit">Add to cart</button></div></form>
                                            <p style="margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; direction: ltr; unicode-bidi: embed; word-break: normal;">&nbsp;</p>
                                            <form action="./include/addtowishlist.inc.php" method="post">
                                            <div class="cart-text"><button type="submit" name="submit" style="width: 170px">Add to Wishlist</button>
                                            </div></form>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                            <div id="tab-description" class="tab-content">
                               <!--Caracteristici-->
                               <p style="margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; direction: ltr; unicode-bidi: embed; word-break: normal;">
                                <span style="color:#000000;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><em><strong><br>Caracteristici:<br></strong></em></span></span></span></p>
                                <p style="margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; direction: ltr; unicode-bidi: embed; word-break: normal;">&nbsp;</p>


                                <p style="margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; direction: ltr; unicode-bidi: embed; word-break: normal;">
                                    <span style="color:#000000;"><span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;">'.$db_carac.'<br><br></span></span></span></p>
                                <p style="margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; direction: ltr; unicode-bidi: embed; word-break: normal;">&nbsp;</p>

                                <!--Detalii tehnice-->
                                <p style="margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; direction: ltr; unicode-bidi: embed; word-break: normal;">
                                    <span style="color:#000000;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><em><strong>Detalii tehnice:</strong></em></span></span></span></p>
                                <p style="margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; direction: ltr; unicode-bidi: embed; word-break: normal;">&nbsp;</p> 

                                <p style="margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; direction: ltr; unicode-bidi: embed; word-break: normal;">
                                    <span style="color:#000000;"><span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;">'.$db_tech.'</span></span></span></p>

                                <p style="margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; direction: ltr; unicode-bidi: embed; word-break: normal;">&nbsp;</p>
                                <p style="margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; direction: ltr; unicode-bidi: embed; word-break: normal;">&nbsp;</p>
                            </div>
                        </div>
                    </div>
                </div>;';
            
        }else{
            echo '<div class="container-contact">
                    <div class="box-color-2"><p style="color:red; font-weight:bold; font-size: 15px;"><br>Error 404:  PRODUCT NOT FOUNT!<br></p></div>
                </div>';
        }
    }else{
        echo '<div class="container-contact">
                <div class="box-color-2"><p style="color:red; font-weight:bold; font-size: 15px;"><br>Error 404:  PRODUCT NOT FOUNT!<br></p></div>
            </div>';
    }
    

?>

<script>
    document.title = "Produs";
</script>


<?php include "include/footer.php";?>