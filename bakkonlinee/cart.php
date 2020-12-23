<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
require_once 'config/connect.php';
include 'inc/header.php'; 
include 'inc/nav.php'; 
$cart = $_SESSION['cart'];
?>


<!-- SHOP CONTENT -->
<section id="content">

    <div class="container cart mt-5">
        <div class="row">
            <div class="container text-center">
                <h2>Sepetim</h2>


            </div>
            <div class="container text-center col-md-12 mt-3">

                <table class="table ">

                    <thead>
                        <tr>
                            <th scope="col">Sil</th>
                            <th scope="col">Ürün</th>
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
                                <a class="remove" href="delcart?id=<?php echo $key; ?>"><i class="trashpic far fa-trash-alt"></i></a>
                            </td>

                            <td>
                                <a href="single?id=<?php echo $cartr['id']; ?>&prquant=<?php echo $value['quantity'];  ?>"><?php echo substr($cartr['name'], 0 , 30); ?></a>
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

            </div>

            <div class="container text-center mt-5">
                <!-- <button class="button btn-md" type="submit">Update Cart</button> -->
                <a href="index" class="btn btn-sm btn-danger">Alışverişe Devam</a>
                <a href="checkout" class="btn btn-sm btn-success">Sipariş Ver</a>

            </div>



        </div>





    </div>




</section>
<?php include 'inc/footer.php' ?>
