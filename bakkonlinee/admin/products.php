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
	
		<div class="container mt-5">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Ürün No</th>
						<th>Ürün Adı</th>
						<th>Kategori Adı</th>
						<th>Küçük Resim</th>
						<th>İşlem</th>
					</tr>
				</thead>
				<tbody>
				<?php 	
					$sql = "SELECT * FROM products";
					$res = mysqli_query($connection, $sql); 
					while ($r = mysqli_fetch_assoc($res)) {
				?>
					<tr>
						<th scope="row"><?php echo $r['id']; ?></th>
						<td><?php echo $r['name']; ?></td>
						<td><?php echo $r['catid']; ?></td>
						<td><?php if($r['thumb']){ echo "Var";}else{echo "Yok";} ?></td>
						<td><a href="editproduct.php?id=<?php echo $r['id']; ?>">Düzenle</a> | <a href="delproduct.php?id=<?php echo $r['id']; ?>">Sil</a></td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
			
		</div>


</section>
<?php include 'inc/footer.php' ?>
