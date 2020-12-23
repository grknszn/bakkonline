<?php 
	ob_start();
	session_start();
	require_once 'config/connect.php';
	if(!isset($_SESSION['customer']) & empty($_SESSION['customer'])){
		header('location: login');
	}

include 'inc/header.php'; 
include 'inc/nav.php'; 
$uid = $_SESSION['customerid'];
$cart = $_SESSION['cart'];
?>

<!-- SHOP CONTENT -->
<section id="content">
  
        <div class="container cart">
            <div class="row">
                <div class="page_header text-center">

                </div>
                <div class="col-md-12 mt-5">

                    <h3>Siparişlerim</h3>
                    <br>
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th>Sipariş No</th>
                                <th>Sipariş Tarihi</th>
                           
                           
                                <th>Alışveriş Tutarı</th>
                                <th>Paket Ücreti</th>
                                <th>İşlem</th>
                            </tr>
                        </thead>
                        <tbody class="paymentcss3">

                            <?php
					$ordsql = "SELECT * FROM orders WHERE uid='$uid' ORDER BY id DESC ";
					$ordres = mysqli_query($connection, $ordsql);
					while($ordr = mysqli_fetch_assoc($ordres)){
				?>
                            <tr>
                                <td>
                                    <?php echo $ordr['id']; ?>
                                </td>
                                <td>
                                    <?php 
                                    $tarih= date_create($ordr['timestamp']);

                                echo date_format($tarih, 'd-m-Y ');
                                    
                                    ?>
                                </td>
                              
                             
                                <td>
                                    <?php echo $ordr['totalprice']; ?>₺
                                </td>
                                 <td>
                                    <?php echo $ordr['kargo']; ?>₺
                                </td>
                                <td style="width:80px;">
                                    <a href="view-order?id=<?php echo $ordr['id']; ?>"><img src="admin/uploads/visibility.png" style="width:20px;" alt=""></a>
                                    <?php if($ordr['orderstatus'] != 'Cancelled'){?>
                                    | <a href="cancel-order?id=<?php echo $ordr['id']; ?>"><img src="admin/uploads/remove.png" style="width:16px;" alt=""></a>
                                    <?php } ?>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                    <br>
                    <br>
                    <br>

                    <div class="ma-address">



                       



                    </div>

                </div>
            </div>
        </div>

</section>

<?php include 'inc/footer.php' ?>
