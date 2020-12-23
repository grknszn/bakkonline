<?php 
ob_start();
session_start();
require_once 'config/connect.php';
include 'inc/header.php'; 
include 'inc/nav.php'; 

if(isset($_GET['id']) & !empty($_GET['id'])){
	$id = $_GET['id'];
	$prodsql = "SELECT * FROM products WHERE id=$id";
	$prodres = mysqli_query($connection, $prodsql);
	$prodr = mysqli_fetch_assoc($prodres);
}else{
	header('location: index');
}

$uid = $_SESSION['customerid'];
if(isset($_POST) & !empty($_POST)){
	
	$review = filter_var($_POST['review'], FILTER_SANITIZE_STRING);

	$revsql = "INSERT INTO reviews (pid, uid, review) VALUES ($id, $uid, '$review')";
	$revres = mysqli_query($connection, $revsql);
	if($revres){
		$smsg = "Review Submitted Successfully";
	}else{
		$fmsg = "Failed to Submit Review";
	}
}

?>

<!-- SHOP CONTENT -->
<section>
      

    <div class="container my-5">
        <div class="row">



            <div class="col-md-12">
                <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
                <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
                <div class="row">
                    <div class="col-md-5">

                        <div class="text-center ">

                            <img class="singlepr" src="admin/<?php echo $prodr['thumb']; ?>" alt="" />

                        </div>

                        <div class="clearfix"></div>

                    </div>
                    <div class="col-md-7">

                        <div class="nametag">
                            <span>Kategori:
                                <?php 
								$prodcatsql = "SELECT * FROM category WHERE id={$prodr['catid']}"; 
								$prodcatres = mysqli_query($connection, $prodcatsql);
								$prodcatr = mysqli_fetch_assoc($prodcatres);
                                
                                
								?>
                                <a href="#"><?php echo $prodcatr['name']; ?></a></span><br>
                        </div>
                        <h2 class="nametag mt-3"><?php echo $prodr['name']; ?></h2>
                        <div class="space10"></div>
                        <div class="pricetag"> <?php echo $prodr['price']; ?> ₺ </div>
                        <p><?php echo $prodr['description']; ?></p>
                        
                       
                        <form method="get" action="addtocart.php">
                            
                       

                            <div class="">
                                <a href="#" class="qty qty-minus"><img src="admin/uploads/minus.png" class="qty-minus2" alt=""></a>
                                <input type="numeric" name="quant" value="<?php echo $_GET['prquant']; ?>" style="width:20px; border:none; text-align:center; font-weight:600;" />
                                <a href="#" class="qty qty-plus"><img src="admin/uploads/addbutton.png" class="qty-minus2" alt=""></a>
                            </div>

                        
                        
                            <div class="mt-5">
                               <input type="hidden" name="id" value="<?php echo $prodr['id']; ?>">
                                <input type="submit" class="btn btn-success" value="Sepeti Güncelle">
                            </div>
                        </form>


                    </div>
                </div>
                <div class="clearfix space30"></div>
                <div class="tab-style3">

                    <div class="space30"></div>


                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'inc/footer.php' ?>
