<?php 
	ob_start();
	session_start();
	require_once 'config/connect.php';
	if(!isset($_SESSION['customer']) & empty($_SESSION['customer'])){
		header('location: login.php');
	}

include 'inc/header.php'; 
include 'inc/nav.php'; 
$uid = $_SESSION['customerid'];
$cart = $_SESSION['cart'];


?>

<!-- SHOP CONTENT -->
<section id="content">

    <div class="container">




        <p class="h4  container text-center mt-5 animate__animated animate__flipInX">Sipariş Detay</p>


        <table class="container table cart mt-5 animate__animated animate__flipInX">
            <thead>
                <tr>
                    <th>Ürün Adı</th>
                    <th>Miktarı</th>
                    <th>Tutar</th>

                    <th>Toplam</th>
                </tr>
            </thead>
            <tbody class="paymentcss3">

                <?php

					if(isset($_GET['id']) & !empty($_GET['id'])){
						$oid = $_GET['id'];
					}else{
						header('location: my-account');
					}
					$ordsql = "SELECT * FROM orders WHERE uid='$uid' AND id='$oid'";
					$ordres = mysqli_query($connection, $ordsql);
					$ordr = mysqli_fetch_assoc($ordres);
              
                

					$orditmsql = "SELECT * FROM orderitems o JOIN products p WHERE o.orderid='$oid' AND o.pid=p.id";
					$orditmres = mysqli_query($connection, $orditmsql);
					while($orditmr = mysqli_fetch_assoc($orditmres)){
				?>
                <tr>
                    <td>
                        <div><?php echo substr($orditmr['name'], 0, 25); ?></div>
                    </td>
                    <td>
                        <?php echo $orditmr['pquantity']; ?>
                    </td>
                    <td>
                        <?php echo $orditmr['productprice']." ". ₺; ?>
                    </td>

                    <td>
                        <?php echo $orditmr['productprice']*$orditmr['pquantity']." ". ₺; ?>
                    </td>
                </tr>
                <?php } ?>



            </tbody>
        </table>

        <div class="container text-center animate__animated animate__flipInX">
            <span class="font12">Alışveriş Toplamı : </span>
            <span class="font14 text-center "><?php echo $ordr['totalprice']." ". ₺; ?> </span>
        </div>
        <div class="container text-center animate__animated animate__flipInX">
            <span class="font12">Paket Ücreti : </span>
            <span class="font14 text-center "><?php echo $ordr['kargo']; ?> ₺ </span>
        </div>
        <div class="container text-center animate__animated animate__flipInX">
            <span class="font14">Toplam : </span>
            <span class="font14 text-center "><?php echo $ordr['totalson']; ?> ₺ </span>
        </div>
        <div class="container text-center mt-3  animate__animated animate__flipInX">
            <a href="my-account"> <img src="admin/uploads/back.png" alt="" style="width:40px;"><br>
                <span>geri dön</span></a>
        </div>



    </div>

</section>

<?php include 'inc/footer.php' ?>
