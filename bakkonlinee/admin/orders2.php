<?php
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
			<table class="table table-bordered">
				<thead>
					<tr>
						<th scope="col">Sipariş No</th>
						
						<th scope="col">Toplam Tutar</th>
					
					
						<th scope="col">Sipariş Tarihi</th>
							<th scope="col">İşlemler</th>
						<th scope="col">Sipariş Detay</th>
					</tr>
				</thead>
				<tbody>
				<?php 	
					$sql = "SELECT o.id, o.totalprice, o.orderstatus, o.paymentmode, o.`timestamp`, u.firstname, u.lastname FROM orders o JOIN usersmeta u WHERE o.uid=u.uid ORDER BY o.id DESC";
					$res = mysqli_query($connection, $sql); 
					while ($r = mysqli_fetch_assoc($res)) {
				?>
					<tr>
						<th scope="row"><?php echo $r['id']; ?></th>
					
						<td><?php echo $r['totalprice']; ?></td>
					
				
						<td><?php echo $r['timestamp']; ?></td>
							<td><a style="color:red;" href="order-process.php?id=<?php echo $r['id']; ?>">Siparişi Düzenle</a></td>
						<td><a href="order-detail-review.php?id=<?php echo $r['id']; ?>&uid=<?php echo $r['uid']; ?>">Görüntüle</a></td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
			
		</div>


</section>
<?php include 'inc/footer.php' ?>