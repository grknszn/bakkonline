<?php error_reporting(E_ALL ^ E_NOTICE); 
ob_start();
session_start();
$uid = $_SESSION['customerid'];
$cart = $_SESSION['cart'];
	
?>

<?php  if(!isset($_SESSION['customer']) & empty($_SESSION['customer'])){ ?>







<?php  } else { ?>

<div class="container text-center">
    <p style="font-family: 'Fugaz One', cursive; font-size:30px;">bakkonline.com</p>
    <p class="font12 text-muted" style="margin-top:-15px;">Şimdilik sadece Edirne'de, belli bölgelerde !</p>
</div>
<div class="text-center">
    

    <a href="#"><img class="mr-3 navpic" src="admin/uploads/location" alt=""></a>

   
</div>





<?php  } ?>



</header>
