<?php include "include/header.php";?>       



<style>
    .container-prodshow{
        color: #ccc;
    }

</style>


<div class="container-prodshow">
    <div id="content" class="col-md-12">
        <p class="clear"></p>
        <h1 style="margin-top: 50px">Cos de cumparaturi</h1>
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
                        <tr>
                            <td class="image hidden-xs">
                                <a href="#"><img src="images/database_img/lupte/1.jpg" alt="Iaitō 107 cm " title="Iaitō 107 cm" style="width:47px; height: 47px"></a>
                            </td>
                            <td class="name">
                                <a href="#">Iaitō 107 cm </a>
                            </td>
                            <td class="quantity">&emsp;1</td>
                            <td class="price">860,00 $</td>
                            <td class="total">860,00 $</td>
                            <td>
                                <div class="btn-group">
                                    <form action="deleteitem.inc.php" method="post"><button type="submit" class="btn btn-danger" alt="Delete" title="Delete"><span class="glyphicon glyphicon-remove"></span></button></form>
                                </div>
                            </td>
                        </tr>
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
                        <td class="right">1.190,00 Ron</td>
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

<?php include "include/footer.php";?>