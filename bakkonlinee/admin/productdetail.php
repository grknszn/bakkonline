<?php
	session_start();
	require_once '../config/connect.php';
	if(!isset($_SESSION['email']) & empty($_SESSION['email'])){
		header('location: login.php');
	}
?>
<?php include 'inc/header.php'; ?>
<?php include 'inc/nav.php'; ?>
	
<div class="container"> 
<div class="row text-center mt-5" style="font-family: 'Righteous', cursive;"> 

        <div class="col-md-3 mb-3 zoom">
            <a href="addproduct.php"><img src="../admin/uploads/add.png" style="width:100px;"  alt="">
            <p>Ürün Ekle</p></a>
        </div>
        
      <div class="col-md-3 mb-3 zoom">
            <a href="products.php"><img src="../admin/uploads/view-details.png" style="width:100px;"  alt="">
            <p>Ürünleri Görüntüle</p></a>
        </div>
        


</div>

</div>

<?php include 'inc/footer.php' ?>