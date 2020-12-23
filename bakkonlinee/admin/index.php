<?php
	session_start();
	require_once '../config/connect.php';
	if(!isset($_SESSION['email']) & empty($_SESSION['email'])){
		header('location: login.php');
	}
?>
<?php include 'inc/header.php'; ?>

<?php include 'inc/nav.php'; ?>

<!-- SHOP CONTENT -->
<section id="content">

    <div class="container">



<div class="row text-center mt-5" style="font-family: 'Righteous', cursive;"> 

        <div class="col-md-3 mb-3 zoom">
            <a href="orders.php"><img src="../admin/uploads/shopping-bag.png" style="width:100px;"  alt="">
            <p>SİPARİŞLER</p></a>
        </div>
        
      <div class="col-md-3 mb-3 zoom">
            <a href="categorydetail.php"><img src="../admin/uploads/list.png" style="width:100px;"  alt="">
            <p>KATEGORİLER</p></a>
        </div>
         <div class="col-md-3 mb-3 zoom">
            <a href="productdetail.php"><img src="../admin/uploads/dairy-products.png" style="width:100px;"  alt="">
            <p>ÜRÜNLER</p></a>
        </div>
        
      <div class="col-md-3 mb-3 zoom">
            <img src="../admin/uploads/customer.png" style="width:100px;"  alt="">
            <p>MÜŞTERİLER</p>
        </div>



</div>


    </div>

</section>
<?php include 'inc/footer.php' ?>
