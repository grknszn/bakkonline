<?php error_reporting(E_ALL ^ E_NOTICE); 
ob_start();
session_start();
$uid = $_SESSION['customerid'];
$cart = $_SESSION['cart'];
	
?>

<?php  if(!isset($_SESSION['customer']) & empty($_SESSION['customer'])){ ?>
<div class="container text-center pt-2">
    <p class="" style="font-family: 'Russo One', sans-serif; font-size:30px;">bakkonline.com</p>
    <p class="font12 text-muted" style="margin-top:-17px;">Edirne'nin online yerel bakkalı</p>
</div>
<div class="text-center bg-dark p-3">
    <a href="index"><img class="mr-3 navpic" src="admin/uploads/homepage1.png" alt=""></a>
    <a href="register"><img class="mr-3 navpic" src="admin/uploads/user.png" alt=""></a>
    <!--<a href="star"><img class="mr-3 navpic" src="admin/uploads/star.png" alt=""></a>-->
    <a href="location"><img class="mr-3 navpic" src="admin/uploads/location.png" alt=""></a>

    <?php $cart = $_SESSION['cart']; ?>
    <span class="" type="button" data-toggle="modal" data-target="#exampleModal"><img src="admin/uploads/groceries.png" class="navpic " alt=""><small class="header-xtra badge badge-success p-2"><?php echo count($cart); ?></small></span>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">


    <div class="modal-dialog">
        <div class="modal-body text-center">


            <div class="modal-content">
                <?php $cart = $_SESSION['cart']; ?>

                <div class="container text-center col-md-12 mt-3">
                    <span class="" type="button" data-toggle="modal" data-target="#exampleModal"><img src="admin/uploads/groceries.png" class="navpic" alt=""><small class="header-xtra badge badge-success p-2"><?php echo count($cart); ?></small></span>

                    <table class="table table-responsive mt-4 tablefont">

                        <thead>
                            <tr>
                                <th scope="col">Ürün</th>
                                <th scope="col">Ürün Adı</th>
                                <th scope="col">Miktar</th>
                                <th scope="col">Fiyat</th>
                                <th scope="col">Toplam</th>
                            </tr>
                        </thead>

                        <tbody class="">
                            <?php
					//print_r($cart);
				$total = 0;
					foreach ($cart as $key => $value) {
						//echo $key . " : " . $value['quantity'] ."<br>";
						$cartsql = "SELECT * FROM products WHERE id=$key";
						$cartres = mysqli_query($connection, $cartsql);
						$cartr = mysqli_fetch_assoc($cartres);

					
				 ?>
                            <tr class="text-center" style="font-weight:600;">
                                <td>
                                    <img src="admin/<?php echo $cartr['thumb']; ?>" width="50" alt="" />
                                </td>

                                <td>
                                     <div><?php echo substr($cartr['name'], 0 , 30); ?> </div>
                                </td>

                                <td>
                                    <div class="quantity"><?php echo $value['quantity']; ?> </div>
                                </td>
                                <td>
                                    <span class="amount"> <?php echo $cartr['price']; ?></span>
                                </td>
                                <td>
                                    <span class="amount"> <?php echo ($cartr['price']*$value['quantity']); ?> ₺</span>
                                </td>
                            </tr>
                            <?php $total = $total + ($cartr['price']*$value['quantity']); } ?>
                            <tr>

                            </tr>
                        </tbody>
                    </table>

                    <div class="animate__animated animate__fadeInDown">
                        <span class="font20">Toplam : </span>
                        <span class="font20 text-center "><?php echo $total; ?> ₺</span>
                    </div>
                    <div class="mt-3 mb-3">
                        <button type="button" class="btn btn-success"><a href="cart.php" style="color:#fff;">Sepete Git</a></button>
                        <button type="button" class="btn btn-primary"><a href="checkout.php" style="color:#fff;">Sipariş Ver</a></button>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>




<?php  } else { ?>

<!-- Kullanıcının adını çekmek için kullandığım kodlar  -->
<?php
$csql = "SELECT u1.firstname FROM users u JOIN usersmeta u1 WHERE u.id=u1.uid AND u.id=$uid";
$cres = mysqli_query($connection, $csql);
if(mysqli_num_rows($cres) == 1){
$cr = mysqli_fetch_assoc($cres);
}
?>


<?php $cart = $_SESSION['cart']; ?>
<div class="text-center greeting p-2">
    <span style="font-size:20px;cursor:pointer" onclick="openNav()">Merhaba, <?php echo $cr['firstname'];  ?> </span>
   
</div>
<div class="text-center mt-3 bg-dark pt-3 pb-3 page-nav ">
    <div id="YanMenu" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
            &times;</a>
        <a href="adres-gor"><img class="mr-3 navpic" src="admin/uploads/location.png" alt="">Adresim</a>
        <a href="my-account"><img class="mr-3 navpic" src="admin/uploads/checklist.png" alt="">Siparişlerim</a>
        <a href="https://wa.me/+9005445767012 "><img class="mr-3 navpic" src="admin/uploads/whatsapp.png" alt="">Bize Ulaşın</a>
        <a href="logout"><img class="mr-3 navpic " src="admin/uploads/exit2.png" alt="Çıkış">Çıkış Yap</a>
    </div>
     <span class="text-muted" style="cursor:pointer" onclick="openNav()"> <img class="navpic mr-3" src="admin/uploads/setting.png" alt=""></span>
    <a href="index"><img class="mr-3 navpic" src="admin/uploads/homepage1.png" alt=""></a>
   <!-- <a href="star.php"><img class="mr-3 navpic" src="admin/uploads/star.png" alt=""></a>-->
    <?php $cart = $_SESSION['cart']; ?>
    <span class="" type="button" data-toggle="modal" data-target="#exampleModal"><img src="admin/uploads/groceries.png" class="navpic " alt=""><small class="header-xtra badge badge-success p-2"><?php echo count($cart); ?></small></span>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">


    <div class="modal-dialog">
        <div class="modal-body text-center">


            <div class="modal-content">
                <?php $cart = $_SESSION['cart']; ?>

                <div class="container text-center col-md-12 mt-3">
                    <span class="" type="button" data-toggle="modal" data-target="#exampleModal"><img src="admin/uploads/groceries.png" class="navpic" alt=""><small class="header-xtra badge badge-success p-2"><?php echo count($cart); ?></small></span>

                    <table class="table table-responsive mt-4 tablefont">

                        <thead>
                            <tr>
                                <th scope="col">Ürün</th>
                                <th scope="col">Ürün Adı</th>
                                <th scope="col">Miktar</th>
                                <th scope="col">Fiyat</th>
                                <th scope="col">Toplam</th>
                            </tr>
                        </thead>

                        <tbody class="">
                            <?php
					//print_r($cart);
				$total = 0;
					foreach ($cart as $key => $value) {
						//echo $key . " : " . $value['quantity'] ."<br>";
						$cartsql = "SELECT * FROM products WHERE id=$key";
						$cartres = mysqli_query($connection, $cartsql);
						$cartr = mysqli_fetch_assoc($cartres);

					
				 ?>
                            <tr class="text-center" style="font-weight:600;">
                                <td>
                                    <img src="admin/<?php echo $cartr['thumb']; ?>" width="50" alt="" />
                                </td>

                                <td>
                                   <div><?php echo substr($cartr['name'], 0 , 30); ?> </div>
                                </td>

                                <td>
                                    <div class="quantity"><?php echo $value['quantity']; ?> </div>
                                </td>
                                <td>
                                    <span class="amount"> <?php echo $cartr['price']; ?></span>
                                </td>
                                <td>
                                    <span class="amount"> <?php echo ($cartr['price']*$value['quantity']); ?> ₺</span>
                                </td>
                            </tr>
                            <?php $total = $total + ($cartr['price']*$value['quantity']); } ?>
                            <tr>

                            </tr>
                        </tbody>
                    </table>

                    <div class="animate__animated animate__fadeInDown">
                        <span class="font20">Toplam : </span>
                        <span class="font20 text-center "><?php echo $total; ?> ₺</span>
                    </div>
                    <div class="mt-3 mb-3">
                        <button type="button" class="btn btn-success"><a href="cart" style="color:#fff;">Sepete Git</a></button>
                        <button type="button" class="btn btn-primary"><a href="checkout" style="color:#fff;">Sipariş Ver</a></button>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>


<?php  } ?>



</header>
