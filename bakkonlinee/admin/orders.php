

<?php
    header("Refresh: 60;");
	session_start();
	require_once '../config/connect.php';
	if(!isset($_SESSION['email']) & empty($_SESSION['email'])){
		header('location: login.php');
	}
?>
<?php include 'inc/header.php'; ?>
<?php include 'inc/nav.php'; ?>

<section id="content">

    <div class="container mt-5" style="font-size:10px;">
       <div class="col-md-12">
            <?php
             $simdiki_tarih = date('Hi', time());
            echo $simdiki_tarih.'<br> <br>';

            $sorgu = "SELECT * FROM orders ORDER BY id DESC LIMIT 1";
                $sonuc = mysqli_query($connection, $sorgu);
                while ($yaz = mysqli_fetch_assoc($sonuc)) {
                    $son_siparis_tarihi = $yaz['timestamp'][11].$yaz['timestamp'][12].$yaz['timestamp'][14].$yaz['timestamp'][15];
                }

                echo $son_siparis_tarihi.'<br>';

                $tarih_sonuc = $simdiki_tarih - $son_siparis_tarihi;
                //echo $tarih_sonuc;
                if($tarih_sonuc <= 1){

                    echo '

    <audio
         loop autoplay
        src="http://bakkonline.com/admin/notifiy.mp3">
    </audio>
';
                }
            ?>
        </div>


        <table  class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Sipariş No</th>
                    <th scope="col">Müşteri Adı</th>
                    <th scope="col">User id</th>
                    <th scope="col">Toplam Tutar <br> (Paket dahil)</th>
                    <th scope="col">Sipariş Durumu</th>
                    <th scope="col">Ödeme Şekli</th>
                    <th scope="col">Sipariş Tarihi</th>
                    <th scope="col">İşlemler</th>
                    <th scope="col">Sipariş Detay</th>
                </tr>
            </thead>
            <tbody>
                <?php
					$sql = "SELECT o.id, o.totalson, o.orderstatus, o.paymentmode, o.`timestamp`, u.firstname, u.lastname, u.uid FROM orders o JOIN usersmeta u WHERE o.uid=u.uid ORDER BY o.id DESC";
					$res = mysqli_query($connection, $sql);
					while ($r = mysqli_fetch_assoc($res)) {
				?>
                <tr>
                    <th scope="row"><?php echo $r['id']; ?></th>
                    <td><?php echo $r['firstname']. " " . $r['lastname']; ?></td>
                    <td><?php echo $r['uid']; ?></td>
                    <td><?php echo $r['totalson']; ?></td>
                    <td><?php echo $r['orderstatus']; ?></td>
                    <td><?php echo $r['paymentmode']; ?></td>
                    <td><?php echo  $r['timestamp']; ?></td>
                    <td><a href="order-process.php?id=<?php echo $r['id']; ?>">Siparişi Düzenle</a></td>
                    <td><a href="order-detail-review.php?id=<?php echo $r['id']; ?>&uid=<?php echo $r['uid']; ?>">Görüntüle</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>


</section>
<?php include 'inc/footer.php' ?>
