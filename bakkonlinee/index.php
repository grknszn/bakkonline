<?php 
session_start();
require_once 'config/connect.php';
include 'inc/header.php'; ?>
<?php include 'inc/nav.php'; ?>







<div class="text-center mt-3">



    <a href="index">
        <div class="h2 mt-5">Kategoriler</div>
    </a>
    <?php
							$catsql = "SELECT * FROM category";
							$catres = mysqli_query($connection, $catsql);
							while($catr = mysqli_fetch_assoc($catres)){
						 ?>
    <div class="mt-3 category nav-link animate__animated animate__pulse">
        <div><a href="index?id=<?php echo $catr['id']; ?>#products ">
                <img src="admin/<?php echo $catr['thumb']; ?>" class="catimg" alt=""> </a>
        </div>
        <div>
            <a href="index?id=<?php echo $catr['id']; ?>">
                <?php echo $catr['name']; ?></a>
        </div>



    </div>

    <?php } ?>

</div>


<!-- SHOP CONTENT -->


<section class="mt-3">

    <div id="products" class="container text-center mt-5">
        <h2>Ürünler</h2>




        <?php 
								$sql = "SELECT * FROM products";
								if(isset($_GET['id']) & !empty($_GET['id'])){
									$id = $_GET['id'];
									$sql .= " WHERE catid=$id";
								}
								

								$res = mysqli_query($connection, $sql);
								while($r = mysqli_fetch_assoc($res)){
							?>
        <div class="mb-3 p-1 prod mt-3">
            <form method="get" action="addtocart.php">


                <div class="">
                    <img src="admin/<?php echo $r['thumb']; ?>" class="pic" alt="">
                </div>
                
                <div class="divH">
                <p class="nametag"><?php echo $r['name']; ?>
         
                 </div>

                <p class="pricetag"><?php echo $r['price']; ?> TL<span></span></p>

                <div class="row mt-2">
                    <div class="col quanttag">
                        <input type="hidden" name="id" value="<?php echo $r['id']; ?>">
                        <div class="">
                            <a href="#" class="qty qty-minus"><img src="admin/uploads/minus.png" class="qty-minus2" alt=""></a>
                            <input type="numeric" name="quant" value="1" style="width:20px; border:none; text-align:center; font-weight:600;" />
                            <a href="#" class="qty qty-plus"><img src="admin/uploads/addbutton.png" class="qty-minus2" alt=""></a>
                        </div>
                    </div>
                    <div class="col mb-2">
                        <button class="btn sbag font-weight-bold animate__animated animate__tada" data-id="<?php echo $r['id']; ?>" data-name="<?php echo $r['name']; ?>" data-summary="summary 1" data-price="<?php echo $r['price']; ?>" data-quantity="1" data-image="<?php echo $r['thumb']; ?>"><i class="fa fa-shopping-basket" style="font-size:20px;"></i> </button>
                    </div>
                </div>

            </form>


        </div>
        <?php } ?>







        <div class="clearfix"></div>



    </div>

</section>



<?php include 'inc/footer.php' ?>
