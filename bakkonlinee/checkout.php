<?php
	ob_start();
	session_start();
	require_once 'config/connect.php';
	if(!isset($_SESSION['customer']) & empty($_SESSION['customer'])){
		header('location: register.php');
	}
include 'inc/header.php'; 
include 'inc/nav.php'; 
$uid = $_SESSION['customerid'];
$cart = $_SESSION['cart'];

if(isset($_POST) & !empty($_POST)){
	if($_POST['agree'] == true){
		$mahalle = filter_var($_POST['mahalle'], FILTER_SANITIZE_STRING);
		$fname = filter_var($_POST['fname'], FILTER_SANITIZE_STRING);
		$lname = filter_var($_POST['lname'], FILTER_SANITIZE_STRING);
		$cadde = filter_var($_POST['cadde'], FILTER_SANITIZE_STRING);
		$apartman = filter_var($_POST['apartman'], FILTER_SANITIZE_STRING);
		$daire = filter_var($_POST['daire'], FILTER_SANITIZE_STRING);
		$kat = filter_var($_POST['kat'], FILTER_SANITIZE_STRING);
        $kat2 = filter_var($_POST['kat2'], FILTER_SANITIZE_STRING);
		$phone = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
        $payment = filter_var($_POST['payment'], FILTER_SANITIZE_STRING);
        $kargo = filter_var($_POST['kargo'], FILTER_SANITIZE_STRING);
        $totalson = filter_var($_POST['totalson'], FILTER_SANITIZE_STRING);

		$sql = "SELECT * FROM usersmeta WHERE uid=$uid";
		$res = mysqli_query($connection, $sql);
		$r = mysqli_fetch_assoc($res);
		$count = mysqli_num_rows($res);
		if($count == 1){
			//update data in usersmeta table
			$usql = "UPDATE usersmeta SET kat2='$kat2' WHERE uid=$uid";
			$ures = mysqli_query($connection, $usql) or die(mysqli_error($connection));
			if($ures){

				$total = 0;
				foreach ($cart as $key => $value) {
					//echo $key . " : " . $value['quantity'] ."<br>";
					$ordsql = "SELECT * FROM products WHERE id=$key";
					$ordres = mysqli_query($connection, $ordsql);
					$ordr = mysqli_fetch_assoc($ordres);
       
					$total = $total + ($ordr['price']*$value['quantity']);
                    
				}

				echo $iosql = "INSERT INTO orders (uid, totalprice, kargo, totalson, orderstatus, paymentmode) VALUES ('$uid', '$total','$kargo', '$totalson' ,'Sipariş Oluşturuldu', '$payment')";
				$iores = mysqli_query($connection, $iosql) or die(mysqli_error($connection));
				if($iores){
					//echo "Order inserted, insert order items <br>";
					$orderid = mysqli_insert_id($connection);
					foreach ($cart as $key => $value) {
						//echo $key . " : " . $value['quantity'] ."<br>";
						$ordsql = "SELECT * FROM products WHERE id=$key";
						$ordres = mysqli_query($connection, $ordsql);
						$ordr = mysqli_fetch_assoc($ordres);

						$pid = $ordr['id'];
						$productprice = $ordr['price'];
						$quantity = $value['quantity'];


						$orditmsql = "INSERT INTO orderitems (pid, orderid, productprice, pquantity) VALUES ('$pid', '$orderid', '$productprice', '$quantity')";
						$orditmres = mysqli_query($connection, $orditmsql) or die(mysqli_error($connection));
						//if($orditmres){
							//echo "Order Item inserted redirect to my account page <br>";
						//}
					}
				}
				unset($_SESSION['cart']);
				header("location: orderok");
			}
		}else{
			//insert data in usersmeta table
			$isql = "INSERT INTO usersmeta (firstname, lastname, cadde, apartman, daire, kat, mahalle, mobile, uid) VALUES ('$fname', '$lname', '$cadde', '$apartman', '$daire', '$kat', '$mahalle', '$phone', '$uid')";
			$ires = mysqli_query($connection, $isql) or die(mysqli_error($connection));
			if($ires){

				$total = 0;
           
				foreach ($cart as $key => $value) {
					//echo $key . " : " . $value['quantity'] ."<br>";
					$ordsql = "SELECT * FROM products WHERE id=$key";
					$ordres = mysqli_query($connection, $ordsql);
					$ordr = mysqli_fetch_assoc($ordres);

					$total = $total + ($ordr['price']*$value['quantity']);
				}

				echo $iosql = "INSERT INTO orders (uid, totalprice, kargo, totalson, orderstatus, paymentmode) VALUES ('$uid', '$total', '$kargo', ''$totalson, 'Order Placed', '$payment')";
				$iores = mysqli_query($connection, $iosql) or die(mysqli_error($connection));
				if($iores){
					//echo "Order inserted, insert order items <br>";
					$orderid = mysqli_insert_id($connection);
					foreach ($cart as $key => $value) {
						//echo $key . " : " . $value['quantity'] ."<br>";
						$ordsql = "SELECT * FROM products WHERE id=$key";
						$ordres = mysqli_query($connection, $ordsql);
						$ordr = mysqli_fetch_assoc($ordres);

						$pid = $ordr['id'];
						$productprice = $ordr['price'];
						$quantity = $value['quantity'];


						$orditmsql = "INSERT INTO orderitems (pid, orderid, productprice, pquantity) VALUES ('$pid', '$orderid', '$productprice', '$quantity')";
						$orditmres = mysqli_query($connection, $orditmsql) or die(mysqli_error($connection));
						//if($orditmres){
							//echo "Order Item inserted redirect to my account page <br>";
						//}
					}
				}
				unset($_SESSION['cart']);
				header("location: my-account.php");
			}

		}
	}

}

