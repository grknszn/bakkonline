<?php
	session_start();
	require_once '../config/connect.php';
	
?>
<?php include 'inc/header.php'; ?>
<?php include 'inc/nav.php'; 

$uid = $_GET['uid'];

?>



<div class="row">
    <div class="container text-center font12" style="line-height: 5px; float:left;">
        <h3 class="mt-3 mb-3">Müşteri Bilgileri</h3>
        <?php
						$csql = "SELECT u1.firstname, u1.lastname, u1.mobile, u1.mahalle, u1.cadde, u1.apartman, u1.daire, u1.kat, u.email FROM users u JOIN usersmeta u1 WHERE u.id=u1.uid AND u.id=$uid";
						$cres = mysqli_query($connection, $csql);
						if(mysqli_num_rows($cres) == 1){
							$cr = mysqli_fetch_assoc($cres);
							echo "<p>".$cr['firstname'] ." ". $cr['lastname'] ." / ".$cr['mobile'] .  "</p>";
							echo "<p>".$cr['mahalle'] ." Mah."." ". $cr['cadde'] ." Caddesi".  "</p>";
							echo "<p>".$cr['apartman'] ." ". "Kat:"." ".$cr['kat'] ." "."Daire:"." ".$cr['daire'] . "</p>";
							
						}
					?>
    </div>


</div>


<section id="content">

    <div class="container text-center font12 mt-5">

        <p class="h3 text-center">Sipariş Detay</p>
        <div class="col-md-12">

            <table class="container table cart mt-3">
                <thead>
                    <tr>
                        <th>Ürün Adı</th>
                        <th>Miktar</th>
                        <th>Tutar</th>

                        <th>Toplam Tutar</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

					if(isset($_GET['id']) & !empty($_GET['id'])){
						$oid = $_GET['id'];
					}else{
						header('location: my-account.php');
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
                            <a href="single.php?id=<?php echo $orditmr['pid']; ?>"><?php echo substr($orditmr['name'], 0, 25); ?></a>
                        </td>
                        <td>
                            <?php echo $orditmr['pquantity']; ?>
                        </td>
                        <td>
                            <?php echo $orditmr['productprice']; ?> ₺
                        </td>

                        <td>
                            <?php echo $orditmr['productprice']*$orditmr['pquantity']; ?> ₺
                        </td>
                    </tr>
                    
                    


                    <?php } ?>
                </tbody>
            </table>

            <div class="container text-center" style="line-height: 5px; float:left;">
                <p>Sepet Tutarı: <?php echo $ordr['totalprice']; ?> ₺</p>
                
                <p>Paket Ücreti: <?php echo $ordr['kargo']; ?> ₺ </p>
                
                 <p>Toplam Ödeme: <?php echo $ordr['totalson']; ?> ₺ </p>
                 
                   <p>Ödeme Tercihi: <?php echo $ordr['paymentmode']; ?> </p>

                <p>Sipariş Tarihi:  <?php 
                                    $tarih= date_create($ordr['timestamp']);

                                echo date_format($tarih, 'd-m-Y');
                                    
                                    ?> </p>
                                    
                                       <p>Sipariş Saati:  <?php 
                                    $tarih= date_create($ordr['timestamp']);

                                echo date_format($tarih, 'H:i');
                                    
                                    ?> </p>
              

              
            </div>









        </div>

    </div>
    
    

</section>






<?php include 'inc/footer.php' ?>
