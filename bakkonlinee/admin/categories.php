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
	<div class="content-blog">
		<div class="container admincat mt-5">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Kategori No</th>
						<th>Kategori Adı</th>
						<th>Güncelle</th>
					</tr>
				</thead>
				<tbody>
				<?php 	
					$sql = "SELECT * FROM category";
					$res = mysqli_query($connection, $sql); 
					while ($r = mysqli_fetch_assoc($res)) {
				?>
					<tr>
						<th scope="row"><?php echo $r['id']; ?></th>
						<td><?php echo $r['name']; ?></td>
						<td><a href="editcategory.php?id=<?php echo $r['id']; ?>">Düzenle</a> | <a href="delcategory.php?id=<?php echo $r['id']; ?>">Sil</a></td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
			
		</div>
	</div>

</section>
<?php include 'inc/footer.php' ?>