$sql = "SELECT * FROM usersmeta WHERE uid=$uid";
$res = mysqli_query($connection, $sql);
$r = mysqli_fetch_assoc($res);
?>

<section id="content">
    <div class="container mt-5" style="font-size:14px;">
      

          
                <div class="container cart" style="line-height:5px;">
                   <span class="h4 mt-3">Adresim</span> <a href="edit-address"><span class="text-muted"> (Düzenle)</span></a>
                   <div class="mt-3">
                    <?php
						$csql = "SELECT u1.firstname, u1.lastname, u1.mobile, u1.mahalle, u1.cadde, u1.apartman, u1.daire, u1.kat, u.email FROM users u JOIN usersmeta u1 WHERE u.id=u1.uid AND u.id=$uid";
						$cres = mysqli_query($connection, $csql);
						if(mysqli_num_rows($cres) == 1){
							$cr = mysqli_fetch_assoc($cres);
							echo "<h5>".$cr['firstname'] ." ". $cr['lastname'] .  "</h5>";
                            echo "<p> ".$cr['mobile'] .  "</p>";
							echo "<p>".$cr['mahalle'] ." Mah."." ". $cr['cadde'] ." Caddesi".  "</p>";
							echo "<p>".$cr['apartman'] ." ". "Kat:"." ".$cr['kat'] ." "."Daire:"." ".$cr['daire'] . "</p>";
							
							
						}
					?>
                </div>
                </div>

  
                <div class="container cart">


                    <h4 class="mt-5">Sipariş Özeti</h4>
                     <table class="table col-md-12 mt-4 paymentcss" style="line-height:5px;">
                        <tbody>
                            <tr>
                                <th>Ürün Tutarı</th>
                                <td><span class="amount"> <?php echo $total; ?> ₺ <span></td>
                            </tr>
                            <tr>
                                <th>Paket Ücreti</th>
                                <td>
                                    <?php 
                                    
                                    if ($total<60){
                                        
                                       echo $kargo=2.50;
                                        
                                    }else{
                                       echo $kargo=0;
                                    };
                                
                                    ?> ₺
                                </td>
                            </tr>
                            <tr>
                                <th>Ödenecek Toplam</th>
                            
                                <td class="animate__animated animate__flash font20" ><strong><span class="amount"><?php echo $total=$total+$kargo; ?> ₺ </span></strong> </td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <p class="text-muted"><strong>Not:</strong> 60₺ ve üzeri siparişlerinizde paket ücretsizdir.</p>



                </div>





         <form method="post">

                <div class="container cart  mt-5 ">
                   
                      
                    <h4 class="heading">Ödeme Tercihi</h4>
                    <div class="clearfix space20"></div>

                    <div class="mt-3">
                        <div class="row">

                            <div class="col-md-6 paymentcss2">
                                <input name="payment" id="radio1"  type="radio" value="Kapıda Nakit"><span class="paymentcss"> Kapıda Nakit Ödeme</span>
                                <div class="space20"></div>

                            </div>
                            <div class="col-md-6 ">
                                <input name="payment" id="radio2"  type="radio" value="Kredi Kartı">
                                <span class="paymentcss2"> Kapıda Kredi Kartı Ödeme</span>
                                <div class="space20"></div>

                            </div>


                        </div>
                        <div class="space30"></div>

                        <input name="agree" required id="checkboxG2" class="mt-4" type="checkbox" value="true"><span> Alışveriş koşullarını <a href="#">okudum </a></span>

                        <div class="space30"></div>
                        <input type="submit" class="mt-4 btn btn-primary btn-lg btn-block" value="Sipariş Ver">
                    </div>
                </div>

            <input type="text" hidden name="kargo" value="<?php echo $kargo; ?>">
            <input type="text" hidden name="totalson" value="<?php echo $total ?>">
  
    </form>
   </div>
</section>
<!-- SHOP CONTENT -->
<?php include 'inc/footer.php' ?>
